@extends('layouts.main')
@section('content')
@section('hero')
        <section class="hero-section" aria-label="Hero"
                 style="background-image: url('{{ asset('img/lpk1.jpg') }}');">
            <div class="hero-overlay"></div>
            <div class="hero-content">
                <p class="tagline">Lembaga Pelatihan Kerja Resmi & Terpercaya</p>
                    <h1>Raih Sukses di Jepang bersama
                        <span class="highlight">LPK Seikou</span>
                    </h1>
                <p class="lead">
                    Transformasi karir Anda dimulai di sini. Kami menyediakan pelatihan intensif Bahasa Jepang (N5-N2), pembinaan budaya, dan jaminan penyaluran untuk program Magang (IM) dan Tokutei Ginou (SSW).
                </p>
                
                <div class="cta-group">
                    @if(!empty($pendaftar) || request()->cookie('kode_pendaftaran'))
                        <a href="{{ route('cek.status') }}" class="btn btn-success">
                            Cek Status Pendaftaran
                        </a>
                    @else
                        <a href="{{ route('pendaftaran') }}" class="btn btn-primary">
                            Daftar Sekarang!
                        </a>
                    @endif
                </div>

                <ul class="hero-meta">
                    <li><strong>2010+</strong> Berdiri Sejak</li>
                    <li><strong>100%</strong> Izin Kemenaker RI</li>
                    <li><strong>150+</strong> Alumni Sukses</li>
                </ul>
            </div>
        </section>
