<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class kontakController extends Controller
{
    public function index()
    {
        $title = "kontak";
        $slug = "kontak";
        return view('content.kontak', compact('title', 'slug'));
    }
}
