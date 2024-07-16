<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 white:text-gray-200 leading-tight">
            {{ __('Edit Mobil') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{ route('mobil.update', $mobil->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')

                        <div class="mb-4">
                            <label for="tipeMobil" class="block text-sm font-medium text-gray-700">Tipe Mobil</label>
                            <input type="text" name="tipeMobil" id="tipeMobil" value="{{ $mobil->tipeMobil }}"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        </div>

                        <div class="mb-4">
                            <label for="jenisMobil" class="block text-sm font-medium text-gray-700">Jenis Mobil</label>
                            <input type="text" name="jenisMobil" id="jenisMobil" value="{{ $mobil->jenisMobil }}"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        </div>

                        <div class="mb-4">
                            <label for="transmisi" class="block text-sm font-medium text-gray-700">Transmisi</label>
                            <select name="transmisi" id="transmisi"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                <option value="manual" {{ $mobil->transmisi === 'manual' ? 'selected' : '' }}>Manual
                                </option>
                                <option value="matic" {{ $mobil->transmisi === 'matic' ? 'selected' : '' }}>Automatic
                                </option>
                            </select>
                        </div>

                        <div class="mb-4">
                            <label for="harga" class="block text-sm font-medium text-gray-700">Harga Sewa</label>
                            <input type="text" name="harga" id="harga" value="{{ $mobil->harga }}"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        </div>

                        <div class="mb-4">
                            <label for="fotoMobil" class="block text-sm font-medium text-gray-700">Foto Mobil</label>
                            <input type="file" name="fotoMobil" id="fotoMobil"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            @if ($mobil->fotoMobil)
                                <p class="mt-2 text-sm text-gray-500">Foto Saat Ini:</p>
                                <img src="{{ asset('storage/' . $mobil->fotoMobil) }}" alt="Current Foto Mobil"
                                    class="mt-2 h-32">
                            @endif
                        </div>

                        <div class="flex justify-end">
                            <button type="submit"
                                class="px-4 py-2 bg-blue-600 text-dark rounded-md hover:bg-blue-500">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
