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
          <div class="gallery-item"
               data-title="Kegiatan Pelatihan {{ $i }}"
               data-date="19 Oktober 2025"
               data-description="Deskripsi singkat mengenai kegiatan pelatihan ke-{{ $i }} yang dilakukan di LPK Seikou. Peserta mengikuti sesi pelatihan bahasa dan budaya Jepang.">

            <img src="{{ asset('img/galeri' . $i . '.jpg') }}" alt="Galeri LPK Seikou {{ $i }}" loading="lazy">
            <div class="gallery-overlay">
              <span class="gallery-caption">Kegiatan {{ $i }}</span>
              <button class="detail-btn">Detail Foto</button>
            </div>
          </div>
        @endfor
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
  background: linear-gradient(to top, rgba(0,0,0,0.6), transparent);
  opacity: 0;
  transition: opacity 0.3s ease;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: flex-end;
  padding: 15px;
  gap: 10px;
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

.detail-btn {
  background: var(--primary);
  border: none;
  color: #fff;
  padding: 8px 14px;
  border-radius: 6px;
  cursor: pointer;
  font-size: 0.9rem;
  transition: 0.2s;
}

.detail-btn:hover {
  background: #a10032;
}

/* Modal */
.modal {
  display: none;
  position: fixed;
  z-index: 999;
  inset: 0;
  background: rgba(0,0,0,0.6);
  justify-content: center;
  align-items: center;
  padding: 10px;
}


.modal-content {
  background: white;
  border-radius: 10px;
  padding: 20px;
  max-width: 800px;
  width: 90%;
  max-height: 85vh;
  overflow-y: auto;
  box-shadow: 0 10px 30px rgba(0,0,0,0.3);
  text-align: center;
  animation: fadeIn 0.3s ease;
}


.modal-content img {
  width: 100%;
  height: auto;
  border-radius: 10px;
  margin-bottom: 15px;
}

.close-btn {
  position: absolute;
  top: 15px;
  right: 20px;   
  color: #333;
  font-size: 1.8rem;
  cursor: pointer;
  z-index: 1001;
}


.modal-date {
  color: var(--gray);
  font-size: 0.9rem;
  margin-top: -8px;
  margin-bottom: 10px;
}

@keyframes fadeIn {
  from { opacity: 0; transform: scale(0.9); }
  to { opacity: 1; transform: scale(1); }
}

/* Responsive */
@media (max-width: 768px) {
  .hero-title { font-size: 2rem; }
  .gallery-grid { grid-template-columns: 1fr; }
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
