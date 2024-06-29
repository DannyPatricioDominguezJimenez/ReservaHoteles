<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Starfish</title>
    <link rel="stylesheet" href="{{ asset('css/filament/app.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            padding-top: 56px;
            margin: 0;
            color: #fff;
        }
        .hero_titulo {
            font-size: 4em;
            text-align: center;
            color: #fff;
            margin-bottom: 20px;
        }
        .hero__welcome {
            font-size: 1.2em;
            max-width: 800px;
            text-align: center;
            margin: 0 auto 20px auto;
        }
        .btn-descubre {
            font-size: 1.2em;
            padding: 10px 20px;
            margin-top: 20px;
        }
        .hero__inicioSt {
            width: 100%;
            height: 100vh;
            background-image: linear-gradient(100deg, #0000004d 0%, #0000004d 10%), url('{{ asset('imagenes/playa.jpg') }}');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            color: #fff;
            text-align: center;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        .navbar {
            background-color: #000;
        }
        .navbar-brand img {
            height: 60px;
        }
        .navbar-nav .nav-link {
            color: #fff !important;
        }
        .navbar-nav .nav-link.active {
            font-weight: bold;
        }
        .navbar-nav .nav-link:hover {
            color: #ccc !important;
        }
        .btn-outline-light {
            color: #fff;
            border-color: #fff;
        }
        .btn-outline-light:hover {
            color: #000;
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
            color: #000;
            text-align: center;
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
            color: #1100ff;
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
    <!-- Header Section -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('imagenes/logo.jpg') }}" alt="Logo" style="vertical-align: middle;">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Reservas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Ofertas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Contactanos</a>
                    </li>
                </ul>
            </div>
            <div class="d-flex">
                <button class="btn btn-outline-light me-2" type="button">Iniciar Sesión</button>
                <button class="btn btn-outline-light" type="button">Registrarse</button>
            </div>
        </div>
    </nav>

    <!-- Content Section -->
    <section class="hero__inicioSt">
        <h1 class="hero_titulo">STARFISH RESORTS</h1>
        <p class="hero__welcome">Bienvenido al Hotel StarFish, un oasis de tranquilidad y lujo situado en la costa más deslumbrante. Nuestro hotel combina la elegancia moderna con la belleza natural del entorno marino, creando una experiencia inolvidable para todos nuestros huéspedes. Con vistas panorámicas al océano, habitaciones exquisitamente decoradas y una atención al cliente de primera clase, el Hotel StarFish es el lugar perfecto para unas vacaciones de ensueño.
            Disfrute de nuestras exclusivas instalaciones, que incluyen un spa de lujo, piscinas infinitas, y una selección de restaurantes gourmet que ofrecen lo mejor de la cocina local e internacional. Ya sea que esté aquí para relajarse en nuestras playas privadas, explorar la vibrante vida marina o simplemente disfrutar de un refugio sereno lejos del bullicio diario, el Hotel StarFish promete una estancia llena de momentos mágicos y recuerdos inolvidables.</p>
        <button class="btn btn-outline-light btn-descubre">Descubre Más</button>
    </section>

    <!-- Contact Section -->
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
