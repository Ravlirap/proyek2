<?php

namespace App\Http\Controllers;
use App\Models\Materi;

class MateriController extends Controller
{
    public function index()
    {
        $materi = Materi::all();
        return view('siswa.konten.materi', compact('materi'));
    }
}