
document.addEventListener('DOMContentLoaded', function () {
    const preloader = document.querySelector('.preloader');

    // Cerrar el preloader al hacer clic
    preloader.addEventListener('click', function () {
        preloader.classList.add('hidden');
    });
});// Mostrar y ocultar el formulario de RSVP
$(document).ready(function () {
    initializeCountdown('2024-12-14');
   

    $('nav a').on('click', function (event) {
        if (this.hash !== "") {
            event.preventDefault();
            var hash = this.hash;
            $('html, body').animate({
                scrollTop: $(hash).offset().top
            }, 800, function () {
                window.location.hash = hash;
            });
        }
    });

    
});
// Animación al hacer clic en el botón de navegación
document.querySelectorAll('.nav-link').forEach(link => {
    link.addEventListener('click', function() {
        // Agregar clase de animación a la sección correspondiente
        const targetSectionId = this.getAttribute('href').substring(1);
        document.getElementById(targetSectionId).classList.add('fadeIn');
    });
});

function initializeCountdown(date) {
    const countdownElement = document.getElementById('countdown-timer');

    // Convertir la fecha objetivo a la zona horaria de México
    const targetDate = new Date(date).toLocaleString("en-US", { timeZone: "America/Mexico_City" });
    const targetTime = new Date(targetDate).getTime();

    const updateCountdown = () => {
        // Obtener la hora actual en la zona horaria de México
        const nowMexico = new Date().toLocaleString("en-US", { timeZone: "America/Mexico_City" });
        const now = new Date(nowMexico).getTime();

        const distance = targetTime - now;

        const days = Math.floor(distance / (1000 * 60 * 60 * 24));
        const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        const seconds = Math.floor((distance % (1000 * 60)) / 1000);

        countdownElement.innerHTML = `${days}d ${hours}h ${minutes}m ${seconds}s`;

        if (distance < 0) {
            clearInterval(interval);
            countdownElement.innerHTML = "¡El día ha llegado!";
        }
    };

    updateCountdown();
    const interval = setInterval(updateCountdown, 1000);
}
    updateCountdown();
    const interval = setInterval(updateCountdown, 1000);
}
// window.addEventListener('scroll', function() {
//     var jumbotron = document.querySelector('.jumbotron');
//     var scrollPosition = window.scrollY;

//     if (scrollPosition > jumbotron.clientHeight) {
//         jumbotron.classList.add('fixed');
//     } else {
//         jumbotron.classList.remove('fixed');
//     }
// });
