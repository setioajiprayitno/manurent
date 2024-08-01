<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 white:text-gray-200">
            {{ __('Input Mobil') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm white:bg-gray-800 sm:rounded-lg">
                <div class="p-6 text-gray-900 white:text-gray-100">
                    <form action="{{ route('tambah-mobil') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-4">
                            <label for="tipeMobil"
                                class="block text-sm font-medium text-gray-700">{{ __('Tipe Mobil') }}</label>
                            <x-text-input-breeze name="tipeMobil" class="w-full mt-1" required />
                        </div>

                        <div class="mb-4">
                            <label for="jenisMobil"
                                class="block text-sm font-medium text-gray-700">{{ __('Jenis Mobil') }}</label>
                            <x-text-input-breeze name="jenisMobil" class="w-full mt-1" required />
                        </div>

                        <div class="mb-4">
                            <label for="transmisi"
                                class="block text-sm font-medium text-gray-700">{{ __('Transmisi') }}</label>
                            <select name="transmisi" id="transmisi"
                                class="w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                                required>
                                <option value="matic">{{ __('Automatic') }}</option>
                                <option value="manual">{{ __('Manual') }}</option>
                            </select>
                        </div>

                        <div class="mb-4">
                            <label for="harga"
                                class="block text-sm font-medium text-gray-700">{{ __('Harga Sewa') }}</label>
                            <x-text-input-breeze name="harga" class="w-full mt-1" required />
                        </div>

                        <div class="mb-4">
                            <label for="fotoMobil"
                                class="block text-sm font-medium text-gray-700">{{ __('Foto Mobil') }}</label>
                            <input type="file" name="fotoMobil"
                                class="block w-full bg-white border border-gray-300 rounded-md shadow-sm file:rounded-md file:border-0 file:bg-gray-900 file:text-white file:py-2 file:px-3 file:hover:cursor-pointer active:border-indigo-500 active:ring-indigo-500" />
                        </div>

                        <div class="flex justify-end">
                            <x-primary-button title="Tambah" />
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
