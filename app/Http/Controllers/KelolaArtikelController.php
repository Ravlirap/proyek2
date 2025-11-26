<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use Illuminate\Http\Request;

class KelolaArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = 'Data Artikel';
        $slug = 'artikel';
        $dataArtikel = Artikel::all();

        return view('admin.kelola_artikel.index', compact('title', 'slug', 'dataArtikel'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = 'Tambah Artikel';
        $slug = 'artikel';

        return view('admin.kelola_artikel.create', compact('title', 'slug'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul'  => 'required',
            'isi'    => 'required',
            'gambar' => 'nullable|image|max:2048'
        ]);

        $gambarPath = null;

        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $namaFile = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('img/artikel'), $namaFile);

            // Disimpan di database
            $gambarPath = 'img/artikel/' . $namaFile;
        }

        Artikel::create([
            'judul'  => $request->judul,
            'isi'    => $request->isi,
            'gambar' => $gambarPath
        ]);

        return redirect()->route('admin.artikel.index')
                        ->with('success', 'Artikel berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $title = 'Detail Artikel';
        $slug = 'artikel';
        $artikel = Artikel::findOrFail($id);

        return view('admin.kelola_artikel.show', compact('title', 'slug', 'artikel'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $title = 'Edit Artikel';
        $slug = 'artikel';
        $artikel = Artikel::findOrFail($id);

        return view('admin.kelola_artikel.update', compact('title', 'slug', 'artikel'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'judul'  => 'required',
            'isi'    => 'required',
            'gambar' => 'nullable|image|max:2048'
        ]);

        $artikel = Artikel::findOrFail($id);

        // Jika upload gambar baru
        if ($request->hasFile('gambar')) {
            // Hapus gambar lama jika ada
            if ($artikel->gambar && file_exists(public_path($artikel->gambar))) {
                unlink(public_path($artikel->gambar));
            }

            $file = $request->file('gambar');
            $namaFile = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('img/artikel'), $namaFile);

            $artikel->gambar = 'img/artikel/' . $namaFile;
        }

        $artikel->judul = $request->judul;
        $artikel->isi   = $request->isi;
        $artikel->save();

        return redirect()->route('admin.artikel.index')
                        ->with('success', 'Artikel berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $artikel = Artikel::findOrFail($id);

        // Hapus gambar
        if ($artikel->gambar && file_exists(public_path($artikel->gambar))) {
            unlink(public_path($artikel->gambar));
        }

        $artikel->delete();

        return redirect()->route('admin.artikel.index')
                        ->with('success', 'Artikel berhasil dihapus.');
    }
}
