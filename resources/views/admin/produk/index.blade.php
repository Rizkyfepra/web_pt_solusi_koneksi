@extends('layouts.admin')

@section('title', 'Kelola Produk')

@section('content')
<div x-data="{
    open: false,
    nama: '',
    action: '',
    confirmDelete(nama, action) {
        this.nama = nama;
        this.action = action;
        this.open = true;
    }
}">
    <div class="flex items-center justify-between mb-6">
        <h1 class="text-2xl font-bold text-slate-900">Kelola Produk</h1>
        <a href="{{ route('admin.produk.create') }}"
           class="bg-blue-600 text-white px-4 py-2 rounded-md text-sm font-medium hover:bg-blue-700 transition">
            + Tambah Produk
        </a>
    </div>

    <div class="bg-white rounded-xl border border-slate-200 overflow-hidden">
        <table class="w-full text-sm">
            <thead class="bg-slate-50 text-left text-slate-500">
                <tr>
                    <th class="px-6 py-3 font-medium">Gambar</th>
                    <th class="px-6 py-3 font-medium">Nama</th>
                    <th class="px-6 py-3 font-medium">Harga</th>
                    <th class="px-6 py-3 font-medium">Deskripsi</th>
                    <th class="px-6 py-3 font-medium">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-100">
                @forelse ($daftarProduk as $produk)
                    <tr>
                        <td class="px-6 py-4">
                            @if ($produk->gambar)
                                <img src="{{ Storage::url($produk->gambar) }}" class="w-16 h-16 object-cover rounded-md">
                            @else
                                <div class="w-16 h-16 bg-slate-100 rounded-md"></div>
                            @endif
                        </td>
                        <td class="px-6 py-4 font-semibold text-slate-900">{{ $produk->nama }}</td>
                        <td class="px-6 py-4 text-slate-700">
                            @if ($produk->harga)
                                Rp {{ number_format($produk->harga, 0, ',', '.') }}
                            @endif
                        </td>
                        <td class="px-6 py-4 text-slate-500">{{ Str::limit($produk->deskripsi, 60) }}</td>
                        <td class="px-6 py-4">
                            <a href="{{ route('admin.produk.edit', $produk) }}" class="text-blue-600 hover:underline mr-3">Edit</a>
                            <button type="button"
                                    class="text-red-600 hover:underline"
                                    @click="confirmDelete(@js($produk->nama), @js(route('admin.produk.destroy', $produk)))">
                                Hapus
                            </button>
                        </td>
                    </tr>
                @empty
                    <tr><td colspan="5" class="px-6 py-8 text-center text-slate-400">Belum ada produk.</td></tr>
                @endforelse
            </tbody>
        </table>
    </div>

    @include('admin.partials.confirm-delete-modal', ['title' => 'Hapus Produk', 'entity' => 'produk'])
</div>
@endsection
