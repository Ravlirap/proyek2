<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artikel;

class ArtikelController extends Controller
{
    public function index()
    {
        $title = "Artikel";
        $slug = "artikel";
        $artikels = Artikel::latest()->paginate(6); // ambil data dari database
        return view('content.artikel.index', compact('title', 'slug', 'artikels'));
    }

    public function create()
    {
        $title = "Tambah Artikel";
        $slug = "artikel";
        return view('content.artikel.create', compact('title', 'slug'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'isi' => 'required|string',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $data = $request->only(['judul', 'isi']);

        if ($request->hasFile('gambar')) {
            $data['gambar'] = $request->file('gambar')->store('artikel', 'public');
        }

        Artikel::create($data);

        return redirect()->route('artikel.index')->with('success', 'Artikel berhasil ditambahkan!');
    }

    public function show(Artikel $artikel)
    {
        $title = $artikel->judul;
        $slug = "artikel";
        return view('content.artikel.show', compact('title', 'slug', 'artikel'));
    }

    public function edit(Artikel $artikel)
    {
        $title = "Edit Artikel";
        $slug = "artikel";
        return view('content.artikel.edit', compact('title', 'slug', 'artikel'));
    }

    public function update(Request $request, Artikel $artikel)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'isi' => 'required|string',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $data = $request->only(['judul', 'isi']);

        if ($request->hasFile('gambar')) {
            $data['gambar'] = $request->file('gambar')->store('artikel', 'public');
        }

        $artikel->update($data);

        return redirect()->route('artikel.index')->with('success', 'Artikel berhasil diperbarui!');
    }

    public function destroy(Artikel $artikel)
    {
        $artikel->delete();
        return redirect()->route('artikel.index')->with('success', 'Artikel berhasil dihapus!');
    }
}
