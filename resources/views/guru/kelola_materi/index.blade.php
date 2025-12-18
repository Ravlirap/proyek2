@extends('guru.layouts.main')

@section('content')
<div class="p-8">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold text-gray-700">Kelola Materi</h1>
        <a href="{{ route('guru.materi.create') }}"
           class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
            + Tambah Materi
        </a>
    </div>

    <div class="bg-white shadow rounded-lg overflow-hidden">
        <table class="w-full text-sm">
            <thead class="bg-gray-100 text-gray-600">
                <tr>
                    <th class="p-3 text-left">Judul</th>
                    <th class="p-3">Deskripsi</th>
                    <th class="p-3">Kategori</th>
                    <th class="p-3">File</th>
                    <th class="p-3">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($materi as $item)
                <tr class="border-b">
                    <td class="p-3">{{ $item->judul }}</td>
                    <td class="p-3 text-center">{{ $item->deskripsi ?? '-' }}</td>
                    <td class="p-3 text-center">{{ $item->kategori ?? '-' }}</td>
                    <td class="p-3 text-center">
                        @if($item->file_materi)
                            <a href="{{ asset('storage/'.$item->file_materi) }}"
                               class="text-blue-600 underline" target="_blank">
                                Lihat
                            </a>
                        @else
                            -
                        @endif
                    </td>
                    <td class="p-3 text-center space-x-2">
                        <a href="{{ route('guru.materi.edit', $item->id) }}"
                           class="bg-yellow-500 text-white px-3 py-1 rounded">
                            Edit
                        </a>

                        <form action="{{ route('guru.materi.destroy', $item->id) }}"
                              method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button onclick="return confirm('Hapus materi ini?')"
                                    class="bg-red-600 text-white px-3 py-1 rounded">
                                Hapus
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach

                @if($materi->isEmpty())
                <tr>
                    <td colspan="4" class="p-5 text-center text-gray-500">
                        Belum ada materi
                    </td>
                </tr>
                @endif
            </tbody>
        </table>
    </div>
</div>
@endsection
