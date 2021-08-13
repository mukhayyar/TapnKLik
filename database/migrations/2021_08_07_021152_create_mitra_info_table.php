<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMitraInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mitra_info', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('user_name',50);
            $table->string('nama_toko',50);
            $table->string('tentang_toko',150);
            $table->string('alamat_toko',200);
            $table->string('gambar')->nullable();
            $table->string('no_hp');
            $table->string('email');
            $table->date('buka')->default(now());
            $table->date('tutup')->default(now());
            $table->string('payment_method');
            $table->string('jenis_penjualan',100);
            $table->date('regist_date');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mitra_info');
    }
}
