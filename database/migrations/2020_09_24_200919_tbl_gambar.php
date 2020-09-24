<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblGambar extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gambar', function (Blueprint $table) {
            $table->bigIncrements('id_gambar');
            $table->string('gambar_unit', 100);
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
        Schema::dropIfExists('gambar');
    }
}
