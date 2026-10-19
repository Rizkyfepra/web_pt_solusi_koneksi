<?php $__env->startSection('title', $artikel->judul); ?>

<?php $__env->startSection('content'); ?>
  <main class="flex-1">
    <div class="max-w-3xl mx-auto px-6 py-16">
      <a href="<?php echo e(route('artikel.index')); ?>" class="text-sm text-slate-500 hover:text-slate-900">&larr; Kembali ke Artikel</a>

      <?php if($artikel->kategori): ?>
        <span class="inline-block mt-6 text-xs font-medium text-blue-700 bg-blue-50 px-3 py-1 rounded-full"><?php echo e($artikel->kategori); ?></span>
      <?php endif; ?>

      <h1 class="font-serif text-3xl font-bold text-slate-900 mt-4 mb-2"><?php echo e($artikel->judul); ?></h1>
      <p class="text-sm text-slate-400 mb-8"><?php echo e($artikel->created_at->translatedFormat('d M Y')); ?></p>

      <?php if($artikel->gambar): ?>
        <img src="<?php echo e(Storage::url($artikel->gambar)); ?>" class="w-full h-80 object-cover rounded-2xl mb-8">
      <?php endif; ?>

      <div class="max-w-none text-slate-700 leading-relaxed whitespace-pre-line">
        <?php echo e($artikel->isi); ?>

      </div>
    </div>
  </main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.public', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\Edukasi4Id\resources\views/artikel-show.blade.php ENDPATH**/ ?>