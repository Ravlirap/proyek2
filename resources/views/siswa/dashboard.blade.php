@extends('siswa.layouts.main')

@section('content')
<div class="p-6">
    <h1 class="text-2xl font-bold mb-4">Dashboard Siswa</h1>

   <div class="dashboard-card mb-6">
        <h2 class="text-xl font-semibold">Selamat datang, <span class="text-blue-700">{{ $user->name }}</span>! 👋</h2>
        <p class="text-gray-600 mt-1">Semoga harimu menyenangkan dan penuh semangat belajar!</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">

        <a href="{{ route('siswa.konten.materi') }}" class="quick-card">
            <div class="icon-circle bg-blue-100 text-blue-700">
                📘
            </div>
            <h3 class="quick-title">Materi Pembelajaran</h3>
            <p class="quick-desc">Lihat materi yang telah diberikan pengajar.</p>
        </a>

        <a href="{{ route('siswa.konten.jadwal') }}" class="quick-card">
            <div class="icon-circle bg-indigo-100 text-indigo-700">
                📅
            </div>
            <h3 class="quick-title">Jadwal Pelatihan</h3>
            <p class="quick-desc">Cek jadwal kegiatan dan pelatihan mingguan.</p>
        </a>

        {{-- <a href="{{ route('siswa.galeri') }}" class="quick-card">
            <div class="icon-circle bg-sky-100 text-sky-700">
                🖼️
            </div>
            <h3 class="quick-title">Galeri Kegiatan</h3>
            <p class="quick-desc">Dokumentasi foto kegiatan siswa.</p>
        </a> --}}
    </div>
</div>

<style>

    /* GREETING CARD */
    .dashboard-card {
        background: white;
        padding: 22px;
        border-radius: 14px;
        box-shadow: 0 4px 12px rgba(0,0,0,0.08);
        border-left: 6px solid #1d4ed8;
        transition: 0.25s ease;
    }

    .dashboard-card:hover {
        transform: translateX(4px);
        box-shadow: 0 8px 20px rgba(0,0,0,0.15);
    }

    /* QUICK ACCESS CARD */
    .quick-card {
        background: white;
        border-radius: 14px;
        padding: 22px;
        text-decoration: none;
        display: block;
        box-shadow: 0 4px 12px rgba(0,0,0,0.08);
        transition: 0.25s ease;
        border: 1px solid #e5e7eb;
    }

    .quick-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 10px 24px rgba(0,0,0,0.15);
        border-color: #1d4ed8;
    }

    .icon-circle {
        width: 48px;
        height: 48px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 22px;
        margin-bottom: 10px;
        font-weight: bold;
    }

    .quick-title {
        font-size: 18px;
        font-weight: 700;
        color: #1e293b;
    }

    .quick-desc {
        font-size: 14px;
        margin-top: 4px;
        color: #64748b;
        line-height: 1.4;
    }

</style>
@endsection
