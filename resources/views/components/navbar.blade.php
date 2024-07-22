<div class="fixed top-0 right-0 hidden px-6 py-4 sm:block">
    @auth
        <a href="{{ route('dashboard') }}" class="text-sm text-gray-700 underline dark:text-gray-500">Dashboard</a>
    @else
        <x-primary-button type="anchor" href="{{ route('login') }}" title="Login" />
        <x-primary-button type="anchor" href="{{ route('register') }}" title="Register" />
    @endauth
</div>
