<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\JadwalCekKesehatan;
use Illuminate\Http\Request;

class JadwalCekKesehatanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jadwal = JadwalCekKesehatan::latest()->get();
        $slug =  'Jadwal';
        return view('admin.jadwal.index', compact('jadwal', 'slug'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.jadwal.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'periode' => 'required',
            'tanggal' => 'required',
            'jam'     => 'required',
            'tempat'  => 'required',
        ]);

        JadwalCekKesehatan::create($request->all());

        return redirect()->route('admin.jadwal.index')
            ->with('success', 'Jadwal cek kesehatan berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $jadwal = JadwalCekKesehatan::findOrFail($id);
        return view('admin.jadwal.show', compact('jadwal'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $jadwal = JadwalCekKesehatan::findOrFail($id);
        $slug = 'edit';
        return view('admin.jadwal.edit', compact('jadwal', 'slug'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'periode' => 'required',
            'tanggal' => 'required',
            'jam'     => 'required',
            'tempat'  => 'required',
        ]);

        $jadwal = JadwalCekKesehatan::findOrFail($id);
        $jadwal->update($request->all());

        return redirect()->route('admin.jadwal.index')
            ->with('success', 'Jadwal cek kesehatan berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        JadwalCekKesehatan::destroy($id);

        return redirect()->route('admin.jadwal.index')
            ->with('success', 'Jadwal cek kesehatan berhasil dihapus');
    }
}