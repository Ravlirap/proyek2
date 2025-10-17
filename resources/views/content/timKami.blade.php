@extends('layouts.main')
@section('content')

<div class="tim-page">
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <h1 class="page-title">Tim Kami</h1>
            <p class="lead">
                Tim profesional LPK Seikou yang berdedikasi membimbing peserta menuju kesuksesan, baik di Indonesia maupun di Jepang.
            </p>
        </div>
    </section>

    <!-- Tim Kami Section -->
    <section class="tim-section">
        <div class="container">
            <div class="tim-grid">
                <!-- Anggota Tim 1 -->
                <div class="tim-card">
                    <img src="{{ asset('img/tim1.jpg') }}" alt="Kepala LPK" loading="lazy">
                    <div class="tim-info">
                        <h4>Yamada Taro</h4>
                        <p>Kepala LPK Seikou</p>
                    </div>
                </div>

                <!-- Anggota Tim 2 -->
                <div class="tim-card">
                    <img src="{{ asset('img/tim1.jpg') }}" alt="Instruktur Bahasa Jepang" loading="lazy">
                    <div class="tim-info">
                        <h4>Siti Rahmawati</h4>
                        <p>Instruktur Bahasa Jepang</p>
                    </div>
                </div>

                <!-- Anggota Tim 3 -->
                <div class="tim-card">
                    <img src="{{ asset('img/tim1.jpg') }}" alt="Koordinator Pelatihan" loading="lazy">
                    <div class="tim-info">
                        <h4>Budi Santoso</h4>
                        <p>Koordinator Pelatihan</p>
                    </div>
                </div>

                <!-- Anggota Tim 4 -->
                <div class="tim-card">
                    <img src="{{ asset('img/tim1.jpg') }}" alt="Staf Administrasi" loading="lazy">
                    <div class="tim-info">
                        <h4>Keiko Nakamura</h4>
                        <p>Staf Administrasi</p>
                    </div>
                </div>

                <!-- Anggota Tim 5 -->
                <div class="tim-card">
                    <img src="{{ asset('img/tim1.jpg') }}" alt="Pembimbing Peserta" loading="lazy">
                    <div class="tim-info">
                        <h4>Andi Pratama</h4>
                        <p>Pembimbing Peserta</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<style>
    :root {
        --primary: #c9003c;
        --secondary: #2c3e50;
        --gray: #6b7280;
        --radius: 12px;
        --shadow: 0 4px 10px rgba(0,0,0,0.08);
    }

    /* Hero Section */
    .hero-section {
        background: linear-gradient(to right, #fff, #fef2f4);
        padding-top: 140px;
        padding: 60px 0 40px;
        margin-bottom: 40px;
        text-align: center;
    }

    .page-title {
        font-size: 2.5rem;
        color: var(--secondary);
        font-weight: 700;
        margin-bottom: 16px;
    }

    .lead {
        font-size: 1.1rem;
        color: var(--gray);
        max-width: 800px;
        margin: 0 auto;
        line-height: 1.6;
    }

    /* Tim Kami Section */
    .tim-section {
        padding: 40px 0 60px;
    }

    .tim-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 24px;
    }

    .tim-card {
        background: white;
        border-radius: var(--radius);
        box-shadow: var(--shadow);
        overflow: hidden;
        text-align: center;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .tim-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 6px 16px rgba(0,0,0,0.12);
    }

    .tim-card img {
        width: 100%;
        height: 280px;
        object-fit: cover;
    }

    .tim-info {
        padding: 20px;
    }

    .tim-info h4 {
        font-size: 1.2rem;
        font-weight: 600;
        color: var(--secondary);
        margin-bottom: 6px;
    }

    .tim-info p {
        color: var(--gray);
        font-size: 0.95rem;
        margin: 0;
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

    @media (max-width: 768px) {
        .page-title { font-size: 2rem; }
        .tim-info h4 { font-size: 1.1rem; }
    }

    @media (max-width: 500px) {
        .tim-card img { height: 240px; }
    }
</style>

@endsection
