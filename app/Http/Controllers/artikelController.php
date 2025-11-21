<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Artikel;

class artikelController extends Controller
{
     public function index()
    {
        $title = "Artikel";
        $slug = "artikel";
        return view('content.artikel', compact('title', 'slug'));
    }
}