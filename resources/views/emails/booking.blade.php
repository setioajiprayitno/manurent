<x-mail::message>
    # BOOKING

    Nama        : {{ $data['name']}}
    Nomor HP    : {{ $data['phoneNumber']}}
    Alamat      : {{ $data['address']}}
    Email       : {{ $data['email']}}
    Jenis Mobil : {{ $data['jenisMobil']}}
    Transmisi   : {{ $data['transmisi']}}
    Jam         : {{ $data['time']}}
    Tanggal     : {{ $data['date']}}
    Supir       : {{ $data['driver']}}

    <!-- <x-mail::button :url="''">
        Button Text
    </x-mail::button>

    Thanks,<br> -->
    {{ config('app.name') }}
</x-mail::message>