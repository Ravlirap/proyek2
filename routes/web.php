<?php

use App\Http\Controllers\homeController;
use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\program_pelatihanController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

// Rute Otentikasi (Login, Logout)
// Menggunakan LoginController yang telah dimodifikasi

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');


// Rute yang Memerlukan Otentikasi

Route::middleware('auth')->group(function () {

    // Rute dashboard dinamis: /{role}/dashboard (misal: /admin/dashboard)
    // Rute ini menangani semua role (admin, guru, siswa)
    Route::get('/{role}/dashboard', function ($role) {

        $userRole = Auth::user()->role;

        // 1. Pengecekan Otorisasi: Pastikan role di URL sama dengan role user yang login
        if ($userRole !== $role) {
             // Jika tidak cocok, redirect paksa ke dashboard user yang sebenarnya
            return redirect("/{$userRole}/dashboard");
        }

        // 2. Tampilkan View
        if (view()->exists("{$role}.dashboard")) {
            return view("{$role}.dashboard");
        }

        // Fallback jika view dashboard tidak ditemukan
        return redirect('/')->with('error', 'Dashboard tidak ditemukan.');

    })->name('dashboard');
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
//galeri
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
