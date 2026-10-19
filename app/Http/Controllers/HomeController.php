<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\Galeri;
use App\Models\Produk;

class HomeController extends Controller
{
    public function index()
    {
        $daftarLayanan = Produk::layanan()->latest()->take(4)->get();
        $daftarProduk  = Produk::katalog()->latest()->take(3)->get();
        $daftarGaleri  = Galeri::latest()->get();
        $daftarArtikel = Artikel::latest()->take(3)->get();

        return view('home', compact('daftarLayanan', 'daftarProduk', 'daftarGaleri', 'daftarArtikel'));
    }
}
