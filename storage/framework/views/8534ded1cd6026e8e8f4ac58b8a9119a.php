
<div x-show="open"
     x-cloak
     class="fixed inset-0 z-50 flex items-center justify-center p-4"
     style="display: none;">
    <div class="absolute inset-0 bg-slate-900/50" @click="open = false"></div>

    <div class="relative bg-white rounded-xl border border-slate-200 shadow-lg w-full max-w-md p-6"
         @click.stop>
        <h2 class="text-lg font-semibold text-slate-900 mb-2"><?php echo e($title); ?></h2>
        <p class="text-sm text-slate-600 mb-6">
            Yakin mau hapus <?php echo e($entity); ?>

            <template x-if="nama">
                <span class="font-semibold text-slate-900" x-text="nama"></span>
            </template>
            <template x-if="!nama">
                <span>ini</span>
            </template>?
            Tindakan ini tidak bisa dibatalkan.
        </p>
        <div class="flex justify-end gap-3">
            <button type="button"
                    @click="open = false"
                    class="px-4 py-2 rounded-md text-sm text-slate-600 hover:bg-slate-100 transition">
                Batal
            </button>
            <form method="POST" :action="action">
                <?php echo csrf_field(); ?>
                <?php echo method_field('DELETE'); ?>
                <button type="submit"
                        class="px-4 py-2 rounded-md text-sm font-medium bg-red-600 text-white hover:bg-red-700 transition">
                    Hapus
                </button>
            </form>
        </div>
    </div>
</div>

<style>[x-cloak]{display:none!important}</style>
<?php /**PATH C:\xampp\htdocs\Edukasi4Id\resources\views/admin/partials/confirm-delete-modal.blade.php ENDPATH**/ ?>