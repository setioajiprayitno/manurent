<x-app color="bg-[#FFF9EF]">
    <div class="block py-3 text-xl font-semibold text-center shadow md:hidden text-philippineYellow">
        MANURENT.
    </div>
    <div class="container px-5 mx-auto xl:p-0">
        @if ($errors->any())
            <div class="bg-[#F8D7DA] p-4 ps-10 rounded-xl mt-8">
                <ul class="list-disc">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('booking.send') }}" method="POST">
            @csrf
            <div class="p-6 mx-auto my-8 space-y-6 bg-white font-jakartaSans rounded-xl md:space-y-12">
                <div>
                    <h5 class="text-base font-bold md:text-xl">Billing Info</h5>
                    <p class="text-[#90A3BF] text-sm md:text-base font-medium">Masukkan Data Anda</p>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-x-8 gap-y-4 md:gap-y-10">
                    {{-- Nama --}}
                    <x-text-input name="name" placeholder="Nama" />

                    {{-- No Hp --}}
                    <x-text-input name="phoneNumber" placeholder="No. HP" />

                    {{-- Alamat --}}
                    <x-text-input name="address" placeholder="Alamat" />

                    {{-- Email --}}
                    <x-text-input name="email" placeholder="E-mail" />
                </div>
            </div>
            <div class="p-6 mx-auto my-8 space-y-6 bg-white font-jakartaSans rounded-xl md:space-y-12">
                <div>
                    <h5 class="text-base font-bold md:text-xl">Data Rental</h5>
                    <p class="text-[#90A3BF] text-sm md:text-base font-medium">Isi Data Rental Pilihan Anda</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-x-8 gap-y-4 md:gap-y-10">
                    <div x-data="{
                        open: false,
                        active: false,
                        items: [
                            'CRV', 'BRV', 'Brio', 'Jazz', 'Civic', 'City', 'Mobolio', 'All New Terios',
                            'All New Avanza', 'New Ertiga', 'Innova 2.0', 'Innova 2.5', 'All New Rush'
                        ],
                        selected: 'Pilih Mobil',
                        click(selected) {
                            this.selected = selected;
                            this.active = true;
                        },
                        findValue(name, item) {
                            const inputField = document.querySelector(`.${name}`);
                            inputField.value = item;
                            console.log(inputField);
                        }
                    }">
                        <x-form-dropdown title="Jenis Mobil" name="jenisMobil" />
                    </div>

                    <div class="space-y-2 md:space-y-4">
                        <label for="time"
                            class="block text-sm md:text-base font-semibold text-[#1A202C]">Jam</label>
                        <div
                            class="flex rounded-md shadow-sm bg-[#FFEDCB] ring-1 ring-inset ring-[#FFEDCB] focus-within:ring-2 focus-within:ring-inset focus-within:ring-yellow-700">
                            <input type="time" name="time" id="time" autocomplete="time"
                                class="flex-1 block px-4 py-3 text-sm text-gray-900 bg-transparent border-0 md:px-6 md:py-4 focus:ring-0 md:text-base">
                        </div>
                    </div>

                    <div x-data="{
                        open: false,
                        active: false,
                        items: ['Manual', 'Matic'],
                        selected: 'Pilih Transmisi',
                        click(selected) {
                            this.selected = selected;
                            this.active = true;
                        },
                        findValue(name, item) {
                            const inputField = document.querySelector(`.${name}`);
                            inputField.value = item;
                            console.log(inputField);
                        }
                    }">
                        <x-form-dropdown title="Transmisi" name="transmisi" />
                    </div>

                    <div class="space-y-2 md:space-y-4">
                        <label for="date" class="block text-base font-semibold text-gray-900">Tanggal</label>
                        <div
                            class="flex rounded-md shadow-sm bg-[#FFEDCB] ring-1 ring-inset ring-[#FFEDCB] focus-within:ring-2 focus-within:ring-inset focus-within:ring-yellow-700">
                            <input type="date" name="date" id="date" autocomplete="date"
                                class="flex-1 block px-4 py-3 text-sm text-gray-900 bg-transparent border-0 md:px-6 md:py-4 focus:ring-0 md:text-base">
                        </div>
                    </div>

                    <div class="flex flex-col justify-between gap-2 lg:flex-row">
                        <div class="flex items-center gap-4">
                            <input type="radio" class="text-yellow-700 focus:ring-yellow-700 checked:bg-yellow-700 "
                                name="driver" id="with-driver" value="1" />
                            <label for="with-driver">Dengan Supir</label>
                        </div>
                        <div class="flex items-center gap-4">
                            <input type="radio" class="text-yellow-700 focus:ring-yellow-700 checked:bg-yellow-700 "
                                name="driver" id="without-driver" value="0" />
                            <label for="without-driver">Tanpa Supir</label>
                        </div>
                    </div>
                </div>

                <div class="flex justify-center">
                    <button @click="open = !open"
                        class="bg-[#FFC700] text-base font-semibold p-2 w-72 rounded shadow-lg hover:shadow-xl hover:bg-[#ffc80095] transition ease-in-out hover:translate-x-1 hover:translate-y-1">Booking
                        Sekarang</button>
                </div>

            </div>
        </form>
    </div>

    <x-footer />
</x-app>
