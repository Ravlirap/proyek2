@extends('layouts.main')

@section('content')
<style>
body {
    padding-top: 140px;
}
</style>
<div class="container py-5">
    <h2 class="mb-4">Edit Foto Galeri</h2>

    <form action="{{ route('galeri.update', $galeri->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="judul" class="form-label">Judul Foto</label>
            <input type="text" name="judul" class="form-control" id="judul" value="{{ old('judul', $galeri->judul) }}" required>
            @error('judul') <div class="text-danger small">{{ $message }}</div> @enderror
        </div>

        <div class="mb-3">
            <label for="deskripsi" class="form-label">Deskripsi</label>
            <textarea name="deskripsi" class="form-control" id="deskripsi" rows="4">{{ old('deskripsi', $galeri->deskripsi) }}</textarea>
            @error('deskripsi') <div class="text-danger small">{{ $message }}</div> @enderror
        </div>

        <div class="mb-3">
            <label for="gambar" class="form-label">Foto</label>
            @if($galeri->gambar)
                <div class="mb-2">
                    <img src="{{ asset('storage/' . $galeri->gambar) }}" width="200" class="rounded shadow-sm">
                </div>
            @endif
            <input type="file" name="gambar" class="form-control" id="gambar" accept="image/*">
            @error('gambar') <div class="text-danger small">{{ $message }}</div> @enderror
        </div>

        <div class="d-flex justify-content-end">
            <a href="{{ route('galeri.index') }}" class="btn btn-secondary me-2">Batal</a>
            <button type="submit" class="btn btn-primary">Perbarui</button>
        </div>
    </form>
</div>
@endsection
