@extends('layouts.public')

@section('title', 'Galeri Kegiatan')
@section('bodyClass', 'flex flex-col min-h-screen bg-slate-50')

@section('content')
  <main class="flex-1">
    <section class="max-w-7xl mx-auto px-6 py-16">
      <div class="mb-10">
        <h1 class="font-serif text-3xl md:text-4xl font-semibold text-slate-900">Galeri Kegiatan</h1>
        <p class="text-slate-500 mt-2">Dokumentasi kegiatan, proyek, dan aktivitas PT Solusi Koneksi Anda.</p>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        @forelse ($daftarGaleri as $galeri)
          <article class="bg-white rounded-2xl border border-slate-200 overflow-hidden shadow-sm">
            <div class="h-56 bg-slate-200 overflow-hidden">
              @if ($galeri->gambar)
                <img
                  src="{{ Storage::url($galeri->gambar) }}"
                  alt="{{ $galeri->judul ?: 'Foto kegiatan perusahaan' }}"
                  class="w-full h-full object-cover cursor-pointer hover:opacity-80 transition"
                  onclick="openLightbox('{{ Storage::url($galeri->gambar) }}', @js($galeri->judul ?: 'Galeri Kegiatan'))"
                >
              @endif
            </div>
            <div class="p-4">
              <h2 class="text-base md:text-lg font-semibold text-slate-900">
                {{ $galeri->judul ?: 'Galeri Kegiatan' }}
              </h2>
            </div>
          </article>
        @empty
          <p class="text-slate-400 text-sm col-span-3">Belum ada galeri yang ditambahkan.</p>
        @endforelse
      </div>

      <div class="mt-10">
        {{ $daftarGaleri->links() }}
      </div>
    </section>
  </main>
@endsection

@push('scripts')
  @include('partials.lightbox')
@endpush
