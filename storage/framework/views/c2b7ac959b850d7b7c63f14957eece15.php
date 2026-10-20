<?php $__env->startSection('title', 'Dashboard'); ?>

<?php $__env->startSection('content'); ?>
<div class="mb-6">
    <h1 class="text-2xl font-bold text-slate-900">Dashboard</h1>
    <p class="text-sm text-slate-500 mt-1">
        Halo, <?php echo e(auth()->user()->name); ?>. Ringkasan konten website PT Solusi Koneksi Anda.
    </p>
</div>


<div class="grid grid-cols-2 lg:grid-cols-5 gap-4 mb-8">
    <a href="<?php echo e(route('admin.layanan.index')); ?>"
       class="bg-white rounded-xl border border-slate-200 px-5 py-4 hover:border-blue-300 transition">
        <p class="text-xs uppercase tracking-wider text-slate-400 mb-1">Layanan</p>
        <p class="text-3xl font-bold text-slate-900"><?php echo e($stats['layanan']); ?></p>
    </a>
    <a href="<?php echo e(route('admin.produk.index')); ?>"
       class="bg-white rounded-xl border border-slate-200 px-5 py-4 hover:border-blue-300 transition">
        <p class="text-xs uppercase tracking-wider text-slate-400 mb-1">Produk</p>
        <p class="text-3xl font-bold text-slate-900"><?php echo e($stats['produk']); ?></p>
    </a>
    <a href="<?php echo e(route('admin.artikel.index')); ?>"
       class="bg-white rounded-xl border border-slate-200 px-5 py-4 hover:border-blue-300 transition">
        <p class="text-xs uppercase tracking-wider text-slate-400 mb-1">Artikel</p>
        <p class="text-3xl font-bold text-slate-900"><?php echo e($stats['artikel']); ?></p>
    </a>
    <a href="<?php echo e(route('admin.galeri.index')); ?>"
       class="bg-white rounded-xl border border-slate-200 px-5 py-4 hover:border-blue-300 transition">
        <p class="text-xs uppercase tracking-wider text-slate-400 mb-1">Galeri</p>
        <p class="text-3xl font-bold text-slate-900"><?php echo e($stats['galeri']); ?></p>
    </a>
    <a href="<?php echo e(route('admin.pesan.index')); ?>"
       class="bg-white rounded-xl border border-slate-200 px-5 py-4 hover:border-blue-300 transition">
        <p class="text-xs uppercase tracking-wider text-slate-400 mb-1">Pesan</p>
        <p class="text-3xl font-bold text-slate-900"><?php echo e($stats['pesan']); ?></p>
        <?php if($stats['pesan_baru'] > 0): ?>
            <p class="text-xs text-blue-600 mt-1"><?php echo e($stats['pesan_baru']); ?> belum dibaca</p>
        <?php endif; ?>
    </a>
</div>

<div class="grid lg:grid-cols-3 gap-6 mb-8">
    
    <div class="bg-white rounded-xl border border-slate-200 p-5">
        <div class="flex items-center justify-between mb-3">
            <h2 class="text-sm font-semibold text-slate-900">Profil Perusahaan</h2>
            <a href="<?php echo e(route('admin.profil.edit')); ?>" class="text-xs text-blue-600 hover:underline">Edit</a>
        </div>
        <p class="font-medium text-slate-800 mb-2"><?php echo e($profil->judul); ?></p>
        <p class="text-sm text-slate-500 leading-relaxed"><?php echo e(Str::limit(strip_tags($profil->isi), 140)); ?></p>
        <?php if($profil->gambar): ?>
            <img src="<?php echo e(Storage::url($profil->gambar)); ?>" alt="Profil"
                 class="mt-4 w-full h-28 object-cover rounded-md">
        <?php endif; ?>
    </div>

    
    <div class="bg-white rounded-xl border border-slate-200 p-5 lg:col-span-2">
        <h2 class="text-sm font-semibold text-slate-900 mb-4">Akses Cepat</h2>
        <div class="grid sm:grid-cols-2 gap-3">
          
            <a href="<?php echo e(route('admin.produk.create')); ?>"
               class="px-4 py-3 rounded-md border border-slate-200 text-sm hover:bg-slate-50 transition">
                + Tambah Produk
            </a>
            <a href="<?php echo e(route('admin.artikel.create')); ?>"
               class="px-4 py-3 rounded-md border border-slate-200 text-sm hover:bg-slate-50 transition">
                + Tambah Artikel
            </a>
            <a href="<?php echo e(route('admin.galeri.create')); ?>"
               class="px-4 py-3 rounded-md border border-slate-200 text-sm hover:bg-slate-50 transition">
                + Tambah Foto Galeri
            </a>
            <a href="<?php echo e(url('/')); ?>" target="_blank"
               class="px-4 py-3 rounded-md bg-blue-600 text-white text-sm text-center hover:bg-blue-700 transition sm:col-span-2">
                Lihat Website
            </a>
        </div>
    </div>
