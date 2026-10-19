  <div id="lightbox" onclick="closeLightbox()"
       class="hidden fixed inset-0 bg-black/80 z-50 items-center justify-center p-4 cursor-zoom-out">
    <img id="lightbox-img" src="" class="max-w-full max-h-full rounded-lg">
  </div>

  <script>
    function openLightbox(src) {
      document.getElementById('lightbox-img').src = src;
      document.getElementById('lightbox').classList.remove('hidden');
      document.getElementById('lightbox').classList.add('flex');
    }
    function closeLightbox() {
      document.getElementById('lightbox').classList.add('hidden');
      document.getElementById('lightbox').classList.remove('flex');
    }
  </script>
<?php /**PATH C:\xampp\htdocs\Edukasi4Id\resources\views/partials/lightbox.blade.php ENDPATH**/ ?>