@endsection
        <section id="legalitas" class="trust-section">
            <h2 class="section-title text-center">Terdaftar Resmi & Terjamin Kualitas</h2>
            <div class="trust-grid">
                <article class="trust-card">
                    <img src="{{ asset('img/kemenker.jpg') }}" alt="Izin Kemenaker" class="trust-icon">
                    <h3>Izin Resmi SO (Sending Organization)</h3>
                    <p>Memiliki izin resmi dari Kementerian Ketenagakerjaan RI sebagai penyelenggara program magang dan kerja ke Jepang.</p>
                </article>
                <article class="trust-card">
                    <img src="{{ asset('img/mitra.jpg') }}" alt="Mitra Perusahaan Jepang" class="trust-icon">
                    <h3>Mitra Perusahaan Jepang Terkemuka</h3>
                    <p>Jaringan luas dengan perusahaan di bidang Manufaktur, Konstruksi, dan Kaigo (Perawat Lansia) di berbagai prefektur Jepang.</p>
                </article>
                <article class="trust-card">
                    <img src="{{ asset('img/n4.jpg') }}" alt="Instruktur Bersertifikat" class="trust-icon">
                    <h3>Instruktur N1 & Bersertifikat</h3>
                    <p>Pengajar kami adalah alumni Jepang dengan kualifikasi N1/N2 JLPT dan berpengalaman dalam melatih calon tenaga kerja.</p>
                </article>
            </div>
        </section>

        <section id="features" class="features">
            <h2 class="section-title">Program Unggulan Kami</h2>
            <div class="features-grid">
                <article class="feature-card">
                    <img src="{{ asset('img/ginou-jishu.jpg') }}" alt="" class="icon">
                    <h3>Program Magang (Ginou Jisshuu)</h3>
                    <ul>
                        <li>Pelatihan 3-5 tahun</li>
                        <li>Fokus penempatan ke sektor industri</li>
                        <li>Persiapan Bahasa Jepang intensif (N4)</li>
                    </ul>
                </article>

                <article class="feature-card">
                    <img src="{{ asset('img/lpk9.jpg') }}" alt="" class="icon">
                    <h3>Specified Skilled Worker (SSW/Tokutei Ginou)</h3>
                    <ul>
                        <li>Jalur kerja resmi untuk 5 tahun</li>
                        <li>Sektor Kaigo, Restoran, Pertanian, dll.</li>
                        <li>Uji kompetensi JFT-Basic & Skill Test</li>
                    </ul>
                </article>

                <article class="feature-card">
                    <img src="{{ asset('img/lpk10.jpg') }}" alt="" class="icon">
                    <h3>Pelatihan Fisik setiap Minggu (Shintai kunren)</h3>
                    <ul>
                        <li>Pelatihan fisik guna mempersiapkan untuk pekerjaan</li>
                        <li>Lari jogging,Push up,angkat beban, dll.</li>
                        <li>Asah kemampuan fisik siswa</li>
                    </ul>
                </article>

                <article class="feature-card">
                    <img src="{{ asset('img/lpk2.jpg') }}" alt="" class="icon">
                    <h3>Kelas Online & Hybrid</h3>
                    <ul>
                        <li>Fleksibilitas belajar dari manapun</li>
                        <li>Akses penuh ke LMS & materi digital</li>
                        <li>Sesi tatap muka opsional (Hybrid)</li>
                    </ul>
                </article>
            </div>
        </section>

        <section class="testimonials">
            <h2 class="section-title text-center">Apa Kata Alumni Kami?</h2>
            <div class="slider" id="testimonialSlider" tabindex="0" aria-label="Testimoni alumni">
                <div class="slides">
                    <blockquote class="slide">
                        <p>“Pelatihan budaya dan etika kerjanya sangat membantu saat pertama kali tiba di Jepang. LPK Seikou mempersiapkan segalanya dengan detail.”</p>
                        <cite>- Andi, Magang di Tokyo</cite>
                    </blockquote>
                    <blockquote class="slide">
                        <p>“Berkat LPK Seikou, saya lulus JLPT N4 dan diterima kerja di perusahaan Kaigo di Osaka. Prosesnya transparan dan profesional.”</p>
                        <cite>- Siti, Staff di Osaka</cite>
                    </blockquote>
                    <blockquote class="slide">
                        <p>“Kelas online-nya sangat fleksibel dan materi yang diberikan lengkap, cocok untuk saya yang harus bekerja sambil belajar.”</p>
                        <cite>- Budi, Peserta Online</cite>
                    </blockquote>
                    <blockquote class="slide">
                        <p>“Kelas online-nya sangat fleksibel dan materi yang diberikan lengkap, cocok untuk saya yang harus bekerja sambil belajar.”</p>
                        <cite>- Budi, Peserta Online</cite>
                    </blockquote>
                    <blockquote class="slide">
                        <p>“Kelas online-nya sangat fleksibel dan materi yang diberikan lengkap, cocok untuk saya yang harus bekerja sambil belajar.”</p>
                        <cite>- Budi, Peserta Online</cite>
                    </blockquote>
                    <blockquote class="slide">
                        <p>“Kelas online-nya sangat fleksibel dan materi yang diberikan lengkap, cocok untuk saya yang harus bekerja sambil belajar.”</p>
                        <cite>- Budi, Peserta Online</cite>
                    </blockquote>
                </div>
            </div>
        </section>

        <section class="faq-section">
            <h2 class="section-title">Pertanyaan yang Sering Diajukan</h2>
            <div class="faq-grid">
                <details>
                    <summary>Apakah LPK Seikou memiliki izin resmi dari Kemenaker?</summary>
                    <p>Ya, LPK Seikou adalah Sending Organization (SO) resmi yang terdaftar dan diawasi oleh Kementerian Ketenagakerjaan RI untuk program magang dan kerja ke Jepang.</p>
                </details>
                <details>
                    <summary>Berapa lama waktu yang dibutuhkan untuk bisa berangkat?</summary>
                    <p>Rata-rata proses pelatihan intensif hingga pemberangkatan memakan waktu 4-8 bulan, tergantung kelulusan tes bahasa dan proses visa/penempatan dari mitra Jepang.</p>
                </details>
                <details>
                    <summary>Apakah tersedia program khusus untuk lulusan D3/S1 Teknik?</summary>
                    <p>Ya, kami memiliki jalur khusus Engineering yang disesuaikan untuk lulusan D3/S1 Teknik untuk ditempatkan sebagai *engineer* di Jepang.</p>
                </details>
            </div>
        </section>

        <section class="lokasi-section">
            <div class="lokasi-container">
                <div class="lokasi-text">
                <h2>Lokasi Para Peserta Magang <span class="highlight">LPK Seikou</span> Tersebar di Seluruh Jepang</h2>
                <p>Berbagai prefektur di Jepang menjadi tempat magang peserta kami. Berikut adalah beberapa di antaranya:</p>
                <ul class="prefektur-list">
                    <li>Hokkaido</li>
                    <li>Aomori</li>
                    <li>Akita</li>
                    <li>Tokyo</li>
                    <li>Kanagawa</li>
                    <li>Osaka</li>
                    <li>Kyoto</li>
                    <li>Fukuoka</li>
                    <li>Hiroshima</li>
                    <li>Kumamoto</li>
                    <li>Nagasaki</li>
                    <li>Kagoshima</li>
                </ul>
                </div>

         <section class="map-section">
                <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15909481.306998784!2d128.7897447101771!3d34.176046881121835!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x34674e0fd77f192f%3A0xf54275d47c665244!2sJepang!5e0!3m2!1sid!2sid!4v1761642047203!5m2!1sid!2sid"
                width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy">
                </iframe>
        </section>
