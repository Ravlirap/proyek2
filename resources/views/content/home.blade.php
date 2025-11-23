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
  </div>
</section>


    </div>

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

        /* HERO */
        .hero-section {
            display: flex;
            gap: 40px;
            align-items: center;
            background: var(--light-bg);
            margin-top: 130px;
            padding: 30px;
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
        .trust-section {
            margin: 60px 0;
            text-align: center;
        }

        .trust-section .section-title {
            font-size: 2rem;
            font-weight: 700;
            color: var(--primary);
            margin-bottom: 40px;
        }

        .trust-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 32px;
            justify-items: center;
        }

        .trust-card {
            background: var(--card);
            padding: 30px 24px;
            border-radius: var(--radius);
            box-shadow: 0 8px 25px rgba(0,0,0,0.06);
            transition: transform 0.25s ease, box-shadow 0.25s ease;
            border: 1px solid rgba(0,0,0,0.05);
            max-width: 360px;
        }

        .trust-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 15px 40px rgba(0,0,0,0.08);
        }

        .trust-icon {
            width: 100%;
            max-width: 180px;
            height: 120px;
            object-fit: cover;
            border-radius: 12px;
            border: 2px solid rgba(201,0,60,0.2);
            box-shadow: 0 6px 18px rgba(0,0,0,0.08);
            margin-bottom: 16px;
            transition: transform 0.3s ease;
        }

        .trust-card:hover .trust-icon {
            transform: scale(1.05);
        }

        .trust-card h3 {
            color: var(--secondary);
            font-size: 1.2rem;
            margin-bottom: 8px;
            font-weight: 700;
        }

        .trust-card p {
            color: var(--muted);
            font-size: 0.95rem;
            line-height: 1.5;
            margin: 0;
        }

        @media (max-width: 600px) {
            .trust-icon {
                height: 100px;
                max-width: 150px;
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
            margin-left: 0;
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
