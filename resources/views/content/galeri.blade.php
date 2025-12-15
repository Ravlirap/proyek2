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
        </div>
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

  <!-- Gallery Grid Section -->
<section class="gallery-section">
  <div class="container">
    <h2 class="gallery-title">Dokumentasi <span class="highlight">Kegiatan</span></h2>

    @php
      $galeri = [
        [
          'gambar' => 'img/galeri6.jpg',
          'judul' => 'Pelatihan Bahasa Jepang Dasar',
          'tanggal' => '10 Oktober 2025',
          'deskripsi' => 'Peserta mempelajari dasar percakapan dan tata bahasa Jepang.'
        ],
        [
          'gambar' => 'img/galeri5.jpg',
          'judul' => 'Kunjungan Budaya Jepang',
          'tanggal' => '12 Oktober 2025',
          'deskripsi' => 'Kegiatan kunjungan budaya dan praktik etika kerja Jepang.'
        ],
        [
          'gambar' => 'img/galeri6.jpg',
          'judul' => 'Pelatihan Bahasa Tingkat Lanjut',
          'tanggal' => '16 Oktober 2025',
          'deskripsi' => 'Sesi pelatihan lanjutan untuk meningkatkan kemampuan komunikasi.'
        ],
        [
          'gambar' => 'img/galeri4.jpg',
          'judul' => 'Ujian Sertifikasi JLPT',
          'tanggal' => '18 Oktober 2025',
          'deskripsi' => 'Peserta mengikuti simulasi ujian JLPT untuk persiapan keberangkatan.'
        ],
        [
          'gambar' => 'img/galeri1.jpg',
          'judul' => 'Pelepasan Peserta ke Jepang',
          'tanggal' => '19 Oktober 2025',
          'deskripsi' => 'Acara pelepasan peserta yang telah lolos seleksi ke Jepang.'
        ],
      ];
    @endphp

    <div class="gallery-grid">
      @foreach ($galeri as $item)
        <div class="gallery-item"
             data-title="{{ $item['judul'] }}"
             data-date="{{ $item['tanggal'] }}"
             data-description="{{ $item['deskripsi'] }}">
          <img src="{{ asset($item['gambar']) }}" alt="{{ $item['judul'] }}" loading="lazy">
          <div class="gallery-overlay">
            <span class="gallery-caption">{{ $item['judul'] }}</span>
            <button class="detail-btn">Detail Foto</button>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</section>


  <!-- Modal Detail Foto -->
  <div id="photoModal" class="modal">
    <div class="modal-content">
      <span class="close-btn">&times;</span>
      <img id="modalImage" src="" alt="">
      <h3 id="modalTitle"></h3>
      <p class="modal-date" id="modalDate"></p>
      <p id="modalDescription"></p>
    </div>
  </div>

</div>

<style>
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

/* Gallery Section */
/* ============================
   GALERI SECTION
============================ */
.gallery-section {
  padding: 70px 20px;
  background: linear-gradient(to bottom, #eaf3ff, #f6f9ff);
  border-radius: 20px;
}

.gallery-title {
  text-align: center;
  font-size: 2rem;
  color: #0050d8;
  font-weight: 700;
  margin-bottom: 45px;
}

/* GRID */
.gallery-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
  gap: 25px;
}

/* CARD */
.gallery-item {
  position: relative;
  overflow: hidden;
  border-radius: 14px;
  background: #fff;
  box-shadow: 0 12px 28px rgba(0, 75, 200, 0.12);
  transition: 0.35s ease;
}

.gallery-item:hover {
  transform: translateY(-8px);
  box-shadow: 0 18px 40px rgba(0, 75, 200, 0.22);
}

/* IMAGE */
.gallery-item img {
  width: 100%;
  height: 260px;
  object-fit: cover;
  transition: transform 0.35s ease;
}

.gallery-item:hover img {
  transform: scale(1.08);
}

