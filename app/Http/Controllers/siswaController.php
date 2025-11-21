<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class SiswaController extends Controller
{
    public function __construct()
    {
        $this->middleware('role:siswa');
    }

    public function dashboard()
    {
        $user = Auth::user(); 

        return view('siswa.dashboard', compact('user'));
    }

    public function jadwal()
    {
        return view('siswa.konten.jadwal');
    }

    public function materi()
    {
        return view('siswa.konten.materi');
    }
}