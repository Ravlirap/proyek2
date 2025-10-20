@extends('admin.layouts.main')

@section('title', 'Dashboard Admin')

@section('content')
<div class="container mt-4">
    <h1 class="mb-4">Dashboard Admin</h1>

    <div class="row">
        <div class="col-md-4">
            <div class="card shadow-sm p-3">
                <h5>Total Pendaftar</h5>
                <h3 class="text-primary">{{ $jumlah }}</h3>
            </div>
        </div>
        {{-- Tambahkan card lain misalnya jumlah pelatih, kelas, dll --}}
    </div>
</div>
@endsection
