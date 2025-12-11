@extends('layouts.main')

@section('content')
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

<div class="container py-5">
    <h1 class="text-center mb-5 mt-5 fw-bold text-gradient">Artikel Terbaru</h1>
    <div class="articles-grid">
        <!-- Artikel Dummy 1 -->
        <div class="article-card">
            <div class="card h-100 shadow-sm">
                <img src="img/lpk4.jpg" class="card-img-top" alt="Judul Artikel 1">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">Judul Artikel 1</h5>
                    <p class="text-muted small mb-2">Oleh Admin • 20 Okt 2025</p>
                    <p class="card-text flex-grow-1">Ini adalah ringkasan singkat dari artikel pertama. Konten ini hanya contoh statis.</p>
                    <a href="#" class="btn btn-primary mt-auto">
                        <i class="bi bi-arrow-right-circle"></i> Baca Selengkapnya
                    </a>
                </div>
            </div>
        </div>
        <!-- Artikel Dummy 2 -->
        <div class="article-card">
            <div class="card h-100 shadow-sm">
                <img src="img/lpk5.jpg" class="card-img-top" alt="Judul Artikel 2">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">Judul Artikel 2</h5>
                    <p class="text-muted small mb-2">Oleh Penulis • 18 Okt 2025</p>
                    <p class="card-text flex-grow-1">Ringkasan artikel kedua. Menggunakan Bootstrap card untuk tampilan modern dan responsif.</p>
                    <a href="#" class="btn btn-primary mt-auto">
                        <i class="bi bi-arrow-right-circle"></i> Baca Selengkapnya
                    </a>
                </div>
            </div>
        </div>
        <!-- Artikel Dummy 3 -->
        <div class="article-card">
            <div class="card h-100 shadow-sm">
                <img src="img/lpk6.jpg" class="card-img-top" alt="Judul Artikel 3">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">Judul Artikel 3</h5>
                    <p class="text-muted small mb-2">Oleh Admin • 15 Okt 2025</p>
                    <p class="card-text flex-grow-1">Contoh artikel ketiga dengan gambar, judul, dan ringkasan singkat.</p>
                    <a href="#" class="btn btn-primary mt-auto">
                        <i class="bi bi-arrow-right-circle"></i> Baca Selengkapnya
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    /* Import Google Fonts untuk font modern (opsional, tambahkan di head layout jika belum ada)
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap'); */

    body {
        font-family: 'Poppins', sans-serif;
    }

     :root {
        --primary: #0800ff;
        --secondary: #123456;
        --dark: #1a1a1a;
        --gray: #666;
        --light-bg: #f8f9fa;
        --radius: 10px;
        --shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 20px;
        position: relative;
        z-index: 1;
    }

    .text-gradient {
        background: linear-gradient(45deg, #007bff, #0c0ca7);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

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

    .articles-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 2rem;
        justify-items: center;
    }

    .article-card {
        width: 100%;
        max-width: 350px;
        opacity: 0;
        transform: translateY(20px);
        animation: fadeInUp 0.6s ease-out forwards;
    }

    .article-card:nth-child(1) { animation-delay: 0.1s; }
    .article-card:nth-child(2) { animation-delay: 0.2s; }
    .article-card:nth-child(3) { animation-delay: 0.3s; }

    @keyframes fadeInUp {
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .card {
        border: none;
        border-radius: 15px;
        overflow: hidden;
        transition: all 0.3s ease;
        background: #fff;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    }

    .card:hover {
        transform: translateY(-10px);
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
    }

    .card-img-top {
        height: 200px;
        object-fit: cover;
        transition: transform 0.3s ease;
    }

    .card:hover .card-img-top {
        transform: scale(1.05);
    }

    .btn-primary {
        background: linear-gradient(45deg, #007bff, #0056b3);
        border: none;
        border-radius: 25px;
        padding: 10px 20px;
        transition: all 0.3s ease;
        font-weight: 500;
    }

    /* Responsivitas */
    @media (max-width: 768px) {
        .articles-grid {
            grid-template-columns: 1fr;
            gap: 1.5rem;
        }
        .container {
            padding: 0 15px;
        }
    }

    @media (min-width: 769px) and (max-width: 1024px) {
        .articles-grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }
</style>
@endsection
