@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>Galeri Kegiatan</h2>
        <a href="{{ route('galeri.create') }}" class="btn btn-primary">+ Tambah Foto</a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if($galeris->count())
        <div class="row">
            @foreach($galeris as $galeri)
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm">
                        @if($galeri->gambar)
                            <img src="{{ asset('storage/' . $galeri->gambar) }}" class="card-img-top" alt="{{ $galeri->judul }}" style="height: 240px; object-fit: cover;">
                        @endif
                        <div class="card-body text-center">
                            <h5 class="card-title">{{ $galeri->judul }}</h5>
                            <p class="text-muted small">{{ Str::limit($galeri->deskripsi, 80) }}</p>
                            <a href="{{ route('galeri.show', $galeri->id) }}" class="btn btn-outline-primary btn-sm">Lihat</a>
                            <a href="{{ route('galeri.edit', $galeri->id) }}" class="btn btn-outline-warning btn-sm">Edit</a>
                            <form action="{{ route('galeri.destroy', $galeri->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus foto ini?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-outline-danger btn-sm">Hapus</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="mt-4">
            {{ $galeris->links() }}
        </div>
    @else
        <p class="text-muted">Belum ada foto di galeri.</p>
    @endif
</div>
@endsection
