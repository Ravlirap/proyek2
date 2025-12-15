@extends('layouts.main')
@section('content')
<div class="profil-page">

  <!-- Hero Section -->
  <section class="hero-section">
    <div class="container">
      <div class="hero-content">
        <h1 class="hero-title">
          Profil <span class="highlight">LPK Seikou</span>
        </h1>
        <p class="hero-description">
          Lembaga Pelatihan Kerja Seikou berkomitmen untuk mencetak tenaga kerja profesional Indonesia yang siap berkarier di Jepang melalui pendidikan, pelatihan, dan pembinaan berstandar internasional.
        </p>
      </div>

      <div class="hero-decoration">
        <div class="circle circle-1"></div>
        <div class="circle circle-2"></div>
        <div class="circle circle-3"></div>

        <span class="sakura" style="left: 12%; animation-delay: 0s;"></span>
        <span class="sakura" style="left: 28%; animation-delay: 1.2s;"></span>
        <span class="sakura" style="left: 45%; animation-delay: 2.4s;"></span>
        <span class="sakura" style="left: 60%; animation-delay: 0.8s;"></span>
        <span class="sakura" style="left: 78%; animation-delay: 1.8s;"></span>
      </div>
    </div>
  </section>

  <!-- Tentang Kami Section -->
  <section class="tentang-section">
    <div class="container">
      <h2 class="section-title"><i class="fas fa-university"></i> Tentang Kami</h2>
      <div class="tentang-content">
        <img src="{{ asset('img/lpk1.jpg') }}" alt="Gedung LPK Seikou" class="tentang-img">
        <div class="tentang-text">
          <p>
            LPK Seikou merupakan lembaga resmi yang bergerak di bidang pelatihan kerja dan pembinaan tenaga kerja Indonesia yang ingin berkarier di Jepang. Kami berfokus pada pengajaran bahasa Jepang, budaya kerja, serta etika profesional sesuai standar perusahaan Jepang.
          </p>
          <p>
            Dengan tenaga pengajar berpengalaman dan fasilitas modern, kami membantu peserta pelatihan mengembangkan kemampuan bahasa, keterampilan teknis, serta karakter kerja unggul yang dibutuhkan untuk sukses di dunia kerja Jepang.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- Legalitas Section -->
  <section class="legalitas-section">
    <div class="container">
      <h2 class="section-title"><i class="fas fa-file-contract"></i> Legalitas Lembaga</h2>
      <div class="legalitas-content">
        <ul>
          <li><strong>Nama Lembaga:</strong> Lembaga Pelatihan Kerja Seikou</li>
          <li><strong>Nomor Izin Operasional:</strong> 563/LPK/2023</li>
          <li><strong>Alamat:</strong> Jl. Merdeka No. 45, Surabaya, Jawa Timur</li>
          <li><strong>Email:</strong> info@lpkseikou.com</li>
          <li><strong>Telepon:</strong> (031) 789-1234</li>
        </ul>
      </div>
    </div>
  </section>

  <!-- Penghargaan Section -->
  <section class="penghargaan-section">
    <div class="container">
      <h2 class="section-title"><i class="fas fa-trophy"></i> Penghargaan & Prestasi</h2>
      <div class="penghargaan-grid">

        <div class="penghargaan-card">
          <img src="{{ asset('img/penghargaan1.jpg') }}" alt="Penghargaan Kualitas Pelatihan Nasional" class="penghargaan-img">
          <h3>Penghargaan Kualitas Pelatihan Nasional</h3>
          <p>LPK Seikou meraih penghargaan dari Kementerian Ketenagakerjaan atas standar pelatihan dan sertifikasi tenaga kerja terbaik tingkat nasional pada tahun 2024.</p>
        </div>

        <div class="penghargaan-card">
          <img src="{{ asset('img/penghargaan2.jpg') }}" alt="Kerjasama Internasional Terbaik" class="penghargaan-img">
          <h3>Kerjasama Internasional Terbaik</h3>
          <p>Diberikan oleh Japan International Cooperation Agency (JICA) atas kontribusi dalam mempererat kerja sama Indonesia–Jepang dalam bidang pendidikan vokasi.</p>
        </div>

        <div class="penghargaan-card">
          <img src="{{ asset('img/penghargaan3.jpg') }}" alt="Lembaga Inovatif 2025" class="penghargaan-img">
          <h3>Lembaga Inovatif 2025</h3>
          <p>Penghargaan dari Pemerintah Kota Surabaya atas inovasi dalam pembelajaran berbasis teknologi digital di lingkungan lembaga pelatihan kerja.</p>
        </div>

      </div>
    </div>
  </section>
