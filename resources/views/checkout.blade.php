<x-app>
    <x-slot:color>
        bg-[#FFF9EF]
    </x-slot>

    <div class="container p-6 mx-auto my-8 bg-white font-jakartaSans rounded-xl">
        <h5 class="text-xl font-bold">Billing Info</h5>
        <form action="{{ route('booking.send')}}" method="POST">
            @csrf
        <p class="text-[#90A3BF] font-medium">Masukkan Data Anda</p>
        <div class="grid grid-cols-2 mt-12 gap-x-8 gap-y-10">
            <div>
                <label for="name" class="block text-base font-semibold text-[#1A202C]">Nama</label>
                <div class="mt-4">
                    <div
                        class="flex rounded-md shadow-sm bg-[#FFEDCB] ring-1 ring-inset ring-[#FFEDCB] focus-within:ring-2 focus-within:ring-inset focus-within:ring-yellow-700">
                        <input type="text" name="name" id="name" autocomplete="name"
                            class="block flex-1 border-0 bg-transparent py-4 pl-6 text-gray-900 placeholder:text-[#90A3BF] focus:ring-0"
                            placeholder="Nama">
                    </div>
                </div>
            </div>

            <div>
                <label for="phoneNumber" class="block text-base font-semibold text-[#1A202C]">No. HP</label>
                <div class="mt-4">
                    <div
                        class="flex rounded-md shadow-sm bg-[#FFEDCB] ring-1 ring-inset ring-[#FFEDCB] focus-within:ring-2 focus-within:ring-inset focus-within:ring-yellow-700">
                        <input type="text" name="phoneNumber" id="phoneNumber" autocomplete="phoneNumber"
                            class="block flex-1 border-0 bg-transparent py-4 pl-6 text-gray-900 placeholder:text-[#90A3BF] focus:ring-0"
                            placeholder="No. HP">
                    </div>
                </div>
            </div>

            <div>
                <label for="address" class="block text-base font-semibold text-[#1A202C]">Alamat</label>
                <div class="mt-4">
                    <div
                        class="flex rounded-md shadow-sm bg-[#FFEDCB] ring-1 ring-inset ring-[#FFEDCB] focus-within:ring-2 focus-within:ring-inset focus-within:ring-yellow-700 ">
                        <input type="text" name="address" id="address" autocomplete="address"
                            class="block flex-1 border-0 bg-transparent py-4 pl-6 text-gray-900 placeholder:text-[#90A3BF] focus:ring-0"
                            placeholder="Alamat">
                    </div>
                </div>
            </div>

            <div>
                <label for="email" class="block text-base font-semibold text-[#1A202C]">E-mail</label>
                <div class="mt-4">
                    <div
                        class="flex rounded-md shadow-sm bg-[#FFEDCB] ring-1 ring-inset ring-[#FFEDCB] focus-within:ring-2 focus-within:ring-inset focus-within:ring-yellow-700 ">
                        <input type="email" name="email" id="email" autocomplete="email"
                            class="block flex-1 border-0 bg-transparent py-4 pl-6 text-gray-900 placeholder:text-[#90A3BF] focus:ring-0"
                            placeholder="E-mail">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container p-6 mx-auto my-8 bg-white font-jakartaSans rounded-xl">
        <h5 class="text-xl font-bold">Data Rental</h5>
        <p class="text-[#90A3BF] font-medium">Isi Data Rental Pilihan Anda</p>
        <div class="grid grid-cols-2 mt-12 gap-x-8 gap-y-10">
            <div x-data="{
                open: false,
                active: false,
                items: ['CRV', 'BRV', 'Brio'],
                selected: 'Pilih Mobil',
                click(selected) {
                    this.selected = selected;
                    this.active = true;
                }
            }">
                <x-form-dropdown title="Jenis Mobil" name="jenisMobil" />
            </div>

            <div x-data="{
                open: false,
                active: false,
                items: ['Manual', 'Matic'],
                selected: 'Pilih Transmisi',
                click(selected) {
                    this.selected = selected;
                    this.active = true;
                }
            }">
                <x-form-dropdown title="Transmisi" name="transmisi" />
            </div>

            <div>
                <label for="time" class="block text-base font-semibold text-[#1A202C]">Jam</label>
                <div class="mt-4">
                    <div x-data="{ empty: true }"
                        class="flex rounded-md shadow-sm bg-[#FFEDCB] ring-1 ring-inset ring-[#FFEDCB] focus-within:ring-2 focus-within:ring-inset focus-within:ring-yellow-700">
                        <input x-data="" type="time" name="time" id="time" autocomplete="time"
                            class="flex-1 block py-4 pl-6 text-gray-900 bg-transparent border-0 focus:ring-0">
                    </div>
                </div>
                <div class="grid grid-cols-2 mt-4">
                    <div class="flex gap-4 items-center">
                        <input type="radio" class="focus:ring-yellow-700 text-yellow-700 checked:bg-yellow-700 "
                            name="driver" id="with-driver" value="1" />
                        <label for="with-driver">Dengan Supir</label>
                    </div>
                    <div class="flex gap-4 items-center">
                        <input type="radio" class="focus:ring-yellow-700 text-yellow-700 checked:bg-yellow-700 "
                            name="driver" id="without-driver" value="0" />
                        <label for="without-driver">Tanpa Supir</label>
                    </div>
                </div>
            </div>

            <div>
                <label for="date" class="block text-base font-semibold text-[#1A202C]">Jam</label>
                <div class="mt-4">
                    <div
                        class="flex rounded-md shadow-sm bg-[#FFEDCB] ring-1 ring-inset ring-[#FFEDCB] focus-within:ring-2 focus-within:ring-inset focus-within:ring-yellow-700">
                        <input type="date" name="date" id="date" autocomplete="date"
                            class="flex-1 block py-4 pl-6 text-gray-900 bg-transparent border-0 focus:ring-0">
                    </div>
                </div>
            </div>

        </div>

    </div>

    <div x-data="{ open: false }" class="flex justify-center mb-16">
        <button @click="open = !open" class="bg-[#FFC700] text-base font-semibold p-2 w-72 rounded">Booking
            Sekarang</button>
        <div x-show="open" class="fixed top-0 flex flex-col justify-center w-full h-full bg-black/65 text-2lg">
            <div x-show="open" @click.outside="open = false" x-transition
                class="bg-[#FFF9EF] w-2/3 mx-auto flex flex-col items-center p-8 font-jakartaSans gap-6 rounded-xl transition-transform">
                <i class="text-6xl fa-regular fa-circle-check"></i>
                <h3 class="text-2xl font-bold">Pemesanan Berhasil!</h3>
                <p class="text-lg font-semibold text-center text-black/60">Terima kasih telah melakukan pemesanan mobil
                    melalui website kami. Untuk info lebih lanjut, bisa
                    melalui kontak yang tertera.</p>
                <a href="/" class="bg-[#FFC700] text-base font-semibold p-2 w-48 rounded-xl text-center">Ke Menu
                    Utama</a>
            </div>
        </div>
    </div>

    <x-footer />

</x-app>
