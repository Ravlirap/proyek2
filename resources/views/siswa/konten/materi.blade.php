@extends('siswa.layouts.main')

@section('content')
<div class="p-6">

    <h1 class="text-2xl font-bold mb-4">Materi Pembelajaran</h1>

    @if ($materi->count() == 0)
        <p class="text-gray-600">Belum ada materi.</p>
    @endif

    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        @foreach ($materi as $m)
        <div class="bg-white p-4 rounded shadow">
            <h2 class="text-lg font-bold">{{ $m->judul }}</h2>
            <p class="text-sm text-gray-600 mb-2">{{ $m->kategori }}</p>
            <p class="mb-3">{{ $m->deskripsi }}</p>

            @if ($m->file_materi)
                <a href="{{ asset('storage/materi/' . $m->file_materi) }}"
                   class="text-blue-600 hover:underline"
                   target="_blank">
                    Download Materi
                </a>
            @else
                <p class="text-gray-500 text-sm">Tidak ada file.</p>
            @endif
        </div>
        @endforeach
    </div>

</div>
@endsection
