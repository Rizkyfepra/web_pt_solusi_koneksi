<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        // Schema::change() portable untuk MySQL & SQLite (tanpa raw MODIFY).
        Schema::table('galeri', function (Blueprint $table) {
            $table->string('judul')->nullable()->change();
            $table->text('deskripsi')->nullable()->change();
            $table->string('kategori')->nullable()->change();
        });
    }

    public function down(): void
    {
        // Tidak dibalikin ke NOT NULL, karena data lama mungkin sudah kosong.
    }
};
