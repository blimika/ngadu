<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Pengaduan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('pengaduan', function(Blueprint $table) {
            $table->BigIncrements('id');
            $table->integer('id_user');
            $table->string('nama_user');
            $table->string('kode_pengaduan');
            $table->text('isi_pengaduan');
            $table->string('link_bukti_pengaduan');
            $table->string('nama_file_bukti_pengaduan');
            $table->string('status_pengaduan');
            $table->string('link_berita_acara_hasil_pengaduan')->nullable();
            $table->string('nama_file_berita_acara_hasil_pengaduan')->nullable();
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
