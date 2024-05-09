<x-app>
    <div class="min-h-100 font-poppins text-center">
        <h1 class="text-white w-[650px] leading-[100px] font-extrabold text-6xl mx-auto my-20">SEWA MOBIL
            CEPAT GAK
            PAKE RIBET!</h1>
        <h2 class="font-jakartaSans font-medium text-5xl">Cara Kerja</h2>
        <p class="font-jakartaSans font-normal text-lg my-12">Berikut adalah cara kerja pada sistem web kami.</p>

        <div class="flex justify-between mx-10">
            <x-item-cara-kerja icon="location-dot" title="Pilih Lokasi"
                subtitle="Tentukan lokasi penjemputan dan drop terlebih dahulu ya.." />
            <x-item-cara-kerja icon="calendar" title="Tanggal Pemesanan"
                subtitle="Jangan lupa tentukan tanggal dan hari juga ya cuy, jangan ada yang salah." />
            <x-item-cara-kerja icon="car" title="Pilih Mobil"
                subtitle="Pilih mobil kesukaanmu untuk menemani perjalananmu yang luar biasa." />
        </div>

        <h1 class="text-6xl font-extrabold mb-10 mt-16">MANURENT.</h1>
        <p class="font-medium text-2xl w-5/6 mx-auto">MANURENT adalah sebuah perusahaan yang
            bergerak di bidang
            penyewaan mobil untuk
            berbagai keperluan. Kami menyediakan berbagai jenis mobil yang berkualitas dan terawat
            dengan baik untuk memenuhi kebutuhan perjalanan dan transportasi Anda. Dengan pengalaman
            kami yang luas dalam industri ini, kami bertujuan untuk memberikan layanan
            rental mobil yang cepat, mudah, dan terpercaya kepada pelanggan kami.</p>
        <div class="flex gap-3 ms-32 my-14">
            @for ($i = 0; $i < 4; $i++)
                <div class="w-5 h-4 rounded-full border-4 border-black"></div>
            @endfor
        </div>
        <p class="font-semibold text-4xl text-white my-4">Rekomendasi Mobil :</p>
        <p class="font-semibold text-base text-white">Kami menyiapkan beberapa rekomendasi mobil untuk anda</p>

        <div class="grid grid-cols-4 gap-3 mx-10 my-8">
            <x-item-rekomendasi-mobil src="AVANZA.png" title="All New Avanza" brand="Toyota" />
            <x-item-rekomendasi-mobil src="TERIOS.png" title="All New Terios" brand="Daihatsu" />
            <x-item-rekomendasi-mobil src="BRIO.png" title="Brio" brand="Honda" />
            <a href="car" class="w-72 h-56">
                <div class="bg-white rounded-[30px] flex flex-col justify-evenly h-full">
                    <p class="font-medium text-2xl">Show More</p>
                    <i class="fa-solid fa-circle-plus text-5xl"></i>
                </div>
            </a>
        </div>

        <x-footer />
    </div>

</x-app>
