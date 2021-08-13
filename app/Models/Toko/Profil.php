<?php

namespace App\Models\Toko;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profil extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'mitra_info';

    public function cek_daftar_mitra($user_id)
    {
        if(is_null(Profil::where('user_id',$user_id)->get())){
            return false;
        } return true;
    }
}
