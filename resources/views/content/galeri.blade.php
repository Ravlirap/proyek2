@extends('layouts.main')
@section('content')
<div class="galeri-page">
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <h1 class="page-title">Galeri Kegiatan LPK Seikou</h1>
            <p class="lead">Lihat berbagai kegiatan pelatihan, acara, dan momen berharga peserta LPK Seikou baik di Indonesia maupun di Jepang.</p>
        </div>
    </section>

    <!-- Galeri Grid Section -->
    <section class="galeri-section">
        <div class="container">
            <div class="galeri-grid">
                <!-- Galeri Item 1 -->
                <div class="galeri-item">
                    <img src="{{ asset('img/galeri6.jpg') }}" alt="Pelatihan Bahasa Jepang" loading="lazy">
                    <div class="galeri-overlay">
                        <h4>Pelatihan Bahasa Jepang</h4>
                        <p>Kelas interaktif bersama instruktur berpengalaman.</p>
                    </div>
                </div>

                <!-- Galeri Item 2 -->
                <div class="galeri-item">
                    <img src="{{ asset('img/galeri2.jpg') }}" alt="Kegiatan Fisik" loading="lazy">
                    <div class="galeri-overlay">
                        <h4>Latihan Fisik</h4>
                        <p>Menanamkan disiplin dan kekuatan mental peserta.</p>
                    </div>
                </div>

                <!-- Galeri Item 3 -->
                <div class="galeri-item">
                    <img src="{{ asset('img/galeri4.jpg') }}" alt="Ujian Skill" loading="lazy">
                    <div class="galeri-overlay">
                        <h4>Simulasi Ujian Skill</h4>
                        <p>Persiapan intensif sebelum seleksi IM Japan.</p>
                    </div>
                </div>

                <!-- Galeri Item 4 -->
                <div class="galeri-item">
                    <img src="{{ asset('img/galeri5.jpg') }}" alt="Kegiatan Budaya Jepang" loading="lazy">
                    <div class="galeri-overlay">
                        <h4>Pengalaman Budaya Jepang</h4>
                        <p>Mengenal etika dan budaya kerja Jepang.</p>
                    </div>
                </div>

                <!-- Galeri Item 5 -->
                <div class="galeri-item">
                    <img src="{{ asset('img/galeri1.jpg') }}" alt="Pelepasan Peserta" loading="lazy">
                    <div class="galeri-overlay">
                        <h4>Pelepasan Peserta</h4>
                        <p>Momen keberangkatan peserta menuju Jepang.</p>
                    </div>
                </div>

                <!-- Galeri Item 6 -->
                <div class="galeri-item">
                    <img src="{{ asset('img/galeri3.jpg') }}" alt="Peserta di Jepang" loading="lazy">
                    <div class="galeri-overlay">
                        <h4>Peserta di Jepang</h4>
                        <p>Meniti karir dan pengalaman berharga di Negeri Sakura.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


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

    /* Galeri Grid */
    .galeri-section {
        padding: 40px 0 60px;
    }

    .galeri-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 20px;
    }

    .galeri-item {
        position: relative;
        overflow: hidden;
        border-radius: var(--radius);
        box-shadow: var(--shadow);
        cursor: pointer;
        transition: transform 0.3s ease;
    }

    .galeri-item:hover {
        transform: scale(1.02);
    }

    .galeri-item img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.4s ease;
    }

    .galeri-item:hover img {
        transform: scale(1.1);
    }

    .galeri-overlay {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        padding: 20px;
        background: linear-gradient(to top, rgba(0,0,0,0.7), transparent);
        color: white;
        opacity: 0;
        transform: translateY(30px);
        transition: all 0.3s ease;
    }

    .galeri-item:hover .galeri-overlay {
        opacity: 1;
        transform: translateY(0);
    }

    .galeri-overlay h4 {
        margin: 0;
        font-size: 1.2rem;
        font-weight: 600;
    }

    .galeri-overlay p {
        margin-top: 5px;
        font-size: 0.9rem;
        opacity: 0.9;
    }

    /* CTA Section */
    .cta-section {
        background: linear-gradient(to right, var(--primary), #ff4d6d);
        color: white;
        padding: 60px 0;
        margin-top: 60px;
        text-align: center;
        width: 100vw;
        position: relative;
        left: 50%;
        right: 50%;
        margin-left: -50vw;
        margin-right: -50vw;
    }

    .cta-content {
        max-width: 700px;
        margin: 0 auto;
        padding: 0 20px;
    }

    .cta-content h2 {
        font-size: 2.3rem;
        margin-bottom: 20px;
    }

    .cta-content p {
        font-size: 1.05rem;
        opacity: 0.9;
        margin-bottom: 24px;
    }

    .btn-primary {
        display: inline-block;
        padding: 12px 30px;
        background: white;
        color: var(--primary);
        border-radius: 25px;
        text-decoration: none;
        font-weight: 600;
        transition: transform 0.2s ease;
    }

    .btn-primary:hover {
        transform: translateY(-2px);
    }

    @media (max-width: 768px) {
        .page-title { font-size: 2rem; }
        .galeri-grid { grid-template-columns: 1fr 1fr; }
        .cta-content h2 { font-size: 1.8rem; }
    }

    @media (max-width: 500px) {
        .galeri-grid { grid-template-columns: 1fr; }
    }
</style>
@endsection
