@extends('layouts.main')

@section('content')
<section class="hero-section">
    <div class="container text-center">
        <h1 class="page-title">Artikel LPK Seikou</h1>
        <p class="lead">Berbagai informasi, kegiatan, dan wawasan terbaru seputar LPK Seikou dan dunia kerja di Jepang.</p>
    </div>
</section>

<section class="artikel-list-section">
    <div class="container">
        <div class="text-end mb-4">
            <a href="{{ route('artikel.create') }}" class="btn btn-primary">+ Tambah Artikel</a>
        </div>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <div class="artikel-grid">
            @foreach ($artikels as $artikel)
            <div class="artikel-card">
                @if($artikel->gambar)
                    <img src="{{ asset('storage/' . $artikel->gambar) }}" alt="{{ $artikel->judul }}" class="artikel-img">
                @endif
                <div class="artikel-content">
                    <h4>{{ $artikel->judul }}</h4>
                    <p>{{ Str::limit($artikel->isi, 100) }}</p>
                    <div class="artikel-actions">
                        <a href="{{ route('artikel.show', $artikel->id) }}" class="btn btn-outline-primary btn-sm">Baca</a>
                        <a href="{{ route('artikel.edit', $artikel->id) }}" class="btn btn-outline-warning btn-sm">Edit</a>
                        <form action="{{ route('artikel.destroy', $artikel->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-outline-danger btn-sm" onclick="return confirm('Hapus artikel ini?')">Hapus</button>
                        </form>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <div class="pagination-wrapper">
            {{ $artikels->links() }}
        </div>
    </div>
</section>

<style>
.hero-section {
    background: linear-gradient(to right, #fff, #fef2f4);
    padding-top: 140px;
    padding: 60px 0 40px;
    text-align: center;
}

.artikel-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 24px;
}

.artikel-card {
    background: #fff;
    border-radius: 12px;
    box-shadow: 0 4px 10px rgba(0,0,0,0.08);
    overflow: hidden;
    transition: transform 0.3s ease;
}

.artikel-card:hover { transform: translateY(-5px); }

.artikel-img {
    width: 100%;
    height: 200px;
    object-fit: cover;
}

.artikel-content {
    padding: 20px;
}

.artikel-content h4 {
    font-weight: 600;
    margin-bottom: 10px;
}

.artikel-actions .btn {
    margin-right: 5px;
}

.pagination-wrapper {
    margin-top: 30px;
    display: flex;
    justify-content: center;
}
</style>
@endsection
