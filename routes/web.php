<?php

use App\Http\Controllers\homeController;
use App\Http\Controllers\PendaftaranController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\program_pelatihanController;

Route::get('/program_pelatihan', [program_pelatihanController::class, 'index'])->name('program_pelatihan');
Route::get('/program_pelatihan/{slug}', [program_pelatihanController::class, 'show'])->name('program.detail');
Route::get('/pendaftaran', [pendaftaranController::class, 'index'])->name('pendaftaran');
Route::post('/pendaftaran', [pendaftaranController::class, 'submit'])->name('pendaftaran.submit');
Route::get('/pendaftaran/{slug}', [pendaftaranController::class, 'show'])->name('pendaftaran.detail');

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
