@extends('siswa.layouts.main')

@section('content')
<div class="p-4">
    <h1 class="text-2xl font-bold mb-4">Dashboard Siswa</h1>

    <div class="bg-white shadow rounded p-4">
        <p>Selamat datang, <strong>{{ $user->name }}</strong>!</p>
    </div>
</div>
@endsection
