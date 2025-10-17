<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    // Hapus public function __construct() { ... }

    public function showLoginForm()
    {
        // Pengecekan sederhana sebagai pengganti middleware 'guest'
        if (Auth::check()) {
            return $this->redirectToDashboard();
        }
        return view('auth.login'); 
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials, $request->remember)) {
            $request->session()->regenerate();
            
            // Panggil fungsi redirect yang menggunakan role sebagai slug
            return $this->redirectToDashboard(); 
        }

        throw ValidationException::withMessages([
            'email' => 'Kredensial tidak valid.',
        ]);
    }

    /** Logika Redirect yang Menggunakan Role sebagai Slug */
    protected function redirectToDashboard()
    {
        $role = Auth::user()->role;
        $slug = $role; // Disini $slug sama dengan $role

        // Redirect menggunakan $slug di URL
        return match ($role) {
            'admin' => redirect("/{$slug}/dashboard"),
            'guru' => redirect("/{$slug}/dashboard"),
            default => redirect("/{$slug}/dashboard"), // '/siswa/dashboard'
        };
        // ATAU versi lebih singkat: 
        // return redirect("/{$slug}/dashboard");
    }
    
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}