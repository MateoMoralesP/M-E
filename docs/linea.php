<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cronograma Boda</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <link rel="stylesheet" href="linea.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <style>
        .navbar {
            background-color: #343a40;
        }

        .navbar-brand,
        .navbar-nav .nav-link {
            color: #ffffff !important;
        }

        .navbar-nav .nav-link:hover {
            color: #d4af37 !important;
        }

        .container {
            margin-top: 80px;
        }

        .timeline {
            position: relative;
            padding: 0;
            list-style: none;
        }

        .timeline:before {
            content: '';
            position: absolute;
            top: 0;
            bottom: 0;
            left: 50%;
            width: 4px;
            background-color: #d4af37;
            transform: translateX(-50%);
        }

        .timeline li {
            position: relative;
            margin-bottom: 60px;
            padding: 0;
            overflow: hidden;
            clear: both;
        }

        .timeline-time {
            position: relative;
            background-color: #ffffff;
            border: 4px solid #d4af37;
            border-radius: 50%;
            width: 60px;
            height: 60px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #d4af37;
            cursor: pointer;
            font-size: 24px;
            z-index: 1;
            margin-left: -1px;
            /* Ajuste para centrar el ícono en la línea */
            margin-top: -1px;
            /* Ajuste para centrar el ícono verticalmente */
        }

        .timeline-content {
            display: none;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            position: relative;
            margin-left: 80px;
            /*Asegurar el espacio para el punto de tiempo */
            width: calc(100% - 120px);
            /* Ajustar el ancho para la visibilidad del contenido */
        }

        .timeline-content:before {
            content: '';
            position: absolute;
            top: 20px;
            left: -20px;
            border-width: 10px;
            border-style: solid;
            border-color: transparent #ffffff transparent transparent;
        }

        .timeline-content h3 {
            color: #d4af37;
        }

        .timeline-content p {
            margin: 0;
        }
        @media (max-width: 767px) {
            .timeline::before {
                left: 120;
                
            }

            .timeline-time {
                width: 50px;
                height: 50px;
                font-size: 20px;
                margin-left: -1;
                margin-top: -1px;
            }

            .timeline-content {
                margin-left: 10px;
                
                width: calc(100% - 80px);
            }
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <a class="navbar-brand" href="#">Nuestra Boda</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="./index.php">Invitación <i class="bi bi-house-door"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./index.php">Detalles <i class="bi bi-list"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./index.php">Ubicación <i class="bi bi-geo-alt"></i></a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container">
        <h1 class="text-center my-5">Cronograma de Boda</h1>
        <ul class="timeline">
            <li>
                <div class="timeline-time" onclick="toggleContent(this)"> <i class="fas fa-church"></i></div>
                <div class="timeline-content">
                    <h3>14:00 - Misa</h3>
                    <p>Ceremonia religiosa.</p>
                </div>
            </li>
            <li>
                <div class="timeline-time" onclick="toggleContent(this)"> <i class="fas fa-camera"></i></div>
                <div class="timeline-content">
                    <h3>15:00 - Fotos</h3>
                    <p>Fotos de los novios juntos, con la familia.</p>
                </div>
            </li>
            <li>
                <div class="timeline-time" onclick="toggleContent(this)"> <i class="fas fa-door-open"></i></div>
                <div class="timeline-content">
                    <h3>15:30 - Recepción en Salón</h3>
                    <p>Bienvenida a los invitados.</p>
                </div>
            </li>
            <li>
                <div class="timeline-time" onclick="toggleContent(this)"> <i class="fas fa-utensils"></i></div>
                <div class="timeline-content">
                    <h3>16:00 - Comida</h3>
                    <p>Banquete de bodas.</p>
                </div>
            </li>
            <li>
                <div class="timeline-time" onclick="toggleContent(this)"> <i class="fas fa-file-alt"></i></div>
                <div class="timeline-content">
                    <h3>18:00 - Boda Civil</h3>
                    <p>Ceremonia civil.</p>
                </div>
            </li>
            <li>
                <div class="timeline-time" onclick="toggleContent(this)"> <i class="fas fa-birthday-cake"></i></div>
                <div class="timeline-content">
                    <h3>19:00 - Pastel</h3>
                    <p>Corte del pastel de bodas.</p>
                </div>
            </li>
            <li>
                <div class="timeline-time" onclick="toggleContent(this)"> <i class="fas fa-music"></i></div>
                <div class="timeline-content">
                    <h3>21:00 - Baile</h3>
                    <p>Apertura de la pista de baile.</p>
                </div>
            </li>
            <li>
                <div class="timeline-time" onclick="toggleContent(this)"> <i class="fas fa-heart"></i></div>
                <div class="timeline-content">
                    <h3>22:00 - Juegos y Tradiciones</h3>
                    <p>Lanzamiento del ramo y corbata.</p>
                    <p>Vibora de la Mar.</p>
                </div>
            </li>
            <li>
                <div class="timeline-time" onclick="toggleContent(this)"> <i class="fas fa-guitar"></i></div>
                <div class="timeline-content">
                    <h3>24:00 - Banda</h3>
                    <p>Música en vivo con la banda.</p>
                </div>
            </li>
        </ul>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        function toggleContent(element) {
            const content = element.nextElementSibling;
            content.style.display = content.style.display === 'block' ? 'none' : 'block';
        }
    </script>
</body>

</html>