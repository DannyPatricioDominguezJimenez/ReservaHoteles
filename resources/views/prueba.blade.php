<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Starfish</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            padding-top: 56px;
            /* Ajuste para compensar la altura de la barra de navegación fija */
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            /* Cambiado a min-height para asegurar que el cuerpo ocupe al menos toda la altura de la pantalla */
            background-image: url('imagenes/imagen1.jpg');
            /* Ajusta la ruta si es necesario */
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            margin: 0;
            /* Asegura que no haya espacio extra alrededor del cuerpo */
            color: #fff;
            /* Color de texto predeterminado para todo el cuerpo */
        }

        .navbar {
            background-color: #000;
            /* Cambia el color de fondo a negro */
        }

        .navbar-brand img {
            height: 60px;
        }

        .navbar-nav .nav-link {
            color: #fff !important;
            /* Color de texto para enlaces en la barra de navegación */
        }

        .navbar-nav .nav-link.active {
            font-weight: bold;
        }

        .navbar-nav .nav-link:hover {
            color: #ccc !important;
            /* Cambia el color de texto al pasar el cursor por encima */
        }

        .btn-outline-light {
            color: #fff;
            border-color: #fff;
        }

        .btn-outline-light:hover {
            color: #000;
            /* Cambia el color de texto al pasar el cursor por encima */
            background-color: #fff;
            border-color: #fff;
        }

        .contact-info {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            color: #000; /* Color de texto para la sección de información de contacto */
            text-align: center; /* Alinea todo el contenido al centro */
        }

        .contact-info h2 {
            font-family: 'Times New Roman', Times, serif;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .contact-info p {
            margin-bottom: 10px;
        }

        .contact-info a {
            color: #007bff;
        }

        .contact-info a:hover {
            text-decoration: underline;
        }

        .map-container {
            text-align: center;
            margin-top: 20px;
        }

        .map-container iframe {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="imagenes/logo.jpg" alt="Logo" style="vertical-align: middle;">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Reservas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Ofertas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contactanos</a>
                    </li>
                </ul>
            </div>
            <div class="d-flex">
                <button class="btn btn-outline-light me-2" type="button">Iniciar Sesión</button>
                <button class="btn btn-outline-light" type="button">Registrarse</button>
            </div>
        </div>
    </nav>

    <!-- Contenido de la página -->
    <div class="banner-content">
        <h1 class="mt-5" style="font-family: 'Bonheur Royale', cursive; font-size: 3rem;">Bienvenido al Hotel Starfish</h1>
        <p style="font-family: 'Bonheur Royale', cursive; font-size: 1.5rem;">"Donde el Lujo y la Serenidad se Encuentran con el Océano".</p>
    </div>

    <!-- Información de contacto -->
    <div class="contact-info">
        <h2>Información de Contacto</h2>
        <p><strong>Dirección Física:</strong><br>
            Hotel StarFish<br>
            Costa Deslumbrante, Calle Marina #123, Ciudad Costera
        </p>
        <p><strong>Número de Teléfono Principal:</strong><br>
            +123 456 7890
        </p>
        <p><strong>Correo Electrónico de Contacto:</strong><br>
            <a href="mailto:contacto@hotelfish.com">contacto@hotelfish.com</a>
        </p>
        <p><strong>Horarios de Atención:</strong><br>
            Lunes a Viernes: 8:00 AM - 8:00 PM<br>
            Sábado y Domingo: 9:00 AM - 6:00 PM
        </p>
        <div class="map-container">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63828.576386375884!2d-78.6847172783203!3d-0.9359282999999788!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91d4610f5d33a74d%3A0x408aab614807127a!2sUniversidad%20de%20las%20Fuerzas%20Armadas%20ESPE%20Sede%20Latacunga%20(campus%20centro)!5e0!3m2!1ses!2sec!4v1719335786183!5m2!1ses!2sec" 
                width="600" height="337.5" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <p class="mt-3"><strong>Redes Sociales:</strong><br>
            <a href="#">Facebook</a><br>
            <a href="#">Instagram</a><br>
            <a href="#">Twitter</a>
        </p>
        <p><strong>Indicaciones y Transporte:</strong><br>
            Ubicado a 30 minutos del Aeropuerto Internacional de Ciudad Costera. Transporte privado disponible bajo
            solicitud.
        </p>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
