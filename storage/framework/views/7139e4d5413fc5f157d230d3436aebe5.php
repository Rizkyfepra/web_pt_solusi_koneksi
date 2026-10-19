<?php $__env->startSection('title', 'Edit Profil'); ?>

<?php $__env->startSection('content'); ?>
<h1 class="text-2xl font-bold text-slate-900 mb-2">Edit Profil Perusahaan</h1>
<p class="text-sm text-slate-500 mb-6">Profil hanya dapat diperbarui (tanpa tambah atau hapus).</p>

<form action="<?php echo e(route('admin.profil.update')); ?>" method="POST" enctype="multipart/form-data"
      class="bg-white rounded-xl border border-slate-200 p-6 max-w-xl space-y-5">
    <?php echo csrf_field(); ?>
    <?php echo method_field('PUT'); ?>

    <div>
        <label class="block text-sm font-medium text-slate-700 mb-1">Judul</label>
        <input type="text" name="judul" value="<?php echo e(old('judul', $profil->judul)); ?>"
               class="w-full border border-slate-300 rounded-md px-3 py-2 text-sm" required>
        <?php $__errorArgs = ['judul'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class="text-red-600 text-xs mt-1"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    </div>

    <div>
        <label class="block text-sm font-medium text-slate-700 mb-1">Isi Profil</label>
        <textarea name="isi" rows="10"
                  class="w-full border border-slate-300 rounded-md px-3 py-2 text-sm" required><?php echo e(old('isi', $profil->isi)); ?></textarea>
        <?php $__errorArgs = ['isi'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class="text-red-600 text-xs mt-1"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    </div>

    <div>
        <label class="block text-sm font-medium text-slate-700 mb-1">Gambar</label>
        <img src="<?php echo e($profil->gambar ? Storage::url($profil->gambar) : asset('images/profil-perusahaan.jpg')); ?>"
             class="w-24 h-24 object-cover rounded-md mb-2" alt="Gambar profil">
        <input type="file" name="gambar" accept="image/*" class="text-sm">
        <p class="text-xs text-slate-400 mt-1">Kosongkan kalau tidak mau ganti gambar.</p>
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
        <button type="submit" class="bg-blue-600 text-white px-5 py-2 rounded-md text-sm font-medium hover:bg-blue-700">
            Simpan Perubahan
        </button>
        <a href="<?php echo e(route('profil')); ?>" target="_blank"
           class="px-5 py-2 rounded-md text-sm text-slate-600 hover:bg-slate-100">Lihat Halaman</a>
    </div>
</form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\Edukasi4Id\resources\views/admin/profil/edit.blade.php ENDPATH**/ ?>