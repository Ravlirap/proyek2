@extends('admin.layouts.main')
@section('title', 'Edit Artikel')
@section('content')

<div class="container-fluid py-4">

    <div class="mb-4 border-bottom pb-3">
        <h1 class="h3 fw-bold">Edit Artikel</h1>
    </div>

    <div class="card p-4 shadow-sm">

        <form action="{{ route('admin.artikel.update', $artikel->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label class="form-label fw-semibold">Judul Artikel</label>
                <input type="text" name="judul" class="form-control"
                    value="{{ $artikel->judul }}" required>
            </div>

            <div class="mb-3">
                <label class="form-label fw-semibold">Gambar Lama</label><br>
                <img src="{{ asset('img/artikel/' . $artikel->gambar) }}" width="120" class="rounded mb-2 shadow-sm">
                <input type="file" name="gambar" class="form-control mt-2">
                <small class="text-muted">Biarkan kosong jika tidak diganti</small>
            </div>

            <div class="mb-3">
                <label class="form-label fw-semibold">Konten</label>
                <textarea name="isi" rows="6" class="form-control" required>{{ old('isi', $artikel->isi) }}</textarea>
            </div>

            <div class="d-flex justify-content-end">
                <a href="{{ route('admin.artikel.index') }}" class="btn btn-secondary me-2">Kembali</a>
                <button class="btn btn-primary px-4">Update</button>
            </div>
        </form>

    </div>

</div>
@endsection
