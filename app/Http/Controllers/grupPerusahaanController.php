<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class grupPerusahaanController extends Controller
{
    public function index()
    {
        $title = "grup_perusahaan";
        $slug = "grup_perusahaan";
        return view('content.grup_perusahaan', compact('title', 'slug'));
    }
}
