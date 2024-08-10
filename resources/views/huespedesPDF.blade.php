<!DOCTYPE html>
<html>
<head>
    <title>Reporte de Huespedes</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0; /* Color de fondo para la página */
        }
        .header {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
            background-color: #ffffff; /* Color de fondo para el encabezado */
            padding: 10px;
            border-bottom: 2px solid #dddddd; /* Línea divisoria inferior */
        }
        .header img {
            max-width: 30%; /* Ajusta el tamaño máximo del encabezado */
            height: auto;
            margin-right: 20px; /* Espacio entre la imagen y el texto */
        }
        .header .text {
            max-width: 70%; /* Ajusta el ancho del texto */
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            background-color: #ffffff; /* Color de fondo para la tabla */
        }
        th, td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: left;
        }
        th {
            background-color: #f4f4f4;
            font-weight: bold;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        h1 {
            text-align: center;
            margin-top: 20px;
            margin-bottom: 10px;
        }
        .footer {
            position: fixed;
            bottom: 0;
            width: 100%;
            text-align: center;
            margin-top: 20px;
            font-size: 12px;
            color: #555;
            padding: 10px 0;
            background-color: #ffffff; /* Color de fondo para el pie de página */
            border-top: 2px solid #dddddd; /* Línea divisoria superior */
        }
    </style>
</head>
<body>
    <div class="header">
        <img src="{{ public_path('imagenes/Logo.jpg') }}" alt="Encabezado">
        <div class="text">
            <!-- Puedes añadir texto o detalles adicionales aquí si lo deseas -->
        </div>
    </div>

    <h1>Reporte de Huespedes</h1>
    
    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Cédula</th>
                <th>Fecha de Nacimiento</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($huespedes as $huesped)
                <tr>
                    <td>{{ $huesped->nombre }}</td>
                    <td>{{ $huesped->apellido }}</td>
                    <td>{{ $huesped->cedula }}</td>
                    <td>{{ \Carbon\Carbon::parse($huesped->fechanacimiento)->format('d/m/Y') }}</td>
                    <td>{{ $huesped->email }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="footer">
        <p>El Hotel Starfish es un encantador hotel ubicado en la costa, perfectamente situado junto a la playa para ofrecer a sus huéspedes una experiencia única frente al mar. Ideal para aquellos que buscan disfrutar del sol, la arena y la serenidad del entorno costero.</p>
        <p>Reporte generado el {{ date('d/m/Y') }}</p>
    </div>
</body>
</html>
