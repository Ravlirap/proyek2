@extends('admin.layouts.main')
@section('title', 'Kelola Pendaftar')

@section('content')
<h2 class="fw-bold mb-3"><i class="bi bi-people me-2"></i>Data Pendaftar</h2>

@if (session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

<table class="table table-bordered table-striped">
    <thead class="table-primary">
        <tr>
            <th>No</th>
            <th>Nama Lengkap</th>
            <th>Email</th>
            <th>Program</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $item)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $item->nama_lengkap }}</td>
            <td>{{ $item->email }}</td>
            <td>{{ $item->program }}</td>
            <td>
                <a href="{{ route('admin.pendaftar.edit', $item->id) }}" class="btn btn-sm btn-warning"><i class="bi bi-pencil"></i></a>
                <a href="{{ route('admin.pendaftar.delete', $item->id) }}" class="btn btn-sm btn-danger" onclick="return confirm('Hapus data ini?')"><i class="bi bi-trash"></i></a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
