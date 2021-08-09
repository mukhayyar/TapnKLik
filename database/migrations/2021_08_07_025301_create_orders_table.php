<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->integer('customer_id');
            $table->integer('order_number');
            $table->integer('payment_id');
            $table->integer('order_date');
            $table->integer('ship_date');
            $table->integer('required_date');
            $table->integer('shipper_id');
            $table->integer('freight');
            $table->integer('pajak_penjualan');
            $table->boolean('transact_status');
            $table->timestamps();
            $table->string('err_loc');
            $table->string('err_msg');
            $table->boolean('fulfilled');
            $table->boolean('deleted');
            $table->boolean('paid');
            $table->date('payment_date');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
