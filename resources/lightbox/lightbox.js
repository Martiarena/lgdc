// Obtener todos los elementos de galería
const galleries = Array.from(document.querySelectorAll('.lightbox'));

// Agregar evento click a cada imagen para mostrar la galería
galleries.forEach(gallery => {
  const images = Array.from(gallery.getElementsByTagName('img'));
  
  images.forEach(image => {
    image.addEventListener('click', () => {
      showLightbox(gallery, image);
    });
  });
});

// Mostrar la galería lightbox
function showLightbox(gallery, selectedImage) {
  const lightbox = document.createElement('div');
  lightbox.className = 'lightbox-show active';
  
  const closeBtn = document.createElement('span');
  closeBtn.className = 'lightbox-close';
  closeBtn.innerHTML = '&times;';
  closeBtn.addEventListener('click', () => {
    closeLightbox(lightbox);
  });

  lightbox.addEventListener('click', (event) => {
    if (event.target === lightbox) {
      closeLightbox(lightbox);
    }
  });
  
  const prevBtn = document.createElement('span');
  prevBtn.className = 'lightbox-prev';
  prevBtn.innerHTML = '&#10094;';
  prevBtn.addEventListener('click', () => {
    showPrevImage(gallery);
  });
  
  const nextBtn = document.createElement('span');
  nextBtn.className = 'lightbox-next';
  nextBtn.innerHTML = '&#10095;';
  nextBtn.addEventListener('click', () => {
    showNextImage(gallery);
  });
  
  const images = Array.from(gallery.getElementsByTagName('img'));
  const currentIndex = images.indexOf(selectedImage);
  
  const currentImage = document.createElement('img');
  currentImage.src = selectedImage.src;
  currentImage.alt = selectedImage.alt;
  
  lightbox.appendChild(closeBtn);
  lightbox.appendChild(prevBtn);
  lightbox.appendChild(nextBtn);
  lightbox.appendChild(currentImage);
  document.body.appendChild(lightbox);
  
  // Actualizar clase activa en las imágenes
  images.forEach((image, index) => {
    if (index === currentIndex) {
      image.classList.add('active');
    } else {
      image.classList.remove('active');
    }
  });
}

// Cerrar la galería lightbox
function closeLightbox(lightbox) {
  lightbox.parentNode.removeChild(lightbox);
}

// Mostrar la imagen anterior
function showPrevImage(gallery) {
  const images = Array.from(gallery.getElementsByTagName('img'));
  const currentIndex = images.findIndex(image => image.classList.contains('active'));
  const prevIndex = (currentIndex - 1 + images.length) % images.length;
  images[currentIndex].classList.remove('active');
  images[prevIndex].classList.add('active');
  updateCurrentImage(gallery);
}

// Mostrar la siguiente imagen
function showNextImage(gallery) {
  const images = Array.from(gallery.getElementsByTagName('img'));
  const currentIndex = images.findIndex(image => image.classList.contains('active'));
  const nextIndex = (currentIndex + 1) % images.length;
  images[currentIndex].classList.remove('active');
  images[nextIndex].classList.add('active');
  updateCurrentImage(gallery);
}

// Actualizar la imagen actual en la galería lightbox
function updateCurrentImage(gallery) {
  const lightbox = gallery.querySelector('.lightbox');
  const currentImage = lightbox.querySelector('img');
  const images = Array.from(gallery.getElementsByTagName('img'));
  const currentIndex = images.findIndex(image => image.classList.contains('active'));
  currentImage.src = images[currentIndex].src;
  currentImage.alt = images[currentIndex].alt;
}