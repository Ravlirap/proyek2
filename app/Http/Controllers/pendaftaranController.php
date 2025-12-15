<?php

namespace App\Http\Controllers;

use App\Models\Pendaftaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class PendaftaranController extends Controller
{
    /**
     * Tampilkan form pendaftaran
     */
    public function index()
    {
        return view('content.pendaftaran', [
            'title' => 'Form Pendaftaran',
            'slug'  => 'pendaftaran'
        ]);
    }

    /**
     * Generate kode pendaftaran unik
     */
    private function generateKode()
    {
        // Contoh hasil: REG20251203153245123
        $kode = 'REG' . date('YmdHis') . rand(100, 999);

        // Cek apakah sudah ada di database
        while (Pendaftaran::where('kode_pendaftaran', $kode)->exists()) {
            $kode = 'REG' . date('YmdHis') . rand(100, 999);
        }
        return $kode;
    }

    /**
     * Proses submit form
     */
    public function submit(Request $request)
    {
        $validatedData = $request->validate([
            'nama_lengkap'   => 'required|string|max:255',
            'tempat_lahir'   => 'required|string|max:100',
            'tanggal_lahir'  => 'required|date',
            'jenis_kelamin'  => 'required',
            'tinggi_badan'   => 'required|integer|min:100|max:250',
            'berat_badan'    => 'required|integer|min:30|max:200',
            'alamat'         => 'required|string|max:255',
            'asal_sekolah'   => 'required|string|max:255',
            'no_hp'          => 'required|string|max:20',
            'email'          => 'required|email|max:255',
            'foto'           => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'ijazah'         => 'nullable|mimes:pdf,jpg,jpeg,png|max:2048',
            'ktp'            => 'nullable|mimes:pdf,jpg,jpeg,png|max:2048',
            'kk'             => 'nullable|mimes:pdf,jpg,jpeg,png|max:2048',
        ]);

        $validatedData['kode_pendaftaran'] = $this->generateKode();

        // ---- Upload file ----
        $uploadFields = ['foto', 'ijazah', 'ktp', 'kk'];
        $folderMap = [
            'foto' => 'img/data_pengguna/foto',
            'ijazah' => 'img/data_pengguna/ijazah',
            'ktp' => 'img/data_pengguna/ktp',
            'kk' => 'img/data_pengguna/kk',
        ];

        foreach ($uploadFields as $field) {
            if ($request->hasFile($field)) {
                $file = $request->file($field);
                $filename = time() . '_' . $file->getClientOriginalName();
                $file->move(public_path($folderMap[$field]), $filename);
                $validatedData[$field] = $filename;
            }
        }

        // Simpan ke database
        $pendaftaran = Pendaftaran::create($validatedData);

        // Buat cookie secara eksplisit dan lampirkan ke response redirect
        $cookieMinutes = 60 * 24 * 30; // 30 hari (dalam menit)
        $cookie = cookie('kode_pendaftaran', $validatedData['kode_pendaftaran'], $cookieMinutes);

        return redirect()->route('cek.status')
            ->with('success', 'Pendaftaran berhasil! Kode Anda: ' . $validatedData['kode_pendaftaran'])
            ->withCookie($cookie);
    }

    /**
     * Halaman cek status berdasarkan cookie
     */
    public function cekStatus()
    {
        $kode = Cookie::get('kode_pendaftaran');

        if (!$kode) {
            return redirect('/')
                ->with('error', 'Silakan daftar terlebih dahulu.');
        }

        $pendaftar = Pendaftaran::where('kode_pendaftaran', $kode)->first();

        if (!$pendaftar) {
            return redirect('/')
                ->with('error', 'Data pendaftaran tidak ditemukan.');
        }

        return view('content.cek-status', [
            'pendaftar' => $pendaftar,
            'title'     => 'Cek Status Pendaftaran',
            'slug'      => 'cek-status'
        ]);
    }
}