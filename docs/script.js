// script.js

// Mostrar y ocultar el formulario de RSVP
$(document).ready(function () {
    initializeCountdown('2024-12-14');
    $('#showRSVP').click(function () {
        $('#rsvpForm').toggle();
    });

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

    $('#rsvpForm').on('submit', function (event) {
        event.preventDefault();

        var formData = {
            name: $('#name').val(),
            email: $('#email').val(),
            guests: $('#guests').val()
        };

        $.ajax({
            type: 'POST',
            url: 'save_rsvp.php',
            data: formData,
            dataType: 'json',
            encode: true
        })
        .done(function (data) {
            console.log(data);
            if (data.success) {
                Swal.fire({
                    icon: 'success',
                    title: 'RSVP enviado',
                    text: 'Tu RSVP se ha enviado correctamente.',
                    confirmButtonText: 'Aceptar'
                });

                $('#rsvpForm')[0].reset(); // Resetear el formulario
            } else {
                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: 'Hubo un error al enviar tu RSVP. Por favor, inténtalo nuevamente.',
                    confirmButtonText: 'Aceptar'
                });
            }
        })
        .fail(function (jqXHR, textStatus, errorThrown) {
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: 'No se pudo conectar con el servidor. Por favor, inténtalo más tarde.',
                confirmButtonText: 'Aceptar'
            });
        });
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
    const targetDate = new Date(date).getTime();

    const updateCountdown = () => {
        const now = new Date().getTime();
        const distance = targetDate - now;

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
// window.addEventListener('scroll', function() {
//     var jumbotron = document.querySelector('.jumbotron');
//     var scrollPosition = window.scrollY;

//     if (scrollPosition > jumbotron.clientHeight) {
//         jumbotron.classList.add('fixed');
//     } else {
//         jumbotron.classList.remove('fixed');
//     }
// });
