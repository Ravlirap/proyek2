@extends('siswa.layouts.main')

@section('content')
<div class="p-6 max-w-4xl mx-auto">

    <h1 class="text-3xl font-bold mb-6 text-blue-700">Edit Profil Siswa LPK</h1>

    <div class="edit-card p-6 mb-6">

        <form action="{{ route('siswa.profile.update') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
            @csrf

            <div>
                <label class="label">Nama Lengkap</label>
                <input type="text" name="name" value="{{ $user->name }}" class="input">
            </div>

            <div>
                <label class="label">Email</label>
                <input type="email" name="email" value="{{ $user->email }}" class="input">
            </div>

            <div>
                <label class="label">Program Pelatihan</label>
                <input type="text" name="program" value="{{ $user->program }}" class="input">
            </div>

            <div>
                <label class="label">Foto Profil</label>
                <input type="file" name="foto" class="file-input">
            </div>

            <button class="save-btn">Simpan Perubahan</button>
        </form>

    </div>

</div>
@endsection

<style>
    .edit-card {
        background: white;
        border-radius: 15px;
        padding: 25px;
        box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        border-top: 5px solid #1d4ed8;
    }

    .label {
        font-weight: 600;
        display: block;
        margin-bottom: 6px;
    }

    .input {
        width: 100%;
        padding: 12px;
        border-radius: 10px;
        border: 1px solid #d4d4d8;
        background: #f8fafc;
        transition: .2s;
    }
    .input:focus {
        border-color: #2563eb;
        background: white;
        box-shadow: 0 0 5px rgba(37,99,235,.3);
    }

    .file-input {
        width: 100%;
        padding: 10px;
        border-radius: 10px;
        background: #f1f5f9;
        border: 1px solid #d4d4d8;
    }

    .save-btn {
        background: #2563eb;
        color: white;
        padding: 12px 20px;
        border-radius: 10px;
        font-weight: bold;
        width: 100%;
        transition: .2s;
    }
    .save-btn:hover {
        background: #1e40af;
    }
</style>
