<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buat Program Kerja - Sistem Monitoring Program Kerja Unit KEK BP Batam</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap');

        body {
            font-family: 'Inter', sans-serif;
        }

        .progress-bar {
            background: linear-gradient(90deg, #2563eb 0%, #1d4ed8 100%);
        }
    </style>
</head>
<body class="bg-black min-h-screen">

    <div class="w-full min-h-screen bg-black overflow-hidden">
        <div class="flex h-full">

            <!-- Sidebar -->
            <div class="w-72 bg-neutral-900 p-6 flex flex-col">
                <!-- Workspace -->
                <div class="flex items-center gap-3 mb-8 p-3 bg-neutral-800 rounded-lg">
                    <div class="w-20 h-20 bg-neutral-800 rounded-xl flex items-center justify-center p-2 shadow-lg">
                        <img src="/assets/logo.svg" alt="KEK BP Batam Logo" class="w-[100px] h-[30px]">
                    </div>
                    <div class="flex-1">
                        <div class="text-white text-sm font-medium">KEK BP Batam</div>
                        <div class="text-gray-400 text-xs">Sistem Monitoring</div>
                    </div>
                    <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                </div>

                <!-- Search -->
                <div class="relative mb-8">
                    <input type="text" placeholder="Cari program kerja..." class="w-full bg-neutral-800 text-gray-300 rounded-lg px-4 py-2.5 pl-10 text-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <svg class="w-4 h-4 text-gray-400 absolute left-3 top-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                    </svg>
                    <kbd class="absolute right-3 top-2.5 text-xs text-gray-500 bg-neutral-700 px-1.5 py-0.5 rounded">K</kbd>
                </div>

                <!-- Main Menu -->
                <div class="mb-6">
                    <div class="text-xs text-gray-500 font-semibold mb-3">MENU UTAMA</div>
                    <div class="space-y-1">
                        <a href="{{ route('dashboard') }}" class="flex items-center gap-3 px-3 py-2.5 text-gray-400 hover:bg-neutral-800 rounded-lg cursor-pointer">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                            </svg>
                            <span class="text-sm">Dashboard</span>
                        </a>
                        <a href="{{ route('program-kerja.index') }}" class="flex items-center gap-3 px-3 py-2.5 bg-neutral-800 rounded-lg text-white cursor-pointer">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                            </svg>
                            <span class="text-sm">Program Kerja</span>
                        </a>
                        @if(Auth::user()->role === 'kabag')
                        <a href="{{ route('pengguna.index') }}" class="flex items-center gap-3 px-3 py-2.5 text-gray-400 hover:bg-neutral-800 rounded-lg cursor-pointer">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"/>
                            </svg>
                            <span class="text-sm">Kelola Pengguna</span>
                        </a>
                        @endif
                    </div>
                </div>

                <!-- Settings -->
                <div class="mb-6">
                    <div class="text-xs text-gray-500 font-semibold mb-3">PENGATURAN</div>
                    <div class="space-y-1">
                        <a href="{{ route('profile.edit') }}" class="flex items-center gap-3 px-3 py-2.5 text-gray-400 hover:bg-neutral-800 rounded-lg cursor-pointer">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                            </svg>
                            <span class="text-sm">Profil</span>
                        </a>
                    </div>
                </div>

                <!-- User Profile -->
                <div class="mt-auto pt-6 border-t border-neutral-800">
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 bg-blue-600 rounded-full flex items-center justify-center text-white font-bold">
                            {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}
                        </div>
                        <div class="flex-1">
                            <div class="text-white text-sm font-medium">{{ Auth::user()->name }}</div>
                            <div class="text-gray-400 text-xs">{{ Auth::user()->role === 'kabag' ? 'Kepala Bagian' : 'Staf' }}</div>
                        </div>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button class="text-gray-400 hover:text-white">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M3 3a1 1 0 00-1 1v12a1 1 0 102 0V4a1 1 0 00-1-1zm10.293 9.293a1 1 0 001.414 1.414l3-3a1 1 0 000-1.414l-3-3a1 1 0 10-1.414 1.414L14.586 9H7a1 1 0 100 2h7.586l-1.293 1.293z" clip-rule="evenodd"/>
                                </svg>
                            </button>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Main Content -->
            <div class="flex-1 bg-black p-8 overflow-y-auto">
                <!-- Header -->
                <div class="mb-8">
                    <div class="flex items-center justify-between mb-6">
                        <h1 class="text-white text-4xl font-semibold">Buat Program Kerja KEK Baru</h1>
                        <a href="{{ route('program-kerja.index') }}" class="bg-neutral-800 hover:bg-neutral-700 text-gray-300 px-4 py-2.5 rounded-lg text-sm">
                            ← Kembali ke Daftar
                        </a>
                    </div>
                </div>

                <!-- Success/Error Messages -->
                @if(session('success'))
                    <div class="mb-6 bg-green-900 border border-green-700 text-green-300 px-4 py-3 rounded-lg">
                        {{ session('success') }}
                    </div>
                @endif

                @if(session('error'))
                    <div class="mb-6 bg-red-900 border border-red-700 text-red-300 px-4 py-3 rounded-lg">
                        {{ session('error') }}
                    </div>
                @endif

                <!-- Form -->
                <div class="bg-neutral-900 rounded-2xl p-8">
                    <form method="POST" action="{{ route('program-kerja.store') }}" class="space-y-6">
                        @csrf

                        <h3 class="text-white text-lg font-semibold mb-6">Program Kerja KEK</h3>

                        <!-- Form Fields -->
                        <div class="space-y-6">
                            <!-- Nama Program -->
                            <div>
                                <label for="name" class="block text-white text-sm font-medium mb-2">
                                    Nama Program <span class="text-red-400">*</span>
                                </label>
                                <input type="text" name="name" id="name" value="{{ old('name') }}"
                                       class="w-full bg-neutral-800 text-gray-300 rounded-lg px-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-blue-500 border border-neutral-700"
                                       placeholder="Masukkan nama program kerja" required>
                                @error('name')
                                    <p class="text-red-400 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Uraian -->
                            <div>
                                <label for="uraian" class="block text-white text-sm font-medium mb-2">
                                    Uraian <span class="text-red-400">*</span>
                                </label>
                                <textarea
                                    id="uraian"
                                    name="uraian"
                                    rows="4"
                                    class="w-full bg-neutral-800 text-gray-300 rounded-lg px-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-blue-500 border border-neutral-700"
                                    placeholder="Deskripsikan aktivitas yang akan dilakukan..."
                                    required
                                >{{ old('uraian') }}</textarea>
                                @error('uraian')
                                    <p class="text-red-400 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Realisasi Minggu Ini -->
                            <div>
                                <label for="realisasi_minggu_ini" class="block text-white text-sm font-medium mb-2">
                                    Realisasi Minggu Ini
                                </label>
                                <textarea
                                    id="realisasi_minggu_ini"
                                    name="realisasi_minggu_ini"
                                    rows="4"
                                    class="w-full bg-neutral-800 text-gray-300 rounded-lg px-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-blue-500 border border-neutral-700"
                                    placeholder="Jelaskan apa yang telah dicapai minggu ini..."
                                >{{ old('realisasi_minggu_ini') }}</textarea>
                                @error('realisasi_minggu_ini')
                                    <p class="text-red-400 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Keterangan -->
                            <div>
                                <label for="keterangan" class="block text-white text-sm font-medium mb-2">
                                    Keterangan
                                </label>
                                <textarea
                                    id="keterangan"
                                    name="keterangan"
                                    rows="4"
                                    class="w-full bg-neutral-800 text-gray-300 rounded-lg px-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-blue-500 border border-neutral-700"
                                    placeholder="Tambahkan catatan atau penjelasan tambahan..."
                                >{{ old('keterangan') }}</textarea>
                                @error('keterangan')
                                    <p class="text-red-400 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Target Minggu Berikut -->
                            <div>
                                <label for="target_minggu_berikut" class="block text-white text-sm font-medium mb-2">
                                    Target Minggu Berikut
                                </label>
                                <textarea
                                    id="target_minggu_berikut"
                                    name="target_minggu_berikut"
                                    rows="4"
                                    class="w-full bg-neutral-800 text-gray-300 rounded-lg px-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-blue-500 border border-neutral-700"
                                    placeholder="Tentukan target yang akan dicapai minggu depan..."
                                >{{ old('target_minggu_berikut') }}</textarea>
                                @error('target_minggu_berikut')
                                    <p class="text-red-400 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Status -->
                            <div>
                                <label for="status" class="block text-white text-sm font-medium mb-2">
                                    Status
                                </label>
                                <select name="status" id="status"
                                        class="w-full bg-neutral-800 text-gray-300 rounded-lg px-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-blue-500 border border-neutral-700">
                                    <option value="belum_selesai" {{ old('status') === 'belum_selesai' ? 'selected' : '' }}>Belum Selesai</option>
                                    <option value="sedang_proses" {{ old('status') === 'sedang_proses' ? 'selected' : '' }}>Sedang Proses</option>
                                    <option value="selesai" {{ old('status') === 'selesai' ? 'selected' : '' }}>Selesai</option>
                                </select>
                                @error('status')
                                    <p class="text-red-400 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="flex gap-4 pt-8 border-t border-neutral-700">
                            <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-medium py-3 px-6 rounded-lg text-sm flex items-center gap-2 transition">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                                </svg>
                                Simpan Program
                            </button>
                            <a href="{{ route('program-kerja.index') }}" class="bg-neutral-800 hover:bg-neutral-700 text-gray-300 font-medium py-3 px-6 rounded-lg text-sm transition">
                                Batal
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
