<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\KategoriBerita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use HTMLPurifier;
use HTMLPurifier_Config;

class BeritaController extends Controller
{
    public function __construct()
    {
        // Pastikan hanya pengguna yang login dapat mengakses semua fungsi
        $this->middleware('auth');
    }

    public function index()
    {
        $beritas = Berita::all();
        return view('berita.index', compact('beritas'));
    }

    public function create()
    {
        $kategoriBerita = KategoriBerita::all();
        return view('berita.create', compact('kategoriBerita'));
    }

    public function store(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'judul' => 'required|string|max:255',
            'isi' => 'required',
            'tanggal' => 'required|date',
            'kategori_id' => 'required|exists:kategori_berita,id',
            'gambar' => 'nullable|image|max:2048',
            'author' => 'required|string|max:255', // Validasi author
        ]);

        // Sanitasi 'isi' menggunakan HTMLPurifier
        $config = HTMLPurifier_Config::createDefault();
        $purifier = new HTMLPurifier($config);
        $validated['isi'] = $purifier->purify($request->input('isi'));

        // Ambil nama kategori berdasarkan kategori_id
        $kategori = KategoriBerita::find($validated['kategori_id']);
        $validated['kategori_nama'] = $kategori->nama_kategori;

        // Upload file gambar jika ada
        if ($request->hasFile('gambar')) {
            $gambarPath = $request->file('gambar')->store('gambar', 'public');
            $validated['gambar'] = $gambarPath;
        }

        // Simpan berita
        Berita::create($validated);

        // Redirect dengan pesan sukses
        return redirect()->route('berita.index')->with('success', 'Berita berhasil ditambahkan');
    }

    public function show(Berita $berita)
    {
        return view('berita.show', compact('berita'));
    }

    public function edit(Berita $berita)
    {
        $kategoriBerita = KategoriBerita::all();
        return view('berita.edit', compact('berita', 'kategoriBerita'));
    }

    public function update(Request $request, Berita $berita)
    {
        // Validasi input
        $validated = $request->validate([
            'judul' => 'required|string|max:255',
            'isi' => 'required',
            'tanggal' => 'required|date',
            'kategori_id' => 'required|exists:kategori_berita,id',
            'gambar' => 'nullable|image|max:2048',
            'author' => 'required|string|max:255', // Validasi author
        ]);

        // Sanitasi 'isi' menggunakan HTMLPurifier
        $config = HTMLPurifier_Config::createDefault();
        $purifier = new HTMLPurifier($config);
        $validated['isi'] = $purifier->purify($request->input('isi'));

        // Ambil nama kategori berdasarkan kategori_id
        $kategori = KategoriBerita::find($validated['kategori_id']);
        $validated['kategori_nama'] = $kategori->nama_kategori;

        // Update gambar jika ada file baru
        if ($request->hasFile('gambar')) {
            if ($berita->gambar) {
                Storage::disk('public')->delete($berita->gambar);
            }

            $gambarPath = $request->file('gambar')->store('gambar', 'public');
            $validated['gambar'] = $gambarPath;
        }

        // Update berita
        $berita->update($validated);

        // Redirect dengan pesan sukses
        return redirect()->route('berita.index')->with('success', 'Berita berhasil diperbarui');
    }

    public function destroy(Berita $berita)
    {
        if ($berita->gambar) {
            Storage::disk('public')->delete($berita->gambar);
        }

        $berita->delete();

        return redirect()->route('berita.index')->with('success', 'Berita berhasil dihapus');
    }
}
