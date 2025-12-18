@extends('admin.layouts.main')
@section('title', 'Kelola Pendaftar')

@section('content')
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">

<div class="container-fluid py-4">
    <div class="mb-4 d-flex justify-content-between align-items-center border-bottom pb-3">
        <div>
            <h1 class="h3 fw-bold text-gray-800">Kelola Pendaftar LPK Seikou</h1>
            <p class="text-muted mb-0">Daftar lengkap pendaftar LPK Seikou.</p>
        </div>
    </div>

    {{-- START: CARD UNTUK TABEL --}}
    <div class="card shadow mb-4">
        <div class="card-header py-3 bg-white border-bottom d-flex justify-content-between align-items-center">
            <h6 class="m-0 font-weight-bold text-primary">Data Pendaftar</h6>
        </div>
        <div class="card-body px-0 pt-0 pb-2">
            <div class="table-responsive p-0">
                <table class="table table-striped align-middle mb-0">
                    <thead class="bg-primary text-white">
                        <tr>
                            <th class="text-center text-uppercase text-xs font-weight-bolder opacity-7" width="5%">No</th>
                            <th class="text-uppercase text-xs font-weight-bolder opacity-7" width="15%">Nama Lengkap</th>
                            <th class="text-center text-uppercase text-xs font-weight-bolder opacity-7" width="10%">Jenis Kelamin</th>
                            <th class="text-uppercase text-xs font-weight-bolder opacity-7" width="15%">Asal Sekolah</th>
                            <th class="text-uppercase text-xs font-weight-bolder opacity-7" width="20%">Kontak</th>
                            <th class="text-center text-uppercase text-xs font-weight-bolder opacity-7" width="10%">Status</th>
                            <th class="text-center text-uppercase text-xs font-weight-bolder opacity-7" width="10%">Tgl Daftar</th>
                            <th class="text-center text-uppercase text-xs font-weight-bolder opacity-7" width="15%">Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse ($dataPendaftaran as $index => $pendaftaran)
                            <tr>
                                <td class="text-center text-secondary text-sm fw-bold">{{ $index + 1 }}</td>
                                <td class="fw-semibold text-dark text-sm">
                                    <i class="fas fa-user-circle me-2 text-primary"></i>
                                    {{ $pendaftaran->nama_lengkap }}
                                </td>

                                <td class="text-center">
                                    {{-- Menggunakan class bawaan Bootstrap untuk Laki-laki dan Perempuan --}}
                                    @php
                                        $jkClass = $pendaftaran->jenis_kelamin == 'Laki-laki' ? 'bg-primary' : 'bg-info';
                                        $jkIcon = $pendaftaran->jenis_kelamin == 'Laki-laki' ? 'fa-mars' : 'fa-venus';
                                    @endphp
                                    <span class="badge rounded-pill px-3 py-2 {{ $jkClass }} text-white text-uppercase">
                                        <i class="fas {{ $jkIcon }} me-1"></i> {{ substr($pendaftaran->jenis_kelamin, 0, 1) }}
                                    </span>
                                </td>

                                <td class="text-sm text-secondary">{{ $pendaftaran->asal_sekolah }}</td>

                                {{-- PERBAIKAN: Kolom Kontak yang Lebih Baik --}}
                                <td class="text-sm">
                                    <div class="d-flex flex-column">
                                        <div class="d-flex align-items-center mb-1">
                                            <i class="fas fa-phone me-2 text-success" style="min-width: 16px;"></i>
                                            <span class="text-dark text-truncate" title="{{ $pendaftaran->no_hp }}">
                                                {{ $pendaftaran->no_hp }}
                                            </span>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <i class="fas fa-envelope me-2 text-muted" style="min-width: 16px;"></i>
                                            <span class="text-muted text-truncate" title="{{ $pendaftaran->email }}">
                                                {{ $pendaftaran->email }}
                                            </span>
                                        </div>
                                    </div>
                                </td>

                                <td>
                                    @php
                                        $statusConfig = [
                                            'proses' => ['class' => 'warning', 'text' => 'Proses', 'icon' => 'fa-hourglass-half'],
                                            'cek kesehatan' => ['class' => 'info', 'text' => 'Cek Kes.', 'icon' => 'fa-hospital-alt'],
                                            'lulus' => ['class' => 'success', 'text' => 'Lulus', 'icon' => 'fa-check-circle'],
                                            'tidak lulus' => ['class' => 'danger', 'text' => 'Tdk Lulus', 'icon' => 'fa-times-circle'],
                                        ];
                                        $currentStatus = $statusConfig[strtolower($pendaftaran->status)] ?? $statusConfig['proses'];
                                    @endphp
                                    
                                    {{-- Mengubah Status menjadi TAMPILAN BADGE dan dropdown tersembunyi --}}
                                    <div class="dropdown text-center">
                                        <span class="badge rounded-pill bg-{{ $currentStatus['class'] }} text-white px-3 py-2 cursor-pointer dropdown-toggle"
                                            role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="fas {{ $currentStatus['icon'] }} me-1"></i> {{ $currentStatus['text'] }}
                                        </span>
                                        <ul class="dropdown-menu dropdown-menu-end shadow border-0" aria-labelledby="dropdownStatus{{ $pendaftaran->id }}">
                                            @foreach ($statusConfig as $key => $status)
                                                <li>
                                                    <a class="dropdown-item text-{{ $status['class'] }} @if(strtolower($pendaftaran->status) == $key) active bg-{{ $status['class'] }} text-white @endif"
                                                        href="#" onclick="document.getElementById('form-status-{{ $pendaftaran->id }}-{{ $key }}').submit(); return false;">
                                                        <i class="fas {{ $status['icon'] }} me-2"></i> {{ $status['text'] }}
                                                    </a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>

                                    {{-- Hidden forms for status update --}}
                                    @foreach ($statusConfig as $key => $status)
                                        <form id="form-status-{{ $pendaftaran->id }}-{{ $key }}" action="{{ route('admin.pendaftar.updateStatus', $pendaftaran->id) }}" method="POST" class="d-none">
                                            @csrf
                                            @method('PUT')
                                            <input type="hidden" name="status" value="{{ $key }}">
                                        </form>
                                    @endforeach
                                </td>

                                <td class="text-center text-sm text-secondary">
                                    <i class="fas fa-calendar-alt me-1"></i> {{ $pendaftaran->created_at->format('d M Y') }}
                                </td>

                                <td class="text-center">
                                    <div class="d-flex justify-content-center gap-2">
                                        <a href="{{ route('admin.pendaftar.show', $pendaftaran->id) }}"
                                            class="btn btn-outline-primary btn-action me-1">
                                            <i class="bi bi-eye"></i>
                                        </a>
                                        <button type="button"
                                                class="btn btn-outline-danger btn-action delete-btn"
                                                data-id="{{ $pendaftaran->id }}"
                                                data-nama="{{ $pendaftaran->nama_lengkap }}"
                                                data-bs-toggle="tooltip"
                                                data-bs-placement="top"
                                                title="Hapus">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                        <form id="delete-form-{{ $pendaftaran->id }}" action="{{ route('admin.pendaftar.destroy', $pendaftaran->id) }}" method="POST" class="d-none">
                                            @csrf
                                            @method('DELETE')
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="8" class="text-center text-muted py-5 bg-light">
                                    <i class="fas fa-box-open fa-2x mb-2"></i>
                                    <p class="mb-0">Tidak ada data pendaftar ditemukan.</p>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            {{-- Tambahkan Pagination jika menggunakan fitur pagination Laravel --}}
            @if ($dataPendaftaran instanceof \Illuminate\Pagination\LengthAwarePaginator && $dataPendaftaran->hasPages())
                <div class="card-footer clearfix bg-white">
                    {{ $dataPendaftaran->links() }}
                </div>
            @endif
        </div>
    </div>
    {{-- END: CARD UNTuk TABEL --}}
