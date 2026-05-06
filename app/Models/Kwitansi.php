<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kwitansi extends Model
{
    protected $table = 'kwitansi';

    protected $fillable = [
        'admin_id',
        'nomor_kwitansi',
        'tanggal',
        'jumlah'
    ];

    public $timestamps = false;
}