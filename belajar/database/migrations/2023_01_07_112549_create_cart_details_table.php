<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cart_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('merch_id')->required();
            $table->foreign('merch_id')->references('id')->on('merchandises')->onDelete('restrict');
            $table->unsignedBigInteger('carts_id')->required();
            $table->foreign('carts_id')->references('id')->on('carts')->onDelete('restrict');
            $table->integer('jumlah');
            $table->integer('jumlahHarga');
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
        Schema::dropIfExists('cart_details');
    }
};
