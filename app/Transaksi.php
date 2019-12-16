<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    //
    protected $fillable = [
        'id_tiket','nama_wisata','tanggal_tiket', 'jumlah_tiket','harga_wisata'
    ];
}
