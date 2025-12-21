<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Materi;
use Illuminate\Support\Facades\Hash;

class GuruController extends Controller
{
    /**
     * Tampilkan daftar guru
     */
    public function index()
    {
        $guru = User::where('role', 'guru')
                    ->orderBy('created_at', 'desc')
                    ->get();

        return view('admin.kelola_guru.index', compact('guru'));
    }

    /**
     * Form tambah guru
     */
    public function create()
    {
        return view('admin.kelola_guru.create');
    }

    /**
     * Simpan guru baru
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'     => 'required|string|max:255',
            'email'    => 'required|email|unique:users,email',
            'password' => 'required|min:6',
        ]);

        User::create([
            'name'     => $request->name,
            'email'    => $request->email,
            'password' => Hash::make($request->password),
            'role'     => 'guru',
        ]);

        return redirect()
            ->route('admin.guru.index')
            ->with('success', 'Guru berhasil ditambahkan');
    }

    /**
     * Form edit guru
     */
    public function edit($id)
    {
        $guru = User::where('role', 'guru')->findOrFail($id);

        return view('admin.kelola_guru.update', compact('guru'));
    }

    /**
     * Update data guru
     */
    public function update(Request $request, $id)
    {
        $guru = User::where('role', 'guru')->findOrFail($id);

        $request->validate([
            'name'     => 'required|string|max:255',
            'email'    => 'required|email|unique:users,email,' . $guru->id,
            'password' => 'nullable|min:6',
        ]);

        $data = [
            'name'  => $request->name,
            'email' => $request->email,
        ];

        if ($request->filled('password')) {
            $data['password'] = Hash::make($request->password);
        }

        $guru->update($data);

        return redirect()
            ->route('admin.guru.index')
            ->with('success', 'Data guru berhasil diperbarui');
    }

    /**
     * Hapus guru (materi tetap ada)
     */
    public function destroy($id)
    {
        $guru = User::where('role', 'guru')->findOrFail($id);

        // ❌ cegah admin menghapus dirinya sendiri
        if ($guru->id === auth()->id()) {
            return back()->with('error', 'Tidak dapat menghapus akun sendiri');
        }

        /**
         * SET NULL semua materi milik guru
         * (materi tetap ada)
         */
        Materi::where('id_guru', $guru->id)
              ->update(['id_guru' => null]);

        // Hapus akun guru
        $guru->delete();

        return redirect()
            ->route('admin.guru.index')
            ->with('success', 'Guru berhasil dihapus, materi tetap tersimpan');
    }
}