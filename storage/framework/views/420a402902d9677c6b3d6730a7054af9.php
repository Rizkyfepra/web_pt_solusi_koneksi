<?php $__env->startSection('title', 'Kontak Kami'); ?>
<?php $__env->startSection('bodyClass', 'flex flex-col min-h-screen'); ?>

<?php $__env->startSection('content'); ?>
  <main class="flex-1 bg-slate-50">
    <div class="max-w-7xl mx-auto px-6 py-16">
      <h1 class="font-serif text-3xl md:text-4xl font-semibold text-slate-900 mb-2">Kontak Kami</h1>
      <p class="text-slate-500 mb-10">Hubungi kami untuk informasi layanan dan kerja sama.</p>

      <?php if(session('success')): ?>
        <div class="bg-green-50 border border-green-200 text-green-700 text-sm px-4 py-3 rounded-md mb-8">
          <?php echo e(session('success')); ?>

        </div>
      <?php endif; ?>

      <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 mb-10">
        <div class="bg-white rounded-2xl border border-slate-200 p-8">
          <h2 class="text-lg font-semibold text-slate-900 mb-6">Informasi Kontak</h2>
          <ul class="space-y-4 text-sm text-slate-600">
            <li class="flex items-center gap-3 border-l-2 border-blue-500 pl-3">
              <i class="fa-brands fa-whatsapp text-base text-slate-700"></i>
              <span>+62 812 3456 7890</span>
            </li>
            <li class="flex items-center gap-3 border-l-2 border-blue-500 pl-3">
              <i class="fa-brands fa-instagram text-base text-slate-700"></i>
              <span>@solusikoneksianda</span>
            </li>
            <li class="flex items-center gap-3 border-l-2 border-blue-500 pl-3">
              <i class="fa-brands fa-facebook text-base text-slate-700"></i>
              <span>PT Solusi Koneksi Anda</span>
            </li>
            <li class="flex items-start gap-3 border-l-2 border-blue-500 pl-3">
              <i class="fa-solid fa-location-dot text-base text-slate-700 mt-1"></i>
              <span>Jl. Raya Pajajaran No. 88 F Kota Bogor 16153</span>
            </li>
            <li class="flex items-center gap-3 border-l-2 border-blue-500 pl-3">
              <i class="fa-solid fa-envelope text-base text-slate-700"></i>
              <span>info@solusikoneksianda.co.id</span>
            </li>
            <li class="flex items-center gap-3 border-l-2 border-blue-500 pl-3">
              <i class="fa-brands fa-youtube text-base text-slate-700"></i>
              <span>@solusikoneksianda</span>
            </li>
          </ul>
        </div>

        <div class="bg-white rounded-2xl border border-slate-200 p-8">
          <h2 class="text-lg font-semibold text-slate-900 mb-2">Kirim Pesan</h2>
          <p class="text-sm text-slate-500 mb-6">Isi formulir berikut, pesan Anda akan kami terima di panel admin.</p>

          <form action="<?php echo e(route('kontak.store')); ?>" method="POST" class="space-y-4">
            <?php echo csrf_field(); ?>

            <div>
              <label for="nama" class="block text-sm font-medium text-slate-700 mb-1">Nama</label>
              <input type="text" id="nama" name="nama" value="<?php echo e(old('nama')); ?>" required
                     class="w-full border border-slate-300 rounded-md px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                     placeholder="Nama lengkap Anda">
              <?php $__errorArgs = ['nama'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class="text-red-600 text-xs mt-1"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            <div>
              <label for="email" class="block text-sm font-medium text-slate-700 mb-1">Email</label>
              <input type="email" id="email" name="email" value="<?php echo e(old('email')); ?>" required
                     class="w-full border border-slate-300 rounded-md px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                     placeholder="alamat@email.com">
              <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class="text-red-600 text-xs mt-1"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            <div>
              <label for="subjek" class="block text-sm font-medium text-slate-700 mb-1">Subjek <span class="text-slate-400 font-normal">(opsional)</span></label>
              <input type="text" id="subjek" name="subjek" value="<?php echo e(old('subjek')); ?>"
                     class="w-full border border-slate-300 rounded-md px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                     placeholder="Topik pesan">
              <?php $__errorArgs = ['subjek'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class="text-red-600 text-xs mt-1"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            <div>
              <label for="pesan" class="block text-sm font-medium text-slate-700 mb-1">Pesan</label>
              <textarea id="pesan" name="pesan" rows="5" required
                        class="w-full border border-slate-300 rounded-md px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                        placeholder="Tulis pesan Anda di sini..."><?php echo e(old('pesan')); ?></textarea>
              <?php $__errorArgs = ['pesan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class="text-red-600 text-xs mt-1"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            <button type="submit"
                    class="bg-blue-600 text-white px-5 py-2.5 rounded-md text-sm font-medium hover:bg-blue-700 transition">
              Kirim Pesan
            </button>
          </form>
        </div>
      </div>

      <div class="bg-white rounded-2xl border border-slate-200 p-8">
        <h2 class="text-lg font-semibold text-slate-900 mb-6">Lokasi Kami</h2>
        <div class="relative rounded-lg overflow-hidden h-64 md:h-80">
          <iframe
            src="https://maps.google.com/maps?q=Jl.+Raya+Pajajaran+No.+88+F+Kota+Bogor+16153&output=embed"
            class="w-full h-full border-0"
            allowfullscreen
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade">
          </iframe>
          <a href="https://maps.google.com/?q=Jl.+Raya+Pajajaran+No.+88+F+Kota+Bogor+16153"
             target="_blank"
             class="absolute top-3 left-3 bg-white text-slate-900 text-sm font-medium px-3 py-2 rounded-md shadow hover:bg-slate-100 transition flex items-center gap-2">
            Buka di Maps <i class="fa-solid fa-arrow-up-right-from-square text-xs"></i>
          </a>
        </div>
      </div>
    </div>
  </main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.public', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\Edukasi4Id\resources\views/kontak.blade.php ENDPATH**/ ?>