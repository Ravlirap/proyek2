<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - @yield('title')</title>

    {{-- Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f5f6f8;
            margin: 0;
            overflow-x: hidden;
        }

        /* === SIDEBAR WIDTH === */
        :root {
            --sidebar-width: 250px;
        }

        /* === MAIN CONTENT === */
        .main-content {
            margin-left: var(--sidebar-width);
            padding: 32px;
            min-height: 100vh;
            width: calc(100% - var(--sidebar-width));
        }

        /* CARD STYLE */
        .card {
            border-radius: 16px;
            border: none;
        }

        .card-header {
            background: #fff;
            border-bottom: 1px solid #eee;
            font-weight: 600;
        }

        /* NAV ACTIVE */
        .nav-link.active {
            border-radius: 10px;
        }

        /* RESPONSIVE */
        @media (max-width: 992px) {
            .main-content {
                margin-left: 0;
                width: 100%;
                padding: 20px;
            }
        }
    </style>
</head>
<body>

    <div class="d-flex">
        {{-- SIDEBAR --}}
        @include('admin.layouts.sidebar')

        {{-- MAIN CONTENT --}}
        <main class="main-content">
            <div class="container-fluid p-0">
                @yield('content')
            </div>
        </main>
    </div>

    {{-- Bootstrap JS --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
