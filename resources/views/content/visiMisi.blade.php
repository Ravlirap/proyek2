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
  --dark: #1a1a1a;
  --gray: #666;
  --light-bg: #f8f9fa;
  --radius: 10px;
  --shadow: 0 4px 6px rgba(0,0,0,0.1);
}

.visi-misi-page {
  width: 100%;
}

/* Reuse hero-section style from program_pelatihan */
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
}

.hero-description {
  font-size: 1.1rem;
  color: rgba(255,255,255,0.9);
  margin-top: 20px;
}

/* Section Titles */
.section-title {
  font-size: 2rem;
  color: var(--primary);
  margin-bottom: 20px;
  text-align: center;
}

.section-title i {
  margin-right: 10px;
}

.section-text {
  text-align: center;
  font-size: 1.1rem;
  color: var(--gray);
  line-height: 1.8;
  max-width: 800px;
  margin: 0 auto;
}

/* Visi Card */
.visi-card {
  background: white;
  border-radius: var(--radius);
  box-shadow: var(--shadow);
  padding: 40px;
  margin-top: 60px;
}

/* Misi */
.misi-section {
  padding: 80px 20px;
  background: var(--light-bg);
}

.misi-list {
  max-width: 800px;
  margin: 0 auto;
  list-style: none;
  padding: 0;
}

.misi-list li {
  font-size: 1.05rem;
  color: var(--gray);
  margin-bottom: 15px;
  position: relative;
  padding-left: 28px;
}

.misi-list li::before {
  content: "✔";
  color: var(--primary);
  position: absolute;
  left: 0;
}

/* Nilai Section */
.nilai-section {
  padding: 80px 20px;
}

.nilai-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
  gap: 30px;
  margin-top: 40px;
}

.nilai-card {
  background: white;
  border-radius: var(--radius);
  box-shadow: var(--shadow);
  padding: 30px 20px;
  text-align: center;
  transition: transform 0.2s ease, box-shadow 0.2s ease;
}

.nilai-card:hover {
  transform: translateY(-5px);
  box-shadow: 0 12px 24px rgba(0,0,0,0.1);
}

.nilai-icon {
  font-size: 2rem;
  color: var(--primary);
  margin-bottom: 15px;
}

.nilai-card h3 {
  color: var(--dark);
  font-size: 1.25rem;
  margin-bottom: 10px;
}

.nilai-card p {
  color: var(--gray);
  font-size: 0.95rem;
  line-height: 1.6;
}

/* CTA Section reused */
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
  width: 100%;
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
  .hero-title {
    font-size: 2.2rem;
  }
  .section-title {
    font-size: 1.6rem;
  }
}
</style>
@endsection
