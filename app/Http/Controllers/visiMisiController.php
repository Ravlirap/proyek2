<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class visiMisiController extends Controller
{
    public function index()
    {
        $title = "visiMisi";
        $slug = "visiMisi";
        return view('content.visiMisi', compact('title', 'slug'));
    }
}
