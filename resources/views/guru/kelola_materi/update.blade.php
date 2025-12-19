@extends('guru.layouts.main')

@section('content')
<div class="page-wrapper">

    <div class="card">
        <h1 class="card-title">Edit Materi</h1>

        <form action="{{ route('guru.materi.update', $materi->id) }}"
              method="POST"
              enctype="multipart/form-data"
              class="form">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label>Judul Materi</label>
                <input type="text" name="judul"
                       value="{{ $materi->judul }}"
                       required>
            </div>

            <div class="form-group">
                <label>Deskripsi</label>
                <textarea name="deskripsi" rows="4">{{ $materi->deskripsi }}</textarea>
            </div>

            <div class="form-group">
                <label>Kategori</label>
                <input type="text" name="kategori"
                       value="{{ $materi->kategori }}">
            </div>

            <div class="form-group">
                <label>File Materi (PDF / MP4)</label>
                <input type="file" name="file_materi">

                @if($materi->file_materi)
                <div class="current-file">
                    File saat ini:
                    <a href="{{ asset('storage/'.$materi->file_materi) }}"
                       target="_blank">
                        Lihat File
                    </a>
                </div>
                @endif
            </div>

            <div class="form-actions">
                <button type="submit" class="btn-warning">
                    Update Materi
                </button>

                <a href="{{ route('guru.materi.index') }}" class="btn-secondary">
                    Kembali
                </a>
            </div>
        </form>
    </div>

</div>

<style>
/* ===== PAGE ===== */
.page-wrapper {
    padding: 2rem;
    max-width: 720px;
}

/* ===== CARD ===== */
.card {
    background: #ffffff;
    border-radius: 14px;
    padding: 2rem;
    box-shadow: 0 12px 30px rgba(0, 0, 0, 0.08);
}

/* ===== TITLE ===== */
.card-title {
    font-size: 1.6rem;
    font-weight: 700;
    margin-bottom: 1.5rem;
    color: #1f2937;
}

/* ===== FORM ===== */
.form {
    display: flex;
    flex-direction: column;
    gap: 1.2rem;
}

.form-group label {
    font-weight: 600;
    font-size: 0.95rem;
    color: #374151;
    margin-bottom: 0.35rem;
    display: block;
}

.form-group input,
.form-group textarea {
    width: 100%;
    padding: 0.7rem 0.85rem;
    border-radius: 8px;
    border: 1px solid #d1d5db;
    font-size: 0.95rem;
    transition: all 0.2s ease;
}

.form-group input:focus,
.form-group textarea:focus {
    outline: none;
    border-color: #f59e0b;
    box-shadow: 0 0 0 3px rgba(245, 158, 11, 0.2);
}

/* ===== CURRENT FILE ===== */
.current-file {
    margin-top: 0.4rem;
    font-size: 0.85rem;
    color: #374151;
}

.current-file a {
    color: #2563eb;
    font-weight: 600;
    text-decoration: none;
}

.current-file a:hover {
    text-decoration: underline;
}

/* ===== BUTTONS ===== */
.form-actions {
    display: flex;
    gap: 0.75rem;
    margin-top: 0.8rem;
}

.btn-warning {
    background: linear-gradient(135deg, #f59e0b, #d97706);
    color: #ffffff;
    padding: 0.7rem 1.6rem;
    border-radius: 10px;
    border: none;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.25s ease;
}

.btn-warning:hover {
    transform: translateY(-1px);
    box-shadow: 0 6px 16px rgba(245, 158, 11, 0.4);
}

.btn-secondary {
    background: #6b7280;
    color: #ffffff;
    padding: 0.7rem 1.6rem;
    border-radius: 10px;
    text-decoration: none;
    font-weight: 600;
    transition: background 0.2s ease;
}

.btn-secondary:hover {
    background: #4b5563;
}

/* ===== RESPONSIVE ===== */
@media (max-width: 640px) {
    .page-wrapper {
        padding: 1rem;
    }

    .form-actions {
        flex-direction: column;
    }

    .btn-warning,
    .btn-secondary {
        width: 100%;
        text-align: center;
    }
}
</style>
@endsection
