<?php

namespace Database\Seeders;

use App\Models\Produk;
use Illuminate\Database\Seeder;

class ProdukSeeder extends Seeder
{
    public function run(): void
    {
        $items = [
            [
                'nama'      => 'Paket Internet Sekolah 50 Mbps',
                'deskripsi' => 'Koneksi dedicated untuk lab dan ruang kelas. Termasuk instalasi dan monitoring dasar.',
                'harga'     => 1500000,
            ],
            [
                'nama'      => 'Paket Internet Sekolah 100 Mbps',
                'deskripsi' => 'Bandwidth lebih besar untuk e-learning, ujian online, dan akses simultan banyak perangkat.',
                'harga'     => 2500000,
            ],
            [
                'nama'      => 'Managed Wi-Fi Campus',
                'deskripsi' => 'Instalasi access point, konfigurasi SSID, serta manajemen jaringan Wi-Fi area sekolah.',
                'harga'     => 5000000,
            ],
            [
                'nama'      => 'Layanan Cloud Backup Bulanan',
                'deskripsi' => 'Backup otomatis data penting sekolah ke cloud dengan laporan status berkala.',
                'harga'     => 750000,
            ],
            [
                'nama'      => 'Konsultasi Infrastruktur IT',
                'deskripsi' => 'Survey lokasi, rekomendasi perangkat, dan rencana pengembangan jaringan sekolah.',
                'harga'     => 1000000,
            ],
        ];

        foreach ($items as $item) {
            Produk::firstOrCreate(
                ['nama' => $item['nama']],
                $item
            );
        }
    }
}
