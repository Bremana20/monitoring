<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Sistem Monitoring Program Kerja Unit KEK BP Batam</title>
    @vite(['resources/css/app.css'])
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
</head>
<body class="bg-gray-50">
    <!-- Navigation -->
    <nav class="bg-[#0f2847] text-white">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex items-center justify-between h-16">
                <div class="flex items-center space-x-2">
                    <img src="/assets/logo.svg" alt="KEK BP Batam Logo" class="w-16 h-12">
                    <span class="font-bold text-lg">KEK BP Batam</span>
                </div>
                <div class="hidden md:flex items-center space-x-6">
                    <a href="/" class="hover:text-blue-300 transition">Beranda</a>
                    <a href="#features" class="hover:text-blue-300 transition">Fitur</a>
                    <a href="#contact" class="bg-gray-700 px-4 py-2 rounded hover:bg-gray-600 transition">Kontak</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="min-h-screen bg-gradient-to-br from-[#0f2847] via-[#1a3a5c] to-[#0f2847] text-white py-16">
        <div class="max-w-7xl mx-auto px-4">
            <div class="max-w-md mx-auto">
                <div class="text-center mb-8">
                    <h1 class="text-3xl font-bold mb-2">Masuk ke Sistem</h1>
                    <p class="text-blue-200">Sistem Monitoring Program Kerja Unit KEK BP Batam</p>
                </div>

                <div class="bg-white/10 backdrop-blur-sm rounded-lg p-8 shadow-2xl">
                    {{ $slot }}
                </div>
            </div>
        </div>
    </div>
</body>
</html>
