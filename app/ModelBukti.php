<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelBukti extends Model
{
    protected $table = "create_bukti";
    protected $fillable = ["id_user", "gambar_bukti"];
}
