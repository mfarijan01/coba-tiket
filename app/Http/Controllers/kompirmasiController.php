<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kompirmasi;
use Auth;
class kompirmasiController extends Controller
{
    public function kompirmasi()
    {
        $kompirmasi = kompirmasi::latest()->get();
        return view('kompirmasi.tiket.index', compact('kompirmasi'));
}

public function kompirmasiAdd()
{
  return view('kompirmasi/tiket/create');
}


public function kompirmasiPost(Request $req)
{
    $id = $req->get('id');
    if($id){
        $kompirmasi = kompirmasi::find($id);
    }else{
        $kompirmasi = new kompirmasi;
    }
    $kompirmasi->destination = $req->destination;
    $kompirmasi->FlightNo = $req->FlightNo;
    $kompirmasi->departure = $req->departure;
    $kompirmasi->arrival = $req->arrival;
    $kompirmasi->class = $req->class;
    $kompirmasi->status = $req->status;
    $kompirmasi->total = $req->total;
    $kompirmasi->save();
    return redirect()->route('kompirmasi.tiket.index')->with(['success' => 'Data Berhasil Di Simpan']);
}

public function kompirmasiDel($id) {
    $kompirmasi = kompirmasi::find($id);
    $kompirmasi->delete();
  
    return redirect('/kompirmasi/tiket');
}

public function kompirmasiEdit($id)
{
    $kompirmasi = kompirmasi::find($id);
  return view('kompirmasi.tiket.edit', compact('kompirmasi'));
}

}
    
