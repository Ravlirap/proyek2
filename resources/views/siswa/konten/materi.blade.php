@extends('siswa.layouts.main')

@php
    use Illuminate\Support\Str;
@endphp

@section('content')
<div class="p-6">

    <h1 class="text-3xl font-bold mb-6 text-blue-700 border-b pb-2">
        Materi Pembelajaran
    </h1>

    @if(isset($materiDetail))
    <div class="mb-8 bg-white rounded-xl shadow-lg p-5">

        <h2 class="text-xl font-bold mb-2 text-blue-700">
            {{ $materiDetail->judul }}
        </h2>

        <p class="text-gray-600 mb-4">
            {{ $materiDetail->deskripsi }}
        </p>

        @if(Str::endsWith($materiDetail->file_materi, '.pdf'))
            <iframe
                src="{{ asset('storage/' . $materiDetail->file_materi) }}"
                class="w-full h-[600px] rounded border"
                allowfullscreen>
            </iframe>

        @elseif(Str::endsWith($materiDetail->file_materi, '.mp4'))
            <video controls class="w-full rounded h-[400px] bg-black">
                <source src="{{ asset('storage/' . $materiDetail->file_materi) }}" type="video/mp4">
            </video>

        @else
            <p class="italic text-gray-500">
                Preview tidak tersedia untuk file ini.
            </p>
        @endif

        <a href="{{ route('siswa.materi.download', $materiDetail->id) }}"
           class="inline-block mt-4 bg-blue-600 hover:bg-blue-700 text-white px-5 py-2 rounded font-semibold">
           Download Materi
        </a>

    </div>
    @endif

    @if ($materi->count() == 0)
        <p class="text-gray-600">Belum ada materi.</p>
    @endif

    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 materi-grid">
        @foreach ($materi as $m)
        <div class="materi-card">

            <div class="materi-header">
                <span class="materi-badge">{{ $m->kategori }}</span>
                <h2 class="materi-title">{{ $m->judul }}</h2>
            </div>

            <p class="materi-deskripsi">{{ $m->deskripsi }}</p>

            <div class="materi-footer flex gap-2 flex-wrap">
                     <a href="{{ route('siswa.materi.view', $m->id) }}"
                         target="_blank" rel="noopener"
                         class="materi-download bg-gray-500 hover:bg-gray-600">
                         Preview
                     </a>

                <a href="{{ route('siswa.materi.download', $m->id) }}"
                   class="materi-download">
                   Download
                </a>
            </div>

        </div>
        @endforeach
    </div>

</div>

<style>
.materi-card {
    background: linear-gradient(135deg, #ffffff, #f3f7ff);
    padding: 22px;
    border-radius: 12px;
    box-shadow: 0 5px 14px rgba(0, 40, 140, 0.12);
    border-left: 6px solid #1d4ed8;
    transition: all 0.28s ease;
    position: relative;
    display: flex;
    flex-direction: column;
    overflow: hidden;
}

.materi-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 10px 26px rgba(0, 40, 140, 0.18);
    background: linear-gradient(135deg, #f9fbff, #eef3ff);
}

.materi-header {
    margin-bottom: 14px;
}

.materi-badge {
    background: linear-gradient(135deg, #1d4ed8, #153eaa);
    color: white;
    font-size: 11px;
    font-weight: bold;
    padding: 4px 12px;
    border-radius: 50px;
    text-transform: uppercase;
    width: max-content;
    margin-bottom: 6px;
    display: inline-block;
    letter-spacing: 0.5px;
    box-shadow: 0 2px 6px rgba(29, 78, 216, 0.35);
    transition: 0.25s ease;
}

.materi-card:hover .materi-badge {
    background: linear-gradient(135deg, #1e40af, #0f2f84);
}

.materi-title {
    font-size: 20px;
    font-weight: 700;
    color: #0f172a;
    margin: 0;
    line-height: 1.35;
}

.materi-deskripsi {
    font-size: 14.5px;
    line-height: 1.6;
    color: #485067;
    margin-bottom: 14px;
    min-height: 60px;
}

.materi-download {
    background: linear-gradient(135deg, #1d4ed8, #0d2e8b);
    color: #ffffff;
    padding: 9px 16px;
    text-decoration: none;
    font-size: 14.5px;
    border-radius: 8px;
    font-weight: 600;
    transition: 0.25s ease;
    display: inline-block;
    box-shadow: 0 4px 12px rgba(29, 78, 216, 0.25);
}

.materi-download:hover {
    background: linear-gradient(135deg, #1e40af, #0a256d);
    transform: translateY(-2px);
    box-shadow: 0 8px 18px rgba(29, 78, 216, 0.30);
}

.materi-card::after {
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
</style>
@endsection
