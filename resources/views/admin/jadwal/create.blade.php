@extends('admin.layouts.main')

@section('title', 'Tambah Jadwal Cek Kesehatan')

@section('content')
<div class="container py-4">

    <h3 class="fw-bold mb-3">Tambah Jadwal Cek Kesehatan</h3>

    <div class="card shadow-sm">
        <div class="card-body">

            <form action="{{ route('admin.jadwal.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label class="form-label">Periode (Contoh: Desember 2025)</label>
                    <input type="text" name="periode" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Tanggal</label>
                    <input type="text" name="tanggal" class="form-control" placeholder="Contoh: 15 Desember 2025" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Jam</label>
                    <input type="text" name="jam" class="form-control" placeholder="Contoh: 08.00 - 11.00 WIB" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Tempat</label>
                    <input type="text" name="tempat" class="form-control" placeholder="LPK Bahasa Jepang Seikou" required>
                </div>

                <div class="d-flex justify-content-end">
                    <a href="{{ route('admin.jadwal.index') }}" class="btn btn-secondary me-2">
                        Batal
                    </a>
                    <button type="submit" class="btn btn-primary">
                        Simpan
                    </button>
                </div>

            </form>

        </div>
    </div>

</div>
@endsection