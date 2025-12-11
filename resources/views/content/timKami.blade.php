@extends('layouts.main')
@section('content')
<div class="tim-page">

  <!-- Hero Section -->
  <section class="hero-section">
    <div class="container">
      <div class="hero-content">
        <h1 class="hero-title">
          Tim <span class="highlight">LPK Seikou</span>
        </h1>
        <p class="hero-description">
          Kami adalah tim profesional dan berdedikasi yang berkomitmen untuk membimbing peserta menuju kesuksesan — baik di Indonesia maupun di Jepang.
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

  <!-- Tim Kami Section -->
  <section class="tim-section">
    <div class="container">
      <h2 class="section-title"><i class="fas fa-users"></i> Tim Kami</h2>
      <p class="section-subtitle">
        Inilah orang-orang hebat di balik keberhasilan LPK Seikou dalam mencetak tenaga kerja unggulan dan berkarakter.
      </p>

      <div class="tim-grid">
        <div class="tim-card">
          <img src="{{ asset('img/tim1.jpg') }}" alt="Kepala LPK" loading="lazy">
          <div class="tim-info">
            <h3>Yamada Taro</h3>
            <p>Kepala LPK Seikou</p>
          </div>
        </div>

        <div class="tim-card">
          <img src="{{ asset('img/tim2.jpg') }}" alt="Instruktur Bahasa Jepang" loading="lazy">
          <div class="tim-info">
            <h3>Siti Rahmawati</h3>
            <p>Instruktur Bahasa Jepang</p>
          </div>
        </div>

        <div class="tim-card">
          <img src="{{ asset('img/tim3.jpg') }}" alt="Koordinator Pelatihan" loading="lazy">
          <div class="tim-info">
            <h3>Budi Santoso</h3>
            <p>Koordinator Pelatihan</p>
          </div>
        </div>

        <div class="tim-card">
          <img src="{{ asset('img/tim4.jpg') }}" alt="Staf Administrasi" loading="lazy">
          <div class="tim-info">
            <h3>Keiko Nakamura</h3>
            <p>Staf Administrasi</p>
          </div>
        </div>

        <div class="tim-card">
          <img src="{{ asset('img/tim5.jpg') }}" alt="Pembimbing Peserta" loading="lazy">
          <div class="tim-info">
            <h3>Andi Pratama</h3>
            <p>Pembimbing Peserta</p>
          </div>
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

    /* Tim Section */
    .tim-section {
        padding: 80px 20px;
        background: var(--light-bg);
        text-align: center;
    }

    .section-title {
        font-size: 2rem;
        color: var(--primary);
        margin-bottom: 14px;
        font-weight: 700;
        letter-spacing: .5px;
    }

    .section-subtitle {
        color: var(--gray);
        max-width: 700px;
        margin: 0 auto 50px;
        line-height: 1.6;
    }

    .tim-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 35px;
    }

    .tim-card {
        background: white;
        border-radius: var(--radius);
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
        overflow: hidden;
        border-top: 5px solid var(--primary);
        transition: .3s ease;
    }

    .tim-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 16px 28px rgba(0, 120, 255, 0.18);
    }

    .tim-card img {
        width: 100%;
        height: 280px;
        object-fit: cover;
        transition: transform .4s ease;
    }

    .tim-card:hover img {
        transform: scale(1.05);
    }

    .tim-info {
        padding: 22px;
    }

    .tim-info h3 {
        font-size: 1.25rem;
        font-weight: 600;
        color: var(--dark);
        margin-bottom: 6px;
    }

    .tim-info p {
        color: var(--gray);
        font-size: .95rem;
    }

    @media (max-width: 768px) {
        .section-title { font-size: 1.6rem; }
        .tim-card img { height: 240px; }
    }

    </style>
@endsection
