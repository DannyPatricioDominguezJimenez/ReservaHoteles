<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Starfish</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            padding-top: 56px;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            background-image: url('img/fondo.jpeg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            margin: 0;
            color: #fff;
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

        .footer {
            background-color: #000;
            color: #fff;
            padding: 20px 0;
            text-align: center;
            width: 100%;
        }

        .footer .social-media {
            margin-bottom: 20px;
        }

        .footer .social-media a {
            margin: 0 10px;
            display: inline-block;
        }

        .footer .social-media img {
            width: 40px;
            height: 40px;
        }

        .footer .links {
            margin-bottom: 20px;
        }

        .footer .links a {
            color: #fff;
            margin: 0 15px;
            text-decoration: none;
        }

        .footer .address {
            margin-bottom: 10px;
        }

        .footer .copyright {
            font-size: 14px;
        }

        .content {
            flex: 1;
        }

        .banner-content {
            text-align: center;
            /* Centra el texto dentro del banner */
        }

        .social-media {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 10px;
            color: #fff;
            /* Color blanco del texto */
        }

        .social-media i {
            font-size: 24px;
            /* Tamaño de los iconos */
            margin: 0 10px;
            /* Espacio entre los iconos */
            color: #fff;
            /* Color blanco de los iconos */
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="img/logo.jpeg" alt="Logo" style="vertical-align: middle;">
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
                <button class="btn btn-outline-light me-2" type="button" onclick="window.location.href='{{ url('/InicioSesion') }}'">Iniciar Sesión</button>
                <button class="btn btn-outline-light" type="button">Registrarse</button>
            </div>
        </div>
    </nav>

    <!-- Contenido de la página -->
    <div class="content">
        <div class="banner-content">
            <h1 class="mt-5" style="font-family: 'Bonheur Royale', cursive; font-size: 3rem;">Bienvenido al Hotel
                Starfish</h1>
            <p style="font-family: 'Bonheur Royale', cursive; font-size: 1.5rem;">"Donde el Lujo y la Serenidad se
                Encuentran con el Océano".</p>
        </div>

        
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="social-media">
                <span>Encuéntranos</span>
                <a href="https://www.facebook.com" target="_blank"><i class="fab fa-facebook"></i></a>
                <a href="https://www.twitter.com" target="_blank"><i class="fab fa-twitter"></i></a>
                <a href="https://www.instagram.com" target="_blank"><i class="fab fa-instagram"></i></a>
                <a href="https://www.youtube.com" target="_blank"><i class="fab fa-youtube"></i></a>
            </div>
            <div class="links">
                <a href="#">Inicio</a>
                <span>|</span>
                <a href="#">Reservas</a>
                <span>|</span>
                <a href="#">Ofertas</a>
                <span>|</span>
                <a href="#">Contactanos</a>
            </div>
            <div class="address">
            </div>
            <div class="copyright">
                © 2022 Your Company. All rights reserved.
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>