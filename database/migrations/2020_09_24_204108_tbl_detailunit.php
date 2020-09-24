<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblDetailunit extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_unit', function (Blueprint $table) {
            $table->bigIncrements('id_detail');
            $table->text('alamat_lengkap')->nullable();
            $table->string('desa', 30)->nullable();
            $table->string('kecamatan', 30)->nullable();
            $table->string('kabupaten', 30)->nullable();
            $table->string('provinsi', 30)->nullable();
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
        Schema::dropIfExists('detail_unit');
    }
}
