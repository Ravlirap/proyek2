@extends('layouts.main')
@section('content')
<div class="profil-page">
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <h1 class="page-title">Profil LPK Seikou</h1>
            <p class="lead">
                LPK Seikou adalah lembaga pelatihan kerja profesional yang berfokus pada pembinaan, pendidikan, dan penyaluran tenaga kerja ke Jepang dengan standar tinggi dan integritas.
            </p>
        </div>
    </section>

    <!-- Profil Section -->
    <section class="profil-section">
        <div class="container">
            <div class="profil-content">
                <h2>Tentang Kami</h2>
                <p>
                    LPK Seikou berdiri dengan komitmen untuk menjadi jembatan bagi generasi muda Indonesia menuju karier sukses di Jepang.
                    Melalui pelatihan bahasa, budaya, dan keterampilan teknis, kami mempersiapkan peserta agar siap menghadapi tantangan global
                    dengan semangat disiplin dan profesionalisme tinggi.
                </p>

                <h3>Visi</h3>
                <p>
                    Menjadi lembaga pelatihan kerja terkemuka yang mencetak tenaga kerja profesional, berkarakter, dan berdaya saing internasional.
                </p>

                <h3>Misi</h3>
                <ul>
                    <li>Memberikan pelatihan bahasa dan keterampilan yang berkualitas.</li>
                    <li>Menanamkan nilai disiplin, etika, dan tanggung jawab.</li>
                    <li>Membina kerja sama dengan institusi di Jepang secara berkelanjutan.</li>
                    <li>Mendukung pengembangan karier peserta di dalam dan luar negeri.</li>
                </ul>

                <h3>Fasilitas & Program</h3>
                <p>
                    Kami menyediakan lingkungan belajar yang nyaman dan kondusif, dengan fasilitas modern serta instruktur berpengalaman di bidang bahasa dan budaya Jepang.
                    Program pelatihan kami mencakup pelatihan bahasa Jepang, keterampilan teknis, dan pembekalan budaya kerja Jepang (seikatsu shidou).
                </p>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="cta-content">
            <h2>Bergabung Bersama LPK Seikou</h2>
            <p>
                Wujudkan impianmu bekerja di Jepang dengan pelatihan dan pembinaan terbaik dari kami.
            </p>
            <a href="{{ url('/pendaftaran') }}" class="btn-primary">Daftar Sekarang</a>
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

    /* Profil Section */
    .profil-section {
        padding: 60px 0;
        line-height: 1.8;
    }

    .profil-content {
        max-width: 900px;
        margin: 0 auto;
        color: var(--secondary);
    }

    .profil-content h2 {
        font-size: 2rem;
        color: var(--primary);
        margin-bottom: 20px;
        text-align: center;
    }

    .profil-content h3 {
        margin-top: 30px;
        color: var(--primary);
        font-size: 1.3rem;
    }

    .profil-content p {
        color: var(--gray);
        margin-top: 10px;
    }

    .profil-content ul {
        margin-top: 10px;
        padding-left: 20px;
        color: var(--gray);
    }

    .profil-content li {
        margin-bottom: 8px;
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
        .cta-content h2 { font-size: 1.8rem; }
        .profil-content h2 { font-size: 1.7rem; }
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
</style>
@endsection
