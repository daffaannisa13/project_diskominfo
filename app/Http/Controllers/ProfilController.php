<?php

namespace App\Http\Controllers;

use App\Models\Profil;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use HTMLPurifier;
use HTMLPurifier_Config;

class ProfilController extends Controller
{
    public function index()
{
    $profils = Profil::paginate(10);  // Adjust the number as needed
    return view('profil.index', compact('profils'));
}


    public function create()
    {
        return view('profil.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul_profil' => 'required|string|max:255',
            'isi_profil' => 'required|string',
            'upload_gambar' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
            'file' => 'nullable|file|mimes:pdf,doc,docx|max:2048',
        ]);

        // Sanitize 'isi_profil' using HTMLPurifier
        $config = HTMLPurifier_Config::createDefault();
        $purifier = new HTMLPurifier($config);
        $validated['isi_profil'] = $purifier->purify($request->isi_profil);

        // Handle file upload for image
        if ($request->hasFile('upload_gambar')) {
            $validated['upload_gambar'] = $request->file('upload_gambar')->store('profil/upload_gambar', 'public');
        }

        // Handle file upload for other file types
        if ($request->hasFile('file')) {
            $validated['file'] = $request->file('file')->store('profil/files', 'public');
        }

        // Create the profile with sanitized data
        Profil::create($validated);

        return redirect()->route('profil.index')->with('success', 'Profil berhasil ditambahkan');
    }

    public function show(Profil $profil)
    {
        return view('profil.show', compact('profil'));
    }

    public function edit(Profil $profil)
    {
        return view('profil.edit', compact('profil'));
    }

    public function update(Request $request, Profil $profil)
    {
        $validated = $request->validate([
            'judul_profil' => 'required|string|max:255',
            'isi_profil' => 'required|string',
            'upload_gambar' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
            'file' => 'nullable|file|mimes:pdf,doc,docx|max:2048',
        ]);

        // Sanitize 'isi_profil' using HTMLPurifier
        $config = HTMLPurifier_Config::createDefault();
        $purifier = new HTMLPurifier($config);
        $validated['isi_profil'] = $purifier->purify($request->isi_profil);

        // Handle file upload for image
        if ($request->hasFile('upload_gambar')) {
            if ($profil->upload_gambar) {
                Storage::disk('public')->delete($profil->upload_gambar);
            }
            $validated['upload_gambar'] = $request->file('upload_gambar')->store('profil/upload_gambar', 'public');
        } else {
            $validated['upload_gambar'] = $profil->upload_gambar;
        }

        // Handle file upload for other file types
        if ($request->hasFile('file')) {
            if ($profil->file) {
                Storage::disk('public')->delete($profil->file);
            }
            $validated['file'] = $request->file('file')->store('profil/files', 'public');
        } else {
            $validated['file'] = $profil->file;
        }

        // Update the profile with validated data
        $profil->update($validated);

        return redirect()->route('profil.index')->with('success', 'Profil berhasil diperbarui');
    }

    public function destroy(Profil $profil)
    {
        if ($profil->upload_gambar) {
            Storage::disk('public')->delete($profil->upload_gambar);
        }

        if ($profil->file) {
            Storage::disk('public')->delete($profil->file);
        }

        $profil->delete();

        return redirect()->route('profil.index')->with('success', 'Profil berhasil dihapus');
    }
}
