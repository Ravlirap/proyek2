@extends('siswa.layouts.main')

@section('content')
<div class="p-6 max-w-4xl mx-auto">

    <h1 class="text-3xl font-bold mb-6 text-blue-700">Profil Siswa LPK</h1>

    <!-- Card Profil -->
    <div class="profile-card flex gap-6 items-center p-6 mb-10">

        <!-- Foto -->
        <img src="{{ $user->foto ? asset('storage/foto/'.$user->foto) : asset('default/user.png') }}"
             class="profile-photo">

        <!-- Informasi -->
        <div>
            <h2 class="text-2xl font-semibold">{{ $user->name }}</h2>
            <p class="text-gray-700">Email: {{ $user->email }}</p>
            <p class="text-gray-700">ID Siswa: {{ $user->id }}</p>
            <p class="text-gray-700">Program Pelatihan: {{ $user->program ?? '-' }}</p>

            {{-- <a href="{{ route('siswa.profile.edit') }}"
               class="edit-btn mt-4 inline-block">
                Edit Profil
            </a> --}}
        </div>

    </div>

</div>
@endsection

<style>
    .profile-card {
        background: white;
        border-radius: 15px;
        box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        border-left: 6px solid #2563eb;
    }
    .profile-photo {
        width: 110px;
        height: 110px;
        border-radius: 50%;
        object-fit: cover;
        border: 4px solid #dbeafe;
    }
    .edit-btn {
        background: #2563eb;
        color: white;
        padding: 10px 18px;
        border-radius: 8px;
        font-weight: 600;
        transition: .2s;
    }
    .edit-btn:hover {
        background: #1e3a8a;
    }
</style>
