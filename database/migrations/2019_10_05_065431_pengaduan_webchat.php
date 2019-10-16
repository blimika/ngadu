<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PengaduanWebchat extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('pengaduanwebchat', function(Blueprint $table) {
            $table->BigIncrements('id');
            $table->Integer('id_pengaduan');
            $table->string('id_user');
            $table->string('nama_user');
            $table->text('isi_pesan');
            $table->string('last_edited_by');
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
        //
    }
}
