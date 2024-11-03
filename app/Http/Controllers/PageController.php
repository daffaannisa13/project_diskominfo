<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use App\Models\Pesan;
use Illuminate\Http\Request;
use App\Models\Berita;
use App\Models\Kontak;
use App\Models\Profil;
use App\Models\KategoriGambar;
use App\Models\Gambar;
use Illuminate\Support\Facades\Storage;

class PageController extends Controller
{
    public function index()
    {
        $kontaks = Kontak::all();
        $profil = Profil::orderBy('created_at', 'asc')->first(); // Get the oldest profile
        $beritas = Berita::all();
        $agenda = Agenda::all();
        $gambars = Gambar::with('kategori', 'user')->get();
        $kategoriGambar = KategoriGambar::all(); // Fetch all categories
        return view('user.index', compact('beritas', 'kontaks', 'profil', 'kategoriGambar', 'gambars','agenda'));
    }
    public function storekontak(Request $request)
{
 
    // $request->validate([
    //     'nama' => 'required|string|max:255',
    //     'email' => 'required|email',
    //     'telepon' => 'required|string|max:15',
    //     'subject' => 'required|string|max:255',
    //     'message' => 'required|string',
    // ]);

    // Create a new instance of the Pesan model
    $pesan = new Pesan();
    $pesan->nama = $request->nama;
    $pesan->email = $request->email;
    $pesan->telepon = $request->telepon;
    $pesan->subjek = $request->subject;
    $pesan->isi = $request->isi;
    $pesan->tanggal = now();
    $pesan->save();
// print($pesan);
// die;
    // Save the model instance to the database

    return redirect()->back()->with('success', 'Message sent successfully!');
}


    public function berita()
    {
        // Ambil semua berita
        $beritas = Berita::all();
        return view('user.berita', compact('beritas'));
    }

    public function contact()
    {
        $kontaks = Kontak::all();
        return view('user.contact', compact('kontaks'));
    }

    public function design()
    {
        $agenda = Agenda::all();
        return view('user.design', compact('agenda'));
    }

    public function gallery()
    {
        return view('user.gallery');
    }

    public function info()
    {
        return view('user.info');
    }

    public function layanan()
    {
        return view('user.layanan');
    }

    public function teknologi()
    {
        return view('user.teknologi');
    }

    public function notFound()
    {
        return view('user.404');
    }
}
