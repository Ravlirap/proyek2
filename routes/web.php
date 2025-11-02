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
use App\Http\Controllers\AdminController;
use App\Http\Controllers\artikelController;
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
Route::get('/pendaftaran', [PendaftaranController::class, 'index'])->name('pendaftaran');
Route::post('/pendaftaran', [PendaftaranController::class, 'submit'])->name('pendaftaran.submit');
Route::get('/pendaftaran/{slug}', [PendaftaranController::class, 'show'])->name('pendaftaran.detail');

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

    // Kelola pendaftar_
    Route::get('/kelola_pendaftar', [KelolaPendaftarController::class, 'index'])->name('admin.pendaftar.index');
    Route::get('/pendaftaran/show/{id}', [PendaftaranController::class, 'show'])->name('admin.pendaftar.show');
    Route::get('/pendaftaran/edit/{id}', [PendaftaranController::class, 'edit'])->name('admin.pendaftar.edit');
    Route::post('/pendaftaran/update/{id}', [PendaftaranController::class, 'update'])->name('admin.pendaftar.update');
    Route::get('/pendaftaran/destroy/{id}', [PendaftaranController::class, 'destroy'])->name('admin.pendaftar.destroy');
});


Route::get('/', function () {
    $title = "WebSaya.Com";
    $slug = "home";
    return view('content.home', compact('title','slug'));
});

Route::get('/home', function(){
    $title = "WebSaya.Com";
    $slug = "home";
    $content = "Ini adalah content WebSaya.Com";
    return view('content.home', compact('title','slug','content'));
})->name('home');
