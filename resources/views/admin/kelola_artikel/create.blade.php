@extends('admin.layouts.main')
@section('title', 'Tambah Artikel')
@section('content')

<div class="container-fluid py-4">

    <div class="mb-4 border-bottom pb-3">
        <h1 class="h3 fw-bold">Tambah Artikel</h1>
    </div>

    <div class="card p-4 shadow-sm">

        <form action="{{ route('admin.artikel.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="mb-3">
                <label class="form-label fw-semibold">Judul Artikel</label>
                <input type="text" name="judul" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label fw-semibold">Gambar</label>
                <input type="file" name="gambar" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label fw-semibold">Konten</label>
                <textarea name="konten" rows="6" class="form-control" required></textarea>
            </div>

            <div class="d-flex justify-content-end">
                <a href="{{ route('admin.artikel.index') }}" class="btn btn-secondary me-2">Kembali</a>
                <button class="btn btn-primary px-4">Simpan</button>
            </div>
        </form>

    </div>

</div>
@endsection
