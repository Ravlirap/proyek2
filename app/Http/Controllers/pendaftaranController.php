<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pendaftaranController extends Controller
{
    /**
     * Menampilkan halaman form pendaftaran
     */
    public function index()
    {
        return view('pendaftaran', [
            'title' => 'Formulir pendaftaran',
            'konten' => 'Silakan isi formulir pendaftaran di bawah ini.'
        ]);
    }

    /**
     * Menangani data yang dikirim dari form pendaftaran
     */
    public function store(Request $request)
    {
        // Validasi input dari form
        $validated = $request->validate([
            'nama' => 'required|string|max:100',
            'email' => 'required|email',
            'telepon' => 'required|string|max:15',
            'program' => 'required|string',
        ]);

        // Sementara tampilkan hasil input di halaman (bisa disimpan ke database nanti)
        return back()->with('success', 'pendaftaran berhasil dikirim! Terima kasih, ' . $validated['nama'] . '.');
    }
}
