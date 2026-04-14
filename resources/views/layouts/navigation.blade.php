<nav x-data="{ open: false }" class="bg-[#0f2847] text-white shadow-lg">
    <div class="max-w-7xl mx-auto px-4">
        <div class="flex justify-between h-16">
            <div class="flex items-center">
                <!-- Logo -->
                <div class="flex items-center space-x-2">
                    <img src="/assets/logo.svg" alt="KEK BP Batam Logo" class="w-16 h-12">
                    <span class="font-bold text-lg">KEK BP Batam</span>
                </div>

                <!-- Navigation Links -->
                <div class="hidden md:flex items-center space-x-6 ml-8">
                    <a href="{{ route('dashboard') }}" class="hover:text-blue-300 transition px-3 py-2 rounded {{ request()->routeIs('dashboard') ? 'bg-blue-600' : '' }}">
                        Dashboard
                    </a>
                    <a href="{{ route('program-kerja.index') }}" class="hover:text-blue-300 transition px-3 py-2 rounded {{ request()->routeIs('program-kerja.*') ? 'bg-blue-600' : '' }}">
                        Program Kerja
                    </a>
                    @if(Auth::user()->role === 'kabag')
                        <a href="{{ route('pengguna.index') }}" class="hover:text-blue-300 transition px-3 py-2 rounded {{ request()->routeIs('pengguna.*') ? 'bg-blue-600' : '' }}">
                            Kelola Pengguna
                        </a>
                    @endif
                </div>
            </div>

            <!-- User Menu -->
            <div class="flex items-center space-x-4">
                <div class="hidden md:flex items-center space-x-2">
                    <span class="text-sm">{{ Auth::user()->name }}</span>
                    <span class="text-xs bg-blue-600 px-2 py-1 rounded">{{ Auth::user()->role === 'kabag' ? 'Kepala Bagian' : 'Staf' }}</span>
                </div>

                <!-- Dropdown -->
                <div class="relative" x-data="{ open: false }">
                    <button @click="open = !open" class="flex items-center space-x-2 hover:text-blue-300 transition">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                        </svg>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>

                    <div x-show="open" @click.away="open = false" x-transition class="absolute right-0 mt-2 w-48 bg-white rounded-lg shadow-lg py-1 z-50">
                        <div class="px-4 py-2 border-b border-gray-200">
                            <div class="font-medium text-gray-900">{{ Auth::user()->name }}</div>
                            <div class="text-sm text-gray-500">{{ Auth::user()->email }}</div>
                        </div>
                        <a href="{{ route('profile.edit') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Profile</a>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="block w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Logout</button>
                        </form>
                    </div>
                </div>

                <!-- Mobile menu button -->
                <button @click="open = !open" class="md:hidden p-2 rounded hover:bg-blue-600 transition">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path x-show="!open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        <path x-show="open" x-cloak stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div x-show="open" x-transition class="md:hidden border-t border-blue-600 mt-4 pt-4">
            <div class="space-y-2">
                <a href="{{ route('dashboard') }}" class="block px-3 py-2 rounded hover:bg-blue-600 transition {{ request()->routeIs('dashboard') ? 'bg-blue-600' : '' }}">Dashboard</a>
                <a href="{{ route('program-kerja.index') }}" class="block px-3 py-2 rounded hover:bg-blue-600 transition {{ request()->routeIs('program-kerja.*') ? 'bg-blue-600' : '' }}">Program Kerja</a>
                @if(Auth::user()->role === 'kabag')
                    <a href="{{ route('pengguna.index') }}" class="block px-3 py-2 rounded hover:bg-blue-600 transition {{ request()->routeIs('pengguna.*') ? 'bg-blue-600' : '' }}">Kelola Pengguna</a>
                @endif
            </div>
        </div>
    </div>
</nav>
