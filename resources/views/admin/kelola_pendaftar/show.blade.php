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
    <div class="card shadow-sm border-0 rounded-4 p-4">

        <!-- FOTO PROFIL -->
        <div class="text-center mb-4">
            <div class="rounded-circle overflow-hidden shadow-sm mx-auto" style="width: 150px; height:150px;">
                @if($dataPendaftaran->foto)
                    <img src="{{ asset('img/data_pengguna/foto/'.$dataPendaftaran->foto) }}" class="w-100 h-100 object-fit-cover">
                @else
                    <img src="https://ui-avatars.com/api/?name={{ $dataPendaftaran->nama_lengkap }}&background=0D8ABC&color=fff" class="w-100 h-100 object-fit-cover">
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

        <!-- INFORMASI DETAIL -->
        <div class="row g-4">
            <div class="col-md-6">
                <div class="card border-0 shadow-sm rounded-3">
                    <div class="card-body">
                        <h5 class="fw-bold text-primary mb-3"><i class="bi bi-person-badge"></i> Informasi Pribadi</h5>
                        <p><strong>Nama Lengkap:</strong> {{ $dataPendaftaran->nama_lengkap }}</p>
                        <p><strong>Tempat Lahir:</strong> {{ $dataPendaftaran->tempat_lahir }}</p>
                        <p><strong>Tanggal Lahir:</strong> {{ $dataPendaftaran->tanggal_lahir }}</p>
                        <p><strong>Jenis Kelamin:</strong> {{ ucfirst($dataPendaftaran->jenis_kelamin) }}</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card border-0 shadow-sm rounded-3">
                    <div class="card-body">
                        <h5 class="fw-bold text-primary mb-3"><i class="bi bi-heart-pulse"></i> Informasi Fisik</h5>
                        <p><strong>Tinggi Badan:</strong> {{ $dataPendaftaran->tinggi_badan }} cm</p>
                        <p><strong>Berat Badan:</strong> {{ $dataPendaftaran->berat_badan }} kg</p>
                        <p><strong>Alamat:</strong> {{ $dataPendaftaran->alamat }}</p>
                        <p><strong>Asal Sekolah:</strong> {{ $dataPendaftaran->asal_sekolah }}</p>
                    </div>
                </div>
            </div>

        <!-- KONTAK -->
            <div class="col-md-6">
                <div class="card border-0 shadow-sm rounded-3">
                    <div class="card-body">
                        <h5 class="fw-bold text-primary mb-3"><i class="bi bi-envelope"></i> Kontak</h5>
                        <p><strong>Email:</strong> {{ $dataPendaftaran->email }}</p>
                        <p><strong>No. HP:</strong> {{ $dataPendaftaran->no_hp }}</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card border-0 shadow-sm rounded-3">
                    <div class="card-body">
                        <h5 class="fw-bold text-primary mb-3"><i class="bi bi-clock-history"></i> Riwayat</h5>
                        <p><strong>Tanggal Daftar:</strong> {{ $dataPendaftaran->created_at->format('d M Y - H:i') }}</p>
                        <p><strong>Terakhir Diubah:</strong> {{ $dataPendaftaran->updated_at->format('d M Y - H:i') }}</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- DOKUMEN -->
        <div class="card border-0 shadow-sm rounded-3 mt-4">
            <div class="card-body">
                <h5 class="fw-bold text-primary mb-3"><i class="bi bi-folder2-open"></i> Dokumen Pendaftaran</h5>
                <div class="row g-4 text-center">
                    <div class="col-md-4">
                        <label class="fw-semibold">Ijazah</label><br>
                        @if($dataPendaftaran->ijazah)
                            <a href="{{ asset('img/data_pengguna/ijazah/'.$dataPendaftaran->ijazah) }}" target="_blank" class="btn btn-sm btn-outline-primary w-75">
                                <i class="bi bi-file-earmark-text"></i> Lihat
                            </a>
                        @else
                            <p class="text-muted">Tidak ada</p>
                        @endif
                    </div>
                    <div class="col-md-4">
                        <label class="fw-semibold">KTP</label><br>
                        @if($dataPendaftaran->ktp)
                            <a href="{{ asset('img/data_pengguna/ktp/'.$dataPendaftaran->ktp) }}" target="_blank" class="btn btn-sm btn-outline-primary w-75">
                                <i class="bi bi-file-earmark-text"></i> Lihat
                            </a>
                        @else
                            <p class="text-muted">Tidak ada</p>
                        @endif
                    </div>
                    <div class="col-md-4">
                        <label class="fw-semibold">KK</label><br>
                        @if($dataPendaftaran->kk)
                            <a href="{{ asset('img/data_pengguna/kk/'.$dataPendaftaran->kk) }}" target="_blank" class="btn btn-sm btn-outline-primary w-75">
                                <i class="bi bi-file-earmark-text"></i> Lihat
                            </a>
                        @else
                            <p class="text-muted">Tidak ada</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>

        <!-- BUTTON -->
        <div class="mt-4">
            <a href="{{ route('admin.pendaftar.index') }}" class="btn btn-secondary">
                <i class="bi bi-arrow-left"></i> Kembali
            </a>
        </div>

    </div>
</div>
@endsection