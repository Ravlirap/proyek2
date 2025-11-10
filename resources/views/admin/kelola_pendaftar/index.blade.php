@extends('admin.layouts.main')
@section('title', 'Kelola Pendaftar')
@section('content')
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
<div class="container-fluid py-4">
    <div class="mb-4 border-bottom pb-3">
        <h1 class="h3 fw-bold text-gray-800">Kelola Pendaftar LPK Seikou</h1>
        <p class="text-muted mb-0">Daftar lengkap pendaftar LPK Seikou.</p>
    </div>

    <div class="card-body px-0 pt-0 pb-2">
    <div class="table-responsive">
        <table class="table table-hover align-middle mb-0">
            <thead class="bg-light border-bottom">
                <tr>
                    <th class="text-center" width="5%">No</th>
                    <th>Nama Lengkap</th>
                    <th class="text-center">Jenis Kelamin</th>
                    <th>Asal Sekolah</th>
                    <th>No. HP</th>
                    <th>Email</th>
                    <th class="text-center">Status</th>
                    <th class="text-center">Tgl Daftar</th>
                    <th class="text-center" width="15%">Aksi</th>
                </tr>
            </thead>

            <tbody>
                @forelse ($dataPendaftaran as $index => $pendaftaran)
                    <tr>
                        <td class="text-center fw-bold">{{ $index + 1 }}</td>

                        <td class="fw-semibold">
                            {{ $pendaftaran->nama_lengkap }}
                        </td>

                        <td class="text-center">
                            <span class="badge rounded-pill px-3 py-2
                                {{ $pendaftaran->jenis_kelamin == 'Laki-laki' ? 'bg-primary' : 'bg-info' }}">
                                {{ $pendaftaran->jenis_kelamin }}
                            </span>
                        </td>

                        <td>{{ $pendaftaran->asal_sekolah }}</td>

                        <td>
                            {{ $pendaftaran->no_hp }}
                        </td>

                        <td>
                            {{ $pendaftaran->email }}
                        </td>

                        <td class="text-center">
                            <span class="badge rounded-pill px-3 py-2
                                @if ($pendaftaran->status == 'Diterima') bg-success
                                @elseif ($pendaftaran->status == 'Ditolak') bg-danger
                                @else bg-warning text-dark @endif">
                                {{ $pendaftaran->status }}
                            </span>
                        </td>

                        <td class="text-center">
                            {{ $pendaftaran->created_at->format('d M Y') }}
                        </td>

                        <td class="text-center">
                            <div class="d-flex justify-content-center gap-2">
                                <a href="{{ route('admin.pendaftar.show', $pendaftaran->id) }}"
                                   class="btn btn-icon btn-sm btn-light-info"
                                   data-bs-toggle="tooltip"
                                   data-bs-placement="top"
                                   title="Lihat detail">
                                    <i class="fas fa-eye"></i>
                                </a>

                                <a href="{{ route('admin.pendaftar.update', $pendaftaran->id) }}"
                                   class="btn btn-icon btn-sm btn-light-primary"
                                   data-bs-toggle="tooltip"
                                   data-bs-placement="top"
                                   title="Edit">
                                    <i class="fas fa-pen"></i>
                                </a>

                                <form action="{{ route('admin.pendaftar.destroy', $pendaftaran->id) }}"
                                      method="POST"
                                      class="d-inline delete-form">
                                    @csrf
                                    @method('DELETE')
                                    <button type="button"
                                            class="btn btn-icon btn-sm btn-light-danger delete-btn"
                                            data-bs-toggle="tooltip"
                                            data-bs-placement="top"
                                            title="Hapus">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="9" class="text-center text-muted py-4">
                            Tidak ada data pendaftar ditemukan.
                        </td>
                    </tr>
                @endforelse
            </tbody>

        </table>
    </div>
</div>

@push('styles')
<style>
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
    }

    /* Light Button Variants */
    .btn-light-info {
        color: #0dcaf0;
        background-color: rgba(13, 202, 240, 0.1);
        border: none;
    }

    .btn-light-info:hover {
        background-color: #0dcaf0;
        color: #fff;
    }

    .btn-light-primary {
        color: #0d6efd;
        background-color: rgba(13, 110, 253, 0.1);
        border: none;
    }

    .btn-light-primary:hover {
        background-color: #0d6efd;
        color: #fff;
    }

    .btn-light-danger {
        color: #dc3545;
        background-color: rgba(220, 53, 69, 0.1);
        border: none;
    }

    .btn-light-danger:hover {
        background-color: #dc3545;
        color: #fff;
    }
</style>
@endpush

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Initialize tooltips
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
        tooltipTriggerList.map(function(tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl);
        });

        // Handle delete confirmation
        document.querySelectorAll('.delete-btn').forEach(button => {
            button.addEventListener('click', function() {
                if (confirm('Yakin ingin menghapus data ini?')) {
                    this.closest('form').submit();
                }
            });
        });
    });
</script>
@endpush

@endsection