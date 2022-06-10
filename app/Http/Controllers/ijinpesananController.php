<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ijin;
use Auth;
class ijinpesananController extends Controller
{
    public function ijin()
    {
      $ijin = ijin::latest()->get();
      return view('pesan.ijin.index', compact('ijin'));
    }

    public function ijinAdd()
    {
      return view('pesan/ijin/create');
    }


    public function ijinPost(Request $req)
    {
        $id = $req->get('id');
        if($id){
            $ijin = ijin::find($id);
        }else{
            $ijin = new ijin;
        }
        $ijin->nama = $req->nama;
        $ijin->jenis = $req->jenis;
        $ijin->tanggal = $req->tanggal;
        $ijin->Class = $req->Class;
        $ijin->harga = $req->harga;
        $ijin->email = $req->email;
       $ijin->save();
        return redirect()->route('pesan.ijin.index')->with(['success' => 'Data Berhasil Di Simpan']);
    }
    public function ijinnDel($id) {
      $ijin = ijin::find($id);
      $ijin->delete();
    
      return redirect('/pesan/ijin');
  }

  
}
