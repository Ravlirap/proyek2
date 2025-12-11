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
        <div class="circle circle-3"></div>

        <span class="sakura" style="left: 12%; animation-delay: 0s;"></span>
        <span class="sakura" style="left: 28%; animation-delay: 1.2s;"></span>
        <span class="sakura" style="left: 45%; animation-delay: 2.4s;"></span>
        <span class="sakura" style="left: 60%; animation-delay: 0.8s;"></span>
        <span class="sakura" style="left: 78%; animation-delay: 1.8s;"></span>
      </div>
    </div>
  </section>

  <!-- Fasilitas Section -->
  <section class="fasilitas-section">
    <div class="container">
      <h2 class="section-title"><i class="fas fa-building"></i> Fasilitas Kami</h2>
      <div class="fasilitas-grid">

        <div class="fasilitas-card">
          <img src="{{ asset('img/rk1.jpeg') }}" alt="Kelas Bahasa Jepang">
          <div class="fasilitas-info">
            <h3>Kelas Bahasa Jepang</h3>
            <p>Ruang belajar yang nyaman dan dilengkapi alat bantu audio-visual untuk mendukung pembelajaran bahasa Jepang secara interaktif.</p>
          </div>
        </div>

        <div class="fasilitas-card">
          <img src="{{ asset('img/asrama.jpeg') }}" alt="Asrama Peserta">
          <div class="fasilitas-info">
            <h3>Asrama Peserta</h3>
            <p>Fasilitas tempat tinggal bersih dan tertata dengan baik agar peserta dapat belajar dengan nyaman dan fokus.</p>
          </div>
        </div>

        <div class="fasilitas-card">
          <img src="{{ asset('img/lab.jpeg') }}" alt="Laboratorium Komputer">
          <div class="fasilitas-info">
            <h3>Laboratorium Komputer</h3>
            <p>Perangkat komputer modern untuk pembelajaran berbasis teknologi dan simulasi pelatihan kerja.</p>
          </div>
        </div>

        <div class="fasilitas-card">
          <img src="{{ asset('img/rkb.jpeg') }}" alt="Ruang Budaya Jepang">
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
