document.addEventListener('DOMContentLoaded', function () {
    const preloader = document.querySelector('.preloader');

    // Cerrar el preloader al hacer clic
    if (preloader) {
        preloader.addEventListener('click', function () {
            preloader.classList.add('hidden');
        });
    }

    // Inicializar el contador regresivo
    initializeCountdown('2024-12-14T14:00:00');
});

$(document).ready(function () {
    // Animación de scroll suave para navegación
    $('nav a').on('click', function (event) {
        if (this.hash !== "") {
            event.preventDefault();
            const hash = this.hash;
            $('html, body').animate({
                scrollTop: $(hash).offset().top
            }, 800, function () {
                window.location.hash = hash;
            });
        }
    });

    // Animación al hacer clic en los enlaces de navegación
    $('.nav-link').on('click', function () {
        const targetSectionId = $(this).attr('href').substring(1);
        $(`#${targetSectionId}`).addClass('fadeIn');
    });
});

const textElement = document.getElementById('text');
const textToType = "¡Estás Invitado! \nAcompáñanos en la celebración de nuestra boda.\n(haz clic aquí!)";
let index = 0;

function typeWriter() {
    if (index < textToType.length) {
        const char = textToType.charAt(index);
        // Reemplaza los saltos de línea con etiquetas <br> para HTML
        if (char === '\n') {
            textElement.innerHTML += '<br>';
        } else {
            textElement.innerHTML += char;
        }
        index++;
        setTimeout(typeWriter, 90); // Ajusta el tiempo para cambiar la velocidad
    }
}

typeWriter(); // Inicia la animación

// Función para inicializar el contador regresivo
function initializeCountdown(date) {
    const countdownElement = document.getElementById('countdown-timer');

    if (!countdownElement) return;

    // Convertir la fecha objetivo a la zona horaria de México
    const targetDate = new Date(date).toLocaleString("en-US", { timeZone: "America/Mexico_City" });
    const targetTime = new Date(targetDate).getTime();

    const updateCountdown = () => {
        const nowMexico = new Date().toLocaleString("en-US", { timeZone: "America/Mexico_City" });
        const now = new Date(nowMexico).getTime();

        const distance = targetTime - now;

        if (distance < 0) {
            clearInterval(interval);
            countdownElement.innerHTML = "¡El día ha llegado!";
            return;
        }

        const days = Math.floor(distance / (1000 * 60 * 60 * 24));
        const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        const seconds = Math.floor((distance % (1000 * 60)) / 1000);

        countdownElement.innerHTML = `${days}d ${hours}h ${minutes}m ${seconds}s`;
    };

    updateCountdown();
    const interval = setInterval(updateCountdown, 1000);
}
