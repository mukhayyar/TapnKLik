<?php

namespace App\Models\Toko;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profil extends Model
{
    use HasFactory;

    protected $table = 'mitra_info';
    // protected $fillable = ['user_name','nama_toko','gambar','alamat_toko','no_hp','email','provinsi','kabupaten','kecamatan','kode_pos','jenis_penjualan','tentang_toko','payment_methods','voucher_available','customer_id','regist_date'];
}
