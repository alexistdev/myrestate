<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TbDeskripsi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deskripsi', function (Blueprint $table) {
            $table->bigIncrements('id_deskripsi');
            $table->string('judul', 100)->nullable();
            $table->text('deskripsi')->nullable();
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
        Schema::dropIfExists('deskripsi');
    }
}
