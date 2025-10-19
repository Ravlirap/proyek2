@extends('layouts.main')
@section('content')
    <!-- Hero Section -->
    <section class="hero-section text-center text-white py-5 position-relative">
        <div class="container">
            <h1 class="fw-bold mb-3">{{ $title }}</h1>
            <p class="lead mb-0">
                Program pelatihan profesional di bidang <strong>perawatan lansia (Kaigo)</strong> 
                untuk bekerja di Jepang dengan jalur resmi SSW (Specified Skilled Worker).
            </p>
        </div>
    </section>

    <!-- Detail Section - IMPROVED -->
    <section class="detail-section py-5">
        <div class="container">
            <div class="row align-items-center g-4 g-lg-5">
                
                <!-- Gambar -->
                <div class="col-lg-5 order-2 order-lg-1">
                    <div class="image-wrapper">
                        <img src="{{ asset('img/lpk3.jpg') }}" 
                             class="img-fluid rounded-4 shadow-lg"
                             alt="Program SSW Kaigo">
                        <div class="image-badge">
                            <i class="fas fa-shield-alt me-2"></i>
                            <span>Program Resmi</span>
                        </div>
                    </div>
                </div>

                <!-- Deskripsi -->
                <div class="col-lg-7 order-1 order-lg-2">
                    <div class="content-wrapper">
                        <span class="section-label">Tentang Program</span>
                        <h2 class="section-title mb-4">Program SSW Kaigo</h2>
                        <p class="section-description">
                            Program <strong>SSW Kaigo</strong> (Specified Skilled Worker - Caregiver) dirancang untuk mempersiapkan peserta 
                            menjadi tenaga kerja profesional di bidang perawatan lansia di Jepang. 
                            Peserta akan dibekali keterampilan bahasa Jepang, etika kerja, serta pelatihan teknis dalam bidang keperawatan dasar.
                        </p>

                        <div class="features-list mt-4">
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <i class="fas fa-language"></i>
                                </div>
                                <div class="feature-content">
                                    <h6 class="mb-1">Pelatihan Bahasa Jepang</h6>
                                    <p class="text-muted mb-0">Level N4–N3 dengan pengajar bersertifikat</p>
                                </div>
                            </div>

                            <div class="feature-item">
                                <div class="feature-icon">
                                    <i class="fas fa-heartbeat"></i>
                                </div>
                                <div class="feature-content">
                                    <h6 class="mb-1">Pelatihan Keperawatan</h6>
                                    <p class="text-muted mb-0">Sesuai standar institusi perawatan Jepang</p>
                                </div>
                            </div>

                            <div class="feature-item">
                                <div class="feature-icon">
                                    <i class="fas fa-hands-helping"></i>
                                </div>
                                <div class="feature-content">
                                    <h6 class="mb-1">Pendampingan Visa</h6>
                                    <p class="text-muted mb-0">Bantuan lengkap proses visa kerja SSW</p>
                                </div>
                            </div>

                            <div class="feature-item">
                                <div class="feature-icon">
                                    <i class="fas fa-award"></i>
                                </div>
                                <div class="feature-content">
                                    <h6 class="mb-1">Sertifikasi Resmi</h6>
                                    <p class="text-muted mb-0">Dari lembaga terakreditasi pemerintah</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Informasi Tambahan - IMPROVED -->
    <section class="info-section py-5 mt-4">
        <div class="container">
            <div class="section-header text-center mb-5">
                <span class="section-label">Detail Program</span>
                <h2 class="section-title">Informasi Lengkap</h2>
                <p class="text-muted">Semua yang perlu Anda ketahui tentang program ini</p>
            </div>

            <div class="row g-4">
                <div class="col-sm-6 col-lg-3">
                    <div class="info-card">
                        <div class="info-icon-wrapper">
                            <div class="info-icon">
                                <i class="fas fa-calendar-alt"></i>
                            </div>
                        </div>
                        <h5 class="info-title">Durasi Pelatihan</h5>
                        <p class="info-value">6–12 Bulan</p>
                        <p class="info-desc">Pembelajaran intensif dan komprehensif</p>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3">
                    <div class="info-card">
                        <div class="info-icon-wrapper">
                            <div class="info-icon">
                                <i class="fas fa-globe-asia"></i>
                            </div>
                        </div>
                        <h5 class="info-title">Penempatan Kerja</h5>
                        <p class="info-value">Jepang</p>
                        <p class="info-desc">Institusi perawatan lansia terkemuka</p>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3">
                    <div class="info-card">
                        <div class="info-icon-wrapper">
                            <div class="info-icon">
                                <i class="fas fa-certificate"></i>
                            </div>
                        </div>
                        <h5 class="info-title">Sertifikasi</h5>
                        <p class="info-value">SSW Kaigo</p>
                        <p class="info-desc">Qualification resmi pemerintah Jepang</p>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3">
                    <div class="info-card">
                        <div class="info-icon-wrapper">
                            <div class="info-icon">
                                <i class="fas fa-money-bill-wave"></i>
                            </div>
                        </div>
                        <h5 class="info-title">Estimasi Gaji</h5>
                        <p class="info-value">±180.000¥</p>
                        <p class="info-desc">Per bulan + bonus</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

