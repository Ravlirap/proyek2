@extends('layouts.main')

@section('title', $title)

@section('content')
    <h1>{{ $konten }}</h1>
    <div class="dashboard"></div>
    <section class="registration-section">
        <h2>Formulir Pendaftaran</h2>
        @if (session('success'))
        <div style="background: #d1e7dd; padding: 10px; margin-bottom: 10px; border-radius: 5px;">
            {{ session('success') }}
        </div>
        @endif
        <form action="{{ route('pendaftaran.store') }}" method="POST" class="registration-form">
            @csrf
            <div class="form-group">
                <label for="nama">Nama Lengkap:</label>
                <input type="text" id="nama" name="nama" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="telepon">No. Telepon:</label>
                <input type="tel" id="telepon" name="telepon" required>
            </div>
            <div class="form-group">
                <label for="program">Pilih Program:</label>
                <select id="program" name="program" required>
                    <option value="">--Pilih Program--</option>
                    <option value="bahasa-jepang">Kelas Bahasa Jepang</option>
                    <option value="persiapan-jlpt">Persiapan JLPT & JFT-Basic</option>
                    <option value="budaya-jepang">Kelas Budaya Jepang</option>
                </select>
            </div>
            <button type="submit" class="submit-btn">Daftar</button>
        </form>
    </section>
@endsection