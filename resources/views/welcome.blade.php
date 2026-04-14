<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Monitoring Program Kerja Unit KEK BP Batam</title>
    @vite(['resources/css/app.css'])
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
</head>
<body class="bg-gray-50">
    <!-- Navigation -->
    <nav class="bg-[#0f2847] text-white">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex items-center justify-between h-16">
                <div class="flex items-center">
                    <img src="/assets/logo.svg" alt="BP Batam Logo" class="w-15 h-9">
                </div>
                <div class="hidden md:flex items-center space-x-6">
                    <a href="#about" class="hover:text-blue-300 transition">Tentang</a>
                    <a href="#help" class="hover:text-blue-300 transition">Bantuan</a>
                    <a href="mailto:support@kek-batam.go.id" class="hover:text-blue-300 transition">Kontak</a>
                    @if (Route::has('login'))
                        <a href="{{ route('login') }}" class="bg-blue-600 px-4 py-2 rounded hover:bg-blue-700 transition">Masuk</a>
                    @endif
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="bg-gradient-to-br from-[#0f2847] via-[#1a3a5c] to-[#0f2847] text-white py-16 lg:py-20">
        <div class="max-w-7xl mx-auto px-4">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-12 items-center">
                <div>
                    <h1 class="text-3xl lg:text-5xl font-bold mb-4 leading-tight">
                        Sistem Monitoring<br>
                        <span class="text-white">Program Kerja</span><br>
                        <span class="text-white">Unit KEK</span> <span class="text-blue-400">BP Batam</span>
                    </h1>
                    <p class="text-blue-200 mb-6 lg:mb-8 text-base lg:text-lg">Sistem internal untuk monitoring dan pelacakan progress program kerja di Kawasan Ekonomi Khusus Batam.</p>
                    <div class="flex flex-col sm:flex-row gap-4">
                        @if (Route::has('login'))
                            <a href="{{ route('login') }}" class="bg-blue-600 px-6 py-3 rounded-lg hover:bg-blue-700 transition font-medium text-center">Login Sistem</a>
                        @else
                            <button class="bg-blue-600 px-6 py-3 rounded-lg hover:bg-blue-700 transition font-medium w-full sm:w-auto">Sistem Dalam Pengembangan</button>
                        @endif
                    </div>
                </div>
                <div class="relative mt-8 lg:mt-0">
                    <div class="text-center">
                        <img src="/assets/illustration-2.svg" alt="Sistem Monitoring Illustration" class="w-full max-w-lg mx-auto opacity-90">
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- System Objectives Section -->
    <div class="bg-blue-50 py-12">
        <div class="max-w-7xl mx-auto px-4">
            <div class="text-center mb-8">
                <h2 class="text-2xl font-bold text-gray-900 mb-2">Tujuan Sistem</h2>
                <p class="text-gray-600">Mewujudkan pengelolaan program kerja yang efektif dan transparan</p>
            </div>
            <div class="max-w-6xl mx-auto">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <div class="bg-white rounded-lg shadow-sm border border-gray-200 p-6 text-center">
                        <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                            </svg>
                        </div>
                        <h3 class="font-bold text-gray-900 mb-3">Transparansi Data</h3>
                        <p class="text-gray-600 text-sm">Meningkatkan transparansi pelaksanaan program kerja melalui sistem monitoring yang terintegrasi dan real-time.</p>
                    </div>

                    <div class="bg-white rounded-lg shadow-sm border border-gray-200 p-6 text-center">
                        <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <h3 class="font-bold text-gray-900 mb-3">Efisiensi Operasional</h3>
                        <p class="text-gray-600 text-sm">Mengoptimalkan proses monitoring dan pelaporan program kerja untuk meningkatkan efisiensi operasional.</p>
                    </div>

                    <div class="bg-white rounded-lg shadow-sm border border-gray-200 p-6 text-center">
                        <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                            </svg>
                        </div>
                        <h3 class="font-bold text-gray-900 mb-3">Kolaborasi Tim</h3>
                        <p class="text-gray-600 text-sm">Memperkuat koordinasi dan kolaborasi antar unit dalam pelaksanaan program kerja KEK BP Batam.</p>
                    </div>

                    <div class="bg-white rounded-lg shadow-sm border border-gray-200 p-6 text-center">
                        <div class="w-16 h-16 bg-orange-100 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="w-8 h-8 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                            </svg>
                        </div>
                        <h3 class="font-bold text-gray-900 mb-3">Pengambilan Keputusan</h3>
                        <p class="text-gray-600 text-sm">Menyediakan data akurat untuk mendukung pengambilan keputusan yang tepat dan tepat waktu.</p>
                    </div>

                    <div class="bg-white rounded-lg shadow-sm border border-gray-200 p-6 text-center">
                        <div class="w-16 h-16 bg-red-100 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="w-8 h-8 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                            </svg>
                        </div>
                        <h3 class="font-bold text-gray-900 mb-3">Keamanan Data</h3>
                        <p class="text-gray-600 text-sm">Memastikan keamanan dan kerahasiaan data program kerja dengan sistem kontrol akses berbasis peran.</p>
                    </div>

                    <div class="bg-white rounded-lg shadow-sm border border-gray-200 p-6 text-center">
                        <div class="w-16 h-16 bg-indigo-100 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="w-8 h-8 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                            </svg>
                        </div>
                        <h3 class="font-bold text-gray-900 mb-3">Inovasi Digital</h3>
                        <p class="text-gray-600 text-sm">Menerapkan teknologi digital modern untuk transformasi pengelolaan program kerja di era digital.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- System Info Section -->
    <div id="about" class="bg-white py-12">
        <div class="max-w-7xl mx-auto px-4">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-2xl font-bold text-gray-900 mb-4">Tentang Sistem</h2>
                    <div class="space-y-4 text-gray-600">
                        <p><strong>Sistem Monitoring Program Kerja Unit KEK BP Batam</strong> adalah platform digital terintegrasi yang dikembangkan khusus untuk mendukung pengelolaan program kerja di Kawasan Ekonomi Khusus Batam.</p>
                        <p>Sistem ini menyediakan solusi komprehensif untuk monitoring, pelacakan progress, dan pengelolaan program kerja secara real-time, memungkinkan staf dan kepala bagian bekerja lebih efektif dan efisien.</p>
                        <div class="mt-6">
                            <h3 class="font-semibold text-gray-900 mb-3">Fitur Utama:</h3>
                            <div class="grid grid-cols-1 gap-2">
                                <div class="flex items-center text-sm">
                                    <svg class="w-4 h-4 text-blue-600 mr-2 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                    <span>Dashboard interaktif dengan visualisasi data real-time</span>
                                </div>
                                <div class="flex items-center text-sm">
                                    <svg class="w-4 h-4 text-blue-600 mr-2 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                    <span>Manajemen program kerja dan distribusi tugas</span>
                                </div>
                                <div class="flex items-center text-sm">
                                    <svg class="w-4 h-4 text-blue-600 mr-2 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                    <span>Sistem assignment dan progress tracking otomatis</span>
                                </div>
                                <div class="flex items-center text-sm">
                                    <svg class="w-4 h-4 text-blue-600 mr-2 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                    <span>Laporan otomatis dan analisis performa terperinci</span>
                                </div>
                                <div class="flex items-center text-sm">
                                    <svg class="w-4 h-4 text-blue-600 mr-2 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                    <span>Role-based access control untuk keamanan data</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="text-center">
                    <img src="/assets/illustration.svg" alt="System Overview" class="w-full max-w-md mx-auto opacity-90">
                </div>
            </div>
        </div>
    </div>

    <!-- Help & Support Section -->
    <div id="help" class="bg-gray-50 py-12">
        <div class="max-w-7xl mx-auto px-4">
            <div class="text-center mb-8">
                <h2 class="text-2xl font-bold text-gray-900 mb-2">Bantuan & Dukungan</h2>
                <p class="text-gray-600">Panduan dan dukungan teknis untuk pengguna sistem</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="bg-white rounded-lg p-6 shadow-sm text-center">
                    <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                        </svg>
                    </div>
                    <h3 class="font-bold text-gray-900 mb-2">Panduan Pengguna</h3>
                    <p class="text-sm text-gray-600 mb-4">Pelajari cara menggunakan sistem monitoring program kerja</p>
                    <a href="#" class="text-blue-600 hover:text-blue-800 text-sm font-medium">Baca Panduan →</a>
                </div>

                <div class="bg-white rounded-lg p-6 shadow-sm text-center">
                    <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="font-bold text-gray-900 mb-2">FAQ</h3>
                    <p class="text-sm text-gray-600 mb-4">Pertanyaan yang sering diajukan tentang sistem</p>
                    <a href="#" class="text-green-600 hover:text-green-800 text-sm font-medium">Lihat FAQ →</a>
                </div>

                <div class="bg-white rounded-lg p-6 shadow-sm text-center">
                    <div class="w-12 h-12 bg-purple-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <h3 class="font-bold text-gray-900 mb-2">Hubungi Support</h3>
                    <p class="text-sm text-gray-600 mb-4">Butuh bantuan? Tim support siap membantu</p>
                    <a href="mailto:support@kek-batam.go.id" class="text-purple-600 hover:text-purple-800 text-sm font-medium">Email Support →</a>
                </div>
            </div>
        </div>
    </div>



    <!-- Footer -->
    <footer class="bg-[#0f2847] text-white py-12">
        <div class="max-w-7xl mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8 mb-8">
                <div>
                    <div class="flex items-center space-x-2 mb-4">
                        <img src="/assets/logo.svg" alt="BP Batam Logo" class="w-15 h-9">
                        <div>
                            <div class="font-bold text-lg">KEK BP Batam</div>
                            <div class="text-xs text-blue-300">Unit Monitoring Program Kerja</div>
                        </div>
                    </div>
                    <p class="text-sm text-blue-200 mb-4">Sistem monitoring program kerja untuk mendukung interoperabilitas data antar unit di Kawasan Ekonomi Khusus Batam.</p>
                </div>
                <div>
                    <h4 class="font-semibold mb-4">Menu Utama</h4>
                    <ul class="space-y-2 text-sm text-blue-200">
                        <li><a href="#dashboard" class="hover:text-white transition">Dashboard</a></li>
                        <li><a href="#programs" class="hover:text-white transition">Program Kerja</a></li>
                        <li><a href="#reports" class="hover:text-white transition">Laporan</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-semibold mb-4">Fitur</h4>
                    <ul class="space-y-2 text-sm text-blue-200">
                        <li><a href="#monitoring" class="hover:text-white transition">Program Monitoring</a></li>
                        <li><a href="#tracking" class="hover:text-white transition">Progress Tracking</a></li>
                        <li><a href="#analytics" class="hover:text-white transition">Data Analytics</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-semibold mb-4">Kontak</h4>
                    <p class="text-sm text-blue-200">Kawasan Ekonomi Khusus Batam<br>
                    BP Batam<br>
                    Indonesia</p>
                </div>
            </div>
            <div class="border-t border-white/10 pt-8 text-center">
                <p class="text-sm text-blue-200">Copyright ©2025 Unit KEK BP Batam. Hak cipta dilindungi</p>
            </div>
        </div>
    </footer>
</body>
</html>
