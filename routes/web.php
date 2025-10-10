<?php

use App\Http\Controllers\homeController;
use App\Http\Controllers\PendaftaranController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('mhs/index');
});

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
});


Route::get('/pendaftaran', [PendaftaranController::class, 'index'])->name('pendaftaran');
Route::post('/pendaftaran', [PendaftaranController::class, 'store'])->name('pendaftaran.store');