</section>
    <style>
        :root {
            --primary: #0800ff;
            --accent: #4d59ff;
            --secondary: #123456;
            --muted: #6b7280;
            --bg: #fdfefe;
            --light-bg: #fff0f5;
            --card: #ffffff;
            --radius: 14px;
            --container: 1200px;
        }

        .container {
            max-width: var(--container);
            padding: 0 20px;
            font-family: 'Poppins', Roboto, system-ui, -apple-system, sans-serif;
            color: var(--secondary);
        }
        .text-center { text-align: center; }

        /* ===== HERO WRAPPER ===== */
        .hero-section {
            position: relative;
            width: 100%;
            height: 100vh;
            padding: 140px 60px 60px;
            display: flex;
            align-items: center;
            justify-content: flex-start;

            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;

            animation: fadeBg 2s ease forwards;
        }

        /* Animasi masuk background */
        @keyframes fadeBg {
            0% { filter: brightness(60%); }
            100% { filter: brightness(100%); }
        }

        /* ===== OVERLAY ===== */
        .hero-section::before {
            content: "";
            position: absolute;
            inset: 0;
            background: linear-gradient(
                rgba(0, 0, 0, 0.55),
                rgba(0, 0, 0, 0.35)
            );
            z-index: 1;
        }

        /* ===== HERO CONTENT ===== */
        .hero-content {
            position: relative;
            z-index: 2;
            max-width: 650px;
            color: #fff;

            opacity: 0;
            animation: heroFadeUp 1.1s ease forwards;
            animation-delay: 0.2s;
        }

        @keyframes heroFadeUp {
            0% { opacity: 0; transform: translateY(30px); }
            100% { opacity: 1; transform: translateY(0); }
        }

        .tagline {
            font-size: 0.9rem;
            letter-spacing: 2px;
            font-weight: 700;
            text-transform: uppercase;
            color: #ffe47a;
            margin-bottom: 12px;

            animation: fadeIn 1.2s ease forwards;
            animation-delay: 0.3s;
            opacity: 0;
        }

        .hero-content h1 {
            font-size: clamp(2.3rem, 4vw, 3.8rem);
            line-height: 1.15;
            font-weight: 800;
            margin-bottom: 18px;

            animation: fadeIn 1.2s ease forwards;
            animation-delay: 0.45s;
            opacity: 0;
        }

        .hero-content .lead {
            font-size: 1.2rem;
            margin-bottom: 28px;
            color: #f5f7fa;

            animation: fadeIn 1.2s ease forwards;
            animation-delay: 0.6s;
            opacity: 0;
        }

        .btn-primary {
            background: #9a0000;
            color: #ffffff;
            padding: 14px 32px;
            border-radius: 14px;
            font-weight: 700;
            font-size: 1.1rem;
            box-shadow: 0 8px 25px rgba(152, 0, 0, 0.35);
            transition: 0.25s ease;

            animation: fadeIn 1.2s ease forwards;
            animation-delay: 0.75s;
            opacity: 0;
        }

        .btn-primary:hover {
            transform: translateY(-3px);
            box-shadow: 0 12px 35px rgba(255, 211, 59, 0.45);
        }

        .hero-meta {
            animation: fadeIn 1.2s ease forwards;
            animation-delay: 0.9s;
            opacity: 0;
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        /* ===== RESPONSIVE ===== */
        @media (max-width: 900px) {
            .hero-section {
                padding: 150px 25px 40px;
                text-align: center;
                justify-content: center;
            }

            .hero-content {
                max-width: 100%;
            }
        }

       /* TRUST SECTION */
        .trust-section {
            margin: 80px 0;
            text-align: center;
        }

        .trust-section .section-title {
            font-size: 2.3rem;
            font-weight: 800;
            color: #0048ff;
            margin-bottom: 50px;
            letter-spacing: 1px;
        }

        .trust-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 38px;
            justify-items: center;
        }

        .trust-card {
            background: #ffffff;
            padding: 34px 26px;
            border-radius: 20px;
            border: 2px solid rgba(0, 72, 255, 0.25); /* border biru */
            box-shadow:
                0 6px 20px rgba(0, 72, 255, 0.08),
                0 2px 6px rgba(0, 0, 0, 0.05);
            transition: 0.3s ease;
            max-width: 380px;
            position: relative;
        }

        .trust-card:hover {
            transform: translateY(-10px);
            box-shadow:
                0 12px 35px rgba(0, 72, 255, 0.18),
                0 6px 16px rgba(0, 0, 0, 0.08);
            border-color: #0048ff;
        }

        .trust-icon {
            width: 100%;
            max-width: 180px;
            height: 120px;
            object-fit: cover;
            border-radius: 14px;
            border: 2px solid rgba(0, 72, 255, 0.3); /* border icon jadi biru */
            box-shadow:
                0 6px 18px rgba(0, 72, 255, 0.12),
                0 2px 6px rgba(0, 0, 0, 0.05);
            margin-bottom: 16px;
            transition: transform 0.35s ease, box-shadow 0.35s ease;
        }

        .trust-card:hover .trust-icon {
            transform: scale(1.07);
            box-shadow:
                0 12px 30px rgba(0, 72, 255, 0.25),
                0 6px 12px rgba(0, 0, 0, 0.08);
            border-color: #0048ff;
        }

        /* ===== TEXT ===== */
        .trust-card h3 {
            color: #0048ff;
            font-size: 1.25rem;
            margin-bottom: 12px;
            font-weight: 700;
            text-transform: capitalize;
        }

        .trust-card p {
            color: #4e5d73;
            font-size: 0.98rem;
            line-height: 1.55;
            margin: 0;
        }

        /* ===== RESPONSIVE ===== */
        @media (max-width: 600px) {
            .trust-icon {
                height: 100px;
                max-width: 150px;
            }

            .trust-section .section-title {
                font-size: 1.8rem;
            }
        }

        /* FEATURES */
        .section-title {
            color: var(--primary);
            margin: 36px 0 24px;
            font-size: 1.8rem;
            font-weight: 700;
        }
        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 24px;
        }
        .feature-card {
            background: linear-gradient(180deg,#fff,#fefcff);
            padding: 24px;
            border-radius: var(--radius);
            box-shadow: 0 8px 25px rgba(0,0,0,0.05);
            transition: transform .22s ease, box-shadow .22s ease;
            display: flex;
            flex-direction: column;
            gap: 10px;
            border-left: 4px solid var(--primary);
        }
        .feature-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 18px 50px rgba(0,0,0,0.1);
        }
        .feature-card .icon {
            width: 100%;
            max-width: 190px;
            height: 120px;
            object-fit: cover;
            border-radius: 12px;
            border: 2px solid rgba(201,0,60,0.2);
            box-shadow: 0 6px 18px rgba(0,0,0,0.08);
        }
        .feature-card h3 {
            margin: 6px 0;
            color: var(--secondary);
            font-size: 1.3rem;
        }
        .feature-card ul {
            list-style: disc;
            padding-left: 20px;
            margin: 0;
            color: var(--muted);
        }
        .feature-card li {
            margin-bottom: 4px;
            font-size: 0.95rem;
        }
        .feature-cta {
            margin-top: auto;
            color: var(--primary);
            font-weight: 600;
            text-decoration: none;
            display: inline-block;
            padding-top: 10px;
        }
        .card-contact p { margin-bottom: 0; }

        /* TESTIMONIALS */
        .testimonials {
            /* background: linear-gradient(135deg, #e0ecff, #b6d2ff); */
            padding: 70px 0;
            margin: 60px 0;
            position: relative;
            overflow: hidden;
        }

        .section-title {
            color: #0d47a1;
            font-weight: 800;
            font-size: 2.2rem;
            letter-spacing: .5px;
            animation: fadeDown .7s ease-out;
        }

        .slider {
            position: relative;
            margin: 40px auto 0;
            padding: 16px;
            max-width: 1150px;
            overflow: visible;
        }

        .slides {
            display: flex;
            gap: 26px;
            overflow-x: auto;
            scroll-snap-type: x mandatory;
            padding: 20px 0;
            scroll-behavior: smooth;
            -webkit-overflow-scrolling: touch;


            transition: transform .3s ease;
        }

        .slide {
            min-width: 320px;
            background: #ffffff;
            padding: 26px;
            border-radius: 18px;
            scroll-snap-align: start;


            box-shadow:
                0 6px 15px rgba(0, 85, 164, 0.08),
                0 12px 32px rgba(0, 85, 164, 0.15);

            border-left: 5px solid #0d6efd;
            transition: all .3s ease;


            animation: fadeSlide .8s ease backwards;
        }


        .slide:hover {
            transform: translateY(-10px) scale(1.03);
            box-shadow:
                0 6px 16px rgba(0, 85, 164, 0.12),
                0 20px 40px rgba(0, 85, 164, 0.25);
            border-left-color: #084bb8;
        }


        .slide p {
            margin-bottom: 12px;
            font-style: italic;
            color: #374151;
            font-size: 1rem;
        }

        .slide cite {
            display: block;
            font-weight: bold;
            color: #0d47a1;
            font-size: 0.95rem;
            text-align: right;
        }

        .slider-controls button {
            background: #0d6efd;
            color: #fff;
            border: 0;
            padding: 12px 15px;
            border-radius: 50%;
            cursor: pointer;
            box-shadow: 0 5px 14px rgba(0,0,0,0.25);
            transition: transform .2s ease, opacity .2s ease;
        }

        .slider-controls button:hover {
            transform: scale(1.15);
            opacity: .9;
        }

        @keyframes fadeSlide {
            from {
                transform: translateY(30px);
                opacity: 0;
            }
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        @keyframes fadeDown {
            from {
                transform: translateY(-20px);
                opacity: 0;
            }
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }


        /* FAQ */
        ..faq-section {
            margin-top: 50px;
        }

        .faq-grid {
            display: grid;
            grid-template-columns: 1fr;
            gap: 18px;
            max-width: 800px;
            margin-left: 0;
        }

        details {
            background: #ffffff;
            padding: 18px 22px;
            border-radius: 14px;
            border: 1px solid rgba(13,110,253,0.15);
            box-shadow:
                0 4px 10px rgba(13,110,253,0.05),
                0 8px 22px rgba(13,110,253,0.07);
            transition: all .25s ease;
        }

        details:hover {
            transform: translateY(-3px);
            box-shadow:
                0 6px 14px rgba(13,110,253,0.08),
                0 14px 32px rgba(13,110,253,0.12);
        }

        summary {
            cursor: pointer;
            font-weight: 600;
            font-size: 1.05rem;
            color: #0d47a1;
            transition: color .2s;
        }

        summary:hover {
            color: #0d6efd;
        }

        details[open] {
            background: #f7faff;
            box-shadow:
                0 8px 18px rgba(13,110,253,0.10),
                0 16px 40px rgba(13,110,253,0.14);
            border-color: rgba(13,110,253,0.35);
        }

        details p {
            margin: 12px 0 0;
            padding-top: 12px;
            border-top: 1px solid rgba(13,110,253,0.2);
            color: #516178;
            font-size: .95rem;
            animation: fadeIn .25s ease;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(6px); }
            to   { opacity: 1; transform: translateY(0); }
        }


        /* RESPONSIVE */
        @media (max-width: 900px) {
            .hero-section {
                flex-direction: column;
                text-align: center;
                padding: 30px;
            }
            .hero-left { min-width: unset; }
            .hero-right {
                width: 100%;
                max-width: 350px;
                margin-top: 20px;
            }
            .hero-meta { justify-content: center; }
            .trust-grid { grid-template-columns: 1fr; }
            .slider-controls { right: 20px; }
        }

        .lokasi-section {
            margin: 60px 0;
            background: var(--light-bg);
            padding: 40px 20px;
            border-radius: var(--radius);
        }

            .lokasi-container {
            display: flex;
            align-items: flex-start;
            justify-content: space-between;
            gap: 40px;
            flex-wrap: wrap;
            }

            .lokasi-text {
            flex: 1;
            min-width: 280px;
            }

            .lokasi-text h2 {
            font-size: 1.8rem;
            font-weight: 700;
            color: var(--secondary);
            margin-bottom: 12px;
            }

            .lokasi-text .highlight {
            color: var(--primary);
            }

            .lokasi-text p {
            color: var(--muted);
            margin-bottom: 20px;
            font-size: 1rem;
            }

            .prefektur-list {
            columns: 3 200px;
            list-style: none;
            padding: 0;
            margin: 0;
            }

            .prefektur-list li {
            padding-left: 22px;
            position: relative;
            margin-bottom: 8px;
            color: var(--secondary);
            }

            .prefektur-list li::before {
            content: "●";
            color: red;
            position: absolute;
            left: 0;
            font-size: 0.8rem;
            top: 0;
            }

            .lokasi-map {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            }

            .lokasi-map img {
            width: 100%;
            max-width: 500px;
            border-radius: 10px;
            object-fit: contain;
            }

            .hero-full {
            width: 100%;
            height: 100vh;               /* FULL layar */
            background-size: cover !important;
            background-position: center !important;
            background-repeat: no-repeat !important;
            background-color: #000;      /* fallback */

            display: flex;
            align-items: center;

            position: relative;
            padding: 0;
            margin: 0;
            overflow: hidden;
        }

        /* Overlay gelap → agar teks terbaca */
        .hero-full::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0,0,0,0.35);
            z-index: 1;
        }

        .hero-content {
            position: relative;
            z-index: 2;
            max-width: 650px;
            padding: 0 60px;
            color: #fff;
        }

        .hero-content h1,
        .hero-content p,
        .hero-content .tagline {
            color: #fff !important;
        }

        /* lokasi section */
        .lokasi-section {
            margin: 80px 0;
            padding: 60px 40px;
            background: #f5f8ff;
            border-radius: 20px;
            box-shadow: 0 8px 25px rgba(0, 72, 255, 0.10);
        }

        .lokasi-container {
            display: flex;
            align-items: flex-start;
            justify-content: space-between;
            gap: 50px;
            flex-wrap: wrap;
        }

        .lokasi-text {
            flex: 1;
            min-width: 300px;
        }

        .lokasi-text h2 {
            font-size: 2rem;
            font-weight: 800;
            color: #003399;
            margin-bottom: 16px;
        }

        .lokasi-text .highlight {
            color: #0048ff;
        }

        .lokasi-text p {
            font-size: 1.05rem;
            color: #55627a;
            margin-bottom: 20px;
        }

        .prefektur-list {
            background: #ffffff;
            padding: 25px 30px;
            border-radius: 16px;
            box-shadow:
                0 6px 12px rgba(0,0,0,0.05),
                0 12px 25px rgba(0,72,255,0.08);
            columns: 3 180px;
            list-style: none;
            gap: 10px;
        }

        .prefektur-list li {
            margin-bottom: 10px;
            padding-left: 20px;
            font-weight: 600;
            color: #2c3e55;
            position: relative;
        }

        .prefektur-list li::before {
            content: "•";
            position: absolute;
            left: 0;
            top: 0;
            color: #0048ff;
            font-size: 1.2rem;
            line-height: 1;
        }

        .lokasi-map {
            flex: 1;
            min-width: 330px;
            background: #ffffff;
            border-radius: 18px;
            padding: 12px;
            box-shadow:
                0 8px 20px rgba(0,0,0,0.06),
                0 12px 28px rgba(0,72,255,0.07);
        }

        .lokasi-map iframe {
            width: 100%;
            height: 100%;
            border-radius: 14px;
            border: 0;
        }

        @media (max-width: 900px) {
            .lokasi-section {
                padding: 40px 20px;
            }

            .lokasi-container {
                flex-direction: column;
            }

            .prefektur-list {
                columns: 2;
            }
        }

        @media (max-width: 600px) {
            .prefektur-list {
                columns: 1;
            }
        }



    </style>

    <script>
        // testimonial slider controls (vanilla JS, minimal)
        (function () {
            const slider = document.querySelector('#testimonialSlider .slides');
            const prev = document.querySelector('#testimonialSlider .prev');
            const next = document.querySelector('#testimonialSlider .next');
            if (!slider || !prev || !next) return;
            const step = 320; // slide min-width (300px) + gap (20px)
            prev.addEventListener('click', () => slider.scrollBy({ left: -step, behavior: 'smooth' }));
            next.addEventListener('click', () => slider.scrollBy({ left: step, behavior: 'smooth' }));
            const container = document.getElementById('testimonialSlider');
            container.addEventListener('keydown', (e) => {
                if (e.key === 'ArrowLeft') slider.scrollBy({ left: -step, behavior: 'smooth' });
                if (e.key === 'ArrowRight') slider.scrollBy({ left: step, behavior: 'smooth' });
            });
        })();
    </script>
@endsection
