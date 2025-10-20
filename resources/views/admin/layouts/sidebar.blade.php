<div class="d-flex flex-column flex-shrink-0 p-3 bg-primary text-white vh-100" style="width: 250px; position: fixed;">
    <a href="{{ route('admin.dashboard') }}" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
        <i class="bi bi-speedometer2 fs-4 me-2"></i>
        <span class="fs-5 fw-bold">LPK Seikou</span>
    </a>
    <hr class="border-light">

    <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item mb-1">
            <a href="{{ route('admin.dashboard') }}" class="nav-link text-white {{ request()->routeIs('admin.dashboard') ? 'active bg-white text-primary fw-bold' : '' }}">
                <i class="bi bi-house-door me-2"></i> Dashboard
            </a>
        </li>
        <li class="nav-item mb-1">
            <a href="{{ route('admin.pendaftar.index') }}" class="nav-link text-white {{ request()->routeIs('admin.pendaftar.*') ? 'active bg-white text-primary fw-bold' : '' }}">
                <i class="bi bi-people me-2"></i> Kelola Pendaftar
            </a>
        </li>
        <li class="nav-item mb-1">
            <a href="#" class="nav-link text-white">
                <i class="bi bi-gear me-2"></i> Pengaturan
            </a>
        </li>
        <li class="nav-item mb-1 mt-3">
            <a href="{{ url('/logout') }}" class="nav-link text-white">
                <i class="bi bi-box-arrow-right me-2"></i> Keluar
            </a>
        </li>
    </ul>
    <hr class="border-light">
    <div class="text-center small text-white-50">
        &copy; {{ date('Y') }} LPK Seikou
    </div>
</div>
