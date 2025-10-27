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
        return view('content.detail_program.ssw-kaigo', compact('title', 'slug'));
    }

    public function magangManufaktur()
    {
        $title = "Program Magang Manufaktur";
        $slug = "magang-manufaktur";
        return view('content.detail_program.magang-manufaktur', compact('title', 'slug'));
    }
    
    public function magangKonstruksi()
    {
        $title = "Program Magang Konstruksi";
        $slug = "magang-konstruksi";
        return view('content.detail_program.magang-konstruksi', compact('title', 'slug'));
    }

    public function sswFoodService()
    {
        $title = "Program SSW Food Service";
        $slug = "ssw-food-service";
        return view('content.detail_program.ssw-food-service', compact('title', 'slug'));
    }
    
    public function bahasaN5N4()
    {
        $title = "Program Bahasa N5-N4";
        $slug = "bahasa-n5-n4";
        return view('content.detail_program.bahasa-n5-n4', compact('title', 'slug'));
    }

    public function bahasaN3N2()
    {
        $title = "Program Bahasa N3-N2";
        $slug = "bahasa-n3-n2";
        return view('content.detail_program.bahasa-n3-n2', compact('title', 'slug'));
    }
}