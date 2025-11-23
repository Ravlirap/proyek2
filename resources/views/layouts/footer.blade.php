<footer class="footer-section text-light pt-5 pb-4 mt-5">
  <div class="container">
    <div class="row gy-4">

      <!-- Kolom 1 -->
      <div class="col-lg-4 col-md-6">
        <h5 class="fw-bold mb-3 text-uppercase text-danger">Kantor Perwakilan</h5>
        <div class="mb-3">
          <img src="img/p1.jpeg" alt="Kantor Jepang" class="img-fluid rounded shadow-sm" style="max-width: 100px;">
        </div>
        <p class="mb-1"><i class="bi bi-telephone-fill me-2"></i> <a href="tel:+818032792581" class="footer-link">+81 803-2792-581</a></p>
        <p class="mb-1"><i class="bi bi-envelope-fill me-2"></i> <a href="mailto:allrep@lpkjapan.com" class="footer-link">allrep@lpkjapan.com</a></p>
        <p><i class="bi bi-geo-alt-fill me-2"></i> 2-25-5 Kume Building 6F, Kamiosaki, Shinagawa, Tokyo 141-0021</p>
        <div class="d-flex gap-3 mt-3">
          <a href="#" class="social-icon" aria-label="Whatsapp"><i class="bi bi-whatsapp"></i></a>
          <a href="#" class="social-icon" aria-label="Instagram"><i class="bi bi-instagram"></i></a>
          <a href="#" class="social-icon" aria-label="Facebook"><i class="bi bi-facebook"></i></a>
          <a href="#" class="social-icon" aria-label="Google"><i class="bi bi-google"></i></a>
        </div>
      </div>

      <!-- Kolom 2 -->
      <div class="col-lg-4 col-md-6">
        <h5 class="fw-bold mb-3 text-uppercase text-danger">Perusahaan</h5>
        <ul class="list-unstyled">
          <li><a href="/tentang-kami" class="footer-link"><i class="bi bi-chevron-right me-2"></i> Tentang Kami</a></li>
          <li><a href="/program" class="footer-link"><i class="bi bi-chevron-right me-2"></i> Program</a></li>
          <li><a href="/galeri" class="footer-link"><i class="bi bi-chevron-right me-2"></i> Galeri</a></li>
          <li><a href="/kontak" class="footer-link"><i class="bi bi-chevron-right me-2"></i> Kontak</a></li>
        </ul>
        <div class="mt-4">
          <h6 class="text-primary fw-semibold mb-2 text-danger">Newsletter</h6>
          <form class="d-flex">
            <input type="email" class="form-control me-2" placeholder="Email anda" style="max-width: 180px;">
            <button type="submit" class="btn btn-primary btn-sm">Daftar</button>
          </form>
        </div>
      </div>

      <!-- Kolom 3 -->
      <div class="col-lg-4 col-md-6">
        <h5 class="fw-bold mb-3 text-uppercase text-danger">Kontak Indonesia</h5>
        <div class="mb-3">
          <img src="img/lpk1.jpg" alt="Kantor Indonesia" class="img-fluid rounded shadow-sm" style="max-width: 100px;">
        </div>
        <p class="mb-1"><i class="bi bi-telephone-fill me-2"></i> <a href="tel:+622122837398" class="footer-link">+62 21-2283-7398</a></p>
        <p class="mb-1"><i class="bi bi-envelope-fill me-2"></i> <a href="mailto:info@seikoujapan.com" class="footer-link">info@seikoujapan.com</a></p>
        <p><i class="bi bi-geo-alt-fill me-2"></i> Jl. KH Abdullah Syafi’ie Blok A No 24B RT/RW 001/003,
          Kel. Kebon Baru, Tebet, Jakarta Selatan, Indonesia, 12830
        </p>
      </div>
    </div>

    <hr class="border-light my-4">

    <!-- Logo & Copyright -->
    <div class="d-flex flex-column flex-md-row align-items-center justify-content-between">
      <div class="footer-logo mb-3 mb-md-0 d-flex align-items-center">
        <img src="{{ asset('img/logo1.png') }}" alt="LPK Seikou Japan" width="60"
             class="rounded-circle border-2 border-light bg-white me-2 shadow">
        <span class="fw-bold text-white fs-5">SEIKOU <span class="text-danger">JAPAN</span></span>
      </div>
      <div class="text-center text-md-end small">
        © 2025 <strong>LPK Seikou Japan</strong>. All Rights Reserved.
      </div>
    </div>
  </div>

  <!-- Tombol Scroll Up -->
  <button id="scrollTopBtn" class="scroll-top-btn" aria-label="Scroll to top">
    <i class="bi bi-arrow-up-short"></i>
  </button>
</footer>

<style>
    .footer-section {
        background: linear-gradient(135deg, #0a3d62, #1e5799);
        border-top-left-radius: 24px;
        border-top-right-radius: 24px;
        padding-top: 60px;
        padding-bottom: 40px;
        color: #ffffff; /* Semua font default jadi putih */
    }

    .footer-section h5 {
        font-size: 1.15rem;
        letter-spacing: 0.5px;
        color: #ffffff; /* Putih */
        border-bottom: 2px solid rgba(255, 255, 255, 0.35);
        display: inline-block;
        padding-bottom: 4px;
        margin-bottom: 16px;
    }

    .footer-link {
        color: #ffffff !important; /* Link putih */
        text-decoration: none;
        transition: 0.3s ease;
        font-weight: 500;
    }
    .footer-link:hover {
        color: #d0d0d0; /* Abu muda biar kelihatan hover */
        transform: translateX(6px);
    }

    .footer-section p,
    .footer-section li,
    .footer-section span,
    .footer-section small {
        color: #ffffff !important;
    }


    /* Social Icon */
    .social-icon {
        color: #ffffff;
        background: rgba(255, 255, 255, 0.18);
        backdrop-filter: blur(4px);
        font-size: 1.3rem;
        width: 40px;
        height: 40px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: 0.3s;
    }
    .social-icon:hover {
        background: #ffffff;
        color: #0a3d62;
        transform: scale(1.15);
    }

    /* Footer Logo */
    .footer-logo img {
        background: #ffffff;
        border-radius: 50%;
        padding: 3px;
        box-shadow: 0 2px 6px rgba(0,0,0,0.2);
    }

    /* Scroll Button */
    .scroll-top-btn {
        position: fixed;
        bottom: 25px;
        right: 25px;
        background: #1e5799;
        color: white;
        border: none;
        border-radius: 50%;
        width: 50px;
        height: 50px;
        display: none;
        justify-content: center;
        align-items: center;
        cursor: pointer;
        box-shadow: 0 4px 14px rgba(0,0,0,0.25);
        transition: 0.3s;
        z-index: 999;
    }
    .scroll-top-btn:hover {
        background: #ffffff;
        color: #1e5799;
        transform: translateY(-4px);
    }

    /* Responsive */
    @media (max-width: 768px) {
        .footer-section {
            text-align: center;
        }
        .list-unstyled {
            text-align: center;
        }
    }

    .footer-section .text-center.text-md-end.small {
    color: #ffffff !important;
    }

    .footer-section .text-center.text-md-end.small strong {
        color: #ffffff !important;
    }

</style>


<script>
  const scrollBtn = document.getElementById("scrollTopBtn");
  window.addEventListener("scroll", () => {
    scrollBtn.style.display = window.scrollY > 300 ? "flex" : "none";
  });
  scrollBtn.addEventListener("click", () => {
    window.scrollTo({ top: 0, behavior: "smooth" });
  });
</script>

<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
