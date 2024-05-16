<x-mail::message>
    - **Nama**: {{ $data['name'] }}
    - **Nomor HP**: {{ $data['phoneNumber'] }}
    - **Alamat**: {{ $data['address'] }}
    - **Email**: {{ $data['email'] }}
    - **Jenis Mobil**: {{ $data['jenisMobil'] }}
    - **Transmisi**: {{ $data['transmisi'] }}
    - **Jam**: {{ $data['time'] }}
    - **Tanggal**: {{ $data['date'] }}
    - **Supir**: {{ $data['driver'] ? 'dengan supir' : 'tanpa supir' }}

    <x-mail::button :url="'http://manurent.com/'">
        Button Text
    </x-mail::button>

    {{ config('app.name') }}
</x-mail::message>