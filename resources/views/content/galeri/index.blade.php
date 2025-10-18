@extends('layouts.main')

@section('content')
<style>
    /* Tambah jarak agar konten tidak ketutupan navbar */
    body {
        padding-top: 140px;
        background-color: #f8f9fa;
    }

    h2 {
        font-weight: 700;
        color: #0d6efd;
        text-align: center;
    }

    .gallery-container {
        max-width: 1100px;
        margin: 0 auto;
    }

    .card {
        border: none;
        border-radius: 15px;
        overflow: hidden;
        transition: all 0.3s ease;
    }

    .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
    }

    .card-img-top {
        height: 240px;
        object-fit: cover;
    }

    .card-title {
        font-weight: 600;
        color: #333;
    }

    .card-body {
        background-color: #fff;
        padding: 20px;
        border-top: 1px solid #eee;
    }

    .btn-sm {
        border-radius: 8px;
        font-size: 14px;
        padding: 6px 10px;
    }

    .alert-success {
        border-radius: 10px;
    }

    .empty-message {
        text-align: center;
        color: #6c757d;
        margin-top: 50px;
        font-style: italic;
    }
</style>

<div class="container gallery-container py-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>Galeri Kegiatan</h2>
        <a href="{{ route('galeri.create') }}" class="btn btn-primary shadow-sm">+ Tambah Foto</a>
    </div>

    {{-- Pesan sukses --}}
    @if(session('success'))
        <div class="alert alert-success text-center shadow-sm">{{ session('success') }}</div>
    @endif

    {{-- Jika ada data galeri --}}
    @if($galeris->count())
        <div class="row g-4">
            @foreach($galeris as $galeri)
                <div class="col-md-4 col-sm-6">
                    <div class="card h-100 shadow-sm">
                        @if($galeri->gambar)
                            <img src="{{ asset('storage/' . $galeri->gambar) }}"
                                 class="card-img-top"
                                 alt="{{ $galeri->judul }}">
                        @else
                            <img src="https://via.placeholder.com/400x240?text=Tidak+Ada+Gambar"
                                 class="card-img-top"
                                 alt="No Image">
                        @endif

                        <div class="card-body text-center">
                            <h5 class="card-title">{{ $galeri->judul }}</h5>
                            <p class="text-muted small mb-3">{{ Str::limit($galeri->deskripsi, 80) }}</p>
                            <div class="d-flex justify-content-center gap-2">
                                <a href="{{ route('galeri.show', $galeri->id) }}" class="btn btn-outline-primary btn-sm">
                                    <i class="bi bi-eye"></i> Lihat
                                </a>
                                <a href="{{ route('galeri.edit', $galeri->id) }}" class="btn btn-outline-warning btn-sm">
                                    <i class="bi bi-pencil"></i> Edit
                                </a>
                                <form action="{{ route('galeri.destroy', $galeri->id) }}" method="POST" class="d-inline"
                                      onsubmit="return confirm('Yakin ingin menghapus foto ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-outline-danger btn-sm">
                                        <i class="bi bi-trash"></i> Hapus
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        {{-- Pagination --}}
        <div class="mt-5 d-flex justify-content-center">
            {{ $galeris->links() }}
        </div>
    @else
        <p class="empty-message">Belum ada foto di galeri.</p>
    @endif
</div>
@endsection
