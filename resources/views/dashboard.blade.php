<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Sistem Monitoring Program Kerja Unit KEK BP Batam</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
</head>
<body class="bg-black min-h-screen">

    <div class="w-full h-screen bg-black overflow-hidden">
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
                    <input type="text" placeholder="Cari program kerja..." class="w-full bg-neutral-800 text-gray-300 rounded-lg px-4 py-2.5 pl-10 text-sm focus:outline-none focus:ring-2 focus:ring-purple-500">
                    <svg class="w-4 h-4 text-gray-400 absolute left-3 top-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                    </svg>
                    <kbd class="absolute right-3 top-2.5 text-xs text-gray-500 bg-neutral-700 px-1.5 py-0.5 rounded">K</kbd>
                </div>

                <!-- Main Menu -->
                <div class="mb-6">
                    <div class="text-xs text-gray-500 font-semibold mb-3">MENU UTAMA</div>
                    <div class="space-y-1">
                        <a href="{{ route('dashboard') }}" class="flex items-center gap-3 px-3 py-2.5 bg-neutral-800 rounded-lg text-white cursor-pointer">
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
                        <div class="w-10 h-10 bg-purple-600 rounded-full flex items-center justify-center text-white font-bold">
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
                        <h1 class="text-white text-4xl font-semibold">Selamat Datang, {{ Auth::user()->name }}</h1>
                        <div class="flex gap-3">
                            <a href="{{ route('program-kerja.create') }}" class="bg-purple-600 hover:bg-purple-700 text-white px-4 py-2.5 rounded-lg text-sm flex items-center gap-2">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                                </svg>
                                Buat Program Baru
                            </a>
                            @if(Auth::user()->role === 'kabag')
                            <a href="{{ route('pengguna.create') }}" class="bg-neutral-800 hover:bg-neutral-700 text-gray-300 px-4 py-2.5 rounded-lg text-sm flex items-center gap-2">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"/>
                                </svg>
                                Tambah Pengguna
                            </a>
                            @endif
                        </div>
                    </div>
                </div>

                <!-- Dashboard Cards -->
                <div class="grid grid-cols-3 gap-6 mb-6">
                    <!-- Program Statistics Card -->
                    <div class="bg-neutral-900 rounded-2xl p-6">
                        <div class="flex items-center justify-between mb-6">
                            <h3 class="text-white text-lg font-medium">Statistik Program</h3>
                            <button class="text-gray-400 hover:text-white">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/>
                                </svg>
                            </button>
                        </div>
                        <div class="flex items-center gap-8">
                            <div class="relative w-32 h-32">
                                <svg class="w-32 h-32 transform -rotate-90">
                                    <circle cx="64" cy="64" r="56" fill="none" stroke="#333" stroke-width="16"/>
                                    <circle cx="64" cy="64" r="56" fill="none" stroke="#a855f7" stroke-width="16" stroke-dasharray="352" stroke-dashoffset="{{ 352 - (352 * \App\Models\WorkProgram::where('status', 'selesai')->count() / max(\App\Models\WorkProgram::count(), 1)) }}" stroke-linecap="round"/>
                                    <circle cx="64" cy="64" r="56" fill="none" stroke="#ec4899" stroke-width="16" stroke-dasharray="352" stroke-dashoffset="{{ 352 - (352 * \App\Models\WorkProgram::where('status', 'sedang_proses')->count() / max(\App\Models\WorkProgram::count(), 1)) }}" stroke-linecap="round"/>
                                </svg>
                            </div>
                            <div class="space-y-3">
                                <div class="flex items-center gap-3">
                                    <div class="w-1 h-6 bg-purple-500 rounded"></div>
                                    <div>
                                        <div class="text-white text-2xl font-bold">{{ \App\Models\WorkProgram::where('status', 'selesai')->count() }}</div>
                                        <div class="text-gray-400 text-xs">Selesai</div>
                                    </div>
                                </div>
                                <div class="flex items-center gap-3">
                                    <div class="w-1 h-6 bg-pink-500 rounded"></div>
                                    <div>
                                        <div class="text-white text-2xl font-bold">{{ \App\Models\WorkProgram::where('status', 'sedang_proses')->count() }}</div>
                                        <div class="text-gray-400 text-xs">Sedang Proses</div>
                                    </div>
                                </div>
                                <div class="flex items-center gap-3">
                                    <div class="w-1 h-6 bg-neutral-600 rounded"></div>
                                    <div>
                                        <div class="text-white text-2xl font-bold">{{ \App\Models\WorkProgram::where('status', 'belum_selesai')->count() }}</div>
                                        <div class="text-gray-400 text-xs">Belum Selesai</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- User Statistics Card -->
                    <div class="bg-neutral-900 rounded-2xl p-6">
                        <div class="flex items-center justify-between mb-6">
                            <h3 class="text-white text-lg font-medium">Statistik Pengguna</h3>
                            <button class="text-gray-400 hover:text-white">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7h12M8 12h12m-7 5h7"/>
                                </svg>
                            </button>
                        </div>
                        <div class="flex items-center justify-center mb-4">
                            <div class="text-white text-4xl font-bold">{{ \App\Models\User::count() }}</div>
                            <div class="text-gray-400 text-sm ml-2">Total Pengguna</div>
                        </div>
                        <div class="flex items-center gap-0.5 mb-4 h-24">
                            <div class="flex-1 bg-purple-400 h-{{ \App\Models\User::where('role', 'kabag')->count() * 8 }} rounded-sm"></div>
                            <div class="flex-1 bg-white h-{{ \App\Models\User::where('role', 'staf')->count() * 8 }} rounded-sm"></div>
                        </div>
                        <div class="flex justify-between text-gray-400 text-sm">
                            <div>
                                <div class="text-white text-xl font-bold">{{ \App\Models\User::where('role', 'kabag')->count() }}</div>
                                <div class="text-xs">Kepala Bagian</div>
                            </div>
                            <div>
                                <div class="text-white text-xl font-bold">{{ \App\Models\User::where('role', 'staf')->count() }}</div>
                                <div class="text-xs">Staf</div>
                            </div>
                        </div>
                    </div>

                    <!-- Activity Card -->
                    <div class="bg-neutral-900 rounded-2xl p-6">
                        <div class="flex items-center justify-between mb-6">
                            <h3 class="text-white text-lg font-medium">Aktivitas Hari Ini</h3>
                            <select class="bg-neutral-800 text-gray-300 px-3 py-1.5 rounded-lg text-sm border-none outline-none">
                                <option>Hari Ini</option>
                                <option>Minggu Ini</option>
                                <option>Bulan Ini</option>
                            </select>
                        </div>
                        <div class="relative h-40">
                            <div class="absolute inset-x-0 bottom-0 flex items-end justify-between gap-2">
                                @for($i = 0; $i < 7; $i++)
                                <div class="flex-1 flex flex-col items-center">
                                    <div class="w-full bg-purple-400 rounded-t-lg" style="height: {{ rand(20, 100) }}px;"></div>
                                    <div class="text-gray-400 text-xs mt-2">{{ \Carbon\Carbon::now()->subDays(6-$i)->format('D') }}</div>
                                </div>
                                @endfor
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Bottom Section -->
                <div class="grid grid-cols-3 gap-6">
                    <!-- Recent Programs -->
                    <div class="col-span-2 bg-neutral-900 rounded-2xl p-6">
                        <div class="flex items-center justify-between mb-6">
                            <h3 class="text-white text-xl font-medium">Program Kerja Terbaru</h3>
                            <div class="flex items-center gap-3">
                                <a href="{{ route('program-kerja.index') }}" class="bg-neutral-800 text-gray-300 px-4 py-2 rounded-lg text-sm">
                                    Lihat Semua
                                </a>
                                <a href="{{ route('program-kerja.create') }}" class="bg-purple-600 hover:bg-purple-700 text-white px-4 py-2 rounded-lg text-sm flex items-center gap-2">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                                    </svg>
                                    Tambah Program
                                </a>
                            </div>
                        </div>

                        <!-- Programs List -->
                        <div class="space-y-4">
                            @forelse(\App\Models\WorkProgram::latest()->take(4)->get() as $program)
                            <div class="bg-neutral-800 rounded-xl p-4 border-l-2 border-purple-500">
                                <div class="flex items-start justify-between mb-3">
                                    <div>
                                        <h4 class="text-white font-medium mb-1">{{ Str::limit($program->name, 40) }}</h4>
                                        <p class="text-gray-400 text-xs">{{ $program->creator->name }} • {{ $program->created_at->diffForHumans() }}</p>
                                    </div>
                                    <span class="inline-flex px-2 py-1 text-xs font-semibold rounded-full
                                        {{ $program->status === 'selesai' ? 'bg-green-100 text-green-800' :
                                           ($program->status === 'sedang_proses' ? 'bg-blue-100 text-blue-800' : 'bg-yellow-100 text-yellow-800') }}">
                                        {{ ucfirst(str_replace('_', ' ', $program->status)) }}
                                    </span>
                                </div>
                                <p class="text-gray-400 text-sm mb-3">{{ Str::limit($program->description, 100) }}</p>
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center gap-3 text-gray-400 text-xs">
                                        <span class="flex items-center gap-1">
                                            👁️ Lihat Detail
                                        </span>
                                        @if(auth()->user()->isKabag() || $program->created_by == auth()->id())
                                        <span class="flex items-center gap-1">
                                            ✏️ Edit
                                        </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            @empty
                            <div class="text-center py-8">
                                <div class="text-gray-400 mb-4">
                                    <svg class="w-12 h-12 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                                    </svg>
                                </div>
                                <p class="text-gray-400">Belum ada program kerja</p>
                            </div>
                            @endforelse
                        </div>
                    </div>

                    <!-- Recent Activities -->
                    <div class="bg-neutral-900 rounded-2xl p-6">
                        <div class="flex items-center justify-between mb-6">
                            <div class="flex items-center gap-2">
                                <h3 class="text-white text-xl font-medium">Aktivitas Terbaru</h3>
                                <span class="bg-purple-600 text-white text-xs px-2 py-1 rounded-full">{{ \App\Models\ActivityLog::count() }}</span>
                            </div>
                            <button class="text-gray-400 hover:text-white">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/>
                                </svg>
                            </button>
                        </div>

                        <!-- Activities List -->
                        <div class="space-y-4">
                            @forelse(\App\Models\ActivityLog::latest()->take(5)->get() as $activity)
                            <div class="bg-neutral-800 rounded-xl p-4">
                                <div class="flex items-start gap-3 mb-3">
                                    <div class="w-8 h-8 bg-purple-600 rounded-lg flex items-center justify-center text-white text-xs">
                                        {{ strtoupper(substr($activity->user->name ?? 'S', 0, 1)) }}
                                    </div>
                                    <div class="flex-1">
                                        <p class="text-white font-medium text-sm">{{ $activity->description }}</p>
                                        <p class="text-gray-400 text-xs">{{ $activity->created_at->diffForHumans() }}</p>
                                    </div>
                                </div>
                            </div>
                            @empty
                            <div class="text-center py-8">
                                <div class="text-gray-400 mb-4">
                                    <svg class="w-12 h-12 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/>
                                    </svg>
                                </div>
                                <p class="text-gray-400 text-sm">Belum ada aktivitas</p>
                            </div>
                            @endforelse
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
