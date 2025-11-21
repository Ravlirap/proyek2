<div class="w-64 bg-white shadow-lg fixed left-0 top-0 h-full p-6">
    <h2 class="text-xl font-bold mb-6">Menu Siswa</h2>

    <nav class="space-y-3">
        <a href="/siswa/dashboard" class="block p-2 rounded hover:bg-blue-100">Dashboard</a>
        <a href="/siswa/jadwal" class="block p-2 rounded hover:bg-blue-100">Jadwal Pelatihan</a>
        <a href="/siswa/materi" class="block p-2 rounded hover:bg-blue-100">Materi Pembelajaran</a>
        <a href="/siswa/profil" class="block p-2 rounded hover:bg-blue-100">Profil</a>

        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" class="w-full text-left block p-2 rounded text-red-600 hover:bg-red-100">Logout</button>
        </form>

    </nav>
</div>
