@extends('layouts.main')
@section('content')
<div class="program-page">
    <!-- Hero Section -->
  <section class="hero-section">
    <div class="container">
        <div class="hero-content">  
            <h1 class="hero-title">
                Program Pelatihan
                <span class="highlight">LPK Seikou</span>
            </h1>
            
            <p class="hero-description">
                Pilih jalur karir impian Anda di Jepang melalui program pelatihan berkualitas dari LPK Seikou. 
                Kami menyediakan berbagai program yang disesuaikan dengan kebutuhan dan tujuan karir Anda.
            </p>
            
            <div class="hero-features">
                <div class="feature-item">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/>
                        <polyline points="22 4 12 14.01 9 11.01"/>
                    </svg>
                    <span>Instruktur Berpengalaman</span>
                </div>
                <div class="feature-item">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/>
                        <polyline points="22 4 12 14.01 9 11.01"/>
                    </svg>
                    <span>Sertifikat Resmi</span>
                </div>
                <div class="feature-item">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/>
                        <polyline points="22 4 12 14.01 9 11.01"/>
                    </svg>
                    <span>Dukungan Penempatan Kerja</span>
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

    <!-- Programs Grid Section -->
    <section class="programs-section">
        <div class="container">
            <div class="programs-grid">
                <!-- Program Card 1: Magang Manufaktur -->
                <article class="program-card">
                    <div class="program-image">
                        <img src="{{ asset('img/lpk2.jpg') }}" alt="Program Magang Manufaktur" loading="lazy">
                        <div class="program-overlay">
                            <div class="program-type">Magang (IM Japan)</div>
                        </div>
                    </div>
                    <div class="program-content">
                        <h3>Program Magang Manufaktur</h3>
                        <ul class="program-features">
                            <li>Durasi program 3-5 tahun</li>
                            <li>Sertifikasi skill level 2-3</li>
                            <li>Penempatan di perusahaan manufaktur</li>
                        </ul>
                        <div class="program-footer">
                            <div class="program-stats">
                                <span class="stat"><i class="fas fa-clock"></i> 3-5 tahun</span>
                                <span class="stat"><i class="fas fa-rupiah-sign"></i> Rp. 3.000.000-10.000.000/bulan</span>
                            </div>
                            <a href="{{ route('detail_program.magang-manufaktur') }}" class="btn-detail">
                                Lihat Detail <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </article>

                <!-- Program Card 2: SSW Kaigo -->
                <article class="program-card">
                    <div class="program-image">
                        <img src="{{ asset('img/lpk3.jpg') }}" alt="Program SSW Kaigo" loading="lazy">
                        <div class="program-overlay">
                            <div class="program-type">SSW</div>
                        </div>
                    </div>
                    <div class="program-content">
                        <h3>Specified Skilled Worker - Kaigo</h3>
                        <ul class="program-features">
                            <li>Perawat lansia profesional</li>
                            <li>Kontrak kerja 5 tahun</li>
                            <li>Persiapan ujian JFT-Basic</li>
                        </ul>
                        <div class="program-footer">
                            <div class="program-stats">
                                <span class="stat"><i class="fas fa-clock"></i> 5 tahun</span>
                                <span class="stat"><i class="fas fa-rupiah-sign"></i> Rp. 4.000.000-15.000.000/bulan</span>
                            </div>
                            <a href="{{ route('detail_program.ssw-kaigo') }}" class="btn-detail">
                                Lihat Detail <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </article>

                <!-- Program Card 3: Magang Konstruksi -->
                <article class="program-card">
                    <div class="program-image">
                        <img src="{{ asset('img/lpk4.jpg') }}" alt="Program Magang Konstruksi" loading="lazy">
                        <div class="program-overlay">
                            <div class="program-type">Magang (IM Japan)</div>
                        </div>
                    </div>
                    <div class="program-content">
                        <h3>Program Magang Konstruksi</h3>
                        <ul class="program-features">
                            <li>Spesialisasi bidang konstruksi</li>
                            <li>Pelatihan keselamatan kerja</li>
                            <li>Sertifikasi internasional</li>
                        </ul>
                        <div class="program-footer">
                            <div class="program-stats">
                                <span class="stat"><i class="fas fa-clock"></i> 3-5 tahun</span>
                                <span class="stat"><i class="fas fa-rupiah-sign"></i> Rp. 3.000.000-15.000.000/bulan</span>
                            </div>
                            <a href="{{ route('detail_program.magang-konstruksi') }}" class="btn-detail">
                                Lihat Detail <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </article>

                <!-- Program Card 4: SSW Food Service -->
                <article class="program-card">
                    <div class="program-image">
                        <img src="{{ asset('img/lpk5.jpg') }}" alt="Program SSW Food Service" loading="lazy">
                        <div class="program-overlay">
                            <div class="program-type">SSW</div>
                        </div>
                    </div>
                    <div class="program-content">
                        <h3>SSW - Food Service</h3>
                        <ul class="program-features">
                            <li>Pelatihan food handling</li>
                            <li>Penempatan di restoran Jepang</li>
                            <li>Pembelajaran budaya kuliner</li>
                        </ul>
                        <div class="program-footer">
                            <div class="program-stats">
                                <span class="stat"><i class="fas fa-clock"></i> 5 tahun</span>
                                <span class="stat"><i class="fas fa-rupiah-sign"></i> Rp. 3.000.000-10.000.000/bulan</span>
                            </div>
                            <a href="{{ route('detail_program.ssw-food-service') }}" class="btn-detail">
                                Lihat Detail <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </article>

                <!-- Program Card 5: Bahasa Jepang N5-N4 -->
                <article class="program-card">
                    <div class="program-image">
                        <img src="{{ asset('img/lpk6.jpg') }}" alt="Kursus Bahasa Jepang N5-N4" loading="lazy">
                        <div class="program-overlay">
                            <div class="program-type">Kursus Bahasa</div>
                        </div>
                    </div>
                    <div class="program-content">
                        <h3>Kursus Bahasa Jepang N5-N4</h3>
                        <ul class="program-features">
                            <li>Dasar bahasa Jepang</li>
                            <li>Persiapan JLPT N5 dan N4</li>
                            <li>Kelas online/offline</li>
                        </ul>
                        <div class="program-footer">
                            <div class="program-stats">
                                <span class="stat"><i class="fas fa-clock"></i> 6 bulan</span>
                                <span class="stat"><i class="fas fa-rupiah-sign"></i> Rp. 3.000.000-15.000.000/bulan</span>
                            </div>
                            <a href="{{ route('detail_program.bahasa-n5-n4') }}" class="btn-detail">
                                Lihat Detail <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </article>

                <!-- Program Card 6: Bahasa Jepang N3-N2 -->
                <article class="program-card">
                    <div class="program-image">
                        <img src="{{ asset('img/lpk7.jpg') }}" alt="Kursus Bahasa Jepang N3-N2" loading="lazy">
                        <div class="program-overlay">
                            <div class="program-type">Kursus Bahasa</div>
                        </div>
                    </div>
                    <div class="program-content">
                        <h3>Kursus Bahasa Jepang N3-N2</h3>
                        <ul class="program-features">
                            <li>Bahasa Jepang tingkat lanjut</li>
                            <li>Persiapan JLPT N3 dan N2</li>
                            <li>Pembelajaran budaya bisnis</li>
                        </ul>
                        <div class="program-footer">
                            <div class="program-stats">
                                <span class="stat"><i class="fas fa-clock"></i> 8 bulan</span>
                                <span class="stat"><i class="fas fa-rupiah-sign"></i> Rp. 4.000.000-16.000.000/bulan</span>
                            </div>
                            <a href="{{ route('detail_program.bahasa-n3-n2') }}" class="btn-detail">
                                Lihat Detail <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="container">
            <div class="cta-content">
                <h2>Siap Memulai Karir di Jepang?</h2>
                <p>Konsultasikan rencana karir Anda dengan tim kami dan dapatkan panduan lengkap secara gratis.</p>
                <a href="{{ route('pendaftaran') }}" class="btn btn-primary">Daftar Sekarang</a>
            </div>
        </div>
    </section>

    <section class="chart-section">
    <h2 class="chart-title"><span class="highlight">Persentase</span> Jenis Kerja</h2>

    <div class="chart-container">
      <div class="chart-left">
        <div style="width: 300px; height: 300px; margin: auto;">
  <canvas id="jobChart"></canvas>
