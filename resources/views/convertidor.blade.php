<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REPASO1</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #000; 
            color: #fff; 
        }
        .container {
            width: 80%;
            margin: auto;
            overflow: hidden;
            padding: 20px;
            background: #222; 
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(255, 0, 0, 0.5); 
        }
        h1 {
            text-align: center;
            color: #ff0000; 
        }
        form {
            margin: 20px 0;
        }
        label {
            display: block;
            margin-bottom: 5px;
            color: #ffcc00; 
        }
        input, select, button {
            padding: 10px;
            margin: 10px 0;
            width: 100%;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        input, select {
            background: #444; 
            color: #fff; 
        }
        button {
            background: #ff0000; 
            color: #fff;
            border: none;
            cursor: pointer;
        }
        button:hover {
            background: #cc0000; 
        }
        .resultado {
            margin-top: 20px;
            text-align: center;
            font-size: 1.5em;
            color: #ffcc00; 
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Convertidor de Unidades</h1>

        <form action="{{ route('convertidor.convert') }}" method="POST">
            @csrf
            <label for="inputValue">Valor:</label>
            <input type="number" name="inputValue" required>
            
            <label for="conversionType">Tipo de Conversión:</label>
            <select name="conversionType" required>
                <option value="mb_to_gb">MB a GB</option>
                <option value="gb_to_mb">GB a MB</option>
                <option value="gb_to_tb">GB a TB</option>
                <option value="tb_to_gb">TB a GB</option>
            </select>
            
            <button type="submit">Convertir</button>
        </form>

        @if(session('resultado'))
            <div class="resultado">
                Resultado: {{ session('resultado') }} {{ request('conversionType') === 'mb_to_gb' ? 'GB' : (request('conversionType') === 'gb_to_mb' ? 'MB' : (request('conversionType') === 'gb_to_tb' ? 'TB' : 'GB')) }}
            </div>
        @endif
    </div>
</body>
</html>
