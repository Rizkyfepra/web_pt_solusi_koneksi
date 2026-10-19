@extends('layouts.admin')

@section('title', 'Edit Layanan')

@section('content')
<h1 class="text-2xl font-bold text-slate-900 mb-6">Edit Layanan</h1>

<form action="{{ route('admin.layanan.update', $produk) }}" method="POST" enctype="multipart/form-data"
      class="bg-white rounded-xl border border-slate-200 p-6 max-w-xl space-y-5">
    @csrf
    @method('PUT')

    <div>
        <label class="block text-sm font-medium text-slate-700 mb-1">Nama Layanan</label>
        <input type="text" name="nama" value="{{ old('nama', $produk->nama) }}"
               class="w-full border border-slate-300 rounded-md px-3 py-2 text-sm">
        @error('nama') <p class="text-red-600 text-xs mt-1">{{ $message }}</p> @enderror
    </div>

    <div>
        <label class="block text-sm font-medium text-slate-700 mb-1">Deskripsi</label>
        <textarea name="deskripsi" rows="8"
                  class="w-full border border-slate-300 rounded-md px-3 py-2 text-sm">{{ old('deskripsi', $produk->deskripsi) }}</textarea>
    </div>

    <div>
        <label class="block text-sm font-medium text-slate-700 mb-1">Gambar</label>
        @if ($produk->gambar)
            <img src="{{ Storage::url($produk->gambar) }}" class="w-24 h-24 object-cover rounded-md mb-2">
        @endif
        <input type="file" name="gambar" accept="image/*" class="text-sm">
        <p class="text-xs text-slate-400 mt-1">Kosongkan kalau tidak mau ganti gambar.</p>
    </div>

    <div class="flex gap-3 pt-2">
        <button type="submit" class="bg-blue-600 text-white px-5 py-2 rounded-md text-sm font-medium hover:bg-blue-700">Simpan Perubahan</button>
        <a href="{{ route('admin.layanan.index') }}" class="px-5 py-2 rounded-md text-sm text-slate-600 hover:bg-slate-100">Batal</a>
    </div>
</form>
@endsection
