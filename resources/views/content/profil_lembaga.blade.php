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

/* Tentang Kami */
.tentang-section {
  padding: 80px 20px;
}

.tentang-content {
  display: flex;
  align-items: center;
  gap: 40px;
  flex-wrap: wrap;
}

.tentang-img {
  width: 400px;
  border-radius: var(--radius);
  box-shadow: var(--shadow);
}

.tentang-text {
  flex: 1;
  font-size: 1.05rem;
  color: var(--gray);
  line-height: 1.8;
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

.penghargaan-section {
  background: var(--light-bg); /* gunakan warna lembut seperti bagian legalitas */
  padding: 80px 20px;
}

.penghargaan-section .section-title {
  text-align: center;
  font-size: 2rem;
  color: var(--primary);
  margin-bottom: 40px;
}

.penghargaan-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
  gap: 30px;
  justify-content: center;
}

.penghargaan-card {
  background: #fff;
  border-radius: var(--radius);
  box-shadow: var(--shadow);
  overflow: hidden;
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.penghargaan-card:hover {
  transform: translateY(-8px);
  box-shadow: 0 12px 24px rgba(0,0,0,0.15);
}

.penghargaan-img {
  width: 100%;
  height: 220px;
  object-fit: cover;
  border-bottom: 3px solid var(--primary);
}

.penghargaan-card h3 {
  color: var(--dark);
  font-size: 1.2rem;
  font-weight: 700;
  margin: 20px 15px 10px;
  text-align: center;
  line-height: 1.4;
}

.penghargaan-card p {
  color: var(--gray);
  font-size: 0.95rem;
  line-height: 1.7;
  margin: 0 20px 25px;
  text-align: justify;
}

/* Efek hover tambahan */
.penghargaan-card:hover h3 {
  color: var(--primary);
  transition: color 0.3s ease;
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
