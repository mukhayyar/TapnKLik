<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ReferralScore extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('referral_score', function (Blueprint $table) {
            $table->id();
            $table->string('product_nama');
            $table->string('product_deskripsi');
            $table->integer('mitra_id');
            $table->integer('category_id');
            $table->integer('harga');
            $table->string('stok_unit');
            $table->boolean('ketersediaan_produk');
            $table->string('gambar');
            $table->string('note');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}