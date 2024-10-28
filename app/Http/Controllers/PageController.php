<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('user.index');
    }

    public function berita()
    {
        return view('user.berita');
    }

    public function contact()
    {
        return view('user.contact');
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
