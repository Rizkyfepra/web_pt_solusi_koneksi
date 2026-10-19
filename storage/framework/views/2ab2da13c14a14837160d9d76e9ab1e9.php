<?php $__env->startSection('title', 'Detail Pesan'); ?>

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
    <div class="mb-6">
        <a href="<?php echo e(route('admin.pesan.index')); ?>" class="text-sm text-slate-500 hover:text-slate-800">&larr; Kembali ke daftar pesan</a>
        <h1 class="text-2xl font-bold text-slate-900 mt-3">Detail Pesan</h1>
    </div>

    <div class="bg-white rounded-xl border border-slate-200 p-6 max-w-2xl space-y-5">
        <div class="grid sm:grid-cols-2 gap-4 text-sm">
            <div>
                <p class="text-xs uppercase tracking-wider text-slate-400 mb-1">Nama</p>
                <p class="font-semibold text-slate-900"><?php echo e($pesan->nama); ?></p>
            </div>
            <div>
                <p class="text-xs uppercase tracking-wider text-slate-400 mb-1">Email</p>
                <a href="mailto:<?php echo e($pesan->email); ?>" class="text-blue-600 hover:underline"><?php echo e($pesan->email); ?></a>
            </div>
            <div>
                <p class="text-xs uppercase tracking-wider text-slate-400 mb-1">Subjek</p>
                <p class="text-slate-800"><?php echo e($pesan->subjek ?: '—'); ?></p>
            </div>
            <div>
                <p class="text-xs uppercase tracking-wider text-slate-400 mb-1">Tanggal</p>
                <p class="text-slate-800"><?php echo e($pesan->created_at?->format('d M Y H:i')); ?></p>
            </div>
        </div>

        <div>
            <p class="text-xs uppercase tracking-wider text-slate-400 mb-2">Pesan</p>
            <div class="rounded-lg bg-slate-50 border border-slate-100 px-4 py-3 text-sm text-slate-700 leading-relaxed whitespace-pre-line">
                <?php echo e($pesan->pesan); ?>

            </div>
        </div>

        <div class="pt-2">
            <button type="button"
                    class="px-4 py-2 rounded-md text-sm text-red-600 hover:bg-red-50 transition"
                    @click="confirmDelete(<?php echo \Illuminate\Support\Js::from($pesan->nama)->toHtml() ?>, <?php echo \Illuminate\Support\Js::from(route('admin.pesan.destroy', $pesan))->toHtml() ?>)">
                Hapus
            </button>
        </div>
    </div>

    <?php echo $__env->make('admin.partials.confirm-delete-modal', ['title' => 'Hapus Pesan', 'entity' => 'pesan dari'], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\Edukasi4Id\resources\views/admin/pesan/show.blade.php ENDPATH**/ ?>