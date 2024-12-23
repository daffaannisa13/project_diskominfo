<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        // Validasi input
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        // Coba autentikasi dengan username dan password
        if (Auth::attempt($request->only('username', 'password'))) {
            // Jika berhasil login, redirect ke dashboard atau halaman lain
            return redirect()->intended('/dashboard');
        }

        // Jika login gagal, redirect kembali ke halaman login dengan pesan error
       return redirect()->back()->with('error', 'Nama pengguna atau kata sandi salah.');
    }

     public function logout(Request $request)
    {
        // Logout user
        Auth::logout();
    
    
        return redirect()->route('showLoginForm')->with('status', 'You have been logged out successfully.');
    }
}
