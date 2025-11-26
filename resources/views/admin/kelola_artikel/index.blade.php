@extends('admin.layouts.main')
@section('title', 'Kelola Artikel')
@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">

<div class="container-fluid py-4">

    <div class="mb-4 border-bottom pb-3 d-flex justify-content-between align-items-center">
        <h1 class="h3 fw-bold">Kelola Artikel</h1>
        <a href="{{ route('admin.artikel.create') }}" class="btn btn-primary">
            <i class="bi bi-plus-lg"></i> Tambah Artikel
        </a>
    </div>

    <div class="card p-3 shadow-sm">
        <table class="table table-hover align-middle">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Gambar</th>
                    <th>Tanggal</th>
                    <th>Aksi</th>
                </tr>
            </thead>

            <tbody>
                @forelse ($dataArtikel as $key => $artikel)

                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td class="fw-semibold">{{ $artikel->judul }}</td>

                    <td>
                        <img src="{{ asset('img/artikel/' . $artikel->gambar) }}" width="70" class="rounded shadow-sm">
                    </td>

                    <td>{{ $artikel->created_at->format('d M Y') }}</td>

                    <td>
                        <a href="{{ route('admin.artikel.show', $artikel->id) }}" class="btn btn-sm btn-outline-primary me-1">
                            <i class="bi bi-eye"></i>
                        </a>

                        <a href="{{ route('admin.artikel.edit', $artikel->id) }}" class="btn btn-sm btn-outline-warning me-1">
                            <i class="bi bi-pencil-square"></i>
                        </a>

                        <form action="{{ route('admin.artikel.destroy', $artikel->id) }}" method="POST" class="d-inline"
                            onsubmit="return confirm('Yakin ingin menghapus artikel ini?');">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-outline-danger">
                                <i class="bi bi-trash"></i>
                            </button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="5" class="text-center py-4">Belum ada artikel</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>

</div>
@endsection
