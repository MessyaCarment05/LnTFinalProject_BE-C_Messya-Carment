<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('data', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('id')->on('categories');
            $table->string('nama_barang');
            $table->integer('harga');
            $table->integer('jumlah');
            $table->string('image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     * @return void
     */
   
    public function down()
    {
        Schema::dropIfExists('data');
    }
};
