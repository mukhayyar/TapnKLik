<?php

namespace App\Http\Controllers\General;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Toko\Profil;
use Illuminate\Support\Facades\DB;

class PageController extends Controller
{
    public function daftar_umkm()
    {
        return view('cari');
    }

    public function profil_toko($toko)
    {
        $mitra_profil = Profil::where('user_name',$toko)->get();
        if(empty($mitra_profil[0]->id)){
            return abort(404)->redirect('/');
        }
        return view('profil_toko',compact('mitra_profil'));
    }

    public function leaderboard()
    {
        return view('leaderboard');
    }

    public function cari_umkm(Request $request)
    {
        // if(!is_null($request->has('cari'))){
            $key = $request->input('cari','default');
            $data = DB::table('mitra_info')->where('nama_toko','LIKE',"%".$key."%")->get();
            return response()->json($data);
        // }
    }
    public function cari_umkm2(Request $request)
    {
        // if(!is_null($request->has('cari'))){
            $key = $request->cari;
            $data = DB::table('mitra_info')->where('user_name','like',"%".$key."%")->get('user_name');
            return response()->json($data);
        // }
    }
}
