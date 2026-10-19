
@extends('layouts.admin')

@section('title', 'Tambah Galeri')

@section('content')
    <div class="mb-6">
        <h1 class="text-2xl font-bold text-slate-900">
            Tambah Galeri Kegiatan
        </h1>
        <p class="mt-1 text-sm text-slate-500">
            Tambahkan judul dan foto kegiatan perusahaan.
        </p>
    </div>

    <form
        action="{{ route('admin.galeri.store') }}"
        method="POST"
        enctype="multipart/form-data"
        class="max-w-xl space-y-5 rounded-xl border border-slate-200 bg-white p-6"
    >
        @csrf

        <div>
            <label
                for="judul"
                class="mb-1 block text-sm font-medium text-slate-700"
            >
                Judul Kegiatan
            </label>

            <input
                type="text"
                id="judul"
                name="judul"
                value="{{ old('judul') }}"
                placeholder="Contoh: Kegiatan Gathering Perusahaan"
                required
                maxlength="255"
                class="w-full rounded-md border border-slate-300 px-3 py-2 text-sm focus:border-blue-500 focus:outline-none focus:ring-1 focus:ring-blue-500"
            >

            @error('judul')
                <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label
                for="gambar"
                class="mb-1 block text-sm font-medium text-slate-700"
            >
                Foto Kegiatan
            </label>

            <input
                type="file"
                id="gambar"
                name="gambar"
                accept="image/jpeg,image/png,image/webp"
                required
                class="block w-full rounded-md border border-slate-300 p-2 text-sm"
            >

            @error('gambar')
                <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
            @enderror

            <p class="mt-1 text-xs text-slate-400">
                Format JPG, PNG, atau WebP. Maksimal 9 MB.
            </p>
        </div>

        <div class="flex gap-3 border-t border-slate-100 pt-4">
            <button
                type="submit"
                class="rounded-md bg-blue-600 px-5 py-2.5 text-sm font-medium text-white hover:bg-blue-700"
            >
                Simpan
            </button>

            <a
                href="{{ route('admin.galeri.index') }}"
                class="rounded-md px-5 py-2.5 text-sm text-slate-600 hover:bg-slate-100"
            >
                Batal
            </a>
        </div>
    </form>
@endsection
