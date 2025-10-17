<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class galeriController extends Controller
{
    public function index()
    {
        $title = "galeri";
        $slug = "galeri";
        return view('content.galeri', compact('title', 'slug'));
    }
}
