<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Guru Panel</title>

<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">


<style>
:root {
    --sidebar-w: 256px; /* HARUS sama dengan w-64 */
}

#overlay {
    background: rgba(0,0,0,.45);
}

@media (min-width: 768px) {
    #sidebar {
        transform: translateX(0);
    }
}
</style>
</head>

<body class="bg-gray-100 min-h-screen">

<!-- TOPBAR (MOBILE ONLY) -->
<header class="md:hidden fixed top-0 inset-x-0 z-30 bg-white shadow">
    <div class="flex items-center px-4 py-3 gap-3">
        <button id="btnOpenSidebar"
            class="p-2 rounded-md text-gray-600 hover:bg-gray-100">
            ☰
        </button>
        <span class="font-semibold text-gray-800">Guru Panel</span>
    </div>
</header>

<!-- OVERLAY (MOBILE ONLY) -->
<div id="overlay"
    class="fixed inset-0 hidden z-30 md:hidden"></div>

@include('guru.layouts.sidebar')

<!-- MAIN CONTENT -->
<main class="md:ml-64 pt-16 md:pt-0 min-h-screen">
    @yield('content')
</main>

<script>
(function () {
    const sidebar = document.getElementById('sidebar');
    const overlay = document.getElementById('overlay');
    const btnOpen = document.getElementById('btnOpenSidebar');
    const btnClose = document.getElementById('btnCloseSidebar');

    function openSidebar() {
        sidebar.classList.remove('-translate-x-full');
        sidebar.classList.add('translate-x-0');
        overlay.classList.remove('hidden');
        document.body.classList.add('overflow-hidden');
    }

    function closeSidebar() {
        sidebar.classList.add('-translate-x-full');
        sidebar.classList.remove('translate-x-0');
        overlay.classList.add('hidden');
        document.body.classList.remove('overflow-hidden');
    }

    if (btnOpen) btnOpen.addEventListener('click', openSidebar);
    if (btnClose) btnClose.addEventListener('click', closeSidebar);
    if (overlay) overlay.addEventListener('click', closeSidebar);
})();
</script>

</body>
</html>
