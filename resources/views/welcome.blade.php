<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Inicio </title>
    <style>
        body {
            margin: 0;
            padding: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #000; 
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
            color: red; 
            font-size: 4rem;
            font-weight: bold;
            margin-bottom: 20px;
        }

        button {
            padding: 15px 30px;
            font-size: 1.5rem;
            color: white;
            background-color: red; 
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: darkred; 
        }

        
        .footer {
            margin-top: 20px;
            color: white; 
            font-size: 1.2rem;
        }
    </style>
</head>
<body>
    <div class="welcome-container">
        <img src="{{ asset('images/f1-logo.png') }}" alt="Logo de F1">
        
        <h1>¡Bienvenido!</h1>
        <form action="{{ route('convertidor') }}" method="GET">
            <button type="submit">REPASO 1</button>
        </form>

        
        <div class="footer">
            <p>Antonio Gutierrez Villalobos</p>
            <p>Matrícula: 121040593</p>
        </div>
    </div>
</body>
</html>
