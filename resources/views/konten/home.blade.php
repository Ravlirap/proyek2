@extends('layouts.main')
@section('content')
    <div class="dashboard"></div>
        <section class="hero-section">
            <div class="hero-content">
                <h2>Selamat Datang di <span class="highlight">LPK Seikou</span></h2>
                <p>
                    LPK Seikou adalah lembaga pelatihan kerja profesional yang berfokus pada pelatihan bahasa Jepang, budaya, dan persiapan kerja atau studi di Jepang. Kami berkomitmen untuk membantu Anda meraih masa depan gemilang di Negeri Sakura.
                </p>
                <a href="{{ route('pendaftaran') }}" class="cta-btn">Daftar Sekarang</a>
            </div>
            <div class="hero-image">
                <img src="{{ asset('images/japan-training.svg') }}" alt="Pelatihan Bahasa Jepang" />
            </div>
        </section>

        <section class="about-section">
            <h3>Tentang LPK Seikou</h3>
            <p>
                Berdiri sejak 2010, LPK Seikou telah meluluskan ratusan peserta yang sukses bekerja dan melanjutkan studi di Jepang. Kami menyediakan fasilitas lengkap, pengajar berpengalaman, serta program pelatihan yang terstruktur dan terakreditasi.
            </p>
        </section>

        <section class="features">
            <div class="feature-card">
                <img src="{{ asset('images/training.svg') }}" alt="Program Pelatihan" class="feature-icon">
                <h4>Program Pelatihan</h4>
                <ul>
                    <li>Kelas Bahasa Jepang (N5 - N2)</li>
                    <li>Persiapan JLPT & JFT-Basic</li>
                    <li>Kelas Budaya, Etika, dan Tata Krama Jepang</li>
                    <li>Simulasi Interview & Pembuatan CV</li>
                    <li>Kelas Online & Offline</li>
                </ul>
            </div>
            <div class="feature-card">
                <img src="{{ asset('images/registration.svg') }}" alt="Pendaftaran" class="feature-icon">
                <h4>Pendaftaran Mudah</h4>
                <p>
                    Proses pendaftaran cepat dan mudah. Konsultasikan kebutuhan Anda dengan tim kami, dan dapatkan info program terbaru.
                </p>
                <a href="{{ route('pendaftaran') }}" class="feature-link">Formulir Pendaftaran</a>
            </div>
            <div class="feature-card">
                <img src="{{ asset('images/news.svg') }}" alt="Berita" class="feature-icon">
                <h4>Berita & Pengumuman</h4>
                <ul>
                    <li><a href="#">Jadwal kelas baru bulan Juli telah dibuka!</a></li>
                    <li><a href="#">Info seleksi magang ke Jepang 2024</a></li>
                    <li><a href="#">Webinar gratis: Tips Lolos JLPT</a></li>
                </ul>
            </div>
            <div class="feature-card">
                <img src="{{ asset('images/contact.svg') }}" alt="Kontak" class="feature-icon">
                <h4>Kontak Kami</h4>
                <p>Alamat: Jl. Contoh No. 123, Kota Anda</p>
                <p>Email: info@lpkseikou.com</p>
                <p>Telepon: 0812-3456-7890</p>
               <a href="https://wa.me/6281234567890" class="feature-link" target="_blank">Chat WhatsApp</a>
            </div>
        </section>

        <section class="testimonials">
            <h3>Testimoni Alumni</h3>
            <div class="testimonial-list">
                <div class="testimonial-card">
                    <p>"Saya sangat terbantu dengan pelatihan di LPK Seikou. Materi mudah dipahami dan pengajarnya ramah!"</p>
                    <span>- Andi, Magang di Tokyo</span>
                </div>
                <div class="testimonial-card">
                    <p>"Berkat LPK Seikou, saya lulus JLPT N4 dan diterima kerja di Jepang."</p>
                    <span>- Siti, Staff di Osaka</span>
                </div>
                <div class="testimonial-card">
                    <p>"Kelas online-nya sangat fleksibel, cocok untuk saya yang bekerja."</p>
                    <span>- Budi, Peserta Online</span>
                </div>
            </div>
        </section>

        <section class="faq-section">
            <h3>Pertanyaan yang Sering Diajukan</h3>
            <ul class="faq-list">
                <li>
                    <strong>Apakah ada kelas malam atau weekend?</strong>
                    <p>Ya, tersedia kelas malam dan akhir pekan untuk peserta yang bekerja atau kuliah.</p>
                </li>
                <li>
                    <strong>Apakah ada bantuan penyaluran kerja ke Jepang?</strong>
                    <p>LPK Seikou bekerja sama dengan berbagai perusahaan dan lembaga di Jepang untuk penyaluran kerja dan magang.</p>
                </li>
                <li>
                    <strong>Bagaimana cara mengikuti kelas online?</strong>
                    <p>Setelah mendaftar, Anda akan mendapatkan akses ke platform pembelajaran online kami.</p>
                </li>
            </ul>
        </section>
    </div>
    <style>
        .dashboard { max-width: 11x00px; margin: 0 auto; font-family: 'Segoe UI', Arial, sans-serif; }
        .hero-section {
            display: flex; align-items: center; justify-content: space-between;
            background: linear-gradient(90deg, #f0f4ff 60%, #e0e7ff 100%);
            padding: 50px 30px 30px 30px; border-radius: 12px; margin-bottom: 35px;
        }
        .hero-content { max-width: 60%; }
        .hero-content h2 { font-size: 2.3rem; margin-bottom: 10px; }
        .highlight { color: #2d5be3; font-weight: bold; }
        .hero-content p { font-size: 1.1rem; margin-bottom: 18px; }
        .cta-btn {
            background: #2d5be3; color: #fff; padding: 12px 28px; border-radius: 6px;
            text-decoration: none; font-weight: 500; transition: background 0.2s;
        }
        .cta-btn:hover { background: #1a3e8a; }
        .hero-image img { max-width: 220px; }
        .about-section { margin: 35px 0 25px 0; }
        .about-section h3 { margin-bottom: 10px; color: #2d5be3; }
        .features {
            display: flex; flex-wrap: wrap; gap: 22px; margin-bottom: 40px;
        }
        .feature-card {
            flex: 1 1 240px; background: #f8f8f8; padding: 22px 18px 18px 18px;
            border-radius: 10px; box-shadow: 0 2px 8px #e0e7ff44;
            display: flex; flex-direction: column; align-items: flex-start;
            min-width: 240px; max-width: 320px;
        }
        .feature-icon { width: 38px; margin-bottom: 10px; }
        .feature-card h4 { margin: 0 0 10px 0; color: #2d5be3; }
        .feature-card ul { padding-left: 18px; margin: 0 0 10px 0; }
        .feature-link {
            color: #2d5be3; text-decoration: underline; margin-top: 8px; font-weight: 500;
        }
        .feature-link:hover { color: #1a3e8a; }
        .testimonials { margin: 40px 0 30px 0; }
        .testimonials h3 { color: #2d5be3; margin-bottom: 18px; }
        .testimonial-list {
            display: flex; gap: 18px; flex-wrap: wrap;
        }
        .testimonial-card {
            background: #fff; border-left: 4px solid #2d5be3; padding: 18px 16px;
            border-radius: 8px; box-shadow: 0 1px 4px #e0e7ff33; flex: 1 1 220px;
            min-width: 220px; max-width: 320px;
        }
        .testimonial-card p { margin: 0 0 8px 0; font-style: italic; }
        .testimonial-card span { font-size: 0.95em; color: #555; }
        .faq-section { margin-bottom: 40px; }
        .faq-section h3 { color: #2d5be3; margin-bottom: 12px; }
        .faq-list { list-style: none; padding: 0; }
        .faq-list li { margin-bottom: 14px; }
        .faq-list strong { color: #2d5be3; }
        @media (max-width: 900px) {
            .hero-section { flex-direction: column; text-align: center; }
            .hero-content, .hero-image { max-width: 100%; }
            .features { flex-direction: column; }
            .testimonial-list { flex-direction: column; }
        }
    </style>
@endsection
