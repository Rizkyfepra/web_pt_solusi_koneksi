<?php $__env->startSection('title', 'Produk / Layanan'); ?>

<?php $__env->startSection('content'); ?>
  <main class="flex-1">
    <div class="max-w-7xl mx-auto px-6 py-16">
      <h1 class="font-serif text-3xl md:text-4xl font-semibold text-slate-900 mb-2">Layanan & Produk</h1>
      <p class="text-slate-500 mb-10">Solusi konektivitas dan teknologi untuk kebutuhan bisnis Anda.</p>

      <section id="layanan" class="mb-16">
        <h2 class="text-xl font-semibold text-slate-900 mb-6">Layanan</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
          <?php $__empty_1 = true; $__currentLoopData = $daftarLayanan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $layanan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <a href="<?php echo e(route('produk.show', $layanan)); ?>"
               class="bg-white rounded-xl border border-slate-200 overflow-hidden hover:shadow-lg transition duration-300 block">
              <div class="h-40 bg-slate-200 overflow-hidden">
                <?php if($layanan->gambar): ?>
                  <img class="w-full h-full object-cover" src="<?php echo e(Storage::url($layanan->gambar)); ?>" alt="<?php echo e($layanan->nama); ?>">
                <?php endif; ?>
              </div>
              <div class="p-5">
                <h3 class="font-bold text-lg text-gray-800 mb-2"><?php echo e($layanan->nama); ?></h3>
                <?php if($layanan->deskripsi): ?>
                  <p class="text-slate-500 text-sm leading-relaxed mb-3"><?php echo e(Str::limit($layanan->deskripsi, 90)); ?></p>
                <?php endif; ?>
                <span class="text-sm font-medium text-blue-700">Selengkapnya &rarr;</span>
              </div>
            </a>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <p class="text-slate-400 text-sm col-span-4">Belum ada layanan yang ditambahkan.</p>
          <?php endif; ?>
        </div>
      </section>

      <section id="produk">
        <h2 class="text-xl font-semibold text-slate-900 mb-6">Produk</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
          <?php $__empty_1 = true; $__currentLoopData = $daftarProduk; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $produk): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <article class="bg-white rounded-2xl border border-slate-200 overflow-hidden">
              <div class="h-56 bg-slate-200 overflow-hidden">
                <?php if($produk->gambar): ?>
                  <img src="<?php echo e(Storage::url($produk->gambar)); ?>" alt="<?php echo e($produk->nama); ?>" class="w-full h-full object-cover">
                <?php endif; ?>
              </div>
              <div class="p-6">
                <h3 class="text-xl font-bold text-slate-900 mb-2"><?php echo e($produk->nama); ?></h3>
                <p class="text-slate-500 text-sm leading-relaxed mb-3"><?php echo e(Str::limit($produk->deskripsi, 100)); ?></p>
                <?php if($produk->harga): ?>
                  <span class="text-sm font-semibold text-slate-900">Rp <?php echo e(number_format($produk->harga, 0, ',', '.')); ?></span>
                <?php endif; ?>
              </div>
            </article>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <p class="text-slate-400 text-sm col-span-3">Belum ada produk yang ditambahkan. Kelola melalui halaman admin.</p>
          <?php endif; ?>
        </div>

        <div class="mt-10">
          <?php echo e($daftarProduk->links()); ?>

        </div>
      </section>
    </div>
  </main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.public', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\Edukasi4Id\resources\views/produk-public.blade.php ENDPATH**/ ?>