<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class KelolaGaleriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = 'Data Galeri';
        $slug  = 'galeri';
        $dataGaleri = Galeri::all();

        return view('admin.kelola_galeri.index', compact('title','slug','dataGaleri'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = 'Tambah Galeri';
        $slug  = 'galeri';

        return view('admin.kelola_galeri.create', compact('title', 'slug'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul'     => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'gambar'    => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $gambarPath = null;
        if ($request->hasFile('gambar')) {
            $gambarPath = $request->file('gambar')
                                  ->store('galeri', 'public');
        }

        Galeri::create([
            'judul'     => $request->judul,
            'deskripsi' => $request->deskripsi,
            'gambar'    => $gambarPath,
        ]);

        return redirect()
            ->route('galeri.index')
            ->with('success', 'Data galeri berhasil ditambahkan');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $title = 'Edit Galeri';
        $slug  = 'galeri';
        $galeri = Galeri::findOrFail($id);

        return view('admin.kelola_galeri.edit', compact(
            'title',
            'slug',
            'galeri'
        ));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $galeri = Galeri::findOrFail($id);

        $request->validate([
            'judul'     => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'gambar'    => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        if ($request->hasFile('gambar')) {
            $galeri->gambar = $request->file('gambar')
                                      ->store('galeri', 'public');
        }

        $galeri->update([
            'judul'     => $request->judul,
            'deskripsi' => $request->deskripsi,
            'gambar'    => $galeri->gambar,
        ]);

        return redirect()
            ->route('galeri.index')
            ->with('success', 'Data galeri berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Galeri::findOrFail($id)->delete();

        return redirect()
            ->route('galeri.index')
            ->with('success', 'Data galeri berhasil dihapus');
    }
}