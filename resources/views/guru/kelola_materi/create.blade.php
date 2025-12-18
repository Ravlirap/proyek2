@extends('guru.layouts.main')

@section('content')
<div class="p-8 max-w-3xl">
    <h1 class="text-2xl font-bold mb-6">Tambah Materi</h1>

    <form action="{{ route('guru.materi.store') }}"
          method="POST"
          enctype="multipart/form-data"
          class="bg-white p-6 rounded shadow space-y-4">

        @csrf

        <div>
            <label class="block font-semibold">Judul Materi</label>
            <input type="text" name="judul"
                   class="w-full border rounded px-3 py-2"
                   required>
        </div>

        <div>
            <label class="block font-semibold">Deskripsi</label>
            <textarea name="deskripsi"
                      class="w-full border rounded px-3 py-2"
                      rows="4"></textarea>
        </div>

        <div>
            <label class="block font-semibold">Kategori</label>
            <input type="text" name="kategori"
                   class="w-full border rounded px-3 py-2">
        </div>

        <div>
            <label class="block font-semibold">File Materi (PDF / MP4)</label>
            <input type="file" name="file_materi"
                   class="w-full border rounded px-3 py-2">
        </div>

        <div class="flex gap-3">
            <button class="bg-blue-600 text-white px-5 py-2 rounded">
                Simpan
            </button>
            <a href="{{ route('guru.materi.index') }}"
               class="bg-gray-500 text-white px-5 py-2 rounded">
                Kembali
            </a>
        </div>
    </form>
</div>
@endsection
