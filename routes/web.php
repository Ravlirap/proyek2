<?php

use App\Http\Controllers\homeController;
use App\Http\Controllers\PendaftaranController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\program_pelatihanController;

Route::get('/program_pelatihan', [program_pelatihanController::class, 'index'])->name('program_pelatihan');
Route::get('/program_pelatihan/{slug}', [program_pelatihanController::class, 'show'])->name('program.detail');

Route::get('/', function () {
    $title = "WebSaya.Com";
    $slug = "home";
    return view('konten.home', compact('title','slug'));
});

Route::get('/home', function(){
    $title = "WebSaya.Com";
    $slug = "home";
    $konten = "Ini adalah konten WebSaya.Com";
    return view('konten.home', compact('title','slug','konten'));
})->name('home');


Route::get('/pendaftaran', [PendaftaranController::class, 'index'])->name('pendaftaran');
Route::post('/pendaftaran', [PendaftaranController::class, 'store'])->name('pendaftaran.store');