<?php $__env->startSection('title', 'Galeri Kegiatan'); ?>
<?php $__env->startSection('bodyClass', 'flex flex-col min-h-screen bg-slate-50'); ?>

<?php $__env->startSection('content'); ?>
  <main class="flex-1">
    <section class="max-w-7xl mx-auto px-6 py-16">
      <div class="mb-10">
        <h1 class="font-serif text-3xl md:text-4xl font-semibold text-slate-900">Galeri Kegiatan</h1>
        <p class="text-slate-500 mt-2">Dokumentasi kegiatan, proyek, dan aktivitas PT Solusi Koneksi Anda.</p>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <?php $__empty_1 = true; $__currentLoopData = $daftarGaleri; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $galeri): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
          <article class="bg-white rounded-2xl border border-slate-200 overflow-hidden shadow-sm">
            <div class="h-56 bg-slate-200 overflow-hidden">
              <?php if($galeri->gambar): ?>
                <img
                  src="<?php echo e(Storage::url($galeri->gambar)); ?>"
                  alt="<?php echo e($galeri->judul ?: 'Foto kegiatan perusahaan'); ?>"
                  class="w-full h-full object-cover cursor-pointer hover:opacity-80 transition"
                  onclick="openLightbox('<?php echo e(Storage::url($galeri->gambar)); ?>', <?php echo \Illuminate\Support\Js::from($galeri->judul ?: 'Galeri Kegiatan')->toHtml() ?>)"
                >
              <?php endif; ?>
            </div>
            <div class="p-4">
              <h2 class="text-base md:text-lg font-semibold text-slate-900">
                <?php echo e($galeri->judul ?: 'Galeri Kegiatan'); ?>

              </h2>
            </div>
          </article>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
          <p class="text-slate-400 text-sm col-span-3">Belum ada galeri yang ditambahkan.</p>
        <?php endif; ?>
      </div>

      <div class="mt-10">
        <?php echo e($daftarGaleri->links()); ?>

      </div>
    </section>
  </main>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
  <?php echo $__env->make('partials.lightbox', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.public', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\Edukasi4Id\resources\views/galeri-public.blade.php ENDPATH**/ ?>