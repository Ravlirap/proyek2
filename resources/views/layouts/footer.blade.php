<footer class="footer-section text-light pt-5 pb-4 mt-5">
  <div class="container">
    <div class="row gy-4">

      <!-- Kolom 1 -->
      <div class="col-lg-4 col-md-6">
        <h5 class="fw-bold mb-3 text-uppercase text-danger">Kantor Perwakilan</h5>
        <div class="mb-3">
          <img src="img/japan-office.jpg" alt="Kantor Jepang" class="img-fluid rounded shadow-sm" style="max-width: 100px;">
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
          <img src="img/indo-office.jpg" alt="Kantor Indonesia" class="img-fluid rounded shadow-sm" style="max-width: 100px;">
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
        background: linear-gradient(135deg, #0066ff 80%, #1b0c94 100%);
        border-top-left-radius: 24px;
        border-top-right-radius: 24px;
        position: relative;
        box-shadow: 0 -5px 20px rgba(0, 0, 0, 0.12);
        overflow: hidden;
    }

    .footer-section h5 {
        font-size: 1.15rem;
        letter-spacing: 0.5px;
        color: #ffffff;
        border-bottom: 2px solid #0d6efd;
        display: inline-block;
        padding-bottom: 4px;
        margin-bottom: 16px;
    }

    .footer-link {
        display: inline-block;
        color: #adb5bd;
        margin-bottom: 8px;
        text-decoration: none;
        transition: all 0.3s;
        font-weight: 500;
    }
    .footer-link:hover {
        color: #0d6efd;
        transform: translateX(6px) scale(1.05);
        text-decoration: underline;
    }

    .social-icon {
        color: #fff;
        font-size: 1.5rem;
        transition: all 0.3s;
        background: #0d6efd;
        border-radius: 50%;
        width: 38px;
        height: 38px;
        display: flex;
        align-items: center;
        justify-content: center;
        box-shadow: 0 2px 8px rgba(13,110,253,0.13);
    }
    .social-icon:hover {
        color: #fff;
        background: #fff;
        border: 2px solid #0d6efd;
        color: #0d6efd;
        transform: scale(1.18) translateY(-3px);
    }

    .scroll-top-btn {
        position: fixed;
        bottom: 25px;
        right: 25px;
        background: linear-gradient(135deg, #0d6efd 80%, #0040b0 100%);
        color: white;
        border: none;
        border-radius: 50%;
        width: 52px;
        height: 52px;
        display: none;
        justify-content: center;
        align-items: center;
        cursor: pointer;
        box-shadow: 0 4px 16px rgba(13,110,253,0.2);
        transition: all 0.3s;
        z-index: 999;
        font-size: 1.7rem;
    }
    .scroll-top-btn:hover {
        background: #fff;
        color: #0d6efd;
        transform: scale(1.08) translateY(-4px);
        box-shadow: 0 6px 20px rgba(13,110,253,0.25);
    }

    .footer-logo img {
        background: #fff;
        box-shadow: 0 2px 8px rgba(13,110,253,0.09);
    }

    @media (max-width: 768px) {
        .footer-section {
            text-align: center;
        }
        .footer-logo {
            justify-content: center;
        }
        .social-icon {
            font-size: 1.7rem;
            width: 44px;
            height: 44px;
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
        .footer-section h5 {
            font-size: 1rem;
        }
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
