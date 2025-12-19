<aside id="sidebar"
    class="fixed inset-y-0 left-0 w-64 bg-white shadow-lg
           transform -translate-x-full md:translate-x-0
           transition-transform duration-300 ease-in-out
           z-40">

    <div class="p-6 h-full flex flex-col">

        <div class="flex items-center justify-between mb-6">
            <div class="flex items-center gap-3">
                <img src="{{ asset('img/logo1.png') }}"
                     class="w-10 h-10 object-contain" alt="Logo">
                <span class="panel-title">Guru Panel</span>
            </div>

            <button id="btnCloseSidebar"
                class="md:hidden p-1 rounded text-gray-600 hover:bg-gray-100">
                ✕
            </button>
        </div>

        <nav class="flex-1 space-y-1">
            <a href="/guru/dashboard"
               class="block px-3 py-2 rounded-md
               {{ request()->is('guru/dashboard') ? 'bg-blue-600 text-white' : 'text-gray-700 hover:bg-gray-100' }}">
                Dashboard
            </a>

            <a href="/guru/materi"
               class="block px-3 py-2 rounded-md
               {{ request()->is('guru/materi*') ? 'bg-blue-600 text-white' : 'text-gray-700 hover:bg-gray-100' }}">
                Materi
            </a>
        </nav>

        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit"
                class="logout-btn">
                <i class="fa-solid fa-right-from-bracket"></i>
                Keluar
            </button>
        </form>
    </div>
</aside>

<style>
    .panel-title {
    font-size: 18px;
    font-weight: 600;
    color: #1f2937;
    }

    @media (max-width: 768px) {
        .panel-title {
            font-size: 16px;
        }
    }

    @media (max-width: 480px) {
        .panel-title {
            font-size: 15px;
        }
    }

    .logout-btn {
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: flex-start;
    gap: 8px;

    padding: 10px 14px;
    border-radius: 6px;

    background: transparent;
    border: none;
    cursor: pointer;

    color: #dc2626;
    font-weight: 500;
    font-size: 14px;

    transition: background 0.2s ease;
    }

    .logout-btn:hover {
        background-color: #fee2e2;
    }

    .logout-btn i {
        font-size: 16px;
        /* ensure icon sits close to text */
        margin-left: 0;
    }
</style>