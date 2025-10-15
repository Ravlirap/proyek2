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
}