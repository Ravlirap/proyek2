@extends('layouts.main')
@section('content')
<div class="visi-misi-page">

  <!-- Hero Section -->
  <section class="hero-section">
    <div class="container">
      <div class="hero-content">
        <h1 class="hero-title">
          Visi & Misi
          <span class="highlight">LPK Seikou</span>
        </h1>
        <p class="hero-description">
          Kami berkomitmen untuk menciptakan generasi profesional Indonesia yang siap bersaing di Jepang melalui pelatihan unggulan dan karakter kerja berkualitas.
        </p>
      </div>

      <div class="hero-decoration">
        <div class="circle circle-1"></div>
        <div class="circle circle-2"></div>
        <div class="circle circle-3"></div>
      </div>

    <span class="sakura" style="left: 12%; animation-delay: 0s;"></span>
    <span class="sakura" style="left: 28%; animation-delay: 1.2s;"></span>
    <span class="sakura" style="left: 45%; animation-delay: 2.4s;"></span>
    <span class="sakura" style="left: 60%; animation-delay: 0.8s;"></span>
    <span class="sakura" style="left: 78%; animation-delay: 1.8s;"></span>

    </div>
  </section>

  <!-- Visi Section -->
  <section class="visi-section">
    <div class="container">
      <div class="visi-card">
        <h2 class="section-title"><i class="fas fa-eye"></i> Visi</h2>
        <p class="section-text">
          Menjadi lembaga pelatihan kerja terdepan di Indonesia yang berstandar internasional dalam mencetak tenaga kerja profesional dan berkarakter unggul untuk berkarir di Jepang.
        </p>
      </div>
    </div>
  </section>

  <!-- Misi Section -->
  <section class="misi-section">
    <div class="container">
      <h2 class="section-title"><i class="fas fa-bullseye"></i> Misi</h2>
      <ul class="misi-list">
        <li>Memberikan pelatihan bahasa Jepang dan keterampilan kerja sesuai kebutuhan industri Jepang.</li>
        <li>Membangun kedisiplinan, etos kerja, dan sikap profesional peserta pelatihan.</li>
        <li>Bekerja sama dengan lembaga dan perusahaan Jepang untuk penempatan tenaga kerja.</li>
        <li>Mendukung pengembangan karier jangka panjang peserta hingga setelah bekerja di Jepang.</li>
      </ul>
    </div>
  </section>

  <!-- Nilai Utama Section -->
  <section class="nilai-section">
    <div class="container">
      <h2 class="section-title"><i class="fas fa-star"></i> Nilai Utama Kami</h2>

      <div class="nilai-grid">
        <div class="nilai-card">
          <div class="nilai-icon"><i class="fas fa-hands-helping"></i></div>
          <h3>Integritas</h3>
          <p>Menjunjung tinggi kejujuran dan tanggung jawab dalam setiap proses pelatihan dan kerja sama.</p>
        </div>
        <div class="nilai-card">
          <div class="nilai-icon"><i class="fas fa-users"></i></div>
          <h3>Profesionalisme</h3>
          <p>Memberikan pelayanan dan pelatihan dengan standar mutu tinggi yang berorientasi pada hasil nyata.</p>
        </div>
        <div class="nilai-card">
          <div class="nilai-icon"><i class="fas fa-seedling"></i></div>
          <h3>Pengembangan Diri</h3>
          <p>Mendorong setiap peserta untuk terus belajar dan tumbuh, baik secara teknis maupun pribadi.</p>
        </div>
        <div class="nilai-card">
          <div class="nilai-icon"><i class="fas fa-globe-asia"></i></div>
          <h3>Kolaborasi Global</h3>
          <p>Membangun hubungan internasional yang kuat demi membuka peluang karier di Jepang dan luar negeri.</p>
        </div>
      </div>
    </div>
  </section>
