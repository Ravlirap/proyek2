<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class KelolaArtikelController extends Controller
{
    public function index()
    {
        $title = 'Data Artikel';
        $slug = 'artikel';
        $dataArtikel = Artikel::orderBy('tanggal_publikasi', 'desc')->get();

        return view('admin.kelola_artikel.index', compact('title', 'slug', 'dataArtikel'));
    }

    public function create()
    {
        $title = 'Tambah Artikel';
        $slug = 'artikel';

        return view('admin.kelola_artikel.create', compact('title', 'slug'));
    }

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
            $gambarPath = $namaFile;
        }

        Artikel::create([
            'judul'             => $request->judul,
            'slug'              => Str::slug($request->judul),
            'isi'               => $request->isi,
            'gambar'            => $gambarPath,
            'penulis'           => 'Admin',
            'tanggal_publikasi' => now(),
        ]);

        return redirect()->route('admin.artikel.index')
            ->with('success', 'Artikel berhasil ditambahkan.');
    }

    public function show(string $id)
    {}

    public function edit(string $id)
    {
        $title = 'Edit Artikel';
        $slug = 'artikel';
        $artikel = Artikel::findOrFail($id);

        return view('admin.kelola_artikel.edit', compact('title', 'slug', 'artikel'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'judul'  => 'required',
            'isi'    => 'required',
            'gambar' => 'nullable|image|max:2048'
        ]);

        $artikel = Artikel::findOrFail($id);

        if ($request->hasFile('gambar')) {

            if ($artikel->gambar && file_exists(public_path($artikel->gambar))) {
                unlink(public_path($artikel->gambar));
            }

            $file = $request->file('gambar');
            $namaFile = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('img/artikel'), $namaFile);

            $artikel->gambar = 'img/artikel/' . $namaFile;
        }

        $artikel->judul = $request->judul;
        $artikel->slug = Str::slug($request->judul);
        $artikel->isi  = $request->isi;
        $artikel->save();

        return redirect()->route('admin.artikel.index')
            ->with('success', 'Artikel berhasil diperbarui.');
    }

    public function destroy(string $id)
    {
        $artikel = Artikel::findOrFail($id);

        if ($artikel->gambar && file_exists(public_path($artikel->gambar))) {
            unlink(public_path($artikel->gambar));
        }

        $artikel->delete();

        return redirect()->route('admin.artikel.index')
            ->with('success', 'Artikel berhasil dihapus.');
    }
}
