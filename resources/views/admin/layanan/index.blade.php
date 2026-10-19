@extends('layouts.admin')

@section('title', 'Kelola Layanan')

@section('content')
<div class="flex items-center justify-between mb-6">
    <h1 class="text-2xl font-bold text-slate-900">Kelola Layanan</h1>
    <a href="{{ route('admin.layanan.create') }}"
       class="bg-blue-600 text-white px-4 py-2 rounded-md text-sm font-medium hover:bg-blue-700 transition">
        + Tambah Layanan
    </a>
</div>

<div class="bg-white rounded-xl border border-slate-200 overflow-hidden">
    <table class="w-full text-sm">
        <thead class="bg-slate-50 text-left text-slate-500">
            <tr>
                <th class="px-6 py-3 font-medium">Gambar</th>
                <th class="px-6 py-3 font-medium">Nama</th>
                <th class="px-6 py-3 font-medium">Deskripsi</th>
                <th class="px-6 py-3 font-medium">Aksi</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-slate-100">
            @forelse ($daftarLayanan as $layanan)
                <tr>
                    <td class="px-6 py-4">
                        @if ($layanan->gambar)
                            <img src="{{ Storage::url($layanan->gambar) }}" class="w-16 h-16 object-cover rounded-md">
                        @else
                            <div class="w-16 h-16 bg-slate-100 rounded-md"></div>
                        @endif
                    </td>
                    <td class="px-6 py-4 font-semibold text-slate-900">{{ $layanan->nama }}</td>
                    <td class="px-6 py-4 text-slate-500">{{ Str::limit($layanan->deskripsi, 80) }}</td>
                    <td class="px-6 py-4">
                        <a href="{{ route('admin.layanan.edit', $layanan) }}" class="text-blue-600 hover:underline">Edit</a>
                    </td>
                </tr>
            @empty
                <tr><td colspan="4" class="px-6 py-8 text-center text-slate-400">Belum ada layanan.</td></tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
