@extends('layouts.main')

@section('title', $title)

@section('content')
<div class="container py-5">
    <h2 class="mb-4 text-center text-primary fw-bold" style="letter-spacing: 1px;">{{ $title }}</h2>
    <div class="row g-4">
        @foreach($prodi as $item)
        <div class="col-md-6 col-lg-4">
            <div class="card h-100 shadow-sm border-0 rounded-4">
                <div class="card-body d-flex flex-column justify-content-between">
                    <div>
                        <span class="badge bg-info text-dark mb-2 fs-6 px-3 py-2">{{ $item['kode'] }}</span>
                        <h5 class="card-title fw-bold mb-2" style="font-size: 1.15rem;">{{ $item['nama'] }}</h5>
                    </div>
                    <div class="mt-3">
                        <span class="badge bg-success fs-6 px-3 py-2">{{ $item['jenjang'] }}</span>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <div class="text-end mt-4">
        <small class="text-muted">Total Program Studi: <strong>{{ count($prodi) }}</strong></small>
    </div>
</div>
@endsection
