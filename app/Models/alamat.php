<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class alamat extends Model
{
    protected $fillable = [
        'id_kustomer',
        'alamat_kirim',
        'alamat_tujuan',
    ];
    use HasFactory;
}
