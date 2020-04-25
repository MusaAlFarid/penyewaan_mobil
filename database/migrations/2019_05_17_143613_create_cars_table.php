<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->Integer('manufacture_id')->unsigned();
            $table->foreign('manufacture_id')->references('id')->on('manufactures')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
            $table->string('name')->nullable()->default('text');
            $table->string('license_number')->nullable()->default('text');
            $table->string('color')->nullable()->default('text');
            $table->string('year')->nullable()->default('text');
            $table->boolean('status')->nullable()->default(0);
            $table->integer('price')->unsigned()->nullable();
            $table->integer('penalty')->unsigned()->nullable();
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
        Schema::dropIfExists('cars');
    }
}
