<x-app>
    <x-slot:color>
        bg-black
    </x-slot>
    <div class="relative min-h-100">
        <img src="assets/images/BG.png" alt="image" class="object-cover w-full bg-no-repeat h-80 brightness-75">
        <div class="w-full bg-[#D9D9D9] h-screen relative">
            <div class="absolute top-0 font-poppins">
                <h5 class="mt-10 text-2xl font-bold ms-10">Daftar Mobil</h5>
                <div class="grid grid-cols-4 gap-6 p-10 gap-y-12">
                    <x-item-car-rent brand="Honda" name="Jazz" price="350.000" src="JAZZ.jpg" />
                    <x-item-car-rent brand="Honda" name="Civic" price="350.000" src="CIVIC.jpg" />
                    <x-item-car-rent brand="Honda" name="BR-V" price="450.000" src="BRV.png" />
                    <x-item-car-rent brand="Honda" name="City" price="450.000" src="CITY.png" />
                    <x-item-car-rent brand="Honda" name="Mobilio" price="500.000" src="MOBILIO.png" />
                    <x-item-car-rent brand="Honda" name="CR-V" price="450.000" src="CRV.jpg" />
                    <x-item-car-rent brand="Daihatsu" name="All New Terios" price="500.000" src="TERIOS.png" />
                    <x-item-car-rent brand="Honda" name="Brio" price="300.000" src="BRIO.png" />
                    <x-item-car-rent brand="Toyota" name="All New Avanza" price="350.000" src="AVANZA.png" />
                    <x-item-car-rent brand="Suzuki" name="New Ertiga" price="350.000" src="ERTIGA.png" />
                    <x-item-car-rent brand="Toyota" name="Innova 2.0" price="450.000" src="INNOVA2.0.png" />
                    <x-item-car-rent brand="Toyota" name="Innova 2.5" price="450.000" src="INNOVA REBORN.png" />
                    <x-item-car-rent brand="Toyota" name="All New Rush" price="500.000" src="RUSH.png" />
                </div>
                <x-footer />
            </div>
        </div>
    </div>
</x-app>
