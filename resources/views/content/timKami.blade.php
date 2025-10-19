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
          <img src="{{ asset('img/tim1.jpg') }}" alt="Instruktur Bahasa Jepang" loading="lazy">
          <div class="tim-info">
            <h3>Siti Rahmawati</h3>
            <p>Instruktur Bahasa Jepang</p>
          </div>
        </div>

        <div class="tim-card">
          <img src="{{ asset('img/tim1.jpg') }}" alt="Koordinator Pelatihan" loading="lazy">
          <div class="tim-info">
            <h3>Budi Santoso</h3>
            <p>Koordinator Pelatihan</p>
          </div>
        </div>

        <div class="tim-card">
          <img src="{{ asset('img/tim1.jpg') }}" alt="Staf Administrasi" loading="lazy">
          <div class="tim-info">
            <h3>Keiko Nakamura</h3>
            <p>Staf Administrasi</p>
          </div>
        </div>

        <div class="tim-card">
          <img src="{{ asset('img/tim1.jpg') }}" alt="Pembimbing Peserta" loading="lazy">
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
  background: linear-gradient(135deg, #6671ea 0%, #273d9c 100%);
  padding: 100px 20px;
  margin-top: 84px;
  overflow: hidden;
  width: 100vw;
  left: 50%;
  margin-left: -50vw;
  right: 50%;
  margin-right: -50vw;
  box-shadow: 0 20px 60px rgba(102,126,234,0.3);
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
  margin-top: 20px;
  max-width: 700px;
  margin-left: auto;
  margin-right: auto;
}

.hero-decoration .circle {
  position: absolute;
  border-radius: 50%;
  background: rgba(255,255,255,0.1);
  backdrop-filter: blur(5px);
}

.circle-1 { width: 300px; height: 300px; top: -50px; right: -50px; }
.circle-2 { width: 200px; height: 200px; bottom: 20%; right: 10%; }
.circle-3 { width: 150px; height: 150px; bottom: -30px; right: 30%; }

/* Tim Section */
.tim-section {
  padding: 80px 20px;
  background: var(--light-bg);
  text-align: center;
}

.section-title {
  font-size: 2rem;
  color: var(--primary);
  margin-bottom: 10px;
}

.section-title i {
  margin-right: 10px;
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
  gap: 30px;
}

.tim-card {
  background: white;
  border-radius: var(--radius);
  box-shadow: var(--shadow);
  overflow: hidden;
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.tim-card:hover {
  transform: translateY(-5px);
  box-shadow: 0 12px 24px rgba(0,0,0,0.12);
}

.tim-card img {
  width: 100%;
  height: 280px;
  object-fit: cover;
}

.tim-info {
  padding: 20px;
}

.tim-info h3 {
  font-size: 1.2rem;
  color: var(--dark);
  font-weight: 600;
  margin-bottom: 6px;
}

.tim-info p {
  color: var(--gray);
  font-size: 0.95rem;
}

/* CTA Section */
.cta-section {
  background: linear-gradient(to right, var(--primary), #ff4d6d);
  color: white;
  padding: 60px 20px;
  margin-top: 60px;
  text-align: center;
  width: 100vw;
  left: 50%;
  margin-left: -50vw;
  right: 50%;
  margin-right: -50vw;
}

.cta-content {
  max-width: 800px;
  margin: 0 auto;
}

.btn-primary {
  display: inline-block;
  padding: 12px 30px;
  background: white;
  color: var(--primary);
  border-radius: 25px;
  text-decoration: none;
  font-weight: 600;
  transition: transform 0.2s ease;
}

.btn-primary:hover {
  transform: translateY(-2px);
}

/* Responsive */
@media (max-width: 768px) {
  .hero-title { font-size: 2.2rem; }
  .section-title { font-size: 1.6rem; }
  .tim-card img { height: 240px; }
}
</style>
@endsection
