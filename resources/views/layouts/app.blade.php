<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Derecho Laboral Argentino</title>
    
    <!-- Fuente moderna -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    
    <!-- TailwindCSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        body {
            font-family: 'Inter', sans-serif;
            background: linear-gradient(180deg, #fef3f3 0%, #fdece6 100%);
            min-height: 100vh;
            margin: 0;
            padding: 0;
            color: #374151;
        }

        .gradient-box {
            background: linear-gradient(180deg, #ffe8e6 0%, #fdecea 100%);
            background-image: linear-gradient(180deg, #ffe8e6 0%, #fdecea 100%), 
                            linear-gradient(90deg, rgba(255,255,255,0.2) 1px, transparent 1px),
                            linear-gradient(rgba(255,255,255,0.2) 1px, transparent 1px);
            background-size: 100% 100%, 40px 40px, 40px 40px;
            border-radius: 1.5rem;
            box-shadow: 0 4px 20px rgba(0,0,0,0.05);
        }

        .panel {
            background: white;
            border-radius: 1.5rem;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        }

        .btn-black {
            background-color: #000;
            color: white;
            padding: 0.75rem 1.5rem;
            border-radius: 9999px;
            font-weight: 600;
            transition: 0.2s;
            border: none;
            cursor: pointer;
            text-decoration: none;
            display: inline-block;
        }

        .btn-black:hover {
            background-color: #333;
        }

        .info-card {
            border: 1px solid #f0f0f0;
            border-radius: 1rem;
            padding: 1.5rem;
            text-align: center;
            transition: 0.3s;
        }

        .info-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 4px 10px rgba(0,0,0,0.05);
        }

        /* Mantener compatibilidad con tus estilos existentes */
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
<body class="flex flex-col items-center min-h-screen">

    <!-- NAV MEJORADA -->
    <nav class="w-full flex justify-between items-center py-4 px-8 bg-white/80 backdrop-blur-sm sticky top-0 z-50">
        <div class="text-xl font-bold">⚖️ DerechoLab</div>
        <div class="flex gap-6">
            <a href="{{ route('home') }}" class="text-gray-700 hover:text-black font-medium transition">Inicio</a>
            <a href="{{ route('contenido') }}" class="text-gray-700 hover:text-black font-medium transition">Recursos</a>
            <a href="{{ route('chatbot') }}" class="text-gray-700 hover:text-black font-medium transition">Chatbot</a>
            <a href="{{ route('directorio') }}" class="text-gray-700 hover:text-black font-medium transition">Directorio</a>
            <a href="{{ route('contacto') }}" class="text-gray-700 hover:text-black font-medium transition">Contacto</a>
        </div>
    </nav>

    <!-- CONTENIDO PRINCIPAL -->
    <main class="w-full flex-1">
        @yield('content')
    </main>

    <!-- FOOTER MEJORADO -->
    <footer class="w-full mt-16 py-8 bg-white/60 text-center">
        <div class="text-gray-500 text-sm">
            Proyecto de Producción Digital - Derecho Laboral Argentino ©️ 2025
        </div>
        <div class="text-gray-400 text-xs mt-2">
            Información confiable y accesible sobre derechos laborales
        </div>
    </footer>

    @yield('scripts')
</body>
</html>