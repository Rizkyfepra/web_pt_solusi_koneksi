<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    public const TIPE_LAYANAN = 'layanan';
    public const TIPE_PRODUK = 'produk';

    protected $table = 'produk';

    protected $fillable = [
        'nama',
        'deskripsi',
        'kategori',
        'harga',
        'gambar',
    ];

    public function scopeLayanan(Builder $query): Builder
    {
        return $query->where('kategori', self::TIPE_LAYANAN);
    }

    public function scopeKatalog(Builder $query): Builder
    {
        return $query->where(function (Builder $q) {
            $q->where('kategori', self::TIPE_PRODUK)
                ->orWhereNull('kategori');
        });
    }

    public function isLayanan(): bool
    {
        return $this->kategori === self::TIPE_LAYANAN;
    }
}
