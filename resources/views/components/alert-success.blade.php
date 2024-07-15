<x-app>
    <div class="fixed top-0 flex flex-col justify-center w-full h-full bg-black/65 text-2lg">
        <div x-show="open" @click.outside="open = false" x-transition
            class="bg-[#FFF9EF] w-2/3 mx-auto flex flex-col items-center p-8 font-jakartaSans gap-6 rounded-xl transition-transform">
            <i class="text-6xl fa-regular fa-circle-check"></i>
            <h3 class="text-2xl font-bold">Pemesanan Berhasil!</h3>
            <p class="text-lg font-semibold text-center text-black/60">Terima kasih telah melakukan
                pemesanan
                mobil
                melalui website kami. Untuk info lebih lanjut, bisa
                melalui kontak yang tertera.</p>
            <a href="/" class="bg-[#FFC700] text-base font-semibold p-2 w-48 rounded-xl text-center">Ke
                Menu
                Utama</a>
        </div>
    </div>
</x-app>
