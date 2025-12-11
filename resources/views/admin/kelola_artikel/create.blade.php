@extends('admin.layouts.main')
@section('title', 'Tambah Artikel')

@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">

<div class="container-fluid py-4">

    <div class="mb-4 border-bottom pb-3">
        <h1 class="h3 fw-bold">Tambah Artikel</h1>
    </div>

    <div class="card shadow-sm p-4">

        <form action="{{ route('admin.artikel.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            {{-- Judul --}}
            <div class="mb-3">
                <label class="form-label fw-semibold">Judul Artikel</label>
                <input type="text" name="judul" class="form-control @error('judul') is-invalid @enderror"
                       placeholder="Masukkan judul artikel" value="{{ old('judul') }}">
                @error('judul')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            {{-- Isi Konten --}}
            <div class="mb-3">
                <label class="form-label fw-semibold">Isi Artikel</label>
                <textarea name="isi" rows="6" class="form-control @error('isi') is-invalid @enderror"
                          placeholder="Tulis isi artikel di sini...">{{ old('isi') }}</textarea>
                @error('isi')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            {{-- Upload Gambar --}}
            <div class="mb-3">
                <label class="form-label fw-semibold">Gambar (Opsional)</label>
                <input type="file" name="gambar" accept="image/*"
                       class="form-control @error('gambar') is-invalid @enderror">

                @error('gambar')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror

                <small class="text-muted mt-1 d-block">
                    Format: JPG/PNG | Maksimal 2MB
                </small>
            </div>

            <div class="mt-4 d-flex justify-content-end">
                <a href="{{ route('admin.artikel.index') }}" class="btn btn-secondary me-2">
                    <i class="bi bi-arrow-left"></i> Kembali
                </a>
                <button type="submit" class="btn btn-primary">
                    <i class="bi bi-save"></i> Simpan Artikel
                </button>
            </div>

        </form>

    </div>

</div>
@endsection
