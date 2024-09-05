<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pengiriman extends Model
{
    protected $fillable = [
        'nomor_resi',
        'id_staff',
        'id_kustomer',
        'id_kendaraan',
        'berat_barang',
        'id_jenis_barang',
        'mudah_pecah',
        'id_status',
    ];
    use HasFactory;
}
