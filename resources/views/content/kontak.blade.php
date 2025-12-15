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

  <!-- Info Kontak -->
  <section class="contact-info">
    <div class="info-grid">
        <div class="info-item">
            <div class="icon-box">
                <i class="fa-solid fa-phone"></i>
            </div>
            <h3>Telepon</h3>
            <p>+62 812-3456-7890</p>
        </div>
        <div class="info-item">
            <div class="icon-box">
                <i class="fa-solid fa-location-dot"></i>
            </div>
            <h3>Alamat</h3>
            <p>Jl. Sakura No. 21, Bandung</p>
        </div>
        <div class="info-item">
            <div class="icon-box">
                <i class="fa-solid fa-envelope"></i>
            </div>
            <h3>Email</h3>
            <p>contact@example.com</p>
        </div>
        <div class="info-item">
            <div class="icon-box">
                <i class="fa-solid fa-clock"></i>
            </div>
            <h3>Jam Operasional</h3>
            <p>Senin–Jumat, 08:00–17:00</p>
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
    <div class="map-box">
    <iframe
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.2077464542017!2d108.32075417430087!3d-6.367155162284096!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6eb9285148a00f%3A0xbec1e32de6e9a5a7!2sLPK%20SEIKOU%20JAPAN!5e0!3m2!1sid!2sid!4v1761640551567!5m2!1sid!2sid"
      width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy">
    </iframe>
    </div>
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

    /* Contact Info */
    .contact-info {
        padding: 80px 20px;
        background: transparent;
    }

    .info-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(230px, 1fr));
        gap: 35px;
        padding: 20px 0;
    }

    .info-item {
        background: rgba(0, 110, 255, 0.08); /* biru sangat muda */
        padding: 35px 25px;
        border-radius: 20px;
        text-align: center;
        box-shadow: 0 12px 28px rgba(0, 100, 255, 0.12); /* shadow biru lembut */
        border: 1px solid rgba(0, 120, 255, 0.25);
        transition: .3s ease;
    }

    .info-item:hover {
        transform: translateY(-10px);
        box-shadow: 0 18px 40px rgba(0, 100, 255, 0.25);
        background: rgba(0, 110, 255, 0.14);
    }

    .icon-box {
        width: 75px;
        height: 75px;
        margin: 0 auto 18px;
        background: linear-gradient(135deg, #006CFF22, #00A8FF33);
        border-radius: 50%;
        display: flex;
        justify-content: center;
        align-items: center;
        backdrop-filter: blur(3px);
        transition: .3s ease;
    }

    .icon-box i {
        font-size: 2.2rem;
        color: #005BFF;
        transition: .3s ease;
    }

    .info-item:hover .icon-box {
        transform: scale(1.12);
        background: linear-gradient(135deg, #005CFF44, #00A8FF55);
    }

    .info-item:hover .icon-box i {
        color: #003BB5;
        transform: scale(1.15);
    }

    .info-item h3 {
        margin-bottom: 8px;
        font-size: 1.18rem;
        font-weight: 700;
        color: #003B7A;
    }

    .info-item p {
        color: #3d4b66;
        font-size: 0.95rem;
        line-height: 1.6;
    }

    /* Form */
    .contact-form {
        padding: 80px 20px;
    }

    .section-title {
        text-align: center;
        font-size: 2rem;
        color: #0d2a5c;
        margin-bottom: 40px;
        font-weight: 700;
    }

    .form-wrapper {
        max-width: 620px;
        margin: 0 auto;
        display: flex;
        flex-direction: column;
        gap: 0;
        background: rgba(0, 119, 255, 0.05);
        padding: 40px 35px;
        border-radius: 22px;
        box-shadow: 0 18px 45px rgba(0, 90, 255, 0.08);
        backdrop-filter: blur(4px);
    }

    .form-group {
        margin-bottom: 22px;
    }

    .form-group input,
    .form-group textarea {
        width: 100%;
        padding: 15px 16px;
        border-radius: 14px;
        border: 1px solid rgba(0, 120, 255, 0.35);
        background: #fff;
        font-size: 1rem;
        color: #2b3d55;
        transition: .25s ease;
        outline: none;
        box-shadow: 0 3px 10px rgba(0, 80, 255, 0.05);
    }

    .form-group input:focus,
    .form-group textarea:focus {
        border-color: #006cff;
        box-shadow: 0 0 0 3px rgba(0, 120, 255, 0.25);
        transform: translateY(-2px);
    }

    .form-group input::placeholder,
    .form-group textarea::placeholder {
        color: #98a4b8;
    }

    .submit-btn {
    background: linear-gradient(135deg, #0075ff, #0053e6);
    color: white;
    border: none;
    padding: 14px 28px;
    border-radius: 14px;
    cursor: pointer;
    font-size: 1.05rem;
    font-weight: 600;
    transition: 0.3s;
    box-shadow: 0 8px 25px rgba(0, 100, 255, 0.25);

    margin: 0 auto;
    display: block;
    }

    .submit-btn:hover {
        background: linear-gradient(135deg, #005fee, #0042c7);
        transform: translateY(-3px);
        box-shadow: 0 15px 35px rgba(0, 100, 255, 0.35);
    }

    /* Map */
    /* MAP SECTION */
.map-section {
    margin-top: 50px;
    padding: 20px 0;
    display: flex;
    justify-content: center;
}

.map-box {
    width: 100%;
    max-width: 900px;
    border-radius: 18px;
    overflow: hidden;
    box-shadow: 0 15px 35px rgba(0, 90, 255, 0.15);
    border: 3px solid rgba(0, 110, 255, 0.25);
    animation: mapFade 0.8s ease-out;
}

@keyframes mapFade {
    from { opacity: 0; transform: translateY(20px); }
    to   { opacity: 1; transform: translateY(0); }
}

.map-box iframe {
    width: 100%;
    height: 380px;
    border: 0;
    display: block;
    border-radius: 18px;
}

/* Responsive */
@media (max-width: 768px) {
    .map-box iframe {
        height: 300px;
    }
}

@media (max-width: 480px) {
    .map-box iframe {
        height: 260px;
    }
}

    </style>

@endsection
