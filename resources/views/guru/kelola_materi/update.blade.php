@extends('guru.layouts.main')

@section('content')
<div class="p-8 max-w-3xl">
    <h1 class="text-2xl font-bold mb-6">Edit Materi</h1>

    <form action="{{ route('guru.materi.update', $materi->id) }}"
          method="POST"
          enctype="multipart/form-data"
          class="bg-white p-6 rounded shadow space-y-4">

        @csrf
        @method('PUT')

        <div>
            <label class="block font-semibold">Judul Materi</label>
            <input type="text" name="judul"
                   value="{{ $materi->judul }}"
                   class="w-full border rounded px-3 py-2"
                   required>
        </div>

        <div>
            <label class="block font-semibold">Deskripsi</label>
            <textarea name="deskripsi"
                      class="w-full border rounded px-3 py-2"
                      rows="4">{{ $materi->deskripsi }}</textarea>
        </div>

        <div>
            <label class="block font-semibold">Kategori</label>
            <input type="text" name="kategori"
                   value="{{ $materi->kategori }}"
                   class="w-full border rounded px-3 py-2">
        </div>

        <div>
            <label class="block font-semibold">File Materi</label>
            <input type="file" name="file_materi"
                   class="w-full border rounded px-3 py-2">
            @if($materi->file_materi)
                <p class="text-sm mt-1">
                    File saat ini:
                    <a href="{{ asset('storage/'.$materi->file_materi) }}"
                       class="text-blue-600 underline" target="_blank">
                        Lihat
                    </a>
                </p>
            @endif
        </div>

        <div class="flex gap-3">
            <button class="bg-yellow-500 text-white px-5 py-2 rounded">
                Update
            </button>
            <a href="{{ route('guru.materi.index') }}"
               class="bg-gray-500 text-white px-5 py-2 rounded">
                Kembali
            </a>
        </div>
    </form>
</div>
@endsection