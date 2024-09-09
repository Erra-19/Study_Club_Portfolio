<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kustomer extends Model
{
    protected $fillable = [
        'nama_pengirim',
        'email',
        'nomor_telpon_pengirim',
        'nama_penerima',
        'nomor_telpon_penerima',
    ];

    use HasFactory;
}
