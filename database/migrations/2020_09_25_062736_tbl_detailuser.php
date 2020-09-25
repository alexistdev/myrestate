<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblDetailuser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_user', function (Blueprint $table) {
            $table->bigIncrements('id_detailuser');
            $table->string('nama_lengkap', 100);
            $table->string('notelp', 30);
            $table->text('alamat');
            $table->string('desa', 30);
            $table->string('kecamatan', 30);
            $table->string('kabupaten', 30);
            $table->string('provinsi', 30);
            $table->string('gambar', 100)->nullable();
            $table->bigInteger('id_user')->unsigned();
            $table->timestamps();
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detail_user');
    }
}
