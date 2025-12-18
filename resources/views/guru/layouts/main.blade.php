<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Dashboard Guru</title>
<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 flex">


@include('guru.layouts.sidebar')


<main class="flex-1 ml-64 min-h-screen bg-gray-100">
@yield('content')
</main>


</body>
</html>