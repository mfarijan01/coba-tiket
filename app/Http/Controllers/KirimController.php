<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kompirmasi;
use App\Models\kirim;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Response;
class KirimController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $tamu_1 = kompirmasi::where('tujuan', 1)->count();
        $tamu_2 = kompirmasi::where('tujuan', 2)->count();
        $tamu_3 = kompirmasi::where('tujuan', 3)->count();
        $tamu_4 = kompirmasi::where('tujuan', 4)->count();
        $tamu_5 = kompirmasi::where('tujuan', 5)->count();
        $tamu_6 = kompirmasi::where('tujuan', 6)->count();
        $tamu_7 = kompirmasi::where('tujuan', 7)->count();
        return view('inpormasi/tiket', compact('tamu_1', 'tamu_2', 'tamu_3', 'tamu_4', 'tamu_5', 'tamu_6', 'tamu_7'));
        // return $time_mont;
    }
    public function permintaan(Request $request)
    {
        $tamu = Tamu::get();

        if ($request->has('cari')) {
            $tamu = Tamu::where('tujuan', 'like', "%" . $request->get('cari') . "%")
                ->get();
        }
        return view('inpormasi/permintaan', compact('tamu'));
    }
}
