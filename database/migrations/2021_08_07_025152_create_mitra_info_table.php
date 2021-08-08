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
            $table->string('nama_toko',50);
            $table->string('alamat_toko_1',200);
            $table->string('alamat_toko_2',200);
            $table->integer('no_hp',200);
            $table->string('email');
            $table->string('kota',50);
            $table->string('provinsi',50);
            $table->integer('kode_pos');
            $table->string('negara',50);
            $table->string('jenis_penjualan',100);
            $table->string('tentang_toko',150);
            $table->string('payment_methods',150);
            $table->timestamps();
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