</div>

@push('styles')
<style>
    /* Mengubah warna header tabel */
    .table thead th {
        border-bottom: 2px solid #fff !important; /* Agar batas tidak terlihat */
        font-weight: 700;
        letter-spacing: 0.05em;
    }

    /* Memastikan hover state pada baris */
    .table-striped > tbody > tr:nth-of-type(odd) > * {
        background-color: rgba(0, 0, 0, 0.03);
    }
    .table > tbody > tr:hover {
        background-color: rgba(0, 0, 0, 0.075);
    }

    /* Status Badge Styling */
    .badge {
        font-weight: 600;
    }

    /* Icon Button Styles */
    .btn-icon {
        width: 32px;
        height: 32px;
        padding: 0;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        border-radius: 6px;
        transition: all 0.2s ease;
    }

    .btn-icon:hover {
        transform: translateY(-1px);
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .btn-light-info {
        color: #0dcaf0;
        background-color: rgba(13, 202, 240, 0.1);
        border: 1px solid rgba(13, 202, 240, 0.3);
    }

    .btn-light-info:hover {
        background-color: #0dcaf0;
        color: #fff;
    }

    .btn-light-danger {
        color: #dc3545;
        background-color: rgba(220, 53, 69, 0.1);
        border: 1px solid rgba(220, 53, 69, 0.3);
    }

    .btn-light-danger:hover {
        background-color: #dc3545;
        color: #fff;
    }

    /* PERBAIKAN: Styling khusus untuk kolom kontak */
    .table td:nth-child(5) {
        min-width: 200px;
        max-width: 250px; 
    }

    /* Memastikan teks kontak tidak meluber */
    .text-truncate {
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
        display: inline-block;
        max-width: 180px;
    }
</style>
@endpush

@push('scripts')
<script>
    // Inisialisasi Tooltip Bootstrap (diperlukan di banyak template admin)
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
    var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl)
    })

    // Logika SweetAlert untuk konfirmasi Hapus (lebih profesional)
    document.addEventListener('DOMContentLoaded', function () {
        const deleteButtons = document.querySelectorAll('.delete-btn');

        deleteButtons.forEach(button => {
            button.addEventListener('click', function() {
                const id = this.getAttribute('data-id');
                const nama = this.getAttribute('data-nama');

                Swal.fire({
                    title: 'Yakin Ingin Menghapus?',
                    html: `Anda akan menghapus pendaftar atas nama <strong>${nama}</strong>. Data yang dihapus tidak dapat dikembalikan.`,
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#dc3545',
                    cancelButtonColor: '#6c757d',
                    confirmButtonText: 'Ya, Hapus!',
                    cancelButtonText: 'Batal'
                }).then((result) => {
                    if (result.isConfirmed) {
                        document.getElementById(`delete-form-${id}`).submit();
                    }
                });
            });
        });
    });
</script>
@endpush
@endsection