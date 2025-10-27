@extends('layouts.main')
@section('content')
    <!-- Hero Section -->
    <section class="hero-section text-center text-white py-5 position-relative">
        <div class="container">
            <h1 class="fw-bold mb-3">{{ $title }}</h1>
            <p class="lead mb-0">
                Program pelatihan profesional di bidang <strong>konstruksi dan infrastruktur</strong> 
                melalui jalur resmi magang kerja (Technical Intern Training Program) ke Jepang.
            </p>
        </div>
    </section>

    <!-- Detail Section -->
    <section class="detail-section py-5">
        <div class="container">
            <div class="row align-items-center g-4 g-lg-5">
                
                <!-- Gambar -->
                <div class="col-lg-5 order-2 order-lg-1">
                    <div class="image-wrapper">
                        <img src="{{ asset('img/lpk4.jpg') }}" 
                             class="img-fluid rounded-4 shadow-lg"
                             alt="Program Magang Konstruksi">
                        <div class="image-badge">
                            <i class="fas fa-hard-hat me-2"></i>
                            <span>Program Magang Resmi</span>
                        </div>
                    </div>
                </div>

                <!-- Deskripsi -->
                <div class="col-lg-7 order-1 order-lg-2">
                    <div class="content-wrapper">
                        <span class="section-label">Tentang Program</span>
                        <h2 class="section-title mb-4">Program Magang Konstruksi Jepang</h2>
                        <p class="section-description">
                            Program <strong>Magang Konstruksi Jepang</strong> memberikan kesempatan bagi peserta 
                            untuk bekerja dan belajar langsung di sektor pembangunan Jepang. 
                            Peserta akan mendapatkan pelatihan teknis, bahasa, serta pembiasaan budaya kerja 
                            yang berfokus pada keselamatan dan ketepatan dalam bidang konstruksi.
                        </p>

                        <div class="features-list mt-4">
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <i class="fas fa-language"></i>
                                </div>
                                <div class="feature-content">
                                    <h6 class="mb-1">Pelatihan Bahasa Jepang</h6>
                                    <p class="text-muted mb-0">Bahasa dan budaya kerja Jepang untuk tenaga konstruksi</p>
                                </div>
                            </div>

                            <div class="feature-item">
                                <div class="feature-icon">
                                    <i class="fas fa-tools"></i>
                                </div>
                                <div class="feature-content">
                                    <h6 class="mb-1">Pelatihan Teknis Konstruksi</h6>
                                    <p class="text-muted mb-0">Meliputi teknik bangunan, perancangan, dan penggunaan alat berat</p>
                                </div>
                            </div>

                            <div class="feature-item">
                                <div class="feature-icon">
                                    <i class="fas fa-user-shield"></i>
                                </div>
                                <div class="feature-content">
                                    <h6 class="mb-1">Pendampingan Administratif</h6>
                                    <p class="text-muted mb-0">Bimbingan proses visa, dokumen, dan keberangkatan ke Jepang</p>
                                </div>
                            </div>

                            <div class="feature-item">
                                <div class="feature-icon">
                                    <i class="fas fa-medal"></i>
                                </div>
                                <div class="feature-content">
                                    <h6 class="mb-1">Sertifikasi & Pengakuan Resmi</h6>
                                    <p class="text-muted mb-0">Dari lembaga konstruksi dan organisasi penerima Jepang</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Informasi Tambahan -->
    <section class="info-section py-5 mt-4">
        <div class="container">
            <div class="section-header text-center mb-5">
                <span class="section-label">Detail Program</span>
                <h2 class="section-title">Informasi Lengkap</h2>
                <p class="text-muted">Informasi umum terkait program magang konstruksi</p>
            </div>

            <div class="row g-4">
                <div class="col-sm-6 col-lg-3">
                    <div class="info-card">
                        <div class="info-icon-wrapper">
                            <div class="info-icon">
                                <i class="fas fa-calendar-alt"></i>
                            </div>
                        </div>
                        <h5 class="info-title">Durasi Magang</h5>
                        <p class="info-value">3–5 Tahun</p>
                        <p class="info-desc">Program jangka panjang dengan peningkatan keterampilan bertahap</p>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3">
                    <div class="info-card">
                        <div class="info-icon-wrapper">
                            <div class="info-icon">
                                <i class="fas fa-globe-asia"></i>
                            </div>
                        </div>
                        <h5 class="info-title">Penempatan</h5>
                        <p class="info-value">Jepang</p>
                        <p class="info-desc">Perusahaan konstruksi besar di berbagai wilayah Jepang</p>
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
                        <p class="info-value">Keterampilan Konstruksi</p>
                        <p class="info-desc">Sertifikat keterampilan resmi setelah menyelesaikan masa magang</p>
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
                        <p class="info-value">±160.000¥</p>
                        <p class="info-desc">Per bulan + tunjangan dan lembur</p>
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
