  <header class="border-b border-slate-100 relative bg-white">
    <nav class="max-w-7xl mx-auto flex items-center justify-between px-6 py-4">
      <a href="<?php echo e(route('home')); ?>" class="flex items-center gap-3">
        <img src="<?php echo e(asset('images/logo-ska.png')); ?>" alt="Logo PT Solusi Koneksi Anda" class="h-12 w-auto">
        <span class="font-semibold tracking-wide text-slate-900">PT Solusi Koneksi Anda</span>
      </a>

      <div class="hidden md:flex items-center gap-8 text-sm text-slate-600">
        <a href="<?php echo e(route('home')); ?>" class="<?php echo e(request()->routeIs('home') ? 'text-blue-700 font-medium' : 'hover:text-blue-700'); ?>">Beranda</a>
        <a href="<?php echo e(route('profil')); ?>" class="<?php echo e(request()->routeIs('profil') ? 'text-blue-700 font-medium' : 'hover:text-blue-700'); ?>">Profil</a>
        <a href="<?php echo e(route('produk.index')); ?>" class="<?php echo e(request()->routeIs('produk.*') ? 'text-blue-700 font-medium' : 'hover:text-blue-700'); ?>">Layanan & Produk</a>
        <a href="<?php echo e(route('artikel.index')); ?>" class="<?php echo e(request()->routeIs('artikel.*') ? 'text-blue-700 font-medium' : 'hover:text-blue-700'); ?>">Artikel</a>
        <a href="<?php echo e(route('galeri.index')); ?>" class="<?php echo e(request()->routeIs('galeri.*') ? 'text-blue-700 font-medium' : 'hover:text-blue-700'); ?>">Galeri</a>
        <a href="<?php echo e(route('kontak')); ?>" class="<?php echo e(request()->routeIs('kontak') ? 'text-blue-700 font-medium' : 'hover:text-blue-700'); ?>">Kontak</a>
      </div>

      <button id="menu-toggle" class="md:hidden text-slate-700" aria-label="Buka menu">
        <i class="fa-solid fa-bars text-xl"></i>
      </button>
    </nav>

    <div id="mobile-menu" class="hidden md:hidden border-t border-slate-100 px-6 py-4 space-y-3 text-sm text-slate-600 bg-white">
      <a href="<?php echo e(route('home')); ?>" class="block <?php echo e(request()->routeIs('home') ? 'text-blue-700 font-medium' : 'hover:text-blue-700'); ?>">Beranda</a>
      <a href="<?php echo e(route('profil')); ?>" class="block <?php echo e(request()->routeIs('profil') ? 'text-blue-700 font-medium' : 'hover:text-blue-700'); ?>">Profil</a>
      <a href="<?php echo e(route('produk.index')); ?>" class="block <?php echo e(request()->routeIs('produk.*') ? 'text-blue-700 font-medium' : 'hover:text-blue-700'); ?>">Layanan & Produk</a>
      <a href="<?php echo e(route('artikel.index')); ?>" class="block <?php echo e(request()->routeIs('artikel.*') ? 'text-blue-700 font-medium' : 'hover:text-blue-700'); ?>">Artikel</a>
      <a href="<?php echo e(route('galeri.index')); ?>" class="block <?php echo e(request()->routeIs('galeri.*') ? 'text-blue-700 font-medium' : 'hover:text-blue-700'); ?>">Galeri</a>
      <a href="<?php echo e(route('kontak')); ?>" class="block <?php echo e(request()->routeIs('kontak') ? 'text-blue-700 font-medium' : 'hover:text-blue-700'); ?>">Kontak</a>
    </div>
  </header>

  <script>
    document.getElementById('menu-toggle').addEventListener('click', function () {
      document.getElementById('mobile-menu').classList.toggle('hidden');
    });
  </script>
<?php /**PATH C:\xampp\htdocs\Edukasi4Id\resources\views/partials/navbar.blade.php ENDPATH**/ ?>