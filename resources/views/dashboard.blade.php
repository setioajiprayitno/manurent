<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 white:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white white:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 white:text-gray-100">
                    {{ __('Selamat Datang!') }} {{ Auth::user()->name }}
                </div>
            </div>
        </div>
    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white white:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 white:text-gray-100">
                    <h3 class="text-lg font-medium text-gray-900 white:text-gray-100 mb-4">{{ __('Input Car Data') }}
                    </h3>

                    <form action="">
                        <div class="mb-4">
                            <label for="tipeMobil"
                                class="block text-sm font-medium text-gray-700 white:text-gray-300">{{ __('Tipe Mobil') }}</label>
                            <input type="text" name="tipeMobil" id="tipeMobil"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                                required>
                        </div>

                        <div class="mb-4">
                            <label for="jenisMobil"
                                class="block text-sm font-medium text-gray-700 white:text-gray-300">{{ __('Jenis Mobil') }}</label>
                            <input type="text" name="jenisMobil" id="jenisMobil"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                                required>
                        </div>

                        <div class="mb-4">
                            <label for="transmisi"
                                class="block text-sm font-medium text-gray-700 white:text-gray-300">{{ __('Transmisi') }}</label>
                            <select name="transmisi" id="transmisi"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                                required>
                                <option value="matic">{{ __('Automatic') }}</option>
                                <option value="manual">{{ __('Manual') }}</option>
                            </select>
                        </div>

                        <div class="mb-4">
                            <label for="harga"
                                class="block text-sm font-medium text-gray-700 white:text-gray-300">{{ __('Harga Sewa') }}</label>
                            <input type="text" name="harga" id="harga"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                                required>
                        </div>

                        <div class="mb-4">
                            <label for="fotoMobil"
                                class="block text-sm font-medium text-gray-700 white:text-gray-300">{{ __('Foto Mobil') }}</label>
                            <input type="file" name="fotoMobil" id="fotoMobil"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                                required>
                        </div>

                        <div class="flex justify-end">
                            <button type="submit"
                                class="px-4 py-2 bg-blue-600 text-white rounded-md">{{ __('Submit') }}</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
