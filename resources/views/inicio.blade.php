<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;1,100;1,200&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://cdn-tailwindcss.vercel.app/"></script>

    <title>Inicio</title>
    <style>
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
    <div class="bg-gold-400 border-b-2 shadow-md border-gray-100 pb-5">
        <div class="max-w-7xl mx-auto my-5 px-4 sm:px-6">
            <div
                class="flex flex-col-reverse md:flex-row min-w-full py-6 space-y-8 justify-center md:justify-between md:space-x-10">
                <input id="search"
                    class="flex leading-none focus:outline-none border-b-2 hover:border-b-3 border-red-800 w-5/6 mt-12 mx-auto md:w-1/4 md:mt-0 md:mx-0"
                    type="text">
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
                            <button class="btn btn-outline-light" type="button"
                                onclick="window.location.href='{{url('/registro')}}'">Registrarse</button>
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
    <!-- component -->
    <section class="">
        <div class="bg-cover bg-center flex justify-center items-center h-screen"
            style="background-image: url('{{ asset('imagenes/VERSION1.jpg') }}');">
            <div class="px-10 lg:px-32 xl:px-40 text-center">
                <h1 class="text-6xl font-semibold font-serif mb-6">

                    <span>HOTEL STARFISH</span>
                </h1>

            </div>
        </div>
    </section>


    <section class="text-gray-700 body-font">
        <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
            <div
                class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
                <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">Hotel Starfish
                </h1>
                <p class="mb-8 leading-relaxed">El Hotel Starfish es un encantador hotel ubicado en la costa,
                    perfectamente situado junto a la playa para ofrecer a sus huéspedes una experiencia única frente al
                    mar.
                    Ideal para aquellos que buscan disfrutar del sol, la arena y la serenidad del entorno costero.
                </p>
            </div>
            <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6 mx-auto">
                <img class="w-full md:max-w-lg mx-auto" src="imagenes/Espacios.jpg" alt="hero">
            </div>


        </div>
    </section>

    <!-- component -->
    <h2 class="font-bold text-center text-4xl text-slate-700 font-display">
        HABITACIONES
    </h2><br>
    <section class="text-blueGray-700 bg-white mt-20">
        <div class="container flex flex-col items-center px-5 py-16 mx-auto md:flex-row lg:px-28">
            <div class="flex flex-col items-start mb-16 text-left lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 md:mb-0">
                <h2 class="mb-8 text-xs font-semibold tracking-widest text-black uppercase title-font"> Hotel Starfish
                </h2>
                <h1 class="mb-8 text-2xl font-black tracking-tighter text-black md:text-5xl title-font"> Suite</h1>
                <p class="mb-8 text-base leading-relaxed text-left text-blueGray-600 "> Las suites del Hotel Starfish
                    ofrecen un lujo excepcional y comodidades modernas para garantizar una estancia inolvidable. Cada
                    suite está diseñada con elegancia y atención al detalle, proporcionando un espacio amplio y
                    confortable para nuestros huéspedes. Desde vistas impresionantes hasta servicios exclusivos,
                    nuestras suites están pensadas para satisfacer las necesidades de quienes buscan una experiencia de
                    hospedaje de alta gama.</p>
                <div class="flex flex-col justify-center lg:flex-row">
                    <a href="{{ route('reservas') }}#habitaciones-suite"
                        class="flex items-center px-6 py-3 mt-auto font-semibold text-white transition duration-500 ease-in-out transform bg-blue-600 rounded-lg hover:bg-blue-700 focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2">
                        Conoce Nuestras Habitaciones
                    </a>


                    </p>
                </div>
            </div>
            <div class="w-full lg:w-1/3 lg:max-w-lg md:w-1/2">
                <img class="object-cover object-center rounded-lg " alt="hero" src="img/Suite.jpg">
            </div>
        </div>
    </section>

    <section class="text-blueGray-700 bg-white mt-20">
        <div class="container flex flex-col items-center px-5 py-16 mx-auto  md:flex-row lg:px-28">
            <div
                class="flex flex-col items-start w-full pt-0 mb-16 text-left  lg:flex-grow md:w-1/2 xl:mr-20 md:pr-24 md:mb-0">
                <h2 class="mb-8 text-xs font-semibold tracking-widest text-black uppercase title-font"> Hotel Starfish
                </h2>
                <h1 class="mb-8 text-2xl font-black tracking-tighter text-black  md:text-5xl title-font"> Individuales
                </h1>
                <p class="mb-8 text-base leading-relaxed text-left text-blueGray-600">
                    Para los viajeros individuales, el Hotel Starfish ofrece habitaciones diseñadas para confort y
                    funcionalidad. Cada habitación individual está equipada con comodidades modernas y un ambiente
                    acogedor, ideal para quienes prefieren viajar solos y disfrutar de su propio espacio.</p>
                <div class="flex flex-col w-full gap-2 md:justify-start md:flex-row">
                    <a href="{{ route('reservas') }}#habitaciones-individuales"
                        class="flex items-center px-6 py-3 mt-auto font-semibold text-white transition duration-500 ease-in-out transform bg-blue-600 rounded-lg hover:bg-blue-700 focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2">
                        Conoce Nuestras Habitaciones
                    </a>
                </div>

            </div>
            <div class="w-full lg:w-5/6 lg:max-w-lg md:w-1/2">
                <img class="object-cover object-center rounded-lg" alt="hero" src="img/Individual.jpg">
            </div>
        </div>
    </section>
    <section class="text-blueGray-700 bg-white mt-20">
        <div class="container flex flex-col items-center px-5 py-16 mx-auto md:flex-row lg:px-28">
            <div class="flex flex-col items-start mb-16 text-left lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 md:mb-0">
                <h2 class="mb-8 text-xs font-semibold tracking-widest text-black uppercase title-font"> Hotel Starfish
                </h2>
                <h1 class="mb-8 text-2xl font-black tracking-tighter text-black md:text-5xl title-font"> Dobles</h1>
                <p class="mb-8 text-base leading-relaxed text-left text-blueGray-600"> Nuestras habitaciones dobles
                    ofrecen un
                    espacio cómodo y acogedor, perfecto para parejas o amigos que buscan una estancia relajante. Cada
                    habitación está equipada con todas las comodidades modernas y ofrece vistas encantadoras para hacer
                    de
                    tu estancia una experiencia memorable en el Hotel Starfish.</p>
                <div class="flex flex-col justify-center lg:flex-row">
                    <a href="{{ route('reservas') }}#habitaciones-dobles"
                        class="flex items-center px-6 py-3 mt-auto font-semibold text-white transition duration-500 ease-in-out transform bg-blue-600 rounded-lg hover:bg-blue-700 focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2">
                        Conoce Nuestras Habitaciones
                    </a>

                </div>
            </div>
            <div class="w-full lg:w-1/3 lg:max-w-lg md:w-1/2">
                <img class="object-cover object-center rounded-lg " alt="hero" src="img/Dobles.jpg">
            </div>
        </div>
    </section>


    <section class="text-blueGray-700 bg-white mt-20">
        <div class="container flex flex-col items-center px-5 py-16 mx-auto md:flex-row lg:px-28">
            <div
                class="flex flex-col items-start w-full pt-0 mb-16 text-left lg:flex-grow md:w-1/2 xl:mr-20 md:pr-24 md:mb-0">
                <h2 class="mb-8 text-xs font-semibold tracking-widest text-black uppercase title-font"> Hotel Starfish
                </h2>
                <h1 class="mb-8 text-2xl font-black tracking-tighter text-black md:text-5xl title-font"> Cuádruples
                </h1>
                <p class="mb-8 text-base leading-relaxed text-left text-blueGray-600">
                    Las habitaciones cuádruples del Hotel Starfish son ideales para familias o grupos de amigos que
                    buscan comodidad y espacio. Cada habitación está diseñada con atención al detalle y ofrece todas las
                    comodidades modernas para garantizar una estancia placentera. Disfruta de un ambiente acogedor y
                    vistas
                    encantadoras mientras te relajas en nuestras amplias habitaciones cuádruples.</p>
                <div class="flex flex-col w-full gap-2 md:justify-start md:flex-row">
                    <a href="{{ route('reservas') }}#habitaciones-cuadruples"
                        class="flex items-center px-6 py-3 mt-auto font-semibold text-white transition duration-500 ease-in-out transform bg-blue-600 rounded-lg hover:bg-blue-700 focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2">
                        Conoce Nuestras Habitaciones
                    </a>

                </div>

            </div>
            <div class="w-full lg:w-5/6 lg:max-w-lg md:w-1/2">
                <img class="object-cover object-center rounded-lg" alt="hero" src="img/Cuadruple.jpg">
            </div>
        </div>
    </section>



    <section class="text-gray-700 body-font border-t border-gray-200">
        <div class="container px-5 py-24 mx-auto">
            <div class="flex flex-col text-center w-full mb-20">
                <h2 class="text-xs text-indigo-500 tracking-widest font-medium title-font mb-1">HOTEL STARFISH</h2>
                <h1 class="sm:text-3xl text-2xl font-medium title-font text-gray-900">Servicios
                </h1>
            </div>
            <div class="container cards-container">
            @foreach ($servicios as $servicio)
                <div class="card">
                    <div class="card-title">{{ $servicio->titulo }}</div>
                    <img src="{{ asset('storage/' . $servicio->imagen) }}" alt="Rooftop Bar">
                    <div class="card-description">{{ $servicio->descripcion }}
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <section class="text-gray-700 body-font border-t border-gray-200">
        <div class="container px-5 py-24 mx-auto flex flex-wrap">
            <div class="lg:w-1/2 w-full mb-10 lg:mb-0 rounded-lg overflow-hidden">
                <img alt="feature" class="object-cover object-center h-full w-full"
                    src="{{ asset('imagenes/imagenca4.jpg') }}">
            </div>

            <div class="flex flex-col flex-wrap lg:py-6 -mb-10 lg:w-1/2 lg:pl-12 lg:text-left text-center">
                <div class="flex flex-col mb-10 lg:items-start items-center">
                    <div
                        class="w-12 h-12 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-5">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
                            <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
                        </svg>
                    </div>
                    <div class="flex-grow">
                        <h2 class="text-gray-900 text-lg title-font font-medium mb-3">Comodidad</h2>
                        <p class="leading-relaxed text-base">Disfruta de la comodidad suprema en cada aspecto de tu
                            estadía en el Hotel Starfish. Desde nuestras habitaciones bien equipadas hasta las áreas
                            comunes diseñadas para tu relajación, aquí encontrarás todo lo que necesitas para una
                            experiencia inolvidable.</p>

                    </div>
                </div>
                <div class="flex flex-col mb-10 lg:items-start items-center">
                    <div
                        class="w-12 h-12 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-5">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
                            <circle cx="6" cy="6" r="3"></circle>
                            <circle cx="6" cy="18" r="3"></circle>
                            <path d="M20 4L8.12 15.88M14.47 14.48L20 20M8.12 8.12L12 12"></path>
                        </svg>
                    </div>
                    <div class="flex-grow">
                        <h2 class="text-gray-900 text-lg title-font font-medium mb-3">Tranquilidad y Serenidad</h2>
                        <p class="leading-relaxed text-base">Escápate del bullicio de la ciudad y sumérgete en un oasis
                            de tranquilidad en el Hotel Starfish. Ubicado en un entorno idílico junto a la playa,
                            nuestro hotel ofrece un refugio perfecto para aquellos que buscan paz y serenidad. Disfruta
                            de la calma del entorno natural y recarga tus energías en un ambiente relajante y acogedor.
                        </p>

                    </div>
                </div>
                <div class="flex flex-col mb-10 lg:items-start items-center">
                    <div
                        class="w-12 h-12 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-5">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
                            <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
                            <circle cx="12" cy="7" r="4"></circle>
                        </svg>
                    </div>
                    <div class="flex-grow">
                        <h2 class="text-gray-900 text-lg title-font font-medium mb-3">Lujo y Exclusividad</h2>
                        <p class="leading-relaxed text-base">Experimenta el verdadero lujo en cada detalle durante tu
                            estancia en el Hotel Starfish. Desde nuestras elegantes suites hasta nuestros servicios de
                            clase mundial, te ofrecemos una experiencia excepcional que combina confort, sofisticación y
                            atención personalizada. Disfruta de instalaciones de primera categoría y momentos de
                            indulgencia en un entorno exclusivo diseñado para satisfacer los más altos estándares de
                            lujo.</p>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="text-gray-700 body-font border-t border-gray-200">
        <div class="container px-5 py-24 mx-auto">
            <div class="flex flex-wrap w-full mb-20 flex-col items-center text-center">
                <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-gray-900">AGENDA DE ACTIVIDADES</h1>
                <p class="lg:w-1/2 w-full leading-relaxed text-base">Actividades incluidas para huéspedes.</p>
            </div>
            <div class="flex flex-wrap -m-4">
                <div class="xl:w-1/3 md:w-1/2 p-4">
                    <div class="border border-gray-300 p-6 rounded-lg">
                        <div
                            class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-4">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
                                <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
                            </svg>
                        </div>
                        <h2 class="text-lg text-gray-900 font-medium title-font mb-2">EXPLORACIÓN MARINA</h2>
                        <p class="leading-relaxed text-base">Explora la vida marina con nuestros guías expertos.
                            Ofrecemos snorkel y buceo en zonas seguras donde podrás ver arrecifes de coral, peces
                            tropicales y otras maravillas submarinas.</p>
                    </div>
                </div>
                <div class="xl:w-1/3 md:w-1/2 p-4">
                    <div class="border border-gray-300 p-6 rounded-lg">
                        <div
                            class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-4">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
                                <circle cx="6" cy="6" r="3"></circle>
                                <circle cx="6" cy="18" r="3"></circle>
                                <path d="M20 4L8.12 15.88M14.47 14.48L20 20M8.12 8.12L12 12"></path>
                            </svg>
                        </div>
                        <h2 class="text-lg text-gray-900 font-medium title-font mb-2">YOGA AL AMANECER</h2>
                        <p class="leading-relaxed text-base">Comienza tu día con una sesión de yoga en la playa mientras
                            el sol se eleva. Nuestros instructores te guiarán a través de posturas relajantes y
                            ejercicios de respiración para energizar tu día.</p>
                    </div>
                </div>
                <div class="xl:w-1/3 md:w-1/2 p-4">
                    <div class="border border-gray-300 p-6 rounded-lg">
                        <div
                            class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-4">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
                                <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
                                <circle cx="12" cy="7" r="4"></circle>
                            </svg>
                        </div>
                        <h2 class="text-lg text-gray-900 font-medium title-font mb-2">CLASES DE SURF</h2>
                        <p class="leading-relaxed text-base">Aprende a surfear con nuestros instructores profesionales.
                            Ofrecemos clases para todos los niveles, desde principiantes hasta avanzados, asegurando que
                            todos puedan disfrutar de las olas.</p>
                    </div>
                </div>
                <div class="xl:w-1/3 md:w-1/2 p-4">
                    <div class="border border-gray-300 p-6 rounded-lg">
                        <div
                            class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-4">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
                                <path d="M4 15s1-1 4-1 5 2 8 2 4-1 4-1V3s-1 1-4 1-5-2-8-2-4 1-4 1zM4 22v-7"></path>
                            </svg>
                        </div>
                        <h2 class="text-lg text-gray-900 font-medium title-font mb-2">FIESTA DE CANGREJOS</h2>
                        <p class="leading-relaxed text-base">Una actividad divertida para toda la familia. Acompaña a
                            nuestros guías en la búsqueda de cangrejos durante la marea baja. Aprenderás sobre estas
                            interesantes criaturas y cómo cuidarlas.</p>
                    </div>
                </div>
                <div class="xl:w-1/3 md:w-1/2 p-4">
                    <div class="border border-gray-300 p-6 rounded-lg">
                        <div
                            class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-4">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
                                <path d="M21 12.79A9 9 0 1111.21 3 7 7 0 0021 12.79z"></path>
                            </svg>
                        </div>
                        <h2 class="text-lg text-gray-900 font-medium title-font mb-2">TALLER DE ARENA</h2>
                        <p class="leading-relaxed text-base">Libera tu creatividad con nuestros talleres de escultura de
                            arena. Nuestros artistas te enseñarán técnicas para construir impresionantes castillos y
                            figuras de arena.</p>
                    </div>
                </div>
                <div class="xl:w-1/3 md:w-1/2 p-4">
                    <div class="border border-gray-300 p-6 rounded-lg">
                        <div
                            class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-4">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
                                <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                            </svg>
                        </div>
                        <h2 class="text-lg text-gray-900 font-medium title-font mb-2">DEPORTES EN LA PLAYA</h2>
                        <p class="leading-relaxed text-base">Participa en torneos de vóley playa, fútbol de playa y
                            otros deportes divertidos. Una excelente manera de conocer a otros huéspedes y disfrutar del
                            sol y la arena.</p>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <section class="text-gray-700 body-font border-t border-gray-200">

    </section>
    <section>
        <div class="container px-5 py-24 mx-auto flex justify-center">
            <div
                class="lg:w-1/2 md:w-2/3 bg-white rounded-lg p-8 flex flex-col w-full mt-10 md:mt-0 relative z-10 shadow-md">
                <h2 class="text-gray-900 text-lg mb-1 font-medium title-font">Feedback</h2>
                <p class="leading-relaxed mb-5 text-gray-600">Deja tus comentarios y sugerencias sobre nuestro servicio
                </p>
                <div class="relative mb-4">
                    <label for="email" class="leading-7 text-sm text-gray-600">Correo Electrónico</label>
                    <input type="email" id="email" name="email"
                        class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                </div>
                <div class="relative mb-4">
                    <label for="mensaje" class="leading-7 text-sm text-gray-600">Mensaje</label>
                    <textarea id="mensaje" name="mensaje"
                        class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
                </div>
                <button
                    class="text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">Enviar</button>
                <p class="text-xs text-gray-500 mt-3">Tus comentarios son valiosos para nosotros. ¡Gracias por
                    compartirlos!</p>
            </div>
        </div>
    </section>



    <!-- component -->
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