<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <title>Document</title>
    <style>
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

        h2 {
            text-align: center;
        }

        .services-section {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            margin-bottom: 40px;
        }

        .service {
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 20px;
            margin: 10px;
            width: 250px;
            text-align: center;
        }

        .service i {
            font-size: 2em;
            margin-bottom: 10px;
        }

        .service h3 {
            font-size: 1.2em;
            margin: 10px 0;
        }
    </style>


</head>

<body>
    <div class="bg-gold-400 border-b-2 shadow-md border-gray-100 pb-5">
        <div class="max-w-7xl mx-auto my-5 px-4 sm:px-6">
            <div
                class="flex flex-col-reverse md:flex-row min-w-full py-6 space-y-8 justify-center md:justify-between md:space-x-10">
                <input id="search"
                    class="flex leading-none focus:outline-none border-b-2 hover:border-b-3 border-red-800 w-5/6 mt-12 mx-auto md:w-1/4 md:mt-0 md:mx-0"
                    type="text" placeholder="Search...">
                <a class="flex-1 md:self-start" href="#">
                    <div class="flex justify-center">
                        <div class="flex justify-center items-center">
                            <span
                                class="pt-1 mx-3 whitespace-nowrap text-4xl italic font-light text-red-700 hover:text-gray-900">Hotel
                                Starfish</span>
                        </div>
                    </div>
                </a>
                <div class="flex justify-around">
                    <div class="flex justify-end">

                        <a class="whitespace-nowrap text-base text-gray-500 hover:text-gray-900">
                            <img class="m-1 inline-block h-5 w-5 rounded-full ring-2 ring-white"
                                src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Profile_avatar_placeholder_large.png"
                                alt="">
                            <button class="btn btn-outline-light me-2" type="button"
                                onclick="window.location.href='{{ url('/InicioSesion') }}'">Iniciar Sesión</button>
                        </a>
                        <a class="mx-4 whitespace-nowrap text-base text-red-800 hover:text-gray-900" href="#">
                            <button class="btn btn-outline-light" type="button">Registrarse</button>
                        </a>
                    </div>
                    <div class="-my-2 md:hidden">
                        <button type="button"
                            class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-900 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500"
                            aria-expanded="false">
                            <span class="sr-only">Open menu</span>
                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 6h16M4 12h16M4 18h16"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <nav id="bar" class="flex justify-center">
            <div class="flex flex-col md:flex-row justify-center md:space-y-0 my-4 space-y-4 text-center text-gray-500">
                <a class="nav-link active" aria-current="page" href="{{ url('/Inicio') }}">Inicio</a>

                <a href="{{ route('reservas') }}" class="mx-8 hover:text-red-900">Reservas</a>
                <a href="{{ url('/Ofertas') }}" class="mx-8 hover:text-red-900">Ofertas</a>
                <a href="{{ url('/Conctactanos') }}" class="mx-8 hover:text-red-900">Contactanos</a>
            </div>
        </nav>
    </div>
    <!-- component -->
    <!-- component -->

    <head>
        <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
        <script>
            var cont = 0;
            var xx;

            function loopSlider() {
                xx = setInterval(function () {
                    switch (cont) {
                        case 0: {
                            $("#slider-1").fadeOut(400);
                            $("#slider-2").delay(400).fadeIn(400);
                            $("#sButton1").removeClass("bg-purple-800");
                            $("#sButton2").addClass("bg-purple-800");
                            cont = 1;
                            break;
                        }
                        case 1: {
                            $("#slider-2").fadeOut(400);
                            $("#slider-1").delay(400).fadeIn(400);
                            $("#sButton2").removeClass("bg-purple-800");
                            $("#sButton1").addClass("bg-purple-800");
                            cont = 0;
                            break;
                        }
                    }
                }, 8000);
            }

            function reinitLoop(time) {
                clearInterval(xx);
                setTimeout(loopSlider, time);
            }

            function sliderButton1() {
                $("#slider-2").fadeOut(400);
                $("#slider-1").delay(400).fadeIn(400);
                $("#sButton2").removeClass("bg-purple-800");
                $("#sButton1").addClass("bg-purple-800");
                reinitLoop(4000);
                cont = 0;
            }

            function sliderButton2() {
                $("#slider-1").fadeOut(400);
                $("#slider-2").delay(400).fadeIn(400);
                $("#sButton1").removeClass("bg-purple-800");
                $("#sButton2").addClass("bg-purple-800");
                reinitLoop(4000);
                cont = 1;
            }

            $(window).ready(function () {
                $("#slider-2").hide();
                $("#sButton1").addClass("bg-purple-800");
                loopSlider();
            });
        </script>
    </head>

    <body>
        <div class="sliderAx h-auto">
            <div id="slider-1" class="container mx-auto">
                <div class="bg-cover bg-contain h-96 text-white py-24 px-10 object-fill"
                    style="background-image: url('/habitacionesimg/Deluxe.jpg')">
                    <div class="md:w-1/2">
                        <p class="font-bold text-sm uppercase">Habitaciones</p>
                        <p class="text-3xl font-bold">Hotel Starfish</p>
                    </div>
                </div> <!-- container -->
                <br>
            </div>

            <div id="slider-2" class="container mx-auto">
                <div class="bg-cover bg-contain h-96 text-white py-24 px-10 object-fill"
                    style="background-image:url('/habitacionesimg/Deluxe2.jpg')">
                    <p class="font-bold text-sm uppercase">Habitaciones</p>
                    <p class="text-3xl font-bold">Hotel Starfish</p>
                </div> <!-- container -->
                <br>
            </div>
        </div>
        <div class="flex justify-between w-12 mx-auto pb-2">
            <button id="sButton1" onclick="sliderButton1()" class="bg-purple-400 rounded-full w-4 pb-2"></button>
            <button id="sButton2" onclick="sliderButton2()" class="bg-purple-400 rounded-full w-4 p-2"></button>
        </div>



        <!-- component -->
        <!--
  Welcome to Tailwind Play, the official Tailwind CSS playground!

  Everything here works just like it does when you're running Tailwind locally
  with a real build pipeline. You can customize your config file, use features
  like `@apply`, or even add third-party plugins.

  Feel free to play with this example if you're just learning, or trash it and
  start from scratch if you know enough to be dangerous. Have fun!
