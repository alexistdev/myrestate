<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblInboxbalas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inboxbalas', function (Blueprint $table) {
            $table->bigIncrements('id_balas');
            $table->integer('is_adm')->unsigned();;
            $table->text('pesan');
            $table->integer('time')->unsigned();
            $table->bigInteger('id_inbox')->unsigned();
            $table->timestamps();
            $table->foreign('id_inbox')->references('id_inbox')->on('inbox')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inboxbalas');
    }
}
