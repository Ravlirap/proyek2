<nav class="navbar navbar-expand-lg navbar-dark bg-primary mb-0">
    <div class="container">
        <a class="navbar-brand fw-bold" href="/home">
            <img src="img/logo1.png" alt="logo" width="35" height="35" class="d-inline-block align-text-top me-2 rounded-circle">
            SEIKOU JAPAN
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" 
                data-bs-target="#navbarNav" aria-controls="navbarNav" 
                aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link {{ ($slug === 'home') ? 'active' : '' }}" href="/home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($slug === 'profil') ? 'active' : '' }}" href="/profil">Profil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($slug === 'mahasiswa') ? 'active' : '' }}" href="/mahasiswa">Mahasiswa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($slug === 'prodi') ? 'active' : '' }}" href="/prodi">Prodi</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
