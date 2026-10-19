@extends('layouts.public')

@section('title', $produk->nama)

@section('content')
  <main class="flex-1">
    <div class="max-w-4xl mx-auto px-6 py-16">
      <a href="{{ route('produk.index') }}#layanan" class="text-sm text-slate-500 hover:text-slate-900">&larr; Kembali ke Layanan & Produk</a>

      <span class="inline-block mt-6 text-xs font-medium text-blue-700 bg-blue-50 px-3 py-1 rounded-full">Layanan</span>

      <h1 class="font-serif text-3xl md:text-4xl font-bold text-slate-900 mt-4 mb-6">{{ $produk->nama }}</h1>

      @if ($produk->gambar)
        <img src="{{ Storage::url($produk->gambar) }}" alt="{{ $produk->nama }}"
             class="w-full h-64 md:h-80 object-cover rounded-2xl mb-8">
      @endif

      <div class="text-slate-700 leading-relaxed whitespace-pre-line text-base md:text-lg">
        {{ $produk->deskripsi ?: 'Deskripsi layanan belum ditambahkan.' }}
      </div>

      <div class="mt-10">
        <a href="{{ route('produk.index') }}#layanan"
           class="border border-slate-300 text-slate-700 px-6 py-3 rounded-md text-sm font-medium hover:bg-slate-50 transition inline-block">
          Lihat Layanan Lain
        </a>
      </div>
    </div>

    @if ($layananLain->isNotEmpty())
      <section class="bg-slate-50 border-t border-slate-200">
        <div class="max-w-7xl mx-auto px-6 py-16">
          <h2 class="font-serif text-2xl font-semibold text-slate-900 mb-8">Layanan Lainnya</h2>
          <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            @foreach ($layananLain as $lain)
              <a href="{{ route('produk.show', $lain) }}"
                 class="bg-white rounded-xl border border-slate-200 overflow-hidden hover:shadow-lg transition duration-300 block">
                <div class="h-40 bg-slate-200 overflow-hidden">
                  @if ($lain->gambar)
                    <img class="w-full h-full object-cover" src="{{ Storage::url($lain->gambar) }}" alt="{{ $lain->nama }}">
                  @endif
                </div>
                <div class="p-5">
                  <h3 class="font-bold text-lg text-gray-800 mb-2">{{ $lain->nama }}</h3>
                  @if ($lain->deskripsi)
                    <p class="text-slate-500 text-sm leading-relaxed">{{ Str::limit($lain->deskripsi, 80) }}</p>
                  @endif
                </div>
              </a>
            @endforeach
          </div>
        </div>
      </section>
    @endif
  </main>
@endsection