</div>

    <style>
    :root {
    --primary: #c9003c;
    --secondary: #0057ff;
    --dark: #1a1a1a;
    --gray: #666;
    --light-bg: #f5f7fb;
    --radius: 12px;
    --shadow: 0 8px 18px rgba(0,0,0,0.08);
    }

    .visi-misi-page {
    width: 100%;
    animation: fadeIn .8s ease-out;
    }

    @keyframes fadeIn {
    from { opacity: 0; transform: translateY(20px); }
    to   { opacity: 1; transform: translateY(0); }
    }

    /* hero section */
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

    .hero-section::before {
    content: "";
    position: absolute;
    top: 40px;
    left: 40px;
    width: 220px;
    height: 220px;
    background-image:
        radial-gradient(rgba(255,255,255,0.07) 20%, transparent 21%),
        radial-gradient(rgba(255,255,255,0.07) 20%, transparent 21%);
    background-size: 18px 18px;
    background-position: 0 0, 9px 9px;
    mask-image: radial-gradient(circle, white, transparent 70%);
    opacity: .25;
    pointer-events: none;
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

    /* visi section */
    .visi-section {
    padding: 80px 20px;
    }

    .visi-card {
        background: white;
        border-radius: var(--radius);
        padding: 45px;
        box-shadow: var(--shadow);
        border-left: 7px solid var(--secondary);
        transition: transform .25s ease, box-shadow .25s ease;
    }

    .visi-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 18px 35px rgba(0,0,0,0.12);
    }

    .section-title {
        font-size: 2.3rem;
        color: var(--secondary);
        margin-bottom: 18px;
        text-align: center;
        position: relative;
    }

    .section-title::after {
        content: "";
        width: 80px;
        height: 4px;
        background: var(--secondary);
        display: block;
        margin: 12px auto 0;
        border-radius: 2px;
        box-shadow: 0 4px 12px rgba(0,87,255,0.4);
    }

    .section-text {
        text-align: center;
        font-size: 1.15rem;
        color: var(--gray);
        max-width: 820px;
        margin: 0 auto;
        line-height: 1.85;
    }

    /* misi section */
    .misi-section {
    padding: 90px 20px;
    background: linear-gradient(135deg, #f5f8ff, #eef2ff);
    }

    .misi-list {
        max-width: 820px;
        margin: 0 auto;
        padding: 0;
        list-style: none;
        animation: fadeList 1s ease-out;
    }

    @keyframes fadeList {
        from { opacity: 0; transform: translateY(30px); }
        to { opacity: 1; transform: translateY(0); }
    }

    .misi-list li {
        font-size: 1.08rem;
        color: var(--dark);
        margin-bottom: 18px;
        padding: 16px 20px 16px 48px;

        background: rgba(255, 255, 255, 0.75);
        backdrop-filter: blur(6px);
        border-radius: var(--radius);

        border: 1px solid rgba(0, 0, 0, 0.06);

        box-shadow:
            0 4px 10px rgba(0, 0, 0, 0.04),
            0 8px 28px rgba(0, 0, 0, 0.06);

        position: relative;
        transition:
            transform .25s ease,
            box-shadow .25s ease,
            background .25s ease;
    }

    .misi-list li:hover {
        transform: translateX(8px);
        background: rgba(255, 255, 255, 0.95);
        box-shadow:
            0 8px 18px rgba(0, 0, 0, 0.06),
            0 14px 34px rgba(0, 0, 0, 0.12);
    }

    .misi-list li::before {
        content: "";
        position: absolute;
        left: 16px;
        top: 50%;
        transform: translateY(-50%);

        width: 14px;
        height: 14px;
        border-radius: 50%;

        background: var(--primary);
        box-shadow: 0 0 8px rgba(0, 102, 255, 0.4);
    }


    /* nilai section */
    .nilai-section {
        padding: 90px 20px;
        background: #ffffff;
    }

    .nilai-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px,1fr));
        gap: 32px;
        margin-top: 40px;
    }

    .nilai-card {
        background: #ffffff;
        padding: 34px 24px;
        border-radius: var(--radius);
        text-align: center;
        border: 1px solid rgba(0, 85, 255, 0.12);

        box-shadow:
            0 8px 18px rgba(0, 0, 0, 0.07),
            inset 0 0 12px rgba(0, 115, 255, 0.05);

        transition:
            transform .35s ease,
            box-shadow .35s ease,
            border .35s ease;
    }

    .nilai-card:hover {
        transform: translateY(-10px) scale(1.03);

        border: 1px solid rgba(0, 85, 255, 0.35);

        box-shadow:
            0 14px 35px rgba(0, 87, 255, 0.16),
            inset 0 0 18px rgba(0, 115, 255, 0.10);
    }

    .nilai-icon {
        font-size: 2.4rem;
        color: var(--secondary);
        margin-bottom: 18px;

        padding: 16px;
        width: 68px;
        height: 68px;

        display: flex;
        justify-content: center;
        align-items: center;

        border-radius: 50%;
        background: rgba(0, 89, 255, 0.10);

        box-shadow:
            0 4px 10px rgba(0, 87, 255, 0.20),
            inset 0 0 6px rgba(255,255,255,0.6);

        animation: floatIcon 3.2s infinite ease-in-out;
    }

    @keyframes floatIcon {
        0%, 100% { transform: translateY(0); }
        50% { transform: translateY(-6px); }
    }

    .nilai-card h3 {
        font-size: 1.25rem;
        margin-bottom: 8px;
        font-weight: 700;
        color: #0f1c3f;
    }

    .nilai-card p {
        color: var(--gray);
        font-size: .96rem;
        line-height: 1.65;
    }

    @media (max-width: 768px) {
        .nilai-card {
            padding: 28px 20px;
        }
    }


    </style>
@endsection
