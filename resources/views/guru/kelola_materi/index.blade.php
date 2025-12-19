@extends('guru.layouts.main')

@section('content')
<div class="min-h-screen bg-gray-50 p-4 md:p-6 lg:p-8">
    <div class="max-w-7xl mx-auto">
        
        {{-- HEADER --}}
        <div class="mb-6">
            <div class="flex flex-col sm:flex-row sm:justify-between sm:items-center gap-3">
                <h1 class="text-2xl md:text-3xl font-bold text-gray-900">Daftar Materi</h1>
                <a href="{{ route('guru.materi.create') }}" class="btn-add">
                    <svg class="icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 4v16m8-8H4" />
                    </svg>
                    Tambah Materi
                </a>
            </div>
        </div>

        {{-- DESKTOP TABLE --}}
        <div class="hidden lg:block bg-white rounded-xl shadow-sm overflow-hidden border border-gray-100">
            <table class="w-full">
                <thead class="bg-gradient-to-r from-gray-50 to-gray-100">
                    <tr>
                        <th class="px-6 py-4 text-left text-xs font-semibold text-gray-600 uppercase">Judul Materi</th>
                        <th class="px-6 py-4 text-left text-xs font-semibold text-gray-600 uppercase">Deskripsi</th>
                        <th class="px-6 py-4 text-center text-xs font-semibold text-gray-600 uppercase">Kategori</th>
                        <th class="px-6 py-4 text-center text-xs font-semibold text-gray-600 uppercase">File</th>
                        <th class="px-6 py-4 text-center text-xs font-semibold text-gray-600 uppercase">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100">
                    @forelse ($materi as $item)
                    <tr class="hover:bg-blue-50/50 transition-colors">
                        <td class="px-6 py-4 font-semibold text-gray-900">{{ $item->judul }}</td>
                        <td class="px-6 py-4 text-sm text-gray-600">{{ $item->deskripsi ?? '-' }}</td>
                        <td class="px-6 py-4 text-center">
                            <span class="inline-flex px-3 py-1 rounded-full text-xs font-medium bg-blue-100 text-blue-800">
                                {{ $item->kategori ?? '-' }}
                            </span>
                        </td>
                        <td class="px-6 py-4 text-center">
                            @if($item->file_materi)
                                <a href="{{ asset('storage/'.$item->file_materi) }}" target="_blank"
                                   class="inline-flex items-center gap-1 text-blue-600 hover:text-blue-800 font-medium text-sm">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                    </svg>
                                    Lihat
                                </a>
                            @else
                                <span class="text-gray-400">-</span>
                            @endif
                        </td>
                        <td class="px-6 py-4">
                            <div class="flex items-center justify-center gap-2">
                                          <a href="{{ route('guru.materi.edit', $item->id) }}"
                                              class="inline-flex items-center gap-1 bg-yellow-500 text-white px-4 py-2 rounded-lg hover:bg-yellow-600 transition-all text-sm font-medium action-equal">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                    </svg>
                                    Edit
                                </a>
                                <form action="{{ route('guru.materi.destroy', $item->id) }}" method="POST" class="delete-form">
                                    @csrf
                                    @method('DELETE')
                                    <button type="button" class="btn-delete inline-flex items-center gap-1 bg-red-600 text-white px-4 py-2 rounded-lg hover:bg-red-700 transition-all text-sm font-medium action-equal">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                        </svg>
                                        Hapus
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5" class="px-6 py-12 text-center">
                            <div class="text-6xl mb-4">📭</div>
                            <h3 class="text-lg font-semibold text-gray-900 mb-2">Belum Ada Materi</h3>
                            <p class="text-gray-500">Mulai tambahkan materi pembelajaran pertama Anda</p>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        {{-- MOBILE CARDS --}}
        <div class="lg:hidden space-y-4">
            @forelse ($materi as $item)
            <div class="bg-white rounded-xl shadow-sm p-5 border border-gray-100">
                <div class="flex items-start justify-between mb-3">
                    <h3 class="font-bold text-gray-900 text-lg flex-1">{{ $item->judul }}</h3>
                    <span class="inline-flex px-2.5 py-1 rounded-full text-xs font-medium bg-blue-100 text-blue-800 ml-2">
                        {{ $item->kategori ?? '-' }}
                    </span>
                </div>
                <p class="text-sm text-gray-600 mb-4">{{ $item->deskripsi ?? 'Tidak ada deskripsi' }}</p>
                
                @if($item->file_materi)
                <a href="{{ asset('storage/'.$item->file_materi) }}" target="_blank"
                   class="inline-flex items-center gap-2 text-blue-600 font-medium text-sm mb-4">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                    </svg>
                    Lihat File
                </a>
                @endif

                <div class="flex gap-2 pt-3 border-t border-gray-100">
                    <a href="{{ route('guru.materi.edit', $item->id) }}"
                       class="flex-1 inline-flex items-center justify-center gap-1.5 bg-yellow-500 text-white px-3 py-2 rounded-lg hover:bg-yellow-600 transition-all font-medium text-sm">
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                        </svg>
                        Edit
                    </a>
                    <form action="{{ route('guru.materi.destroy', $item->id) }}" method="POST" class="flex-1 delete-form">
                        @csrf
                        @method('DELETE')
                        <button type="button" class="btn-delete w-full inline-flex items-center justify-center gap-1.5 bg-red-600 text-white px-3 py-2 rounded-lg hover:bg-red-700 transition-all font-medium text-sm">
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                            </svg>
                            Hapus
                        </button>
                    </form>
                </div>
            </div>
            @empty
            <div class="bg-white rounded-xl shadow-sm p-12 text-center border border-gray-100">
                <div class="text-6xl mb-4">📭</div>
                <h3 class="text-lg font-semibold text-gray-900 mb-2">Belum Ada Materi</h3>
                <p class="text-gray-500">Mulai tambahkan materi pembelajaran pertama Anda</p>
            </div>
            @endforelse
        </div>

    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const deleteForms = document.querySelectorAll('.delete-form');
    deleteForms.forEach(form => {
        form.querySelector('.btn-delete').addEventListener('click', () => showDeleteModal(form));
    });
});

