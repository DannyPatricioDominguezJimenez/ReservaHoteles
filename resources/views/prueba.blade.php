<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>Videos del Canal de YouTube</title>
    <style>
        .video-container {
            margin: 20px 0;
        }

        .video-container img {
            border-radius: 10px;
            transition: transform 0.3s;
        }

        .video-container img:hover {
            transform: scale(1.05);
        }

        .video-container h2 {
            margin-top: 10px;
        }

        .video-container p {
            color: #555;
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
    </style>
</head>

<body>
    <!-- Encabezado del sitio -->
    <div class="bg-gold-400 border-b-2 shadow-md border-gray-100 pb-5">
        <div class="max-w-7xl mx-auto my-5 px-4 sm:px-6">
            <div
                class="flex flex-col-reverse md:flex-row min-w-full py-6 space-y-8 justify-center md:justify-between md:space-x-10">
                <input id="search"
                    class="flex leading-none focus:outline-none border-b-2 hover:border-b-3 border-red-800 w-5/6 mt-12 mx-auto md:w-1/4 md:mt-0 md:mx-0"
                    type="text" >
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
                <a class="nav-link active" aria-current="page" href="{{ route('inicio') }}">Inicio</a>
                <a href="{{ route('reservas') }}" class="mx-8 hover:text-red-900">Reservas</a>
                <a href="{{ url('/Ofertas') }}" class="mx-8 hover:text-red-900">Ofertas</a>
                <a href="{{ url('/Conctactanos') }}" class="mx-8 hover:text-red-900">Contactanos</a>
            </div>
        </nav>
    </div>

    <!-- Banner o imagen principal -->
    <div class="relative w-full h-96">
        <img class="absolute h-full w-full object-cover object-center" src="{{ asset('imagenes/Contactanos.jpg') }}" alt="nature image" />
        <div class="absolute inset-0 h-full w-full bg-black/50"></div>
        <div class="absolute inset-0 flex flex-col justify-center items-center text-center text-white px-4">
            <h2 class="block antialiased tracking-normal font-sans font-semibold leading-[1.3] mb-4 text-3xl lg:text-4xl">Contacto</h2>
        </div>
    </div>

    <!-- Sección de contacto -->
    <section class="pt-16">
        <div class="container mx-auto px-4 py-10">
            <h2 class="text-2xl font-bold mb-6">Contáctanos</h2>
            <p class="text-lg mb-4">Para consultas, reservas o cualquier otra información, por favor contáctanos a través de los siguientes métodos:</p>
            <ul class="list-disc pl-5 mb-6">
                <li>Teléfono: (123) 456-7890</li>
                <li>Email: contacto@hotelfish.com</li>
                <li>Dirección: Calle Ficticia 123, Ciudad, País</li>
            </ul>
            <p class="text-lg">También puedes seguirnos en nuestras redes sociales:</p>
            <div class="social-media mt-4">
                <a href="https://www.facebook.com" target="_blank" class="mr-4"><i class="fab fa-facebook"></i></a>
                <a href="https://www.twitter.com" target="_blank" class="mr-4"><i class="fab fa-twitter"></i></a>
                <a href="https://www.instagram.com" target="_blank" class="mr-4"><i class="fab fa-instagram"></i></a>
                <a href="https://www.youtube.com" target="_blank"><i class="fab fa-youtube"></i></a>
            </div>

            <!-- Mapa de contacto -->
            <div class="mt-10">
                <h3 class="text-xl font-semibold mb-4">Ubícanos</h3>
                <div class="relative w-full h-64">
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3153.0934151428217!2d-122.41941548468112!3d37.77492927975956!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80858065d6b550b9%3A0x277f9c7cb9d485a8!2sSan%20Francisco%2C%20CA!5e0!3m2!1ses!2sus!4v1626364565180!5m2!1ses!2sus" 
                        width="100%" 
                        height="100%" 
                        style="border:0;" 
                        allowfullscreen="" 
                        loading="lazy">
                    </iframe>
                </div>
            </div>
        </div>
    </section>

    <!-- Sección de videos -->
    <section class="pt-16">
        <div class="container mx-auto px-4 py-10">
            <h2 class="text-2xl font-bold mb-6">Videos del Canal de YouTube</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                @forelse ($videos as $video)
                    @php
                        $videoId = $video['id']['videoId'] ?? null;
                        $title = $video['snippet']['title'];
                        $description = $video['snippet']['description'];
                        $thumbnail = $video['snippet']['thumbnails']['high']['url'];
                    @endphp
                    @if ($videoId)
                        <div class="video-container bg-gray-100 p-4 rounded-lg shadow-lg">
                            <a href="https://www.youtube.com/watch?v={{ $videoId }}" target="_blank">
                                <img src="{{ $thumbnail }}" alt="{{ $title }}" class="w-full h-auto">
                            </a>
                            <h3 class="text-lg font-semibold mt-2">{{ $title }}</h3>
                            <p class="text-gray-700 mt-1">{{ $description }}</p>
                        </div>
                    @endif
                @empty
                    <p class="text-center text-gray-500">No se encontraron videos.</p>
                @endforelse
            </div>
        </div>
    </section>

    <!-- Pie de página -->
    <footer class="footer">
        <div class="container mx-auto px-4">
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
                © 2024 Your Company. All rights reserved.
            </div>
        </div>
    </footer>
</body>

</html>
s