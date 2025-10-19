@extends('layouts.main')
@section('content')
<div class="galeri-page">

  <!-- Hero Section -->
  <section class="hero-section">
    <div class="container">
      <div class="hero-content">
        <h1 class="hero-title">
          Galeri <span class="highlight">LPK Seikou</span>
        </h1>
        <p class="hero-description">
          Lihat berbagai kegiatan, pelatihan, dan momen berharga bersama peserta LPK Seikou.
          Setiap gambar mencerminkan semangat belajar, kerja keras, dan budaya disiplin menuju kesuksesan di Jepang.
        </p>
        <div class="hero-features">
          <div class="feature-item">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/>
              <polyline points="22 4 12 14.01 9 11.01"/>
            </svg>
            <span>Kegiatan Pelatihan</span>
          </div>
          <div class="feature-item">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/>
              <polyline points="22 4 12 14.01 9 11.01"/>
            </svg>
            <span>Budaya Jepang</span>
          </div>
          <div class="feature-item">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/>
              <polyline points="22 4 12 14.01 9 11.01"/>
            </svg>
            <span>Suasana Belajar</span>
          </div>
        </div>
      </div>

      <div class="hero-decoration">
        <div class="circle circle-1"></div>
        <div class="circle circle-2"></div>
        <div class="circle circle-3"></div>
      </div>
    </div>
  </section>

  <!-- Gallery Grid Section -->
  <section class="gallery-section">
    <div class="container">
      <h2 class="gallery-title">Dokumentasi <span class="highlight">Kegiatan</span></h2>

      <div class="gallery-grid">
        @for ($i = 1; $i <= 12; $i++)
          <div class="gallery-item">
            <img src="{{ asset('img/galeri' . $i . '.jpg') }}" alt="Galeri LPK Seikou {{ $i }}" loading="lazy">
            <div class="gallery-overlay">
              <span class="gallery-caption">Kegiatan {{ $i }}</span>
            </div>
          </div>
        @endfor
      </div>
    </div>
  </section>

  <!-- CTA Section -->
  <section class="cta-section">
    <div class="container">
      <div class="cta-content">
        <h2>Bergabunglah Bersama Kami!</h2>
        <p>Jadilah bagian dari perjalanan menuju karir impian di Jepang melalui pelatihan terbaik dari LPK Seikou.</p>
        <a href="{{ route('pendaftaran') }}" class="btn btn-primary">Daftar Sekarang</a>
      </div>
    </div>
  </section>
</div>

<style>
/* Gunakan variabel, layout, dan style sama dengan program_pelatihan */
:root {
  --primary: #c9003c;
  --secondary: #2c3e50;
  --dark: #1a1a1a;
  --gray: #666;
  --light-bg: #f8f9fa;
  --radius: 10px;
  --shadow: 0 4px 6px rgba(0,0,0,0.1);
}

body {
  font-family: 'Poppins', Roboto, system-ui, sans-serif;
  color: var(--dark);
}

.hero-section {
  position: relative;
  background: linear-gradient(135deg, #6671ea 0%, #273d9c 100%);
  padding: 80px 20px;
  margin-top: 84px;
  margin-bottom: 30px;
  overflow: hidden;
  width: 100vw;
  left: 50%;
  right: 50%;
  margin-left: -50vw;
  margin-right: -50vw;
  box-shadow: 0 20px 60px rgba(102,126,234,0.3);
}

.hero-title {
  font-size: 3rem;
  color: white;
  font-weight: 800;
  margin-bottom: 20px;
}

.hero-description {
  color: rgba(255,255,255,0.9);
  font-size: 1.125rem;
  margin-bottom: 30px;
  line-height: 1.8;
}

.hero-features {
  display: flex;
  flex-wrap: wrap;
  gap: 20px;
  color: white;
}

.feature-item {
  display: flex;
  align-items: center;
  gap: 8px;
  font-size: 0.9rem;
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

/* Gallery Section */
.gallery-section {
  padding: 60px 20px;
  background: #f3f5f6;
  border-radius: 20px;
}

.gallery-title {
  text-align: center;
  font-size: 2rem;
  color: #333;
  margin-bottom: 40px;
}

.gallery-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
  gap: 20px;
}

.gallery-item {
  position: relative;
  overflow: hidden;
  border-radius: 12px;
  box-shadow: var(--shadow);
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.gallery-item:hover {
  transform: translateY(-5px);
  box-shadow: 0 15px 30px rgba(0,0,0,0.1);
}

.gallery-item img {
  width: 100%;
  height: 250px;
  object-fit: cover;
  transition: transform 0.3s ease;
}

.gallery-item:hover img {
  transform: scale(1.05);
}

.gallery-overlay {
  position: absolute;
  inset: 0;
  background: linear-gradient(to top, rgba(0,0,0,0.5), transparent);
  opacity: 0;
  transition: opacity 0.3s ease;
  display: flex;
  align-items: flex-end;
  justify-content: center;
  padding: 15px;
}

.gallery-item:hover .gallery-overlay {
  opacity: 1;
}

.gallery-caption {
  color: #fff;
  font-weight: 500;
  font-size: 1rem;
  text-align: center;
}

/* CTA Section */
.cta-section {
  background: linear-gradient(to right, var(--primary), #ff4d6d);
  color: white;
  padding: 60px 20px;
  margin-top: 80px;
  text-align: center;
  width: 100vw;
  left: 50%;
  right: 50%;
  margin-left: -50vw;
  margin-right: -50vw;
}

.cta-content h2 {
  font-size: 2.5rem;
  margin-bottom: 20px;
}

.cta-content p {
  opacity: 0.9;
  margin-bottom: 24px;
  font-size: 1.1rem;
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
  .hero-title { font-size: 2rem; }
  .gallery-grid { grid-template-columns: 1fr; }
  .cta-content h2 { font-size: 1.75rem; }
}
</style>
@endsection
