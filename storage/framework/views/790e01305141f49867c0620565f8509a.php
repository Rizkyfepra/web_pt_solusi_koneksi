<?php $__env->startSection('title', 'Kelola Galeri'); ?>

<?php $__env->startSection('content'); ?>
<div x-data="{
    open: false,
    nama: '',
    action: '',
    confirmDelete(nama, action) {
        this.nama = nama;
        this.action = action;
        this.open = true;
    }
}">
    <div class="flex items-center justify-between mb-6">
        <h1 class="text-2xl font-bold text-slate-900">Kelola Galeri</h1>
        <a href="<?php echo e(route('admin.galeri.create')); ?>"
           class="bg-blue-600 text-white px-4 py-2 rounded-md text-sm font-medium hover:bg-blue-700 transition">
            + Tambah Foto
        </a>
    </div>

    <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-4">
        <?php $__empty_1 = true; $__currentLoopData = $daftarGaleri; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $galeri): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <div class="bg-white rounded-xl border border-slate-200 overflow-hidden">
                <div class="h-32 bg-slate-100">
                    <?php if($galeri->gambar): ?>
                        <img src="<?php echo e(Storage::url($galeri->gambar)); ?>" class="w-full h-full object-cover">
                    <?php endif; ?>
                </div>
                <div class="p-2 flex justify-between text-xs">
                    <a href="<?php echo e(route('admin.galeri.edit', $galeri)); ?>" class="text-blue-600 hover:underline">Edit</a>
                    <button type="button"
                            class="text-red-600 hover:underline"
                            @click="confirmDelete('', <?php echo \Illuminate\Support\Js::from(route('admin.galeri.destroy', $galeri))->toHtml() ?>)">
                        Hapus
                    </button>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <p class="text-slate-400 text-sm col-span-full">Belum ada foto.</p>
        <?php endif; ?>
    </div>

    <?php echo $__env->make('admin.partials.confirm-delete-modal', ['title' => 'Hapus Foto', 'entity' => 'foto'], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\Edukasi4Id\resources\views/admin/galeri/index.blade.php ENDPATH**/ ?>