/* OVERLAY */
.gallery-overlay {
  position: absolute;
  inset: 0;
  background: linear-gradient(to top, rgba(0, 70, 180, 0.6), transparent);
  opacity: 0;
  transition: opacity 0.35s ease;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: flex-end;
  padding: 18px;
  gap: 10px;
}

.gallery-item:hover .gallery-overlay {
  opacity: 1;
}

.gallery-caption {
  color: #fff;
  font-size: 1.05rem;
  font-weight: 600;
  text-shadow: 0 2px 6px rgba(0,0,0,0.3);
}

/* BUTTON */
.detail-btn {
  background: linear-gradient(135deg, #007bff, #005ae0);
  border: none;
  color: #fff;
  padding: 9px 18px;
  border-radius: 8px;
  cursor: pointer;
  font-size: 0.9rem;
  font-weight: 600;
  transition: 0.25s ease;
  box-shadow: 0 4px 12px rgba(0, 80, 200, 0.3);
}

.detail-btn:hover {
  transform: translateY(-3px);
  background: linear-gradient(135deg, #005fe0, #0045c5);
  box-shadow: 0 8px 20px rgba(0, 80, 200, 0.35);
}

.modal {
  display: none;
  position: fixed;
  z-index: 9999;
  inset: 0;
  background: rgba(0, 40, 110, 0.55);
  justify-content: center;
  align-items: center;
  padding: 25px;
  animation: fadeInBg 0.3s ease;
}

@keyframes fadeInBg {
  from { opacity: 0; }
  to   { opacity: 1; }
}

.modal-content {
  background: #ffffff;
  border-radius: 15px;
  padding: 20px;
  width: 90%;
  max-width: 650px;
  max-height: 85vh;
  overflow-y: auto;
  animation: fadeIn 0.35s ease;
  box-shadow: 0 18px 45px rgba(0, 70, 200, 0.25);
}

.modal-content img {
  width: 100%;
  max-height: 420px;
  object-fit: cover;
  border-radius: 12px;
  margin-bottom: 15px;
  box-shadow: 0 4px 15px rgba(0,0,0,0.2);
}

.close-btn {
  position: absolute;
  top: 22px;
  right: 28px;
  color: #fff;
  font-size: 2rem;
  cursor: pointer;
  z-index: 1001;
  transition: 0.25s ease;
}

.close-btn:hover {
  transform: scale(1.15);
}

.modal-date {
  color: #5b6c85;
  font-size: 0.9rem;
  margin-top: -5px;
  margin-bottom: 12px;
  font-weight: 500;
}

/* ANIMATION */
@keyframes fadeIn {
  from { opacity: 0; transform: scale(0.92); }
  to   { opacity: 1; transform: scale(1); }
}

/* RESPONSIVE */
@media (max-width: 768px) {
  .gallery-grid {
    grid-template-columns: 1fr;
  }

  .gallery-item img {
    height: 220px;
  }
}

</style>

<script>
document.addEventListener('DOMContentLoaded', () => {
  const modal = document.getElementById('photoModal');
  const modalImage = document.getElementById('modalImage');
  const modalTitle = document.getElementById('modalTitle');
  const modalDate = document.getElementById('modalDate');
  const modalDescription = document.getElementById('modalDescription');
  const closeBtn = document.querySelector('.close-btn');

  document.querySelectorAll('.detail-btn').forEach(button => {
    button.addEventListener('click', e => {
      const item = e.target.closest('.gallery-item');
      modalImage.src = item.querySelector('img').src;
      modalTitle.textContent = item.dataset.title;
      modalDate.textContent = "📅 " + item.dataset.date;
      modalDescription.textContent = item.dataset.description;
      modal.style.display = 'flex';
    });
  });

  closeBtn.onclick = () => modal.style.display = 'none';
  modal.onclick = e => { if (e.target === modal) modal.style.display = 'none'; };
});
</script>

@endsection
