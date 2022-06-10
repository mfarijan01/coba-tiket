<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class profilController extends Controller
{
    //
    public function tentang()
    {
        return view('profil/tentang-kami');
    }

    public function kontak()
    {
        return view('profil/kontak');
    }
    public function video()
    {
        return view('profil/video');
    }
}
