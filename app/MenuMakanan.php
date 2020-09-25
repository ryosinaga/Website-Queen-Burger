<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MenuMakanan extends Model
{
    protected $table =  "create_daftar_menu";
    protected $fillable = ['id_menu', 'nama_menu', 'deskripsi', 'harga', 'jenis', 'gambar_menu'];
}
