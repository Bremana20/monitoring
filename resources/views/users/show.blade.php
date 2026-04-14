<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Pengguna - Sistem Monitoring Program Kerja Unit KEK BP Batam</title>
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
                    <input type="text" placeholder="Cari pengguna..." class="w-full bg-neutral-800 text-gray-300 rounded-lg px-4 py-2.5 pl-10 text-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
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
                        <a href="{{ route('program-kerja.index') }}" class="flex items-center gap-3 px-3 py-2.5 text-gray-400 hover:bg-neutral-800 rounded-lg cursor-pointer">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                            </svg>
                            <span class="text-sm">Program Kerja</span>
                        </a>
                        <a href="{{ route('pengguna.index') }}" class="flex items-center gap-3 px-3 py-2.5 bg-neutral-800 rounded-lg text-white cursor-pointer">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"/>
                            </svg>
                            <span class="text-sm">Kelola Pengguna</span>
                        </a>
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
                        <h1 class="text-white text-4xl font-semibold">Detail Pengguna</h1>
                        <div class="flex gap-3">
                            <a href="{{ route('pengguna.edit', $user) }}" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2.5 rounded-lg text-sm flex items-center gap-2">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                                </svg>
                                Edit Pengguna
                            </a>
                            <a href="{{ route('pengguna.index') }}" class="bg-neutral-800 hover:bg-neutral-700 text-gray-300 px-4 py-2.5 rounded-lg text-sm">
                                ← Kembali ke Daftar
                            </a>
                        </div>
                    </div>
                </div>

                <!-- User Details -->
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                    <!-- Main Details -->
                    <div class="lg:col-span-2 space-y-6">
                        <!-- User Info -->
                        <div class="bg-neutral-900 rounded-2xl p-8">
                            <div class="flex items-start justify-between mb-6">
                                <div class="flex-1">
                                    <div class="flex items-center gap-4 mb-4">
                                        <div class="w-16 h-16 bg-blue-600 rounded-full flex items-center justify-center text-white font-bold text-xl">
                                            {{ strtoupper(substr($user->name, 0, 1)) }}
                                        </div>
                                        <div>
                                            <h2 class="text-white text-2xl font-bold mb-1">{{ $user->name }}</h2>
                                            <span class="inline-flex px-3 py-1 text-sm font-semibold rounded-full
                                                {{ $user->role === 'kabag' ? 'bg-purple-900 text-purple-300' : 'bg-blue-900 text-blue-300' }}">
                                                {{ $user->role === 'kabag' ? 'Kepala Bagian' : 'Staf' }}
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="space-y-4">
                                <div>
                                    <h3 class="text-white text-lg font-medium mb-2">Informasi Akun</h3>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                        <div>
                                            <h4 class="text-gray-400 text-sm font-medium mb-1">Email</h4>
                                            <p class="text-white">{{ $user->email }}</p>
                                        </div>
                                        <div>
                                            <h4 class="text-gray-400 text-sm font-medium mb-1">Role</h4>
                                            <p class="text-white">{{ $user->role === 'kabag' ? 'Kepala Bagian' : 'Staf' }}</p>
                                        </div>
                                        <div>
                                            <h4 class="text-gray-400 text-sm font-medium mb-1">Bergabung</h4>
                                            <p class="text-white">{{ $user->created_at->format('d M Y H:i') }}</p>
                                        </div>
                                        <div>
                                            <h4 class="text-gray-400 text-sm font-medium mb-1">Terakhir Aktif</h4>
                                            <p class="text-white">{{ $user->updated_at->format('d M Y H:i') }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- User Statistics -->
                        <div class="bg-neutral-900 rounded-2xl p-8">
                            <h3 class="text-white text-xl font-bold mb-6">📊 Statistik Pengguna</h3>
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                                <div class="bg-neutral-800 rounded-xl p-4 text-center">
                                    <div class="text-2xl font-bold text-blue-400 mb-1">{{ $user->workPrograms()->count() }}</div>
                                    <div class="text-gray-400 text-sm">Program Dibuat</div>
                                </div>
                                <div class="bg-neutral-800 rounded-xl p-4 text-center">
                                    <div class="text-2xl font-bold text-green-400 mb-1">{{ $user->assignments()->count() }}</div>
                                    <div class="text-gray-400 text-sm">Penugasan</div>
                                </div>
                                <div class="bg-neutral-800 rounded-xl p-4 text-center">
                                    <div class="text-2xl font-bold text-purple-400 mb-1">{{ $user->activityLogs()->count() }}</div>
                                    <div class="text-gray-400 text-sm">Aktivitas</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Recent Activity -->
                    <div class="lg:col-span-1">
                        <div class="bg-neutral-900 rounded-2xl p-8">
                            <h3 class="text-white text-xl font-bold mb-6">📈 Aktivitas Terbaru</h3>
                            @if($user->activityLogs->count() > 0)
                                <div class="space-y-4">
                                    @foreach($user->activityLogs->take(5) as $activity)
                                    <div class="bg-neutral-800 rounded-xl p-4">
                                        <div class="flex items-start gap-3 mb-3">
                                            <div class="w-8 h-8 bg-blue-600 rounded-lg flex items-center justify-center text-white text-xs">
                                                {{ strtoupper(substr($user->name ?? 'U', 0, 1)) }}
                                            </div>
                                            <div class="flex-1">
                                                <p class="text-white font-medium text-sm">{{ $activity->description }}</p>
                                                <p class="text-gray-400 text-xs">{{ $activity->created_at->diffForHumans() }}</p>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            @else
                                <div class="text-center py-8">
                                    <div class="text-gray-400 mb-4">
                                        <svg class="w-12 h-12 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/>
                                        </svg>
                                    </div>
                                    <p class="text-gray-400 text-sm">Belum ada aktivitas</p>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
