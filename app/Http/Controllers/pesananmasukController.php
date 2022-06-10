<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pesmesanan;
use Auth;
use PDF;
class pesananmasukController extends Controller
{
    public function masuk()
    {
      $pesan = Pesmesanan::latest()->get();
      return view('pesan.masuk.index', compact('pesan'));
    }
    
    public function tiketEdit($id)
    {
      $pesan = Pesmesanan::find($id);
      return view('pesan/masuk/edit', compact('pesan'));
    }

    public function pesanPost(Request $req)
    {
        $id = $req->get('id');
        if($id){
            $pesan = Pesmesanan::find($id);
        }else{
            $pesan = new Pesmesanan;
        }
        if($req->gambar){
          if($req->hasFile('gambar')){
            $foto = $req->file('gambar');
            $filename = time() . '.' . $foto->getClientOriginalExtension();
            $destinationPath = 'image/';              
             $foto->move($destinationPath, $filename);
            }
            $pesan->gambar = $filename;
        }
        $pesan->Pesawat = $req->Pesawat;
        $pesan->Penerbangan = $req->Penerbangan;
        $pesan->Keberangkatan = $req->Keberangkatan;
        $pesan->Dari = $req->Dari;
        $pesan->Kota = $req->Kota;
        $pesan->phone = $req->phone;
        $pesan->tanggal = $req->tanggal;
        $pesan->Class = $req->Class;
        $pesan->phone = $req->phone;
        $pesan->Harga = $req->Harga;
        $pesan->Jumlah = $req->Jumlah;
        $pesan->HargaTotal = $req->Harga * $req->Jumlah;
        $pesan->users_id = Auth::user()->id;
        $pesan->save();
        return redirect()->route('pesan.masuk.index')->with(['success' => 'Data Berhasil Di Simpan']);
    }

}
