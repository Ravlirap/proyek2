<?php

namespace App\Http\Controllers;

use App\Models\Pendaftaran;
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
    public function update(Request $request, string $id)
    {
        $id = $request->id;
        Pendaftaran::where('id', $id)->update([
            'status' => $request->status,
        ]);
        return redirect()->route('admin.pendaftar.index')->with('success', 'Data pendaftar berhasil diperbarui.');
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
