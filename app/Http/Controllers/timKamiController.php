<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class timKamiController extends Controller
{
    public function index()
    {
        $title = "timKami";
        $slug = "timKami";
        return view('content.timKami', compact('title', 'slug'));
    }
}
