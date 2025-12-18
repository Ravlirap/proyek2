<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Materi;
use Illuminate\Support\Facades\Storage;

class guruController extends Controller
{
    public function dashboard()
    {
        $user = Auth::user();
        return view('guru.dashboard', compact('user'));
    }

    public function materi(){
        $materi = Materi::orderBy('created_at', 'desc')->get();
        return view('guru.kelola_materi.index', compact('materi'));
    }

    public function create()
    {
        return view('guru.kelola_materi.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'kategori' => 'nullable|string|max:100',
            'file_materi' => 'nullable|file|mimes:pdf,mp4,doc,docx,zip|max:102400',
        ]);

        if ($request->hasFile('file_materi')) {
            $path = $request->file('file_materi')->store('materi', 'public');
            $data['file_materi'] = $path;
        }
        
        $data['id_guru'] = Auth::id();
        
        Materi::create($data);

        return redirect()->route('guru.materi.index')->with('success', 'Materi berhasil disimpan.');
    }

    public function edit($id)
    {
        $materi = Materi::findOrFail($id);
        return view('guru.kelola_materi.update', compact('materi'));
    }

    public function update(Request $request, $id)
    {
        $materi = Materi::findOrFail($id);

        $data = $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'kategori' => 'nullable|string|max:100',
            'file_materi' => 'nullable|file|mimes:pdf,mp4,doc,docx,zip|max:102400',
        ]);

        if ($request->hasFile('file_materi')) {
            // hapus file lama jika ada
            if ($materi->file_materi) {
                Storage::disk('public')->delete($materi->file_materi);
            }
            $path = $request->file('file_materi')->store('materi', 'public');
            $data['file_materi'] = $path;
        }

        $materi->update($data);

        return redirect()->route('guru.materi.index')->with('success', 'Materi berhasil diupdate.');
    }

    public function destroy($id)
    {
        $materi = Materi::findOrFail($id);
        if ($materi->file_materi) {
            Storage::disk('public')->delete($materi->file_materi);
        }
        $materi->delete();
        return redirect()->route('guru.materi.index')->with('success', 'Materi berhasil dihapus.');
    }
}