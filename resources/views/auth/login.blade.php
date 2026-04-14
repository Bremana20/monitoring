<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Sistem Monitoring Program Kerja Unit KEK BP Batam</title>
    @vite(['resources/css/app.css'])
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
</head>
<body class="bg-gray-50">
    <!-- Navigation -->
    <nav class="bg-[#0f2847] text-white">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex items-center justify-between h-16">
                <div class="flex items-center space-x-2">
                    <img src="/assets/logo.svg" alt="KEK BP Batam Logo" class="w-15 h-9">
                </div>
                <div class="hidden md:flex items-center space-x-6">
                    <a href="/" class="hover:text-blue-300 transition">Beranda</a>
                    @if (Route::has('login'))
                        <a href="{{ route('login') }}" class="bg-blue-600 px-4 py-2 rounded hover:bg-blue-700 transition">Masuk</a>
                    @endif
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section with Login Form -->
    <div class="bg-gradient-to-br from-[#0f2847] via-[#1a3a5c] to-[#0f2847] text-white py-16 lg:py-20">
        <div class="max-w-7xl mx-auto px-4">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-12 items-center">
                <div>
                    <h1 class="text-3xl lg:text-4xl font-bold mb-4 leading-tight">
                        Masuk ke Sistem<br>
                        <span class="text-white">Monitoring Program Kerja</span><br>
                        <span class="text-white">Unit KEK</span> <span class="text-blue-400">BP Batam</span>
                    </h1>
                    <p class="text-blue-200 mb-6 lg:mb-8 text-base lg:text-lg">Akses dashboard monitoring untuk melacak progress program kerja secara real-time.</p>

                    <!-- Session Status -->
                    @if (session('status'))
                        <div class="mb-6 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded-lg">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if ($errors->any())
                        <div class="mb-6 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded-lg">
                            <ul class="list-disc list-inside">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form method="POST" action="{{ route('login') }}" class="space-y-6">
                        @csrf

                        <!-- Email Address -->
                        <div>
                            <label for="email" class="block text-sm font-medium text-white mb-2">
                                Email
                            </label>
                            <input id="email" class="block w-full px-4 py-3 bg-white/20 border border-white/30 rounded-lg text-white placeholder-blue-200 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent backdrop-blur-sm" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" placeholder="Masukkan email Anda" />
                        </div>

                        <!-- Password -->
                        <div>
                            <label for="password" class="block text-sm font-medium text-white mb-2">
                                Password
                            </label>
                            <input id="password" class="block w-full px-4 py-3 bg-white/20 border border-white/30 rounded-lg text-white placeholder-blue-200 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent backdrop-blur-sm" type="password" name="password" required autocomplete="current-password" placeholder="Masukkan password Anda" />
                        </div>

                        <!-- Remember Me -->
                        <div class="flex items-center">
                            <input id="remember_me" type="checkbox" class="rounded border-white/30 bg-white/20 text-blue-600 shadow-sm focus:ring-blue-400" name="remember">
                            <label for="remember_me" class="ml-2 text-sm text-blue-200">
                                Ingat saya
                            </label>
                        </div>

                        <div class="flex flex-col space-y-4">
                            <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-medium py-3 px-4 rounded-lg transition duration-200 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-offset-2 focus:ring-offset-transparent">
                                Masuk ke Sistem
                            </button>

                            @if (Route::has('password.request'))
                                <div class="text-center">
                                    <a class="text-blue-200 hover:text-white text-sm underline transition" href="{{ route('password.request') }}">
                                        Lupa password?
                                    </a>
                                </div>
                            @endif
                        </div>
                    </form>
                </div>

                <div class="relative mt-8 lg:mt-0">
                    <div class="text-center">
                        <img src="/assets/nongsa-digital-park.png" alt="Nongsa Digital Park" class="hidden sm:block w-full max-w-md lg:max-w-lg mx-auto opacity-90 rounded-lg">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-[#0f2847] text-white py-8">
        <div class="max-w-7xl mx-auto px-4 text-center">
            <p class="text-sm text-blue-200">© 2025 Unit KEK BP Batam. Sistem Monitoring Program Kerja</p>
        </div>
    </footer>
</body>
</html>
