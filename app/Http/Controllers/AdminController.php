<?php

namespace App\Http\Controllers;

use App\Models\Pendaftaran;

class AdminController extends Controller
{
    public function dashboard()
    {
        // KPI
        $totalPendaftar = Pendaftaran::count();
        $diproses = Pendaftaran::where('status', 'diproses')->count();
        $cekKesehatan = Pendaftaran::where('status', 'cek kesehatan')->count();
        $lulus = Pendaftaran::where('status', 'lulus')->count();
        $tidakLulus = Pendaftaran::where('status', 'tidak lulus')->count();

        // Pendaftar terbaru
        $pendaftarTerbaru = Pendaftaran::latest()->take(5)->get();

        // Chart status
        $statusChart = Pendaftaran::selectRaw('status, COUNT(*) as total')
            ->groupBy('status')
            ->pluck('total', 'status');

        // Chart gender
        $genderChart = Pendaftaran::selectRaw('jenis_kelamin, COUNT(*) as total')
            ->groupBy('jenis_kelamin')
            ->pluck('total', 'jenis_kelamin');

        // Trend per bulan (Jan–Des)
        $trendBulanan = Pendaftaran::selectRaw('MONTH(created_at) as bulan, COUNT(*) as total')
            ->whereYear('created_at', now()->year)
            ->groupBy('bulan')
            ->orderBy('bulan')
            ->get();

        // Top sekolah
        $topSekolah = Pendaftaran::selectRaw('asal_sekolah, COUNT(*) as total')
            ->groupBy('asal_sekolah')
            ->orderByDesc('total')
            ->take(5)
            ->get();

        return view('admin.dashboard', compact(
            'totalPendaftar',
            'diproses',
            'cekKesehatan',
            'lulus',
            'tidakLulus',
            'pendaftarTerbaru',
            'statusChart',
            'genderChart',
            'trendBulanan',
            'topSekolah'
        ));
    }
}