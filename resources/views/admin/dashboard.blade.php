@extends('admin.layouts.main')

@section('title', 'Dashboard Admin')

@section('content')
<div class="container-fluid py-4">
    <div class="mb-5 border-bottom pb-2">
        <h1 class="h3 fw-bold text-gray-800">Dashboard Admin Lpk Seikou</h1>
        <p class="text-muted">Ringkasan cepat dan data pendaftar terbaru LPK Seikou.</p>
    </div>

    <div class="row mb-4">
        
        <div class="col-md-4 mb-3">
            <div class="card shadow-sm border-start border-5 border-primary h-100">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col me-2">
                            <div class="text-uppercase fw-bold text-primary mb-1">
                                Total Pendaftar Sepanjang Masa</div>
                            <div class="h3 mb-0 fw-bolder">{{ $jumlah ?? 0 }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="bi bi-person-lines-fill text-primary fs-2"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-3">
            <div class="card shadow-sm border-start border-5 border-success h-100">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col me-2">
                            <div class="text-uppercase fw-bold text-success mb-1">
                                Pendaftar Bulan Ini</div>
                            <div class="h3 mb-0 fw-bolder">45</div>
                        </div>
                        <div class="col-auto">
                            <i class="bi bi-calendar-check text-success fs-2"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-3">
            <div class="card shadow-sm border-start border-5 border-warning h-100">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col me-2">
                            <div class="text-uppercase fw-bold text-warning mb-1">
                                Pendaftar Belum Terproses</div>
                            <div class="h3 mb-0 fw-bolder">3</div>
                        </div>
                        <div class="col-auto">
                            <i class="bi bi-exclamation-circle text-warning fs-2"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="row">
        
        <div class="col-lg-8 mb-4">
            <div class="card shadow">
                <div class="card-header py-3 d-flex justify-content-between align-items-center">
                    <h6 class="m-0 fw-bold text-primary">5 Pendaftar Terbaru</h6>
                    <a href="{{ route('admin.pendaftar.index') }}" class="btn btn-sm btn-outline-primary">Lihat Semua <i class="bi bi-arrow-right"></i></a>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-hover mb-0">
                            <thead class="bg-light">
                                <tr>
                                    <th scope="col">Nama Pendaftar</th>
                                    <th scope="col">Program Dilamar</th>
                                    <th scope="col">Tanggal</th>
                                    <th scope="col">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                {{-- Loop data dari database di sini. Ganti placeholder ini. --}}
                                <tr>
                                    <td>Azhar</td>
                                    <td>Magang Manufaktur</td>
                                    <td>20 Okt 2025</td>
                                    <td><span class="badge bg-success">Diterima</span></td>
                                </tr>
                                <tr>
                                    <td>Firly</td>
                                    <td>SSW Kaigo</td>
                                    <td>19 Okt 2025</td>
                                    <td><span class="badge bg-warning text-dark">Pending</span></td>
                                </tr>
                                <tr>
                                    <td>Bunga</td>
                                    <td>Bahasa N5-N4</td>
                                    <td>18 Okt 2025</td>
                                    <td><span class="badge bg-info">Diproses</span></td>
                                </tr>
                                <tr>
                                    <td>Siti Karinah</td>
                                    <td>Magang Konstruksi</td>
                                    <td>17 Okt 2025</td>
                                    <td><span class="badge bg-success">Diterima</span></td>
                                </tr>
                                <tr>
                                    <td>Sucipto</td>
                                    <td>SSW Food Service</td>
                                    <td>16 Okt 2025</td>
                                    <td><span class="badge bg-danger">Ditolak</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4 mb-4">
            <div class="card shadow">
                <div class="card-header py-3">
                    <h6 class="m-0 fw-bold text-primary">Distribusi Pendaftar per Program</h6>
                </div>
                <div class="card-body">
                    <h4 class="small fw-bold">Magang Manufaktur <span class="float-end">75 Pendaftar</span></h4>
                    <div class="progress mb-3">
                        <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    
                    <h4 class="small fw-bold">SSW Kaigo <span class="float-end">45 Pendaftar</span></h4>
                    <div class="progress mb-3">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    
                    <h4 class="small fw-bold">Bahasa N5-N4 <span class="float-end">30 Pendaftar</span></h4>
                    <div class="progress mb-3">
                        <div class="progress-bar bg-warning" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>

                    <p class="mt-4 text-center">
                        <a href="#" class="small text-decoration-none">Lihat detail semua program &rarr;</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    
</div>
@endsection