@extends('admin.layouts.main')
@section('title', 'Kelola Artikel')

@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">

<style>
    /* --- GENERAL PAGE STYLE --- */
    .content-wrapper {
        max-width: 1150px;
        margin: 0 auto;
        animation: fadeIn 0.5s ease;
    }

    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(10px); }
        to   { opacity: 1; transform: translateY(0); }
    }

    /* --- HEADER STYLE --- */
    .page-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 30px;
        padding: 15px 20px;
        border-radius: 12px;
        background: linear-gradient(135deg, #ffffff, #f3f7ff);
        border: 1px solid #e7eefe;
        box-shadow: 0px 3px 10px rgba(0,0,0,0.04);
    }

    .page-header h1 {
        font-weight: 700;
        color: #2a2d3e;
        letter-spacing: 0.3px;
    }

    .btn-primary {
        border-radius: 8px;
        padding: 10px 18px;
        font-weight: 500;
        box-shadow: 0px 3px 6px rgba(0,0,0,0.12);
        transition: 0.25s;
    }
    .btn-primary:hover {
        transform: translateY(-2px);
        box-shadow: 0px 5px 12px rgba(0,0,0,0.18);
    }

    /* --- CARD TABLE STYLE --- */
    .card-table {
        border-radius: 15px;
        padding: 25px;
        border: 1px solid #e3e6ef;
        background: #ffffff;
        box-shadow: 0px 4px 16px rgba(0,0,0,0.06);
    }

    /* --- TABLE STYLE --- */
    table thead {
        background: #f9fbff;
        border-bottom: 2px solid #e2e6f3;
    }

    table thead th {
        padding: 14px 12px;
        font-weight: 600;
        color: #3b3f55;
    }

    table tbody tr {
        transition: 0.2s;
    }
    table tbody tr:hover {
        background-color: #f4f8ff;
        transform: scale(1.01);
    }

    td {
        padding: 12px 14px !important;
        vertical-align: middle !important;
    }

    .img-thumb {
        width: 85px;
        height: 60px;
        object-fit: cover;
        border-radius: 8px;
        border: 2px solid #eef1f9;
        box-shadow: 0px 2px 8px rgba(0,0,0,0.08);
    }

    /* --- ACTION BUTTONS --- */
    .btn-action {
        border-radius: 7px;
        width: 34px;
        height: 34px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        transition: 0.25s;
    }

    .btn-action:hover {
        transform: translateY(-2px);
    }

    /* Empty State */
    .empty-state {
        padding: 40px 0;
        font-size: 16px;
        color: #8a8fa6;
    }
</style>

<div class="container-fluid py-4">
    <div class="content-wrapper">

        <!-- HEADER -->
        <div class="page-header">
            <h1 class="h3">Kelola Artikel</h1>
            <a href="{{ route('admin.artikel.create') }}" class="btn btn-primary">
                <i class="bi bi-plus-lg"></i> Tambah Artikel
            </a>
        </div>

        @if(session('success'))
            <div class="alert alert-success shadow-sm">{{ session('success') }}</div>
        @endif

        <!-- TABLE CARD -->
        <div class="card card-table">

            <div class="table-responsive">
                <table class="table align-middle">
                    <thead>
                        <tr>
                            <th style="width: 60px">No</th>
                            <th>Judul</th>
                            <th style="width: 160px">Gambar</th>
                            <th style="width: 180px">Tanggal Publikasi</th>
                            <th class="text-center" style="width: 150px">Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse ($dataArtikel as $key => $artikel)
                        <tr>
                            <td>{{ $key + 1 }}</td>

                            <td class="fw-semibold">{{ $artikel->judul }}</td>

                            <td>
                                @if($artikel->gambar && file_exists(public_path('img/artikel/' . $artikel->gambar)))
                                    <img src="{{ asset('img/artikel/' . $artikel->gambar) }}"
                                         class="img-thumb"
                                         alt="{{ $artikel->judul }}">
                                @else
                                    <span class="text-muted">Tidak ada</span>
                                @endif
                            </td>

                            <td>{{ \Carbon\Carbon::parse($artikel->tanggal_publikasi)->format('d M Y') }}</td>

                            <td class="text-center">

                                <a href="{{ route('admin.artikel.edit', $artikel->id) }}"
                                   class="btn btn-outline-warning btn-action me-1">
                                    <i class="bi bi-pencil-square"></i>
                                </a>

                                <form action="{{ route('admin.artikel.destroy', $artikel->id) }}"
                                      method="POST" class="d-inline"
                                      onsubmit="return confirm('Yakin ingin menghapus artikel ini?');">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-outline-danger btn-action">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </form>

                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="5" class="text-center empty-state">
                                <i class="bi bi-file-earmark-text display-6 d-block mb-2"></i>
                                Belum ada artikel
                            </td>
                        </tr>
                        @endforelse
                    </tbody>

                </table>
            </div>

        </div>

    </div>
</div>
@endsection