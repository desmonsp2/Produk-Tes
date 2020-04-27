<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    protected $table = "produk";
    protected $fillable = [
       'id_additional',
        'nama_produk',
        'harga_pokok',
        'harga_jual'
    ];
}
