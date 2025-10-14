<footer class="footer-section text-light pt-5 pb-4 mt-5">
  <div class="container">
    <div class="row gy-4">

      <!-- Kolom 1 -->
      <div class="col-lg-4 col-md-6">
        <h5 class="fw-bold mb-3 text-uppercase">Kantor Perwakilan</h5>
        <p class="mb-1"><i class="bi bi-telephone-fill me-2"></i> +818032792581</p>
        <p class="mb-1"><i class="bi bi-envelope-fill me-2"></i> allrep@lpkjapan.com</p>
        <p><i class="bi bi-geo-alt-fill me-2"></i> 2-25-5 Kume Building 6F, Kamiosaki, Shinagawa, Tokyo 141-0021</p>
        <div class="d-flex gap-3 mt-3">
          <a href="#" class="social-icon"><i class="bi bi-whatsapp"></i></a>
          <a href="#" class="social-icon"><i class="bi bi-instagram"></i></a>
          <a href="#" class="social-icon"><i class="bi bi-facebook"></i></a>
          <a href="#" class="social-icon"><i class="bi bi-google"></i></a>
        </div>
      </div>

      <!-- Kolom 2 -->
      <div class="col-lg-4 col-md-6">
        <h5 class="fw-bold mb-3 text-uppercase">Perusahaan</h5>
        <ul class="list-unstyled">
          <li><a href="/tentang-kami" class="footer-link"><i class="bi bi-chevron-right me-2"></i> Tentang Kami</a></li>
          <li><a href="/program" class="footer-link"><i class="bi bi-chevron-right me-2"></i> Program</a></li>
          <li><a href="/galeri" class="footer-link"><i class="bi bi-chevron-right me-2"></i> Galeri</a></li>
          <li><a href="/kontak" class="footer-link"><i class="bi bi-chevron-right me-2"></i> Kontak</a></li>
        </ul>
      </div>

      <!-- Kolom 3 -->
      <div class="col-lg-4 col-md-6">
        <h5 class="fw-bold mb-3 text-uppercase">Kontak Indonesia</h5>
        <p class="mb-1"><i class="bi bi-telephone-fill me-2"></i> +622122837398</p>
        <p class="mb-1"><i class="bi bi-envelope-fill me-2"></i> info@seikoujapan.com</p>
        <p><i class="bi bi-geo-alt-fill me-2"></i> Jl. KH Abdullah Syafi’ie Blok A No 24B RT/RW 001/003,  
          Kel. Kebon Baru, Tebet, Jakarta Selatan, Indonesia, 12830
        </p>
      </div>
    </div>

    <hr class="border-light my-4">

    <!-- Logo & Copyright -->
    <div class="d-flex flex-column flex-md-row align-items-center justify-content-between">
      <div class="footer-logo mb-3 mb-md-0 d-flex align-items-center">
        <img src="img/logo1.png" alt="LPK Seikou Japan" width="60" 
             class="rounded-circle border border-2 border-light bg-white me-2">
        <span class="fw-bold text-white fs-5">SEIKOU <span class="text-primary">JAPAN</span></span>
      </div>
      <div class="text-center text-md-end small">
        © 2025 <strong>LPK Seikou Japan</strong>. All Rights Reserved.
      </div>
    </div>
  </div>

  <!-- Tombol Scroll Up -->
  <button id="scrollTopBtn" class="scroll-top-btn">
    <i class="bi bi-arrow-up-short"></i>
  </button>
</footer>

<!-- ===== Styling ===== -->
<style>
    .footer-section {
        background-color: #1c2940; /* Solid dark blue color */
        border-top-left-radius: 20px;
        border-top-right-radius: 20px;
        position: relative;
        box-shadow: 0 -5px 15px rgba(0, 0, 0, 0.1);
    }

    .footer-section h5 {
        font-size: 1.1rem;
        letter-spacing: 0.5px;
        color: #ffffff;
    }

    .footer-link {
        display: block;
        color: #adb5bd; /* Softer text color */
        margin-bottom: 8px;
        text-decoration: none;
        transition: all 0.3s ease;
    }
    .footer-link:hover {
        color: #ffffff;
        transform: translateX(5px);
    }

    .social-icon {
        color: #fff;
        font-size: 1.4rem;
        transition: all 0.3s ease;
    }
    .social-icon:hover {
        color: #0d6efd; /* Primary blue on hover */
        transform: translateY(-3px);
    }

    .scroll-top-btn {
        position: fixed;
        bottom: 25px;
        right: 25px;
        background-color: #0d6efd; /* Primary blue */
        color: white;
        border: none;
        border-radius: 50%; /* Circular button */
        width: 50px;
        height: 50px;
        display: none;
        justify-content: center;
        align-items: center;
        cursor: pointer;
        box-shadow: 0 4px 12px rgba(0,0,0,0.2);
        transition: all 0.3s ease;
        z-index: 999;
        font-size: 1.5rem;
    }
    .scroll-top-btn:hover {
        background-color: #0b5ed7; /* Darker blue on hover */
        transform: translateY(-4px);
        box-shadow: 0 6px 16px rgba(0,0,0,0.25);
    }

    .footer-logo img {
        background: #fff;
    }

    @media (max-width: 768px) {
        .footer-section {
            text-align: center;
        }
        .footer-logo {
            justify-content: center;
        }
        .social-icon {
            font-size: 1.6rem;
        }
        .col-lg-4, .col-md-6 {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .list-unstyled {
            width: fit-content;
            text-align: left;
        }
    }
</style>

<!-- ===== Script Scroll to Top ===== -->
<script>
  const scrollBtn = document.getElementById("scrollTopBtn");
  window.addEventListener("scroll", () => {
    scrollBtn.style.display = window.scrollY > 300 ? "flex" : "none";
  });
  scrollBtn.addEventListener("click", () => {
    window.scrollTo({ top: 0, behavior: "smooth" });
  });
</script>

<!-- Bootstrap Icons -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
