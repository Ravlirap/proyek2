<?php

namespace App\Models;

use Illuminate\Databse\Eloqunent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    protected $table = 'jadwal';

    protected $fillable = [
        'judul',
        'kategori',
        'tanggal',
        'jam_mulai',
        'jam_selesai',
        'pengajar',
        'lokasi',
    ];
}