<?php

use App\Http\Controllers\Admin\ArtikelController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\GaleriController;
use App\Http\Controllers\Admin\LayananController;
use App\Http\Controllers\Admin\PesanController;
use App\Http\Controllers\Admin\ProdukController;
use App\Http\Controllers\Admin\ProfilController;
use App\Http\Controllers\ArtikelPublicController;
use App\Http\Controllers\GaleriPublicController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProdukPublicController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// ===== Halaman publik company profile =====
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/profil', [PageController::class, 'profil'])->name('profil');
Route::get('/produk', [ProdukPublicController::class, 'index'])->name('produk.index');
Route::get('/produk/{produk}', [ProdukPublicController::class, 'show'])->name('produk.show');
Route::get('/artikel', [ArtikelPublicController::class, 'index'])->name('artikel.index');
Route::get('/artikel/{artikel}', [ArtikelPublicController::class, 'show'])->name('artikel.show');
Route::get('/galeri', [GaleriPublicController::class, 'index'])->name('galeri.index');
Route::get('/kontak', [KontakController::class, 'index'])->name('kontak');
Route::post('/kontak', [KontakController::class, 'store'])
    ->middleware('throttle:5,1')
    ->name('kontak.store');

Route::prefix('admin')->name('admin.')
    ->middleware(['auth', 'can:manage-gallery'])
    ->group(function () {
        Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
        Route::resource('galeri', GaleriController::class)->except(['show']);
        // Layanan: tambah, edit, update (tanpa hapus)
        Route::resource('layanan', LayananController::class)
            ->except(['show', 'destroy'])
            ->parameters(['layanan' => 'produk']);
        Route::resource('produk', ProdukController::class)->except(['show']);
        Route::resource('artikel', ArtikelController::class)->except(['show']);
        Route::get('pesan', [PesanController::class, 'index'])->name('pesan.index');
        Route::get('pesan/{pesan}', [PesanController::class, 'show'])->name('pesan.show');
        Route::delete('pesan/{pesan}', [PesanController::class, 'destroy'])->name('pesan.destroy');

        // Profil: hanya edit & update (tanpa tambah / hapus)
        Route::get('profil', [ProfilController::class, 'edit'])->name('profil.edit');
        Route::put('profil', [ProfilController::class, 'update'])->name('profil.update');
    });

// ===== Route bawaan Breeze =====
Route::redirect('/dashboard', '/admin')->middleware('auth')->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
