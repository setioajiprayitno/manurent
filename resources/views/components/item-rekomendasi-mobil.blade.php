<div class="bg-[#B3B3B3] rounded-3xl">
    <div class="h-56 py-5 bg-white max-h-56 rounded-3xl">
        <img src={{ asset(Storage::url($car->fotoMobil)) }} alt="img"
            class="object-cover w-full h-full mx-auto md:w-72">
    </div>
    <div class="flex flex-col gap-3 py-5">
        <p class="text-lg font-semibold md:text-2xl">{{ $car->tipeMobil }}</p>
        <p class="font-semibold text-sm md:text-base text-[#636363]">{{ $car->jenisMobil }}</p>
    </div>
</div>
