@extends('layouts.main')
@section('content')

<div class="artikel-page">
    <!-- Hero Section -->
    <section class="hero-section text-center">
        <div class="container">
            <h1 class="page-title">{{ $title }}</h1>
            <p class="lead">Kumpulan artikel dan berita terbaru dari LPK Seikou.</p>
        </div>
    </section>

    <section class="artikel-section">
        <div class="container">
            <!-- Tombol Tambah Artikel -->
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h2 class="fw-bold text-secondary">Daftar Artikel</h2>
                <a href="{{ route('artikel.create') }}" class="btn btn-danger">
                    <i class="bi bi-plus-circle"></i> Tambah Artikel
                </a>
            </div>

            <!-- Pesan Sukses -->
            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            <!-- Grid Artikel -->
            <div class="row">
                @forelse($artikels as $artikel)
                    <div class="col-md-4 mb-4">
                        <div class="card shadow-sm border-0 h-100">
                            @if($artikel->gambar)
                                <img src="{{ asset('storage/' . $artikel->gambar) }}" class="card-img-top" alt="{{ $artikel->judul }}" style="height: 220px; object-fit: cover;">
                            @else
                                <img src="{{ asset('img/default.jpg') }}" class="card-img-top" alt="Default" style="height: 220px; object-fit: cover;">
                            @endif

                            <div class="card-body">
                                <h5 class="card-title fw-bold">{{ $artikel->judul }}</h5>
                                <p class="card-text text-muted" style="font-size: 0.9rem;">
                                    {{ Str::limit(strip_tags($artikel->isi), 100, '...') }}
                                </p>
                            </div>

                            <div class="card-footer bg-white border-0 d-flex justify-content-between">
                                <a href="{{ route('artikel.show', $artikel->id) }}" class="btn btn-outline-secondary btn-sm">
                                    <i class="bi bi-eye"></i> Lihat
                                </a>
                                <a href="{{ route('artikel.edit', $artikel->id) }}" class="btn btn-outline-primary btn-sm">
                                    <i class="bi bi-pencil-square"></i> Edit
                                </a>
                                <form action="{{ route('artikel.destroy', $artikel->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus artikel ini?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-outline-danger btn-sm">
                                        <i class="bi bi-trash"></i> Hapus
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="text-center py-5">
                        <h5 class="text-muted">Belum ada artikel.</h5>
                    </div>
                @endforelse
            </div>

            <!-- Pagination -->
            <div class="mt-4 d-flex justify-content-center">
                {{ $artikels->links() }}
            </div>
        </div>
    </section>
</div>

<style>
    :root {
        --primary: #c9003c;
        --secondary: #2c3e50;
        --gray: #6b7280;
    }

    .hero-section {
        background: linear-gradient(to right, #fff, #fef2f4);
        padding-top: 140px;
        padding: 60px 0 40px;
        text-align: center;
        margin-bottom: 40px;
    }

    .page-title {
        font-size: 2.5rem;
        font-weight: 700;
        color: var(--secondary);
        margin-bottom: 12px;
    }

    .lead {
        color: var(--gray);
        max-width: 800px;
        margin: 0 auto;
        line-height: 1.6;
    }

    header {
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        z-index: 1000;
    }

    body {
        padding-top: 120px; /* sesuaikan tinggi header */
    }

    .card-title {
        color: var(--secondary);
    }

    .btn-danger {
        background: var(--primary);
        border: none;
    }

    .btn-danger:hover {
        background: #a80033;
    }
</style>

@endsection
