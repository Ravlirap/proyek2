@extends('layouts.main')
@section('content')
<div class="fasilitas-page">

  <!-- Hero Section -->
  <section class="hero-section">
    <div class="container">
      <div class="hero-content">
        <h1 class="hero-title">
          Fasilitas <span class="highlight">LPK Seikou</span>
        </h1>
        <p class="hero-description">
          Kami menyediakan berbagai fasilitas modern dan nyaman untuk mendukung proses pembelajaran, pelatihan, serta pengembangan karakter peserta menuju kesuksesan bekerja di Jepang.
        </p>
      </div>

      <div class="hero-decoration">
        <div class="circle circle-1"></div>
        <div class="circle circle-2"></div>
      </div>
    </div>
  </section>

  <!-- Fasilitas Section -->
  <section class="fasilitas-section">
    <div class="container">
      <h2 class="section-title"><i class="fas fa-building"></i> Fasilitas Kami</h2>
      <div class="fasilitas-grid">

        <div class="fasilitas-card">
          <img src="{{ asset('img/fasilitas1.jpg') }}" alt="Kelas Bahasa Jepang">
          <div class="fasilitas-info">
            <h3>Kelas Bahasa Jepang</h3>
            <p>Ruang belajar yang nyaman dan dilengkapi alat bantu audio-visual untuk mendukung pembelajaran bahasa Jepang secara interaktif.</p>
          </div>
        </div>

        <div class="fasilitas-card">
          <img src="{{ asset('img/fasilitas2.jpg') }}" alt="Asrama Peserta">
          <div class="fasilitas-info">
            <h3>Asrama Peserta</h3>
            <p>Fasilitas tempat tinggal bersih dan tertata dengan baik agar peserta dapat belajar dengan nyaman dan fokus.</p>
          </div>
        </div>

        <div class="fasilitas-card">
          <img src="{{ asset('img/fasilitas3.jpg') }}" alt="Laboratorium Komputer">
          <div class="fasilitas-info">
            <h3>Laboratorium Komputer</h3>
            <p>Perangkat komputer modern untuk pembelajaran berbasis teknologi dan simulasi pelatihan kerja.</p>
          </div>
        </div>

        <div class="fasilitas-card">
          <img src="{{ asset('img/fasilitas4.jpg') }}" alt="Ruang Budaya Jepang">
          <div class="fasilitas-info">
            <h3>Ruang Budaya Jepang</h3>
            <p>Tempat untuk mengenal adat, etika, dan kebiasaan kerja Jepang sebagai bagian dari pembentukan karakter peserta.</p>
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
  color: white;
  text-align: center;
}

.hero-title {
  font-size: 3rem;
  font-weight: 800;
}

.hero-description {
  font-size: 1.1rem;
  color: rgba(255,255,255,0.9);
  margin-top: 15px;
  max-width: 800px;
  margin-left: auto;
  margin-right: auto;
}

.hero-decoration .circle {
  position: absolute;
  border-radius: 50%;
  background: rgba(255,255,255,0.1);
  backdrop-filter: blur(6px);
}

.circle-1 { width: 280px; height: 280px; top: -40px; right: -60px; }
.circle-2 { width: 180px; height: 180px; bottom: -30px; left: 15%; }

/* Fasilitas Section */
.fasilitas-section {
  background: var(--light-bg);
  padding: 80px 20px;
}

.section-title {
  text-align: center;
  color: var(--primary);
  font-size: 2rem;
  font-weight: 700;
  margin-bottom: 40px;
}

.fasilitas-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
  gap: 25px;
}

.fasilitas-card {
  background: white;
  border-radius: var(--radius);
  box-shadow: var(--shadow);
  overflow: hidden;
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.fasilitas-card:hover {
  transform: translateY(-5px);
  box-shadow: 0 10px 24px rgba(0,0,0,0.1);
}

.fasilitas-card img {
  width: 100%;
  height: 220px;
  object-fit: cover;
}

.fasilitas-info {
  padding: 20px;
  text-align: center;
}

.fasilitas-info h3 {
  color: var(--dark);
  font-size: 1.25rem;
  margin-bottom: 10px;
}

.fasilitas-info p {
  color: var(--gray);
  font-size: 0.95rem;
  line-height: 1.6;
}

/* Responsive */
@media (max-width: 768px) {
  .hero-title { font-size: 2.2rem; }
  .section-title { font-size: 1.6rem; }
}
</style>
@endsection
