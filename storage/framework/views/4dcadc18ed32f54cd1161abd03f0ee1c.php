<?php $__env->startSection('title', 'Kelola Produk'); ?>

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
        <h1 class="text-2xl font-bold text-slate-900">Kelola Produk</h1>
        <a href="<?php echo e(route('admin.produk.create')); ?>"
           class="bg-blue-600 text-white px-4 py-2 rounded-md text-sm font-medium hover:bg-blue-700 transition">
            + Tambah Produk
        </a>
    </div>

    <div class="bg-white rounded-xl border border-slate-200 overflow-hidden">
        <table class="w-full text-sm">
            <thead class="bg-slate-50 text-left text-slate-500">
                <tr>
                    <th class="px-6 py-3 font-medium">Gambar</th>
                    <th class="px-6 py-3 font-medium">Nama</th>
                    <th class="px-6 py-3 font-medium">Harga</th>
                    <th class="px-6 py-3 font-medium">Deskripsi</th>
                    <th class="px-6 py-3 font-medium">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-100">
                <?php $__empty_1 = true; $__currentLoopData = $daftarProduk; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $produk): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <tr>
                        <td class="px-6 py-4">
                            <?php if($produk->gambar): ?>
                                <img src="<?php echo e(Storage::url($produk->gambar)); ?>" class="w-16 h-16 object-cover rounded-md">
                            <?php else: ?>
                                <div class="w-16 h-16 bg-slate-100 rounded-md"></div>
                            <?php endif; ?>
                        </td>
                        <td class="px-6 py-4 font-semibold text-slate-900"><?php echo e($produk->nama); ?></td>
                        <td class="px-6 py-4 text-slate-700">
                            <?php if($produk->harga): ?>
                                Rp <?php echo e(number_format($produk->harga, 0, ',', '.')); ?>

                            <?php endif; ?>
                        </td>
                        <td class="px-6 py-4 text-slate-500"><?php echo e(Str::limit($produk->deskripsi, 60)); ?></td>
                        <td class="px-6 py-4">
                            <a href="<?php echo e(route('admin.produk.edit', $produk)); ?>" class="text-blue-600 hover:underline mr-3">Edit</a>
                            <button type="button"
                                    class="text-red-600 hover:underline"
                                    @click="confirmDelete(<?php echo \Illuminate\Support\Js::from($produk->nama)->toHtml() ?>, <?php echo \Illuminate\Support\Js::from(route('admin.produk.destroy', $produk))->toHtml() ?>)">
                                Hapus
                            </button>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <tr><td colspan="5" class="px-6 py-8 text-center text-slate-400">Belum ada produk.</td></tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>

    <?php echo $__env->make('admin.partials.confirm-delete-modal', ['title' => 'Hapus Produk', 'entity' => 'produk'], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\Edukasi4Id\resources\views/admin/produk/index.blade.php ENDPATH**/ ?>