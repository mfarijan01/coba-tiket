<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ijin;
class informasiController extends Controller
{
    //
    public function informasi()
    {
        $ijin = ijin::latest()->get();
        return view('pesan.informasi.index', compact('ijin'));
}
        public function informasiDetail($id)
    {
      $ijin = ijin::find($id);
      return view('pesan/informasi/detail', compact('ijin'));
    }
}