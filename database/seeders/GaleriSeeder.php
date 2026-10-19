<?php

namespace Database\Seeders;

use App\Models\Galeri;
use Illuminate\Database\Seeder;

class GaleriSeeder extends Seeder
{
    public function run(): void
    {
        // Dummy tanpa file gambar — bisa diganti lewat admin nanti.
        // Kolom judul/deskripsi opsional di DB; model fillable hanya 'gambar'.
        $count = Galeri::count();

        if ($count >= 4) {
            return;
        }

        for ($i = $count + 1; $i <= 4; $i++) {
            Galeri::create([
                'gambar' => null,
            ]);
        }
    }
}
