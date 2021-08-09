<?php

namespace App\Http\Controllers\Toko\Profile;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Toko\Profil;

class ProfileController extends Controller
{
    public function index_profil_toko()
    {
        $active_user = Auth::user();
        $mitra_profil = Profil::where('user_id',$active_user->id)->first();
        if(is_null($mitra_profil)){
            return redirect('dashboard/store/profile/form');
        }
        return "Sudah lengkap";
    }
    public function form_profil_toko(){
        return view('form_profil_toko');
    }

    public function upload_profil_toko(Request $request){
        $user = Auth::user();
        $mitra_toko = new Profil;
        $mitra_toko->user_id = $user->id;
        $mitra_toko->user_name = $request->username;
        $mitra_toko->nama_toko = $request->nama_toko;
        $mitra_toko->tentang_toko = $request->tentang_toko;
        $mitra_toko->alamat_toko = $request->alamat_toko;
        // $mitra_toko->gambar = $request->asd;
        $mitra_toko->no_hp = $request->asd;
        $mitra_toko->email = $user->email;
        $mitra_toko->payment_method = $request->payment_method;
        $mitra_toko->jenis_penjualan = $request->toko_menjual;
        $mitra_toko->regist_date = now();
        $mitra_toko->save();

        return redirect("dashboard/store/profile");
    }

    public function update_profil_toko(){

    }
}
