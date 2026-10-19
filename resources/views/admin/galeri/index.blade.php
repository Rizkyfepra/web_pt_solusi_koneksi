@extends('layouts.admin')

@section('title', 'Kelola Galeri')

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
        <h1 class="text-2xl font-bold text-slate-900">Kelola Galeri</h1>
        <a href="{{ route('admin.galeri.create') }}"
           class="bg-blue-600 text-white px-4 py-2 rounded-md text-sm font-medium hover:bg-blue-700 transition">
            + Tambah Foto
        </a>
    </div>

    <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-4">
        @forelse ($daftarGaleri as $galeri)
            <div class="bg-white rounded-xl border border-slate-200 overflow-hidden">
                <div class="h-32 bg-slate-100">
                    @if ($galeri->gambar)
                        <img src="{{ Storage::url($galeri->gambar) }}" class="w-full h-full object-cover">
                    @endif
                </div>
                <div class="p-2 flex justify-between text-xs">
                    <a href="{{ route('admin.galeri.edit', $galeri) }}" class="text-blue-600 hover:underline">Edit</a>
                    <button type="button"
                            class="text-red-600 hover:underline"
                            @click="confirmDelete('', @js(route('admin.galeri.destroy', $galeri)))">
                        Hapus
                    </button>
                </div>
            </div>
        @empty
            <p class="text-slate-400 text-sm col-span-full">Belum ada foto.</p>
        @endforelse
    </div>

    @include('admin.partials.confirm-delete-modal', ['title' => 'Hapus Foto', 'entity' => 'foto'])
</div>
@endsection
