<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JadwalCekKesehatan extends Model
{
    protected $table = 'jadwal_cek_kesehatan';

    protected $fillable = [
        'periode',
        'tanggal',
        'jam',
        'tempat',
    ];
}