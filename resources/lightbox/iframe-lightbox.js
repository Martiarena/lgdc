var overlay = document.getElementById('iframe-overlay');
    var lightbox = document.getElementById('iframe-lightbox');
    var iframe = document.getElementById('iframe-content');

    function openLightbox() {
      overlay.style.display = 'block';
      lightbox.style.display = 'block';
    }

    function closeLightbox() {
      overlay.style.display = 'none';
      lightbox.style.display = 'none';
      // Detener la reproducción del video al cerrar el lightbox (si se está reproduciendo)
      iframe.src = iframe.src;
    }