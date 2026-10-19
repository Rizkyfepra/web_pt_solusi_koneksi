<?php $__env->startSection('title', 'Pesan Kontak'); ?>

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
        <div>
            <h1 class="text-2xl font-bold text-slate-900">Pesan Kontak</h1>
            <p class="text-sm text-slate-500 mt-1">Pesan yang dikirim pengunjung lewat halaman kontak.</p>
        </div>
    </div>

    <div class="bg-white rounded-xl border border-slate-200 overflow-hidden">
        <table class="w-full text-sm">
            <thead class="bg-slate-50 text-left text-slate-500">
                <tr>
                    <th class="px-6 py-3 font-medium">Status</th>
                    <th class="px-6 py-3 font-medium">Nama</th>
                    <th class="px-6 py-3 font-medium">Email</th>
                    <th class="px-6 py-3 font-medium">Subjek</th>
                    <th class="px-6 py-3 font-medium">Tanggal</th>
                    <th class="px-6 py-3 font-medium">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-100">
                <?php $__empty_1 = true; $__currentLoopData = $daftarPesan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pesan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <tr class="<?php echo e($pesan->dibaca ? '' : 'bg-blue-50/40'); ?>">
                        <td class="px-6 py-4">
                            <?php if($pesan->dibaca): ?>
                                <span class="text-xs text-slate-500">Dibaca</span>
                            <?php else: ?>
                                <span class="text-xs font-medium text-blue-700 bg-blue-50 px-2.5 py-1 rounded-full">Baru</span>
                            <?php endif; ?>
                        </td>
                        <td class="px-6 py-4 font-semibold text-slate-900"><?php echo e($pesan->nama); ?></td>
                        <td class="px-6 py-4 text-slate-600"><?php echo e($pesan->email); ?></td>
                        <td class="px-6 py-4 text-slate-500"><?php echo e($pesan->subjek ?: '—'); ?></td>
                        <td class="px-6 py-4 text-slate-500 whitespace-nowrap"><?php echo e($pesan->created_at?->format('d M Y H:i')); ?></td>
                        <td class="px-6 py-4">
                            <a href="<?php echo e(route('admin.pesan.show', $pesan)); ?>" class="text-blue-600 hover:underline mr-3">Lihat</a>
                            <button type="button"
                                    class="text-red-600 hover:underline"
                                    @click="confirmDelete(<?php echo \Illuminate\Support\Js::from($pesan->nama)->toHtml() ?>, <?php echo \Illuminate\Support\Js::from(route('admin.pesan.destroy', $pesan))->toHtml() ?>)">
                                Hapus
                            </button>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <tr>
                        <td colspan="6" class="px-6 py-8 text-center text-slate-400">Belum ada pesan masuk.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>

    <?php echo $__env->make('admin.partials.confirm-delete-modal', ['title' => 'Hapus Pesan', 'entity' => 'pesan dari'], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\Edukasi4Id\resources\views/admin/pesan/index.blade.php ENDPATH**/ ?>