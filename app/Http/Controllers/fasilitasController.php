<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class fasilitasController extends Controller
{
     public function index()
    {
        $title = "fasilitas";
        $slug = "fasilitas";
        return view('content.fasilitas', compact('title', 'slug'));
    }
}
