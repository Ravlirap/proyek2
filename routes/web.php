<?php

use App\Http\Controllers\homeController;
use App\Http\Controllers\PendaftaranController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\program_pelatihanController;

Route::get('/program_pelatihan', [program_pelatihanController::class, 'index'])->name('program_pelatihan');
Route::get('/pendaftaran', [pendaftaranController::class, 'index'])->name('pendaftaran');
Route::post('/pendaftaran', [pendaftaranController::class, 'submit'])->name('pendaftaran.submit');
Route::get('/pendaftaran/{slug}', [pendaftaranController::class, 'show'])->name('pendaftaran.detail');
Route::get('/detail_program/magang-manufaktur',[program_pelatihanController::class, 'magangManufaktur'])->name('detail_program.magang-manufaktur');
Route::get('/detail_program/ssw-kaigo',[program_pelatihanController::class, 'sswKaigo'])->name('detail_program.ssw-kaigo');
Route::get('/detail_program/magang-konstruksi',[program_pelatihanController::class, 'magangKonstruksi'])->name('detail_program.magang-konstruksi');
Route::get('/detail_program/ssw-food-service',[program_pelatihanController::class, 'sswFoodService'])->name('detail_program.ssw-food-service');
Route::get('/detail_program/bahasa-n5-n4',[program_pelatihanController::class, 'bahasaN5N4'])->name('detail_program.bahasa-n5-n4');
Route::get('/detail_program/bahasa-n3-n2',[program_pelatihanController::class, 'bahasaN3N2'])->name('detail_program.bahasa-n3-n2');

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