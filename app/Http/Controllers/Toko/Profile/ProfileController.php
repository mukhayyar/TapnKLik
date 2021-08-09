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
        $mitra_profil = Profil::where('customer_id',$active_user->id)->first();
        if(is_null($mitra_profil)){
            return "Belum lengkap";
        }
        return "Sudah lengkap";
    }
    public function form_profil_toko(){
        return view('form_profil_toko');
    }

    public function upload_profil_toko(Request $request){
        $mitra_toko = new Profil;
        $mitra_toko->username = "as";
        $mitra_toko->username = "as";
        $mitra_toko->username = "as";
        $mitra_toko->username = "as";
        $mitra_toko->username = "as";
        $mitra_toko->username = "as";
        $mitra_toko->username = "as";
        $mitra_toko->username = "as";
        $mitra_toko->username = "as";
        $mitra_toko->username = "as";
        $mitra_toko->username = "as";
        $mitra_toko->username = "as";
        $mitra_toko->save();

        return redirect("/dashboard/isi");
    }

    public function upload_foto(){

    }
}
