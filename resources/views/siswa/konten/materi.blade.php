@extends('siswa.layouts.main')

@section('content')
<div class="p-4">
    <h1 class="text-2xl font-bold mb-4">Materi Pembelajaran</h1>

    <div class="bg-white shadow rounded p-4">
        <p>Berikut adalah daftar materi yang bisa kamu akses:</p>

        <ul class="mt-3 list-disc pl-5">
            <li><a href="#" class="text-blue-600">Materi Bahasa Inggris - Module 1</a></li>
            <li><a href="#" class="text-blue-600">Materi Komputer - Pengenalan Hardware</a></li>
            <li><a href="#" class="text-blue-600">Soft Skill - Cara Berkomunikasi</a></li>
        </ul>
    </div>
</div>
@endsection
