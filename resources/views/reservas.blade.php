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
            background-image: url('imagenes/Fondo.jpg');
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

        .room-card {
            margin-bottom: 30px;
            height: 100%;
            display: flex;
            flex-direction: column;
        }

        .room-card .card-img-carousel {
            height: 200px;
            object-fit: cover;
            border-top-left-radius: 8px;
            border-top-right-radius: 8px;
        }

        .room-card .card-body {
            background-color: #fff;
            color: #000;
            border-radius: 0 0 8px 8px;
            flex-grow: 1;
        }

        .room-card .card-body h5 {
            font-weight: bold;
        }

        .room-card .card-body p {
            margin: 5px 0;
        }

        .carousel-item img {
            height: 200px;
            object-fit: cover;
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
                        <a class="nav-link" href="{{ url('/Inicio') }}">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('reservas') }}">Reservas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/Ofertas') }}">Ofertas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/Conctactanos') }}">Contáctanos</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <!-- Contenido de la página -->
    <div class="content">
        <div class="banner-content">
            <h1 class="mt-5" style="font-family: 'Bonheur Royale', cursive; font-size: 3rem;">Bienvenido al Hotel
                Starfish</h1>
            <p style="font-family: 'Bonheur Royale', cursive; font-size: 1.5rem;">"Elige tu habitación".</p>
        </div>
        <div class="content">
            <div class="container mt-5">
                <div class="row">
                    <!-- Habitación Superior -->
                    <div class="col-md-4">
                        <div class="card room-card h-100">
                            <div id="carouselHabitacion1" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="habitacionesimg/habitacion1.jpeg"
                                            class="card-img-top card-img-carousel" alt="Habitación Superior">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="habitacionesimg/habitacion2.jpeg"
                                            class="card-img-top card-img-carousel" alt="Habitación Superior">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="habitacionesimg/habitacion3.jpeg"
                                            class="card-img-top card-img-carousel" alt="Habitación Superior">
                                    </div>
                                    <!-- Agrega más elementos carousel-item según sea necesario -->
                                </div>
                                <button class="carousel-control-prev" type="button"
                                    data-bs-target="#carouselHabitacion1" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button"
                                    data-bs-target="#carouselHabitacion1" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Habitación Superior</h5>
                                <p><strong>Tarifa:</strong> $20</p>
                                <p><strong>Estado:</strong> Disponible</p>
                                <ul>
                                    <li>Reserva ahora, paga después</li>
                                    <li>Servicio de aparcacoches gratuito</li>
                                    <li>Wi-Fi gratis</li>
                                    <li>Desayuno continental gratis</li>
                                    <li>Duerme 2</li>
                                    <li>1 cama de matrimonio</li>
                                </ul>
                                <a href="{{ route('reservasform') }}" class="btn btn-primary">Reservar</a>




                            </div>
                        </div>
                    </div>

                    <!-- Cuarto Familiar -->
                    <div class="col-md-4">
                        <div class="card room-card h-100">
                            <div id="carouselCuartoFamiliar" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="habitacionesimg/habitacion2.jpeg"
                                            class="card-img-top card-img-carousel" alt="Cuarto Familiar">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="habitacionesimg/habitacion4.jpg"
                                            class="card-img-top card-img-carousel" alt="Cuarto Familiar">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="habitacionesimg/habitacion1.jpeg"
                                            class="card-img-top card-img-carousel" alt="Cuarto Familiar">
                                    </div>
                                    <!-- Agrega más elementos carousel-item según sea necesario -->
                                </div>
                                <button class="carousel-control-prev" type="button"
                                    data-bs-target="#carouselCuartoFamiliar" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button"
                                    data-bs-target="#carouselCuartoFamiliar" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Cuarto Familiar</h5>
                                <p><strong>Tarifa:</strong> $35</p>
                                <p><strong>Estado:</strong> Disponible</p>
                                <ul>
                                    <li>Reserva ahora, paga después</li>
                                    <li>Wi-Fi gratis</li>
                                    <li>Desayuno continental gratis</li>
                                    <li>Duerme 4</li>
                                    <li>2 camas tamaño queen</li>
                                </ul>
                                <a href="{{ route('reservasform') }}" class="btn btn-primary">Reservar</a>

                            </div>
                        </div>
                    </div>

                    <!-- Habitación Doble Superior -->
                    <div class="col-md-4">
                        <div class="card room-card h-100">
                            <div id="carouselHabitacionDobleSuperior" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="habitacionesimg/habitacion3.jpeg"
                                            class="card-img-top card-img-carousel" alt="Habitación Doble Superior">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="habitacionesimg/habitacion5.jpeg"
                                            class="card-img-top card-img-carousel" alt="Habitación Doble Superior">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="habitacionesimg/habitacion6.jpeg"
                                            class="card-img-top card-img-carousel" alt="Habitación Doble Superior">
                                    </div>
                                    <!-- Agrega más elementos carousel-item según sea necesario -->
                                </div>
                                <button class="carousel-control-prev" type="button"
                                    data-bs-target="#carouselHabitacionDobleSuperior" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button"
                                    data-bs-target="#carouselHabitacionDobleSuperior" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Habitación Doble Superior</h5>
                                <p><strong>Tarifa:</strong> $56</p>
                                <p><strong>Estado:</strong> Disponible</p>
                                <ul>
                                    <li>Reserva ahora, paga después</li>
                                    <li>Wi-Fi gratis</li>
                                    <li>Desayuno continental gratis</li>
                                    <li>Duerme 2</li>
                                    <li>2 camas tamaño queen</li>
                                </ul>
                                <a href="{{ route('reservasform') }}" class="btn btn-primary">Reservar</a>

                            </div>
                        </div>
                    </div>

                    <!-- Habitación Deluxe -->
                    <div class="col-md-4"><br>
                        <div class="card room-card h-100">
                            <div id="carouselHabitacionDeluxe" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="habitacionesimg/habitacion5.jpeg"
                                            class="card-img-top card-img-carousel" alt="Habitación Deluxe">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="habitacionesimg/habitacion2.jpeg"
                                            class="card-img-top card-img-carousel" alt="Habitación Deluxe">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="habitacionesimg/habitacion4.jpg"
                                            class="card-img-top card-img-carousel" alt="Habitación Deluxe">
                                    </div>
                                    <!-- Agrega más elementos carousel-item según sea necesario -->
                                </div>
                                <button class="carousel-control-prev" type="button"
                                    data-bs-target="#carouselHabitacionDeluxe" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button"
                                    data-bs-target="#carouselHabitacionDeluxe" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Habitación Deluxe</h5>
                                <p><strong>Tarifa:</strong> $75</p>
                                <p><strong>Estado:</strong> Disponible</p>
                                <ul>
                                    <li>Reserva ahora, paga después</li>
                                    <li>Wi-Fi gratis</li>
                                    <li>Desayuno continental gratis</li>
                                    <li>Duerme 2</li>
                                    <li>Vistas al mar</li>
                                </ul>
                                <a href="{{ route('reservasform') }}" class="btn btn-primary">Reservar</a>

                            </div>
                        </div>
                    </div>

                    <!-- Suite Presidencial -->
                    <div class="col-md-4"><br>
                        <div class="card room-card h-100">
                            <div id="carouselSuitePresidencial" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="habitacionesimg/habitacion1.jpeg"
                                            class="card-img-top card-img-carousel" alt="Suite Presidencial">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="habitacionesimg/habitacion2.jpeg"
                                            class="card-img-top card-img-carousel" alt="Suite Presidencial">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="habitacionesimg/habitacion3.jpeg"
                                            class="card-img-top card-img-carousel" alt="Suite Presidencial">
                                    </div>
                                    <!-- Agrega más elementos carousel-item según sea necesario -->
                                </div>
                                <button class="carousel-control-prev" type="button"
                                    data-bs-target="#carouselSuitePresidencial" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button"
                                    data-bs-target="#carouselSuitePresidencial" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Suite Presidencial</h5>
                                <p><strong>Tarifa:</strong> $120</p>
                                <p><strong>Estado:</strong> Disponible</p>
                                <ul>
                                    <li>Reserva ahora, paga después</li>
                                    <li>Servicio de mayordomo privado</li>
                                    <li>Desayuno gourmet incluido</li>
                                    <li>Acceso exclusivo al spa</li>
                                    <li>Vistas panorámicas al mar</li>
                                </ul>
                                <a href="{{ route('reservasform') }}" class="btn btn-primary">Reservar</a>

                            </div>
                        </div>
                    </div>

                    <!-- Otra habitación adicional -->
                    <div class="col-md-4"><br>
                        <div class="card room-card h-100">
                            <div id="carouselOtraHabitacion" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="habitacionesimg/habitacion6.jpeg"
                                            class="card-img-top card-img-carousel" alt="Otra Habitación">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="habitacionesimg/habitacion5.jpeg"
                                            class="card-img-top card-img-carousel" alt="Otra Habitación">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="habitacionesimg/habitacion4.jpg"
                                            class="card-img-top card-img-carousel" alt="Otra Habitación">
                                    </div>
                                    <!-- Agrega más elementos carousel-item según sea necesario -->
                                </div>
                                <button class="carousel-control-prev" type="button"
                                    data-bs-target="#carouselOtraHabitacion" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button"
                                    data-bs-target="#carouselOtraHabitacion" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Otra Habitación</h5>
                                <p><strong>Tarifa:</strong> $90</p>
                                <p><strong>Estado:</strong> Disponible</p>
                                <ul>
                                    <li>Reserva ahora, paga después</li>
                                    <li>Wi-Fi gratis</li>
                                    <li>Desayuno continental gratis</li>
                                    <li>Duerme 3</li>
                                    <li>Vistas a la ciudad</li>
                                </ul>
                                <a href="{{ route('reservasform') }}" class="btn btn-primary">Reservar</a>

                            </div>
                        </div>
                    </div><br>


                </div><br>
            </div>
        </div><br>



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
</body>

</html>