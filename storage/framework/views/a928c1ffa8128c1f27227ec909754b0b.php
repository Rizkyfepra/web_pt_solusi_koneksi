<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $__env->yieldContent('title', 'Dashboard'); ?> - Admin PT Solusi Koneksi Anda</title>
  <?php echo $__env->make('partials.tailwind-cdn', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
</head>
<body class="font-sans bg-slate-100 text-slate-800" x-data="{ sidebarOpen: false }">

  <div class="min-h-screen flex">

    
    <aside
      class="fixed inset-y-0 left-0 z-30 w-64 bg-slate-900 text-slate-300 flex flex-col transition-transform -translate-x-full md:translate-x-0"
      :class="sidebarOpen && '!translate-x-0'">

      
      <div class="h-16 flex items-center gap-3 px-5 border-b border-slate-800">
        <img src="<?php echo e(asset('images/logo-ska.png')); ?>" alt="Logo PT Solusi Koneksi Anda" class="h-12 w-auto">
        <span class="text-white font-semibold text-sm leading-tight">PT Solusi Koneksi Anda<br><span class="text-slate-400 font-normal text-xs">Admin Panel</span></span>
      </div>

      
      <nav class="flex-1 overflow-y-auto py-4 px-3 space-y-1">
        <p class="px-3 text-[11px] uppercase tracking-wider text-slate-500 mb-2">Menu Utama</p>

        <a href="<?php echo e(route('admin.dashboard')); ?>"
           class="block px-3 py-2.5 rounded-md text-sm transition
                  <?php echo e(request()->routeIs('admin.dashboard') ? 'bg-blue-600 text-white' : 'hover:bg-slate-800 hover:text-white'); ?>">
          Dashboard
        </a>

        <a href="<?php echo e(route('admin.profil.edit')); ?>"
           class="block px-3 py-2.5 rounded-md text-sm transition
                  <?php echo e(request()->routeIs('admin.profil.*') ? 'bg-blue-600 text-white' : 'hover:bg-slate-800 hover:text-white'); ?>">
          Profil
        </a>

        <a href="<?php echo e(route('admin.galeri.index')); ?>"
           class="block px-3 py-2.5 rounded-md text-sm transition
                  <?php echo e(request()->routeIs('admin.galeri.*') ? 'bg-blue-600 text-white' : 'hover:bg-slate-800 hover:text-white'); ?>">
          Galeri Kegiatan
        </a>

        <a href="<?php echo e(route('admin.layanan.index')); ?>"
           class="block px-3 py-2.5 rounded-md text-sm transition
                  <?php echo e(request()->routeIs('admin.layanan.*') ? 'bg-blue-600 text-white' : 'hover:bg-slate-800 hover:text-white'); ?>">
          Layanan
        </a>

        <a href="<?php echo e(route('admin.produk.index')); ?>"
           class="block px-3 py-2.5 rounded-md text-sm transition
                  <?php echo e(request()->routeIs('admin.produk.*') ? 'bg-blue-600 text-white' : 'hover:bg-slate-800 hover:text-white'); ?>">
          Produk
        </a>

        <a href="<?php echo e(route('admin.artikel.index')); ?>"
           class="block px-3 py-2.5 rounded-md text-sm transition
                  <?php echo e(request()->routeIs('admin.artikel.*') ? 'bg-blue-600 text-white' : 'hover:bg-slate-800 hover:text-white'); ?>">
          Artikel
        </a>

        <a href="<?php echo e(route('admin.pesan.index')); ?>"
           class="block px-3 py-2.5 rounded-md text-sm transition
                  <?php echo e(request()->routeIs('admin.pesan.*') ? 'bg-blue-600 text-white' : 'hover:bg-slate-800 hover:text-white'); ?>">
          Pesan Kontak
          <?php $pesanBaru = \App\Models\PesanKontak::belumDibaca()->count(); ?>
          <?php if($pesanBaru > 0): ?>
            <span class="ml-1 inline-flex items-center justify-center min-w-[1.25rem] h-5 px-1.5 rounded-full bg-red-500 text-white text-[10px] font-semibold">
              <?php echo e($pesanBaru); ?>

            </span>
          <?php endif; ?>
        </a>

        <a href="<?php echo e(url('/')); ?>" target="_blank"
           class="block px-3 py-2.5 rounded-md text-sm hover:bg-slate-800 hover:text-white transition">
          Lihat Website
        </a>
      </nav>

      
      <div class="border-t border-slate-800 px-5 py-4 text-xs text-slate-500">
        &copy; <?php echo e(date('Y')); ?> PT Solusi Koneksi Anda
      </div>
    </aside>

    
    <div x-show="sidebarOpen" @click="sidebarOpen = false"
         class="fixed inset-0 bg-black/40 z-20 md:hidden" style="display:none"></div>

    
    <div class="flex-1 md:ml-64 min-h-screen flex flex-col">

      
      <header class="h-16 bg-white border-b border-slate-200 flex items-center justify-between px-6 sticky top-0 z-10">
        <div class="flex items-center gap-4">
          <button @click="sidebarOpen = !sidebarOpen" class="md:hidden text-slate-500 font-bold text-lg">
            Menu
          </button>
          <h1 class="text-lg font-semibold text-slate-800"><?php echo $__env->yieldContent('title', 'Dashboard'); ?></h1>
        </div>
        <div class="flex items-center gap-3 text-sm text-slate-500">
          <span><?php echo e(auth()->user()->name); ?></span>
          <form method="POST" action="<?php echo e(route('logout')); ?>">
            <?php echo csrf_field(); ?>
            <button type="submit" class="text-red-600 hover:text-red-700 font-medium transition">
              Keluar
            </button>
          </form>
        </div>
      </header>

      
      <div class="px-6 py-3 text-xs text-slate-500 border-b border-slate-200 bg-white">
        <a href="<?php echo e(route('admin.dashboard')); ?>" class="hover:text-slate-700">Admin</a>
        <span class="mx-1">/</span>
        <span class="text-slate-700 font-medium"><?php echo $__env->yieldContent('title', 'Dashboard'); ?></span>
      </div>

      
      <main class="flex-1 p-6">
        <?php if(session('success')): ?>
          <div class="bg-green-100 text-green-700 text-sm px-4 py-3 rounded-md mb-6">
            <?php echo e(session('success')); ?>

          </div>
        <?php endif; ?>

        <?php echo $__env->yieldContent('content'); ?>
      </main>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\Edukasi4Id\resources\views/layouts/admin.blade.php ENDPATH**/ ?>