-->
        <div class="relative flex min-h-screen flex-col justify-center overflow-hidden bg-slate-100 py-6 sm:py-12">
            <div class="min-h-28">
                <div id="habitaciones-suite" class="max-w-screen-lg mx-auto py-4">
                    <h2 class="font-bold text-center text-6xl text-slate-700 font-display">
                        SUITE
                    </h2>



                    <!-- Habitación Suite -->
                    <p class="text-center mt-8 font-medium text-slate-500">Hotel Starfish</p>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-8">
                        <div class="bg-white shadow rounded-lg overflow-hidden">
                            <img src="habitacionesimg/habitacion1.jpeg" class="object-cover h-52 w-full"
                                alt="Habitación Suite">
                            <div class="p-6">
                                <h3 class="mt-3 font-bold text-lg pb-4 border-b border-slate-300">
                                    <a href="{{ route('reservasform') }}" class="hover:underline">
                                        Habitación Suite
                                    </a>
                                </h3>
                                <p><strong>Tarifa:</strong> $56</p>
                                <p><strong>Estado:</strong> Disponible</p>
                                <ul class="list-disc list-inside mb-4">
                                    <li>Reserva ahora, paga después</li>
                                    <li>Wi-Fi gratis</li>
                                    <li>Desayuno continental gratis</li>
                                    <li>Duerme 2</li>
                                    <li>2 camas tamaño queen</li>
                                </ul>
                                <div class="flex justify-center">
                                    <a href="{{ route('reservasform') }}"
                                        class="btn btn-primary bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 transition duration-300 ease-in-out">
                                        Reservar
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="bg-white shadow rounded-lg overflow-hidden">
                            <img src="habitacionesimg/Suite2.jpg" class="object-cover h-52 w-full"
                                alt="Habitación Suite">
                            <div class="p-6">
                                <h3 class="mt-3 font-bold text-lg pb-4 border-b border-slate-300">
                                    <a href="{{ route('reservasform') }}" class="hover:underline">
                                        Habitación Suite Secundaria
                                    </a>
                                </h3>
                                <p><strong>Tarifa:</strong> $100</p>
                                <p><strong>Estado:</strong> Disponible</p>
                                <ul class="list-disc list-inside mb-4">
                                    <li>Reserva ahora, paga después</li>
                                    <li>Wi-Fi gratis</li>
                                    <li>Desayuno continental gratis</li>
                                    <li>Duerme 2</li>
                                    <li>2 camas tamaño queen</li>
                                </ul>
                                <div class="flex justify-center">
                                    <a href="{{ route('reservasform') }}"
                                        class="btn btn-primary bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 transition duration-300 ease-in-out">
                                        Reservar
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="bg-white shadow rounded-lg overflow-hidden">
                            <img src="habitacionesimg/Suite3.jpg" class="object-cover h-52 w-full"
                                alt="Habitación Suite">
                            <div class="p-6">
                                <h3 class="mt-3 font-bold text-lg pb-4 border-b border-slate-300">
                                    <a href="{{ route('reservasform') }}" class="hover:underline">
                                        Habitación Suite Secundaria
                                    </a>
                                </h3>
                                <p><strong>Tarifa:</strong> $90</p>
                                <p><strong>Estado:</strong> Disponible</p>
                                <ul class="list-disc list-inside mb-4">
                                    <li>Reserva ahora, paga después</li>
                                    <li>Wi-Fi gratis</li>
                                    <li>Desayuno continental gratis</li>
                                    <li>Duerme 2</li>
                                    <li>2 camas tamaño queen</li>
                                </ul>
                                <div class="flex justify-center">
                                    <a href="{{ route('reservasform') }}"
                                        class="btn btn-primary bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 transition duration-300 ease-in-out">
                                        Reservar
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h2 class="mt-20 mb-6 text-lg font-semibold text-center">SERVICIOS INCLUIDOS</h2>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        <div class="bg-white shadow rounded-lg overflow-hidden">
                            <div class="p-6">
                                <i class="fas fa-coffee text-3xl mb-4"></i>
                                <h3 class="font-semibold text-lg pb-2">DESAYUNO</h3>
                                <p class="text-sm">Desayunar en el hotel supone un ahorro de tiempo muy importante,
                                    genera comodidad y facilita la experiencia de los huéspedes.</p>
                            </div>
                        </div>
                        <div class="bg-white shadow rounded-lg overflow-hidden">
                            <div class="p-6">
                                <i class="fas fa-concierge-bell text-3xl mb-4"></i>
                                <h3 class="font-semibold text-lg pb-2">CONSERJE</h3>
                                <p class="text-sm">Nuestros conserjes son el primer punto de contacto de nuestros
                                    huéspedes y siempre están atentos para facilitar todas sus necesidades.</p>
                            </div>
                        </div>
                        <div class="bg-white shadow rounded-lg overflow-hidden">
                            <div class="p-6">
                                <i class="fas fa-shield-virus text-3xl mb-4"></i>
                                <h3 class="font-semibold text-lg pb-2">BIOSEGURIDAD</h3>
                                <p class="text-sm">Respetamos los protocolos impuestos por las autoridades locales así
                                    como el cumplimiento de las normas de bioseguridad.</p>
                            </div>
                        </div>
                        <div class="bg-white shadow rounded-lg overflow-hidden">
                            <div class="p-6">
                                <i class="fas fa-lock text-3xl mb-4"></i>
                                <h3 class="font-semibold text-lg pb-2">CAJA FUERTE</h3>
                                <p class="text-sm">Las cajas fuertes en las habitaciones tienen la finalidad de
                                    salvaguardar los objetos de valor o enseres como dinero, documentos privados, joyas
                                    y objetos tecnológicos de manera confidencial.</p>
                            </div>
                        </div>

                        <div class="bg-white shadow rounded-lg overflow-hidden">
                            <div class="p-6">
                                <i class="fas fa-user-shield text-3xl mb-4"></i>
                                <h3 class="font-semibold text-lg pb-2">GUARDIANÍA</h3>
                                <p class="text-sm">Es parte de nuestra filosofía crear un ambiente seguro y confortable
                                    para nuestros huéspedes, brindándoles la paz y tranquilidad para disfrutar su
                                    estadía.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Servicios Adicionales -->
                    <h2 class="mt-12 mb-6 text-lg font-semibold text-center">SERVICIOS ADICIONALES</h2>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        <div class="bg-white shadow rounded-lg overflow-hidden">
                            <div class="p-6">
                                <i class="fas fa-soap text-3xl mb-4"></i>
                                <h3 class="font-semibold text-lg pb-2">LAVANDERÍA</h3>
                                <p class="text-sm">Los servicios de lavandería están disponibles cuidando con la más
                                    alta calidad las prendas de nuestros huéspedes.</p>
                            </div>
                        </div>
                        <div class="bg-white shadow rounded-lg overflow-hidden">
                            <div class="p-6">
                                <i class="fas fa-car-side text-3xl mb-4"></i>
                                <h3 class="font-semibold text-lg pb-2">TRANSPORTE VIP</h3>
                                <p class="text-sm">La prestación del servicio de transporte VIP mejora la experiencia y
                                    la seguridad de los huéspedes al momento de viajar a sus destinos.</p>
                            </div>
                        </div>
                        <div class="bg-white shadow rounded-lg overflow-hidden">
                            <div class="p-6">
                                <i class="fas fa-parking text-3xl mb-4"></i>
                                <h3 class="font-semibold text-lg pb-2">PARQUEADERO (OFF SITE)</h3>
                                <p class="text-sm">Coordine las necesidades de estacionamiento directamente para una
                                    máxima comodidad.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="relative flex min-h-screen flex-col justify-center overflow-hidden bg-slate-100 py-6 sm:py-12">
            <div class="min-h-28 ">
                <div id="habitaciones-individuales" class="max-w-screen-lg mx-auto py-4">
                    <h2 class="font-bold text-center text-6xl text-slate-700 font-display">
                        INDIVIDUALES
                    </h2>

                    <p class="text-center mt-4 font-medium text-slate-500">Hotel Starfish</p>
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 mt-20 justify-center">

                        <div class="bg-white shadow rounded-lg overflow-hidden">
                            <img src="habitacionesimg/descarga.jpeg" class="object-cover h-52 w-full"
                                alt="Habitación Suite">
                            <div class="p-6">
                                <h3 class="mt-3 font-bold text-lg pb-4 border-b border-slate-300">
                                    <a href="">
                                        Habitación Individual
                                    </a>
                                </h3>
                                <p><strong>Tarifa:</strong> $56</p>
                                <p><strong>Estado:</strong> Disponible</p>
                                <ul class="list-disc list-inside mb-4">
                                    <li>Reserva ahora, paga después</li>
                                    <li>Wi-Fi gratis</li>
                                    <li>Desayuno continental gratis</li>
                                    <li>Duerme 1</li>
                                    <li>1 cama tamaño individual</li>
                                </ul>
                                <div class="flex justify-center">
                                    <a href="{{ route('reservasform') }}"
                                        class="btn btn-primary bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 transition duration-300 ease-in-out">
                                        Reservar
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="bg-white shadow rounded-lg overflow-hidden">
                            <img src="habitacionesimg/Suite2.jpg" class="object-cover h-52 w-full"
                                alt="Habitación Suite">
                            <div class="p-6">
                                <h3 class="mt-3 font-bold text-lg pb-4 border-b border-slate-300">
                                    <a href="">
                                        Habitación Individual 2
                                    </a>
                                </h3>
                                <p><strong>Tarifa:</strong> $30</p>
                                <p><strong>Estado:</strong> Disponible</p>
                                <ul class="list-disc list-inside mb-4">
                                    <li>Reserva ahora, paga después</li>
                                    <li>Wi-Fi gratis</li>
                                    <li>Desayuno continental gratis</li>
                                    <li>Duerme 1</li>
                                    <li>1 cama tamaño individual</li>
                                </ul>
                                <div class="flex justify-center">
                                    <a href="{{ route('reservasform') }}"
                                        class="btn btn-primary bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 transition duration-300 ease-in-out">
                                        Reservar
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="bg-white shadow rounded-lg overflow-hidden">
                            <img src="habitacionesimg/habitacion4.jpg" class="object-cover h-52 w-full"
                                alt="Habitación Suite">
                            <div class="p-6">
                                <h3 class="mt-3 font-bold text-lg pb-4 border-b border-slate-300">
                                    <a href="">
                                        Habitación Individual 3
                                    </a>
                                </h3>
                                <p><strong>Tarifa:</strong> $40</p>
                                <p><strong>Estado:</strong> Disponible</p>
                                <ul class="list-disc list-inside mb-4">
                                    <li>Reserva ahora, paga después</li>
                                    <li>Wi-Fi gratis</li>
                                    <li>Desayuno continental gratis</li>
                                    <li>Duerme 1</li>
                                    <li>1 cama tamaño individual</li>
                                </ul>
                                <div class="flex justify-center">
                                    <a href="{{ route('reservasform') }}"
                                        class="btn btn-primary bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 transition duration-300 ease-in-out">
                                        Reservar
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="bg-white shadow rounded-lg overflow-hidden">
                            <img src="habitacionesimg/individual3.jpg" class="object-cover h-52 w-full"
                                alt="Habitación Suite">
                            <div class="p-6">
                                <h3 class="mt-3 font-bold text-lg pb-4 border-b border-slate-300">
                                    <a href="">
                                        Habitación Individual 4
                                    </a>
                                </h3>
                                <p><strong>Tarifa:</strong> $40</p>
                                <p><strong>Estado:</strong> Disponible</p>
                                <ul class="list-disc list-inside mb-4">
                                    <li>Reserva ahora, paga después</li>
                                    <li>Wi-Fi gratis</li>
                                    <li>Desayuno continental gratis</li>
                                    <li>Duerme 1</li>
                                    <li>1 cama tamaño individual</li>
                                </ul>
                                <div class="flex justify-center">
                                    <a href="{{ route('reservasform') }}"
                                        class="btn btn-primary bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 transition duration-300 ease-in-out">
                                        Reservar
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="bg-white shadow rounded-lg overflow-hidden">
                            <img src="habitacionesimg/individual4.jpg" class="object-cover h-52 w-full"
                                alt="Habitación Suite">
                            <div class="p-6">
                                <h3 class="mt-3 font-bold text-lg pb-4 border-b border-slate-300">
                                    <a href="">
                                        Habitación Individual 5
                                    </a>
                                </h3>
                                <p><strong>Tarifa:</strong> $40</p>
                                <p><strong>Estado:</strong> Disponible</p>
                                <ul class="list-disc list-inside mb-4">
                                    <li>Reserva ahora, paga después</li>
                                    <li>Wi-Fi gratis</li>
                                    <li>Desayuno continental gratis</li>
                                    <li>Duerme 1</li>
                                    <li>1 cama tamaño individual</li>
                                </ul>
                                <div class="flex justify-center">
                                    <a href="{{ route('reservasform') }}"
                                        class="btn btn-primary bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 transition duration-300 ease-in-out">
                                        Reservar
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>
                    <h2 class="mt-12 mb-6 text-lg font-semibold text-center">SERVICIOS INCLUIDOS</h2>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        <div class="bg-white shadow rounded-lg overflow-hidden">
                            <div class="p-6">
                                <i class="fas fa-coffee text-3xl mb-4"></i>
                                <h3 class="font-semibold text-lg pb-2">DESAYUNO</h3>
                                <p class="text-sm">Incluye desayuno para empezar el día con energía.</p>
                            </div>
                        </div>
                        <div class="bg-white shadow rounded-lg overflow-hidden">
                            <div class="p-6">
                                <i class="fas fa-wifi text-3xl mb-4"></i>
                                <h3 class="font-semibold text-lg pb-2">WI-FI GRATIS</h3>
                                <p class="text-sm">Acceso gratuito a internet Wi-Fi durante toda la estancia.</p>
                            </div>
                        </div>
                        <div class="bg-white shadow rounded-lg overflow-hidden">
                            <div class="p-6">
                                <i class="fas fa-tv text-3xl mb-4"></i>
                                <h3 class="font-semibold text-lg pb-2">TV CABLE</h3>
                                <p class="text-sm">Disfrute de una variedad de canales de televisión por cable en su
                                    habitación.</p>
                            </div>
                        </div>
                        <div class="bg-white shadow rounded-lg overflow-hidden">
                            <div class="p-6">
                                <i class="fas fa-shower text-3xl mb-4"></i>
                                <h3 class="font-semibold text-lg pb-2">BAÑO PRIVADO</h3>
                                <p class="text-sm">Baño privado equipado con artículos de aseo de calidad.</p>
                            </div>
                        </div>
                        <div class="bg-white shadow rounded-lg overflow-hidden">
                            <div class="p-6">
                                <i class="fas fa-phone-alt text-3xl mb-4"></i>
                                <h3 class="font-semibold text-lg pb-2">TELÉFONO</h3>
                                <p class="text-sm">Servicio de teléfono con llamadas locales gratuitas.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <section>

        </section>


        <div class="relative flex min-h-screen flex-col justify-center overflow-hidden bg-slate-100 py-6 sm:py-12">
            <div class="min-h-28 ">
                <div id="habitaciones-dobles" class="max-w-screen-lg mx-auto py-4">
                    <h2 class="font-bold text-center text-6xl text-slate-700 font-display">
                        DOBLES
                    </h2>
                    <p class="text-center mt-4 font-medium text-slate-500">Hotel Starfish</p>

                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 mt-20 justify-center">

                        <div class="bg-white shadow rounded-lg overflow-hidden">
                            <img src="habitacionesimg/habitacion2.jpeg" class="object-cover h-52 w-full"
                                alt="Habitación Suite">
                            <div class="p-6">
                                <h3 class="mt-3 font-bold text-lg pb-4 border-b border-slate-300">
                                    <a href="#">
                                        Habitación Doble 1
                                    </a>
                                </h3>
                                <p><strong>Tarifa:</strong> $56</p>
                                <p><strong>Estado:</strong> Disponible</p>
                                <ul class="list-disc list-inside mb-4">
                                    <li>Reserva ahora, paga después</li>
                                    <li>Wi-Fi gratis</li>
                                    <li>Desayuno continental gratis</li>
                                    <li>Duerme 2</li>
                                    <li>1 cama tamaño queen</li>
                                </ul>
                                <div class="flex justify-center">
                                    <a href="{{ route('reservasform') }}"
                                        class="btn btn-primary bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 transition duration-300 ease-in-out">
                                        Reservar
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="bg-white shadow rounded-lg overflow-hidden">
                            <img src="habitacionesimg/habitacion5.jpeg" class="object-cover h-52 w-full"
                                alt="Habitación Suite">
                            <div class="p-6">
                                <h3 class="mt-3 font-bold text-lg pb-4 border-b border-slate-300">
                                    <a href="#">
                                        Habitación Doble 2
                                    </a>
                                </h3>
                                <p><strong>Tarifa:</strong> $65</p>
                                <p><strong>Estado:</strong> Disponible</p>
                                <ul class="list-disc list-inside mb-4">
                                    <li>Reserva ahora, paga después</li>
                                    <li>Wi-Fi gratis</li>
                                    <li>Desayuno continental gratis</li>
                                    <li>Duerme 2</li>
                                    <li>2 camas tamaño twin</li>
                                </ul>
                                <div class="flex justify-center">
                                    <a href="{{ route('reservasform') }}"
                                        class="btn btn-primary bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 transition duration-300 ease-in-out">
                                        Reservar
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="bg-white shadow rounded-lg overflow-hidden">
                            <img src="habitacionesimg/doble3.jpg" class="object-cover h-52 w-full"
                                alt="Habitación Suite">
                            <div class="p-6">
                                <h3 class="mt-3 font-bold text-lg pb-4 border-b border-slate-300">
                                    <a href="#">
                                        Habitación Doble 3
                                    </a>
                                </h3>
                                <p><strong>Tarifa:</strong> $80</p>
                                <p><strong>Estado:</strong> Disponible</p>
                                <ul class="list-disc list-inside mb-4">
                                    <li>Reserva ahora, paga después</li>
                                    <li>Wi-Fi gratis</li>
                                    <li>Desayuno continental gratis</li>
                                    <li>Duerme 2</li>
                                    <li>1 cama tamaño king</li>
                                </ul>
                                <div class="flex justify-center">
                                    <a href="{{ route('reservasform') }}"
                                        class="btn btn-primary bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 transition duration-300 ease-in-out">
                                        Reservar
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="bg-white shadow rounded-lg overflow-hidden">
                            <img src="habitacionesimg/doble4.jpg" class="object-cover h-52 w-full"
                                alt="Habitación Suite">
                            <div class="p-6">
                                <h3 class="mt-3 font-bold text-lg pb-4 border-b border-slate-300">
                                    <a href="#">
                                        Habitación Doble 4
                                    </a>
                                </h3>
                                <p><strong>Tarifa:</strong> $80</p>
                                <p><strong>Estado:</strong> Disponible</p>
                                <ul class="list-disc list-inside mb-4">
                                    <li>Reserva ahora, paga después</li>
                                    <li>Wi-Fi gratis</li>
                                    <li>Desayuno continental gratis</li>
                                    <li>Duerme 2</li>
                                    <li>1 cama tamaño king</li>
                                </ul>
                                <div class="flex justify-center">
                                    <a href="{{ route('reservasform') }}"
                                        class="btn btn-primary bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 transition duration-300 ease-in-out">
                                        Reservar
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="bg-white shadow rounded-lg overflow-hidden">
                            <img src="habitacionesimg/doble5.jpg" class="object-cover h-52 w-full"
                                alt="Habitación Suite">
                            <div class="p-6">
                                <h3 class="mt-3 font-bold text-lg pb-4 border-b border-slate-300">
                                    <a href="#">
                                        Habitación Doble 5
                                    </a>
                                </h3>
                                <p><strong>Tarifa:</strong> $80</p>
                                <p><strong>Estado:</strong> Disponible</p>
                                <ul class="list-disc list-inside mb-4">
                                    <li>Reserva ahora, paga después</li>
                                    <li>Wi-Fi gratis</li>
                                    <li>Desayuno continental gratis</li>
                                    <li>Duerme 2</li>
                                    <li>1 cama tamaño king</li>
                                </ul>
                                <div class="flex justify-center">
                                    <a href="{{ route('reservasform') }}"
                                        class="btn btn-primary bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 transition duration-300 ease-in-out">
                                        Reservar
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>
                    <h2 class="mt-12 mb-6 text-lg font-semibold text-center">SERVICIOS INCLUIDOS</h2>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        <div class="bg-white shadow rounded-lg overflow-hidden">
                            <div class="p-6">
                                <i class="fas fa-coffee text-3xl mb-4"></i>
                                <h3 class="font-semibold text-lg pb-2">DESAYUNO</h3>
                                <p class="text-sm">Desayuno para dos personas para empezar el día con energía.</p>
                            </div>
                        </div>
                        <div class="bg-white shadow rounded-lg overflow-hidden">
                            <div class="p-6">
                                <i class="fas fa-wifi text-3xl mb-4"></i>
                                <h3 class="font-semibold text-lg pb-2">WI-FI GRATIS</h3>
                                <p class="text-sm">Acceso gratuito a internet Wi-Fi durante toda la estancia para ambos
                                    huéspedes.</p>
                            </div>
                        </div>
                        <div class="bg-white shadow rounded-lg overflow-hidden">
                            <div class="p-6">
                                <i class="fas fa-tv text-3xl mb-4"></i>
                                <h3 class="font-semibold text-lg pb-2">TV CABLE</h3>
                                <p class="text-sm">Disfrute de una variedad de canales de televisión por cable en la
                                    habitación.</p>
                            </div>
                        </div>
                        <div class="bg-white shadow rounded-lg overflow-hidden">
                            <div class="p-6">
                                <i class="fas fa-shower text-3xl mb-4"></i>
                                <h3 class="font-semibold text-lg pb-2">BAÑO PRIVADO</h3>
                                <p class="text-sm">Baño privado equipado con artículos de aseo de calidad para ambos
                                    huéspedes.</p>
                            </div>
                        </div>
                        <div class="bg-white shadow rounded-lg overflow-hidden">
                            <div class="p-6">
                                <i class="fas fa-phone-alt text-3xl mb-4"></i>
                                <h3 class="font-semibold text-lg pb-2">TELÉFONO</h3>
                                <p class="text-sm">Servicio de teléfono con llamadas locales gratuitas.</p>
                            </div>
                        </div>
                        <div class="bg-white shadow rounded-lg overflow-hidden">
                            <div class="p-6">
                                <i class="fas fa-bed text-3xl mb-4"></i>
                                <h3 class="font-semibold text-lg pb-2">CAMAS DOBLES</h3>
                                <p class="text-sm">Dos camas tamaño queen para mayor comodidad de ambos huéspedes.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>


        <div class="relative flex min-h-screen flex-col justify-center overflow-hidden bg-slate-100 py-6 sm:py-12">
            <div class="min-h-28">
                <div id="habitaciones-cuadruples" class="max-w-screen-lg mx-auto py-4">
                    <h2 class="font-bold text-center text-6xl text-slate-700 font-display">
                        CUÁDRUPLE
                    </h2>
                    <p class="text-center mt-4 font-medium text-slate-500">Hotel Starfish</p>
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 mt-20 justify-center">

                        <div class="bg-white shadow rounded-lg overflow-hidden">
                            <img src="habitacionesimg/cuadruple1.jpg" class="object-cover h-52 w-full"
                                alt="Habitación Cuádruple">
                            <div class="p-6">
                                <h3 class="mt-3 font-bold text-lg pb-4 border-b border-slate-300">
                                    <a href="#">
                                        Habitación Cuádruple 1
                                    </a>
                                </h3>
                                <p><strong>Tarifa:</strong> $120</p>
                                <p><strong>Estado:</strong> Disponible</p>
                                <ul class="list-disc list-inside mb-4">
                                    <li>Reserva ahora, paga después</li>
                                    <li>Wi-Fi gratis</li>
                                    <li>Desayuno continental gratis</li>
                                    <li>Duerme 4</li>
                                    <li>2 camas tamaño queen</li>
                                </ul>
                                <div class="flex justify-center">
                                    <a href="{{ route('reservasform') }}"
                                        class="btn btn-primary bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 transition duration-300 ease-in-out">
                                        Reservar
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="bg-white shadow rounded-lg overflow-hidden">
                            <img src="habitacionesimg/cuadruple2.jpg" class="object-cover h-52 w-full"
                                alt="Habitación Cuádruple">
                            <div class="p-6">
                                <h3 class="mt-3 font-bold text-lg pb-4 border-b border-slate-300">
                                    <a href="#">
                                        Habitación Cuádruple 2
                                    </a>
                                </h3>
                                <p><strong>Tarifa:</strong> $130</p>
                                <p><strong>Estado:</strong> Disponible</p>
                                <ul class="list-disc list-inside mb-4">
                                    <li>Reserva ahora, paga después</li>
                                    <li>Wi-Fi gratis</li>
                                    <li>Desayuno continental gratis</li>
                                    <li>Duerme 4</li>
                                    <li>2 camas tamaño queen</li>
                                </ul>
                                <div class="flex justify-center">
                                    <a href="{{ route('reservasform') }}"
                                        class="btn btn-primary bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 transition duration-300 ease-in-out">
                                        Reservar
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="bg-white shadow rounded-lg overflow-hidden">
                            <img src="habitacionesimg/cuadruple3.jpg" class="object-cover h-52 w-full"
                                alt="Habitación Cuádruple">
                            <div class="p-6">
                                <h3 class="mt-3 font-bold text-lg pb-4 border-b border-slate-300">
                                    <a href="#">
                                        Habitación Cuádruple 3
                                    </a>
                                </h3>
                                <p><strong>Tarifa:</strong> $140</p>
                                <p><strong>Estado:</strong> Disponible</p>
                                <ul class="list-disc list-inside mb-4">
                                    <li>Reserva ahora, paga después</li>
                                    <li>Wi-Fi gratis</li>
                                    <li>Desayuno continental gratis</li>
                                    <li>Duerme 4</li>
                                    <li>2 camas tamaño queen</li>
                                </ul>
                                <div class="flex justify-center">
                                    <a href="{{ route('reservasform') }}"
                                        class="btn btn-primary bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 transition duration-300 ease-in-out">
                                        Reservar
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="bg-white shadow rounded-lg overflow-hidden">
                            <img src="habitacionesimg/cuadruple4.jpg" class="object-cover h-52 w-full"
                                alt="Habitación Cuádruple">
                            <div class="p-6">
                                <h3 class="mt-3 font-bold text-lg pb-4 border-b border-slate-300">
                                    <a href="#">
                                        Habitación Cuádruple 4
                                    </a>
                                </h3>
                                <p><strong>Tarifa:</strong> $140</p>
                                <p><strong>Estado:</strong> Disponible</p>
                                <ul class="list-disc list-inside mb-4">
                                    <li>Reserva ahora, paga después</li>
                                    <li>Wi-Fi gratis</li>
                                    <li>Desayuno continental gratis</li>
                                    <li>Duerme 4</li>
                                    <li>2 camas tamaño queen</li>
                                </ul>
                                <div class="flex justify-center">
                                    <a href="{{ route('reservasform') }}"
                                        class="btn btn-primary bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 transition duration-300 ease-in-out">
                                        Reservar
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>
                    <h2 class="mt-12 mb-6 text-lg font-semibold text-center">SERVICIOS INCLUIDOS</h2>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        <div class="bg-white shadow rounded-lg overflow-hidden">
                            <div class="p-6">
                                <i class="fas fa-coffee text-3xl mb-4"></i>
                                <h3 class="font-semibold text-lg pb-2">DESAYUNO</h3>
                                <p class="text-sm">Desayuno para cuatro personas para empezar el día con energía.</p>
                            </div>
                        </div>
                        <div class="bg-white shadow rounded-lg overflow-hidden">
                            <div class="p-6">
                                <i class="fas fa-wifi text-3xl mb-4"></i>
                                <h3 class="font-semibold text-lg pb-2">WI-FI GRATIS</h3>
                                <p class="text-sm">Acceso gratuito a internet Wi-Fi durante toda la estancia para todos
                                    los huéspedes.</p>
                            </div>
                        </div>
                        <div class="bg-white shadow rounded-lg overflow-hidden">
                            <div class="p-6">
                                <i class="fas fa-tv text-3xl mb-4"></i>
                                <h3 class="font-semibold text-lg pb-2">TV CABLE</h3>
                                <p class="text-sm">Disfrute de una variedad de canales de televisión por cable en la
                                    habitación.</p>
                            </div>
                        </div>
                        <div class="bg-white shadow rounded-lg overflow-hidden">
                            <div class="p-6">
                                <i class="fas fa-shower text-3xl mb-4"></i>
                                <h3 class="font-semibold text-lg pb-2">BAÑO PRIVADO</h3>
                                <p class="text-sm">Baño privado equipado con artículos de aseo de calidad para todos los
                                    huéspedes.</p>
                            </div>
                        </div>
                        <div class="bg-white shadow rounded-lg overflow-hidden">
                            <div class="p-6">
                                <i class="fas fa-phone-alt text-3xl mb-4"></i>
                                <h3 class="font-semibold text-lg pb-2">TELÉFONO</h3>
                                <p class="text-sm">Servicio de teléfono con llamadas locales gratuitas.</p>
                            </div>
                        </div>
                        <div class="bg-white shadow rounded-lg overflow-hidden">
                            <div class="p-6">
                                <i class="fas fa-bed text-3xl mb-4"></i>
                                <h3 class="font-semibold text-lg pb-2">CAMAS QUEEN</h3>
                                <p class="text-sm">Dos camas tamaño queen para mayor comodidad de todos los huéspedes.
                                </p>
                            </div>
                        </div>
                        <div class="bg-white shadow rounded-lg overflow-hidden">
                            <div class="p-6">
                                <i class="fas fa-door-closed text-3xl mb-4"></i>
                                <h3 class="font-semibold text-lg pb-2">ESPACIO PRIVADO</h3>
                                <p class="text-sm">Área separada para cada huésped dentro de la habitación para
                                    privacidad adicional.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>







    </body>

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

</body>

</html>