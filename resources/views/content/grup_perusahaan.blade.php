@extends('layouts.main')
@section('content')

<div class="grup-page">
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <h1 class="page-title">Grup Perusahaan</h1>
            <p class="lead">
                LPK Seikou bekerja sama dengan berbagai perusahaan terpercaya di Jepang dan Indonesia
                untuk memberikan peluang terbaik bagi peserta program kami.
            </p>
        </div>
    </section>

    <!-- Grup Perusahaan Section -->
    <section class="grup-section">
        <div class="container">
            <div class="grup-grid">
                <!-- Perusahaan 1 -->
                <div class="grup-card">
                    <img src="{{ asset('img/logo.png') }}" alt="Seikou Japan Co., Ltd" loading="lazy">
                    <div class="grup-info">
                        <h4>Seikou Japan Co., Ltd</h4>
                        <p>Perusahaan mitra utama di Jepang yang berfokus pada pelatihan dan penyaluran tenaga kerja terampil.</p>
                    </div>
                </div>

                <!-- Perusahaan 2 -->
                <div class="grup-card">
                    <img src="{{ asset('img/logo.png') }}" alt="PT Seikou Indonesia" loading="lazy">
                    <div class="grup-info">
                        <h4>PT Seikou Indonesia</h4>
                        <p>Menangani pelatihan dan administrasi peserta di Indonesia sebelum keberangkatan ke Jepang.</p>
                    </div>
                </div>

                <!-- Perusahaan 3 -->
                <div class="grup-card">
                    <img src="{{ asset('img/logo.png') }}" alt="IM Japan Partner" loading="lazy">
                    <div class="grup-info">
                        <h4>IM Japan Partner</h4>
                        <p>Bekerja sama dalam program magang dan pelatihan keterampilan untuk peserta Indonesia di Jepang.</p>
                    </div>
                </div>

                <!-- Perusahaan 4 -->
                <div class="grup-card">
                    <img src="{{ asset('img/logo.png') }}" alt="Seikou Training Center" loading="lazy">
                    <div class="grup-info">
                        <h4>Seikou Training Center</h4>
                        <p>Pusat pelatihan resmi untuk meningkatkan kemampuan bahasa, disiplin, dan keterampilan peserta.</p>
                    </div>
                </div>

                <!-- Perusahaan 5 -->
                <div class="grup-card">
                    <img src="{{ asset('img/logo.png') }}" alt="Seikou Consulting" loading="lazy">
                    <div class="grup-info">
                        <h4>Seikou Consulting</h4>
                        <p>Menyediakan layanan konsultasi dan pendampingan bagi perusahaan Jepang dalam perekrutan tenaga kerja asing.</p>
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

    /* Grup Section */
    .grup-section {
        padding: 40px 0 60px;
    }

    .grup-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 24px;
    }

    .grup-card {
        background: white;
        border-radius: var(--radius);
        box-shadow: var(--shadow);
        overflow: hidden;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .grup-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 6px 16px rgba(0,0,0,0.12);
    }

    .grup-card img {
        width: 100%;
        height: 220px;
        object-fit: cover;
    }

    .grup-info {
        padding: 20px;
    }

    .grup-info h4 {
        font-size: 1.2rem;
        font-weight: 600;
        color: var(--secondary);
        margin-bottom: 8px;
    }

    .grup-info p {
        color: var(--gray);
        font-size: 0.95rem;
        line-height: 1.5;
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
        .grup-info h4 { font-size: 1.1rem; }
    }

    @media (max-width: 500px) {
        .grup-card img { height: 200px; }
    }
</style>

@endsection
