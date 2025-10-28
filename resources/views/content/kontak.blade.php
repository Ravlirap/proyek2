@extends('layouts.main')
@section('content')

<div class="kontak-page">

  <!-- Hero Section -->
   <section class="hero-section">
    <div class="container">
      <div class="hero-content">
        <h1 class="hero-title">
          Kontak <span class="highlight">LPK Seikou</span>
        </h1>
        <p class="hero-description">
          Kami siap membantu menjawab pertanyaan Anda seputar program pelatihan, magang, dan kerja di Jepang.
          Jangan ragu untuk menghubungi kami melalui form atau kontak resmi berikut.
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

  <!-- Info Kontak -->
  <section class="contact-info">
    <div class="container">
      <div class="info-grid">
        <div class="info-item">
          <i class="fas fa-map-marker-alt"></i>
          <h3>Alamat</h3>
          <p>Jl. Merdeka No. 45, Indramayu, Jawa Barat</p>
        </div>
        <div class="info-item">
          <i class="fas fa-phone"></i>
          <h3>Telepon</h3>
          <p>+62 812 3456 7890</p>
        </div>
        <div class="info-item">
          <i class="fas fa-envelope"></i>
          <h3>Email</h3>
          <p>info@lpkseikou.co.id</p>
        </div>
        <div class="info-item">
          <i class="fas fa-clock"></i>
          <h3>Jam Operasional</h3>
          <p>Senin - Jumat, 08.00 - 16.00 WIB</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Form Kontak -->
  <section class="contact-form">
    <div class="container">
      <h2 class="section-title">Kirim <span class="highlight">Pesan</span></h2>
      <form action="#" method="POST" class="form-wrapper">
        @csrf
        <div class="form-group">
          <input type="text" name="nama" placeholder="Nama Lengkap" required>
        </div>
        <div class="form-group">
          <input type="email" name="email" placeholder="Alamat Email" required>
        </div>
        <div class="form-group">
          <textarea name="pesan" rows="5" placeholder="Tulis pesan Anda..." required></textarea>
        </div>
        <button type="submit" class="submit-btn">Kirim Pesan</button>
      </form>
    </div>
  </section>

  <!-- Map Section -->
  <section class="map-section">
    <iframe
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.2077464542017!2d108.32075417430087!3d-6.367155162284096!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6eb9285148a00f%3A0xbec1e32de6e9a5a7!2sLPK%20SEIKOU%20JAPAN!5e0!3m2!1sid!2sid!4v1761640551567!5m2!1sid!2sid"
      width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy">
    </iframe>
  </section>
</div>

<style>
:root {
  --primary: #c9003c;
  --secondary: #2c3e50;
  --gray: #6b7280;
  --radius: 10px;
  --shadow: 0 4px 12px rgba(0,0,0,0.1);
}

/* Hero */
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

.circle-1 { width: 230px; height: 230px; top: -50px; right: -50px; }
.circle-2 { width: 110px; height: 110px; bottom: 20%; right: 10%; }
.circle-3 { width: 150px; height: 150px; bottom: -30px; right: 30%; }

/* Contact Info */
.contact-info {
  padding: 60px 20px;
  background: #f8f9fa;
}

.info-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
  gap: 30px;
  text-align: center;
}

.info-item i {
  font-size: 2rem;
  color: var(--primary);
  margin-bottom: 12px;
}

.info-item h3 {
  color: var(--secondary);
  font-size: 1.1rem;
  margin-bottom: 6px;
}

.info-item p {
  color: var(--gray);
  font-size: 0.95rem;
}

/* Form */
.contact-form {
  padding: 60px 20px;
}

.section-title {
  text-align: center;
  font-size: 2rem;
  color: var(--secondary);
  margin-bottom: 40px;
}

.form-wrapper {
  max-width: 600px;
  margin: 0 auto;
  display: flex;
  flex-direction: column;
  gap: 20px;
}

.form-group input,
.form-group textarea {
  width: 100%;
  padding: 14px;
  border-radius: var(--radius);
  border: 1px solid #ccc;
  font-size: 1rem;
}

.submit-btn {
  background: var(--primary);
  color: #fff;
  border: none;
  padding: 12px;
  border-radius: var(--radius);
  cursor: pointer;
  font-size: 1rem;
  font-weight: 500;
  transition: 0.3s;
}

.submit-btn:hover {
  background: #a10032;
}

/* Map */
.map-section {
  margin-top: 40px;
}

iframe {
  border-radius: 10px;
}

/* Responsive */
@media (max-width: 768px) {
  .hero-title { font-size: 2rem; }
  .info-grid { grid-template-columns: 1fr 1fr; }
}

@media (max-width: 480px) {
  .info-grid { grid-template-columns: 1fr; }
}
</style>

@endsection
