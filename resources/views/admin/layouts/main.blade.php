<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - @yield('title')</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f8f9fa;
            margin: 0;
        }
        .main-content {
            margin-left: 400px; /* sesuaikan dengan lebar sidebar */
            padding: 30px;
        }
        .card {
            border-radius: 1rem;
        }
        .nav-link.active {
            border-radius: .5rem;
        }
    </style>
</head>
<body>

    <div class="d-flex">
        {{-- Sidebar --}}
        @include('admin.layouts.sidebar')

        {{-- Konten utama --}}
        <main style="margin-left: 250px;"> 
        <div class="container-fluid py-4">
            @yield('content')
        </div>
    </main>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
