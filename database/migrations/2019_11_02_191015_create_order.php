<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrder extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('create_order', function (Blueprint $table) {
            $table->increments('id');
            $table->uuid('user_id');
            $table->string('product_id');
            $table->string('nama_menu');
            $table->string('nama_pemesan');
            $table->string('nomor_telepon');
            $table->string('jumlah');
            $table->string('alamat');
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
        Schema::dropIfExists('create_order');
    }
}
