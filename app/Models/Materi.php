<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materi extends Model
{
    use HasFactory;

    protected $table = 'materi';

    protected $fillable = [
        'id_guru',
        'judul',
        'deskripsi',
        'file_materi',
        'kategori',
    ];

    /**
     * Relasi: Materi dimiliki oleh satu user (guru)
     */
    public function guru()
    {
        return $this->belongsTo(User::class, 'id_guru');
    }
}