<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kendaraan extends Model
{
    protected $fillable = [
        'nomor_kendaraan',
        'jenis_kendaraan',
        'nomor_plat_polisi',
        'status',
    ];

    use HasFactory;
}
