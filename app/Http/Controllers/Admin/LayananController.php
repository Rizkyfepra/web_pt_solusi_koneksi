<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class LayananController extends Controller
{
    public function index()
    {
        $daftarLayanan = Produk::layanan()->latest()->get();

        return view('admin.layanan.index', compact('daftarLayanan'));
    }

    public function create()
    {
        return view('admin.layanan.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama'      => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'gambar'    => 'nullable|image|max:9048',
        ]);

        $validated['kategori'] = Produk::TIPE_LAYANAN;
        $validated['harga'] = null;

        if ($request->hasFile('gambar')) {
            $validated['gambar'] = $request->file('gambar')->store('produk', 'public');
        }

        Produk::create($validated);

        return redirect()->route('admin.layanan.index')->with('success', 'Layanan berhasil ditambahkan.');
    }

    public function edit(Produk $produk)
    {
        abort_unless($produk->isLayanan(), 404);

        return view('admin.layanan.edit', compact('produk'));
    }

    public function update(Request $request, Produk $produk)
    {
        abort_unless($produk->isLayanan(), 404);

        $validated = $request->validate([
            'nama'      => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'gambar'    => 'nullable|image|max:9048',
        ]);

        $validated['kategori'] = Produk::TIPE_LAYANAN;
        $validated['harga'] = null;

        if ($request->hasFile('gambar')) {
            if ($produk->gambar) {
                Storage::disk('public')->delete($produk->gambar);
            }
            $validated['gambar'] = $request->file('gambar')->store('produk', 'public');
        }

        $produk->update($validated);

        return redirect()->route('admin.layanan.index')->with('success', 'Layanan berhasil diperbarui.');
    }
}
