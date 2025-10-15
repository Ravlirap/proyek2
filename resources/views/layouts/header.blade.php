<nav id="mainNavbar" class="navbar navbar-expand-lg fixed-top navbar-dark py-3">
  <div class="container">
    <!-- Logo -->
    <a class="navbar-brand fw-bold d-flex align-items-center" href="/home">
      <img src="img/logo1.png" alt="logo" width="42" height="42" 
           class="me-2 rounded-circle border-2 border-light">
      <span class="fs-5">SEIKOU </span> <span class="text-primary">JAPAN</span>
    </a>

    <!-- Toggle (mobile) -->   
    <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" 
            data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" 
            aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Menu -->
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto align-items-lg-center">
        <li class="nav-item mx-2">
          <a class="nav-link {{ ($slug === 'home') ? 'active text-primary fw-semibold' : 'text-light' }}" href="/home">Beranda</a>
        </li>
        <li class="nav-item dropdown mx-2">
          <a class="nav-link dropdown-toggle {{ in_array($slug, ['visi-misi', 'program_pelatihan', 'tim-kami', 'grup-perusahaan', 'sarana-prasarana', 'dokumentasi-kegiatan']) ? 'active text-primary fw-semibold' : 'text-light' }}" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Tentang Kami
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="/visi-misi">Visi & Misi</a></li>
            <li><a class="dropdown-item" href="/program_pelatihan">Program</a></li>
            <li><a class="dropdown-item" href="/tim-kami">Tim Seikou</a></li>
            <li><a class="dropdown-item" href="/grup-perusahaan">Grup Perusahaan</a></li>
            <li><a class="dropdown-item" href="/sarana-prasarana">Fasilitas</a></li>
            <li><a class="dropdown-item" href="/dokumentasi-kegiatan">Dokumentasi Kegiatan</a></li>
          </ul>
        </li>
        <li class="nav-item mx-2">
          <a class="nav-link {{ ($slug === 'profil') ? 'active text-primary fw-semibold' : 'text-light' }}" href="/profil">Profil</a>
        </li>
        <li class="nav-item mx-2">
          <a class="nav-link {{ ($slug === 'program_pelatihan') ? 'active text-primary fw-semibold' : 'text-light' }}" href="/program_pelatihan">Program</a>
        </li>
        <li class="nav-item mx-2">
          <a class="nav-link {{ ($slug === 'galeri') ? 'active text-primary fw-semibold' : 'text-light' }}" href="/galeri">Galeri</a>
        </li>
        <li class="nav-item mx-2">
          <a class="nav-link {{ ($slug === 'kontak') ? 'active text-primary fw-semibold' : 'text-light' }}" href="/kontak">Kontak</a>
        </li>
        <li class="nav-item mx-2 mt-2 mt-lg-0">
          <a href="/daftar" class="btn btn-primary rounded-pill px-4 fw-semibold shadow-sm">Login</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<style>
  /* Navbar awal transparan dengan efek kaca */
  #mainNavbar {
    background: rgba(0, 0, 0, 0.25);
    backdrop-filter: blur(8px);
    transition: all 0.4s ease;
  }

  /* Saat di-scroll: ubah warna jadi putih */
  #mainNavbar.scrolled {
    background: #ffffff;
    box-shadow: 0 3px 15px rgba(0, 0, 0, 0.1);
  }

  /* Teks berubah agar kontras di background putih */
  #mainNavbar.scrolled .nav-link {
    color: #333 !important;
  }

  #mainNavbar.scrolled .navbar-brand span {
    color: #0d6efd !important;
  }

  /* Efek hover */
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
  // Tambahkan efek perubahan warna navbar saat scroll
  document.addEventListener("scroll", function () {
    const navbar = document.getElementById("mainNavbar");
    if (window.scrollY > 60) {
      navbar.classList.add("scrolled");
    } else {
      navbar.classList.remove("scrolled");
    }
  });
</script>
