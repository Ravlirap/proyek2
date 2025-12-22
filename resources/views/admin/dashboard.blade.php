@extends('admin.layouts.main')
@section('title', 'Dashboard Admin')

@section('content')
    <style>
        /* Simple animations */
        .card {
            animation: fadeInUp 0.6s ease-out forwards;
            opacity: 0;
            transform: translateY(20px);
        }

        .card:nth-child(1) {
            animation-delay: 0.1s;
        }

        .card:nth-child(2) {
            animation-delay: 0.2s;
        }

        .card:nth-child(3) {
            animation-delay: 0.3s;
        }

        .card:nth-child(4) {
            animation-delay: 0.4s;
        }

        .card:nth-child(5) {
            animation-delay: 0.5s;
        }

        @keyframes fadeInUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .progress-bar {
            animation: progressFill 1.5s ease-out forwards;
            width: 0;
        }

        @keyframes progressFill {
            to {
                width: var(--progress-width);
            }
        }

        /* Hover effects */
        .card:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        .btn {
            transition: all 0.3s ease;
        }

        .btn:hover {
            transform: scale(1.05);
        }
    </style>
    <div class="container-fluid py-4">

        {{-- HEADER --}}
        <div class="d-flex justify-content-between align-items-center mb-4">
            <div>
                <h2 class="fw-bold mb-0">Dashboard Admin</h2>
                <small class="text-muted">Ringkasan & analisis data pendaftar LPK Seikou</small>
            </div>
            <span class="badge bg-primary fs-6">Tahun {{ date('Y') }}</span>
        </div>

        {{-- KPI --}}
        <div class="row g-3 mb-4">
            @php
                $kpi = [
                    ['Total', $totalPendaftar, 'primary', 'people-fill'],
                    ['Di Proses', $diproses, 'warning', 'hourglass-split'],
                    ['Cek Kesehatan', $cekKesehatan, 'info', 'clipboard-heart'],
                    ['lulus', $lulus, 'success', 'check-circle-fill'],
                    ['tidak lulus', $tidakLulus, 'danger', 'x-circle-fill'],
                ];
            @endphp

            @foreach ($kpi as $item)
                <div class="col-md-3 col-lg">
                    <div class="card shadow-sm border-0 h-100">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <small class="text-muted">{{ $item[0] }}</small>
                                    <h3 class="fw-bold mb-0">{{ $item[1] }}</h3>
                                </div>
                                <i class="bi bi-{{ $item[3] }} fs-2 text-{{ $item[2] }}"></i>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        {{-- CHART --}}
        <div class="row g-4 mb-4">
            <div class="col-lg-4">
                <div class="card shadow-sm h-100">
                    <div class="card-header fw-bold">Status Pendaftar</div>
                    <div class="card-body">
                        <canvas id="statusChart"></canvas>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card shadow-sm h-100">
                    <div class="card-header fw-bold">Jenis Kelamin</div>
                    <div class="card-body">
                        <canvas id="genderChart"></canvas>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card shadow-sm h-100">
                    <div class="card-header fw-bold">Top 5 Asal Sekolah</div>
                    <div class="card-body">
                        @foreach ($topSekolah as $s)
                            <div class="mb-3">
                                <div class="d-flex justify-content-between">
                                    <strong>{{ $s->asal_sekolah }}</strong>
                                    <span>{{ $s->total }}</span>
                                </div>
                                <div class="progress" style="height:6px">
                                    <div class="progress-bar bg-primary"
                                        style="width: {{ ($s->total / $topSekolah->max('total')) * 100 }}%; --progress-width: {{ ($s->total / $topSekolah->max('total')) * 100 }}%">
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        {{-- TREND BULANAN --}}
        <div class="card shadow-sm mb-4">
            <div class="card-header fw-bold">
                Trend Pendaftaran Per Bulan ({{ date('Y') }})
            </div>
            <div class="card-body">
                <canvas id="trendChart" height="100"></canvas>
            </div>
        </div>

        {{-- TABLE --}}
        <div class="card shadow-sm mb-4">
            <div class="card-header fw-bold d-flex justify-content-between">
                Pendaftar Terbaru
                <a href="{{ route('admin.pendaftar.index') }}" class="btn btn-sm btn-outline-primary">Lihat Semua</a>
            </div>
            <div class="table-responsive">
                <table class="table table-hover mb-0">
                    <thead class="table-light">
                        <tr>
                            <th>Nama</th>
                            <th>Asal Sekolah</th>
                            <th>Tanggal</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pendaftarTerbaru as $p)
                            <tr>
                                <td>{{ $p->nama_lengkap }}</td>
                                <td>{{ $p->asal_sekolah }}</td>
                                <td>{{ $p->created_at->format('d M Y') }}</td>
                                <td>
                                    <span
                                        class="badge bg-{{ $p->status == 'lulus'
                                            ? 'success'
                                            : ($p->status == 'tidakLulus'
                                                ? 'danger'
                                                : ($p->status == 'cek kesehatan'
                                                    ? 'info'
                                                    : 'warning')) }}">
                                        {{ ucfirst($p->status) }}
                                    </span>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        {{-- INSIGHT --}}
        <div class="alert alert-info shadow-sm">
            <strong>Insight Sistem:</strong>
            Tingkat kelulusan pendaftar saat ini sebesar
            <b>{{ $totalPendaftar > 0 ? round(($lulus / $totalPendaftar) * 100, 1) : 0 }}%</b>.
            Data diperbarui secara real-time dari database.
        </div>

    </div>

    {{-- CHART --}}
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        new Chart(statusChart, {
            type: 'pie',
            data: {
                labels: {!! json_encode($statusChart->keys()) !!},
                datasets: [{
                    data: {!! json_encode($statusChart->values()) !!}
                }]
            },
            options: {
                responsive: true,
                animation: {
                    duration: 1000
                }
            }
        });

        new Chart(genderChart, {
            type: 'doughnut',
            data: {
                labels: {!! json_encode($genderChart->keys()) !!},
                datasets: [{
                    data: {!! json_encode($genderChart->values()) !!}
                }]
            },
            options: {
                responsive: true,
                animation: {
                    duration: 1000
                }
            }
        });

        new Chart(trendChart, {
            type: 'line',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Agu', 'Sep', 'Okt', 'Nov', 'Des'],
                datasets: [{
                    label: 'Jumlah Pendaftar',
                    data: {!! json_encode(
                        collect(range(1, 12))->map(fn($b) => optional($trendBulanan->firstWhere('bulan', $b))->total ?? 0),
                    ) !!},
                    tension: 0.4,
                    fill: true
                }]
            },
            options: {
                responsive: true,
                animation: {
                    duration: 1000
                }
            }
        });
    </script>
@endsection
