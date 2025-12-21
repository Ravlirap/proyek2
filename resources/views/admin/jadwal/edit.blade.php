@extends('admin.layouts.main')

@section('title', 'Edit Jadwal Cek Kesehatan')

@section('content')
<div class="container py-4">

    <h3 class="fw-bold mb-3">Edit Jadwal Cek Kesehatan</h3>

    <div class="card shadow-sm">
        <div class="card-body">

            <form action="{{ route('admin.jadwal.update', $jadwal->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label class="form-label">Periode</label>
                    <input type="text" name="periode" class="form-control" value="{{ $jadwal->periode }}" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Tanggal</label>
                    <input type="text" name="tanggal" class="form-control" value="{{ $jadwal->tanggal }}" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Jam</label>
                    <input type="text" name="jam" class="form-control" value="{{ $jadwal->jam }}" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Tempat</label>
                    <input type="text" name="tempat" class="form-control" value="{{ $jadwal->tempat }}" required>
                </div>

                <div class="d-flex justify-content-end">
                    <a href="{{ route('admin.jadwal.index') }}" class="btn btn-secondary me-2">
                        Kembali
                    </a>
                    <button type="submit" class="btn btn-success">
                        Update
                    </button>
                </div>

            </form>

        </div>
    </div>

</div>
@endsection