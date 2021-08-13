<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Referral;
use Illuminate\Support\Facades\Auth;
use App\Models\User;



class ReferralController extends Controller
{
    public function index()
    {
        $active_user = Auth::user();
        if(!$active_user->is_referral){
            return redirect('dashboard/referral/daftar');
        }
        return view('referral');
    }

    private function generateRandomString($length = 5) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    public function daftar_referral(Request $request)
    {
        $active_user = Auth::user();
        $referral = new Referral;
        $referral->email = $active_user->email;
        $referral->no_hp = $request->no_hp;
        $referral->nama_panggilan = $active_user->name;
        $referral->referral_code = $this->generateRandomString();
        $referral->save();
        $user = User::find($active_user->id);
        $user->is_referral = 1;
        $user->save();

        return redirect('/dashboard/referral');
    }
}
