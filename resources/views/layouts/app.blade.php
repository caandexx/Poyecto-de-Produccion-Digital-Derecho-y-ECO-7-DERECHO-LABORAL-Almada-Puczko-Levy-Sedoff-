<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Derecho Laboral Argentino</title>
    <style>
        /* Estilos básicos basados en tu diseño Canva */
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8fafc;
            color: #374151;
        }
        
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }
        
        .btn {
            display: block;
            width: 100%;
            padding: 15px;
            margin: 10px 0;
            background-color: #2563eb;
            color: white;
            text-align: center;
            text-decoration: none;
            border-radius: 8px;
            font-size: 18px;
            border: none;
            cursor: pointer;
        }
        
        .btn-success {
            background-color: #10b981;
        }
    </style>
</head>
<body>
    <div class="container">
        @yield('content')
    </div>
    
    @yield('scripts')
</body>
</html>