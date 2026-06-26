<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Tuntunan Tata Cara Sholat')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-white min-h-screen text-ink">
    @include('partials.header')
    <main class="max-w-5xl mx-auto px-4 py-6">
        @yield('content')
    </main>
</body>
</html>