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
    .dashboard-card {
        background: white;
        padding: 24px;
        border-radius: 16px;
        border-left: 6px solid #2563eb;
        box-shadow: 0 6px 18px rgba(0, 0, 0, 0.06);
        transition: transform 0.25s ease, box-shadow 0.25s ease;
    }

    .dashboard-card:hover {
        transform: translateX(6px);
        box-shadow: 0 12px 28px rgba(0, 0, 0, 0.15);
    }

    .quick-card {
        background: white;
        border-radius: 16px;
        padding: 24px;
        display: block;
        text-decoration: none;

        border: 1px solid #e2e8f0;
        box-shadow: 0 6px 16px rgba(0, 0, 0, 0.07);
        transition: 0.25s ease;
    }

    .quick-card:hover {
        transform: translateY(-6px);
        box-shadow: 0 14px 32px rgba(37, 99, 235, 0.25);
        border-color: #2563eb;
    }

    .icon-circle {
        width: 55px;
        height: 55px;
        border-radius: 50%;
        background: #ebf2ff;
        color: #2563eb;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 24px;
        margin-bottom: 12px;
        font-weight: 700;
        transition: 0.25s ease;
    }

    .quick-card:hover .icon-circle {
        background: #2563eb;
        color: white;
        transform: scale(1.07);
    }

    .quick-title {
        font-size: 18px;
        font-weight: 700;
        color: #1e293b;
        margin-bottom: 4px;
    }

    .quick-desc {
        font-size: 14px;
        color: #64748b;
        line-height: 1.5;
    }

    @media (max-width: 768px) {
        .quick-title {
            font-size: 16px;
        }
        .icon-circle {
            width: 50px;
            height: 50px;
        }
    }
</style>
@endsection
