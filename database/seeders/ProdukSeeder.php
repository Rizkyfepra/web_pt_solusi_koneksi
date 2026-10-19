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
                'nama'      => 'Jaringan & Infrastruktur',
                'kategori'  => Produk::TIPE_LAYANAN,
                'deskripsi' => "Kami membantu merancang, membangun, dan mengelola infrastruktur jaringan yang andal untuk mendukung operasional bisnis Anda.\n\nCakupan layanan meliputi survei lokasi, perencanaan topologi, instalasi perangkat (switch, router, access point), pengaturan keamanan jaringan, serta dokumentasi dan serah terima teknis.\n\nDengan pendekatan yang terukur, infrastruktur Anda siap berkembang seiring kebutuhan perusahaan tanpa mengorbankan stabilitas dan keamanan.",
                'harga'     => null,
            ],
            [
                'nama'      => 'Internet Dedicated',
                'kategori'  => Produk::TIPE_LAYANAN,
                'deskripsi' => "Layanan internet dedicated memberikan bandwidth simetris, latency rendah, dan koneksi yang lebih stabil dibanding internet shared.\n\nCocok untuk perusahaan, sekolah, dan lembaga yang membutuhkan akses simultan banyak pengguna, aplikasi cloud, video conference, serta sistem operasional online.\n\nKami juga menyediakan monitoring berkala dan dukungan teknis agar konektivitas tetap optimal setiap hari.",
                'harga'     => null,
            ],
            [
                'nama'      => 'Solusi Cloud',
                'kategori'  => Produk::TIPE_LAYANAN,
                'deskripsi' => "Solusi cloud kami membantu perusahaan bermigrasi, menyimpan, dan mengelola data serta aplikasi di lingkungan cloud yang aman dan fleksibel.\n\nLayanan mencakup konsultasi arsitektur cloud, setup hosting, backup, serta pengelolaan akses dan keamanan.\n\nHasilnya, tim Anda bisa bekerja lebih efisien dengan skalabilitas yang mudah disesuaikan tanpa investasi perangkat keras besar di awal.",
                'harga'     => null,
            ],
            [
                'nama'      => 'Managed IT Service',
                'kategori'  => Produk::TIPE_LAYANAN,
                'deskripsi' => "Managed IT Service menyerahkan pengelolaan operasional IT harian kepada tim profesional kami, sehingga Anda bisa fokus pada bisnis inti.\n\nTermasuk monitoring sistem, penanganan gangguan, pemeliharaan perangkat, manajemen pengguna, serta dukungan responsif saat dibutuhkan.\n\nModel layanan ini membantu menekan downtime, merapikan proses IT, dan menjaga standar keamanan secara berkelanjutan.",
                'harga'     => null,
            ],
            [
                'nama'      => 'Paket Internet Sekolah 50 Mbps',
                'kategori'  => Produk::TIPE_PRODUK,
                'deskripsi' => 'Koneksi dedicated untuk lab dan ruang kelas. Termasuk instalasi dan monitoring dasar.',
                'harga'     => 1500000,
            ],
            [
                'nama'      => 'Paket Internet Sekolah 100 Mbps',
                'kategori'  => Produk::TIPE_PRODUK,
                'deskripsi' => 'Bandwidth lebih besar untuk e-learning, ujian online, dan akses simultan banyak perangkat.',
                'harga'     => 2500000,
            ],
            [
                'nama'      => 'Managed Wi-Fi Campus',
                'kategori'  => Produk::TIPE_PRODUK,
                'deskripsi' => 'Instalasi access point, konfigurasi SSID, serta manajemen jaringan Wi-Fi area sekolah.',
                'harga'     => 5000000,
            ],
            [
                'nama'      => 'Layanan Cloud Backup Bulanan',
                'kategori'  => Produk::TIPE_PRODUK,
                'deskripsi' => 'Backup otomatis data penting sekolah ke cloud dengan laporan status berkala.',
                'harga'     => 750000,
            ],
            [
                'nama'      => 'Konsultasi Infrastruktur IT',
                'kategori'  => Produk::TIPE_PRODUK,
                'deskripsi' => 'Survey lokasi, rekomendasi perangkat, dan rencana pengembangan jaringan sekolah.',
                'harga'     => 1000000,
            ],
        ];

        foreach ($items as $item) {
            Produk::updateOrCreate(
                ['nama' => $item['nama']],
                $item
            );
        }
    }
}
