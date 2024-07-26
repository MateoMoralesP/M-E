<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boda M&E</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;700&family=Great+Vibes&display=swap">
    <link rel="stylesheet" href="styles.css">
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <!-- <a class="navbar-brand" href="#">Nuestra Boda</a> -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#invitacion">Invitación <i class="bi bi-house-door"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#detalles">Detalles <i class="bi bi-list"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#ubicacion">Ubicación <i class="bi bi-geo-alt"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="quiz.php">saber mas...<i class="bi bi-envelope-check"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="linea.php">Itinerario <i class="bi bi-card-checklist"></i></a>
                </li>
            </ul>
        </div>
    </nav>


    <header class="jumbotron text-center" id="invitacion">
        <h1 class="display-4">¡Estás Invitado!</h1>
        <p class="lead">Acompáñanos en la celebración de nuestra boda.</p>
        <blockquote class="blockquote">
            <p class="mb-0">"El amor es paciente, es bondadoso. El amor no es envidioso, ni presumido, ni orgulloso."</p>
            <footer class="" style="background-color:#00000080; color:aliceblue">Corintios 13:4</footer>
        </blockquote>
        <h1 class="blanco">Mateo Morales Perez & Elizabeth Sanchez Ortiz</h1>
        <h3>Padres de los novios</h3>
        <div class="row text-center">
            <div class="col-6-lg parents">
                <p>Padres del Novio:</p>
                <p class="blanco">Ismael Morales Perez</p>
                <p class="blanco">Norma Perez Lujano</p>
            </div>

            <div class="col-6-lg parents">
                <p>Padres de la Novia:</p>
                <p class="blanco">Armando Sanches Mejia</p>
                <p class="blanco">Bertha Ortiz Diaz</p>
            </div>
        </div>
        <h3>Padrinos de Velación</h3>
        <p class="blanco">Armando Espinoza Alvarado</p>
        <p class="blanco">Leticia Huertas Mendoza</p>
        <br>
        <a class="btn btn-warning btn-lg" style="color: #0000009e;" href="#detalles"> <i class="bi bi-list"></i> </a>
        <a class="btn btn-warning btn-lg" style="color: #0000009e;" href="#ubicacion"> <i class="bi bi-geo-alt"></i> </a>
        <!-- <a class="btn btn-warning btn-lg" style="color: #0000009e;" href="#rsvp"> <i class="bi bi-envelope-check"></i> </a> -->
        <a class="btn btn-warning btn-lg" style="color: #0000009e;" href="linea.php"> <i class="bi bi-card-checklist"></i></a>

    </header>
    <div class="background-image"></div>
    <section id="bride-groom" class="bride-groom">

    </section>
    <section id="countdown" class="countdown">
        <h3>Cuenta regresiva</h3>
        <img src="img3.png" alt="Descripción de la imagen" class="countdown-image">
        <div id="countdown-timer">00:00:00</div>

    </section>

    <section class="container my-5" id="detalles">
        <h2 class="text-center">Detalles del Evento</h2>
        <div class="event-detail text-center">
            <i class="fas fa-church fa-2x event-detail"></i>
            <h3>Misa</h3>
            <p>Fecha: 14 de Diciembre de 2024</p>
            <p>Hora: 14:00</p>
            <p>Lugar: Iglesia de San Bartolome</p>
            <p>Dirección: C. 16 de Septiembre esq. C. Plaza Juárez, San Bartolome Tlaltelulco, 52160 San Bartolomé Tlaltelulco, Méx.</p>
        </div>
        <div class="event-detail text-center">
            <i class="fas fa-door-open fa-2x event-detail"></i>
            <h3>Recepción</h3>
            <p>Fecha: 14 de Diciembre de 2024</p>
            <p>Hora: 15:30</p>
            <p>Lugar: Salón Safiro</p>
            <p>Dirección: privada sin nombre, ubicada en Josefa Ortiz de Domínguez, Manzana 064, San Bartolome Tlaltelulco, 52160 San Bartolomé Tlaltelulco, Méx. <br>Ref. La privada está justo antes del CBT No. 2 Metepec.</p>
        </div>
    </section>

    <section class="container my-5" id="ubicacion">
        <h2 class="text-center">Ubicación</h2>
        <h4 class="text-center">Ubicación Iglesia</h4>
        <div class="map-container text-center position-relative">
            <iframe src="https://www.google.com.mx/maps/embed?pb=!1m18!1m12!1m3!1d3762.1932850708574!2d-99.63112368447517!3d19.22715837032517!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85cd8bfc41cf87af%3A0x2766bb1d8a61ba6a!2sParroquia%20San%20Bartolom%C3%A9%20Tlaltelulco!5e0!3m2!1sen!2smx!4v1622437229567!5m2!1sen!2smx" width="600" height="450" style="border:0; z-index: 0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
        </br>
        <h4 class="text-center">Ubicación Recepción</h4>
        <div class="map-container text-center position-relative">
            <iframe src="https://www.google.com.mx/maps/embed?pb=!1m18!1m12!1m3!1d3760.7239150548553!2d-99.634854!3d19.231895!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d202f9931da791%3A0xb4585257c5a20f9a!2s19.231895%2C%20-99.634854!5e0!3m2!1sen!2smx!4v1623062657780!5m2!1sen!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </section>

    <footer class="text-center py-4">
        <div class="footer">
            <p class="mx-2 footer" style="color: #d4af37 !important;"> &copy; 2024 Nuestra Boda. Todos los derechos reservados M&E.</p>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="sweetalert2.all.min.js"></script>
    <script src="script.js"></script>
</body>

</html>