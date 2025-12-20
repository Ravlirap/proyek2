<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Materi;
use App\Models\User;


class MateriController extends Controller
{
    public function index()
    {
        $materi = Materi::all();
        return view('siswa.konten.materi', compact('materi'));
    }

    public function show($id)
    {
        $materi = Materi::findOrFail($id);
        return view('siswa.konten.materi_detail', compact('materi'));
    }
}