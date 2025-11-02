@extends('admin.layouts.main')
@section('title', 'Kelola Pendaftar')
@section('content')
<div class="container-fluid py-4">
    <div class="mb-5 border-bottom pb-2">
        <h1 class="h3 fw-bold text-gray-800">Kelola Pendaftar Lpk Seikou</h1>
        <p class="text-muted">Daftar lengkap pendaftar LPK Seikou.</p>
    </div>

    <div class="card shadow-sm">
        <div class="card-body"> 
            <div class="table-responsive">
                <table class="table table-bordered align-middle">
                    <thead>
                        <tr class="text-center">
                            {{-- PENYESUAIAN HEADER TABEL --}}
                            <th>No</th>
                            <th>Nama Lengkap</th>
                            <th>Jenis Kelamin</th> {{-- Kolom 5: jenis_kelamin --}}
                            <th>Asal Sekolah</th> {{-- Kolom 8: asal_sekolah --}}
                            <th>No. HP</th>          {{-- Kolom 10: no_hp --}}
                            <th>Email</th>           {{-- Kolom 11: email --}}
                            <th>Status</th>          {{-- Kolom 15: status --}}
                            <th>Tgl Daftar</th>      {{-- Kolom 17: created_at --}}
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- Pastikan variabel yang dikirim dari Controller adalah $data_pendaftaran atau ubah di sini --}}
                        {{-- Menggunakan variabel $data_pendaftaran sesuai contoh Controller sebelumnya --}}
                        @forelse ($dataPendaftaran as $index => $pendaftaran)
                        <tr>
                            <td class="text-center">{{ $index + 1 }}</td>
                            <td>{{ $pendaftaran->nama_lengkap }}</td> {{-- Kolom 2 --}}
                            <td class="text-center">{{ $pendaftaran->jenis_kelamin }}</td> {{-- Kolom 5 --}}
                            <td>{{ $pendaftaran->asal_sekolah }}</td> {{-- Kolom 8 --}}
                            <td>{{ $pendaftaran->no_hp }}</td> {{-- Kolom 10 --}}
                            <td>{{ $pendaftaran->email }}</td> {{-- Kolom 11 --}}
                            <td class="text-center">{{ $pendaftaran->status }}</td> {{-- Kolom 15 --}}
                            <td class="text-center">{{ $pendaftaran->created_at->format('d M Y') }}</td> {{-- Kolom 17 --}}
                            
                            <td class="text-center">
                                {{-- Tombol Detail/Show --}}
                                <a href="{{ route('admin.pendaftar.show', $pendaftaran->id) }}" class="btn btn-sm btn-info" title="Lihat Detail"><i class="fas fa-eye"></i></a>
                                
                                {{-- Tombol Edit --}}
                                <a href="{{ route('admin.pendaftar.update', $pendaftaran->id) }}" class="btn btn-sm btn-primary" title="Edit Data"><i class="fas fa-edit"></i></a>
                                
                                {{-- Form Hapus (Destroy) --}}
                                <form action="{{ route('admin.pendaftar.destroy', $pendaftaran->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus pendaftar ini?')"><i class="fas fa-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="9" class="text-center">Tidak ada data pendaftar yang ditemukan.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection