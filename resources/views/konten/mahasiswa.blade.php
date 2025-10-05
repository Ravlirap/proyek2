@extends('layouts.main')

@section('title', $title)

@section('content')

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="card shadow-lg border-0">
                <div class="card-header bg-gradient-primary text-primary text-center">
                    <h3 class="mb-0">Daftar Mahasiswa</h3>
                </div>
                <div class="card-body bg-light">
                    <table class="table table-hover align-middle">
                        <thead class="table-danger">
                            <tr>
                                <th scope="col" class="text-center">#</th>
                                <th scope="col">Nama</th>
                                <th scope="col">NIM</th>
                                <th scope="col">Hobi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($mahasiswa as $index => $mhs)
                            <tr>
                                <td class="text-center">{{ $index + 1 }}</td>
                                <td>
                                    <span class="fw-bold">{{ $mhs['nama'] }}</span>
                                </td>
                                <td>
                                    <span class="badge bg-primary">{{ $mhs['nim'] }}</span>
                                </td>
                                <td>
                                    <span class="text-muted">{{ $mhs['hobi'] }}</span>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="4" class="text-center text-danger">Tidak ada data mahasiswa.</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                <div class="card-footer text-end small text-muted">
                    Total: {{ count($mahasiswa) }} mahasiswa
                </div>
            </div>
        </div>
    </div>
</div>
@endsection