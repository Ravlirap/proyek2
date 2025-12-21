<?php

use App\Http\Controllers\homeController;
use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\program_pelatihanController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\galeriController;
use App\Http\Controllers\visiMisiController;
use App\Http\Controllers\timKamiController;
use App\Http\Controllers\kontakController;
use App\Http\Controllers\fasilitasController;
use App\Http\Controllers\grupPerusahaanController;
use App\Http\Controllers\profilLembagaController;
use App\Http\Controllers\KelolaPendaftarController;
use App\Http\Controllers\KelolaArtikelController;
use App\Http\Controllers\KelolaGaleriController;
use App\Http\Controllers\Admin\JadwalCekKesehatanController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\artikelController;
use App\Http\Controllers\siswaController;
use App\Http\Controllers\guruController;
use App\Http\Controllers\materiController;
use App\Http\Controllers\SiswaMateriController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

// Rute Otentikasi (Login, Logout)
// Menggunakan LoginController yang telah dimodifikasi

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');


// Rute yang Memerlukan Otentikasi
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
});

// Rute Publik
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/pendaftaran', [PendaftaranController::class, 'index'])->name('pendaftaran');
Route::post('/pendaftaran', [PendaftaranController::class, 'submit'])->name('pendaftaran.submit');
Route::get('/pendaftaran/{slug}', [PendaftaranController::class, 'show'])->name('pendaftaran.detail');
Route::get('/cek-status', [PendaftaranController::class, 'cekStatus'])->name('cek.status');

//Program
Route::get('/program_pelatihan', [program_pelatihanController::class, 'index'])->name('program_pelatihan');
Route::get('/detail_program/magang-manufaktur',[program_pelatihanController::class, 'magangManufaktur'])->name('detail_program.magang-manufaktur');
Route::get('/detail_program/ssw-kaigo',[program_pelatihanController::class, 'sswKaigo'])->name('detail_program.ssw-kaigo');
Route::get('/detail_program/magang-konstruksi',[program_pelatihanController::class, 'magangKonstruksi'])->name('detail_program.magang-konstruksi');
Route::get('/detail_program/ssw-food-service',[program_pelatihanController::class, 'sswFoodService'])->name('detail_program.ssw-food-service');
Route::get('/detail_program/bahasa-n5-n4',[program_pelatihanController::class, 'bahasaN5N4'])->name('detail_program.bahasa-n5-n4');
Route::get('/detail_program/bahasa-n3-n2',[program_pelatihanController::class, 'bahasaN3N2'])->name('detail_program.bahasa-n3-n2');

//artikel
Route::get('/artikel', [artikelController::class, 'index'])->name('artikel.index');

//galeri
Route::get('/galeri', [galeriController::class, 'index'])->name('galeri');
Route::get('/visiMisi', [visiMisiController::class, 'index'])->name('visiMisi');
Route::get('/timKami', [timKamiController::class, 'index'])->name('timKami');
Route::get('/grup_perusahaan', [grupPerusahaanController::class, 'index'])->name('grup_perusahaan');
Route::get('/profil_lembaga', [profilLembagaController::class, 'index'])->name('profil_lembaga');
Route::get('/kontak', [kontakController::class, 'index'])->name('kontak');
Route::get('/fasilitas', [fasilitasController::class, 'index'])->name('fasilitas');

