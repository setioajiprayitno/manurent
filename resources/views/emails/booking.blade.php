<x-mail::message>
    # BOOKING

    nama : {{ $data['name'] }}
    nama : {{ $data['phoneNumber'] }}
    nama : {{ $data['address'] }}
    nama : {{ $data['email'] }}
    nama : {{ $data['jenisMobil'] }}
    nama : {{ $data['transmisi'] }}
    nama : {{ $data['time'] }}
    nama : {{ $data['date'] }}
    nama : {{ $data['driver'] }}

    <x-mail::button :url="''">
        Button Text
    </x-mail::button>

    Thanks,<br>
    {{ config('app.name') }}
</x-mail::message>
