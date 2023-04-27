<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('faktur', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('id')->on('categories');
            $table->string('nama_barang')->references('nama_barang')->on('data');
            $table->integer('harga')->references('harga')->on('data');
            $table->integer('jumlah')->references('jumlah')->on('data');
            $table->string('alamat');
            $table->string('kodePos');
            $table->integer('subTotal');
            $table->integer('totalAll');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('faktur');
    }
};
