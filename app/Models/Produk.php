<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    // Table produk initialization
    protected $table = 'tb_produk';

    // If you want a different primary key
    protected $primaryKey = 'id_produk';

    // Data that you can fill in to the 'tb_produk' table
    protected $fillable = ['nama_produk', 'harga', 'deskripsi_produk', 'kategori_id'];

    // Data that you can't fill in to the table (Usually the primary key)
    protected $guarded = ['id_produk'];
}
