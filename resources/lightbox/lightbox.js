window.addEventListener('DOMContentLoaded', function() {
  const galleries = document.querySelectorAll('.gallery');
  const lightboxOverlay = document.getElementById('lightbox-overlay');
  const lightbox = document.getElementById('lightbox');
  const lightboxImage = document.getElementById('lightbox-image');
  const lightboxClose = document.getElementById('lightbox-close');
  const lightboxPrev = document.getElementById('lightbox-prev');
  const lightboxNext = document.getElementById('lightbox-next');

  let currentGroup = '';
  let currentIndex = 0;

  galleries.forEach(function(gallery) {
    const images = gallery.getElementsByTagName('img');
    const group = images[0].getAttribute('data-group');

    Array.from(images).forEach(function(image, index) {
      image.addEventListener('click', function() {
        currentGroup = group;
        currentIndex = index;
        showLightbox();
        updateLightboxImage();
      });
    });
  });

  lightboxOverlay.addEventListener('click', hideLightbox);
  lightboxClose.addEventListener('click', hideLightbox);
  lightboxPrev.addEventListener('click', showPrevImage);
  lightboxNext.addEventListener('click', showNextImage);
  document.addEventListener('keydown', handleKeyPress);

  function showLightbox() {
    lightboxOverlay.style.display = 'block';
    lightbox.style.display = 'block';
  }

  function hideLightbox() {
    lightboxOverlay.style.display = 'none';
    lightbox.style.display = 'none';
  }

  function updateLightboxImage() {
    const images = document.querySelectorAll(`.gallery img[data-group="${currentGroup}"]`);
    const image = images[currentIndex];
    const imageUrl = image.getAttribute('src');
    lightboxImage.setAttribute('src', imageUrl);
  }

  function showPrevImage() {
    const images = document.querySelectorAll(`.gallery img[data-group="${currentGroup}"]`);
    currentIndex = (currentIndex - 1 + images.length) % images.length;
    updateLightboxImage();
  }

  function showNextImage() {
    const images = document.querySelectorAll(`.gallery img[data-group="${currentGroup}"]`);
    currentIndex = (currentIndex + 1) % images.length;
    updateLightboxImage();
  }

  function handleKeyPress(event) {
    if (event.key === 'ArrowLeft') {
      showPrevImage();
    } else if (event.key === 'ArrowRight') {
      showNextImage();
    }
  }
});