@extends('siswa.layouts.main')

@section('content')
<div class="p-4">
    <h1 class="text-2xl font-bold mb-4">Jadwal Pembelajaran</h1>

    <div class="bg-white shadow rounded p-4">
        <p>Berikut adalah jadwal kegiatan kamu:</p>

        <table class="table-auto w-full mt-3 border">
            <thead>
                <tr class="bg-gray-200">
                    <th class="p-2 border">Hari</th>
                    <th class="p-2 border">Mata Pelajaran</th>
                    <th class="p-2 border">Waktu</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="p-2 border">Senin</td>
                    <td class="p-2 border">Bahasa Inggris</td>
                    <td class="p-2 border">08:00 - 10:00</td>
                </tr>
                <tr>
                    <td class="p-2 border">Rabu</td>
                    <td class="p-2 border">Komputer</td>
                    <td class="p-2 border">09:00 - 11:00</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection
