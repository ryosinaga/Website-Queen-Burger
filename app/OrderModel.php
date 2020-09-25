<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderModel extends Model
{
    protected $table = "create_order";
    protected $fillable = ['user_id', 'product_id', 'nama_menu', 'nama_pemesan', 'nomor_telepon', 'jumlah', 'alamat'];


    public function user(){
        return $this->belongsTo('App\User');
    }
}
