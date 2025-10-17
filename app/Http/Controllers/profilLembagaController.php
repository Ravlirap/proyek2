<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class profilLembagaController extends Controller
{
    public function index()
    {
        $title = "profil_lembaga";
        $slug = "profil_lembaga";
        return view('content.profil_lembaga', compact('title', 'slug'));
    }
}
