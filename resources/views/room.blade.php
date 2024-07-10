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
                        <a class="nav-link" href="#">Reservas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ url('/Ofertas') }}">Ofertas</a>
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
    <div class="container mt-5">
        <h1 class="text-center">Administración de Habitaciones</h1>
        <div class="card mt-3">
            <div class="card-body">
                <form id="admin-form">
                    <div class="mb-3">
                        <label for="room-name" class="form-label">Nombre de la Habitación</label>
                        <input type="text" class="form-control" id="room-name" placeholder="Ingrese el nombre de la habitación">
                    </div>
                    <div class="mb-3">
                        <label for="room-description" class="form-label">Descripción de la Habitación</label>
                        <textarea class="form-control" id="room-description" rows="3" placeholder="Ingrese la descripción de la habitación"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="room-price" class="form-label">Precio por Noche</label>
                        <input type="number" class="form-control" id="room-price" placeholder="Ingrese el precio por noche">
                    </div>
                    <div class="mb-3">
                        <label for="room-image" class="form-label">Imagen de la Habitación</label>
                        <input type="file" class="form-control" id="room-image">
                    </div>
                    <button type="button" class="btn btn-primary" onclick="addRoom()">Agregar Habitación</button>
                    <button type="button" class="btn btn-danger" onclick="removeRoom()">Quitar Habitación</button>
                </form>
            </div>
        </div>
        <div class="mt-5">
            <h2 class="text-center">Lista de Habitaciones</h2>
            <ul id="room-list" class="list-group">
                <!-- Aquí se agregarán las habitaciones dinámicamente -->
            </ul>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer mt-auto">
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
                <a href="#">Reservas</a>
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
    <script>
        function addRoom() {
            const roomName = document.getElementById('room-name').value;
            const roomDescription = document.getElementById('room-description').value;
            const roomPrice = document.getElementById('room-price').value;
            const roomImage = document.getElementById('room-image').files[0];

            if(roomName && roomDescription && roomPrice && roomImage) {
                const roomList = document.getElementById('room-list');
                const listItem = document.createElement('li');
                listItem.className = 'list-group-item';
                listItem.innerHTML = `
                    <strong>${roomName}</strong><br>
                    ${roomDescription}<br>
                    Precio: $${roomPrice}<br>
                    <img src="${URL.createObjectURL(roomImage)}" alt="${roomName}" style="width: 100px;">
                `;
                roomList.appendChild(listItem);

                document.getElementById('admin-form').reset();
            } else {
                alert('Por favor, complete todos los campos.');
            }
        }

        function removeRoom() {
            const roomList = document.getElementById('room-list');
            if (roomList.children.length > 0) {
                roomList.removeChild(roomList.lastElementChild);
            } else {
                alert('No hay habitaciones para quitar.');
            }
        }
    </script>
</body>

</html>
