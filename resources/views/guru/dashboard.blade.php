@extends('guru.layouts.main')

@section('content')
<div class="p-6">
    <h1 class="text-2xl font-bold mb-4">Dashboard Guru</h1>

   <div class="dashboard-card mb-6">
        <h2 class="text-xl font-semibold">Selamat datang, <span class="text-blue-700">{{ $user->name }}</span>! 👋</h2>
        <p class="text-gray-600 mt-1">Semoga hari Anda menyenangkan dan penuh semangat!</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">

        <a href="{{ route('guru.materi.index') }}" class="quick-card">
            <div class="icon-circle bg-blue-100 text-blue-700">
                📘
            </div>
            <h3 class="quick-title">Materi Pembelajaran</h3>
            <p class="quick-desc">Lihat materi yang telah diberikan pengajar.</p>
        </a>
    </div>
</div>
@endsection