<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tiket extends Model
{
    protected $fillable = [
        'nik',
        'nama',
        'jenis_kel',
        'tgl_lahir',
        'alamat',
        'no_telp',
        'is_regis'
    ];
}
