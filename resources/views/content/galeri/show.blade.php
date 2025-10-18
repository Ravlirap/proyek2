@extends('layouts.main')

@section('content')
<div class="container py-5">
    <a href="{{ route('galeri.index') }}" class="btn btn-outline-secondary mb-3">← Kembali</a>

    <div class="card shadow-sm">
        @if($galeri->gambar)
            <img src="{{ asset('storage/' . $galeri->gambar) }}" class="card-img-top" alt="{{ $galeri->judul }}" style="max-height: 450px; object-fit: cover;">
        @endif
        <div class="card-body text-center">
            <h3 class="card-title mb-3">{{ $galeri->judul }}</h3>
            <p class="text-muted">{{ $galeri->deskripsi }}</p>
            <p class="small text-secondary">Diupload pada {{ $galeri->created_at->format('d M Y') }}</p>
        </div>
    </div>
</div>
@endsection
