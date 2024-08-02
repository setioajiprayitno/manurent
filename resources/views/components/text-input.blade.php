<div class="space-y-2 md:space-y-4">
    <label for="{{ $name }}"
        class="block text-sm md:text-base font-semibold text-[#1A202C]">{{ $placeholder }}</label>
    <div
        class="flex rounded-md shadow-sm bg-[#FFEDCB] ring-1 ring-inset ring-[#FFEDCB] focus-within:ring-2 focus-within:ring-inset focus-within:ring-yellow-700">
        <input type="text" name="{{ $name }}" id="{{ $name }}"
            class="block flex-1 border-0 bg-transparent py-3 md:py-4 px-4 md:px-6 text-gray-900 placeholder:text-[#90A3BF] focus:ring-0 text-sm md:text-base"
            placeholder="{{ $placeholder }}" value="{{ old($name) }}">
    </div>
</div>
