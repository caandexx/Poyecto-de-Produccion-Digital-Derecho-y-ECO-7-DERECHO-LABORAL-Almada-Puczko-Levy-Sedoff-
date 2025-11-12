<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Derecho Laboral Argentino - DerechoLab</title>
    
    <!-- Tipografía mejorada: Plus Jakarta Sans -->
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- TailwindCSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        :root {
            --primary-gradient: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            --secondary-gradient: linear-gradient(180deg, #f8fafc 0%, #e2e8f0 100%);
            --accent-color: #7c3aed;
            --success-color: #10b981;
            --warning-color: #f59e0b;
            --text-primary: #1e293b;
            --text-secondary: #475569;
            --text-muted: #64748b;
        }

        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background: var(--secondary-gradient);
            min-height: 100vh;
            margin: 0;
            padding: 0;
            color: var(--text-primary);
            line-height: 1.7;
            font-weight: 400;
            letter-spacing: -0.01em;
        }

        /* Mejor contraste para accesibilidad */
        .text-high-contrast {
            color: var(--text-primary);
            font-weight: 600;
        }

        /* Tamaños de fuente optimizados */
        .text-display {
            font-size: 3.5rem;
            font-weight: 800;
            line-height: 1.1;
            letter-spacing: -0.02em;
        }

        .text-heading {
            font-size: 2.25rem;
            font-weight: 700;
            line-height: 1.2;
            letter-spacing: -0.01em;
        }

        .text-subheading {
            font-size: 1.5rem;
            font-weight: 600;
            line-height: 1.3;
        }

        .text-body {
            font-size: 1.125rem;
            font-weight: 400;
            line-height: 1.7;
        }

        .text-small {
            font-size: 0.875rem;
            font-weight: 400;
            line-height: 1.6;
        }

        /* Navbar mejorada con mejor tipografía */
        .navbar {
            background: rgba(255, 255, 255, 0.98);
            backdrop-filter: blur(20px);
            border-bottom: 1px solid rgba(241, 245, 249, 0.8);
            box-shadow: 0 1px 20px rgba(0, 0, 0, 0.03);
        }

        .nav-link {
            position: relative;
            transition: all 0.3s ease;
            font-weight: 500;
            font-size: 0.95rem;
            color: var(--text-secondary);
        }

        .nav-link:hover {
            color: var(--accent-color);
            transform: translateY(-1px);
        }

        .nav-link::after {
            content: '';
            position: absolute;
            width: 0;
            height: 3px;
            bottom: -6px;
            left: 50%;
            background: var(--accent-color);
            transition: all 0.3s ease;
            transform: translateX(-50%);
            border-radius: 2px;
        }

        .nav-link:hover::after {
            width: 80%;
        }

        /* Hero section con mejor tipografía */
        .gradient-box {
            background: var(--primary-gradient);
            border-radius: 2.5rem;
            box-shadow: 
                0 25px 50px rgba(102, 126, 234, 0.15),
                0 8px 25px rgba(0, 0, 0, 0.05);
            position: relative;
            overflow: hidden;
        }

        .gradient-box::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: 
                radial-gradient(circle at 15% 70%, rgba(120, 119, 198, 0.25) 0%, transparent 50%),
                radial-gradient(circle at 85% 30%, rgba(255, 255, 255, 0.15) 0%, transparent 50%);
            animation: float 8s ease-in-out infinite;
        }

        @keyframes float {
            0%, 100% { 
                transform: translateY(0px) rotate(0deg) scale(1); 
            }
            33% { 
                transform: translateY(-15px) rotate(0.5deg) scale(1.02); 
            }
            66% { 
                transform: translateY(10px) rotate(-0.3deg) scale(0.98); 
            }
        }

        /* Cards profesionales mejoradas */
        .professional-card {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border-radius: 1.75rem;
            padding: 2.5rem 2rem;
            box-shadow: 
                0 8px 25px rgba(0, 0, 0, 0.04),
                0 2px 8px rgba(0, 0, 0, 0.02);
            border: 1px solid rgba(255, 255, 255, 0.6);
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            position: relative;
            overflow: hidden;
        }

        .professional-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 5px;
            background: var(--primary-gradient);
            transform: scaleX(0);
            transition: transform 0.5s ease;
            border-radius: 1.75rem 1.75rem 0 0;
        }

        .professional-card:hover {
            transform: translateY(-12px) scale(1.03);
            box-shadow: 
                0 35px 60px rgba(0, 0, 0, 0.12),
                0 12px 30px rgba(0, 0, 0, 0.08);
        }

        .professional-card:hover::before {
            transform: scaleX(1);
        }

        /* Botones mejorados con mejor tipografía */
        .btn-modern {
            background: var(--primary-gradient);
            color: white;
            padding: 1rem 2.5rem;
            border-radius: 2.5rem;
            font-weight: 600;
            font-size: 1.1rem;
            letter-spacing: -0.01em;
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            border: none;
            cursor: pointer;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 0.75rem;
            box-shadow: 0 8px 25px rgba(102, 126, 234, 0.35);
            position: relative;
            overflow: hidden;
        }

        .btn-modern::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.3), transparent);
            transition: left 0.6s;
        }

        .btn-modern:hover::before {
            left: 100%;
        }

        .btn-modern:hover {
            transform: translateY(-3px) scale(1.05);
            box-shadow: 0 15px 35px rgba(102, 126, 234, 0.5);
        }

        .btn-secondary {
            background: transparent;
            color: var(--text-primary);
            border: 2.5px solid #e2e8f0;
            padding: 1rem 2.5rem;
            border-radius: 2.5rem;
            font-weight: 600;
            font-size: 1.1rem;
            letter-spacing: -0.01em;
            transition: all 0.3s ease;
        }

        .btn-secondary:hover {
            border-color: var(--accent-color);
            color: var(--accent-color);
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(124, 58, 237, 0.15);
        }

        /* Badges y etiquetas mejoradas */
        .badge {
            display: inline-block;
            background: var(--primary-gradient);
            color: white;
            padding: 0.5rem 1.25rem;
            border-radius: 1.5rem;
            font-size: 0.875rem;
            font-weight: 700;
            letter-spacing: 0.02em;
            text-transform: uppercase;
            box-shadow: 0 4px 12px rgba(102, 126, 234, 0.25);
        }

        /* Efectos de scroll reveal mejorados */
        .fade-in {
            opacity: 0;
            transform: translateY(40px);
            transition: all 0.8s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        }

        .fade-in.visible {
            opacity: 1;
            transform: translateY(0);
        }

        /* Footer mejorado */
        .footer {
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(15px);
            border-top: 1px solid rgba(241, 245, 249, 0.8);
        }

        /* Mejoras de accesibilidad */
        @media (max-width: 768px) {
            .text-display {
                font-size: 2.5rem;
            }
            
            .text-heading {
                font-size: 1.875rem;
            }
            
            .text-body {
                font-size: 1rem;
            }
        }

        /* Efecto de enfoque para mejor accesibilidad */
        .focus-effect:focus {
            outline: 3px solid var(--accent-color);
            outline-offset: 2px;
            border-radius: 8px;
        }

        /* Mejor contraste para textos importantes */
        .text-important {
            color: var(--text-primary);
            font-weight: 600;
            background: linear-gradient(135deg, var(--accent-color), #8b5cf6);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        /* Mantener compatibilidad */
        .btn {
            display: block;
            width: 100%;
            padding: 15px;
            margin: 10px 0;
            background-color: #2563eb;
            color: white;
            text-align: center;
            text-decoration: none;
            border-radius: 12px;
            font-size: 1.125rem;
            font-weight: 500;
            border: none;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        
        .btn-success {
            background-color: var(--success-color);
        }

        .btn-warning {
            background-color: var(--warning-color);
        }

        /* Animaciones de partículas mejoradas */
        @keyframes floatParticle {
            0%, 100% { 
                transform: translate(0, 0) rotate(0deg) scale(1); 
                opacity: 0; 
            }
            20% { 
                opacity: 0.8; 
            }
            50% { 
                transform: translate(25px, -25px) rotate(180deg) scale(1.2); 
                opacity: 1; 
            }
            80% { 
                opacity: 0.6; 
            }
        }
    </style>
</head>
<body class="flex flex-col items-center min-h-screen">

    <!-- NAVBAR SUPER MEJORADA -->
    <nav class="navbar w-full flex justify-between items-center py-5 px-8 sticky top-0 z-50">
        <div class="text-3xl font-bold bg-gradient-to-r from-purple-600 to-blue-600 bg-clip-text text-transparent text-heading">
            ⚖️ DerechoLab
        </div>
        <div class="flex gap-10">
            <a href="{{ route('home') }}" class="nav-link focus-effect">Inicio</a>
            <a href="{{ route('contenido') }}" class="nav-link focus-effect">Recursos</a>
            <a href="{{ route('chatbot') }}" class="nav-link focus-effect">Chatbot</a>
            <a href="{{ route('directorio') }}" class="nav-link focus-effect">Directorio</a>
            <a href="{{ route('contacto') }}" class="nav-link focus-effect">Contacto</a>
        </div>
    </nav>

    <!-- CONTENIDO PRINCIPAL -->
    <main class="w-full flex-1">
        @yield('content')
    </main>

    <!-- FOOTER MEJORADO -->
    <footer class="footer w-full mt-20 py-10 text-center">
        <div class="text-gray-600 text-body font-medium">
            Proyecto de Producción Digital - Derecho Laboral Argentino ©️ 2025
        </div>
        <div class="text-gray-400 text-small mt-3">
            Información confiable y accesible sobre derechos laborales
        </div>
    </footer>

    @yield('scripts')

    <script>
        // Scroll reveal animations mejoradas
        function checkScroll() {
            const elements = document.querySelectorAll('.fade-in');
            elements.forEach(element => {
                const elementTop = element.getBoundingClientRect().top;
                const elementVisible = 200;
                
                if (elementTop < window.innerHeight - elementVisible) {
                    element.classList.add('visible');
                }
            });
        }

        // Efecto de partículas mejorado
        function createParticles() {
            const hero = document.querySelector('.gradient-box');
            if (!hero) return;
            
            for (let i = 0; i < 20; i++) {
                const particle = document.createElement('div');
                particle.style.cssText = `
                    position: absolute;
                    width: 6px;
                    height: 6px;
                    background: rgba(255,255,255,0.4);
                    border-radius: 50%;
                    animation: floatParticle ${Math.random() * 8 + 6}s infinite ease-in-out ${Math.random() * 2}s;
                    left: ${Math.random() * 100}%;
                    top: ${Math.random() * 100}%;
                    pointer-events: none;
                `;
                hero.appendChild(particle);
            }
        }

        // Mejor manejo de focus para accesibilidad
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Tab') {
                document.body.classList.add('keyboard-navigation');
            }
        });

        document.addEventListener('mousedown', function() {
            document.body.classList.remove('keyboard-navigation');
        });

        // Inicializar cuando el DOM esté listo
        document.addEventListener('DOMContentLoaded', function() {
            checkScroll();
            createParticles();
            window.addEventListener('scroll', checkScroll);
            
            // Mejorar accesibilidad de focus
            const focusableElements = document.querySelectorAll('button, a, input, select, textarea');
            focusableElements.forEach(el => {
                el.setAttribute('tabindex', '0');
            });
        });
    </script>
</body>
</html>