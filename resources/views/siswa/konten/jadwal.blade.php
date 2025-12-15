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
    background: linear-gradient(135deg, #ffffff, #f3f7ff);
    padding: 22px;
    border-radius: 12px;
    margin-bottom: 22px;
    box-shadow: 0 5px 14px rgba(0, 40, 140, 0.12);
    border-left: 6px solid #1d4ed8;
    transition: all 0.28s ease;
    position: relative;
    overflow: hidden;
}

.jadwal-card:hover {
    transform: translateX(6px);
    box-shadow: 0 10px 26px rgba(0, 40, 140, 0.18);
    background: linear-gradient(135deg, #f8fbff, #eef3ff);
}

.jadwal-badge {
    background: #1d4ed8;
    color: white;
    font-size: 11px;
    font-weight: bold;
    padding: 4px 12px;
    border-radius: 50px;
    width: max-content;
    margin-bottom: 6px;
    letter-spacing: 0.3px;
    text-transform: uppercase;
    transition: 0.25s ease;
}

@media (hover:hover) {
    .jadwal-card:hover .jadwal-badge {
        background: #1e40af;
    }
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
    margin-top: 18px;
    padding-top: 12px;
    border-top: 1px solid #e5e7eb;
    color: #4b5563;
    line-height: 1.65;
}

.jadwal-card::after {
    content: "";
    position: absolute;
    top: 0;
    right: 0;
    width: 80px;
    height: 80px;
    background: radial-gradient(circle, rgba(29,78,216,0.12), transparent);
    border-bottom-left-radius: 100%;
    pointer-events: none;
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
</style>

@endsection
