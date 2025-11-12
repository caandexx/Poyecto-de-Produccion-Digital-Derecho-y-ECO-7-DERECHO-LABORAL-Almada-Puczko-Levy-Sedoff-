@extends('layouts.app')

@section('content')
<!-- HERO SECTION ULTRA MEJORADA -->
<section class="gradient-box w-11/12 md:w-3/4 mt-12 py-20 px-8 text-center mx-auto fade-in">
    <div class="badge mb-6 inline-block">
        🚀 Herramienta Educativa Premium
    </div>
    
    <h1 class="text-display text-white mb-6 max-w-4xl mx-auto leading-tight">
    Conocé tus <span class="text-highlight">Derechos Laborales</span> con Confianza
</h1>
    
    <p class="text-body text-white/90 mb-10 max-w-2xl mx-auto leading-relaxed">
        Accedé a información <strong>verificada y actualizada</strong> sobre leyes laborales, contratos, licencias, despidos y más.  
        Contenido desarrollado específicamente para <strong>trabajadores argentinos</strong>.
    </p>
    
    <div class="flex flex-col sm:flex-row justify-center gap-5">
        <a href="{{ route('chatbot') }}" class="btn-modern text-lg">
            <span>🤖 Consultar al Asistente IA</span>
        </a>
        <a href="{{ route('contenido') }}" class="btn-secondary text-lg">
            <span>📚 Explorar Recursos Completos</span>
        </a>
    </div>
</section>

<!-- PANEL DE ACCESO RÁPIDO MEJORADO -->
<section class="w-11/12 md:w-4/5 -mt-8 py-12 px-6 grid grid-cols-1 md:grid-cols-4 gap-8 mx-auto fade-in">
    <div class="professional-card cursor-pointer group" onclick="location.href='{{ route('contenido') }}#guia-despido'">
        <div class="text-3xl mb-4 group-hover:scale-110 transition-transform duration-300">🚨</div>
        <h3 class="text-subheading text-high-contrast mb-3">Despidos e Indemnizaciones</h3>
        <p class="text-body text-muted">Guía completa sobre cálculo, plazos legales y pasos inmediatos</p>
        <div class="mt-4 text-small text-accent-color font-semibold opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            Ver guía completa →
        </div>
    </div>

    <div class="professional-card cursor-pointer group" onclick="location.href='{{ route('contenido') }}#guia-accidente'">
        <div class="text-3xl mb-4 group-hover:scale-110 transition-transform duration-300">🚑</div>
        <h3 class="text-subheading text-high-contrast mb-3">Accidentes Laborales</h3>
        <p class="text-body text-muted">Procedimiento ART, cobertura médica y denuncias en SRT</p>
        <div class="mt-4 text-small text-accent-color font-semibold opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            Ver procedimiento →
        </div>
    </div>

    <div class="professional-card cursor-pointer group" onclick="location.href='{{ route('contenido') }}#guia-denuncia'">
        <div class="text-3xl mb-4 group-hover:scale-110 transition-transform duration-300">⚖️</div>
        <h3 class="text-subheading text-high-contrast mb-3">Denuncias Laborales</h3>
        <p class="text-body text-muted">Cómo reclamar tus derechos ante el ministerio paso a paso</p>
        <div class="mt-4 text-small text-accent-color font-semibold opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            Aprender a denunciar →
        </div>
    </div>

    <div class="professional-card cursor-pointer group" onclick="location.href='{{ route('directorio') }}'">
        <div class="text-3xl mb-4 group-hover:scale-110 transition-transform duration-300">🏛️</div>
        <h3 class="text-subheading text-high-contrast mb-3">Directorio Oficial</h3>
        <p class="text-body text-muted">Contactos verificados de todos los ministerios provinciales</p>
        <div class="mt-4 text-small text-accent-color font-semibold opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            Buscar contactos →
        </div>
    </div>
</section>

<!-- SECCIÓN DE RECURSOS DESTACADOS MEJORADA -->
<section class="mt-20 w-full bg-transparent py-16 fade-in">
    <div class="w-11/12 md:w-3/4 mx-auto text-center">
        <h2 class="text-heading text-high-contrast mb-4">Recursos <span class="text-important">Destacados</span></h2>
        <p class="text-body text-muted mb-12 max-w-2xl mx-auto leading-relaxed">
            Contenido práctico y accesible desarrollado específicamente para 
            <strong>trabajadores argentinos</strong> con información <strong>100% verificada</strong>
        </p>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Tarjeta 1: Guías Prácticas -->
            <div class="professional-card group">
                <div class="text-4xl mb-5 group-hover:scale-110 transition-transform duration-300">📋</div>
                <h3 class="text-subheading text-high-contrast mb-4">Guías Paso a Paso</h3>
                <ul class="space-y-3 text-body text-muted mb-6">
                    <li class="flex items-center gap-3">
                        <div class="w-2 h-2 bg-accent-color rounded-full"></div>
                        <span>Despido laboral e indemnización</span>
                    </li>
                    <li class="flex items-center gap-3">
                        <div class="w-2 h-2 bg-success-color rounded-full"></div>
                        <span>Accidentes y procedimiento ART</span>
                    </li>
                    <li class="flex items-center gap-3">
                        <div class="w-2 h-2 bg-warning-color rounded-full"></div>
                        <span>Denuncias en ministerio</span>
                    </li>
                    <li class="flex items-center gap-3">
                        <div class="w-2 h-2 bg-purple-500 rounded-full"></div>
                        <span>Horas extras no pagas</span>
                    </li>
                </ul>
                <a href="{{ route('contenido') }}" class="inline-flex items-center gap-2 text-body font-semibold text-accent-color hover:gap-3 transition-all duration-300">
                    <span>Explorar todas las guías</span>
                    <span>→</span>
                </a>
            </div>

            <!-- Tarjeta 2: Asistente Virtual -->
            <div class="professional-card group">
                <div class="text-4xl mb-5 group-hover:scale-110 transition-transform duration-300">🤖</div>
                <h3 class="text-subheading text-high-contrast mb-4">Asistente Legal IA</h3>
                <p class="text-body text-muted mb-6 leading-relaxed">
                    Consultá dudas específicas y recibí respuestas <strong>inmediatas y precisas</strong> 
                    basadas en la legislación laboral argentina actualizada.
                </p>
                <a href="{{ route('chatbot') }}" class="inline-flex items-center gap-2 text-body font-semibold text-accent-color hover:gap-3 transition-all duration-300">
                    <span>Iniciar conversación</span>
                    <span>→</span>
                </a>
            </div>

            <!-- Tarjeta 3: Directorio Oficial -->
            <div class="professional-card group">
                <div class="text-4xl mb-5 group-hover:scale-110 transition-transform duration-300">🏛️</div>
                <h3 class="text-subheading text-high-contrast mb-4">Directorio Nacional</h3>
                <p class="text-body text-muted mb-6 leading-relaxed">
                    Accedé a <strong>contactos oficiales verificados</strong> de todos los ministerios 
                    de trabajo provinciales y nacional. Información actualizada 2025.
                </p>
                <a href="{{ route('directorio') }}" class="inline-flex items-center gap-2 text-body font-semibold text-accent-color hover:gap-3 transition-all duration-300">
                    <span>Buscar por provincia</span>
                    <span>→</span>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- ESTADÍSTICAS MEJORADAS -->
