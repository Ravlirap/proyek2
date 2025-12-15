<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendaftaran extends Model
{
    use HasFactory;

    protected $table = 'pendaftaran'; // harus sama dengan nama tabel di migration

    protected $fillable = [
        'nama_lengkap',
        'kode_pendaftaran',
        'tempat_lahir',
        'tanggal_lahir',
        'jenis_kelamin',
        'tinggi_badan',
        'berat_badan',
        'alamat',
        'asal_sekolah',
        'no_hp',
        'email',
        'foto',
        'ijazah',
        'ktp',
        'kk',
        'status',
    ];
}
