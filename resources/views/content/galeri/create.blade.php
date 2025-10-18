@extends('layouts.app')

@section('content')
<div class="container py-5">
    <h2 class="mb-4">Tambah Foto Galeri</h2>

    <form action="{{ route('galeri.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label for="judul" class="form-label">Judul Foto</label>
            <input type="text" name="judul" class="form-control" id="judul" value="{{ old('judul') }}" required>
            @error('judul') <div class="text-danger small">{{ $message }}</div> @enderror
        </div>

        <div class="mb-3">
            <label for="deskripsi" class="form-label">Deskripsi</label>
            <textarea name="deskripsi" class="form-control" id="deskripsi" rows="4">{{ old('deskripsi') }}</textarea>
            @error('deskripsi') <div class="text-danger small">{{ $message }}</div> @enderror
        </div>

        <div class="mb-3">
            <label for="gambar" class="form-label">Upload Foto</label>
            <input type="file" name="gambar" class="form-control" id="gambar" accept="image/*" required>
            @error('gambar') <div class="text-danger small">{{ $message }}</div> @enderror
        </div>

        <div class="d-flex justify-content-end">
            <a href="{{ route('galeri.index') }}" class="btn btn-secondary me-2">Batal</a>
            <button type="submit" class="btn btn-success">Simpan</button>
        </div>
    </form>
</div>
@endsection
