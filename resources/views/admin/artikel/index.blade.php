@extends('layouts.admin')

@section('title', 'Kelola Artikel')

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
        <h1 class="text-2xl font-bold text-slate-900">Kelola Artikel</h1>
        <a href="{{ route('admin.artikel.create') }}"
           class="bg-blue-600 text-white px-4 py-2 rounded-md text-sm font-medium hover:bg-blue-700 transition">
            + Tambah Artikel
        </a>
    </div>

    <div class="bg-white rounded-xl border border-slate-200 overflow-hidden">
        <table class="w-full text-sm">
            <thead class="bg-slate-50 text-left text-slate-500">
                <tr>
                    <th class="px-6 py-3 font-medium">Gambar</th>
                    <th class="px-6 py-3 font-medium">Judul</th>
                    <th class="px-6 py-3 font-medium">Kategori</th>
                    <th class="px-6 py-3 font-medium">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-100">
                @forelse ($daftarArtikel as $artikel)
                    <tr>
                        <td class="px-6 py-4">
                            @if ($artikel->gambar)
                                <img src="{{ Storage::url($artikel->gambar) }}" class="w-16 h-16 object-cover rounded-md">
                            @else
                                <div class="w-16 h-16 bg-slate-100 rounded-md"></div>
                            @endif
                        </td>
                        <td class="px-6 py-4 font-semibold text-slate-900">{{ $artikel->judul }}</td>
                        <td class="px-6 py-4">
                            @if ($artikel->kategori)
                                <span class="text-xs font-medium text-blue-700 bg-blue-50 px-3 py-1 rounded-full">{{ $artikel->kategori }}</span>
                            @endif
                        </td>
                        <td class="px-6 py-4">
                            <a href="{{ route('admin.artikel.edit', $artikel) }}" class="text-blue-600 hover:underline mr-3">Edit</a>
                            <button type="button"
                                    class="text-red-600 hover:underline"
                                    @click="confirmDelete(@js($artikel->judul), @js(route('admin.artikel.destroy', $artikel)))">
                                Hapus
                            </button>
                        </td>
                    </tr>
                @empty
                    <tr><td colspan="4" class="px-6 py-8 text-center text-slate-400">Belum ada artikel.</td></tr>
                @endforelse
            </tbody>
        </table>
    </div>

    @include('admin.partials.confirm-delete-modal', ['title' => 'Hapus Artikel', 'entity' => 'artikel'])
</div>
@endsection
