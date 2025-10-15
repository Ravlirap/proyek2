<?php

namespace App\Http\Controllers;
use App\Models\Pendaftaran;
use Illuminate\Http\Request;

class pendaftaranController extends Controller
{
    /**
     * Menampilkan halaman form pendaftaran
     */
    public function index(){
        $title = "Form Pendaftaran";
        $slug = "form-pendaftaran"; // Add this for consistency with other views
        return view('konten.pendaftaran', compact('title', 'slug'));
    }

    public function submit(Request $request){
        // Validasi input
        $validatedData = $request->validate([
            'nama_lengkap'   => 'required|string|max:255',
            'tempat_lahir'   => 'required|string|max:100',
            'tanggal_lahir'  => 'required|date',
            'jenis_kelamin'  => 'required|in:laki-laki,perempuan',
            'tinggi_badan'   => 'required|integer|min:100|max:250',
            'berat_badan'    => 'required|integer|min:30|max:200',
            'alamat'         => 'required|string|max:255',
            'asal_sekolah'   => 'required|string|max:255',
            'no_hp'          => 'required|string|max:20',
            'email'          => 'required|email|unique:pendaftaran,email',
            'foto'           => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'ijazah'         => 'nullable|mimes:pdf,jpg,jpeg,png|max:2048',
            'ktp'            => 'nullable|mimes:pdf,jpg,jpeg,png|max:2048',
            'kk'             => 'nullable|mimes:pdf,jpg,jpeg,png|max:2048',
        ]);
        
        $uploadFields = ['foto', 'ijazah', 'ktp', 'kk'];
        foreach ($uploadFields as $field) {
            if ($request->hasFile($field)) {
                $validatedData[$field] = $request->file($field)->store('uploads', 'public');
            }
        }

        // Simpan data pendaftaran ke database (asumsikan ada model Pendaftaran)
        Pendaftaran::create($validatedData);

        // Redirect atau tampilkan pesan sukses
        return redirect()->back()->with('success', 'Pendaftaran berhasil dikirim!');
    }

    public function show($slug)
    {
        // For now, just return to a generic detail view
        // In the future, you can fetch registration details from a database
        return view('konten.pendaftaran_detail', [
            'slug' => $slug
        ]);
    }
}
