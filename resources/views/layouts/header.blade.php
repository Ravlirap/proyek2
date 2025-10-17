<nav id="mainNavbar" class="navbar navbar-expand-lg fixed-top navbar-dark py-3">
  <div class="container">
    <!-- Logo -->
    <a class="navbar-brand fw-bold d-flex align-items-center" href="/home">
      <img src="{{ asset('img/logo1.png') }}" alt="logo" width="42" height="42"
           class="me-2 rounded-circle border-2 border-light">
      <span class="fs-5">SEIKOU </span> <span class="text-primary">JAPAN</span>
    </a>

    <!-- Toggle (mobile) -->
    <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
            aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto align-items-lg-center">

        <!-- HOME -->
        <li class="nav-item mx-2">
          <a class="nav-link {{ ($slug === 'home') ? 'active text-primary fw-semibold' : 'text-light' }}" href="/home">Beranda</a>
        </li>

        <!-- TENTANG KAMI -->
        <li class="nav-item dropdown mx-2">
          @php
            $tentangKamiSlugs = ['visi-misi', 'tim-kami', 'grup-perusahaan', 'profil-perusahaan'];
          @endphp
          <a class="nav-link dropdown-toggle {{ in_array($slug, $tentangKamiSlugs) ? 'active text-primary fw-semibold' : 'text-light' }}"
             href="#" id="tentangKamiDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Tentang Kami
          </a>
          <ul class="dropdown-menu" aria-labelledby="tentangKamiDropdown">
            <li><a class="dropdown-item" href="/visi-misi">Visi & Misi</a></li>
            <li><a class="dropdown-item" href="/tim-kami">Tim Seikou</a></li>
            <li><a class="dropdown-item" href="/grup-perusahaan">Grup Perusahaan</a></li>
            <li><a class="dropdown-item" href="/profil-perusahaan">Profil Lembaga</a></li>
          </ul>
        </li>

        <!-- PROGRAM -->
        <li class="nav-item mx-2">
          <a class="nav-link {{ ($slug === 'program_pelatihan') ? 'active text-primary fw-semibold' : 'text-light' }}" href="/program_pelatihan">Program</a>
        </li>

        <!-- INFORMASI -->
        <li class="nav-item dropdown mx-2">
          @php
            $informasiSlugs = ['sarana-prasarana', 'dokumentasi-kegiatan', 'galeri', 'artikel', 'kontak'];
          @endphp
          <a class="nav-link dropdown-toggle {{ in_array($slug, $informasiSlugs) ? 'active text-primary fw-semibold' : 'text-light' }}"
             href="#" id="informasiDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Informasi
          </a>
          <ul class="dropdown-menu" aria-labelledby="informasiDropdown">
            <li><a class="dropdown-item" href="/sarana-prasarana">Fasilitas</a></li>
            <li><a class="dropdown-item" href="/dokumentasi-kegiatan">Dokumentasi Kegiatan</a></li>
            <li class="nav-item mx-2">
            <a class="nav-link {{ ($slug === 'index') ? 'active text-primary fw-semibold' : 'text-light' }}" href="/gallery/index">Program</a>
            </li>
            <li><a class="dropdown-item" href="/artikel">Artikel</a></li>
            <li><a class="dropdown-item" href="/kontak">Kontak</a></li>
          </ul>
        </li>

        <!-- LOGIN BUTTON -->
        <li class="nav-item mx-2 mt-2 mt-lg-0">
          <a href="/login" class="btn btn-primary rounded-pill px-4 fw-semibold shadow-sm">Login</a>
        </li>

      </ul>
    </div>
  </div>
</nav>

<style>
  /* Navbar transparan */
  #mainNavbar {
    background: rgba(0, 0, 0, 0.25);
    backdrop-filter: blur(8px);
    transition: all 0.4s ease;
  }

  /* Saat scroll */
  #mainNavbar.scrolled {
    background: #ffffff;
    box-shadow: 0 3px 15px rgba(0, 0, 0, 0.1);
  }

  #mainNavbar.scrolled .nav-link {
    color: #333 !important;
  }

  #mainNavbar.scrolled .navbar-brand span {
    color: #0d6efd !important;
  }

  /* Hover efek */
  .navbar .nav-link {
    position: relative;
    transition: color 0.3s ease;
  }
  .navbar .nav-link::after {
    content: "";
    position: absolute;
    bottom: -3px;
    left: 0;
    width: 0%;
    height: 2px;
    background: #0d6efd;
    transition: width 0.3s ease;
  }
  .navbar .nav-link:hover::after {
    width: 100%;
  }
  .navbar .nav-link:hover {
    color: #0d6efd !important;
  }
  .navbar .dropdown-menu {
    border-radius: 8px;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
  }
  .navbar .dropdown-item:hover {
    background-color: #f8f9fa;
    color: #0d6efd;
  }
</style>

<script>
  // Efek scroll navbar
  document.addEventListener("scroll", function () {
    const navbar = document.getElementById("mainNavbar");
    if (window.scrollY > 60) {
      navbar.classList.add("scrolled");
    } else {
      navbar.classList.remove("scrolled");
    }
  });
</script>
