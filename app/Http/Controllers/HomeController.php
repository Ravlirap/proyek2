<?php

namespace App\Http\Controllers;

use App\Models\Pendaftaran;

class HomeController extends Controller
{
    public function index()
    {
        // Ambil kode pendaftaran dari cookie request
        $kode = request()->cookie('kode_pendaftaran');

        // Cek apakah ada data pendaftar di database
        $pendaftar = null;
        if ($kode) {
            $pendaftar = Pendaftaran::where('kode_pendaftaran', $kode)->first();
        }

        return view('content.home', [
            'title' => 'Home',
            'slug'  => 'home',
            'pendaftar' => $pendaftar
        ]);
    }
}
