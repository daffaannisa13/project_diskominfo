<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use App\Models\Pesan;
use Illuminate\Http\Request;
use App\Models\Berita;
use App\Models\Kontak;
use App\Models\Dokumen;
use App\Models\Profil;
use App\Models\Gambar;
use App\Models\KategoriGambar;
use App\Models\KategoriDokumen;
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
        $kontaks = Kontak::all();
        $beritas = Berita::all();
        return view('user.berita', compact('beritas','kontaks'));
    }

    public function contact()
    {
        $kontaks = Kontak::all();
        return view('user.contact', compact('kontaks'));
    }

         public function detail($id)
    {
        var_dump('test');
        die;
        $kontaks = Kontak::all();
        $berita = Berita::findOrFail($id); // Mengambil berita berdasarkan ID
        return view('user.detail_berita', compact('berita','kontaks')); // Menampilkan view detail
    }


    public function design()
    {
        $kontaks = Kontak::all();
        $agenda = Agenda::all();
        return view('user.design', compact('agenda','kontaks'));
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
        $kontaks = Kontak::all();
        return view('user.layanan', compact('kontaks'));
    }

public function teknologi()
{
    $kontaks = Kontak::all();
    $kategoriDokumen = KategoriDokumen::all(); 
    $dokumens = Dokumen::all();
    return view('user.teknologi', compact('dokumens', 'kategoriDokumen','kontaks'));
}


    public function notFound()
    {
        return view('user.404');
    }
}
