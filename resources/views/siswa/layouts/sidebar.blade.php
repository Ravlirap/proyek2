<div class="sidebar">
    <div class="sidebar-header">
        <div class="logo-circle">
            <span>LPK</span>
        </div>
        <h2 class="sidebar-title">Siswa Panel</h2>
    </div>

    <nav class="sidebar-menu">
        <a href="/siswa/dashboard" class="menu-item {{ request()->is('siswa/dashboard') ? 'active' : '' }}">
            <i class="fas fa-home"></i> Dashboard
        </a>

        <a href="/siswa/jadwal" class="menu-item {{ request()->is('siswa/jadwal') ? 'active' : '' }}">
            <i class="fas fa-calendar-alt"></i> Jadwal Pelatihan
        </a>

        <a href="/siswa/materi" class="menu-item {{ request()->is('siswa/materi') ? 'active' : '' }}">
            <i class="fas fa-book"></i> Materi Pembelajaran
        </a>

        <a href="/siswa/profil" class="menu-item {{ request()->is('siswa/profil') ? 'active' : '' }}">
            <i class="fas fa-user"></i> Profil
        </a>

        <form action="{{ route('logout') }}" method="POST" class="mt-4">
            @csrf
            <button type="submit" class="menu-item logout">
                <i class="fas fa-sign-out-alt"></i> Logout
            </button>
        </form>
    </nav>
</div>

<style>
    .sidebar {
        width: 250px;
        height: 100vh;
        background: #ffffff;
        position: fixed;
        top: 0;
        left: 0;
        padding: 25px 20px;
        border-right: 3px solid #dbeafe;

        box-shadow: 0 6px 25px rgba(0, 0, 0, 0.08);

        animation: fadeSlide 0.4s ease;
    }

    @keyframes fadeSlide {
        from {
            opacity: 0;
            transform: translateX(-15px);
        }
        to {
            opacity: 1;
            transform: translateX(0);
        }
    }

    .sidebar-header {
        text-align: center;
        margin-bottom: 35px;
    }

    .logo-circle {
        width: 70px;
        height: 70px;
        background: #2563eb;
        color: white;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 10px;
        font-size: 22px;
        font-weight: bold;

        box-shadow: 0 4px 15px rgba(37, 99, 235, 0.4);

        transition: transform 0.25s, box-shadow 0.25s;
    }

    .logo-circle:hover {
        transform: scale(1.07);
        box-shadow: 0 6px 18px rgba(37, 99, 235, 0.55);
    }

    .sidebar-title {
        font-size: 18px;
        font-weight: 700;
        color: #1e3a8a;
        letter-spacing: 0.5px;
    }

    .sidebar-menu {
        display: flex;
        flex-direction: column;
        gap: 10px;
    }

    .menu-item {
        display: flex;
        align-items: center;
        gap: 12px;
        padding: 12px 14px;
        font-size: 15px;
        font-weight: 500;
        color: #1e40af;
        border-radius: 10px;
        cursor: pointer;

        transition: background 0.25s, color 0.25s, transform 0.25s, box-shadow 0.25s;
    }

    .menu-item i {
        font-size: 18px;
    }

    .menu-item:hover {
        background: #e0f2fe;
        color: #0c4a6e;
        transform: translateX(5px);

        box-shadow: 0 4px 12px rgba(0, 150, 255, 0.18);
    }

    .menu-item.active {
        background: #2563eb;
        color: #ffffff;
        font-weight: 600;

        box-shadow: 0 5px 15px rgba(37, 99, 235, 0.5);

        transform: translateX(4px);
    }

    .logout {
        color: #dc2626 !important;
    }

    .logout:hover {
        background: #fee2e2;
        color: #b91c1c !important;
        box-shadow: 0 4px 12px rgba(220, 38, 38, 0.25);
    }
</style>
