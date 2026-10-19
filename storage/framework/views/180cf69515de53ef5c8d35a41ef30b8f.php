<?php $__env->startSection('title', 'Edit Galeri'); ?>

<?php $__env->startSection('content'); ?>
    <div class="mb-6">
        <h1 class="text-2xl font-bold text-slate-900">
            Edit Galeri Kegiatan
        </h1>
        <p class="mt-1 text-sm text-slate-500">
            Perbarui judul atau foto kegiatan.
        </p>
    </div>

    <form
        action="<?php echo e(route('admin.galeri.update', $galeri)); ?>"
        method="POST"
        enctype="multipart/form-data"
        class="max-w-xl space-y-5 rounded-xl border border-slate-200 bg-white p-6"
    >
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>

        <div>
            <label
                for="judul"
                class="mb-1 block text-sm font-medium text-slate-700"
            >
                Judul Kegiatan
            </label>

            <input
                type="text"
                id="judul"
                name="judul"
                value="<?php echo e(old('judul', $galeri->judul)); ?>"
                required
                maxlength="255"
                class="w-full rounded-md border border-slate-300 px-3 py-2 text-sm focus:border-blue-500 focus:outline-none focus:ring-1 focus:ring-blue-500"
            >

            <?php $__errorArgs = ['judul'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <p class="mt-1 text-xs text-red-600"><?php echo e($message); ?></p>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        <div>
            <label
                for="gambar"
                class="mb-2 block text-sm font-medium text-slate-700"
            >
                Foto Kegiatan
            </label>

            <?php if($galeri->gambar): ?>
                <div class="mb-3">
                    <p class="mb-2 text-xs text-slate-500">
                        Foto saat ini:
                    </p>

                    <img
                        src="<?php echo e(Storage::url($galeri->gambar)); ?>"
                        alt="<?php echo e($galeri->judul); ?>"
                        class="h-36 w-36 rounded-lg border border-slate-200 object-cover"
                    >
                </div>
            <?php endif; ?>

            <input
                type="file"
                id="gambar"
                name="gambar"
                accept="image/jpeg,image/png,image/webp"
                class="block w-full rounded-md border border-slate-300 p-2 text-sm"
            >

            <?php $__errorArgs = ['gambar'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <p class="mt-1 text-xs text-red-600"><?php echo e($message); ?></p>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

            <p class="mt-1 text-xs text-slate-400">
                JPG, PNG, atau WebP. Maksimal 9 MB.
                Kosongkan jika tidak ingin mengganti foto.
            </p>
        </div>

        <div class="flex gap-3 border-t border-slate-100 pt-4">
            <button
                type="submit"
                class="rounded-md bg-blue-600 px-5 py-2.5 text-sm font-medium text-white hover:bg-blue-700"
            >
                Simpan Perubahan
            </button>

            <a
                href="<?php echo e(route('admin.galeri.index')); ?>"
                class="rounded-md px-5 py-2.5 text-sm text-slate-600 hover:bg-slate-100"
            >
                Batal
            </a>
        </div>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\Edukasi4Id\resources\views/admin/galeri/edit.blade.php ENDPATH**/ ?>