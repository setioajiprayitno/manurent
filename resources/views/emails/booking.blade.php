<x-mail::message>
    # BOOKING

    nama : {{ $data['nama']}}
    nama : {{ $data['noHp']}}
    nama : {{ $data['alamat']}}
    nama : {{ $data['email']}}
    nama : {{ $data['jenisMobil']}}
    nama : {{ $data['jam']}}
    nama : {{ $data['tanggal']}}
    nama : {{ $data['supir']}}

    <x-mail::button :url="''">
        Button Text
    </x-mail::button>

    Thanks,<br>
    {{ config('app.name') }}
</x-mail::message>