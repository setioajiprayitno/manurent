<x-app color="bg-black">
    <div class="min-h-100">
        <div class="relative block">
            <img src="assets/images/BG.png" alt="image"
                class="object-cover w-full bg-no-repeat md:h-80 brightness-[.4]">
            <h1
                class="absolute top-1/2 -translate-y-1/2 text-white md:w-[650px] md:leading-[100px] font-extrabold text-2xl md:text-6xl md:start-1/2 md:-translate-x-1/2 text-center">
                SEWA MOBIL CEPAT GAK PAKE RIBET!</h1>
        </div>

        @if (Route::has('login'))
            <div class="fixed top-0 right-0 hidden px-6 py-4 sm:block">
                @auth
                    <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline dark:text-gray-500">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="text-sm text-gray-700 underline dark:text-gray-500">Log in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}"
                            class="ml-4 text-sm text-gray-700 underline dark:text-gray-500">Register</a>
                    @endif
                @endauth
            </div>
        @endif

        <div class="top-0 w-full text-center font-poppins bg-[#D9D9D9] py-1 md:py-3">
            <h2 class="text-xl font-medium md:text-5xl font-jakartaSans">Cara Kerja</h2>
            <p class="my-3 text-base font-normal md:text-xl md:my-12 font-jakartaSans">
                Berikut adalah cara kerja pada sistem web kami.</p>
            <div class="flex flex-col items-center gap-6 md:justify-between md:mx-10 md:flex-row">
                <x-item-cara-kerja icon="location-dot" title="Pilih Lokasi"
                    subtitle="Tentukan lokasi penjemputan dan drop terlebih dahulu ya.." />
                <x-item-cara-kerja icon="calendar" title="Tanggal Pemesanan"
                    subtitle="Jangan lupa tentukan tanggal dan hari juga ya cuy, jangan ada yang salah." />
                <x-item-cara-kerja icon="car" title="Pilih Mobil"
                    subtitle="Pilih mobil kesukaanmu untuk menemani perjalananmu yang luar biasa." />
            </div>
        </div>

        <div class="w-full bg-[#FFB800] text-center space-y-4 md:space-y-8 p-3 md:p-8">
            <h1 class="text-2xl font-extrabold md:text-6xl">MANURENT.</h1>
            <p class="mx-auto text-base font-medium md:text-2xl">
                MANURENT adalah sebuah perusahaan yang bergerak di bidang penyewaan mobil untuk
                berbagai keperluan. Kami menyediakan berbagai jenis mobil yang berkualitas dan terawat
                dengan baik untuk memenuhi kebutuhan perjalanan dan transportasi Anda. Dengan pengalaman
                kami yang luas dalam industri ini, kami bertujuan untuk memberikan layanan
                rental mobil yang cepat, mudah, dan terpercaya kepada pelanggan kami.</p>
            <div class="flex gap-3">
                @for ($i = 0; $i < 4; $i++)
                    <div class="w-3 h-2 border-2 border-black rounded-full md:border-4 md:h-4 md:w-5"></div>
                @endfor
            </div>
        </div>
        <div class="p-3 text-center">
            <p class="text-xl font-semibold text-white md:text-4xl">Rekomendasi Mobil :</p>
            <p class="text-sm font-semibold text-white md:text-base">
                Kami menyiapkan beberapa rekomendasi mobil untuk anda</p>
            <div class="grid grid-cols-1 gap-3 my-8 md:mx-10 md:grid-cols-4">
                <x-item-rekomendasi-mobil src="AVANZA.png" title="All New Avanza" brand="Toyota" />
                <x-item-rekomendasi-mobil src="TERIOS.png" title="All New Terios" brand="Daihatsu" />
                <x-item-rekomendasi-mobil src="BRIO.png" title="Brio" brand="Honda" />
                <a href="car" class="w-full h-56">
                    <div class="bg-white rounded-[30px] flex flex-col justify-evenly h-full">
                        <p class="text-2xl font-medium">Show More</p>
                        <i class="text-5xl fa-solid fa-circle-plus"></i>
                    </div>
                </a>
            </div>
        </div>

        <x-footer />
    </div>
</x-app>