</div>

<div class="grid lg:grid-cols-3 gap-6">
    
    <div class="bg-white rounded-xl border border-slate-200 overflow-hidden">
        <div class="flex items-center justify-between px-5 py-4 border-b border-slate-100">
            <h2 class="text-sm font-semibold text-slate-900">Artikel Terbaru</h2>
            <a href="<?php echo e(route('admin.artikel.index')); ?>" class="text-xs text-blue-600 hover:underline">Lihat semua</a>
        </div>
        <ul class="divide-y divide-slate-100">
            <?php $__empty_1 = true; $__currentLoopData = $artikelTerbaru; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $artikel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <li class="px-5 py-3 flex items-center gap-3">
                    <?php if($artikel->gambar): ?>
                        <img src="<?php echo e(Storage::url($artikel->gambar)); ?>" alt=""
                             class="w-10 h-10 object-cover rounded-md shrink-0">
                    <?php else: ?>
                        <div class="w-10 h-10 bg-slate-100 rounded-md shrink-0"></div>
                    <?php endif; ?>
                    <div class="min-w-0 flex-1">
                        <a href="<?php echo e(route('admin.artikel.edit', $artikel)); ?>"
                           class="text-sm font-medium text-slate-800 hover:text-blue-600 truncate block">
                            <?php echo e($artikel->judul); ?>

                        </a>
                        <p class="text-xs text-slate-400"><?php echo e($artikel->created_at?->format('d M Y')); ?></p>
                    </div>
                </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <li class="px-5 py-8 text-center text-sm text-slate-400">Belum ada artikel.</li>
            <?php endif; ?>
        </ul>
    </div>

    
    <div class="bg-white rounded-xl border border-slate-200 overflow-hidden">
        <div class="flex items-center justify-between px-5 py-4 border-b border-slate-100">
            <h2 class="text-sm font-semibold text-slate-900">Galeri Terbaru</h2>
            <a href="<?php echo e(route('admin.galeri.index')); ?>" class="text-xs text-blue-600 hover:underline">Lihat semua</a>
        </div>
        <?php if($galeriTerbaru->isNotEmpty()): ?>
            <div class="p-5 grid grid-cols-2 gap-3">
                <?php $__currentLoopData = $galeriTerbaru; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $foto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <a href="<?php echo e(route('admin.galeri.edit', $foto)); ?>" class="block group">
                        <?php if($foto->gambar): ?>
                            <img src="<?php echo e(Storage::url($foto->gambar)); ?>" alt="Galeri"
                                 class="w-full h-28 object-cover rounded-md group-hover:opacity-90 transition">
                        <?php else: ?>
                            <div class="w-full h-28 bg-slate-100 rounded-md"></div>
                        <?php endif; ?>
                    </a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        <?php else: ?>
            <p class="px-5 py-8 text-center text-sm text-slate-400">Belum ada foto galeri.</p>
        <?php endif; ?>
    </div>

    
    <div class="bg-white rounded-xl border border-slate-200 overflow-hidden">
        <div class="flex items-center justify-between px-5 py-4 border-b border-slate-100">
            <h2 class="text-sm font-semibold text-slate-900">Pesan Terbaru</h2>
            <a href="<?php echo e(route('admin.pesan.index')); ?>" class="text-xs text-blue-600 hover:underline">Lihat semua</a>
        </div>
        <ul class="divide-y divide-slate-100">
            <?php $__empty_1 = true; $__currentLoopData = $pesanTerbaru; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pesan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <li class="px-5 py-3">
                    <a href="<?php echo e(route('admin.pesan.show', $pesan)); ?>" class="block group">
                        <div class="flex items-center justify-between gap-2">
                            <p class="text-sm font-medium text-slate-800 group-hover:text-blue-600 truncate">
                                <?php echo e($pesan->nama); ?>

                            </p>
                            <?php if (! ($pesan->dibaca)): ?>
                                <span class="text-[10px] font-semibold text-blue-700 bg-blue-50 px-2 py-0.5 rounded-full shrink-0">Baru</span>
                            <?php endif; ?>
                        </div>
                        <p class="text-xs text-slate-400 mt-0.5 truncate"><?php echo e($pesan->subjek ?: Str::limit($pesan->pesan, 40)); ?></p>
                    </a>
                </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <li class="px-5 py-8 text-center text-sm text-slate-400">Belum ada pesan.</li>
            <?php endif; ?>
        </ul>
    </div>
</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\Edukasi4Id\resources\views/admin/dashboard.blade.php ENDPATH**/ ?>