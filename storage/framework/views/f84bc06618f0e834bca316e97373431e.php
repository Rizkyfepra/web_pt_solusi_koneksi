<?php $__env->startSection('title', 'Beranda'); ?>
<?php $__env->startSection('bodyClass', ''); ?>

<?php $__env->startSection('content'); ?>
  
  <section class="relative h-[640px] flex items-end">
    <img src="<?php echo e(asset('images/hero-office.jpg')); ?>" alt="Kantor PT Solusi Koneksi Anda" class="absolute inset-0 w-full h-full object-cover">
    <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/15 to-transparent"></div>

    <div class="relative max-w-7xl mx-auto px-6 pb-16 w-full">
      <h1 class="font-serif text-white text-4xl md:text-5xl leading-tight max-w-2xl">
        Selamat Datang di Website Resmi
      </h1>
      <h1 class="font-serif text-white text-5xl md:text-6xl leading-tight max-w-2xl">
        PT Solusi Koneksi Anda
      </h1>
      <p class="text-white/90 mt-6 max-w-xl leading-relaxed">
        Mitra terpercaya untuk solusi jaringan, konektivitas, dan layanan teknologi informasi yang andal untuk mengembangkan usaha Anda.
      </p>
      <div class="mt-8 flex flex-wrap gap-4">
        <a href="<?php echo e(route('produk.index')); ?>" class="bg-slate-900 text-white px-6 py-3 rounded-md text-sm font-medium hover:bg-slate-800 transition">Jelajahi Layanan &rarr;</a>
        <a href="<?php echo e(route('profil')); ?>" class="bg-white/10 backdrop-blur text-white border border-white/40 px-6 py-3 rounded-md text-sm font-medium hover:bg-white/20 transition">Tentang Kami</a>
      </div>
    </div>
  </section>

  
  <section class="bg-white">
    <div class="max-w-7xl mx-auto px-6 py-20 grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
      <div>
        <h2 class="text-2xl md:text-3xl font-bold text-blue-700 mb-4">Profil Perusahaan</h2>
        <p class="text-slate-600 leading-relaxed mb-6">
          PT Solusi Koneksi Anda berdedikasi menyediakan layanan konektivitas dan solusi teknologi
          yang inovatif, andal, dan berorientasi pada kebutuhan klien. Dengan tenaga profesional berpengalaman,
          kami siap mendampingi setiap langkah transformasi digital bisnis Anda.
        </p>
        <a href="<?php echo e(route('profil')); ?>"
           class="inline-block border border-blue-600 text-blue-600 text-sm font-medium px-4 py-2 rounded-md hover:bg-blue-50 transition">
          Lihat Selengkapnya &rarr;
        </a>
      </div>
      <div>
        <img src="<?php echo e(asset('images/profil-perusahaan.jpg')); ?>" alt="Profil PT Solusi Koneksi Anda"
             class="w-full h-64 md:h-80 object-cover rounded-2xl shadow-md">
      </div>
    </div>
  </section>

  
  <section class="bg-slate-50">
    <div class="max-w-7xl mx-auto px-6 py-20">
      <div class="flex items-start justify-between mb-10 flex-wrap gap-4">
        <div>
          <h2 class="font-serif text-3xl font-semibold text-slate-900">Layanan</h2>
          <p class="text-slate-500 mt-2">Solusi konektivitas dan teknologi untuk kebutuhan bisnis Anda.</p>
        </div>
        <a href="<?php echo e(route('produk.index')); ?>"
           class="border border-blue-600 text-blue-600 text-sm font-medium px-4 py-2 rounded-md hover:bg-blue-50 transition whitespace-nowrap">
          Lihat Selengkapnya &rarr;
        </a>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
        <?php $__empty_1 = true; $__currentLoopData = $daftarLayanan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $layanan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
          <a href="<?php echo e(route('produk.show', $layanan)); ?>"
             class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition duration-300 block">
            <div class="h-48 bg-slate-200 overflow-hidden">
              <?php if($layanan->gambar): ?>
                <img class="w-full h-full object-cover" src="<?php echo e(Storage::url($layanan->gambar)); ?>" alt="<?php echo e($layanan->nama); ?>">
              <?php endif; ?>
            </div>
            <div class="p-5">
              <h3 class="font-bold text-lg text-gray-800 mb-2"><?php echo e($layanan->nama); ?></h3>
              <?php if($layanan->deskripsi): ?>
                <p class="text-sm text-slate-500 mb-3 leading-relaxed"><?php echo e(Str::limit($layanan->deskripsi, 90)); ?></p>
              <?php endif; ?>
              <span class="text-sm font-medium text-blue-700">Selengkapnya &rarr;</span>
            </div>
          </a>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
          <p class="text-slate-400 text-sm col-span-4">Belum ada layanan.</p>
        <?php endif; ?>
      </div>
    </div>
  </section>

  
  <section class="bg-white">
    <div class="max-w-7xl mx-auto px-6 py-20">
      <div class="flex items-start justify-between mb-10 flex-wrap gap-4">
        <div>
          <h2 class="font-serif text-3xl font-semibold text-slate-900">Produk</h2>
          <p class="text-slate-500 mt-2">Paket dan penawaran siap pakai untuk kebutuhan operasional Anda.</p>
        </div>
        <a href="<?php echo e(route('produk.index')); ?>#produk"
           class="border border-blue-600 text-blue-600 text-sm font-medium px-4 py-2 rounded-md hover:bg-blue-50 transition whitespace-nowrap">
          Lihat Selengkapnya &rarr;
        </a>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <?php $__empty_1 = true; $__currentLoopData = $daftarProduk; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $produk): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
          <article class="bg-white rounded-2xl border border-slate-200 overflow-hidden">
            <div class="h-48 bg-slate-200 overflow-hidden">
              <?php if($produk->gambar): ?>
                <img class="w-full h-full object-cover" src="<?php echo e(Storage::url($produk->gambar)); ?>" alt="<?php echo e($produk->nama); ?>">
              <?php endif; ?>
            </div>
            <div class="p-6">
              <h3 class="text-lg font-bold text-slate-900 mb-2"><?php echo e($produk->nama); ?></h3>
              <p class="text-slate-500 text-sm leading-relaxed mb-3"><?php echo e(Str::limit($produk->deskripsi, 90)); ?></p>
              <?php if($produk->harga): ?>
                <span class="text-sm font-semibold text-slate-900">Rp <?php echo e(number_format($produk->harga, 0, ',', '.')); ?></span>
              <?php endif; ?>
            </div>
          </article>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
          <p class="text-slate-400 text-sm col-span-3">Belum ada produk.</p>
        <?php endif; ?>
      </div>
    </div>
  </section>

  
  <section class="max-w-7xl mx-auto px-6 py-20">
    <div class="flex items-start justify-between mb-10 flex-wrap gap-4">
      <div>
        <h2 class="font-serif text-3xl font-semibold text-slate-900 mb-2">Artikel / Informasi Terkini</h2>
        <p class="text-slate-500">Temukan berita terbaru, insight teknologi, dan informasi perusahaan.</p>
      </div>
      <a href="<?php echo e(route('artikel.index')); ?>"
         class="border border-blue-600 text-blue-600 text-sm font-medium px-4 py-2 rounded-md hover:bg-blue-50 transition whitespace-nowrap">
        Lihat Selengkapnya &rarr;
      </a>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
      <?php $__empty_1 = true; $__currentLoopData = $daftarArtikel; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $artikel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        <article class="bg-white rounded-2xl border border-slate-200 overflow-hidden">
          <div class="h-48 bg-slate-200 overflow-hidden relative">
            <?php if($artikel->gambar): ?>
              <img src="<?php echo e(Storage::url($artikel->gambar)); ?>" class="w-full h-full object-cover">
            <?php endif; ?>
            <?php if($artikel->kategori): ?>
              <span class="absolute top-3 left-3 text-xs font-medium text-white bg-blue-700 px-3 py-1 rounded-full"><?php echo e($artikel->kategori); ?></span>
            <?php endif; ?>
          </div>
          <div class="p-6">
            <p class="text-xs text-slate-400 mb-2"><?php echo e($artikel->created_at->translatedFormat('d M Y')); ?></p>
            <h3 class="text-lg font-bold text-slate-900 mb-2"><?php echo e($artikel->judul); ?></h3>
            <p class="text-slate-500 text-sm leading-relaxed mb-4"><?php echo e(Str::limit($artikel->ringkasan, 90)); ?></p>
            <a href="<?php echo e(route('artikel.show', $artikel)); ?>" class="text-sm font-medium text-blue-700 hover:text-blue-800">Baca Selengkapnya &rarr;</a>
          </div>
        </article>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        <p class="text-slate-400 text-sm">Belum ada artikel yang ditambahkan.</p>
      <?php endif; ?>
    </div>
  </section>

  
  <section class="max-w-7xl mx-auto px-6 pb-20">
    <div class="flex items-start justify-between mb-10 flex-wrap gap-4">
      <div>
        <h2 class="font-serif text-3xl font-semibold text-slate-900 mb-2">Galeri Kegiatan</h2>
        <p class="text-slate-500">Dokumentasi kegiatan, proyek, dan aktivitas perusahaan.</p>
      </div>
      <a href="<?php echo e(route('galeri.index')); ?>"
         class="border border-blue-600 text-blue-600 text-sm font-medium px-4 py-2 rounded-md hover:bg-blue-50 transition whitespace-nowrap">
        Lihat Selengkapnya &rarr;
      </a>
    </div>

    <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
      <?php $__empty_1 = true; $__currentLoopData = $daftarGaleri->take(4); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $galeri): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        <article class="bg-white rounded-xl border border-slate-200 overflow-hidden">
          <div class="h-36 md:h-44 bg-slate-200 overflow-hidden">
            <?php if($galeri->gambar): ?>
              <img src="<?php echo e(Storage::url($galeri->gambar)); ?>" alt="<?php echo e($galeri->judul ?: 'Foto kegiatan perusahaan'); ?>"
                   class="w-full h-full object-cover cursor-pointer hover:opacity-80 transition"
                   onclick="openLightbox('<?php echo e(Storage::url($galeri->gambar)); ?>', <?php echo \Illuminate\Support\Js::from($galeri->judul ?: 'Galeri Kegiatan')->toHtml() ?>)">
            <?php endif; ?>
          </div>
          <div class="p-3">
            <h3 class="font-semibold text-sm md:text-base text-slate-900">
              <?php echo e($galeri->judul ?: 'Galeri Kegiatan'); ?>

            </h3>
          </div>
        </article>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        <p class="text-slate-400 text-sm col-span-4">Belum ada galeri.</p>
      <?php endif; ?>
    </div>
  </section>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('customFooter'); ?>
  <footer class="bg-slate-800 text-white">
    <div class="max-w-7xl mx-auto px-6 py-16 grid grid-cols-1 md:grid-cols-2 gap-12">
      <div>
        <div class="flex items-start justify-between mb-6 flex-wrap gap-3">
          <h3 class="text-lg font-semibold">Kontak Kami</h3>
          <a href="<?php echo e(route('kontak')); ?>"
             class="border border-white/40 text-white text-xs font-medium px-3 py-1.5 rounded-md hover:bg-white/10 transition whitespace-nowrap">
            Lihat Selengkapnya &rarr;
          </a>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-x-10 gap-y-4 text-sm text-slate-300">
          <ul class="space-y-4">
            <li class="flex items-center gap-3 border-l-2 border-blue-500 pl-3">
              <i class="fa-brands fa-whatsapp text-base"></i>
              <span>+62 812 3456 7890</span>
            </li>
            <li class="flex items-center gap-3 border-l-2 border-blue-500 pl-3">
              <i class="fa-brands fa-instagram text-base"></i>
              <span>@solusikoneksianda</span>
            </li>
            <li class="flex items-start gap-3 border-l-2 border-blue-500 pl-3">
              <i class="fa-solid fa-location-dot text-base mt-1"></i>
              <span>Jl. Raya Pajajaran No. 88 F Kota Bogor 16153</span>
            </li>
          </ul>
          <ul class="space-y-4">
            <li class="flex items-center gap-3 border-l-2 border-blue-500 pl-3">
              <i class="fa-solid fa-envelope text-base"></i>
              <span>info@solusikoneksianda.co.id</span>
            </li>
            <li class="flex items-center gap-3 border-l-2 border-blue-500 pl-3">
              <i class="fa-brands fa-youtube text-base"></i>
              <span>@solusikoneksianda</span>
            </li>
          </ul>
        </div>
      </div>

      <div>
        <h3 class="text-lg font-semibold mb-6">Lokasi Kami</h3>
        <div class="relative rounded-lg overflow-hidden h-64 md:h-72">
          <iframe
            src="https://maps.google.com/maps?q=Jl.+Raya+Pajajaran+No.+88+F+Kota+Bogor+16153&output=embed"
            class="w-full h-full border-0"
            allowfullscreen
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade">
          </iframe>
        </div>
      </div>
    </div>

    <div class="border-t border-slate-700">
      <div class="max-w-7xl mx-auto px-6 py-5 text-center text-xs text-slate-400">
        Copyright &copy; 2025 - <?php echo e(date('Y')); ?> PT Solusi Koneksi Anda.
      </div>
    </div>
  </footer>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
  <?php echo $__env->make('partials.lightbox', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.public', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\Edukasi4Id\resources\views/home.blade.php ENDPATH**/ ?>