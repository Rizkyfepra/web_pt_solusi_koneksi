```blade
@extends('layouts.admin')

@section('title', 'Edit Layanan')

@section('content')
    <div class="mb-6">
        <h1 class="text-2xl font-bold text-slate-900">
            Edit Layanan
        </h1>

        <p class="mt-1 text-sm text-slate-500">
            Perbarui informasi dan gambar layanan perusahaan.
        </p>
    </div>

    <form
        action="{{ route('admin.layanan.update', $produk) }}"
        method="POST"
        enctype="multipart/form-data"
        class="max-w-xl space-y-5 rounded-xl border border-slate-200 bg-white p-6"
    >
        @csrf
        @method('PUT')

        {{-- Nama Layanan --}}
        <div>
            <label
                for="nama"
                class="mb-1 block text-sm font-medium text-slate-700"
            >
                Nama Layanan
            </label>

            <input
                type="text"
                id="nama"
                name="nama"
                value="{{ old('nama', $produk->nama) }}"
                required
                class="w-full rounded-md border border-slate-300 px-3 py-2 text-sm focus:border-blue-500 focus:outline-none focus:ring-1 focus:ring-blue-500"
            >

            @error('nama')
                <p class="mt-1 text-xs text-red-600">
                    {{ $message }}
                </p>
            @enderror
        </div>

        {{-- Deskripsi --}}
        <div>
            <label
                for="deskripsi"
                class="mb-1 block text-sm font-medium text-slate-700"
            >
                Deskripsi
            </label>

            <textarea
                id="deskripsi"
                name="deskripsi"
                rows="8"
                class="w-full rounded-md border border-slate-300 px-3 py-2 text-sm focus:border-blue-500 focus:outline-none focus:ring-1 focus:ring-blue-500"
            >{{ old('deskripsi', $produk->deskripsi) }}</textarea>

            @error('deskripsi')
                <p class="mt-1 text-xs text-red-600">
                    {{ $message }}
                </p>
            @enderror
        </div>

        {{-- Gambar Layanan --}}
        <div>
            <label
                for="gambar"
                class="mb-2 block text-sm font-medium text-slate-700"
            >
                Gambar Layanan
            </label>

            @if ($produk->gambar)
                <div class="mb-4">
                    <p class="mb-2 text-xs text-slate-500">
                        Gambar saat ini:
                    </p>

                    <img
                        src="{{ Storage::url($produk->gambar) }}"
                        alt="Gambar {{ $produk->nama }}"
                        class="h-36 w-36 rounded-lg border border-slate-200 bg-slate-50 object-contain"
                    >
                </div>
            @endif

            <input
                type="file"
                id="gambar"
                name="gambar"
                accept=".jpg,.jpeg,.png,.webp,.svg,image/jpeg,image/png,image/webp,image/svg+xml"
                class="block w-full rounded-md border border-slate-300 p-2 text-sm text-slate-700 file:mr-3 file:rounded-md file:border-0 file:bg-slate-100 file:px-3 file:py-2 file:text-sm file:font-medium hover:file:bg-slate-200"
            >

            @error('gambar')
                <p class="mt-1 text-xs text-red-600">
                    {{ $message }}
                </p>
            @enderror

            <p class="mt-2 text-xs leading-relaxed text-slate-500">
                Format yang didukung: JPG, JPEG, PNG, WebP, dan SVG.
                Ukuran maksimal 15 MB.
            </p>

            <p class="mt-1 text-xs text-slate-400">
                Pilih gambar baru untuk mengganti gambar saat ini.
                Kosongkan jika tidak ingin menggantinya.
            </p>
        </div>

        {{-- Tombol Aksi --}}
        <div class="flex flex-wrap gap-3 border-t border-slate-100 pt-4">
            <button
                type="submit"
                class="rounded-md bg-blue-600 px-5 py-2.5 text-sm font-medium text-white transition hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2"
            >
                Simpan Perubahan
            </button>

            <a
                href="{{ route('admin.layanan.index') }}"
                class="rounded-md border border-slate-300 px-5 py-2.5 text-sm font-medium text-slate-600 transition hover:bg-slate-50"
            >
                Batal
            </a>
        </div>
    </form>
@endsection
```