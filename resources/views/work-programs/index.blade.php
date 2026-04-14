<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Program Kerja - Sistem Monitoring Program Kerja Unit KEK BP Batam</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
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
                        <h1 class="text-white text-4xl font-semibold">Program Kerja</h1>
                        <div class="flex gap-3">
                            <a href="{{ route('program-kerja.create') }}" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2.5 rounded-lg text-sm flex items-center gap-2">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                                </svg>
                                Buat Program Baru
                            </a>
                            <a href="{{ route('dashboard') }}" class="bg-neutral-800 hover:bg-neutral-700 text-gray-300 px-4 py-2.5 rounded-lg text-sm">
                                ← Kembali ke Dashboard
                            </a>
                        </div>
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

                <!-- Search and Filters -->
                <div class="bg-neutral-900 rounded-2xl p-6 mb-6">
                    <div class="flex items-center justify-between mb-6">
                        <h3 class="text-white text-lg font-medium">Filter & Pencarian</h3>
                    </div>
                    <form method="GET" class="flex gap-4">
                        <div class="flex-1">
                            <input type="text" name="search" value="{{ request('search') }}" placeholder="Cari berdasarkan nama atau deskripsi..." class="w-full bg-neutral-800 text-gray-300 rounded-lg px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
                        </div>
                        <select name="status" class="bg-neutral-800 text-gray-300 px-4 py-2.5 rounded-lg text-sm border-none outline-none">
                            <option value="">Semua Status</option>
                            <option value="belum_selesai" {{ request('status') === 'belum_selesai' ? 'selected' : '' }}>Belum Selesai</option>
                            <option value="sedang_proses" {{ request('status') === 'sedang_proses' ? 'selected' : '' }}>Sedang Proses</option>
                            <option value="selesai" {{ request('status') === 'selesai' ? 'selected' : '' }}>Selesai</option>
                        </select>
                        <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2.5 rounded-lg text-sm flex items-center gap-2">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                            </svg>
                            Cari
                        </button>
                    </form>
                </div>

                <!-- Programs Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    @forelse($workPrograms as $workProgram)
                    <div class="bg-neutral-900 rounded-2xl p-6 border border-neutral-800 hover:border-blue-500 transition">
                        <div class="flex items-start justify-between mb-4">
                            <div class="flex-1">
                                <h4 class="text-white font-medium mb-2 line-clamp-2">{{ $workProgram->name }}</h4>
                                <span class="inline-flex px-2 py-1 text-xs font-semibold rounded-full
                                    {{ $workProgram->status === 'selesai' ? 'bg-green-900 text-green-300' :
                                       ($workProgram->status === 'sedang_proses' ? 'bg-blue-900 text-blue-300' : 'bg-yellow-900 text-yellow-300') }}">
                                    {{ ucfirst(str_replace('_', ' ', $workProgram->status)) }}
                                </span>
                            </div>
                        </div>

                        <p class="text-gray-400 text-sm mb-4 line-clamp-3">{{ $workProgram->description }}</p>

                        <div class="flex items-center justify-between text-xs text-gray-500 mb-4">
                            <span>Dibuat oleh {{ $workProgram->creator->name }}</span>
                            <span>{{ $workProgram->created_at->diffForHumans() }}</span>
                        </div>

                        <div class="flex gap-2">
                            <a href="{{ route('program-kerja.show', $workProgram) }}" class="flex-1 bg-neutral-800 hover:bg-neutral-700 text-gray-300 px-3 py-2 rounded-lg text-sm text-center transition">
                                👁️ Lihat
                            </a>
                            @if(auth()->user()->isKabag() || $workProgram->created_by == auth()->id())
                            <a href="{{ route('program-kerja.edit', $workProgram) }}" class="flex-1 bg-blue-600 hover:bg-blue-700 text-white px-3 py-2 rounded-lg text-sm text-center transition">
                                ✏️ Edit
                            </a>
                            @endif
                        </div>
                    </div>
                    @empty
                    <div class="col-span-full text-center py-12">
                        <div class="text-gray-400 mb-4">
                            <svg class="w-16 h-16 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                            </svg>
                        </div>
                        <h3 class="text-white text-lg font-medium mb-2">Belum ada program kerja</h3>
                        <p class="text-gray-400 mb-4">Mulai dengan membuat program kerja pertama Anda</p>
                        <a href="{{ route('program-kerja.create') }}" class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-lg inline-flex items-center gap-2">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                            </svg>
                            Buat Program Kerja
                        </a>
                    </div>
                    @endforelse
                </div>

                <!-- Pagination -->
                @if($workPrograms->hasPages())
                <div class="mt-8 flex justify-center">
                    {{ $workPrograms->appends(request()->query())->links() }}
                </div>
                @endif
            </div>
        </div>
    </div>

</body>
</html>
