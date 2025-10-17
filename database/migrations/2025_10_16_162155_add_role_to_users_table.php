<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Metode UP: Menambahkan/Mengubah kolom 'role' menjadi ENUM.
     */
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            
            if (Schema::hasColumn('users', 'role')) {
                $table->dropColumn('role');
            }
            
            $table->enum('role', ['siswa', 'guru', 'admin'])
                  ->default('siswa') // Set nilai default menjadi 'siswa' (pengguna biasa)
                  ->after('password'); 
        });
    }

    /**
     * Metode DOWN: Membalikkan (ROLLBACK) migrasi.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            // Hapus kolom 'role' saat rollback
            $table->dropColumn('role');
        });
    }
};