<?php

use App\Http\Controllers\homeController;
use App\Http\Controllers\mahasiswaController;
use App\Http\Controllers\mhsController;
use App\Http\Controllers\prodiController;
use App\Models\mhs;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('mhs/index');
});

Route::get('/welcome', function () {
    echo "Selamat datang";
});

Route::get('/', function () {
    $title = "WebSaya.Com";
    $slug = "home";
    $konten = "Ini adalah konten RavWeb.Com";
    return view('konten.home', compact('title','slug','konten'));
});

Route::get('/home', function(){
    $title = "WebSaya.Com";
    $slug = "home";
    $konten = "Ini adalah konten WebSaya.Com";
    return view('konten.home', compact('title','slug','konten'));
});

Route::get('/profil', function(){
    $title = "Ravli";
    $slug = "profil";
    $mahasiswa = [
        "nama" => "Ravli",
        "nim" => "2403066",
        "program_studi" => "Teknik Informatika",
        "tempat_praktik" => "PT. Inovasi Solusi Digital",
        "lama_praktik" => "6 Bulan"
    ];

    return view('konten.profil', compact('title','slug','mahasiswa'));
});

Route::get('/mahasiswa', function(){
    $title = "Daftar Mahasiswa";
    $slug = "mahasiswa";
    $konten = "Ini adalah konten WebSaya.Com";

    $mahasiswa = [
    ['nama' => 'Karin',  'nim' => '2403048', 'hobi' => 'Memasak'],
    ['nama' => 'Andi',   'nim' => '2403002', 'hobi' => 'Membaca'],
    ['nama' => 'anggun',   'nim' => '2403003', 'hobi' => 'Olahraga'],
    ['nama' => 'Citra',  'nim' => '2403004', 'hobi' => 'Menyanyi'],
    ['nama' => 'Dewi',   'nim' => '2403005', 'hobi' => 'Menulis'],
    ['nama' => 'Eko',    'nim' => '2403006', 'hobi' => 'Bermain Musik'],
    ['nama' => 'Fajar',  'nim' => '2403007', 'hobi' => 'Berenang'],
    ['nama' => 'Gita',   'nim' => '2403008', 'hobi' => 'Fotografi'],
    ['nama' => 'Hana',   'nim' => '2403009', 'hobi' => 'Menari'],
    ['nama' => 'Irfan',  'nim' => '2403010', 'hobi' => 'Gaming'],
    ['nama' => 'Joko',   'nim' => '2403011', 'hobi' => 'Traveling'],
];


    return view('konten.mahasiswa', compact('title','slug','konten','mahasiswa'));
});

Route::get('/prodi', function () {
    $title = "Program Studi";
    $slug  = "prodi";

    $prodi = [
        ['kode' => 'TI', 'nama' => 'Teknik Informatika', 'jenjang' => 'D3'],
        ['kode' => 'TM', 'nama' => 'Teknik Mesin', 'jenjang' => 'D3'],
        ['kode' => 'KP', 'nama' => 'Keperawatan', 'jenjang' => 'D3'],
        ['kode' => 'TPTU', 'nama' => 'Teknik Pendingin dan Tata Udara', 'jenjang' => 'D3'],
        ['kode' => 'TLM', 'nama' => 'Teknologi Laboratorium Medis', 'jenjang' => 'D4'],
        ['kode' => 'TRK', 'nama' => 'Teknologi Rekayasa Komputer', 'jenjang' => 'D4'],
        ['kode' => 'TRIK', 'nama' => 'Teknologi Rekayasa Instrumentasi dan Kontrol', 'jenjang' => 'D4'],
        ['kode' => 'TREM', 'nama' => ' Teknologi Rekayasa Elektro-medis', 'jenjang' => 'D4'],
        ['kode' => 'RPL', 'nama' => ' Rekayasa Perangkat Lunak', 'jenjang' => 'D4'],
        ['kode' => 'SIKC', 'nama' => ' Sistem Informasi Kota Cerdas', 'jenjang' => 'D4'],
        ['kode' => 'PM', 'nama' => '  Perancangan Manufaktur', 'jenjang' => 'D4']
    ];

    return view('konten.prodi', compact('title','slug','prodi'));
});

// Route::get('/home', function () {
//     return view('home');
// });

// Route::get('/mahasiswa', function () {
//     return view('mahasiswa');
// });

// Route::get('/prodi', function () {
//     return view('prodi');
// });

Route::get('/mhs', [mhsController::class, 'index'])->name('mhs');
// Route::get('home', [homeController::class, 'index'])->name('home');
// Route::get('/mahasiswa', [mahasiswaController::class, 'index'])->name('mahasiswa');
// Route::get('/prodi', [prodiController::class, 'index'])->name('prodi');
// Route::get('/mhs', [mhsController::class, 'index'])->name('mhs');