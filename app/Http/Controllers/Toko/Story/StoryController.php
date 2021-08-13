<?php

namespace App\Http\Controllers\Toko\Story;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Toko\Profil;

class StoryController extends Controller
{
    public function index()
    {
        $active_user = Auth::user();
        $mitra_profil = Profil::where('user_id',$active_user->id)->first();
        if(is_null($mitra_profil)){
            return redirect('dashboard/store/form');
        }
        return view('story');
    }
}
