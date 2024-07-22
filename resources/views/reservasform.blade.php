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

        .btn-outline-light {
            color: #fff;
            border-color: #fff;
        }

        .btn-outline-light:hover {
            color: #000;
            background-color: #fff;
            border-color: #fff;
        }

        .content {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;

            background-size: cover;
            background-position: center;
        }

        .form-container {
            display: flex;
            max-width: 1200px;
            width: 100%;
            background-color: rgba(255, 255, 255, 0.9);
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .form-container img {
            width: 50%;
            object-fit: cover;
        }

        .form-content {
            padding: 20px;
            width: 50%;
        }

        .form-content h2 {
            font-family: 'Times New Roman', Times, serif;
            font-weight: bold;
            margin-bottom: 20px;
            text-align: center;
        }

        .form-content label {
            margin-top: 10px;
        }

        .form-content input,
        .form-content select {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            margin-bottom: 15px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        .form-content button {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .form-content button:hover {
            background-color: #0056b3;
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
    </div><br><br>
    <h2 class="font-bold text-center text-4xl text-slate-700 font-display">
        Formulario de Reserva
    </h2><br>


    <div class="content"><br><br>
        <div class="form-container">
            <img src="imagenes/imgreservas.jpg" alt="Hotel Image">
            <div class="form-content">
                <h2>Datos Personales</h2>
                <form action="{{ url('/reservar') }}" method="POST">
                    @csrf
                    <label for="nombres">Nombre:</label>
                    <input type="text" id="nombres" name="nombres" required>

                    <label for="apellidos">Apellido:</label>
                    <input type="text" id="apellidos" name="apellidos" required>

                    <label for="direccion">Dirección:</label>
                    <input type="text" id="direccion" name="direccion" required>

                    <label for="telefono">Teléfono:</label>
                    <input type="tel" id="telefono" name="telefono" required>

                    <label for="ingreso">Ingreso:</label>
                    <input type="date" id="ingreso" name="ingreso" required>

                    <label for="salida">Salida:</label>
                    <input type="date" id="salida" name="salida" required>

                    <label for="tipohabitacion">Tipo Habitación:</label>
                    <select id="tipohabitacion" name="tipohabitacion" required>
                        <option value="" disabled selected>Seleccione el tipo de habitación</option>
                        <option value="simple">Simple</option>
                        <option value="doble">Doble</option>
                        <option value="suite">Suite</option>
                    </select>

                    <label for="nrohabitaciones">Nro. Habitaciones:</label>
                    <select id="nrohabitaciones" name="nrohabitaciones" required>
                        <option value="" disabled selected>Seleccione el número de habitaciones</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select>

                    <label for="tarifa">Tarifa:</label>
                    <input type="text" id="tarifa" name="tarifa" required>

                    <label for="metodopago">Método de Pago:</label>
                    <select id="metodopago" name="metodopago" required>
                        <option value="" disabled selected>Seleccione el método de pago</option>
                        <option value="tarjeta">Tarjeta de Crédito</option>
                        <option value="paypal">PayPal</option>
                        <option value="transferencia">Transferencia Bancaria</option>
                    </select>

                    <button type="submit">Reservar</button>
                </form>
            </div>
        </div>
    </div><br>


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