</div>

<style>
:root {
  --primary: #c9003c;
  --dark: #1a1a1a;
  --gray: #666;
  --light-bg: #f8f9fa;
  --radius: 10px;
  --shadow: 0 4px 6px rgba(0,0,0,0.1);
}

/* Hero Section */
.hero-section {
    position: relative;
    background: linear-gradient(135deg, #1a2e6f, #0044cc);
    padding: 140px 20px 150px;
    margin-top: 84px;
    overflow: hidden;
    width: 100vw;
    left: 50%;
    margin-left: -50vw;
    box-shadow: 0 25px 60px rgba(0,0,0,0.25);
    color: white;
    }

    .hero-decoration .circle {
    position: absolute;
    border-radius: 50%;
    background: rgba(255,255,255,0.07);
    animation: float 6s ease-in-out infinite;
    }

    .circle-1 { width: 120px; height: 120px; top: 50px; left: 5%; animation-delay: 0s; }
    .circle-2 { width: 180px; height: 180px; bottom: 40px; right: 10%; animation-delay: 1.5s; }
    .circle-3 { width: 80px; height: 80px; top: 160px; right: 35%; animation-delay: 3s; }

    @keyframes float {
    0%, 100% { transform: translateY(0); }
    50% { transform: translateY(-20px); }
    }

    .hero-section::after {
    content: "";
    position: absolute;
    top: -80px;
    right: -120px;
    width: 380px;
    height: 380px;
    background: radial-gradient(circle, rgba(255,255,255,0.25), transparent);
    filter: blur(20px);
    animation: pulse 6s infinite ease-in-out;
    }

    @keyframes pulse {
        0% { transform: scale(1); opacity: .5; }
        50% { transform: scale(1.15); opacity: .8; }
        100% { transform: scale(1); opacity: .5; }
    }

    .hero-title {
        font-size: 3rem;
        font-weight: 900;
        line-height: 1.2;
        animation: slideDown .9s ease-out;
    }

    .hero-title .highlight {
        color: #ffcbde;
        text-shadow: 0 0 12px rgba(255,255,255,0.5);
    }

    @keyframes slideDown {
        from { opacity: 0; transform: translateY(-25px); }
        to { opacity: 1; transform: translateY(0); }
    }

    .hero-description {
        font-size: 1.2rem;
        margin-top: 18px;
        max-width: 650px;
        animation: fadeUp .9s ease-out .2s backwards;
    }

    @keyframes fadeUp {
        from { opacity: 0; transform: translateY(25px); }
        to { opacity: 1; transform: translateY(0); }
    }

    .sakura {
    position: absolute;
    width: 15px;
    height: 15px;
    background: rgba(255, 205, 222, 0.85);
    border-radius: 75% 25% 75% 25%;
    filter: blur(0.5px);
    animation: sakuraFall 8s linear infinite;
    pointer-events: none;
    }

    @keyframes sakuraFall {
        0% {
            transform: translateY(-30px) rotate(0deg);
            opacity: .9;
        }
        100% {
            transform: translateY(320px) rotate(360deg);
            opacity: .2;
        }
    }

    /* Section Title */
    .section-title {
    font-size: 2rem;
    color: var(--primary);
    margin-bottom: 30px;
    text-align: center;
    }

    .section-title i {
    margin-right: 10px;
    }

    /* Tentang Kami */
    .tentang-section {
        padding: 80px 20px;
        position: relative;
    }

    .tentang-section::before {
        content: "";
        position: absolute;
        top: 0;
        left: 40px;
        width: 70px;
        height: 4px;
        background: #0b5fff;
        border-radius: 10px;
        opacity: 0.25;
    }

    .tentang-content {
        display: flex;
        align-items: center;
        gap: 50px;
        flex-wrap: wrap;
    }

    .tentang-img {
        width: 380px;
        border-radius: 14px;
        box-shadow: 0 12px 28px rgba(0,0,0,0.15);
        border: 2px solid rgba(0,102,255,0.15);
        animation: floatSoft 7s ease-in-out infinite;
    }

    @keyframes floatSoft {
        0%, 100% { transform: translateY(0); }
        50% { transform: translateY(-6px); }
    }

    .tentang-text {
        flex: 1;
        font-size: 1.07rem;
        color: #4a5568;
        line-height: 1.75;
        animation: fadeText .7s ease-out;
    }

    @keyframes fadeText {
        from { opacity: 0; transform: translateX(20px); }
        to { opacity: 1; transform: translateX(0); }
    }

    .tentang-text strong,
    .tentang-text .highlight {
        color: #1a4fcc;
        font-weight: 700;
    }

    .tentang-text .underline {
        background: linear-gradient(120deg, #005dff 0%, #00aaff 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        font-weight: 700;
    }

    .tentang-text::before {
        content: "";
        width: 45px;
        height: 4px;
        background: #005dff;
        border-radius: 6px;
        position: absolute;
        top: -15px;
        left: 0;
        opacity: 0.4;
    }

    /* Legalitas */
    .legalitas-section {
    background: var(--light-bg);
    padding: 80px 20px;
    }

    .legalitas-content {
    max-width: 700px;
    margin: 0 auto;
    }

    .legalitas-content ul {
    list-style: none;
    padding: 0;
    color: var(--gray);
    font-size: 1.05rem;
    }

    .legalitas-content li {
    margin-bottom: 10px;
    line-height: 1.6;
    }

    /* Fasilitas */
    .fasilitas-section {
    padding: 80px 20px;
    }

    .fasilitas-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 30px;
    margin-top: 40px;
    }

    .fasilitas-card {
    background: white;
    border-radius: var(--radius);
    box-shadow: var(--shadow);
    padding: 30px 20px;
    text-align: center;
    transition: transform 0.2s ease, box-shadow 0.2s ease;
    }

    .fasilitas-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 12px 24px rgba(0,0,0,0.1);
    }

    .fasilitas-icon {
    font-size: 2rem;
    color: var(--primary);
    margin-bottom: 15px;
    }

    .fasilitas-card h3 {
    color: var(--dark);
    font-size: 1.25rem;
    margin-bottom: 10px;
    }

    .fasilitas-card p {
    color: var(--gray);
    font-size: 0.95rem;
    line-height: 1.6;
    }

    /* Responsive */
    @media (max-width: 768px) {
    .hero-title { font-size: 2.2rem; }
    .tentang-content { flex-direction: column; text-align: center; }
    .tentang-img { width: 100%; max-width: 350px; }
    }

    /* perhargaan section */
    .penghargaan-section {
        background: var(--light-bg);
        padding: 90px 20px;
        position: relative;
    }

    .penghargaan-section .section-title {
        text-align: center;
        font-size: 2.2rem;
        color: var(--primary);
        margin-bottom: 50px;
        font-weight: 800;
        letter-spacing: .5px;
    }

    .penghargaan-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 35px;
        justify-content: center;
    }

    .penghargaan-card {
        background: #fff;
        border-radius: 18px;
        box-shadow: 0 6px 20px rgba(0,0,0,0.08);
        overflow: hidden;
        position: relative;
        transition: transform .3s ease, box-shadow .3s ease;
        border: 1px solid rgba(0,0,0,0.05);
    }

    .penghargaan-card:hover {
        transform: translateY(-10px) scale(1.02);
        box-shadow: 0 18px 40px rgba(0,0,0,0.15);
    }

    .penghargaan-card::after {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: radial-gradient(circle at top right, rgba(255,255,255,0.5), transparent 60%);
        opacity: 0;
        transition: opacity .4s ease;
    }

    .penghargaan-card:hover::after {
        opacity: 1;
    }

    .penghargaan-img {
        width: 100%;
        height: 220px;
        object-fit: cover;
        border-bottom: 3px solid var(--primary);
        transition: transform .4s ease;
    }

    .penghargaan-card:hover .penghargaan-img {
        transform: scale(1.08);
    }

    .penghargaan-card h3 {
        color: var(--dark);
        font-size: 1.25rem;
        font-weight: 700;
        margin: 22px 15px 12px;
        text-align: center;
        line-height: 1.4;
        transition: color .3s ease;
    }

    .penghargaan-card:hover h3 {
        color: var(--primary);
    }

    .penghargaan-card p {
        color: var(--gray);
        font-size: 0.97rem;
        line-height: 1.7;
        margin: 0 22px 25px;
        text-align: justify;
    }

    @media (max-width: 480px) {
        .penghargaan-grid {
            gap: 22px;
        }

        .penghargaan-img {
            height: 190px;
        }
    }


    /* Responsif */
    @media (max-width: 768px) {
    .penghargaan-section {
        padding: 60px 15px;
    }

    .penghargaan-card h3 {
        font-size: 1.1rem;
    }

    .penghargaan-card p {
        font-size: 0.9rem;
    }

    .penghargaan-img {
        height: 180px;
    }
    }

    @media (max-width: 480px) {
    .penghargaan-grid {
        gap: 20px;
    }

    .penghargaan-card {
        box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    }
    }
</style>
@endsection