</div>

        <p class="chart-note">Data per Juni 2025</p>
      </div>

      <div class="chart-right">
        <ul class="chart-legend">
          <li><span class="color-box" style="background:#c21807"></span> 27% Proses Mesin</li>
          <li><span class="color-box" style="background:#e65100"></span> 21% Industri Makanan</li>
          <li><span class="color-box" style="background:#f57c00"></span> 13% Konstruksi</li>
          <li><span class="color-box" style="background:#fbc02d"></span> 10% Pertanian</li>
          <li><span class="color-box" style="background:#fdd835"></span> 8% Produk Plastik</li>
          <li><span class="color-box" style="background:#ffee58"></span> 6% Painting</li>
          <li><span class="color-box" style="background:#7cb342"></span> 5% Building Maintenance</li>
          <li><span class="color-box" style="background:#9e9d24"></span> 3% Pengelasan</li>
          <li><span class="color-box" style="background:#bdbdbd"></span> 3% Packing</li>
          <li><span class="color-box" style="background:#cfd8dc"></span> 3% Lain-lain</li>
        </ul>
      </div>
    </div>
  </section>
</div>

{{-- Chart.js --}}
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
  const ctx = document.getElementById('jobChart').getContext('2d');
  new Chart(ctx, {
    type: 'doughnut',
    data: {
      labels: [
        'Proses Mesin', 'Industri Makanan', 'Konstruksi', 'Pertanian',
        'Produk Plastik', 'Painting', 'Building Maintenance',
        'Pengelasan', 'Packing', 'Lain-lain'
      ],
      datasets: [{
        data: [27, 21, 13, 10, 8, 6, 5, 3, 3, 3],
        backgroundColor: [
          '#c21807','#e65100','#f57c00','#fbc02d','#fdd835',
          '#ffee58','#7cb342','#9e9d24','#bdbdbd','#cfd8dc'
        ],
        borderWidth: 2,
        borderColor: '#fff',
        hoverOffset: 10
      }]
    },
    options: {
      plugins: {
        legend: { display: false },
        tooltip: {
          backgroundColor: '#333',
          titleFont: { size: 14, weight: 'bold' },
          bodyFont: { size: 13 },
          callbacks: {
            label: function(context) {
              return `${context.label}: ${context.formattedValue}%`;
            }
          }
        }
      },
      cutout: '70%'
    }
  });