//admin routes
Route::middleware(['auth'])->prefix('admin')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');

    //kelola pendaftar
    Route::get('/kelola_pendaftar', [KelolaPendaftarController::class, 'index'])->name('admin.pendaftar.index');
    Route::get('/pendaftaran/show/{id}', [KelolaPendaftarController::class, 'show'])->name('admin.pendaftar.show');
    Route::put('/pendaftar/{id}', [KelolaPendaftarController::class, 'updateStatus'])->name('admin.pendaftar.updateStatus');
    Route::delete('/pendaftaran/destroy/{id}', [KelolaPendaftarController::class, 'destroy'])->name('admin.pendaftar.destroy');

    //kelola artikel
    Route::get('/kelola_artikel', [KelolaArtikelController::class, 'index'])->name('admin.artikel.index');
    Route::get('/artikel/create', [KelolaArtikelController::class, 'create'])->name('admin.artikel.create');
    Route::post('/artikel/store', [KelolaArtikelController::class, 'store'])->name('admin.artikel.store');
    Route::get('/artikel/show/{id}', [KelolaArtikelController::class, 'show']) ->name('admin.artikel.show');
    Route::get('/artikel/edit/{id}', [KelolaArtikelController::class, 'edit'])->name('admin.artikel.edit');
    Route::put('/artikel/update/{id}', [KelolaArtikelController::class, 'update'])->name('admin.artikel.update');
    Route::delete('/artikel/destroy/{id}', [KelolaArtikelController::class, 'destroy'])->name('admin.artikel.destroy');


    //kelola galeri
    Route::get('/kelola_galeri', [KelolaGaleriController::class, 'index'])->name('admin.galeri.index');
    Route::get('/galeri/create', [KelolaGaleriController::class, 'create'])->name('galeri.create');
    Route::post('/galeri/store', [KelolaGaleriController::class, 'store'])->name('admin.galeri.store');
    Route::get('/galeri/edit/{id}', [KelolaGaleriController::class, 'edit'])->name('admin.galeri.edit');
    Route::put('/galeri/update/{id}', [KelolaGaleriController::class, 'update'])->name('admin.galeri.update');
    Route::delete('/galeri/destroy/{id}', [KelolaGaleriController::class, 'destroy'])->name('admin.galeri.destroy');

    //kelola guru
    Route::get('/guru', [App\Http\Controllers\Admin\GuruController::class, 'index'])->name('admin.guru.index');
    Route::get('/guru/create', [App\Http\Controllers\Admin\GuruController::class, 'create'])->name('admin.guru.create');
    Route::post('/guru/store', [App\Http\Controllers\Admin\GuruController::class, 'store'])->name('admin.guru.store');
    Route::get('/guru/edit/{id}', [App\Http\Controllers\Admin\GuruController::class, 'edit'])->name('admin.guru.edit');
    Route::put('/guru/update/{id}', [App\Http\Controllers\Admin\GuruController::class, 'update'])->name('admin.guru.update');
    Route::delete('/guru/destroy/{id}', [App\Http\Controllers\Admin\GuruController::class, 'destroy'])->name('admin.guru.destroy');

    //Kelola jadwal
    Route::get('/jadwal', [App\Http\Controllers\Admin\JadwalCekKesehatanController::class, 'index'])->name('admin.jadwal.index');
    Route::get('/jadwal/create', [App\Http\Controllers\Admin\JadwalCekKesehatanController::class, 'create'])->name('admin.jadwal.create');
    Route::post('/jadwal/store', [App\Http\Controllers\Admin\JadwalCekKesehatanController::class, 'store'])->name('admin.jadwal.store');
    Route::get('/jadwal/edit/{id}', [App\Http\Controllers\Admin\JadwalCekKesehatanController::class, 'edit'])->name('admin.jadwal.edit');
    Route::put('/jadwal/update/{id}', [App\Http\Controllers\Admin\JadwalCekKesehatanController::class, 'update'])->name('admin.jadwal.update');
    Route::delete('/jadwal/destroy/{id}', [App\Http\Controllers\Admin\JadwalCekKesehatanController::class, 'destroy'])->name('admin.jadwal.destroy');
});

//siswa routes
Route::middleware(['auth'])->prefix('siswa')->group(function () {
    Route::get('/dashboard', [siswaController::class, 'dashboard'])->name('siswa.dashboard');
    Route::get('/jadwal', [siswaController::class, 'jadwal'])->name('siswa.konten.jadwal');
    Route::get('/materi', [SiswaMateriController::class, 'index'])->name('siswa.konten.materi');
    Route::get('/profil', [siswaController::class, 'profil'])->name('siswa.profil_siswa.dashboard');
    
    //siswa preview materi routes
    Route::get('/materi/{id}/view', [SiswaMateriController::class, 'view'])->name('siswa.materi.view');
    Route::get('/materi/{id}/download', [SiswaMateriController::class, 'download'])->name('siswa.materi.download');
    Route::get('/materi/{id}', [SiswaMateriController::class, 'show'])->name('siswa.materi.show');
});


//guru routes
Route::middleware(['auth'])->prefix('guru')->group(function () {
    Route::get('/dashboard', [guruController::class, 'dashboard'])->name('guru.dashboard');
    
    Route::get('/materi', [guruController::class, 'materi'])->name('guru.materi.index');
    Route::get('/materi/create', [guruController::class, 'create'])->name('guru.materi.create');
    Route::post('/materi/store', [guruController::class, 'store'])->name('guru.materi.store');
    Route::get('/materi/edit/{id}', [guruController::class, 'edit'])->name('guru.materi.edit');
    Route::put('/materi/update/{id}', [guruController::class, 'update'])->name('guru.materi.update');
    Route::delete('/materi/destroy/{id}', [guruController::class, 'destroy'])->name('guru.materi.destroy');
});
