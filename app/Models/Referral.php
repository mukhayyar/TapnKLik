<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Referral extends Model
{
    use HasFactory;

    protected $table = 'referral_program';
    protected $fillable = [
        'nama_panggilan', 'email', 'no_hp',
    ];
    public $timestamps = false;

}
