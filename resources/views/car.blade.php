<x-app color="bg-[#FFF9EF] lg:bg-[#D9D9D9]">
    <img src="{{ asset('assets/images/BG.png') }}" alt="image"
        class="hidden object-cover w-full bg-no-repeat md:block md:h-80 brightness-75">
    <div class="block py-3 text-xl font-semibold text-center shadow md:hidden text-philippineYellow">
        MANURENT.
    </div>
    <div class="p-3 space-y-3 md:p-10">
        <h5 class="text-lg font-bold md:text-2xl">Daftar Mobil</h5>
        <div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 md:gap-y-12">
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
    </div>
    <x-footer />
</x-app>
