<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Dokumen;
use App\Models\Agenda;
use App\Models\Gambar;
use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        // Pastikan pengguna sudah login
        if (!Auth::check()) {
            return redirect()->route('showLoginForm')->with('status', 'Silakan login untuk melanjutkan.');
        }

        // Menghitung jumlah pengguna, dokumen, agenda, foto, dan video
        $usersCount = User::count();
        $documentsCount = Dokumen::count();
        $agendasCount = Agenda::count();
        $photosCount = Gambar::count();
        $videosCount = Video::count();

        // Mendapatkan nama pengguna yang sedang login
        $userName = Auth::user()->name;

        // Mengembalikan view dashboard dengan data yang dibutuhkan
        return view('dashboard', compact('usersCount', 'documentsCount', 'agendasCount', 'photosCount', 'videosCount', 'userName'));
    }
}