function showDeleteModal(form) {
    const modal = document.createElement('div');
    modal.className = 'modal-overlay';
    modal.innerHTML = `
        <div class="modal-box">
            <div class="modal-icon">⚠️</div>
            <h3 class="modal-text">Apakah Anda yakin ingin menghapus materi ini?</h3>
            <div class="modal-buttons">
                <button class="btn-cancel">Batal</button>
                <button class="btn-confirm">Hapus</button>
            </div>
        </div>
    `;
    
    document.body.appendChild(modal);
    setTimeout(() => modal.classList.add('show'), 10);
    
    modal.querySelector('.btn-cancel').onclick = () => closeModal(modal);
    modal.querySelector('.btn-confirm').onclick = () => form.submit();
    modal.onclick = (e) => e.target === modal && closeModal(modal);
}

function closeModal(modal) {
    modal.classList.remove('show');
    setTimeout(() => modal.remove(), 300);
}
</script>

<style>
.btn-add {
    display: inline-flex;
    align-items: center;
    gap: 8px;

    width: fit-content;      
    padding: 12px 18px;        

    background: linear-gradient(90deg, #2563eb, #4f46e5);
    color: white;
    font-weight: 600;
    font-size: 14px;

    border-radius: 10px;
    text-decoration: none;
    transition: all 0.3s ease;
}

.btn-add:hover {
    box-shadow: 0 6px 15px rgba(37, 99, 235, 0.4);
    transform: translateY(-1px);
}

.btn-add .icon {
    width: 18px;
    height: 18px;
}

@media (max-width: 640px) {
    .btn-add {
        padding: 8px 14px;
        font-size: 13px;
    }

    .btn-add .icon {
        width: 16px;
        height: 16px;
    }
}

/* Ensure edit and delete buttons have the same size on responsive screens */
@media (max-width: 1024px) {
    .action-equal {
        min-width: 110px;
        display: inline-flex;
        justify-content: center;
    }
}


.modal-overlay {
    position: fixed;
    inset: 0;
    background: rgba(0, 0, 0, 0.5);
    backdrop-filter: blur(4px);
    display: flex;
    align-items: center;
    justify-content: center;
    z-index: 9999;
    opacity: 0;
    transition: opacity 0.3s;
    padding: 1rem;
}

.modal-overlay.show {
    opacity: 1;
}

.modal-overlay.show .modal-box {
    transform: scale(1);
    opacity: 1;
}

.modal-box {
    background: white;
    border-radius: 1rem;
    padding: 2rem;
    max-width: 400px;
    width: 100%;
    box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1);
    transform: scale(0.9);
    opacity: 0;
    transition: all 0.3s;
}

.modal-icon {
    font-size: 4rem;
    text-align: center;
    margin-bottom: 1rem;
    animation: shake 0.5s;
}

@keyframes shake {
    0%, 100% { transform: translateX(0); }
    25% { transform: translateX(-10px); }
    75% { transform: translateX(10px); }
}

.modal-text {
    font-size: 1.125rem;
    font-weight: 600;
    color: #1f2937;
    text-align: center;
    margin-bottom: 1.5rem;
    line-height: 1.5;
}

.modal-buttons {
    display: flex;
    gap: 0.75rem;
}

.btn-cancel, .btn-confirm {
    flex: 1;
    padding: 0.75rem 1.5rem;
    border-radius: 0.5rem;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.2s;
    border: none;
    font-size: 0.875rem;
}

.btn-cancel {
    background: #f3f4f6;
    color: #4b5563;
}

.btn-cancel:hover {
    background: #e5e7eb;
}

.btn-confirm {
    background: #dc2626;
    color: white;
}

.btn-confirm:hover {
    background: #b91c1c;
    transform: translateY(-1px);
    box-shadow: 0 4px 6px -1px rgba(220, 38, 38, 0.3);
}
</style>
@endsection