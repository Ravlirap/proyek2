<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pendaftaran', function (Blueprint $table) {
            $table->id()->primary();
            $table->string('nama_lengkap');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->enum('jenis_kelamin', ['laki-laki', 'perempuan']);
            $table->integer('tinggi_badan');
            $table->integer('berat_badan');
            $table->string('alamat');
            $table->string('asal_sekolah');
            $table->string('no_hp');
            $table->string('email')->unique();
            $table->string('foto')->nullable();
            $table->string('ijazah')->nullable();
            $table->string('ktp')->nullable();
            $table->string('kk')->nullable();
            $table->string('status')->default('pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pendaftaran');
    }
};
