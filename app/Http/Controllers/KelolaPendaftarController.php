<?php

namespace App\Http\Controllers;

use App\Models\Pendaftaran;
use App\Models\JadwalCekKesehatan;
use Illuminate\Http\Request;

class KelolaPendaftarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = 'Data Pendaftaran';
        $slug = 'pendaftaran';
        $dataPendaftaran = Pendaftaran::all();
        return view('admin.kelola_pendaftar.index', compact('title', 'slug', 'dataPendaftaran'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $title = 'Detail Pendaftar';
        $slug = 'pendaftaran';
        $dataPendaftaran = Pendaftaran::findOrFail($id);
        return view('admin.kelola_pendaftar.show', compact('title', 'slug', 'dataPendaftaran'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $title = 'Edit Pendaftar';
        $slug = 'pendaftaran';
        $pendaftaran = Pendaftaran::findOrFail($id);
        $dataPendaftaran = Pendaftaran::all();
        return view('admin.kelola_pendaftar.update', compact('title', 'slug', 'pendaftaran'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function updateStatus(Request $request, string $id)
    {
        // Validasi status
        $request->validate([
            'status' => 'required|in:proses,cek kesehatan,lulus,tidak lulus',
        ]);

        // Ambil data berdasarkan ID
        $pendaftar = Pendaftaran::findOrFail($id);

        // Update status
        $pendaftar->status = $request->status;
        if ($request->status === 'cek kesehatan') {
            // Ambil jadwal TERAKHIR yang dibuat admin
            $jadwal = JadwalCekKesehatan::latest()->first();
            if ($jadwal) {
                $pendaftar->jadwal_cek_kesehatan_id = $jadwal->id;
            }
        }
        $pendaftar->save();

        // Redirect berhasil
        return redirect()->route('admin.pendaftar.index')
                        ->with('success', 'Status pendaftar berhasil diperbarui.');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Pendaftaran::destroy($id);
        return redirect()->route('admin.pendaftar.index')->with('success', 'Data pendaftar berhasil dihapus.');
    }
}