<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input-breeze class="w-full" type="text" name="name" value="{{ old('name') }}"
                placeholder="Masukkan Nama Anda" required />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input-breeze class="w-full" type="email" name="email" value="{{ old('email') }}"
                placeholder="Masukkan Email Anda" required />

            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Kata Sandi')" />
            <x-text-input-breeze class="w-full" type="password" name="password" placeholder="Masukkan Kata Sandi Anda"
                required />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Konfirmasi Kata Sandi')" />
            <x-text-input-breeze class="w-full" type="password" name="password_confirmation"
                placeholder="Konfirmasi Kata Sandi Anda" required />
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="text-sm text-gray-600 underline rounded-md hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                href="{{ route('login') }}">
                {{ __('Sudah Daftar?') }}
            </a>

            <x-primary-button class="ml-4" title="{{ __('Register') }}" />
        </div>
    </form>
</x-guest-layout>
