<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Program Kerja - Sistem Monitoring Program Kerja Unit KEK BP Batam</title>
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
                        <h1 class="text-white text-4xl font-semibold">Detail Program Kerja</h1>
                        <div class="flex gap-3">
                            @if(auth()->user()->isKabag() || $workProgram->created_by == auth()->id())
                            <a href="{{ route('program-kerja.edit', $workProgram) }}" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2.5 rounded-lg text-sm flex items-center gap-2">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                                </svg>
                                Edit Program
                            </a>
                            @endif
                            <a href="{{ route('program-kerja.index') }}" class="bg-neutral-800 hover:bg-neutral-700 text-gray-300 px-4 py-2.5 rounded-lg text-sm">
                                ← Kembali ke Daftar
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Program Details -->
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                    <!-- Main Details -->
                    <div class="lg:col-span-2 space-y-6">
                        <!-- Program Info -->
                        <div class="bg-neutral-900 rounded-2xl p-8">
                            <div class="flex items-start justify-between mb-6">
                                <div class="flex-1">
                                    <h2 class="text-white text-2xl font-bold mb-3">{{ $workProgram->name }}</h2>
                                    <span class="inline-flex px-3 py-1 text-sm font-semibold rounded-full
                                        {{ $workProgram->status === 'selesai' ? 'bg-green-900 text-green-300' :
                                           ($workProgram->status === 'sedang_proses' ? 'bg-blue-900 text-blue-300' : 'bg-yellow-900 text-yellow-300') }}">
                                        {{ ucfirst(str_replace('_', ' ', $workProgram->status)) }}
                                    </span>
                                </div>
                            </div>

                            <div class="space-y-4">
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                    <div>
                                        <h4 class="text-gray-400 text-sm font-medium mb-1">Dibuat Oleh</h4>
                                        <p class="text-white">{{ $workProgram->creator->name }}</p>
                                    </div>
                                    <div>
                                        <h4 class="text-gray-400 text-sm font-medium mb-1">Tanggal Dibuat</h4>
                                        <p class="text-white">{{ $workProgram->created_at->format('d M Y H:i') }}</p>
                                    </div>
                                    <div>
                                        <h4 class="text-gray-400 text-sm font-medium mb-1">Terakhir Diupdate</h4>
                                        <p class="text-white">{{ $workProgram->updated_at->format('d M Y H:i') }}</p>
                                    </div>
                                    <div>
                                        <h4 class="text-gray-400 text-sm font-medium mb-1">ID Program</h4>
                                        <p class="text-white font-mono">#{{ $workProgram->id }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Weekly Targets -->
                        <div class="bg-neutral-900 rounded-2xl p-8">
                            <div class="flex items-center justify-between mb-6">
                                <h3 class="text-white text-xl font-bold">📝 Target Mingguan</h3>
                                @if(auth()->user()->isKabag() || $workProgram->created_by == auth()->id())
                                <a href="{{ route('program-kerja.weekly-targets.create', $workProgram) }}" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2.5 rounded-lg text-sm flex items-center gap-2">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/>
                                    </svg>
                                    Tambah Target
                                </a>
                                @endif
                            </div>

                            @if($workProgram->weeklyTargets->count() > 0)
                                <div class="space-y-6">
                                    @foreach($workProgram->weeklyTargets as $target)
                                    <div class="bg-neutral-800 rounded-xl p-6">
                                        <div class="flex items-start justify-between mb-4">
                                            <div class="flex-1">
                                                <h4 class="text-white font-semibold text-lg mb-4">Uraian</h4>
                                                <p class="text-gray-300">{{ $target->uraian }}</p>
                                            </div>
                                            @if(auth()->user()->isKabag() || $workProgram->created_by == auth()->id())
                                            <div class="flex gap-2 ml-4">
                                                <a href="{{ route('program-kerja.weekly-targets.edit', [$workProgram, $target]) }}"
                                                   class="bg-blue-600 hover:bg-blue-700 text-white p-2 rounded-lg text-sm"
                                                   title="Edit Target"
                                                >
                                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                                                    </svg>
                                                </a>
                                                <form method="POST" action="{{ route('program-kerja.weekly-targets.destroy', [$workProgram, $target]) }}" class="inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit"
                                                            onclick="return confirm('Apakah Anda yakin ingin menghapus target mingguan ini?')"
                                                            class="bg-red-600 hover:bg-red-700 text-white p-2 rounded-lg text-sm"
                                                            title="Hapus Target"
                                                    >
                                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                                                        </svg>
                                                    </button>
                                                </form>
                                            </div>
                                            @endif
                                        </div>

                                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                                            <div>
                                                <h4 class="text-gray-400 text-sm font-medium mb-1">Realisasi Minggu Ini</h4>
                                                <p class="text-white">{{ $target->realisasi_minggu_ini ?: 'Belum ada data' }}</p>
                                            </div>
                                            <div>
                                                <h4 class="text-gray-400 text-sm font-medium mb-1">Keterangan</h4>
                                                <p class="text-white">{{ $target->keterangan ?: 'Belum ada data' }}</p>
                                            </div>
                                            <div>
                                                <h4 class="text-gray-400 text-sm font-medium mb-1">Target Minggu Berikut</h4>
                                                <p class="text-white">{{ $target->target_minggu_berikut ?: 'Belum ada data' }}</p>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            @else
                                <div class="text-center py-8">
                                    <div class="text-gray-400 mb-4">
                                        <svg class="w-12 h-12 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                        </svg>
                                    </div>
                                    <p class="text-gray-400">Belum ada target mingguan untuk program ini</p>
                                </div>
                            @endif
                        </div>

                        <!-- Assignments -->
                        <div class="bg-neutral-900 rounded-2xl p-8">
                            <div class="flex items-center justify-between mb-6">
                                <h3 class="text-white text-xl font-bold">👥 Penugasan</h3>
                                @if(auth()->user()->isKabag())
                                <button
                                    onclick="openAssignModal(); console.log('Modal opened')"
                                    class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2.5 rounded-lg text-sm flex items-center gap-2"
                                >
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/>
                                    </svg>
                                    Tugaskan Pengguna
                                </button>
                                @endif
                            </div>

                            @if($workProgram->assignments->count() > 0)
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                    @foreach($workProgram->assignments as $assignment)
                                    <div class="bg-neutral-800 rounded-xl p-4">
                                        <div class="flex items-center justify-between">
                                            <div class="flex items-center gap-3">
                                                <div class="w-10 h-10 bg-blue-600 rounded-full flex items-center justify-center text-white font-bold">
                                                    {{ strtoupper(substr($assignment->user->name, 0, 1)) }}
                                                </div>
                                                <div>
                                                    <p class="text-white font-medium">{{ $assignment->user->name }}</p>
                                                    <p class="text-gray-400 text-sm">{{ $assignment->user->role === 'kabag' ? 'Kepala Bagian' : 'Staf' }}</p>
                                                </div>
                                            </div>
                                            @if(auth()->user()->isKabag() || $workProgram->created_by == auth()->id())
                                            <form method="POST" action="{{ route('program-kerja.unassign', [$workProgram, $assignment->user]) }}" class="inline">
                                                @csrf
                                                @method('DELETE')
                                                <button
                                                    type="submit"
                                                    onclick="return confirm('Apakah Anda yakin ingin melepaskan {{ $assignment->user->name }} dari program ini?')"
                                                    class="text-red-400 hover:text-red-300 p-1"
                                                    title="Lepas tugas"
                                                >
                                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                                                    </svg>
                                                </button>
                                            </form>
                                            @endif
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            @else
                                <div class="text-center py-8">
                                    <div class="text-gray-400 mb-4">
                                        <svg class="w-12 h-12 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                        </svg>
                                    </div>
                                    <p class="text-gray-400">Belum ada penugasan untuk program ini</p>
                                </div>
                            @endif
                        </div>

                        <!-- Assign User Modal -->
                        <div
                            id="assign-modal"
                            class="fixed inset-0 overflow-y-auto px-4 py-6 sm:px-0 z-50"
                            style="display: none;"
                        >
                            <div class="fixed inset-0 transform transition-all">
                                <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
                            </div>

                            <div class="mb-6 bg-neutral-900 rounded-2xl overflow-hidden shadow-xl transform transition-all sm:w-full sm:mx-auto sm:max-w-2xl border border-neutral-700">
                                <form method="POST" action="{{ route('program-kerja.assign', $workProgram) }}" class="p-8">
                                    @csrf

                                    <div class="flex items-center gap-3 mb-6">
                                        <div class="w-12 h-12 bg-blue-600 rounded-lg flex items-center justify-center">
                                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/>
                                            </svg>
                                        </div>
                                        <div>
                                            <h2 class="text-white text-xl font-bold">Tugaskan Pengguna</h2>
                                            <p class="text-gray-400 text-sm">Pilih pengguna untuk ditugaskan ke program ini</p>
                                        </div>
                                    </div>

                                    <div class="mb-6">
                                        <label for="user_id" class="block text-white text-sm font-medium mb-2">
                                            Pilih Pengguna <span class="text-red-400">*</span>
                                        </label>
                                        <select
                                            id="user_id"
                                            name="user_id"
                                            class="w-full bg-neutral-800 text-gray-300 rounded-lg px-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-blue-500 border border-neutral-700"
                                            required
                                        >
                                            <option value="">-- Pilih Pengguna --</option>
                                            @php
                                                $assignedUserIds = $workProgram->assignments->pluck('user_id')->toArray();
                                                $availableUsers = \App\Models\User::whereNotIn('id', $assignedUserIds)
                                                                 ->where('role', 'staf')
                                                                 ->get();
                                            @endphp
                                            @foreach($availableUsers as $user)
                                            <option value="{{ $user->id }}">{{ $user->name }} ({{ $user->role === 'kabag' ? 'Kepala Bagian' : 'Staf' }})</option>
                                            @endforeach
                                        </select>
                                        @error('user_id')
                                            <p class="text-red-400 text-sm mt-1">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div class="flex justify-end gap-4">
                                        <button type="button" onclick="closeAssignModal()" class="bg-neutral-700 hover:bg-neutral-600 text-gray-300 font-medium py-2.5 px-6 rounded-lg text-sm transition">
                                            Batal
                                        </button>

                                        <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-medium py-2.5 px-6 rounded-lg text-sm flex items-center gap-2 transition">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                            </svg>
                                            Tugaskan
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <!-- Progress History -->
                    <div class="lg:col-span-1">
                        <div class="bg-neutral-900 rounded-2xl p-8">
                            <h3 class="text-white text-xl font-bold mb-6">📈 Riwayat Progress</h3>
                            @if($workProgram->progressHistories->count() > 0)
                                <div class="space-y-4">
                                    @foreach($workProgram->progressHistories as $progress)
                                    <div class="bg-neutral-800 rounded-xl p-4">
                                        <div class="flex items-start gap-3 mb-3">
                                            <div class="w-8 h-8 bg-blue-600 rounded-lg flex items-center justify-center text-white text-xs">
                                                {{ strtoupper(substr($progress->user->name ?? 'S', 0, 1)) }}
                                            </div>
                                            <div class="flex-1">
                                                <p class="text-white font-medium text-sm">{{ ucfirst(str_replace('_', ' ', $progress->status)) }}</p>
                                                <p class="text-gray-400 text-xs">{{ $progress->created_at->diffForHumans() }}</p>
                                            </div>
                                        </div>
                                        @if($progress->description)
                                        <p class="text-gray-400 text-sm">{{ $progress->description }}</p>
                                        @endif
                                    </div>
                                    @endforeach
                                </div>
                            @else
                                <div class="text-center py-8">
                                    <div class="text-gray-400 mb-4">
                                        <svg class="w-12 h-12 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                                        </svg>
                                    </div>
                                    <p class="text-gray-400 text-sm">Belum ada update progress</p>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function openAssignModal() {
            const modal = document.getElementById('assign-modal');
            if (modal) {
                modal.style.display = 'block';
                document.body.style.overflow = 'hidden';
            }
        }

        function closeAssignModal() {
            const modal = document.getElementById('assign-modal');
            if (modal) {
                modal.style.display = 'none';
                document.body.style.overflow = 'auto';
            }
        }

        // Close modal when clicking outside
        document.addEventListener('click', function(event) {
            const modal = document.getElementById('assign-modal');
            if (modal && event.target === modal) {
                closeAssignModal();
            }
        });

        // Close modal on escape key
        document.addEventListener('keydown', function(event) {
            if (event.key === 'Escape') {
                closeAssignModal();
            }
        });
    </script>

</body>
</html>
