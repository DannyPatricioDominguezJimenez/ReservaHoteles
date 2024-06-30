<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesión</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Bonheur+Royale&display=swap');

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        body {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-image: url('img/img1.jpg'); /* Ajusta la ruta si es necesario */
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        .header {
            text-align: center;
            margin-bottom: 20px;
            margin-top: -50px; /* Ajustar el margen superior para mover el título hacia arriba */
        }

        .header h2 {
            font-family: 'Bonheur Royale', cursive;
            font-size: 144px;
            color: #fff; /* Color del texto del nombre del hotel */
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5); /* Sombra del texto */
            font-weight: normal; /* Quitar la negrita */
        }

        .login-container {
            background-color: rgba(255, 255, 255, 0.9); /* Fondo blanco con transparencia */
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
            text-align: center; /* Centrar el texto dentro del contenedor */
        }

        h1 {
            margin-bottom: 20px;
        }

        .input-group {
            margin-bottom: 15px;
            text-align: left; /* Alinear las etiquetas y los inputs a la izquierda */
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 4px;
            background-color: #5cb85c;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #4cae4c;
        }
    </style>
</head>

<body>
    <div class="header">
        <h2>StarFish</h2>
    </div>
    <div class="login-container">
        <h1>Iniciar Sesión</h1>
        <form action="/login" method="post">
            <div class="input-group">
                <label for="username">Usuario</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="input-group">
                <label for="password">Contraseña</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit">Entrar</button>
        </form>
    </div>
</body>

</html>
