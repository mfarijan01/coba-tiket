<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pesmesanan;
use Auth;
use PDF;
class PesmesananController extends Controller
{
    public function __construct() {
      $this->middleware('verified');
    }

    public function pesan()
    {
      $pesan = Pesmesanan::where('users_id', Auth::user()->id)->get();
      return view('pesan.tiket.index', compact('pesan'));
    }

    public function cetak_pdf()
    {
        $pesan = Pesmesanan::all();
        $pdf = PDF::loadview('/pesan/masuk/cetak-pdf', compact('pesan'))->setPaper('a4', 'landscape');
        return $pdf->stream();
    }

    public function tiketEdit($id)
    {
      $pesan = Pesmesanan::find($id);
      return view('pesan/tiket/edit', compact('pesan'));
    }

    public function pesanAdd()
    {
      return view('pesan/tiket/create');
    }

    public function cetak($id)
    {
      $pesan = Pesmesanan::find($id);
      return view('pesan/tiket/cetak', compact('pesan'));
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
        return redirect()->route('pesan.tiket.index')->with(['success' => 'Data Berhasil Di Simpan']);
    }

      public function pesanDel($id) {
        $pesan = Pesmesanan::find($id);
        $pesan->delete();
      
        return redirect('/pesan/masuk');
    }
  
    
}
