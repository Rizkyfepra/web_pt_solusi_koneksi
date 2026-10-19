<?php

namespace App\Http\Controllers;

use App\Models\Produk;

class ProdukPublicController extends Controller
{
    public function index()
    {
        $daftarLayanan = Produk::layanan()->latest()->get();
        $daftarProduk  = Produk::katalog()->latest()->paginate(9);

        return view('produk-public', compact('daftarLayanan', 'daftarProduk'));
    }

    public function show(Produk $produk)
    {
        abort_unless($produk->isLayanan(), 404);

        $layananLain = Produk::layanan()
            ->where('id', '!=', $produk->id)
            ->latest()
            ->take(3)
            ->get();

        return view('produk-show', compact('produk', 'layananLain'));
    }
}
