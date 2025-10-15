@extends('layouts.main')
@section('content')
<head>
    <meta charset="UTF-8">
    <title>{{ $title ?? 'Pendaftaran' }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light py-5">

<div class="container">
    <div class="card shadow-lg border-0 mx-auto" style="max-width: 800px;">
        <div class="card-header bg-primary text-white text-center">
            <h3 class="mb-0">Formulir Pendaftaran LPK</h3>
        </div>

        <div class="card-body">
            @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('pendaftaran.submit') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="row g-3">
                    <div class="col-md-6">
                        <label class="form-label">Nama Lengkap</label>
                        <input type="text" name="nama_lengkap" class="form-control" required>
                    </div>

                    <div class="col-md-3">
                        <label class="form-label">Tempat Lahir</label>
                        <input type="text" name="tempat_lahir" class="form-control" required>
                    </div>

                    <div class="col-md-3">
                        <label class="form-label">Tanggal Lahir</label>
                        <input type="date" name="tanggal_lahir" class="form-control" required>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Jenis Kelamin</label>
                        <select name="jenis_kelamin" class="form-select" required>
                            <option value="">-- Pilih --</option>
                            <option value="laki-laki">Laki-laki</option>
                            <option value="perempuan">Perempuan</option>
                        </select>
                    </div>

                    <div class="col-md-3">
                        <label class="form-label">Tinggi Badan (cm)</label>
                        <input type="number" name="tinggi_badan" class="form-control" required>
                    </div>

                    <div class="col-md-3">
                        <label class="form-label">Berat Badan (kg)</label>
                        <input type="number" name="berat_badan" class="form-control" required>
                    </div>

                    <div class="col-12">
                        <label class="form-label">Alamat</label>
                        <input type="text" name="alamat" class="form-control" required>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Asal Sekolah</label>
                        <input type="text" name="asal_sekolah" class="form-control" required>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">No HP</label>
                        <input type="text" name="no_hp" class="form-control" required>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" required>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Foto</label>
                        <input type="file" name="foto" class="form-control">
                    </div>

                    <div class="col-md-4">
                        <label class="form-label">Ijazah</label>
                        <input type="file" name="ijazah" class="form-control">
                    </div>

                    <div class="col-md-4">
                        <label class="form-label">KTP</label>
                        <input type="file" name="ktp" class="form-control">
                    </div>

                    <div class="col-md-4">
                        <label class="form-label">KK</label>
                        <input type="file" name="kk" class="form-control">
                    </div>
                </div>

                <div class="text-center mt-4">
                    <button type="submit" class="btn btn-primary px-4">Kirim Pendaftaran</button>
                </div>
            </form>
        </div>
    </div>
</div>

<style>
    body {
        background: #f8f9fa;
    }
    .card {
        border-radius: 12px;
        overflow: hidden;
        padding: 50px;
        margin-top: 50px;
    }
    .card-header {
        background: linear-gradient(45deg, #0066ff, #1b0c94);
    }
    .card-header h3 {
        font-weight: 600;
    }
    .form-label {
        font-weight: 500;
    }
    .btn-primary {
        background: #0066ff;
        border: none;
    }
    .btn-primary:hover {
        background: #0056e0;
    }
</style>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
@endsection