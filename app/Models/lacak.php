<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lacak extends Model
{
    protected $fillable = [
        'id_pengiriman',
        'id_status',
        'location',
    ];
    use HasFactory;
}
