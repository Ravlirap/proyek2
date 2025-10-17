@extends('layouts.main')
@section('content')
<div class="visi-misi-page">

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <h1 class="page-title">Visi & Misi LPK Seikou</h1>
            <p class="lead">Landasan dan arah LPK Seikou dalam mencetak generasi unggul yang siap berkarier di Jepang dan berkontribusi bagi Indonesia.</p>
        </div>
    </section>

    <!-- Visi & Misi Section -->
    <section class="visi-misi-section">
        <div class="container">
            <div class="visi-misi-grid">
                <div class="visi-card">
                    <h2 class="section-title">Visi</h2>
                    <p class="section-text">
                        Menjadi lembaga pelatihan kerja yang unggul dan terpercaya dalam mencetak sumber daya manusia berkompeten, berdisiplin, dan berintegritas tinggi untuk bersaing di dunia kerja internasional, khususnya di Jepang.
                    </p>
                </div>

                <div class="misi-card">
                    <h2 class="section-title">Misi</h2>
                    <ul class="misi-list">
                        <li>Menyelenggarakan pelatihan bahasa Jepang yang berkualitas dan efektif.</li>
                        <li>Membangun karakter peserta agar memiliki etos kerja tinggi dan disiplin.</li>
                        <li>Mengembangkan keterampilan teknis sesuai kebutuhan industri Jepang.</li>
                        <li>Menjalin kerja sama dengan lembaga dan perusahaan di Jepang untuk mendukung penempatan peserta.</li>
                        <li>Menanamkan nilai kejujuran, tanggung jawab, dan profesionalisme dalam setiap kegiatan pelatihan.</li>
                    </ul>
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

    /* Visi Misi Section */
    .visi-misi-section {
        padding: 40px 0 80px;
    }

    .visi-misi-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 40px;
    }

    .visi-card, .misi-card {
        background: #fff;
        border-radius: var(--radius);
        box-shadow: var(--shadow);
        padding: 40px 30px;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .visi-card:hover, .misi-card:hover {
        transform: translateY(-6px);
        box-shadow: 0 6px 18px rgba(0,0,0,0.1);
    }

    .section-title {
        font-size: 1.8rem;
        font-weight: 700;
        color: var(--primary);
        margin-bottom: 20px;
        text-align: center;
    }

    .section-text {
        color: var(--secondary);
        line-height: 1.8;
        text-align: justify;
        font-size: 1.05rem;
    }

    .misi-list {
        list-style: none;
        padding: 0;
        color: var(--secondary);
        line-height: 1.8;
        font-size: 1.05rem;
    }

    .misi-list li {
        margin-bottom: 12px;
        padding-left: 28px;
        position: relative;
    }

    .misi-list li::before {
        content: "✓";
        position: absolute;
        left: 0;
        color: var(--primary);
        font-weight: bold;
    }

    /* Responsif */
    @media (max-width: 992px) {
        .visi-misi-grid {
            grid-template-columns: 1fr;
        }
    }

    @media (max-width: 768px) {
        .page-title { font-size: 2rem; }
        .section-title { font-size: 1.5rem; }
    }

    header {
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        z-index: 1000;
    }

    body {
        padding-top: 120px;
    }
</style>
@endsection
