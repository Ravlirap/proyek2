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

  <!-- Fasilitas Section -->
  <section class="fasilitas-section">
    <div class="container">
      <h2 class="section-title"><i class="fas fa-building"></i> Fasilitas Kami</h2>
      <div class="fasilitas-grid">
        <div class="fasilitas-card">
          <i class="fas fa-chalkboard-teacher fasilitas-icon"></i>
          <h3>Kelas Interaktif</h3>
          <p>Dilengkapi dengan multimedia dan metode pengajaran modern.</p>
        </div>
        <div class="fasilitas-card">
          <i class="fas fa-language fasilitas-icon"></i>
          <h3>Lab Bahasa Jepang</h3>
          <p>Ruang praktik khusus untuk meningkatkan kemampuan komunikasi.</p>
        </div>
        <div class="fasilitas-card">
          <i class="fas fa-dumbbell fasilitas-icon"></i>
          <h3>Ruang Pelatihan Fisik</h3>
          <p>Mendukung kebugaran dan ketahanan peserta pelatihan.</p>
        </div>
        <div class="fasilitas-card">
          <i class="fas fa-bed fasilitas-icon"></i>
          <h3>Asrama Nyaman</h3>
          <p>Lingkungan yang kondusif untuk belajar dan beristirahat.</p>
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
</style>
@endsection
