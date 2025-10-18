@extends('layouts.main')

@section('content')
<section class="artikel-detail-section">
    <div class="container">
        <div class="artikel-detail">
            <h1 class="artikel-title">{{ $artikel->judul }}</h1>

            @if($artikel->gambar)
                <img src="{{ asset('storage/' . $artikel->gambar) }}" class="artikel-detail-img mb-4" alt="{{ $artikel->judul }}">
            @endif

            <div class="artikel-body">
                {!! nl2br(e($artikel->isi)) !!}
            </div>

            <div class="text-end mt-4">
                <a href="{{ route('artikel.index') }}" class="btn btn-secondary">Kembali</a>
            </div>
        </div>
    </div>
</section>

<style>
.artikel-detail-section {
    padding-top: 140px;
    padding-bottom: 80px;
}
.artikel-detail {
    background: #fff;
    padding: 40px;
    border-radius: 12px;
    box-shadow: 0 4px 10px rgba(0,0,0,0.08);
    max-width: 900px;
    margin: 0 auto;
}
.artikel-title {
    font-size: 2rem;
    font-weight: 700;
    margin-bottom: 20px;
}
.artikel-detail-img {
    width: 100%;
    border-radius: 12px;
    object-fit: cover;
}
.artikel-body {
    font-size: 1.05rem;
    line-height: 1.7;
    color: #444;
}
</style>
@endsection
