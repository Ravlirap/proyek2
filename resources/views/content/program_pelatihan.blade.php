@extends('layouts.main')
@section('content')
<div class="program-page">
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <h1 class="page-title">Program Pelatihan LPK Seikou</h1>
            <p class="lead">Pilih jalur karir impian Anda di Jepang melalui program pelatihan berkualitas dari LPK Seikou. 
                Kami menyediakan berbagai program yang disesuaikan dengan kebutuhan dan tujuan karir Anda.</p>
        </div>
    </section>

    <!-- Programs Grid Section -->
    <section class="programs-section">
        <div class="container">
            <div class="programs-grid">
                <!-- Program Card 1: Magang Manufaktur -->
                <article class="program-card">
                    <div class="program-image">
                        <img src="{{ asset('img/lpk2.jpg') }}" alt="Program Magang Manufaktur" loading="lazy">
                        <div class="program-overlay">
                            <div class="program-type">Magang (IM Japan)</div>
                        </div>
                    </div>
                    <div class="program-content">
                        <h3>Program Magang Manufaktur</h3>
                        <ul class="program-features">
                            <li>Durasi program 3-5 tahun</li>
                            <li>Sertifikasi skill level 2-3</li>
                            <li>Penempatan di perusahaan manufaktur</li>
                        </ul>
                        <div class="program-footer">
                            <div class="program-stats">
                                <span class="stat"><i class="fas fa-clock"></i> 3-5 tahun</span>
                                <span class="stat"><i class="fas fa-yen-sign"></i> 150,000¥/bulan</span>
                            </div>
                            <a href="{{ route('detail_program.magang-manufaktur') }}" class="btn-detail">
                                Lihat Detail <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </article>

                <!-- Program Card 2: SSW Kaigo -->
                <article class="program-card">
                    <div class="program-image">
                        <img src="{{ asset('img/lpk3.jpg') }}" alt="Program SSW Kaigo" loading="lazy">
                        <div class="program-overlay">
                            <div class="program-type">SSW</div>
                        </div>
                    </div>
                    <div class="program-content">
                        <h3>Specified Skilled Worker - Kaigo</h3>
                        <ul class="program-features">
                            <li>Perawat lansia profesional</li>
                            <li>Kontrak kerja 5 tahun</li>
                            <li>Persiapan ujian JFT-Basic</li>
                        </ul>
                        <div class="program-footer">
                            <div class="program-stats">
                                <span class="stat"><i class="fas fa-clock"></i> 5 tahun</span>
                                <span class="stat"><i class="fas fa-yen-sign"></i> 180,000¥/bulan</span>
                            </div>
                            <a href="{{ route('detail_program.ssw-kaigo') }}" class="btn-detail">
                                Lihat Detail <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </article>

                <!-- Program Card 3: Magang Konstruksi -->
                <article class="program-card">
                    <div class="program-image">
                        <img src="{{ asset('img/lpk4.jpg') }}" alt="Program Magang Konstruksi" loading="lazy">
                        <div class="program-overlay">
                            <div class="program-type">Magang (IM Japan)</div>
                        </div>
                    </div>
                    <div class="program-content">
                        <h3>Program Magang Konstruksi</h3>
                        <ul class="program-features">
                            <li>Spesialisasi bidang konstruksi</li>
                            <li>Pelatihan keselamatan kerja</li>
                            <li>Sertifikasi internasional</li>
                        </ul>
                        <div class="program-footer">
                            <div class="program-stats">
                                <span class="stat"><i class="fas fa-clock"></i> 3-5 tahun</span>
                                <span class="stat"><i class="fas fa-yen-sign"></i> 160,000¥/bulan</span>
                            </div>
                            <a href="{{ route('detail_program.magang-konstruksi') }}" class="btn-detail">
                                Lihat Detail <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </article>

                <!-- Program Card 4: SSW Food Service -->
                <article class="program-card">
                    <div class="program-image">
                        <img src="{{ asset('img/lpk5.jpg') }}" alt="Program SSW Food Service" loading="lazy">
                        <div class="program-overlay">
                            <div class="program-type">SSW</div>
                        </div>
                    </div>
                    <div class="program-content">
                        <h3>SSW - Food Service</h3>
                        <ul class="program-features">
                            <li>Pelatihan food handling</li>
                            <li>Penempatan di restoran Jepang</li>
                            <li>Pembelajaran budaya kuliner</li>
                        </ul>
                        <div class="program-footer">
                            <div class="program-stats">
                                <span class="stat"><i class="fas fa-clock"></i> 5 tahun</span>
                                <span class="stat"><i class="fas fa-yen-sign"></i> 170,000¥/bulan</span>
                            </div>
                            <a href="{{ route('detail_program.ssw-food-service') }}" class="btn-detail">
                                Lihat Detail <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </article>

                <!-- Program Card 5: Bahasa Jepang N5-N4 -->
                <article class="program-card">
                    <div class="program-image">
                        <img src="{{ asset('img/lpk6.jpg') }}" alt="Kursus Bahasa Jepang N5-N4" loading="lazy">
                        <div class="program-overlay">
                            <div class="program-type">Kursus Bahasa</div>
                        </div>
                    </div>
                    <div class="program-content">
                        <h3>Kursus Bahasa Jepang N5-N4</h3>
                        <ul class="program-features">
                            <li>Dasar bahasa Jepang</li>
                            <li>Persiapan JLPT N5 dan N4</li>
                            <li>Kelas online/offline</li>
                        </ul>
                        <div class="program-footer">
                            <div class="program-stats">
                                <span class="stat"><i class="fas fa-clock"></i> 6 bulan</span>
                                <span class="stat"><i class="fas fa-user-graduate"></i> Level Dasar</span>
                            </div>
                            <a href="{{ route('detail_program.bahasa-n5-n4') }}" class="btn-detail">
                                Lihat Detail <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </article>

                <!-- Program Card 6: Bahasa Jepang N3-N2 -->
                <article class="program-card">
                    <div class="program-image">
                        <img src="{{ asset('img/lpk7.jpg') }}" alt="Kursus Bahasa Jepang N3-N2" loading="lazy">
                        <div class="program-overlay">
                            <div class="program-type">Kursus Bahasa</div>
                        </div>
                    </div>
                    <div class="program-content">
                        <h3>Kursus Bahasa Jepang N3-N2</h3>
                        <ul class="program-features">
                            <li>Bahasa Jepang tingkat lanjut</li>
                            <li>Persiapan JLPT N3 dan N2</li>
                            <li>Pembelajaran budaya bisnis</li>
                        </ul>
                        <div class="program-footer">
                            <div class="program-stats">
                                <span class="stat"><i class="fas fa-clock"></i> 8 bulan</span>
                                <span class="stat"><i class="fas fa-user-graduate"></i> Level Lanjut</span>
                            </div>
                            <a href="{{ route('detail_program.bahasa-n3-n2') }}" class="btn-detail">
                                Lihat Detail <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="container">
            <div class="cta-content">
                <h2>Siap Memulai Karir di Jepang?</h2>
                <p>Konsultasikan rencana karir Anda dengan tim kami dan dapatkan panduan lengkap secara gratis.</p>
                <a href="{{ route('pendaftaran') }}" class="btn btn-primary">Daftar Sekarang</a>
            </div>
        </div>
    </section>
