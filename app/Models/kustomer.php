<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kustomer extends Model
{
    protected $fillable = [
        'nama',
        'email',
        'nomor_telpon_pengirim',
        'nomor_telpon_penerima',
    ];

    use HasFactory;
}
