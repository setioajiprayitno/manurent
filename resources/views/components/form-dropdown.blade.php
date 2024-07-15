<div>
    <label class="block text-base font-semibold text-[#1A202C]">{{ $title }}</label>
    <div class="relative">
        <div class="mt-4">
            <button type="button"
                class="flex w-full justify-between rounded-md bg-[#FFEDCB] ring-[#FFEDCB] px-6 py-4 text-sm font-semibold text-[#90A3BF] shadow-sm ring-1 ring-inset focus-within:ring-2 focus-within:ring-inset focus-within:ring-yellow-700"
                id="menu-button" :class="{ 'text-gray-900': active, 'text-[#90A3BF]': !active }" @click="open = !open">
                <p x-text="selected"></p>
                <i class="my-auto items fa-solid fa-chevron-down"></i>
            </button>
        </div>
        <div class="absolute z-10 w-full mt-1 bg-white rounded-md shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none"
            x-show="open" x-transition:enter="transition ease-out duration-100"
            x-transition:enter-start="transform opacity-0 scale-95"
            x-transition:enter-end="transform opacity-100 scale-100"
            x-transition:leave="transition ease-in duration-100"
            x-transition:leave-start="transform opacity-100 scale-100"
            x-transition:leave-end="transform opacity-0 scale-95" role="menu" aria-orientation="vertical"
            @click.outside="open = false">
            <div class="py-1" role="none">
                <template x-for="item in items">
                    <p class="block px-4 py-2 text-sm text-gray-700 hover:cursor-pointer hover:bg-gray-100 hover:text-gray-900"
                        x-text="item" @click="click(item), findValue('{{ $name }}', item), open = false"></p>
                </template>
            </div>
        </div>
        <input type="hidden" class="{{ $name }}" name="{{ $name }}" value="">
    </div>
</div>
