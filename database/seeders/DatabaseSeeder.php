<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $adminEmail = config('admin.email') ?: 'admin@gmail.com';

        User::factory()->admin()->create([
            'name' => 'Admin',
            'email' => $adminEmail,
        ]);

        $this->call([
            ProfilSeeder::class,
            ArtikelSeeder::class,
            ProdukSeeder::class,
            GaleriSeeder::class,
        ]);
    }
}
