@extends('admin.layouts.main')
@section('title', 'Edit Data Pendaftar')

@section('content')
<h2 class="fw-bold mb-3"><i class="bi bi-pencil-square me-2"></i>Edit Data Pendaftar</h2>

<form action="{{ route('admin.pendaftar.update', $pendaftar->id) }}" method="POST">
    @csrf
    <div class="mb-3">
        <label class="form-label">Nama Lengkap</label>
        <input type="text" name="nama_lengkap" class="form-control" value="{{ $pendaftar->nama_lengkap }}">
    </div>
    <div class="mb-3">
        <label class="form-label">Email</label>
        <input type="email" name="email" class="form-control" value="{{ $pendaftar->email }}">
    </div>
    <div class="mb-3">
        <label class="form-label">Program</label>
        <input type="text" name="program" class="form-control" value="{{ $pendaftar->program }}">
    </div>
    <button type="submit" class="btn btn-success"><i class="bi bi-save"></i> Simpan</button>
    <a href="{{ route('admin.pendaftar.index') }}" class="btn btn-secondary">Kembali</a>
</form>
@endsection
