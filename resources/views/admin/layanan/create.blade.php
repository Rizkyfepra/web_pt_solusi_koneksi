@extends('layouts.admin')

@section('title', 'Tambah Layanan')

@section('content')
<h1 class="text-2xl font-bold text-slate-900 mb-6">Tambah Layanan</h1>

<form action="{{ route('admin.layanan.store') }}" method="POST" enctype="multipart/form-data"
      class="bg-white rounded-xl border border-slate-200 p-6 max-w-xl space-y-5">
    @csrf

    <div>
        <label class="block text-sm font-medium text-slate-700 mb-1">Nama Layanan</label>
        <input type="text" name="nama" value="{{ old('nama') }}"
               class="w-full border border-slate-300 rounded-md px-3 py-2 text-sm">
        @error('nama') <p class="text-red-600 text-xs mt-1">{{ $message }}</p> @enderror
    </div>

    <div>
        <label class="block text-sm font-medium text-slate-700 mb-1">Deskripsi</label>
        <textarea name="deskripsi" rows="8"
                  class="w-full border border-slate-300 rounded-md px-3 py-2 text-sm"
                  placeholder="Jelaskan layanan ini secara lengkap...">{{ old('deskripsi') }}</textarea>
    </div>

    <div>
        <label class="block text-sm font-medium text-slate-700 mb-1">Gambar</label>
        <input type="file" name="gambar" accept="image/*" class="text-sm">
        @error('gambar') <p class="text-red-600 text-xs mt-1">{{ $message }}</p> @enderror
    </div>

    <div class="flex gap-3 pt-2">
        <button type="submit" class="bg-blue-600 text-white px-5 py-2 rounded-md text-sm font-medium hover:bg-blue-700">Simpan</button>
        <a href="{{ route('admin.layanan.index') }}" class="px-5 py-2 rounded-md text-sm text-slate-600 hover:bg-slate-100">Batal</a>
    </div>
</form>
@endsection
