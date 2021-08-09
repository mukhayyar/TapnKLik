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
            $table->string('user_name',50);
            $table->string('nama_toko',50);
            $table->string('gambar')->nullable();
            $table->string('alamat_toko',200);
            $table->integer('no_hp');
            $table->string('email');
            $table->string('provinsi',50);
            $table->string('kabupaten',50);
            $table->string('kecamatan',50);
            $table->integer('kode_pos');
            $table->string('jenis_penjualan',100);
            $table->string('tentang_toko',150);
            $table->json('payment_methods');
            $table->string('voucher_available',150);
            $table->integer('user_id');
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
