@extends('admin.layouts.main')

@section('title', $title)

@section('content')
<div class="container-fluid py-4">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3 fw-bold">{{ $title }}</h1>
        <a href="{{ route('galeri.create') }}" class="btn btn-primary">
            <i class="fas fa-plus"></i> Tambah Galeri
        </a>
    </div>

    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    <div class="card shadow-sm">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover align-middle">
                    <thead class="table-light text-center">
                        <tr>
                            <th width="5%">No</th>
                            <th width="20%">Gambar</th>
                            <th>Judul</th>
                            <th>Deskripsi</th>
                            <th width="15%">Tanggal</th>
                            <th width="15%">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($dataGaleri as $galeri)
                            <tr>
                                <td class="text-center">{{ $loop->iteration }}</td>

                                <td class="text-center">
                                    @if ($galeri->gambar)
                                        <img src="{{ asset('storage/' . $galeri->gambar) }}"
                                             class="img-thumbnail"
                                             style="width:120px;height:80px;object-fit:cover;">
                                    @else
                                        <span class="text-muted">Tidak ada</span>
                                    @endif
                                </td>

                                <td>{{ $galeri->judul }}</td>

                                <td class="text-muted">
                                    {{ Str::limit($galeri->deskripsi, 60) }}
                                </td>

                                <td class="text-center">
                                    {{ $galeri->created_at->format('d M Y') }}
                                </td>

                                <td class="text-center">
                                    <a href="{{ route('galeri.edit', $galeri->id) }}"
                                       class="btn btn-sm btn-warning">
                                        <i class="fas fa-edit"></i>
                                    </a>

                                    <form action="{{ route('galeri.destroy', $galeri->id) }}"
                                          method="POST"
                                          class="d-inline"
                                          onsubmit="return confirm('Yakin hapus data ini?')">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-sm btn-danger">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="text-center text-muted">
                                    Data galeri masih kosong
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
@endsection