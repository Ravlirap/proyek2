<div class="d-flex flex-column flex-shrink-0 p-3 bg-white border-end vh-100" style="width: 220px; position: fixed; box-shadow: 2px 0 8px rgba(0, 0, 0, 0.05);">

   <a class="navbar-brand fw-bold d-flex align-items-center" href="{{ route('home') }}">
      <img src="{{ asset('img/logo1.png') }}" alt="logo" width="42" height="42"
           class="me-2 rounded-circle border-2 border-light">
        <span class="fs-5 text-primary">SEIKOU ADMIN</span>
    </a>

    <div class="mb-3">
        
        <li class="nav-item mb-1 mt-3 list-unstyled">
            @php $isActive = request()->routeIs('admin.dashboard'); @endphp
            <a href="{{ route('admin.dashboard') }}" 
            class="nav-link rounded-3 text-dark py-2 transition-ease {{ $isActive ? 'active bg-primary text-white fw-bold shadow-sm' : 'link-hover-light' }}" aria-current="{{ $isActive ? 'page' : '' }}">
                <i class="bi bi-house-door-fill me-2"></i> Dashboard
            </a>
        </li>

        <li class="nav-item mb-1 list-unstyled">
            @php $isActive = request()->routeIs('admin.pendaftar.index'); @endphp
            <a href="{{ route('admin.pendaftar.index') }}" 
            class="nav-link rounded-3 text-dark py-2 transition-ease {{ $isActive ? 'active bg-primary text-white fw-bold shadow-sm' : 'link-hover-light' }}" aria-current="{{ $isActive ? 'page' : '' }}">
                <i class="bi bi-person-lines-fill me-2"></i> Kelola Pendaftar
            </a>
        </li>

        <li class="nav-item mb-1 list-unstyled">
            @php $isActive = request()->routeIs('admin.guru.index'); @endphp
            <a href="{{ route('admin.guru.index') }}" 
            class="nav-link rounded-3 text-dark py-2 transition-ease {{ $isActive ? 'active bg-primary text-white fw-bold shadow-sm' : 'link-hover-light' }}" aria-current="{{ $isActive ? 'page' : '' }}">
                <i class="bi bi-person-lines-fill me-2"></i> Kelola Guru/Sensei
            </a>
        </li>

        <li class="nav-item mb-1 list-unstyled">
            @php $isActive = request()->routeIs('admin.artikel.index'); @endphp
            <a href="{{ route('admin.artikel.index') }}" 
             class="nav-link rounded-3 text-dark py-2 transition-ease {{ $isActive ? 'active bg-primary text-white fw-bold shadow-sm' : 'link-hover-light' }}" aria-current="{{ $isActive ? 'page' : '' }}">
                <i class="bi bi-file-text-fill me-2"></i> Kelola Artikel
            </a>
        </li>

        <li class="nav-item mb-1 list-unstyled">
            @php $isActive = request()->routeIs('admin.galeri.index'); @endphp
            <a href="{{ route('admin.galeri.index') }}" 
            class="nav-link rounded-3 text-dark py-2 transition-ease {{ $isActive ? 'active bg-primary text-white fw-bold shadow-sm' : 'link-hover-light' }}" aria-current="{{ $isActive ? 'page' : '' }}">
                <i class="bi bi-images me-2"></i> Kelola Galeri
            </a>
        </li>

    </div>

    <div class="mb-auto">
        <small class="text-secondary fw-bold text-uppercase d-block mb-2 px-2">Pengaturan</small>

        <li class="nav-item mb-1 list-unstyled">
            <a href="#" class="nav-link text-dark rounded-3 py-2 transition-ease link-hover-light">
                <i class="bi bi-gear-fill me-2"></i> Pengaturan
            </a>
        </li>

        <li class="nav-item mb-1 list-unstyled">
            <a href="#" class="nav-link text-dark rounded-3 py-2 transition-ease link-hover-light">
                <i class="bi bi-bar-chart-line-fill me-2"></i> Laporan
            </a>
        </li>
    </div>

    <hr class="my-3">

    <div>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-inline">
            @csrf
            <button type="submit" class="nav-link text-danger rounded-3 p-2 mb-2 transition-ease hover-danger-bg-light border-0 bg-transparent">
                <i class="bi bi-box-arrow-right me-2"></i> Keluar
            </button>
        </form>


        <div class="text-center small text-secondary mt-2">
            &copy; {{ date('Y') }} Seikou
        </div>
    </div>
</div>

<style>
/* --- UTILITY CSS --- */
.transition-ease {
    transition: all 0.2s ease-in-out;
}

/* Hover Putih */
.link-hover-light:hover {
    background-color: rgba(0, 0, 0, 0.05); /* Abu-abu transparan saat hover */
    color: var(--bs-primary, #0d6efd) !important; /* Teks berubah jadi Biru saat hover */
}

/* Hover Merah */
.hover-danger-bg-light:hover {
    background-color: rgba(220, 53, 69, 0.1); /* Merah transparan saat hover */
    color: var(--bs-danger, #dc3545) !important;
}

/* --- TEMA BIRU-MERAH-PUTIH (TERANG) --- */
.nav-link.active.bg-primary {
    /* Background Biru, Teks Putih untuk link aktif */
    background-color: var(--bs-primary, #0d6efd) !important;
    color: white !important;
    
    /* Aksen Putih: Garis samping putih */
    border-left: 4px solid white;
    padding-left: 14px !important;
}

/* Mengatur warna ikon link yang tidak aktif agar Biru saat di-hover */
.link-hover-light:hover i {
    color: var(--bs-primary, #0d6efd) !important;
}
/* Memastikan ikon aktif tetap putih */
.nav-link.active.bg-primary i {
    color: white !important;
}
</style>