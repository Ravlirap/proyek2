<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    use HasFactory;
    protected $table = 'artikel';
    protected $fillable = [
        'judul',
        'slug',
        'isi',
        'gambar',
        'penulis',
        'tanggal_publikasi',
    ];
}