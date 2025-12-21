@extends('guru.layouts.main')

@section('content')
<div class="min-h-screen bg-gray-50 p-4 md:p-6">
    <div class="max-w-6xl mx-auto space-y-6">

        <div class="welcome-card relative overflow-hidden bg-gradient-to-br from-blue-600 via-indigo-600 to-purple-700 rounded-2xl shadow-xl p-6 md:p-8">
            <div class="absolute top-0 right-0 -mt-4 -mr-4 w-40 h-40 bg-white opacity-10 rounded-full blur-3xl"></div>
            <div class="absolute bottom-0 left-0 -mb-4 -ml-4 w-32 h-32 bg-white opacity-10 rounded-full blur-2xl"></div>
            
            <div class="relative">
                <h1 class="text-2xl md:text-3xl font-bold text-white mb-2">
                    Selamat datang, {{ $user->name }}
                </h1>
                <p class="text-blue-100 text-sm md:text-base">
                    Kelola materi pembelajaran dan pantau aktivitas mengajar Anda di dashboard LPK Japan.
                </p>
                <div class="mt-3 flex items-center gap-2 text-sm text-blue-200">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg>
                    {{ now()->translatedFormat('l, d F Y') }}
                </div>
            </div>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 md:gap-6">

            <div class="stat-card bg-white rounded-xl shadow-sm hover:shadow-lg transition-all p-6 border border-gray-100">
                <div class="flex items-center gap-4">
                    <div class="w-14 h-14 flex items-center justify-center rounded-xl bg-gradient-to-br from-blue-500 to-blue-600 text-white text-3xl shadow-lg">
                        📘
                    </div>
                    <div class="flex-1">
                        <p class="text-sm font-medium text-gray-500">Total Materi</p>
                        <h3 class="text-3xl font-bold text-gray-900 counter" data-target="{{ $materiCount ?? 0 }}">0</h3>
                    </div>
                </div>
                <div class="mt-4 pt-4 border-t border-gray-100">
                    <p class="text-xs text-gray-500">Materi pembelajaran yang tersedia</p>
                </div>
            </div>

            <div class="stat-card bg-white rounded-xl shadow-sm hover:shadow-lg transition-all p-6 border border-gray-100">
                <div class="flex items-center gap-4">
                    <div class="w-14 h-14 flex items-center justify-center rounded-xl bg-gradient-to-br from-blue-500 to-blue-600 text-white text-3xl shadow-lg">
                        🔔
                    </div>
                    <div class="flex-1">
                        <p class="text-sm font-medium text-gray-500">Materi Terbaru</p>
                        @if(is_numeric($materiTerbaru ?? null))
                            <h3 class="text-3xl font-bold text-gray-900 counter" data-target="{{ $materiTerbaru ?? 0 }}">0</h3>
                        @else
                            <h3 class="text-3xl font-bold text-gray-900">{{ $materiTerbaru ?? '—' }}</h3>
                        @endif
                    </div>
                </div>
                <div class="mt-4 pt-4 border-t border-gray-100">
                    <p class="text-xs text-gray-500">Materi yang baru ditambahkan</p>
                </div>
            </div>

        </div>

        <div class="space-y-4">
            <h2 class="text-xl md:text-2xl font-bold text-gray-900">Akses Cepat</h2>

            <a href="{{ route('guru.materi.index') }}"
               class="action-card block bg-white rounded-xl shadow-sm hover:shadow-xl transition-all p-6 border border-gray-100 hover:border-blue-200">
                
                <div class="flex items-start gap-4">
                    <div class="icon-box w-14 h-14 rounded-xl bg-gradient-to-br from-blue-500 to-blue-600 text-white flex items-center justify-center text-3xl shadow-lg flex-shrink-0">
                        📘
                    </div>
                    
                    <div class="flex-1">
                        <h3 class="text-lg font-bold text-gray-900 mb-2">
                            Materi Pembelajaran
                        </h3>
                        <p class="text-sm text-gray-600 mb-3">
                            Kelola dan unggah materi pembelajaran untuk siswa Anda dengan mudah.
                        </p>
                        <div class="flex items-center gap-2 text-blue-600 font-semibold text-sm arrow-link">
                            <span>Kelola Sekarang</span>
                            <svg class="w-4 h-4 arrow-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </div>
                    </div>
                </div>
            </a>

        </div>

    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    
    // Counter Animation
    const counters = document.querySelectorAll('.counter');
    counters.forEach(counter => {
        const target = parseInt(counter.getAttribute('data-target'));
        const duration = 1500;
        const increment = target / (duration / 16);
        let current = 0;
        
        const updateCounter = () => {
            current += increment;
            if (current < target) {
                counter.textContent = Math.floor(current);
                requestAnimationFrame(updateCounter);
            } else {
                counter.textContent = target;
            }
        };
        
        setTimeout(updateCounter, 200);
    });
    
    // Fade In Animation
    const animateElements = document.querySelectorAll('.welcome-card, .stat-card, .action-card');
    animateElements.forEach((el, index) => {
        el.style.opacity = '0';
        el.style.transform = 'translateY(20px)';
        
        setTimeout(() => {
            el.style.transition = 'all 0.6s ease';
            el.style.opacity = '1';
            el.style.transform = 'translateY(0)';
        }, index * 100);
    });
    
    // Hover Effects
    const actionCard = document.querySelector('.action-card');
    if (actionCard) {
        actionCard.addEventListener('mouseenter', function() {
            const icon = this.querySelector('.icon-box');
            const arrow = this.querySelector('.arrow-icon');
            
            icon.style.transform = 'scale(1.1) rotate(5deg)';
            arrow.style.transform = 'translateX(4px)';
        });
        
        actionCard.addEventListener('mouseleave', function() {
            const icon = this.querySelector('.icon-box');
            const arrow = this.querySelector('.arrow-icon');
            
            icon.style.transform = 'scale(1) rotate(0deg)';
            arrow.style.transform = 'translateX(0)';
        });
    }
    
    // Smooth transitions
    const iconBox = document.querySelector('.icon-box');
    const arrowIcon = document.querySelector('.arrow-icon');
    
    if (iconBox) iconBox.style.transition = 'transform 0.3s ease';
    if (arrowIcon) arrowIcon.style.transition = 'transform 0.3s ease';
    
});
</script>
@endsection