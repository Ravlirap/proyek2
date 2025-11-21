@extends('siswa.layouts.main')

@section('content')
<div class="p-6">

    <h1 class="text-2xl font-bold mb-4">Jadwal Pelatihan</h1>

    @if($jadwal->count() == 0)
        <p class="text-gray-600">Belum ada jadwal pelatihan.</p>
    @else
        @foreach($jadwal as $item)

            @php
                // formatter tanggal Indonesia
                $formatter = new IntlDateFormatter('id_ID', IntlDateFormatter::FULL, IntlDateFormatter::NONE);
                $tanggalFormat = $formatter->format(new DateTime($item->tanggal));
            @endphp

            <div class="bg-white p-4 mb-4 rounded shadow">
                <h3 class="text-lg font-semibold">{{ $item->judul }}</h3>

                <p class="text-gray-700">Tanggal: {{ $tanggalFormat }}</p>
                <p class="text-gray-700">Jam: {{ $item->jam_mulai }} - {{ $item->jam_selesai }}</p>
                <p class="text-gray-700">Pengajar: {{ $item->pengajar }}</p>
                <p class="text-gray-700">Lokasi: {{ $item->lokasi }}</p>

                @if($item->deskripsi)
                    <p class="text-gray-600 mt-2">{{ $item->deskripsi }}</p>
                @endif
            </div>

        @endforeach
    @endif

</div>
@endsection
