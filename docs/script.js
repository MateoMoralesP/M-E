// script.js

// Mostrar y ocultar el formulario de RSVP
$(document).ready(function () {
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


// Animación al hacer clic en el botón "Enviar" del formulario RSVP
document.getElementById('rsvpForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Evitar el envío del formulario por defecto

    // Agregar clase de animación al formulario
    this.classList.add('fadeIn');

    // Simular un tiempo de espera antes de enviar el formulario
    setTimeout(() => {
        this.submit(); // Enviar el formulario después de 1 segundo (puedes ajustar el tiempo según tu preferencia)
    }, 1000);
});

// Animación al hacer clic en el botón de navegación
document.querySelectorAll('.nav-link').forEach(link => {
    link.addEventListener('click', function() {
        // Agregar clase de animación a la sección correspondiente
        const targetSectionId = this.getAttribute('href').substring(1);
        document.getElementById(targetSectionId).classList.add('fadeIn');
    });
});

// window.addEventListener('scroll', function() {
//     var jumbotron = document.querySelector('.jumbotron');
//     var scrollPosition = window.scrollY;

//     if (scrollPosition > jumbotron.clientHeight) {
//         jumbotron.classList.add('fixed');
//     } else {
//         jumbotron.classList.remove('fixed');
//     }
// });
