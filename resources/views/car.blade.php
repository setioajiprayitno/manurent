<x-app color="bg-[#FFF9EF] lg:bg-[#D9D9D9]">
    <img src="{{ asset('assets/images/BG.png') }}" alt="image"
        class="hidden object-cover w-full bg-no-repeat md:block md:h-80 brightness-75">
    <div class="block py-3 text-xl font-semibold text-center shadow md:hidden text-philippineYellow">
        MANURENT.
    </div>
    <x-navbar />
    <div class="p-3 space-y-3 md:p-10">
        <h5 class="text-lg font-bold md:text-2xl">Daftar Mobil</h5>
        <div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 md:gap-y-12">
            @foreach ($cars as $car)
                <x-item-car-rent :car="$car" />
            @endforeach
        </div>
    </div>
    <x-footer />
</x-app>
