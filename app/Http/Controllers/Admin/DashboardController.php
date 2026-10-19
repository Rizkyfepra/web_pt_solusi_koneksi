<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Artikel;
use App\Models\Galeri;
use App\Models\PesanKontak;
use App\Models\Produk;
use App\Models\Profil;

class DashboardController extends Controller
{
    public function index()
    {
        $stats = [
            'layanan' => Produk::layanan()->count(),
            'produk'  => Produk::katalog()->count(),
            'artikel' => Artikel::count(),
            'galeri'  => Galeri::count(),
            'pesan'   => PesanKontak::count(),
            'pesan_baru' => PesanKontak::belumDibaca()->count(),
        ];

        $profil = Profil::singleton();

        $artikelTerbaru = Artikel::latest()->take(5)->get();
        $galeriTerbaru  = Galeri::latest()->take(4)->get();
        $pesanTerbaru   = PesanKontak::latest()->take(5)->get();

        return view('admin.dashboard', compact('stats', 'profil', 'artikelTerbaru', 'galeriTerbaru', 'pesanTerbaru'));
    }
}
