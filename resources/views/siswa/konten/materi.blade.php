@extends('siswa.layouts.main')

@section('content')
<div class="p-6">

    <h1 class="text-3xl font-bold mb-6 text-blue-700 border-b pb-2">
        Materi Pembelajaran
    </h1>

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

            <div class="materi-footer">
                @if ($m->file_materi)
                    <a href="{{ asset('storage/materi/' . $m->file_materi) }}"
                       class="materi-download"
                       target="_blank">
                        Download Materi
                    </a>
                @else
                    <p class="materi-no-file">Tidak ada file.</p>
                @endif
            </div>

        </div>
        @endforeach
    </div>

</div>
<style>
    .materi-card {
        background: #ffffff;
        padding: 22px;
        border-radius: 12px;
        box-shadow: rgba(0, 0, 0, 0.10) 0 4px 12px;
        border-left: 6px solid #1d4ed8;
        transition: all 0.25s ease;
        position: relative;
        display: flex;
        flex-direction: column;
    }

    .materi-card:hover {
        transform: translateY(-4px);
        box-shadow: rgba(0, 0, 0, 0.15) 0 8px 22px;
    }

    .materi-header {
        margin-bottom: 14px;
    }

    .materi-badge {
        background: #1d4ed8;
        color: white;
        font-size: 11px;
        font-weight: bold;
        padding: 4px 10px;
        border-radius: 50px;
        text-transform: uppercase;
        width: max-content;
        margin-bottom: 6px;
        display: inline-block;
    }

    .materi-title {
        font-size: 20px;
        font-weight: 700;
        color: #0f172a;
        margin: 0;
        line-height: 1.3;
    }

    .materi-deskripsi {
        font-size: 14.5px;
        line-height: 1.6;
        color: #4b5563;
        margin-bottom: 14px;
        min-height: 60px;
    }

    .materi-download {
        background: #1d4ed8;
        color: #ffffff;
        padding: 8px 14px;
        text-decoration: none;
        font-size: 14px;
        border-radius: 6px;
        font-weight: 500;
        transition: background 0.25s ease;
        display: inline-block;
    }

    .materi-download:hover {
        background: #1e40af;
    }

    .materi-no-file {
        color: #6b7280;
        font-size: 14px;
        font-style: italic;
    }

    .materi-card::after {
        content: "";
        position: absolute;
        top: 0; right: 0;
        width: 70px;
        height: 70px;
        background: rgba(29, 78, 216, 0.07);
        border-bottom-left-radius: 100%;
        pointer-events: none;
    }

    @media (min-width: 768px) {
        .materi-title {
            font-size: 21px;
        }
        .materi-deskripsi {
            font-size: 15px;
        }
    }

</style>

@endsection
