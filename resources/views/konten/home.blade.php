@extends('layouts.main')
@section('content')
    <div class="dashboard container">
        
        <section class="hero-section" aria-label="Hero">
            <div class="hero-left">
                <p class="tagline">Lembaga Pelatihan Kerja Resmi & Terpercaya</p>
                <h1>Raih Sukses di Jepang bersama <span class="highlight">LPK Seikou</span></h1>
                <p class="lead">
                    Transformasi karir Anda dimulai di sini. Kami menyediakan pelatihan intensif Bahasa Jepang (N5-N2), pembinaan budaya, dan jaminan penyaluran untuk program Magang (IM) dan Tokutei Ginou (SSW).
                </p>
                <div class="cta-group">
                    <a href="{{ route('pendaftaran') }}" class="btn btn-primary">Daftar Sekarang!</a>
                    <a href="#legalitas" class="btn btn-outline">Cek Legalitas Kami</a>
                </div>
                <ul class="hero-meta">
                    <li><strong>2010+</strong> Berdiri Sejak</li>
                    <li><strong>100%</strong> Izin Kemenaker RI</li>
                    <li><strong>150+</strong> Alumni Sukses</li>
                </ul>
            </div>
            <div class="hero-right" role="img" aria-label="Pelatihan Bahasa Jepang">
                <img src="{{ asset('img/lpk1.jpg') }}" alt="Pelatihan Bahasa Jepang di LPK Seikou" loading="lazy">
                </div>
        </section>

        <section id="legalitas" class="trust-section">
            <h2 class="section-title text-center">Terdaftar Resmi & Terjamin Kualitas</h2>
            <div class="trust-grid">
                <article class="trust-card">
                    <img src="{{ asset('images/legal.svg') }}" alt="Izin Kemenaker" class="trust-icon">
                    <h3>Izin Resmi SO (Sending Organization)</h3>
                    <p>Memiliki izin resmi dari Kementerian Ketenagakerjaan RI sebagai penyelenggara program magang dan kerja ke Jepang.</p>
                </article>
                <article class="trust-card">
                    <img src="{{ asset('images/partner.svg') }}" alt="Mitra Perusahaan Jepang" class="trust-icon">
                    <h3>Mitra Perusahaan Jepang Terkemuka</h3>
                    <p>Jaringan luas dengan perusahaan di bidang Manufaktur, Konstruksi, dan Kaigo (Perawat Lansia) di berbagai prefektur Jepang.</p>
                </article>
                <article class="trust-card">
                    <img src="{{ asset('images/certified.svg') }}" alt="Instruktur Bersertifikat" class="trust-icon">
                    <h3>Instruktur N1 & Bersertifikat</h3>
                    <p>Pengajar kami adalah alumni Jepang dengan kualifikasi N1/N2 JLPT dan berpengalaman dalam melatih calon tenaga kerja.</p>
                </article>
            </div>
        </section>

        <section id="features" class="features">
            <h2 class="section-title">Program Unggulan Kami</h2>
            <div class="features-grid">
                <article class="feature-card">
                    <img src="{{ asset('images/training.svg') }}" alt="" class="icon">
                    <h3>Program Magang (Ginou Jisshuu)</h3>
                    <ul>
                        <li>Pelatihan 3-5 tahun</li>
                        <li>Fokus penempatan ke sektor industri</li>
                        <li>Persiapan Bahasa Jepang intensif (N4)</li>
                    </ul>
                </article>

                <article class="feature-card">
                    <img src="{{ asset('images/registration.svg') }}" alt="" class="icon">
                    <h3>Specified Skilled Worker (SSW/Tokutei Ginou)</h3>
                    <ul>
                        <li>Jalur kerja resmi untuk 5 tahun</li>
                        <li>Sektor Kaigo, Restoran, Pertanian, dll.</li>
                        <li>Uji kompetensi JFT-Basic & Skill Test</li>
                    </ul>
                </article>

                <article class="feature-card">
                    <img src="{{ asset('images/news.svg') }}" alt="" class="icon">
                    <h3>Kelas Online & Hybrid</h3>
                    <ul>
                        <li>Fleksibilitas belajar dari manapun</li>
                        <li>Akses penuh ke LMS & materi digital</li>
                        <li>Sesi tatap muka opsional (Hybrid)</li>
                    </ul>
                </article>
                
                <article class="feature-card card-contact">
                    <img src="{{ asset('images/contact.svg') }}" alt="" class="icon">
                    <h3>Kontak & Lokasi</h3>
                    <p>Jl. Contoh No. 123, Kota Anda</p>
                    <p>info@lpkseikou.com • 0812-3456-7890</p>
                    <a href="https://wa.me/6281234567890" class="feature-cta" target="_blank">Chat WhatsApp Langsung →</a>
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
                </div>
                <div class="slider-controls" aria-hidden="false">
                    <button class="prev" aria-label="Sebelumnya">&larr;</button>
                    <button class="next" aria-label="Selanjutnya">&rarr;</button>
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

    </div>

    <style>
        :root {
            --primary: #c9003c;
            --secondary: #2c3e50;
            --accent: #ff4d6d;
            --gray: #718096;
            --light: #f7fafc;
            --dark: #2d3748;
            --shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
            --radius: 8px ;
        }

        .container {
            max-width: var(--container);
            padding: 0 10px;
            font-family: 'Poppins', Roboto, system-ui, -apple-system, sans-serif;
            color: var(--secondary);
        }
        .text-center { text-align: center; }

        /* HERO */
        .hero-section {
            display: flex;
            gap: 30px;
            align-items: center;
            background: var(--light-bg);
            margin-top: 110px;
            padding: 40px;
            border-radius: var(--radius);
            position: relative;
            overflow: hidden;
            border: 1px solid rgba(201,0,60,0.1);
        }
        .hero-left {
            flex: 1;
            min-width: 300px;
        }
        .tagline {
            color: var(--primary);
            font-weight: 600;
            font-size: 0.9rem;
            margin-bottom: 6px;
            text-transform: uppercase;
        }
        .hero-left h1 {
            font-size: clamp(2rem, 3.2vw, 3.2rem);
            margin: 0 0 16px;
            line-height: 1.1;
        }
        .highlight { color: var(--primary); }
        .lead {
            color: var(--muted);
            font-size: 1.1rem;
            margin-bottom: 24px;
            line-height: 1.5;
        }
        .cta-group {
            display: flex;
            gap: 16px;
            flex-wrap: wrap;
            margin-bottom: 20px;
        }
        .btn {
            padding: 12px 24px;
            border-radius: 10px;
            text-decoration: none;
            font-weight: 600;
            display: inline-block;
            transition: background .2s ease;
            font-size: 1.05rem;
        }
        .btn-primary {
            background: var(--primary);
            color: #fff;
            box-shadow: 0 8px 20px rgba(201,0,60,0.2);
        }
        .btn-primary:hover { background: #a90032; }
        .btn-outline {
            background: transparent;
            border: 2px solid var(--primary);
            color: var(--primary);
        }
        .btn-outline:hover {
            background: var(--primary);
            color: #fff;
        }
        .hero-meta {
            display: flex;
            gap: 30px;
            list-style: none;
            padding: 0;
            margin: 10px 0 0;
            color: var(--muted);
            font-size: 0.95rem;
        }
        .hero-meta li strong {
            color: var(--secondary);
            margin-right: 6px;
            font-size: 1.1rem;
        }
        .hero-right {
            width: 380px;
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .hero-right img {
            width: 100%;
            max-width: 380px;
            border-radius: var(--radius);
            box-shadow: 0 15px 40px rgba(0,0,0,0.1);
            display: block;
            object-fit: cover;
            aspect-ratio: 4/3;
        }

        /* TRUST SECTION */
        .trust-section { margin: 40px 0; }
        .trust-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 24px;
            margin-top: 24px;
        }
        .trust-card {
            background: var(--card);
            padding: 20px;
            border-radius: var(--radius);
            text-align: center;
            box-shadow: 0 10px 30px rgba(0,0,0,0.05);
        }
        .trust-icon {
            width: 50px;
            height: 50px;
            margin-bottom: 10px;
        }
        .trust-card h3 {
            color: var(--secondary);
            font-size: 1.15rem;
            margin: 0 0 8px;
        }
        .trust-card p {
            color: var(--muted);
            font-size: 0.95rem;
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
            width: 48px;
            height: 48px;
            object-fit: contain;
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
            background: var(--light-bg);
            padding: 40px 0;
            margin: 40px 0;
        }
        .slider {
            position: relative;
            margin: 24px auto 0;
            background: none;
            padding: 16px 0;
            max-width: 1000px;
        }
        .slides {
            display: flex;
            gap: 20px;
            overflow-x: scroll;
            scroll-snap-type: x mandatory;
            padding: 10px 0;
            -webkit-overflow-scrolling: touch;
        }
        .slide {
            min-width: 300px;
            background: var(--card);
            padding: 20px;
            border-radius: var(--radius);
            box-shadow: 0 8px 25px rgba(0,0,0,0.05);
            scroll-snap-align: start;
            border-top: 3px solid var(--accent);
        }
        .slide p {
            margin: 0 0 10px;
            font-style: italic;
            color: var(--secondary);
            line-height: 1.5;
        }
        .slide cite {
            display: block;
            color: var(--muted);
            font-size: 0.9rem;
            font-weight: 600;
            text-align: right;
        }
        .slider-controls {
            position: absolute;
            top: 50%;
            right: 0;
            transform: translateY(-50%);
            display: flex;
            gap: 10px;
        }
        .slider-controls button {
            background: var(--primary);
            color: #fff;
            border: 0;
            padding: 10px 14px;
            border-radius: 50%;
            cursor: pointer;
            box-shadow: 0 4px 12px rgba(0,0,0,0.15);
            transition: opacity .2s;
        }
        .slider-controls button:hover { opacity: 0.8; }

        /* FAQ */
        .faq-section { margin-top: 40px; }
        .faq-grid {
            display: grid;
            grid-template-columns: 1fr;
            gap: 16px;
            max-width: 800px;
            margin: 0 auto;
        }
        details {
            background: var(--card);
            padding: 16px 20px;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.03);
            border: 1px solid rgba(0,0,0,0.05);
        }
        summary {
            cursor: pointer;
            font-weight: 600;
            color: var(--secondary);
            outline: none;
            transition: color .2s;
        }
        summary:hover { color: var(--primary); }
        details[open] {
            box-shadow: 0 10px 30px rgba(0,0,0,0.05);
            background: #fcfcfc;
        }
        details p {
            margin: 10px 0 0;
            color: var(--muted);
            border-top: 1px solid #eee;
            padding-top: 10px;
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
            next.addEventListener('click', () => slider.scrollBy({ left: step, behavior: 'smooth' });
            const container = document.getElementById('testimonialSlider');
            container.addEventListener('keydown', (e) => {
                if (e.key === 'ArrowLeft') slider.scrollBy({ left: -step, behavior: 'smooth' });
                if (e.key === 'ArrowRight') slider.scrollBy({ left: step, behavior: 'smooth' });
            });
        })();
    </script>
@endsection