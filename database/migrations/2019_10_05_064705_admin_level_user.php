<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AdminLevelUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('adminleveruser', function(Blueprint $table) {
            $table->BigIncrements('id');
            $table->string('id_admin');
            $table->string('nama_admin');
            $table->string('level_admin');
            $table->string('creator_admin')->nullable();
            $table->string('last_edited_by')->nullable();
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
