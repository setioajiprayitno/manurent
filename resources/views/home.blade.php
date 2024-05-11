<x-app>
    <x-slot:color>
        bg-black
    </x-slot>
    <div class="relative min-h-100">
        <img src="assets/images/BG.png" alt="image" class="object-cover w-full bg-no-repeat h-80 brightness-[.4]">
        <div class="w-full bg-[#D9D9D9] h-[500px]"></div>
        <div class="w-full bg-[#FFB800] h-[420px]"></div>
        <div class="absolute top-0 text-center font-poppins">
            <h1 class="text-white w-[650px] leading-[100px] font-extrabold text-6xl mx-auto my-20">SEWA MOBIL
                CEPAT GAK
                PAKE RIBET!</h1>
            <h2 class="text-5xl font-medium font-jakartaSans">Cara Kerja</h2>
            <p class="my-12 text-lg font-normal font-jakartaSans">Berikut adalah cara kerja pada sistem web kami.</p>

            <div class="flex justify-between mx-10">
                <x-item-cara-kerja icon="location-dot" title="Pilih Lokasi"
                    subtitle="Tentukan lokasi penjemputan dan drop terlebih dahulu ya.." />
                <x-item-cara-kerja icon="calendar" title="Tanggal Pemesanan"
                    subtitle="Jangan lupa tentukan tanggal dan hari juga ya cuy, jangan ada yang salah." />
                <x-item-cara-kerja icon="car" title="Pilih Mobil"
                    subtitle="Pilih mobil kesukaanmu untuk menemani perjalananmu yang luar biasa." />
            </div>

            <h1 class="mt-16 mb-10 text-6xl font-extrabold">MANURENT.</h1>
            <p class="w-5/6 mx-auto text-2xl font-medium">MANURENT adalah sebuah perusahaan yang
                bergerak di bidang
                penyewaan mobil untuk
                berbagai keperluan. Kami menyediakan berbagai jenis mobil yang berkualitas dan terawat
                dengan baik untuk memenuhi kebutuhan perjalanan dan transportasi Anda. Dengan pengalaman
                kami yang luas dalam industri ini, kami bertujuan untuk memberikan layanan
                rental mobil yang cepat, mudah, dan terpercaya kepada pelanggan kami.</p>
            <div class="flex gap-3 ms-32 my-14">
                @for ($i = 0; $i < 4; $i++)
                    <div class="w-5 h-4 border-4 border-black rounded-full"></div>
                @endfor
            </div>
            <p class="my-4 text-4xl font-semibold text-white">Rekomendasi Mobil :</p>
            <p class="text-base font-semibold text-white">Kami menyiapkan beberapa rekomendasi mobil untuk anda</p>

            <div class="grid grid-cols-4 gap-3 mx-10 my-8">
                <x-item-rekomendasi-mobil src="AVANZA.png" title="All New Avanza" brand="Toyota" />
                <x-item-rekomendasi-mobil src="TERIOS.png" title="All New Terios" brand="Daihatsu" />
                <x-item-rekomendasi-mobil src="BRIO.png" title="Brio" brand="Honda" />
                <a href="car" class="h-56 w-72">
                    <div class="bg-white rounded-[30px] flex flex-col justify-evenly h-full">
                        <p class="text-2xl font-medium">Show More</p>
                        <i class="text-5xl fa-solid fa-circle-plus"></i>
                    </div>
                </a>
            </div>

            <x-footer />
        </div>
    </div>
</x-app>
