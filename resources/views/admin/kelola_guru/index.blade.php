@extends('admin.layouts.main')
@section('title', 'Kelola Guru')

@section('content')
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">

<div class="container-fluid py-4">
    <div class="mb-4 d-flex justify-content-between align-items-center border-bottom pb-3">
        <div>
            <h1 class="h3 fw-bold text-gray-800">Kelola Guru / Sensei</h1>
            <p class="text-muted mb-0">Daftar guru yang terdaftar di sistem.</p>
        </div>
        <div>
            <a href="{{ route('admin.guru.create') }}" class="btn btn-primary">
                <i class="bi bi-plus-circle me-1"></i> Tambah Guru
            </a>
        </div>
    </div>

    <div class="card shadow mb-4">
        <div class="card-header py-3 bg-white border-bottom d-flex justify-content-between align-items-center">
            <h6 class="m-0 font-weight-bold text-primary">Data Guru</h6>
        </div>
        <div class="card-body px-0 pt-0 pb-2">
            <div class="table-responsive p-0">
                <table class="table table-striped align-middle mb-0">
                    <thead class="bg-primary text-white">
                        <tr>
                            <th class="text-center text-uppercase text-xs font-weight-bolder opacity-7" width="5%">No</th>
                            <th class="text-uppercase text-xs font-weight-bolder opacity-7">Nama</th>
                            <th class="text-uppercase text-xs font-weight-bolder opacity-7">Email</th>
                            <th class="text-center text-uppercase text-xs font-weight-bolder opacity-7" width="15%">Password</th>
                            <th class="text-center text-uppercase text-xs font-weight-bolder opacity-7" width="15%">Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse ($guru as $index => $g)
                            <tr>
                                <td class="text-center text-secondary text-sm fw-bold">{{ $index + 1 }}</td>
                                <td class="fw-semibold text-dark text-sm">
                                    <i class="fas fa-user-circle me-2 text-primary"></i>
                                    {{ $g->name }}
                                </td>
                                <td class="text-sm text-secondary">{{ $g->email }}</td>

                                <td class="text-center text-sm">
                                    {{-- Jangan tampilkan password plain; tampilkan placeholder --}}
                                    <span class="text-muted">••••••••</span>
                                </td>

                                <td class="text-center">
                                    <div class="d-flex justify-content-center gap-2">
                                        <a href="{{ route('admin.guru.edit', $g->id) }}" class="btn btn-outline-primary btn-action">
                                            <i class="bi bi-pencil"></i>
                                        </a>
                                        <button type="button"
                                                class="btn btn-outline-danger btn-action delete-btn"
                                                data-id="{{ $g->id }}"
                                                data-nama="{{ $g->name }}"
                                                data-bs-toggle="tooltip"
                                                data-bs-placement="top"
                                                title="Hapus">
                                            <i class="bi bi-trash"></i>
                                        </button>

                                        <form id="delete-form-{{ $g->id }}" action="{{ route('admin.guru.destroy', $g->id) }}" method="POST" class="d-none">
                                            @csrf
                                            @method('DELETE')
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="text-center text-muted py-5 bg-light">
                                    <i class="fas fa-box-open fa-2x mb-2"></i>
                                    <p class="mb-0">Tidak ada data guru ditemukan.</p>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script>
    // Tooltip init
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
    var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl)
    })

    // SweetAlert delete confirmation
    document.addEventListener('DOMContentLoaded', function () {
        const deleteButtons = document.querySelectorAll('.delete-btn');

        deleteButtons.forEach(button => {
            button.addEventListener('click', function() {
                const id = this.getAttribute('data-id');
                const nama = this.getAttribute('data-nama');

                Swal.fire({
                    title: 'Yakin Ingin Menghapus?',
                    html: `Anda akan menghapus guru <strong>${nama}</strong>.`,
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
