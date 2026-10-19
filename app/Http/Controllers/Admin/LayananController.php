<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class LayananController extends Controller
{
    /**
     * Menampilkan daftar layanan.
     */
    public function index()
    {
        $daftarLayanan = Produk::layanan()
            ->latest()
            ->get();

        return view('admin.layanan.index', compact('daftarLayanan'));
    }

    /**
     * Menampilkan form tambah layanan.
     */
    public function create()
    {
        return view('admin.layanan.create');
    }

    /**
     * Menyimpan layanan baru beserta gambar.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'gambar' => [
                'nullable',
                'file',
                'max:15360',
                'mimes:jpg,jpeg,png,webp,svg',
            ],
        ]);

        $validated['kategori'] = Produk::TIPE_LAYANAN;
        $validated['harga'] = null;

        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar')
                ->store('produk', 'public');

            if (! $gambar) {
                return back()
                    ->withInput()
                    ->withErrors([
                        'gambar' => 'Gambar gagal disimpan. Silakan coba lagi.',
                    ]);
            }

            $validated['gambar'] = $gambar;
        }

        Produk::create($validated);

        return redirect()
            ->route('admin.layanan.index')
            ->with('success', 'Layanan berhasil ditambahkan.');
    }

    /**
     * Menampilkan form edit layanan.
     */
    public function edit(Produk $produk)
    {
        abort_unless($produk->isLayanan(), 404);

        return view('admin.layanan.edit', compact('produk'));
    }

    /**
     * Memperbarui data layanan dan mengganti gambar jika dipilih.
     */
    public function update(Request $request, Produk $produk)
    {
        abort_unless($produk->isLayanan(), 404);

        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'gambar' => [
                'nullable',
                'file',
                'max:15360',
                'mimes:jpg,jpeg,png,webp,svg',
            ],
        ]);

        $validated['kategori'] = Produk::TIPE_LAYANAN;
        $validated['harga'] = null;

        $gambarLama = $produk->gambar;
        $gambarBaru = null;

        // Simpan gambar baru terlebih dahulu.
        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');

            if (! $file->isValid()) {
                return back()
                    ->withInput()
                    ->withErrors([
                        'gambar' => 'Upload gagal. Silakan pilih ulang gambar.',
                    ]);
            }

            $gambarBaru = $file->store('produk', 'public');

            if (! $gambarBaru) {
                return back()
                    ->withInput()
                    ->withErrors([
                        'gambar' => 'Gambar gagal disimpan ke penyimpanan.',
                    ]);
            }

            $validated['gambar'] = $gambarBaru;
        }

        // Perbarui data layanan.
        try {
            $produk->update($validated);
        } catch (\Throwable $e) {
            // Hapus file baru jika pembaruan database gagal.
            if ($gambarBaru) {
                Storage::disk('public')->delete($gambarBaru);
            }

            throw $e;
        }

        // Hapus gambar lama hanya setelah update berhasil.
        if ($gambarBaru && $gambarLama) {
            Storage::disk('public')->delete($gambarLama);
        }

        return redirect()
            ->route('admin.layanan.index')
            ->with('success', 'Layanan berhasil diperbarui.');
    }
}
