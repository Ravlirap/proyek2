@extends('layouts.main')

@section('content')
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
    /* Import Google Fonts untuk font modern (opsional, tambahkan di head layout jika belum ada) */
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap');

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