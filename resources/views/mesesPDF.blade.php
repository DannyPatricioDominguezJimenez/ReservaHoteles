<!DOCTYPE html>
<html>
<head>
    <title>Reporte Mensual</title>
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
            <!-- Puedes agregar aquí cualquier información adicional que necesites -->
        </div>
    </div>

    <h1>Reporte Mensual</h1>
    
    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Dirección</th>
                <th>Teléfono</th>
                <th>Ingreso</th>
                <th>Salida</th>
                <th>Tipo de Habitación</th>
                <th>Número de Habitaciones</th>
                <th>Tarifa</th>
                <th>Método de Pago</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($meses as $mes)
                <tr>
                    <td>{{ $mes->nombres }}</td>
                    <td>{{ $mes->apellidos }}</td>
                    <td>{{ $mes->direccion }}</td>
                    <td>{{ $mes->telefono }}</td>
                    <td>{{ $mes->ingreso->format('d/m/Y') }}</td>
                    <td>{{ $mes->salida->format('d/m/Y') }}</td>
                    <td>{{ $mes->tipohabitacion }}</td>
                    <td>{{ $mes->nrohabitaciones }}</td>
                    <td>${{ number_format($mes->tarifa, 2) }}</td>
                    <td>{{ $mes->metodopago }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="footer">
        <p>Reporte generado el {{ date('d/m/Y') }}</p>
    </div>
</body>
</html>
