@extends('admin.layouts.main')
@section('title', 'Detail Artikel')
@section('content')

<div class="container-fluid py-4">

    <div class="mb-4 border-bottom pb-3">
        <h1 class="h3 fw-bold">{{ $artikel->judul }}</h1>
    </div>

    <div class="card p-4 shadow-sm">

        <img src="{{ asset('img/artikel/' . $artikel->gambar) }}" width="400" class="rounded shadow mb-3">

        <p class="text-muted">Diterbitkan: {{ $artikel->created_at->format('d M Y') }}</p>

        <div class="mt-3">
            {!! nl2br(e($artikel->konten)) !!}
        </div>

        <div class="mt-4">
            <a href="{{ route('admin.artikel.index') }}" class="btn btn-secondary">Kembali</a>
        </div>

    </div>

</div>
@endsection
