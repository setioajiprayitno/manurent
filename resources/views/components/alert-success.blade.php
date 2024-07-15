<x-app>
    <div class="fixed top-0 flex flex-col justify-center w-full h-full bg-black/65">
        <div x-show="open" @click.outside="open = false" x-transition
            class="bg-[#FFF9EF] w-full h-full md:h-fit md:w-2/3 mx-auto flex flex-col items-center p-8 font-jakartaSans gap-6 rounded-xl transition-transform justify-center">
            <i class="text-3xl md:text-6xl fa-regular fa-circle-check"></i>
            <h3 class="text-xl font-bold md:text-2xl">Pemesanan Berhasil!</h3>
            <p class="text-base font-semibold text-center md:text-lg text-black/60">
                Terima kasih telah melakukan pemesanan mobil melalui website kami. Untuk info lebih lanjut, bisa melalui
                kontak yang tertera.</p>
            <a href="{{ route('home') }}"
                class="w-48 p-2 text-sm font-semibold text-center md:text-base bg-philippineYellow rounded-xl">
                Ke Menu Utama</a>
        </div>
    </div>
</x-app>
