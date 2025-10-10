@extends('layouts.main')

@section('content')
<div class="program-detail-page">
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <nav aria-label="breadcrumb" class="program-breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Beranda</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('program_pelatihan') }}">Program Pelatihan</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Detail Program</li>
                </ol>
            </nav>
            <h1 class="page-title">Detail Program akan segera ditambahkan</h1>
            <p class="lead">Halaman detail untuk program {{ $slug }} sedang dalam pengembangan.</p>
        </div>
    </section>
</div>

<style>
    .program-detail-page {
        background-color: var(--light);
        color: var(--dark);
        min-height: 80vh;
    }

    .hero-section {
        background: linear-gradient(to right, #fff, #fef2f4);
        padding: 60px 0 40px;
    }

    .program-breadcrumb {
        margin-bottom: 20px;
    }

    .breadcrumb {
        display: flex;
        gap: 8px;
        padding: 0;
        margin: 0;
        list-style: none;
    }

    .breadcrumb-item a {
        color: var(--primary);
        text-decoration: none;
    }

    .breadcrumb-item.active {
        color: var(--gray);
    }

    .breadcrumb-item + .breadcrumb-item::before {
        content: "›";
        color: var(--gray);
        margin-right: 8px;
    }

    .page-title {
        font-size: 2.5rem;
        color: var(--dark);
        margin-bottom: 16px;
        font-weight: 700;
    }

    .lead {
        font-size: 1.1rem;
        color: var(--gray);
        max-width: 800px;
        line-height: 1.6;
    }

    @media (max-width: 768px) {
        .hero-section {
            padding: 40px 0 30px;
        }

        .page-title {
            font-size: 2rem;
        }
    }
</style>
@endsection