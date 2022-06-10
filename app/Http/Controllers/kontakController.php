<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kontak;
class kontakController extends Controller
{
    public function kontak()
    {
        $kontak = kontak::latest()->get();
        return view('kontak.index', compact('kontak'));
     }

     public function wel()
    {
        $kontak = kontak::latest()->get();
        return view('/kontak/create', compact('kontak'));
     }

 

    public function kontakAdd()
    {
      return view('kontak/create');
    }

    
    public function kontakPost(Request $req)
    {
        $id = $req->get('id');
        if($id){
            $kontak = kontak::find($id);
        }else{
            $kontak = new kontak;
        }
        $kontak->name = $req->name;
        $kontak->Email = $req->Email;
        $kontak->Telephone = $req->Telephone;
        $kontak->Message = $req->Message;
         $kontak->save();
        return redirect()->route('/kontak/create')->with(['success' => 'Data Berhasil Di Simpan']);
    }

      public function kontakDel($id) {
        $kontak = kontak::find($id);
        $kontak->delete();
      
        return redirect('/kontak');
    }
  
    
}