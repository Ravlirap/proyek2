<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pendaftaran; // Model untuk ambil data pendaftar

class AdminController extends Controller
{
    // Halaman dashboard admin
    public function dashboard()
    {
        $jumlah = Pendaftaran::count();
        return view('admin.dashboard', compact('jumlah'));
    }

    // Halaman daftar pendaftar
    public function index()
    {
        $pendaftar = Pendaftaran::all();
        return view('admin.pendaftaran.index', compact('pendaftar'));
    }

    // Halaman edit pendaftar
    public function edit($id)
    {
        $pendaftar = Pendaftaran::findOrFail($id);
        $slug = 'dashboard';
        return view('admin.pendaftaran.edit', compact('pendaftar, slug'));
    }

    // Simpan hasil edit
    public function update(Request $request, $id)
    {
        $pendaftar = Pendaftaran::findOrFail($id);
        $pendaftar->update($request->all());
        return redirect()->route('admin.pendaftar.index')->with('success', 'Data berhasil diperbarui.');
    }

    // Hapus data
    public function destroy($id)
    {
        Pendaftaran::destroy($id);
        return redirect()->route('admin.pendaftar.index')->with('success', 'Data berhasil dihapus.');
    }
}
