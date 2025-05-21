<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guest Layout</title>
    @vite('resources/css/app.css') {{-- pastikan kamu pakai Vite --}}
</head>
<body class="bg-gray-100 text-gray-900">

    {{-- Optional: Tambahkan navbar/header --}}
    @include('components.header')

    {{-- Ini tempat semua konten halaman ditampilkan --}}
    <main class="container mx-auto px-4 py-6">
        @yield('content')
    </main>

    {{-- Optional: Tambahkan footer --}}
    @include('components.footer')

</body>
</html>
