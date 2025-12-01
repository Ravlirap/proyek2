@extends('layouts.main')

@section('content')

<div class="container py-5">
    <h1 class="text-center mt-5 mb-5 fw-bold text-gradient">Artikel Terbaru</h1>

    <div class="articles-grid">

        @foreach ($artikels as $artikel)
        <div class="article-card">
            <div class="card h-100 shadow-sm">

                <!-- GAMBAR ARTIKEL -->
                <img src="{{ asset('img/artikel/' . $artikel->gambar) }}"
                     class="card-img-top"
                     alt="{{ $artikel->judul }}">

                <div class="card-body d-flex flex-column">

                    <h5 class="card-title">{{ $artikel->judul }}</h5>

                    <p class="text-muted small mb-2">
                        Oleh {{ $artikel->penulis }} • 
                        {{ \Carbon\Carbon::parse($artikel->tanggal_publikasi)->translatedFormat('d M Y') }}
                    </p>

                    <p class="card-text flex-grow-1">
                        {{ Str::limit(strip_tags($artikel->isi), 120, '...') }}
                    </p>

                    <a href="{{ url('/artikel/' . $artikel->slug) }}"
                       class="btn btn-primary mt-auto">
                        <i class="bi bi-arrow-right-circle"></i> Baca Selengkapnya
                    </a>
                </div>
            </div>
        </div>
        @endforeach

    </div>
</div>

<style>
/* FONT */
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap');
body { font-family: 'Poppins', sans-serif; }

/* GRID */
.articles-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(330px, 1fr));
    gap: 2rem;
}

/* CARD WRAPPER */
.article-card {
    width: 100%;
    opacity: 0;
    transform: translateY(20px);
    animation: fadeUp .5s forwards ease-out;
}

.article-card:nth-child(1) { animation-delay: .1s; }
.article-card:nth-child(2) { animation-delay: .2s; }
.article-card:nth-child(3) { animation-delay: .3s; }

/* ANIMATION */
@keyframes fadeUp {
    to { opacity: 1; transform: translateY(0); }
}

/* CARD */
.card {
    border: none;
    border-radius: 15px;
    overflow: hidden;
    background: #fff;
    transition: .3s;
    box-shadow: 0 4px 12px rgba(0,0,0,0.1);
}
.card:hover {
    transform: translateY(-10px);
    box-shadow: 0 12px 28px rgba(0,0,0,0.2);
}

/* IMAGE */
.card-img-top {
    height: 220px;
    object-fit: cover;
    transition: .3s;
}
.card:hover .card-img-top {
    transform: scale(1.05);
}

/* BUTTON */
.btn-primary {
    background: linear-gradient(45deg, #007bff, #0056d6);
    border: none;
    border-radius: 25px;
    padding: 10px 20px;
}

/* RESPONSIVE */
@media (max-width: 768px) {
    .articles-grid {
        grid-template-columns: 1fr;
    }
}
</style>

@endsection