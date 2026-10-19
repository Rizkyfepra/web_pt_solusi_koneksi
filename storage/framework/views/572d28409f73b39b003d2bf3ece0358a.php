<?php $__env->startSection('title', $profil->judul); ?>

<?php $__env->startSection('content'); ?>
  <main class="flex-1">
    <section class="max-w-7xl mx-auto px-6 py-16 md:py-20 grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
      <div>
        <h1 class="font-serif text-3xl md:text-4xl font-semibold text-slate-900 mb-4"><?php echo e($profil->judul); ?></h1>
        <p class="text-slate-600 leading-relaxed whitespace-pre-line"><?php echo e($profil->isi); ?></p>
      </div>
      <div>
        <img src="<?php echo e($profil->gambar ? Storage::url($profil->gambar) : asset('images/profil-perusahaan.jpg')); ?>"
             alt="<?php echo e($profil->judul); ?>"
             class="w-full h-64 md:h-80 object-cover rounded-2xl shadow-md">
      </div>
    </section>
  </main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.public', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\Edukasi4Id\resources\views/profil.blade.php ENDPATH**/ ?>