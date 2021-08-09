<?php

namespace App\Http\Controllers\General;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Toko\Profil;

class PageController extends Controller
{
    public function profil_toko($toko)
    {
        $mitra_profil = Profil::where('user_name',$toko)->first();
        if(is_null($mitra_profil)){
            $toko = $toko." Belum terdaftar";
            return view('profil_toko',compact('toko'));
        }
        return view('profil_toko',compact('toko'));
    }
}
