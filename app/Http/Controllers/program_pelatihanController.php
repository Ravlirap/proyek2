<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class program_pelatihanController extends Controller
{
    public function index()
    {
        $title = "Program Pelatihan";
        $slug = "program-pelatihan"; // Add this for consistency with other views
        return view('konten.program_pelatihan', compact('title', 'slug'));
    }

    public function show($slug)
    {
        // For now, just return to a generic detail view
        // In the future, you can fetch program details from a database
        return view('konten.program_detail', [
            'slug' => $slug
        ]);
    }
}