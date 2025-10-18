@extends('layouts.main')

@section('content')
<section class="form-section">
    <div class="container">
        <h1 class="page-title text-center">Tambah Artikel Baru</h1>

        <form action="{{ route('artikel.store') }}" method="POST" enctype="multipart/form-data" class="form-card">
            @csrf
            <div class="mb-3">
                <label for="judul" class="form-label">Judul Artikel</label>
                <input type="text" name="judul" id="judul" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="isi" class="form-label">Isi Artikel</label>
                <textarea name="isi" id="isi" rows="6" class="form-control" required></textarea>
            </div>

            <div class="mb-3">
                <label for="gambar" class="form-label">Gambar (opsional)</label>
                <input type="file" name="gambar" id="gambar" class="form-control">
            </div>

            <div class="text-end">
                <a href="{{ route('artikel.index') }}" class="btn btn-secondary">Batal</a>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>
    </div>
</section>

<style>
.form-section {
    padding-top: 140px;
    padding-bottom: 80px;
    background: #fff;
}
.form-card {
    background: #fff;
    padding: 30px;
    border-radius: 12px;
    box-shadow: 0 4px 10px rgba(0,0,0,0.08);
    max-width: 700px;
    margin: 0 auto;
}
.page-title {
    margin-bottom: 30px;
    font-weight: 700;
}
</style>
@endsection
