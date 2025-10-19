@extends('layouts.main')
@section('content')
<div class="grup-page">

  <!-- Hero Section -->
  <section class="hero-section">
    <div class="container">
      <div class="hero-content">
        <h1 class="hero-title">
          Grup & Mitra <span class="highlight">LPK Seikou</span>
        </h1>
        <p class="hero-description">
          LPK Seikou bekerja sama dengan berbagai perusahaan dan lembaga di Jepang maupun Indonesia untuk mendukung penempatan kerja dan pelatihan berkualitas.
        </p>
      </div>

      <div class="hero-decoration">
        <div class="circle circle-1"></div>
        <div class="circle circle-2"></div>
        <div class="circle circle-3"></div>
      </div>
    </div>
  </section>

  <!-- Grup Perusahaan Section -->
  <section class="grup-section">
    <div class="container">
      <h2 class="section-title"><i class="fas fa-handshake"></i> Grup Perusahaan Kami</h2>

      <div class="grup-grid">
        <div class="grup-card">
          <img src="{{ asset('img/grup1.jpg') }}" alt="Seikou Japan Co., Ltd" class="grup-img">
          <div class="grup-info">
            <h3>Seikou Japan Co., Ltd</h3>
            <p>Perusahaan mitra utama kami di Jepang yang berfokus pada rekrutmen dan pengembangan tenaga kerja Indonesia di berbagai sektor industri.</p>
          </div>
        </div>

        <div class="grup-card">
          <img src="{{ asset('img/grup2.jpg') }}" alt="Seikou Indonesia" class="grup-img">
          <div class="grup-info">
            <h3>Seikou Indonesia</h3>
            <p>Lembaga pelatihan dan pengiriman tenaga kerja di Indonesia yang terintegrasi dengan sistem pelatihan LPK Seikou.</p>
          </div>
        </div>

        <div class="grup-card">
          <img src="{{ asset('img/grup3.jpg') }}" alt="Nihon Kyoiku Center" class="grup-img">
          <div class="grup-info">
            <h3>Nihon Kyoiku Center</h3>
            <p>Lembaga pendidikan Jepang yang menjadi mitra pengajaran bahasa dan budaya Jepang bagi peserta pelatihan.</p>
          </div>
        </div>

        <div class="grup-card">
          <img src="{{ asset('img/grup4.jpg') }}" alt="Seikou Global Training" class="grup-img">
          <div class="grup-info">
            <h3>Seikou Global Training</h3>
            <p>Mengelola program pelatihan profesional dan sertifikasi keterampilan internasional untuk peserta sebelum diberangkatkan.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Kerja Sama Section -->
  <section class="kerjasama-section">
    <div class="container">
      <h2 class="section-title"><i class="fas fa-globe-asia"></i> Jaringan Kerja Sama</h2>
      <p class="kerjasama-text">
        LPK Seikou menjalin hubungan dengan berbagai lembaga pemerintah, perusahaan swasta, dan instansi pendidikan untuk memastikan kualitas pelatihan dan penempatan kerja yang optimal di Jepang.
      </p>
      <div class="logo-grid">
        <img src="{{ asset('img/logo1.png') }}" alt="Mitra 1">
        <img src="{{ asset('img/logo2.png') }}" alt="Mitra 2">
        <img src="{{ asset('img/logo3.png') }}" alt="Mitra 3">
        <img src="{{ asset('img/logo4.png') }}" alt="Mitra 4">
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
  background: linear-gradient(135deg, #6671ea 0%, #273d9c 100%);
  padding: 100px 20px;
  margin-top: 84px;
  overflow: hidden;
  width: 100vw;
  left: 50%;
  margin-left: -50vw;
  right: 50%;
  margin-right: -50vw;
  box-shadow: 0 20px 60px rgba(102, 126, 234, 0.3);
}

.hero-title {
  font-size: 3rem;
  color: white;
  font-weight: 800;
  line-height: 1.2;
  text-align: center;
}

.hero-description {
  font-size: 1.1rem;
  color: rgba(255,255,255,0.9);
  margin-top: 20px;
  text-align: center;
  max-width: 800px;
  margin-left: auto;
  margin-right: auto;
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

/* Grup Section */
.grup-section {
  padding: 80px 20px;
}

.grup-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
  gap: 30px;
  margin-top: 40px;
}

.grup-card {
  background: white;
  border-radius: var(--radius);
  box-shadow: var(--shadow);
  overflow: hidden;
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.grup-card:hover {
  transform: translateY(-5px);
  box-shadow: 0 12px 24px rgba(0,0,0,0.1);
}

.grup-img {
  width: 100%;
  height: 200px;
  object-fit: cover;
}

.grup-info {
  padding: 20px;
  text-align: center;
}

.grup-info h3 {
  color: var(--dark);
  font-size: 1.2rem;
  margin-bottom: 10px;
}

.grup-info p {
  color: var(--gray);
  font-size: 0.95rem;
  line-height: 1.6;
}

/* Kerja Sama Section */
.kerjasama-section {
  background: var(--light-bg);
  padding: 80px 20px;
}

.kerjasama-text {
  text-align: center;
  color: var(--gray);
  font-size: 1.05rem;
  max-width: 800px;
  margin: 0 auto 40px;
}

.logo-grid {
  display: flex;
  justify-content: center;
  align-items: center;
  flex-wrap: wrap;
  gap: 40px;
}

.logo-grid img {
  width: 120px;
  filter: grayscale(100%);
  opacity: 0.7;
  transition: 0.3s;
}

.logo-grid img:hover {
  filter: none;
  opacity: 1;
}

/* Responsive */
@media (max-width: 768px) {
  .hero-title { font-size: 2.2rem; }
  .grup-img { height: 180px; }
  .logo-grid img { width: 90px; }
}
</style>
@endsection
