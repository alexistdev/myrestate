<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblFasilitas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fasilitas_unit', function (Blueprint $table) {
            $table->bigIncrements('id_detail');
            $table->integer('kamar')->nullable();
            $table->integer('kamar_mandi')->nullable();
            $table->integer('garasi')->nullable();
            $table->integer('ac')->nullable();
            $table->integer('pemanas_air')->nullable();
            $table->integer('laundry')->nullable();
            $table->integer('gym')->nullable();
            $table->integer('internet')->nullable();
            $table->integer('tv_kabel')->nullable();
            $table->integer('layanan_sampah')->nullable();
            $table->unsignedBigInteger('id_rumah');
            $table->timestamps();
            $table->foreign('id_rumah')->references('id_rumah')->on('rumah')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fasilitas_unit');
    }
}
