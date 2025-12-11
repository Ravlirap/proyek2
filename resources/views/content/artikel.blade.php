@extends('layouts.main')

@section('content')
<<<<<<< HEAD
<section class="hero-section">
    <div class="container">
      <div class="hero-content">
        <h1 class="hero-title">
          Artikel <span class="highlight">LPK Seikou</span>
        </h1>
        <p class="hero-description">
          Kumpulan artikel tentang LPK Seikou dan kegiatan-kegiatan di LPK Seikou
        </p>
      </div>

      <div class="hero-decoration">
        <div class="circle circle-1"></div>
        <div class="circle circle-2"></div>
        <div class="circle circle-3"></div>

        <span class="sakura" style="left: 12%; animation-delay: 0s;"></span>
        <span class="sakura" style="left: 28%; animation-delay: 1.2s;"></span>
        <span class="sakura" style="left: 45%; animation-delay: 2.4s;"></span>
        <span class="sakura" style="left: 60%; animation-delay: 0.8s;"></span>
        <span class="sakura" style="left: 78%; animation-delay: 1.8s;"></span>
      </div>
    </div>
  </section>
=======
>>>>>>> 71fbae4882d7d039d45f1faf6f7f3f1696eaae95

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
    /* Import Google Fonts untuk font modern (opsional, tambahkan di head layout jika belum ada)
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap'); */

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

<<<<<<< HEAD
    /* Hero Section */
.hero-section {
    position: relative;
    background: linear-gradient(135deg, #1a2e6f, #0044cc);
    padding: 140px 20px 150px;
    margin-top: 84px;
    overflow: hidden;
    width: 100vw;
    left: 50%;
    margin-left: -50vw;
    box-shadow: 0 25px 60px rgba(0,0,0,0.25);
    color: white;
    }

    .hero-decoration .circle {
    position: absolute;
    border-radius: 50%;
    background: rgba(255,255,255,0.07);
    animation: float 6s ease-in-out infinite;
    }

    .circle-1 { width: 120px; height: 120px; top: 50px; left: 5%; animation-delay: 0s; }
    .circle-2 { width: 180px; height: 180px; bottom: 40px; right: 10%; animation-delay: 1.5s; }
    .circle-3 { width: 80px; height: 80px; top: 160px; right: 35%; animation-delay: 3s; }

    @keyframes float {
    0%, 100% { transform: translateY(0); }
    50% { transform: translateY(-20px); }
    }

    .hero-section::after {
    content: "";
    position: absolute;
    top: -80px;
    right: -120px;
    width: 380px;
    height: 380px;
    background: radial-gradient(circle, rgba(255,255,255,0.25), transparent);
    filter: blur(20px);
    animation: pulse 6s infinite ease-in-out;
    }

    @keyframes pulse {
        0% { transform: scale(1); opacity: .5; }
        50% { transform: scale(1.15); opacity: .8; }
        100% { transform: scale(1); opacity: .5; }
    }

    .hero-title {
        font-size: 3rem;
        font-weight: 900;
        line-height: 1.2;
        animation: slideDown .9s ease-out;
    }

    .hero-title .highlight {
        color: #ffcbde;
        text-shadow: 0 0 12px rgba(255,255,255,0.5);
    }

    @keyframes slideDown {
        from { opacity: 0; transform: translateY(-25px); }
        to { opacity: 1; transform: translateY(0); }
    }

    .hero-description {
        font-size: 1.2rem;
        margin-top: 18px;
        max-width: 650px;
        animation: fadeUp .9s ease-out .2s backwards;
    }

    @keyframes fadeUp {
        from { opacity: 0; transform: translateY(25px); }
        to { opacity: 1; transform: translateY(0); }
    }

    .sakura {
    position: absolute;
    width: 15px;
    height: 15px;
    background: rgba(255, 205, 222, 0.85);
    border-radius: 75% 25% 75% 25%;
    filter: blur(0.5px);
    animation: sakuraFall 8s linear infinite;
    pointer-events: none;
    }

    @keyframes sakuraFall {
        0% {
            transform: translateY(-30px) rotate(0deg);
            opacity: .9;
        }
        100% {
            transform: translateY(320px) rotate(360deg);
            opacity: .2;
        }
    }

=======
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
>>>>>>> 71fbae4882d7d039d45f1faf6f7f3f1696eaae95
    .articles-grid {
        grid-template-columns: 1fr;
    }
}
</style>
<<<<<<< HEAD
@endsection
=======

@endsection
>>>>>>> 71fbae4882d7d039d45f1faf6f7f3f1696eaae95
