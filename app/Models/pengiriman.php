<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pengiriman extends Model
{
    protected $fillable = [
        'nomor_resi',
        'id_alamat',
        'id_staff',
        'id_kustomer',
        'id_barang',
        'id_kendaraan',
        'id_status',
    ];
    use HasFactory;
}