</div>

<style>
    /* Base Styles */
    :root {
        --primary: #c9003c;
        --secondary: #2c3e50;
        --accent: #ff max-width: var(--container);
       padding: 0 20px;
        font-family: 'Poppins', Roboto, system-ui, -apple-system, sans-serif;
        color: var(--secondary););y);        --dark: #2d3748;
        --shadow: 0 4px 6 display: flex;
            gap: 40px;
            align-items: center;
            background: var(--light-bg);
            margin-top: 130px;
            padding: 40px;
            border-radius: var(--radius);
            position: relative;
            border: 1px solid rgba(201,0,60,0.1);px;,60,0.1);px;,60,0.1);px;,60,0.1);olor: var(--light);
        color: var(--dark);
    }

    /* Hero Section */
    .hero-section {
        background: linear-gradient(to right, #fff, #fef2f4);
        padding: 60px 0 40px;
        margin-bottom: 40px;
        margin-top: 40px;
    }

    .program-breadcrumb {
        margin-bottom: 20px;
    }

    .breadcrumb {
        display: flex;
        gap: 8px;
        padding: 0;
        margin: 0;
        list-style: none;
    }

    .breadcrumb-item a {
        color: var(--primary);
        text-decoration: none;
    }

    .breadcrumb-item.active {
        color: var(--gray);
    }

    .breadcrumb-item + .breadcrumb-item::before {
        content: "›";
        color: var(--gray);
        margin-right: 8px;
    }

    .page-title {
        font-size: 2.5padding: 10px 0;lor: var(--dark);
        margin-bottom: 16px;
        font-weight: 700;
    }

    .lead {
        font-size: 1.1rem;
        color: var(--gray);
        max-width: 800px;
        line-height: 1.6;
    }

    /* Programs Grid */
    .programs-section {
        padding: 40px 0;
    }

    .programs-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 30px;
        margin-top: 30px;
    }

    .program-card {
        background: white;
        border-radius: var(--radius);
        overflow: hidden;
        box-shadow: var(--shadow);
        transition: transform 0.2s ease, box-shadow 0.2s ease;
    }

    .program-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 20px 30px -5px rgba(0, 0, 0, 0.1);
    }

    .program-image {
        position: relative;
        height: 200px;
        overflow: hidden;
    }

    .program-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.3s ease;
    }

    .program-card:hover .program-image img {
        transform: scale(1.05);
    }

    .program-overlay {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        padding: 15px;
        background: linear-gradient(to bottom, rgba(0,0,0,0.4), transparent);
    }

    .program-type {
        display: inline-block;
        padding: 6px 12px;
        background: var(--primary);
        color: white;
        border-radius: 20px;
        font-size: 0.85rem;
        font-weight: 500;
    }

    .program-content {
        padding: 20px;
    }

    .program-content h3 {
        margin: 0 0 15px;
        font-size: 1.25rem;
        color: var(--dark);
        font-weight: 600;
    }

    .program-features {
        list-style: none;
        padding: 0;
        margin: 0 0 20px;
    }

    .program-features li {
        position: relative;
        padding-left: 20px;
        margin-bottom: 8px;
        color: var(--gray);
        font-size: 0.95rem;
    }

    .program-features li::before {
        content: "•";
        color: var(--primary);
        position: absolute;
        left: 0;
    }

    .program-footer {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding-top: 15px;
        border-top: 1px solid #edf2f7;
    }

    .program-stats {
        display: flex;
        gap: 15px;
    }

    .stat {
        color: var(--gray);
        font-size: 0.9rem;
    }

    .stat i {
        color: var(--primary);
        margin-right: 4px;
    }

    .btn-detail {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        padding: 8px 16px;
        background: transparent;
        color: var(--primary);
        border: 2px solid var(--primary);
        border-radius: 20px;
        font-weight: 500;
        text-decoration: none;
        transition: all 0.2s ease;
    }

    .btn-detail:hover {
        background: var(--primary);
        color: white;
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
        width: 100%;
        max-width: 800px;
        margin: 0 auto;
        padding: 0 20px;
    }

    .cta-content h2 {
        font-size: 2.5rem;
        margin-bottom: 20px;
    }

    .cta-content p {
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

    /* Responsive */
    @media (max-width: 768px) {
        .hero-section {
            padding: 40px 0 30px;
        }

        .page-title {
            font-size: 2rem;
        }

        .programs-grid {
            grid-template-columns: 1fr;
            gap: 20px;
        }

        .cta-section {
            padding: 40px 20px;
        }

        .cta-content h2 {
            font-size: 1.75rem;
        }
    }
</style>
@endsection
