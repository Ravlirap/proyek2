<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class program_pelatihanController extends Controller
{
    public function index()
    {
        $title = "Program Pelatihan";
        $slug = "program_pelatihan";
        return view('content.program_pelatihan', compact('title', 'slug'));
    }

    public function sswKaigo()
    {
        $title = "Program SSW Kaigo";
        $slug = "ssw-kaigo";
        return view('detail_program.ssw-kaigo', compact('title', 'slug'));
    }

    public function magangManufaktur()
    {
        $title = "Program Magang Manufaktur";
        $slug = "magang-manufaktur";
        return view('detail_program.magang-manufaktur', compact('title', 'slug'));
    }
    
    public function magangKonstruksi()
    {
        $title = "Program Magang Konstruksi";
        $slug = "magang-konstruksi";
        return view('detail_program.magang-konstruksi', compact('title', 'slug'));
    }
}