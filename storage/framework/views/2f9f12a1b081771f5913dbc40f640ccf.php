<?php $__env->startSection('title', 'Kelola Artikel'); ?>

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
        <h1 class="text-2xl font-bold text-slate-900">Kelola Artikel</h1>
        <a href="<?php echo e(route('admin.artikel.create')); ?>"
           class="bg-blue-600 text-white px-4 py-2 rounded-md text-sm font-medium hover:bg-blue-700 transition">
            + Tambah Artikel
        </a>
    </div>

    <div class="bg-white rounded-xl border border-slate-200 overflow-hidden">
        <table class="w-full text-sm">
            <thead class="bg-slate-50 text-left text-slate-500">
                <tr>
                    <th class="px-6 py-3 font-medium">Gambar</th>
                    <th class="px-6 py-3 font-medium">Judul</th>
                    <th class="px-6 py-3 font-medium">Kategori</th>
                    <th class="px-6 py-3 font-medium">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-100">
                <?php $__empty_1 = true; $__currentLoopData = $daftarArtikel; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $artikel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <tr>
                        <td class="px-6 py-4">
                            <?php if($artikel->gambar): ?>
                                <img src="<?php echo e(Storage::url($artikel->gambar)); ?>" class="w-16 h-16 object-cover rounded-md">
                            <?php else: ?>
                                <div class="w-16 h-16 bg-slate-100 rounded-md"></div>
                            <?php endif; ?>
                        </td>
                        <td class="px-6 py-4 font-semibold text-slate-900"><?php echo e($artikel->judul); ?></td>
                        <td class="px-6 py-4">
                            <?php if($artikel->kategori): ?>
                                <span class="text-xs font-medium text-blue-700 bg-blue-50 px-3 py-1 rounded-full"><?php echo e($artikel->kategori); ?></span>
                            <?php endif; ?>
                        </td>
                        <td class="px-6 py-4">
                            <a href="<?php echo e(route('admin.artikel.edit', $artikel)); ?>" class="text-blue-600 hover:underline mr-3">Edit</a>
                            <button type="button"
                                    class="text-red-600 hover:underline"
                                    @click="confirmDelete(<?php echo \Illuminate\Support\Js::from($artikel->judul)->toHtml() ?>, <?php echo \Illuminate\Support\Js::from(route('admin.artikel.destroy', $artikel))->toHtml() ?>)">
                                Hapus
                            </button>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <tr><td colspan="4" class="px-6 py-8 text-center text-slate-400">Belum ada artikel.</td></tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>

    <?php echo $__env->make('admin.partials.confirm-delete-modal', ['title' => 'Hapus Artikel', 'entity' => 'artikel'], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\Edukasi4Id\resources\views/admin/artikel/index.blade.php ENDPATH**/ ?>