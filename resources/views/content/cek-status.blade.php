@extends('layouts.main')

@section('title', 'Cek Status Pendaftaran')

@section('content')
<div class="container py-5 mt-5">

    <h1 class="text-center fw-bold mb-4">Status Pendaftaran Anda</h1>

    {{-- Alert sukses (jika baru daftar) --}}
    @if(session('success'))
        <div class="alert alert-success text-center">
            {{ session('success') }}
        </div>
    @endif

    {{-- Card utama --}}
    <div class="card shadow-lg border-0">
        <div class="card-body p-4">

            {{-- Header --}}
            <div class="text-center mb-4">
                <h4 class="fw-bold text-primary">Kode Pendaftaran</h4>
                <h2 class="fw-bold">{{ $pendaftar->kode_pendaftaran }}</h2>
                <p class="text-muted">(Simpan kode ini untuk cek status di kemudian hari)</p>
            </div>

            <hr>

            {{-- Informasi Pendaftar --}}
            <h5 class="fw-bold mb-3">Data Pendaftar</h5>

            <div class="row mb-3">
                <div class="col-md-6">
                    <p><strong>Nama Lengkap:</strong> {{ $pendaftar->nama_lengkap }}</p>
                    <p><strong>Tempat / Tanggal Lahir:</strong> {{ $pendaftar->tempat_lahir }}, {{ $pendaftar->tanggal_lahir }}</p>
                    <p><strong>Jenis Kelamin:</strong> {{ ucfirst($pendaftar->jenis_kelamin) }}</p>
                    <p><strong>Alamat:</strong> {{ $pendaftar->alamat }}</p>
                </div>
                <div class="col-md-6">
                    <p><strong>No HP:</strong> {{ $pendaftar->no_hp }}</p>
                    <p><strong>Email:</strong> {{ $pendaftar->email }}</p>
                    <p><strong>Asal Sekolah:</strong> {{ $pendaftar->asal_sekolah }}</p>
                </div>
            </div>

            <hr>

            {{-- Status Pendaftaran --}}
            <h5 class="fw-bold mb-3">Status Pendaftaran</h5>

            @php
                $badge = [
                    'proses' => 'warning',
                    'cek kesehatan' => 'info',
                    'lulus' => 'success',
                    'tidak lulus' => 'danger',
                ][$pendaftar->status] ?? 'secondary';
            @endphp

            <div class="text-center">
                <span class="badge bg-{{ $badge }} p-2 px-3" style="font-size: 1rem;">
                    {{ strtoupper($pendaftar->status) }}
                </span>
            </div>
            
            <hr>

            {{-- JADWAL CEK KESEHATAN --}}
            @if ($pendaftar->status === 'cek kesehatan' && $jadwal)
                <h5 class="fw-bold mb-3 text-center text-info">
                    Informasi Jadwal Cek Kesehatan
                </h5>

                <div class="card border-info shadow-sm">
                    <div class="card-body">

                        <div class="row mb-2">
                            <div class="col-md-4 fw-bold">Periode</div>
                            <div class="col-md-8">{{ $jadwal->periode }}</div>
                        </div>

                        <div class="row mb-2">
                            <div class="col-md-4 fw-bold">Tanggal</div>
                            <div class="col-md-8">{{ $jadwal->tanggal }}</div>
                        </div>

                        <div class="row mb-2">
                            <div class="col-md-4 fw-bold">Jam</div>
                            <div class="col-md-8">{{ $jadwal->jam }}</div>
                        </div>

                        <div class="row">
                            <div class="col-md-4 fw-bold">Tempat</div>
                            <div class="col-md-8">{{ $jadwal->tempat }}</div>
                        </div>

                        <div class="alert alert-info mt-3 mb-0">
                            Harap datang tepat waktu dan membawa dokumen yang diperlukan.
                        </div>

                    </div>
                </div>
            @endif

            {{-- INFORMASI DITERIMA / LULUS --}}
            @if ($pendaftar->status === 'lulus')
                <hr>

                <div class="alert alert-success text-center shadow-sm">
                    <h4 class="fw-bold mb-3">🎉 Selamat!</h4>

                    <p class="mb-2">
                        Anda <strong>DITERIMA</strong> sebagai peserta di LPK Seikou Jepang.
                    </p>

                    <p class="mb-2">
                        Akun <strong>SISWA</strong> Anda telah <strong>dibuat secara otomatis</strong>.
                    </p>

                    <hr>

                    <p class="mb-1 fw-bold">Informasi Login:</p>
                    <p class="mb-1">
                        <strong>Email:</strong> {{ $pendaftar->email }}
                    </p>
                    <p class="mb-3">
                        <strong>Password:</strong> Kode Pendaftaran Anda
                    </p>

                    <a href="{{ route('login') }}" class="btn btn-success px-4">
                        Login Sekarang
                    </a>
                </div>
            @endif

            {{-- Tombol Aksi --}}
            <div class="text-center mt-4">
                <a href="{{ url('/') }}" class="btn btn-secondary">Kembali ke Beranda</a>
            </div>

        </div>
    </div>

</div>
@endsection
