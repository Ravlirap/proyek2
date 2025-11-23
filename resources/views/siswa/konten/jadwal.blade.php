@extends('siswa.layouts.main')

@section('content')

<div class="p-6">

    <h1 class="text-3xl font-bold mb-6 text-blue-700 border-b pb-2">
        Jadwal Pelatihan
    </h1>

    @if($jadwal->count() == 0)

        <p class="text-gray-600">Belum ada jadwal pelatihan.</p>

    @else

        @foreach($jadwal as $item)
            @php
                $formatter = new IntlDateFormatter('id_ID', IntlDateFormatter::FULL, IntlDateFormatter::NONE);
                $tanggalFormat = $formatter->format(new DateTime($item->tanggal));
            @endphp

            <div class="jadwal-card">

                <div class="jadwal-header">
                    <span class="jadwal-badge">Pelatihan</span>
                    <h3 class="jadwal-title">{{ $item->judul }}</h3>
                </div>

                <div class="jadwal-info">
                    <p><span class="label">Tanggal:</span> {{ $tanggalFormat }}</p>
                    <p><span class="label">Jam:</span> {{ $item->jam_mulai }} – {{ $item->jam_selesai }}</p>
                    <p><span class="label">Pengajar:</span> {{ $item->pengajar }}</p>
                    <p><span class="label">Lokasi:</span> {{ $item->lokasi }}</p>
                </div>

                @if($item->deskripsi)
                    <p class="jadwal-deskripsi">{{ $item->deskripsi }}</p>
                @endif

            </div>

        @endforeach

    @endif

</div>

<style>
    .jadwal-card {
        background: #ffffff;
        padding: 22px;
        border-radius: 10px;
        margin-bottom: 22px;
        box-shadow: rgba(0, 0, 0, 0.10) 0 4px 12px;
        border-left: 6px solid #1d4ed8;
        transition: all 0.25s ease;
        position: relative;
    }

    .jadwal-card:hover {
        transform: translateX(6px);
        box-shadow: rgba(0, 0, 0, 0.15) 0 8px 22px;
    }

    .jadwal-header {
        display: flex;
        flex-direction: column;
        margin-bottom: 14px;
    }

    .jadwal-badge {
        background: #1d4ed8;
        color: white;
        font-size: 11px;
        font-weight: bold;
        padding: 4px 10px;
        border-radius: 50px;
        width: max-content;
        margin-bottom: 6px;
        letter-spacing: 0.3px;
        text-transform: uppercase;
    }

    .jadwal-title {
        font-size: 20px;
        font-weight: 700;
        margin: 0;
        color: #0f172a;
    }

    .jadwal-info {
        margin-top: 12px;
        line-height: 1.55;
        color: #374151;
    }

    .jadwal-info .label {
        font-weight: 600;
        color: #1d4ed8;
        width: 95px;
        display: inline-block;
    }

    .jadwal-deskripsi {
        margin-top: 16px;
        padding-top: 12px;
        border-top: 1px solid #e5e7eb;
        color: #4b5563;
        line-height: 1.6;
    }

    @media (min-width: 768px) {
        .jadwal-card {
            padding: 26px;
        }
        .jadwal-title {
            font-size: 22px;
        }
        .jadwal-info .label {
            width: 120px;
        }
    }

    @media (hover:hover) {
        .jadwal-card:hover .jadwal-badge {
            background: #1e40af;
        }
    }

    .jadwal-card::after {
        content: "";
        position: absolute;
        top: 0; right: 0;
        width: 70px;
        height: 70px;
        background: rgba(29, 78, 216, 0.07);
        border-bottom-left-radius: 100%;
        pointer-events: none;
    }

</style>

@endsection
