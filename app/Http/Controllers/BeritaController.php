<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\KategoriBerita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use HTMLPurifier;
use HTMLPurifier_Config;

class BeritaController extends Controller
{
    public function __construct()
    {
        // Tambahkan middleware auth agar semua fungsi diakses hanya oleh pengguna yang sudah login
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
    // Validate the input
    $validated = $request->validate([
        'judul' => 'required|string|max:255',
        'isi' => 'required',
        'isi_p' => 'nullable|string',  // Adding validation for 'isi_p'
        'tanggal' => 'required|date',
        'kategori_id' => 'required|exists:kategori_berita,id',
        'gambar' => 'nullable|image|max:2048', // Validate image
    ]);

    // Sanitize 'isi' using HTMLPurifier
    $config = HTMLPurifier_Config::createDefault();
    $purifier = new HTMLPurifier($config);
    $validated['isi'] = $purifier->purify($request->input('isi'));

    // Sanitize 'isi_p' using HTMLPurifier if it's provided
    if ($request->has('isi_p')) {
        $validated['isi_p'] = $purifier->purify($request->input('isi_p'));
    }

    // Get the selected category name
    $kategori = KategoriBerita::find($validated['kategori_id']);
    $validated['kategori_nama'] = $kategori->nama_kategori;

    // Handle file upload for 'gambar'
    if ($request->hasFile('gambar')) {
        // Store the image in storage/app/public/gambar
        $gambarPath = $request->file('gambar')->store('gambar', 'public');
        $validated['gambar'] = $gambarPath; // Store the relative path
    }

    // Set 'users_id' and 'author' from the authenticated user
    $validated['users_id'] = Auth()->id();
    $validated['author'] = auth()->user()->name;

    // Create and save a new Berita instance
    $berita = new Berita();
    $berita->judul = $validated['judul'];
    $berita->isi = $validated['isi'];
    $berita->isi_p = $validated['isi_p'] ?? null;  // Ensure 'isi_p' is nullable
    $berita->tanggal = $validated['tanggal'];
    $berita->kategori_id = $validated['kategori_id'];
    $berita->kategori_nama = $validated['kategori_nama'];
    $berita->gambar = $validated['gambar'] ?? null;
    $berita->users_id = $validated['users_id'];
    $berita->author = $validated['author'];

    // Save the Berita entry
    $berita->save();

    // Redirect with success message
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
    // Validate the input
    $validated = $request->validate([
        'judul' => 'required|string|max:255',
        'isi' => 'required',
        'isi_p' => 'nullable|string',  // Adding validation for 'isi_p'
        'tanggal' => 'required|date',
        'kategori_id' => 'required|exists:kategori_berita,id',
        'gambar' => 'nullable|image|max:2048', // Validate image
    ]);

    // Sanitize 'isi' using HTMLPurifier
    $config = HTMLPurifier_Config::createDefault();
    $purifier = new HTMLPurifier($config);
    $validated['isi'] = $purifier->purify($request->input('isi'));

    // Sanitize 'isi_p' using HTMLPurifier if it's provided
    if ($request->has('isi_p')) {
        $validated['isi_p'] = $purifier->purify($request->input('isi_p'));
    }

    // Get the category name
    $kategori = KategoriBerita::find($validated['kategori_id']);
    $validated['kategori_nama'] = $kategori->nama_kategori;

    // Handle file upload for 'gambar'
    if ($request->hasFile('gambar')) {
        // Delete old image if it exists
        if ($berita->gambar) {
            Storage::disk('public')->delete($berita->gambar);
        }

        // Store the new image
        $gambarPath = $request->file('gambar')->store('gambar', 'public');
        $validated['gambar'] = $gambarPath;
    }

    // Update berita
    $berita->update($validated);

    // Redirect to berita index with a success message
    return redirect()->route('berita.index')->with('success', 'Berita berhasil diperbarui');
}


    public function destroy(Berita $berita)
    {
        // Hapus berita
        $berita->delete();

        // Redirect ke index berita dengan pesan sukses
        return redirect()->route('berita.index')->with('success', 'Berita berhasil dihapus');
    }
}
