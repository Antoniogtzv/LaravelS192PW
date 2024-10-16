<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pantalla de Bienvenida</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #000; /* Fondo negro */
            font-family: Arial, sans-serif;
        }

        .welcome-container {
            text-align: center;
        }

        .welcome-container img {
            width: 200px;
            margin-bottom: 30px;
        }

        h1 {
            color: red; /* Letras rojas */
            font-size: 4rem;
            font-weight: bold;
            margin-bottom: 20px;
        }

        button {
            padding: 15px 30px;
            font-size: 1.5rem;
            color: white;
            background-color: red; /* Botón rojo */
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: darkred; /* Cambio de color al pasar el cursor */
        }

        /* Estilos para el nombre y matrícula */
        .footer {
            margin-top: 20px;
            color: white; /* Color blanco para el texto */
            font-size: 1.2rem;
        }
    </style>
</head>
<body>
    <div class="welcome-container">
        <img src="{{ asset('images/f1-logo.png') }}" alt="Logo de F1">
        
        <h1>¡Bienvenido!</h1>
        <form action="{{ route('convertidor') }}" method="GET">
            <button type="submit">Iniciar</button>
        </form>

        <!-- Agregar el nombre y la matrícula -->
        <div class="footer">
            <p>Antonio Gutierrez Villalobos</p>
            <p>Matrícula: 121040593</p>
        </div>
    </div>
</body>
</html>
