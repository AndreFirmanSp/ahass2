<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListSparepart extends Model
{
    use HasFactory;

    protected $fillable = [
        'kd_part',
        'nama_part',
        'desc',
        'harga',
        'jumlah',
    ];

}
