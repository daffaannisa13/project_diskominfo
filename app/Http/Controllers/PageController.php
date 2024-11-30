<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use App\Models\Pesan;
use Illuminate\Http\Request;
use App\Models\Berita;
use App\Models\Kontak;
use App\Models\SosialMedia;
use App\Models\Dokumen;
use App\Models\Profil;
use App\Models\Gambar;
use App\Models\KategoriGambar;
use App\Models\Video;
use App\Models\DeskripsiSistem;
use App\Models\KategoriVideo;
use App\Models\KategoriDokumen;
use Illuminate\Support\Facades\Storage;

class PageController extends Controller
{
public function index()
{
    $kontaks = Kontak::all();
    $sosial = SosialMedia::all();
    $profil = Profil::orderBy('created_at', 'asc')->first(); // Get the oldest profile
    $beritas = Berita::latest()->take(5)->get(); // Get the 5 most recent berita
    $agenda = Agenda::all();
    $gambars = Gambar::with('kategori', 'user')->latest()->take(4)->get();
    $kategoriGambar = KategoriGambar::all(); // Fetch all image categories
   $deskripsiSistems = DeskripsiSistem::latest()->first();

    return view('user.index', compact(
        'beritas',
        'kontaks',
        'profil',
        'kategoriGambar',
        'gambars',
        'agenda',
        'sosial',
        'deskripsiSistems',
        
    ));
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
    $sosial = SosialMedia::all();
    $beritas = Berita::orderBy('created_at', 'desc')->get();
    $deskripsiSistems = DeskripsiSistem::all();
    return view('user.berita', compact('beritas', 'kontaks', 'sosial', 'deskripsiSistems'));
}


    public function contact()
    {
        $kontaks = Kontak::all();
        $sosial = SosialMedia::all();
        $deskripsiSistems = DeskripsiSistem::all();
        return view('user.contact', compact('kontaks', 'sosial', 'deskripsiSistems'));
    }

        public function detail($id)
{
    $kontaks = Kontak::all();
    $sosial = SosialMedia::all();
    $berita = Berita::findOrFail($id); 
    $deskripsiSistems = DeskripsiSistem::all();
    return view('user.detail_berita', compact('berita', 'kontaks', 'sosial', 'deskripsiSistems'));
}

public function detailprofil($id)
{
    $kontaks = Kontak::all();
    $profile = Profil::findOrFail($id);
    $sosial = SosialMedia::all();
    $deskripsiSistems = DeskripsiSistem::all();
    return view('user.detail_profile', compact('profile', 'kontaks', 'sosial', 'deskripsiSistems'));
}


    public function design()
    {
        $kontaks = Kontak::all();
        $sosial = SosialMedia::all();
        $agenda = Agenda::all();
        $deskripsiSistems = DeskripsiSistem::all();
        return view('user.design', compact('agenda','kontaks', 'sosial', 'deskripsiSistems'));
    }

    public function gallery()
    {
        $gambars = Gambar::with('kategori', 'user')->get();
        $kategoriGambar = KategoriGambar::all();
        $kontaks = Kontak::all(); 
        $sosial = SosialMedia::all();
        $deskripsiSistems = DeskripsiSistem::all();
        return view('user.gallery', compact('kategoriGambar' , 'gambars', 'kontaks', 'sosial', 'deskripsiSistems'));
    }

    public function profill()
    {
        $kontaks = Kontak::all();
        $sosial = SosialMedia::all();
        $profiles = Profil::all();
        $deskripsiSistems = DeskripsiSistem::all();
        return view('user.profile', compact('profiles','kontaks','sosial', 'deskripsiSistems'));
    }

    public function layanan()
    {
        $kontaks = Kontak::all();
        $sosial = SosialMedia::all();
        $deskripsiSistems = DeskripsiSistem::all();
        return view('user.layanan', compact('kontaks', 'sosial','deskripsiSistems'));
    }

public function teknologi()
{
    $kontaks = Kontak::all();
    $kategoriDokumen = KategoriDokumen::all(); 
    $dokumens = Dokumen::all();
    $sosial = SosialMedia::all();
    $deskripsiSistems = DeskripsiSistem::all();
    return view('user.teknologi', compact('dokumens', 'kategoriDokumen','kontaks','sosial', 'deskripsiSistems'));
}


    public function video()
    {
        $videos = Video::with('kategori', 'user')->get(); 
    $kategoriVideo = KategoriVideo::all(); 
    $kontaks = Kontak::all(); 
    $sosial = SosialMedia::all();
    $deskripsiSistems = DeskripsiSistem::all();
        return view('user.video',  compact('kategoriVideo' , 'videos', 'kontaks','sosial', 'deskripsiSistems'));
    }
}
