@extends('admin.layouts.main')
@section('title', 'Detail Pendaftar')

@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">

<div class="container-fluid py-4">

    <!-- Header -->
    <div class="mb-4 pb-3 border-bottom">
        <h1 class="h3 fw-bold text-dark">Detail Pendaftar LPK Seikou</h1>
        <p class="text-muted">Informasi lengkap dan terverifikasi pendaftar.</p>
    </div>

    <!-- Main Card -->
    <div class="card shadow-sm border-0 rounded-4 p-3">

        <!-- FOTO PROFIL -->
        <div class="text-center mb-4">
            <div class="rounded-circle overflow-hidden shadow-sm mx-auto" style="width: 150px; height:150px;">
                @if($dataPendaftaran->foto)
                    <img src="{{ asset('uploads/foto/'.$dataPendaftaran->foto) }}" 
                         class="w-100 h-100 object-fit-cover">
                @else
                    <img src="https://ui-avatars.com/api/?name={{ $dataPendaftaran->nama_lengkap }}&background=0D8ABC&color=fff"
                         class="w-100 h-100 object-fit-cover">
                @endif
            </div>

            <h4 class="mt-3 fw-bold">{{ $dataPendaftaran->nama_lengkap }}</h4>
            <span class="badge 
                @if($dataPendaftaran->status == 'Diterima') bg-success
                @elseif($dataPendaftaran->status == 'Ditolak') bg-danger
                @else bg-warning text-dark @endif 
                px-3 py-2 rounded-pill">
                {{ ucfirst($dataPendaftaran->status) }}
            </span>
        </div>

        <hr>

        <!-- INFORMASI PRIBADI -->
        <h5 class="fw-bold text-primary mb-3"><i class="bi bi-person-badge"></i> Informasi Pribadi</h5>

        <div class="row g-3 mb-4">
            <div class="col-md-6">
                <label class="fw-semibold text-muted">Nama Lengkap</label>
                <div class="p-2 bg-light rounded">{{ $dataPendaftaran->nama_lengkap }}</div>
            </div>

            <div class="col-md-6">
                <label class="fw-semibold text-muted">Jenis Kelamin</label>
                <div class="p-2 bg-light rounded">{{ ucfirst($dataPendaftaran->jenis_kelamin) }}</div>
            </div>

            <div class="col-md-6">
                <label class="fw-semibold text-muted">Tempat Lahir</label>
                <div class="p-2 bg-light rounded">{{ $dataPendaftaran->tempat_lahir }}</div>
            </div>

            <div class="col-md-6">
                <label class="fw-semibold text-muted">Tanggal Lahir</label>
                <div class="p-2 bg-light rounded">{{ $dataPendaftaran->tanggal_lahir }}</div>
            </div>
        </div>

        <!-- FISIK -->
        <h5 class="fw-bold text-primary mb-3"><i class="bi bi-heart-pulse"></i> Informasi Fisik</h5>

        <div class="row g-3 mb-4">
            <div class="col-md-6">
                <label class="fw-semibold text-muted">Tinggi Badan (cm)</label>
                <div class="p-2 bg-light rounded">{{ $dataPendaftaran->tinggi_badan }}</div>
            </div>

            <div class="col-md-6">
                <label class="fw-semibold text-muted">Berat Badan (kg)</label>
                <div class="p-2 bg-light rounded">{{ $dataPendaftaran->berat_badan }}</div>
            </div>
        </div>

        <!-- KONTAK & ALAMAT -->
        <h5 class="fw-bold text-primary mb-3"><i class="bi bi-envelope"></i> Kontak & Alamat</h5>

        <div class="row g-3 mb-4">
            <div class="col-md-6">
                <label class="fw-semibold text-muted">Email</label>
                <div class="p-2 bg-light rounded">{{ $dataPendaftaran->email }}</div>
            </div>

            <div class="col-md-6">
                <label class="fw-semibold text-muted">No. HP</label>
                <div class="p-2 bg-light rounded">{{ $dataPendaftaran->no_hp }}</div>
            </div>

            <div class="col-md-12">
                <label class="fw-semibold text-muted">Alamat</label>
                <div class="p-2 bg-light rounded">{{ $dataPendaftaran->alamat }}</div>
            </div>
        </div>

        <!-- PENDIDIKAN -->
        <h5 class="fw-bold text-primary mb-3"><i class="bi bi-mortarboard"></i> Informasi Pendidikan</h5>

        <div class="row g-3 mb-4">
            <div class="col-md-12">
                <label class="fw-semibold text-muted">Asal Sekolah</label>
                <div class="p-2 bg-light rounded">{{ $dataPendaftaran->asal_sekolah }}</div>
            </div>
        </div>

        <!-- DOKUMEN -->
        <h5 class="fw-bold text-primary mb-3"><i class="bi bi-folder2-open"></i> Dokumen Pendaftaran</h5>

        <div class="row g-4 mb-4">

            <div class="col-md-3">
                <label class="fw-semibold">Ijazah</label><br>
                @if($dataPendaftaran->ijazah)
                    <a href="{{ asset('uploads/ijazah/'.$dataPendaftaran->ijazah) }}" 
                       target="_blank" class="btn btn-outline-primary w-100">
                        <i class="bi bi-file-earmark-text"></i> Lihat
                    </a>
                @else
                    <p class="text-muted">Tidak ada</p>
                @endif
            </div>

            <div class="col-md-3">
                <label class="fw-semibold">KTP</label><br>
                @if($dataPendaftaran->ktp)
                    <a href="{{ asset('uploads/ktp/'.$dataPendaftaran->ktp) }}" 
                       target="_blank" class="btn btn-outline-primary w-100">
                        <i class="bi bi-file-earmark-text"></i> Lihat
                    </a>
                @else
                    <p class="text-muted">Tidak ada</p>
                @endif
            </div>

            <div class="col-md-3">
                <label class="fw-semibold">KK</label><br>
                @if($dataPendaftaran->kk)
                    <a href="{{ asset('uploads/kk/'.$dataPendaftaran->kk) }}" 
                       target="_blank" class="btn btn-outline-primary w-100">
                        <i class="bi bi-file-earmark-text"></i> Lihat
                    </a>
                @else
                    <p class="text-muted">Tidak ada</p>
                @endif
            </div>

        </div>

        <!-- CREATED AT -->
        <h5 class="fw-bold text-primary mb-3"><i class="bi bi-clock-history"></i> Riwayat</h5>

        <div class="p-2 bg-light rounded mb-4">
            <strong>Tanggal Daftar:</strong> {{ $dataPendaftaran->created_at->format('d M Y - H:i') }}
        </div>

        <!-- BUTTON -->
        <a href="{{ route('admin.pendaftar.index') }}" class="btn btn-secondary">
            <i class="bi bi-arrow-left"></i> Kembali
        </a>

    </div>
</div>

@endsection
