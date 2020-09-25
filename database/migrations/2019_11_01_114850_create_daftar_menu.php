<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDaftarMenu extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('create_daftar_menu', function (Blueprint $table) {
            $table->increments('id');
            $table->uuid('id_menu');
            $table->string('nama_menu');
            $table->string('deskripsi');
            $table->string('harga');
            $table->string('jenis');
            $table->string('gambar_menu');
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
        Schema::dropIfExists('create_daftar_menu');
    }
}
