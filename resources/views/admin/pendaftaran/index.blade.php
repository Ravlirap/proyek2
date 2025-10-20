@extends('admin.layouts.main')

@section('title', 'Kelola Data Pendaftar')

@section('content')
<div class="container-fluid py-4">

    <h2 class="fw-bold mb-4"><i class="bi bi-people me-2"></i>Kelola Data Pendaftar</h2>

    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="card shadow">
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover mb-0">
                    <thead class="table-primary">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Lengkap</th>
                            <th scope="col">Email</th>
                            <th scope="col">Program</th>
                            <th scope="col" style="width: 150px;">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- DIGANTI DENGAN @forelse UNTUK PENANGANAN DATA KOSONG --}}
                        @forelse ($data as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->nama_lengkap }}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->program ?? '-' }}</td> {{-- Program mungkin null --}}
                                <td class="text-nowrap">
                                    <a href="{{ route('admin.pendaftar.edit', $item->id) }}" class="btn btn-sm btn-warning me-1" title="Edit Data">
                                        <i class="bi bi-pencil"></i> Edit
                                    </a>
                                    
                                    {{-- PERBAIKAN: Menggunakan FORM untuk DELETE method --}}
                                    <form action="{{ route('admin.pendaftar.destroy', $item->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus data {{ $item->nama_lengkap }}? Tindakan ini tidak bisa dibatalkan.');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger" title="Hapus Data">
                                            <i class="bi bi-trash"></i> Hapus
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="text-center py-5">
                                    <i class="bi bi-info-circle me-2"></i> Belum ada data pendaftar yang masuk.
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