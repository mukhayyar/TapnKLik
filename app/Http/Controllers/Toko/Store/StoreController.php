<?php

namespace App\Http\Controllers\Toko\Store;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Toko\Profil;

class StoreController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $toko = Profil::where('id',$user->id)->first();
        if(is_null($toko)){
            return redirect('dashboard/store/profile/form');
        }
        return view('store');
    }
}
