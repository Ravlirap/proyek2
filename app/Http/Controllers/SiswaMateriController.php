<?php

namespace App\Http\Controllers;

use App\Models\Materi;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;

class SiswaMateriController extends Controller
{
    public function index()
    {
        return view('siswa.konten.materi', [
            'materi' => Materi::orderBy('created_at', 'desc')->get(),
            'materiDetail' => null
        ]);
    }

    public function show($id)
    {
        return view('siswa.konten.materi', [
            'materi' => Materi::orderBy('created_at', 'desc')->get(),

            'materiDetail' => Materi::findOrFail($id),
        ]);
    }

    public function download($id)
    {
        $materi = Materi::findOrFail($id);
        return response()->download(
            storage_path('app/public/' . $materi->file_materi)
        );
    }

    public function view($id)
    {
        $materi = Materi::findOrFail($id);
        $path = storage_path('app/public/' . $materi->file_materi);

        if (!file_exists($path)) {
            abort(404);
        }

        $filename = basename($path);
        $mime = mime_content_type($path) ?: 'application/octet-stream';

        return response()->file($path, [
            'Content-Type' => $mime,
            'Content-Disposition' => 'inline; filename="' . $filename . '"'
        ]);
    }
}