</script>
</div>

<style>
    /* Base Styles */
    /* Base Styles */
    :root {
        --primary: #c9003c;
        --secondary: #2c3e50;
        --dark: #1a1a1a;
        --gray: #666;
        --light-bg: #f8f9fa;
        --radius: 10px;
        --shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    body {
        font-family: 'Poppins', Roboto, system-ui, -apple-system, sans-serif;
        color: var(--dark);
        overflow-x: hidden;
    }

    .program-page {
        width: 100%;
    }

    /* Hero Section */
    .hero-section {
        position: relative;
        background: linear-gradient(135deg, #6671ea 0%, #273d9c 100%);
        padding: 80px 20px;
        margin-bottom: 20px;
        margin-top: 84px;
        overflow: hidden;
        box-shadow: 0 20px 60px rgba(102, 126, 234, 0.3);
        width: 100vw;
        position: relative;
        left: 50%;
        right: 50%;
        margin-left: -50vw;
        margin-right: -50vw;
    }

    .hero-section::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: 
            radial-gradient(circle at 20% 50%, rgba(255, 255, 255, 0.1) 0%, transparent 50%),
            radial-gradient(circle at 80% 80%, rgba(255, 255, 255, 0.1) 0%, transparent 50%);
        pointer-events: none;
    }

    .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 20px;
        position: relative;
        z-index: 1;
    }

    .hero-content {
        position: relative;
        max-width: 700px;
        margin: 0;
        animation: fadeInUp 1s ease-out;
        z-index: 2;
    }

    .hero-title {
        font-size: 3rem;
        color: white;
        margin-bottom: 24px;
        font-weight: 800;
        line-height: 1.2;
        letter-spacing: -0.5px;
    }

    .highlight {
        display: block;
        background: linear-gradient(90deg, #fff 0%, #f8bbd0 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    .hero-description {
        font-size: 1.125rem;
        color: rgba(255, 255, 255, 0.9);
        line-height: 1.8;
        margin-bottom: 32px;
    }

    .hero-features {
        display: flex;
        flex-wrap: wrap;
        gap: 24px;
    }

    .feature-item {
        display: flex;
        align-items: center;
        gap: 8px;
        color: white;
        font-size: 0.9rem;
        font-weight: 500;
    }

    .feature-item svg {
        flex-shrink: 0;
        opacity: 0.9;
    }

    .hero-decoration {
        position: absolute;
        top: 0;
        right: 0;
        width: 50%;
        height: 100%;
        pointer-events: none;
    }

    .circle {
        position: absolute;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.1);
        backdrop-filter: blur(5px);
    }

    .circle-1 {
        width: 300px;
        height: 300px;
        top: -50px;
        right: -50px;
        animation: float 6s ease-in-out infinite;
    }

    .circle-2 {
        width: 200px;
        height: 200px;
        top: 50%;
        right: 10%;
        animation: float 8s ease-in-out infinite;
        animation-delay: 1s;
    }

    .circle-3 {
        width: 150px;
        height: 150px;
        bottom: -30px;
        right: 30%;
        animation: float 7s ease-in-out infinite;
        animation-delay: 2s;
    }

    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes float {
        0%, 100% {
            transform: translateY(0) rotate(0deg);
        }
        50% {
            transform: translateY(-20px) rotate(5deg);
        }
    }

    /* Programs Grid */
    .programs-section {
        padding: 40px 0;
    }

    .programs-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 30px;
        margin-top: 30px;
    }

    .program-card {
        background: white;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        transition: transform 0.2s ease, box-shadow 0.2s ease;
    }

    .program-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 20px 30px -5px rgba(0, 0, 0, 0.1);
    }

    .program-image {
        position: relative;
        height: 200px;
        overflow: hidden;
    }

    .program-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.3s ease;
    }

    .program-card:hover .program-image img {
        transform: scale(1.05);
    }

    .program-overlay {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        padding: 15px;
        background: linear-gradient(to bottom, rgba(0,0,0,0.4), transparent);
    }

    .program-type {
        display: inline-block;
        padding: 6px 12px;
        background: var(--primary);
        color: white;
        border-radius: 20px;
        font-size: 0.85rem;
        font-weight: 500;
    }

    .program-content {
        padding: 20px;
    }

    .program-content h3 {
        margin: 0 0 15px;
        font-size: 1.25rem;
        color: var(--dark);
        font-weight: 600;
    }

    .program-features {
        list-style: none;
        padding: 0;
        margin: 0 0 20px;
    }

    .program-features li {
        position: relative;
        padding-left: 20px;
        margin-bottom: 8px;
        color: var(--gray);
        font-size: 0.95rem;
    }

    .program-features li::before {
        content: "•";
        color: var(--primary);
        position: absolute;
        left: 0;
    }

    .program-footer {
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-wrap: wrap;
        gap: 15px;
        padding-top: 15px;
        border-top: 1px solid #edf2f7;
    }

    .program-stats {
        display: flex;
        flex-wrap: wrap;
        gap: 15px;
    }

    .stat {
        color: var(--gray);
        font-size: 0.9rem;
        white-space: nowrap;
    }

    .stat i {
        color: var(--primary);
        margin-right: 4px;
    }

    .btn-detail {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        padding: 8px 16px;
        background: transparent;
        color: var(--primary);
        border: 2px solid var(--primary);
        border-radius: 20px;
        font-weight: 500;
        text-decoration: none;
        transition: all 0.2s ease;
        white-space: nowrap;
    }

    .btn-detail:hover {
        background: var(--primary);
        color: white;
    }

    /* CTA Section */
    .cta-section {
        background: linear-gradient(to right, var(--primary), #ff4d6d);
        color: white;
        padding: 60px 20px;
        margin-top: 60px;
        text-align: center;
        width: 100vw;
        position: relative;
        left: 50%;
        right: 50%;
        margin-left: -50vw;
        margin-right: -50vw;
    }

    .cta-content {
        width: 100%;
        max-width: 800px;
        margin: 0 auto;
        padding: 0 20px;
    }

    .cta-content h2 {
        font-size: 2.5rem;
        margin-bottom: 20px;
        line-height: 1.3;
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

    /* Responsive Tablet */
    @media (max-width: 1024px) {
        .hero-title {
            font-size: 2.5rem;
        }
        
        .programs-grid {
            grid-template-columns: repeat(2, 1fr);
            gap: 25px;
        }
        
        .circle-3 {
            display: none;
        }
    }

    /* Responsive Mobile */
    @media (max-width: 768px) {
        .hero-section {
            padding: 60px 20px;
            margin-bottom: 20px;
            box-shadow: 0 10px 30px rgba(102, 126, 234, 0.2);
        }

        .hero-title {
            font-size: 2rem;
            margin-bottom: 20px;
        }

        .hero-description {
            font-size: 1rem;
            margin-bottom: 24px;
        }

        .hero-features {
            flex-direction: column;
            gap: 16px;
        }

        .hero-decoration {
            opacity: 0.3;
        }

        .circle-1 {
            width: 200px;
            height: 200px;
        }

        .circle-2 {
            width: 150px;
            height: 150px;
        }

        .circle-3 {
            display: none;
        }

        .programs-section {
            padding: 30px 0;
        }

        .programs-grid {
            grid-template-columns: 1fr;
            gap: 20px;
        }

        .program-image {
            height: 180px;
        }

        .program-content {
            padding: 15px;
        }

        .program-content h3 {
            font-size: 1.1rem;
        }

        .program-features li {
            font-size: 0.9rem;
        }

        .program-footer {
            flex-direction: column;
            align-items: flex-start;
            gap: 12px;
        }

        .program-stats {
            width: 100%;
            flex-direction: column;
            gap: 8px;
        }

        .btn-detail {
            width: 100%;
            justify-content: center;
        }

        .cta-section {
            padding: 40px 20px;
            margin-top: 40px;
        }

        .cta-content h2 {
            font-size: 1.75rem;
            margin-bottom: 16px;
        }

        .cta-content p {
            font-size: 1rem;
            margin-bottom: 20px;
        }

        .btn-primary {
            width: 100%;
            max-width: 300px;
        }
    }

    /* Responsive Small Mobile */
    @media (max-width: 480px) {
        .hero-section {
            padding: 40px 15px;
        }

        .hero-title {
            font-size: 1.75rem;
        }

        .hero-description {
            font-size: 0.95rem;
        }

        .feature-item {
            font-size: 0.85rem;
        }

        .container {
            padding: 0 15px;
        }

        .programs-grid {
            gap: 15px;
        }

        .program-image {
            height: 160px;
        }

        .cta-content h2 {
            font-size: 1.5rem;
        }

        .cta-content p {
            font-size: 0.95rem;
        }
    }

    .chart-section {
  background: #f3f5f6;
  padding: 40px 30px;
  border-radius: 20px;
  box-shadow: 0 10px 30px rgba(0,0,0,0.05);
  margin-top: 100px;
}

.chart-title {
  text-align: center;
  font-size: 2rem;
  color: #333;
  margin-bottom: 40px;
}

.chart-title .highlight {
  color: #d32f2f;
}

.chart-container {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  align-items: center;
  gap: 50px;
}

.chart-left {
  text-align: center;
}

.chart-note {
  color: #555;
  font-size: 0.9rem;
  margin-top: 12px;
}

.chart-right {
  display: flex;
  flex-direction: column;
  align-items: flex-start;
}

.chart-legend {
  list-style: none;
  padding: 0;
  margin: 0;
  display: grid;
  grid-template-columns: repeat(2, minmax(220px, 1fr));
  gap: 12px 30px;
}

.chart-legend li {
  background: #fff;
  padding: 10px 14px;
  border-radius: 10px;
  font-size: 1rem;
  color: #333;
  font-weight: 500;
  display: flex;
  align-items: center;
  gap: 10px;
  box-shadow: 0 3px 10px rgba(0,0,0,0.05);
}

.color-box {
  width: 18px;
  height: 18px;
  border-radius: 4px;
  display: inline-block;
}

@media (max-width: 900px) {
  .chart-container {
    flex-direction: column;
    text-align: center;
  }
  .chart-legend {
    grid-template-columns: 1fr;
  }
}
</style>
@endsection
