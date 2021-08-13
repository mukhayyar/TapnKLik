<?php

namespace App\Http\Controllers\Toko\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Toko\Profil;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $user = Auth::user();
        // $toko = Profil::find('id',$user);
        return view('dashboard',\compact('user'));
    }
}
