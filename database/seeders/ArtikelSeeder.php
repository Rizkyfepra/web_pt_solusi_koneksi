<?php

namespace Database\Seeders;

use App\Models\Artikel;
use Illuminate\Database\Seeder;

class ArtikelSeeder extends Seeder
{
    public function run(): void
    {
        $items = [
            [
                'judul'     => 'Tips Memilih Provider Internet untuk Sekolah',
                'kategori'  => 'Teknologi',
                'ringkasan' => 'Panduan singkat memilih koneksi internet yang stabil untuk kegiatan belajar digital.',
                'isi'       => "Koneksi internet yang stabil menjadi fondasi pembelajaran digital di sekolah. Pilih provider yang menawarkan bandwidth memadai, SLA jelas, dan dukungan teknis responsif.\n\nPertimbangkan juga skalabilitas agar jaringan mudah ditambah saat jumlah perangkat meningkat.",
            ],
            [
                'judul'     => 'Manfaat Cloud Storage untuk Administrasi Sekolah',
                'kategori'  => 'Akademik',
                'ringkasan' => 'Dokumen penting lebih aman dan mudah diakses dengan penyimpanan berbasis cloud.',
                'isi'       => "Cloud storage membantu sekolah menyimpan arsip, rapor, dan dokumen administrasi secara terpusat. Tim dapat berkolaborasi tanpa bergantung pada satu perangkat fisik.\n\nPastikan ada kebijakan akses dan backup berkala agar data tetap aman.",
            ],
            [
                'judul'     => 'Workshop Jaringan Dasar untuk Siswa SMK',
                'kategori'  => 'Prestasi Siswa',
                'ringkasan' => 'Kegiatan praktik kabel, IP addressing, dan troubleshooting sederhana di lab sekolah.',
                'isi'       => "Workshop ini memperkenalkan konsep dasar jaringan komputer kepada siswa. Materi mencakup topologi, pengalamatan IP, hingga troubleshooting sederhana.\n\nHarapannya siswa lebih siap menghadapi magang dan dunia kerja di bidang IT.",
            ],
            [
                'judul'     => 'Keamanan Siber Dasar untuk Guru dan Staf',
                'kategori'  => 'Keamanan',
                'ringkasan' => 'Kenali phishing, password kuat, dan praktik aman saat memakai akun sekolah.',
                'isi'       => "Ancaman siber sering datang lewat email dan tautan palsu. Guru serta staf perlu memahami cara mengenali phishing dan menjaga kredensial akun.\n\nGunakan password unik, aktifkan autentikasi dua faktor jika tersedia, dan jangan berbagi akun antar pengguna.",
            ],
        ];

        foreach ($items as $item) {
            Artikel::firstOrCreate(
                ['judul' => $item['judul']],
                $item
            );
        }
    }
}
