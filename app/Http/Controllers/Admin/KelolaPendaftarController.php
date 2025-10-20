<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pendaftaran; // Model pendaftaran user yang sudah ada
use Illuminate\Http\Request;

class KelolaPendaftarController extends Controller
{
    /** Dashboard ringkas */
    public function dashboard()
    {
        $jumlah = Pendaftaran::count();
        return view('admin.pendaftar.dashboard', compact('jumlah'));
    }

    /** Menampilkan semua pendaftar */
   public function index()
    {
        // Variabel yang diambil dari database
        $data = Pendaftaran::all(); 
        
        // Pastikan variabel yang di compact adalah 'data'
        return view('admin.pendaftar.index', compact('data')); 
    }

    /** Form edit data */
    public function edit($id)
    {
        $pendaftar = Pendaftaran::findOrFail($id);
        return view('admin.pendaftar.edit', compact('pendaftar'));
    }

    /** Update data pendaftar */
    public function update(Request $request, $id)
    {
        $pendaftar = Pendaftaran::findOrFail($id);
        $pendaftar->update($request->all());

        return redirect()->route('admin.pendaftar.index')->with('success', 'Data berhasil diperbarui!');
    }

    /** Hapus data pendaftar */
    public function destroy($id)
    {
        Pendaftaran::findOrFail($id)->delete();
        return redirect()->route('admin.pendaftar.index')->with('success', 'Data berhasil dihapus!');
    }
}
