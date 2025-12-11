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

        // Ambil semua artikel terbaru dari database
        $artikels = Artikel::orderBy('tanggal_publikasi', 'DESC')->get();

        return view('content.artikel', compact('title', 'slug', 'artikels'));
    }
}
