<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('product_nama');
            $table->string('product_deskripsi');
            $table->integer('mitra_id');
            $table->integer('category_id');
            $table->integer('kuantitas_per_unit');
            $table->integer('unit_price');
            $table->integer('harga_eceran');
            $table->integer('ketersediaan_size');
            $table->integer('ketersediaan_color');
            $table->string('size');
            $table->string('color');
            $table->string('discount');
            $table->string('berat_unit');
            $table->string('stok_unit');
            $table->string('unit_dalam_pesanan');
            $table->string('ketersediaan_produk');
            $table->string('ketersediaan_voucher');
            $table->string('gambar');
            $table->string('ranking');
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
        Schema::dropIfExists('products');
    }
}
