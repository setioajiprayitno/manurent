<div class="bg-white rounded-lg p-5 font-jakartaSans text-[#1A202C] font-bold shadow-lg">
    <h6>{{ $name }}</h6>
    <p class="text-[#90A3BF]">{{ $brand }}</p>
    <img src="assets/images/{{ $src }}" alt="image" class="object-cover mx-auto my-6 h-36">
    <div class="flex justify-between">
        <div class="flex flex-col">
            <h5>Rp. {{ $price }}</h5>
            <p class="text-[#90A3BF]">Day</p>
        </div>
        <a href="checkout">
            <button class="rounded-sm px-5 bg-[#FFC700] text-white w-full h-full">Rent Now</button>
        </a>
    </div>
</div>
