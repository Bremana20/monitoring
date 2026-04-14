<div class="space-y-6">
    <form method="post" action="{{ route('password.update') }}" class="space-y-6">
        @csrf
        @method('put')

        <div>
            <label for="update_password_current_password" class="block text-white text-sm font-medium mb-2">
                Password Lama <span class="text-red-400">*</span>
            </label>
            <input id="update_password_current_password" name="current_password" type="password" class="w-full bg-neutral-800 text-gray-300 rounded-lg px-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-blue-500 border border-neutral-700" autocomplete="current-password">
            @error('current_password')
                <p class="text-red-400 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="update_password_password" class="block text-white text-sm font-medium mb-2">
                Password Baru <span class="text-red-400">*</span>
            </label>
            <input id="update_password_password" name="password" type="password" class="w-full bg-neutral-800 text-gray-300 rounded-lg px-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-blue-500 border border-neutral-700" autocomplete="new-password">
            @error('password')
                <p class="text-red-400 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="update_password_password_confirmation" class="block text-white text-sm font-medium mb-2">
                Konfirmasi Password Baru <span class="text-red-400">*</span>
            </label>
            <input id="update_password_password_confirmation" name="password_confirmation" type="password" class="w-full bg-neutral-800 text-gray-300 rounded-lg px-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-blue-500 border border-neutral-700" autocomplete="new-password">
            @error('password_confirmation')
                <p class="text-red-400 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="flex items-center gap-4 pt-4">
            <button type="submit" class="bg-green-600 hover:bg-green-700 text-white font-medium py-3 px-6 rounded-lg text-sm flex items-center gap-2 transition">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                </svg>
                Update Password
            </button>

            @if (session('status') === 'password-updated')
                <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)" class="text-green-300 text-sm">
                    {{ __('Password berhasil diupdate.') }}
                </p>
            @endif
        </div>
    </form>
</div>
