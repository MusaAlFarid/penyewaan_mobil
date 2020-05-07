<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransaksiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksi', function (Blueprint $table) {
            $table->uuid('id');
            $table->uuid('customer_id');
            $table->uuid('car_id');
            $table->string('invoice_no')->nullable()->default('text');
            $table->dateTime('rent_date')->nullable();
            $table->dateTime('back_date')->nullable();
            $table->dateTime('return_date')->nullable();
            $table->integer('price')->unsigned()->nullable();
            $table->integer('amount')->unsigned()->nullable();
            $table->integer('penalty')->unsigned()->nullable();
            $table->string('status')->nullable()->default('text');
            $table->softDeletes();
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
        Schema::dropIfExists('transaksi');
    }
}
