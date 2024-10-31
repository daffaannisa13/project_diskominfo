<?php

namespace App\Http\Controllers;

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
        $gambars = Gambar::with('kategori', 'user')->get();
        $kategoriGambar = KategoriGambar::all(); // Fetch all categories
        return view('user.index', compact('beritas', 'kontaks', 'profil', 'kategoriGambar', 'gambars'));
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
        return view('user.design');
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
