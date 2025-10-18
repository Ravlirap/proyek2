<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use Illuminate\Http\Request;

class GaleriController extends Controller
{
    public function index() {
        $title = "Galeri Kegiatan";
        $slug = "galeri";
        $galeris = Galeri::latest()->paginate(6);
        return view('content.galeri.index', compact('title', 'slug', 'galeris'));
    }

    public function create() {
        $title = "Tambah Foto";
        $slug = "galeri";
        return view('content.galeri.create', compact('title', 'slug'));
    }

    public function store(Request $request) {
        $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'gambar' => 'required|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $data = $request->only(['judul', 'deskripsi']);
        $data['gambar'] = $request->file('gambar')->store('galeri', 'public');

        Galeri::create($data);

        return redirect()->route('galeri.index')->with('success', 'Foto berhasil ditambahkan!');
    }

    public function show(Galeri $galeri) {
        $title = $galeri->judul;
        $slug = "galeri";
        return view('content.galeri.show', compact('title', 'slug', 'galeri'));
    }

    public function edit(Galeri $galeri) {
        $title = "Edit Foto";
        $slug = "galeri";
        return view('content.galeri.edit', compact('title', 'slug', 'galeri'));
    }

    public function update(Request $request, Galeri $galeri) {
        $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $data = $request->only(['judul', 'deskripsi']);
        if ($request->hasFile('gambar')) {
            $data['gambar'] = $request->file('gambar')->store('galeri', 'public');
        }

        $galeri->update($data);
        return redirect()->route('galeri.index')->with('success', 'Foto berhasil diperbarui!');
    }

    public function destroy(Galeri $galeri) {
        $galeri->delete();
        return redirect()->route('galeri.index')->with('success', 'Foto berhasil dihapus!');
    }
}
