<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jenis_barang extends Model
{
    protected $fillable = [
        'jenis_barang',
        'deskripsi_jenis_barang',
    ];
    use HasFactory;
}
