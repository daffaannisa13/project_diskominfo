<?php

namespace App\Http\Controllers;

use App\Models\Bidang;
use Illuminate\Http\Request;

class BidangController extends Controller
{
    public function index()
    {
        $bidangs = Bidang::all();
        return view('bidang.index', compact('bidangs'));
    }

    public function create()
    {
        return view('bidang.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_bidang' => 'required|string|max:255',
        ]);

        Bidang::create($request->all());
        return redirect()->route('bidang.index')->with('success', 'Bidang created successfully.');
    }

    public function show(Bidang $bidang)
    {
        return view('bidang.show', compact('bidang'));
    }

    public function edit(Bidang $bidang)
    {
        return view('bidang.edit', compact('bidang'));
    }

    public function update(Request $request, Bidang $bidang)
    {
        $request->validate([
            'nama_bidang' => 'required|string|max:255',
        ]);

        $bidang->update($request->all());
        return redirect()->route('bidang.index')->with('success', 'Bidang updated successfully.');
    }

    public function destroy(Bidang $bidang)
    {
        $bidang->delete();
        return redirect()->route('bidang.index')->with('success', 'Bidang deleted successfully.');
    }
}
