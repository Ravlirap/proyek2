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
        Schema::create('jadwal_cek_kesehatan', function (Blueprint $table) {
            $table->id();
            $table->string('periode'); 
            $table->string('tanggal'); 
            $table->string('jam');
            $table->string('tempat');
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jadwal_cek_kesehatan');
    }
};
