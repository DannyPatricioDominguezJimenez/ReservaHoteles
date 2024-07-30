<!-- Componente de registro -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>Registro</title>
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
    </style>
</head>

<body>
    <section class="bg-white dark:bg-gray-900">
        <div class="flex justify-center min-h-screen">
        <div class="hidden bg-cover lg:block lg:w-2/5"
     style="background-image: url('{{ asset('imagenes/iniciosesion.jpg') }}');">
</div>



            <div class="flex items-center w-full max-w-3xl p-8 mx-auto lg:px-12 lg:w-3/5">
                <div class="w-full">
                    
                    <h1 class="text-2xl font-semibold tracking-wider text-gray-800 capitalize dark:text-white">
                        Hotel Starfish
                    </h1>

                    <p class="mt-4 text-gray-500 dark:text-gray-400">
                        ¡Prepárate para verificar tu cuenta personal y comenzar a configurar tu perfil!
                    </p>

                    <form method="post" action="{{ route('registro.store') }}"
                        class="grid grid-cols-1 gap-6 mt-8 md:grid-cols-2">
                        @csrf
                        <div>
                            <label class="block mb-2 text-sm text-gray-600 dark:text-gray-200">Nombre</label>
                            <input type="text" id="nombre" name="nombre" required
                                class="block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-md dark:placeholder-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40">
                        </div>

                        <div>
                            <label class="block mb-2 text-sm text-gray-600 dark:text-gray-200">Apellido</label>
                            <input type="text" id="apellido" name="apellido" required
                                class="block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-md dark:placeholder-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40">
                        </div>

                        <div>
                            <label class="block mb-2 text-sm text-gray-600 dark:text-gray-200">Cédula</label>
                            <input type="text" id="cedula" name="cedula" required
                                class="block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-md dark:placeholder-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40">
                        </div>

                        <div>
                            <label class="block mb-2 text-sm text-gray-600 dark:text-gray-200">Fecha de
                                Nacimiento</label>
                            <input type="date" id="fechanacimiento" name="fechanacimiento" required
                                class="block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-md dark:placeholder-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40">
                        </div>

                        <div>
                            <label class="block mb-2 text-sm text-gray-600 dark:text-gray-200">Email</label>
                            <input type="email" id="email" name="email" required
                                class="block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-md dark:placeholder-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40">
                        </div>

                        <div>
                            <label class="block mb-2 text-sm text-gray-600 dark:text-gray-200">Contraseña</label>
                            <input type="password" id="password" name="password" required
                                class="block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-md dark:placeholder-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40">
                        </div>

                      

                        <button
                            class="flex items-center justify-between w-full px-6 py-3 text-sm tracking-wide text-white capitalize transition-colors duration-300 transform bg-blue-500 rounded-md hover:bg-blue-400 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-50">
                            <span>Registrarse</span>

                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 rtl:-scale-x-100" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                    clip-rule="evenodd" />
                            </svg>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>
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
            <a href="{{ route('inicio') }}">Inicio</a>
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
