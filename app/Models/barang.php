<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class barang extends Model
{
    protected $fillable = [
        'nama_barang',
        'id_jenis_barang',
        'berat_barang',
        'mudah_pecah',
    ];
    use HasFactory;
    use HasFactory;
}
