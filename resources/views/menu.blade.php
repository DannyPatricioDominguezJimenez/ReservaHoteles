<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Mama Cuchara</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .header {
            background-color: #000;
            color: #fff;
            text-align: center;
            padding: 10px 0;
        }

        .header img {
            max-width: 100%;
            height: auto;
        }

        .navbar {
            display: flex;
            justify-content: center;
            background-color: #000;
        }

        .navbar a {
            color: #fff;
            padding: 15px 20px;
            text-decoration: none;
            text-transform: uppercase;
        }

        .navbar a:hover {
            background-color: #444;
        }

        .content {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 500px;
            background-image: url('hotel_background.jpg'); /* replace with your image path */
            background-size: cover;
            background-position: center;
        }

        .content .info-box {
            background-color: rgba(255, 255, 255, 0.9);
            padding: 20px;
            border-radius: 10px;
            text-align: center;
        }

        .content .info-box h2 {
            margin-top: 0;
        }

        .social-media {
            position: fixed;
            top: 50%;
            left: 0;
            transform: translateY(-50%);
            display: flex;
            flex-direction: column;
        }

        .social-media a {
            color: white;
            padding: 10px;
            text-align: center;
            text-decoration: none;
            margin-bottom: 5px;
        }

        .social-media a.facebook { background-color: #3b5998; } /* Facebook */
        .social-media a.instagram { background-color: #E4405F; }
        .social-media a.twitter { background-color: #1DA1F2; }
        .social-media a.tripadvisor { background-color: #34E0A1; }
        .social-media a.whatsapp { background-color: #25D366; }

        .info-box .tab {
            display: inline-block;
            background-color: #000;
            color: #fff;
            padding: 10px 20px;
            margin: 10px;
            text-decoration: none;
            border-radius: 5px;
        }

        .info-box .tab:hover {
            background-color: #444;
        }
    </style>
</head>
<body>
    <div class="header">
        <img src="imagenes/Logo2.png" alt="Artehotels Logo"> <!-- replace with your image path -->
    </div>
    <div class="navbar">
        <a href="#">Nosotros</a>
        <a href="#">Actividades</a>
        <a href="#">Habitaciones</a>
        <a href="#">Servicios</a>
        <a href="#">Eventos</a>
        <a href="#">Contacto</a>
        <a href="#">Reserva</a>
    </div>
    <div class="content">
        <div class="info-box">
            <img src="artehotels_logo.jpg" alt="Artehotels Logo" width="200"> <!-- replace with your image path -->
            <h2>Artehotels</h2>
            <p>Beyond a great stay</p>
            <a href="#" class="tab">Front Desk</a>
            <a href="#" class="tab">Rooftop</a>
            <a href="#" class="tab">Restaurante</a>
        </div>
    </div>
    <div class="social-media">
        <a href="#" class="facebook">Facebook</a>
        <a href="#" class="instagram">Instagram</a>
        <a href="#" class="twitter">Twitter</a>
        <a href="#" class="tripadvisor">Tripadvisor</a>
        <a href="#" class="whatsapp">WhatsApp</a>
    </div>
</body>
</html>