<section class="w-full py-20 bg-gradient-to-br from-white/50 to-gray-50/30 backdrop-blur-sm fade-in">
    <div class="w-11/12 md:w-3/4 mx-auto text-center">
        <h2 class="text-heading text-high-contrast mb-12">Información <span class="text-important">Confiable</span> y Actualizada</h2>
        
        <div class="grid grid-cols-2 md:grid-cols-4 gap-10">
            <div class="professional-card text-center !py-8">
                <div class="text-display text-accent-color mb-2">16+</div>
                <div class="text-subheading text-high-contrast mb-1">Provincias</div>
                <div class="text-small text-muted">En directorio oficial verificado</div>
            </div>
            <div class="professional-card text-center !py-8">
                <div class="text-display text-success-color mb-2">4</div>
                <div class="text-subheading text-high-contrast mb-1">Guías Prácticas</div>
                <div class="text-small text-muted">Completas y detalladas</div>
            </div>
            <div class="professional-card text-center !py-8">
                <div class="text-display text-warning-color mb-2">24/7</div>
                <div class="text-subheading text-high-contrast mb-1">Asistente Virtual</div>
                <div class="text-small text-muted">Disponible siempre que lo necesites</div>
            </div>
            <div class="professional-card text-center !py-8">
                <div class="text-display text-purple-600 mb-2">100%</div>
                <div class="text-subheading text-high-contrast mb-1">Gratuito</div>
                <div class="text-small text-muted">Acceso libre y sin restricciones</div>
            </div>
        </div>
    </div>
</section>

<!-- LLAMADA A LA ACCIÓN FINAL MEJORADA -->
<section class="w-full py-20 bg-white fade-in">
    <div class="w-11/12 md:w-2/3 mx-auto text-center">
        <h2 class="text-heading text-high-contrast mb-4">¿Tenés una <span class="text-important">consulta específica</span>?</h2>
        <p class="text-body text-muted mb-10 max-w-2xl mx-auto leading-relaxed">
            Nuestro <strong>asistente virtual especializado</strong> está listo para ayudarte con cualquier duda 
            sobre derechos laborales, contratos, despidos, licencias y más.
        </p>
        <div class="flex flex-col sm:flex-row justify-center gap-6">
            <a href="{{ route('chatbot') }}" class="btn-modern text-lg px-10 py-5">
                <span>🗨️ Iniciar Consulta con el Asistente IA</span>
            </a>
            <a href="{{ route('contacto') }}" class="btn-secondary text-lg px-10 py-5">
                <span>📞 Contacto Personalizado</span>
            </a>
        </div>
        
        <div class="mt-12 pt-8 border-t border-gray-100">
            <p class="text-small text-muted">
                ¿Preferís explorar por tu cuenta? 
                <a href="{{ route('contenido') }}" class="font-semibold text-accent-color hover:underline">
                    Ver todos los recursos disponibles
                </a>
            </p>
        </div>
    </div>
</section>
@endsection

@section('scripts')
<script>
    // Animaciones adicionales para la home
    document.addEventListener('DOMContentLoaded', function() {
        // Efecto de escritura para elementos importantes
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.animationDelay = '0.2s';
                    entry.target.classList.add('animate-fade-in-up');
                }
            });
        }, { threshold: 0.1 });

        document.querySelectorAll('.professional-card').forEach(card => {
            observer.observe(card);
        });
    });
</script>

<style>
    .animate-fade-in-up {
        animation: fadeInUp 0.8s ease-out forwards;
    }

    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .text-muted {
        color: var(--text-muted);
    }

    .text-accent-color {
        color: var(--accent-color);
    }

    .text-success-color {
        color: var(--success-color);
    }

    .text-warning-color {
        color: var(--warning-color);
    }

    .text-highlight {
    background: linear-gradient(135deg, #fbbf24, #f59e0b, #d97706);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
    font-weight: 800;
    text-shadow: 0 2px 10px rgba(245, 158, 11, 0.3);
}
</style>
@endsection