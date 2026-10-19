<?php $__env->startSection('title', 'Artikel / Informasi Terkini'); ?>

<?php $__env->startSection('content'); ?>
  <main class="flex-1">
    <div class="max-w-7xl mx-auto px-6 py-16">
      <h1 class="font-serif text-3xl md:text-4xl font-semibold text-slate-900 mb-2">Artikel / Informasi Terkini</h1>
      <p class="text-slate-500 mb-10">Berita terbaru, insight teknologi, dan informasi perusahaan.</p>

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
              <p class="text-slate-500 text-sm leading-relaxed mb-4"><?php echo e(Str::limit($artikel->ringkasan, 100)); ?></p>
              <a href="<?php echo e(route('artikel.show', $artikel)); ?>" class="text-sm font-medium text-blue-700 hover:text-blue-800">Baca Selengkapnya &rarr;</a>
            </div>
          </article>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
          <p class="text-slate-400 text-sm col-span-3">Belum ada artikel.</p>
        <?php endif; ?>
      </div>

      <div class="mt-10"><?php echo e($daftarArtikel->links()); ?></div>
    </div>
  </main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.public', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\Edukasi4Id\resources\views/artikel-public.blade.php ENDPATH**/ ?>