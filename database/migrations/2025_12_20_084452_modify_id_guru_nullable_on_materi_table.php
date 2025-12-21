<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('materi', function (Blueprint $table) {
            $table->unsignedBigInteger('id_guru')->nullable()->change();

            $table->dropForeign(['id_guru']);
            $table->foreign('id_guru')
                ->references('id')->on('users')
                ->onDelete('set null');
        });
    }

    public function down()
    {
        Schema::table('materi', function (Blueprint $table) {
            $table->unsignedBigInteger('id_guru')->nullable(false)->change();

            $table->dropForeign(['id_guru']);
            $table->foreign('id_guru')
                ->references('id')->on('users');
        });
    }

};