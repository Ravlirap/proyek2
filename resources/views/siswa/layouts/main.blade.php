<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Dashboard Siswa</title>

<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100 flex">

@include('siswa.layouts.sidebar')

<main class="flex-1 min-h-screen bg-gray-100 main-content">

    <div class="lg:hidden p-4 bg-white shadow flex items-center gap-3">
        <button onclick="toggleSidebar()" class="text-2xl text-blue-700">
            <i class="fas fa-bars"></i>
        </button>
        <h1 class="font-bold text-blue-700 text-lg">Siswa Panel</h1>
    </div>

    @yield('content')
</main>

<script>
function toggleSidebar() {
    document.getElementById('sidebar').classList.toggle('active');
    document.getElementById('sidebarOverlay').classList.toggle('active');
}
</script>

<style>
@media (min-width: 1024px) {
    .main-content {
        margin-left: 250px;
    }
}

@media (max-width: 1023px) {
    .main-content {
        margin-left: 0;
    }
}
</style>

</body>
</html>
