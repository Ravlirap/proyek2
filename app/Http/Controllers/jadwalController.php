<?php

namespace App\Http\Controllers;

use App\Models\Jadwal;
use Illuminate\Http\Request;

class JadwalController extends Controller
{
    public function index()
    {
        $jadwal = Jadwal::orderBy('tanggal', 'asc')->get();

        return view('siswa.konten.jadwal', compact('jadwal'));
    }
}