<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" 
                data-bs-target="#navbarNav" aria-controls="navbarNav" 
                aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">

                <li class="nav-item">
                    <a class="nav-link {{ ($slug === 'home') ? 'active' : '' }}" 
                       aria-current="page" href="/home">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ ($slug === 'profil') ? 'active' : '' }}" 
                       href="/profil">Profil</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ ($slug === 'mahasiswa') ? 'active' : '' }}" 
                       href="/mahasiswa">Mahasiswa</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ ($slug === 'prodi') ? 'active' : '' }}" 
                       href="/prodi">Prodi</a>
                </li>

            </ul>
        </div>
    </div>
</nav>