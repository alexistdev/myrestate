<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblRumah extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rumah', function (Blueprint $table) {
            $table->bigIncrements('id_rumah');
            $table->string('nama_unit', 30);
            $table->string('tipe', 30);
            $table->bigInteger('harga_unit');
            $table->string('gambar_rumah', 100);
            $table->integer('status');
            $table->unsignedBigInteger('id_agent');
            $table->timestamps();
            $table->foreign('id_agent')->references('id_agent')->on('agent')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rumah');
    }
}