<style>
    :root {
        --primary: #0800ff;
        --secondary: #123456;
        --dark: #1a1a1a;
        --gray: #666;
        --light-bg: #f8f9fa;
        --radius: 10px;
        --shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    /* Hero dengan background melengkung */
    .hero-section {
        position: relative;
        background: linear-gradient(135deg, #6671ea 0%, #273d9c 100%);
        padding: 80px 20px;
        margin-bottom: 20px;
        margin-top: 84px;
        overflow: hidden;
        box-shadow: 0 20px 60px rgba(102, 126, 234, 0.3);
        width: 100vw;
        position: relative;
        left: 50%;
        right: 50%;
        margin-left: -50vw;
        margin-right: -50vw;
    }

    .hero-bg-shape {
        position: absolute;
        bottom: -40px;
        left: 0;
        right: 0;
        height: 100px;
        background: #fff;
        border-top-left-radius: 100px;
        border-top-right-radius: 100px;
    }

    .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 20px;
        position: relative;
        z-index: 1;
    }

    /* ========== DETAIL SECTION - IMPROVED ========== */
    .detail-section {
        padding: 60px 0;
        background: #fff;
    }

    .image-wrapper {
        position: relative;
        border-radius: 20px;
        overflow: hidden;
        box-shadow: 0 20px 60px rgba(0, 0, 0, 0.15);
        transition: transform 0.3s ease;
    }

    .image-wrapper:hover {
        transform: translateY(-10px);
    }

    .image-wrapper img {
        width: 100%;
        height: auto;
        display: block;
        border-radius: 20px;
    }

    .image-badge {
        position: absolute;
        top: 20px;
        right: 20px;
        background: rgba(255, 255, 255, 0.95);
        backdrop-filter: blur(10px);
        padding: 10px 20px;
        border-radius: 30px;
        font-weight: 600;
        font-size: 14px;
        color: var(--primary);
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    }

    .content-wrapper {
        padding: 0 20px;
    }

    .section-label {
        display: inline-block;
        background: linear-gradient(135deg, #6671ea 0%, #273d9c 100%);
        color: white;
        padding: 6px 18px;
        border-radius: 20px;
        font-size: 13px;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        margin-bottom: 15px;
    }

    .section-title {
        font-size: 2.5rem;
        font-weight: 700;
        color: var(--dark);
        margin-bottom: 20px;
        line-height: 1.2;
    }

    .section-description {
        font-size: 1.05rem;
        color: var(--gray);
        line-height: 1.8;
        margin-bottom: 30px;
    }

    .features-list {
        display: flex;
        flex-direction: column;
        gap: 20px;
    }

    .feature-item {
        display: flex;
        align-items: flex-start;
        gap: 20px;
        padding: 20px;
        background: #f8f9fa;
        border-radius: 15px;
        transition: all 0.3s ease;
        border: 2px solid transparent;
    }

    .feature-item:hover {
        background: white;
        border-color: #6671ea;
        box-shadow: 0 8px 25px rgba(102, 113, 234, 0.15);
        transform: translateX(10px);
    }

    .feature-icon {
        width: 50px;
        height: 50px;
        min-width: 50px;
        background: linear-gradient(135deg, #6671ea 0%, #273d9c 100%);
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-size: 20px;
        box-shadow: 0 4px 15px rgba(102, 113, 234, 0.3);
    }

    .feature-content h6 {
        font-size: 1.1rem;
        font-weight: 600;
        color: var(--dark);
    }

    .feature-content p {
        font-size: 0.9rem;
        line-height: 1.5;
    }

    /* INFO SECTION */
    .info-section {
        background: linear-gradient(to bottom, #ececec 0%, #ffffff 100%);
        padding: 80px 0;
        border-radius: 10px;
    }

    .section-header {
        max-width: 600px;
        margin: 0 auto 50px;
    }

    .section-header .section-label {
        display: inline-block;
        margin-bottom: 10px;
    }

    .section-header .section-title {
        font-size: 2.5rem;
        margin-bottom: 15px;
    }

    .section-header p {
        font-size: 1.1rem;
    }

    .info-card {
        background: white;
        border-radius: 20px;
        padding: 35px 25px;
        text-align: center;
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
        transition: all 0.3s ease;
        border: 2px solid transparent;
        height: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .info-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 40px rgba(102, 113, 234, 0.2);
        border-color: #6671ea;
    }

    .info-icon-wrapper {
        margin-bottom: 20px;
    }

    .info-icon {
        width: 70px;
        height: 70px;
        background: linear-gradient(135deg, #6671ea 0%, #273d9c 100%);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto;
        box-shadow: 0 8px 25px rgba(102, 113, 234, 0.3);
        transition: all 0.3s ease;
    }

    .info-card:hover .info-icon {
        transform: scale(1.1) rotate(5deg);
    }

    .info-icon i {
        font-size: 28px;
        color: white;
    }

    .info-title {
        font-size: 1.1rem;
        font-weight: 600;
        color: var(--dark);
        margin-bottom: 10px;
    }

    .info-value {
        font-size: 1.5rem;
        font-weight: 700;
        color: #6671ea;
        margin-bottom: 8px;
    }

    .info-desc {
        font-size: 0.9rem;
        color: var(--gray);
        margin-bottom: 0;
        line-height: 1.5;
    }

    /* ========== RESPONSIVE ========== */
    @media (max-width: 991.98px) {
        .section-title {
            font-size: 2rem;
        }

        .content-wrapper {
            padding: 0;
            margin-top: 30px;
        }

        .image-badge {
            font-size: 12px;
            padding: 8px 15px;
        }
    }

    @media (max-width: 767.98px) {
        .detail-section {
            padding: 40px 0;
        }

        .info-section {
            padding: 60px 0;
        }

        .section-title {
            font-size: 1.75rem;
        }

        .section-description {
            font-size: 1rem;
        }

        .feature-item {
            padding: 15px;
        }

        .feature-icon {
            width: 45px;
            height: 45px;
            min-width: 45px;
            font-size: 18px;
        }

        .feature-content h6 {
            font-size: 1rem;
        }

        .info-card {
            padding: 30px 20px;
        }

        .info-icon {
            width: 60px;
            height: 60px;
        }

        .info-icon i {
            font-size: 24px;
        }

        .info-value {
            font-size: 1.3rem;
        }
    }

    @media (max-width: 575.98px) {
        .section-title {
            font-size: 1.5rem;
        }

        .section-header .section-title {
            font-size: 2rem;
        }

        .feature-item:hover {
            transform: translateX(5px);
        }

        .info-card {
            padding: 25px 15px;
        }
    }

    .btn-primary {
        display: inline-block;
        padding: 12px 30px;
        background: #0800ff;
        color: white;
        border-radius: 25px;
        text-decoration: none;
        font-weight: 600;
        transition: transform 0.2s ease;
    }

    .btn-primary:hover {
        transform: translateY(-2px);
    }
</style>
@endsection