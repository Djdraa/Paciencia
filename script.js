document.addEventListener('DOMContentLoaded', function() {
  var images = ['1.jpeg', '2.jpeg', '3.jpeg'];
  var currentIndex = 0;
  var body = document.querySelector('body'); // Selecciona el cuerpo de la página

  function changeBackground() {
    body.style.backgroundImage = 'url(img/' + images[currentIndex] + ')';
    body.style.backgroundSize = 'cover'; // Ajusta la imagen para cubrir toda la pantalla
    body.style.backgroundPosition = 'center';
    body.style.backgroundRepeat = 'no-repeat';
    currentIndex = (currentIndex + 1) % images.length;
  }

  // Cambiar la imagen de fondo cada 6 segundos
  setInterval(changeBackground, 6000);
});
