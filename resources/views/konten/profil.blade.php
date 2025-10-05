@extends('layouts.main')

@section('title', $title)

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="card shadow-lg border-0">
                <div class="card-body">
                    <div class="text-center mb-4">
                        <img src="{{ asset('images/profile.png') }}" alt="Profile" class="rounded-circle mb-2" width="100" height="100">
                        <h2 class="card-title mb-1">{{ $mahasiswa['nama'] }}</h2>
                        <h6 class="text-muted">{{ $mahasiswa['nim'] }}</h6>
                    </div>
                    <hr>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <strong>Program Studi:</strong> {{ $mahasiswa['program_studi'] }}
                        </li>
                        <li class="list-group-item">
                            <strong>Tempat Praktik:</strong> {{ $mahasiswa['tempat_praktik'] }}
                        </li>
                        <li class="list-group-item">
                            <strong>Lama Praktik:</strong> {{ $mahasiswa['lama_praktik'] }}
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection