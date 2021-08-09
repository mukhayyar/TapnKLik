<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('first_name',200);
            $table->string('last_name',200);
            $table->string('alamat_1',200);
            $table->string('alamat_2',200);
            $table->integer('no_hp');
            $table->string('email');
            $table->string('kota',50);
            $table->string('provinsi',50);
            $table->integer('kode_pos');
            $table->string('negara',50);
            $table->string('ship_kota',50);
            $table->string('ship_provinsi',50);
            $table->integer('ship_kode_pos');
            $table->string('ship_negara',50);
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
        Schema::dropIfExists('customers');
    }
}
