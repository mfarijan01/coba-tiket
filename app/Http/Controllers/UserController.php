<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;
class UserController extends Controller

{
    
  public function akunPelanggan()
  {
    $akuns = User::latest()->where('level','Pengguna')->get();
    return view('akun/pelanggan/index', compact('akuns'));
  }

  public function akunUserEdit($id)
  {
    $akun = User::find($id);
    return view('akun/pelanggan/edit', compact('akun'));
  }
  
    public function akunPelangganAdd()
    {
      return view('akun/pelanggan/create');
    }

    public function akunPelangganDelete($id) {
        $akun = User::find($id);
        $akun->delete();
      
        return redirect('/akun/pelanggan');
      }
       
    public function akunPelangganPost(Request $req)
        {
        $id = $req->get('id');
        if($id){
            $akun = User::find($id);
        }else{
            $akun = new User;
        }
        $akun->name = $req->name;
        $akun->email = $req->email;
        $akun->password = bcrypt($req->password);
        $akun->level = $req->level;
        $akun->id = Auth::user()->id;
       $akun->save();

      return redirect()->route('akun/pelanggan');
    }
}