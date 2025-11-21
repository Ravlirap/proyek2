<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Materi;
use App\Models\jadwal;

class SiswaController extends Controller
{
    public function dashboard()
    {
        $user = Auth::user();
        return view('siswa.dashboard', compact('user'));
    }

    public function jadwal()
    {
        $jadwal = Jadwal::orderBy('tanggal', 'asc')->get();
        return view('siswa.konten.jadwal', compact('jadwal'));
    }

    public function materi()
    {
        $materi = Materi::all();
        return view('siswa.konten.materi', compact('materi'));
    }

    public function profil(){
        $user = Auth::user();
        return view('siswa.profil_siswa.index', compact('user'));
    } 
}