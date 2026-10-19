<?php $__env->startSection('title', 'Tambah Galeri'); ?>

<?php $__env->startSection('content'); ?>
<h1 class="text-2xl font-bold text-slate-900 mb-6">Tambah Galeri</h1>

<form action="<?php echo e(route('admin.galeri.store')); ?>" method="POST" enctype="multipart/form-data"
      class="bg-white rounded-xl border border-slate-200 p-6 max-w-xl space-y-5">
    <?php echo csrf_field(); ?>

    <div>
        <label class="block text-sm font-medium text-slate-700 mb-1">Foto</label>
        <input type="file" name="gambar" accept="image/*" class="text-sm">
        <?php $__errorArgs = ['gambar'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class="text-red-600 text-xs mt-1"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    </div>

    <div class="flex gap-3 pt-2">
        <button type="submit" class="bg-blue-600 text-white px-5 py-2 rounded-md text-sm font-medium hover:bg-blue-700">Simpan</button>
        <a href="<?php echo e(route('admin.galeri.index')); ?>" class="px-5 py-2 rounded-md text-sm text-slate-600 hover:bg-slate-100">Batal</a>
    </div>
</form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\Edukasi4Id\resources\views/admin/galeri/create.blade.php ENDPATH**/ ?>