<?php

// app/Http/Controllers/GambarController.php

namespace App\Http\Controllers;

use App\Models\Gambar;
use App\Models\KategoriGambar;
use Illuminate\Http\Request;

class GambarController extends Controller
{
    public function index()
    {
        $gambars = Gambar::all();
        return view('gambar.index', compact('gambars'));
    }

    public function create()
    {
        
        $kategori = KategoriGambar::all();

    // Pass the categories and the logged-in user ID to the view
    $userId = auth()->user()->id;

    return view('gambar.create', compact('kategori', 'userId'));

    }
    

    public function store(Request $request)
    {
        $validated = $request->validate([
            'url' => 'required|url',
            'kategori_id' => 'required|exists:kategori_gambar,id',
            'users_id' => 'required|exists:users,id',
        ]);

        Gambar::create($validated);

        return redirect()->route('gambar.index')->with('success', 'Gambar berhasil ditambahkan');
    }

    public function show(Gambar $gambar)
    {
        return view('gambar.show', compact('gambar'));
    }

    public function edit(Gambar $gambar)
    {
        $kategori = KategoriGambar::all();

        // Pass the categories and the logged-in user ID to the view
        $userId = auth()->user()->id;
    
        return view('gambar.edit', compact('gambar','kategori', 'userId'));
    }

    public function update(Request $request, Gambar $gambar)
    {
        $validated = $request->validate([
            'url' => 'required|url',
            'kategori_id' => 'required|exists:kategori_gambar,id',
            'users_id' => 'required|exists:users,id',
        ]);

        $gambar->update($validated);

        return redirect()->route('gambar.index')->with('success', 'Gambar berhasil diperbarui');
    }

    public function destroy(Gambar $gambar)
    {
        $gambar->delete();

        return redirect()->route('gambar.index')->with('success', 'Gambar berhasil dihapus');
    }
}