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

        }

        .fondo {
            background-image: url('imagenes/img1.jpg');
            /* Ajusta la ruta si es necesario */
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            margin: 0;
            color: #fff;
        }

        .fondo2 {
            background-image: url('img/fondo2.avif');
            /* Ajusta la ruta si es necesario */
            background-size: contain;
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

        .footer {
            background-color: #000;
            color: #fff;
            padding: 20px 0;
            text-align: center;
            width: 100%;
            margin-top: auto;
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
        }

        .social-media {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 10px;
            color: #fff;
        }

        .social-media i {
            font-size: 24px;
            margin: 0 10px;
            color: #fff;
        }

        h1.text-center {
            color: #000;
            font-family: 'Bonheur Royale', cursive;
            font-size: 36px;
            /* Aumentamos el tamaño */
            font-weight: bold;
            /* Ponemos en negrita */
        }

        .carousel-item img {
            height: 400px;
            width: 500px;
            object-fit: cover;
        }

        .cards-container {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
        }

        .card {
            width: 30%;
            min-width: 300px;
            max-width: 460px;
            height: 631px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            margin-bottom: 30px;
        }

        .card-title {
            background-color: black;
            color: white;
            text-align: center;
            padding: 10px 0;
            font-size: 18px;
        }

        .card img {
            width: 100%;
            height: calc(100% - 80px);
            /* Adjusting height to accommodate title and description */
            object-fit: cover;
        }

        .card-description {
            text-align: center;
            padding: 10px;
            font-size: 16px;
            color: #777;
        }

        .servicios {
            background-color: #000;
            color: #fff;
            font-size: 25px;
            padding: 10px 15px;
            display: inline-block;
            text-align: center;
            position: relative;
        }

        .servicios::after {
            content: '';
            position: absolute;
            bottom: -2px;
            left: 50%;
            transform: translateX(-50%);
            width: 50%;
            height: 2px;
            background-color: yellow;
        }

        .servicios:hover {
            color: #ccc;
        }

        .feedback-form {
            background-color: #2b2b2b;
            color: #fff;
            padding: 20px;
            border-radius: 10px;
            width: 900px;
            margin: 20px auto;
        }

        .feedback-form textarea {
            background-color: #3b3b3b;
            color: #fff;
            height: 150px;
        }

        .feedback-form .btn-feedback {
            background-color: #3b3b3b;
            color: #fff;
            border: none;
        }

        .feedback-form .btn-feedback:hover {
            background-color: #5b5b5b;
        }

        .feedback-form .btn-feedback:focus {
            box-shadow: none;
        }

        .feedback-form .btn-smiley,
        .feedback-form .btn-sad {
            background-color: #3b3b3b;
            color: #fff;
            border: none;
        }

        .feedback-form .btn-smiley:hover,
        .feedback-form .btn-sad:hover {
            background-color: #5b5b5b;
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
                        <a class="nav-link active" aria-current="page" href="{{ url('/Inicio') }}">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('reservas') }}">Reservas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/Ofertas') }}">Ofertas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/Conctactanos') }}">Contáctanos</a>
                    </li>
                </ul>
            </div>
            <div class="d-flex">
                <button class="btn btn-outline-light me-2" type="button"
                    onclick="window.location.href='{{ url('/InicioSesion') }}'">Iniciar Sesión</button>
                <button class="btn btn-outline-light" type="button">Registrarse</button>
            </div>
        </div>
    </nav>

    <!-- Contenido de la página -->
    <div class="fondo">
        <div class="content" style="font-family: Bonheur Royale; font-size: 15px;">
            <h1 class="text-center mt-5" style="font-family: 'Poppins', sans-serif; font-size: 60px; color: #000;">Hotel
                Starfish</h1>
        </div>
        <div class="content" style="display: flex; justify-content: center; align-items: center; text-align: justify;">
            <h1 class="mt-5" style="font-family: Bonheur Royale; font-size: 27px; color: #000; max-width: 970px;">
                Bienvenido al Hotel StarFish, un oasis de tranquilidad y lujo situado en la costa más deslumbrante.
                Nuestro
                hotel combina la elegancia moderna con la belleza natural del entorno marino, creando una experiencia
                inolvidable para todos nuestros huéspedes. Con vistas panorámicas al océano, habitaciones exquisitamente
                decoradas y una atención al cliente de primera clase, el Hotel StarFish es el lugar perfecto para unas
                vacaciones de ensueño. Disfrute de nuestras exclusivas instalaciones, que incluyen un spa de lujo,
                piscinas
                infinitas, y una selección de restaurantes gourmet que ofrecen lo mejor de la cocina local e
                internacional.
                Ya sea que esté aquí para relajarse en nuestras playas privadas, explorar la vibrante vida marina o
                simplemente disfrutar de un refugio sereno lejos del bullicio diario, el Hotel StarFish promete una
                estancia
                llena de momentos mágicos y recuerdos inolvidables.
            </h1>
        </div>


        <div class="container-fluid mt-4 mb-4">
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="imagenes/imagenca1.jpg" class="d-block w-100" alt="Imagen 1">
                    </div>
                    <div class="carousel-item">
                        <img src="imagenes/imagenca2.jpg" class="d-block w-100" alt="Imagen 2">
                    </div>
                    <div class="carousel-item">
                        <img src="imagenes/imagenca3.jpg" class="d-block w-100" alt="Imagen 3">
                    </div>
                </div>
            </div>
        </div><br><br>
    </div>

    <div class="servicios">
        Servicios

    </div>

    <br><br>

    <div class="fondo2">

        <div class="container cards-container">
            <div class="card">
                <div class="card-title">Rooftop Bar</div>
                <img src="imagenes/ROFBAR.jpg" alt="Rooftop Bar">
                <div class="card-description">Disfruta de vistas espectaculares y cócteles únicos en nuestro vibrante
                    rooftop bar, el lugar perfecto para relajarte con amigos y disfrutar del ambiente nocturno.</div>
            </div>

            <div class="card">
                <div class="card-title">Restaurante </div>
                <img src="imagenes/Bar.jpg" alt="Restaurante Gourmet">
                <div class="card-description">Disfrute de una experiencia culinaria inolvidable en nuestro restaurante
                    gourmet, con platos que destacan lo mejor de la cocina local e internacional.</div>
            </div>
            <div class="card">
                <div class="card-title">Habitación de Lujo</div>
                <img src="imagenes/Habitaciones.jpg" alt="Habitación de Lujo">
                <div class="card-description">Disfruta de una estancia de lujo en nuestras habitaciones, diseñadas para
                    tu
                    confort con vistas impresionantes y servicios exclusivos.</div>
            </div>
            <div class="card">
                <div class="card-title">SPA</div>
                <img src="imagenes/SPA.jpg" alt="Spa de Lujo">
                <div class="card-description">Sumérgete en la relajación total en nuestro exclusivo spa, donde podrás
                    disfrutar de una variedad de tratamientos rejuvenecedores y terapias de bienestar, todo en un
                    ambiente
                    sereno y lujoso.</div>
            </div>

            <div class="card">
                <div class="card-title">Vistas Espectaculares</div>
                <img src="imagenes/Playa.jpg" alt="Vistas Espectaculares">
                <div class="card-description">Déjate maravillar por las vistas impresionantes que rodean nuestro hotel,
                    desde majestuosos paisajes marinos hasta panorámicas de montañas. Un verdadero deleite para los
                    sentidos
                    que hará de tu estancia una experiencia inolvidable.</div>
            </div>

            <div class="card">
                <div class="card-title">Espacios Cómodos en la Playa</div>
                <img src="imagenes/Espacios.jpg" alt="Espacios Cómodos en la Playa">
                <div class="card-description">Relájate en nuestros exclusivos espacios frente al mar, equipados con
                    cómodas
                    tumbonas y sombrillas. Disfruta del sol, la brisa marina y el sonido de las olas mientras te
                    sumerges en
                    el confort y la tranquilidad de la playa.</div>
            </div>

        </div>

        <div class="feedback-form">
            <h5>Send Feedback</h5>
            <div class="form-group">
                <textarea class="form-control" rows="3" placeholder="Your feedback..."></textarea>
            </div>
            <div class="form-group">
                <button class="btn btn-smiley"><i class="far fa-smile"></i></button>
                <button class="btn btn-sad"><i class="far fa-frown"></i></button>
                <button class="btn btn-feedback float-right"><i class="fas fa-paper-plane"></i></button>
            </div>
        </div>
    </div>
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
                <a href="{{ url('/Inicio') }}">Inicio</a>
                <span>|</span>
                <a href="{{ route('reservas') }}">Reservas</a>
                <span>|</span>
                <a href="{{ url('/Ofertas') }}">Ofertas</a>
                <span>|</span>
                <a href="{{ url('/Conctactanos') }}">Contáctanos</a>
            </div>
            <div class="address">
            </div>
            <div class="copyright">
                © 2022 Your Company. All rights reserved.
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>