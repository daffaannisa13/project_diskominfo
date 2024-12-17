<?php

namespace App\Http\Controllers;

use App\Models\Layanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use HTMLPurifier;
use HTMLPurifier_Config;

class LayananController extends Controller
{
    public function index()
    {
        $layanans = Layanan::all();
        return view('layanan.index', compact('layanans'));
    }

    public function create()
    {
        return view('layanan.create');
    }

  public function store(Request $request)
{
    $validated = $request->validate([
        'judul_layanan' => 'required|string|max:255',
        'isi_layanan' => 'required|string',
        'upload_gambar' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
        'file' => 'nullable|mimes:pdf,doc,docx|max:2048',
    ]);

    // Sanitize isi_layanan
    $config = HTMLPurifier_Config::createDefault();
    $purifier = new HTMLPurifier($config);
    $validated['isi_layanan'] = $purifier->purify($request->isi_layanan);

    // Handle file upload
    if ($request->hasFile('upload_gambar')) {
        $validated['upload_gambar'] = $request->file('upload_gambar')->store('layanan/images', 'public');
    }
    if ($request->hasFile('file')) {
        $validated['file'] = $request->file('file')->store('layanan/files', 'public');
    }

    Layanan::create($validated);

    return redirect()->route('layanan.index')->with('success', 'Layanan berhasil ditambahkan');
}



    public function show(Layanan $layanan)
    {
        return view('layanan.show', compact('layanan'));
    }

    public function edit(Layanan $layanan)
    {
        return view('layanan.edit', compact('layanan'));
    }

  public function update(Request $request, Layanan $layanan)
{
    $validated = $request->validate([
        'judul_layanan' => 'required|string|max:255',
        'isi_layanan' => 'required|string',
        'upload_gambar' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
        'file' => 'nullable|mimes:pdf,doc,docx|max:2048',
    ]);

    // Sanitize isi_layanan
    $config = HTMLPurifier_Config::createDefault();
    $purifier = new HTMLPurifier($config);
    $validated['isi_layanan'] = $purifier->purify($request->isi_layanan);

    // Update file if uploaded
    if ($request->hasFile('upload_gambar')) {
        if ($layanan->upload_gambar) {
            Storage::disk('public')->delete($layanan->upload_gambar);
        }
        $validated['upload_gambar'] = $request->file('upload_gambar')->store('layanan/images', 'public');
    }

    if ($request->hasFile('file')) {
        if ($layanan->file) {
            Storage::disk('public')->delete($layanan->file);
        }
        $validated['file'] = $request->file('file')->store('layanan/files', 'public');
    }

    $layanan->update($validated);

    return redirect()->route('layanan.index')->with('success', 'Layanan berhasil diperbarui');
}

    public function destroy(Layanan $layanan)
    {
        if ($layanan->file) {
            \Storage::disk('public')->delete($layanan->file);
        }
        
        $layanan->delete();
        return redirect()->route('layanan.index')->with('success', 'Layanan berhasil dihapus');
    }
}
