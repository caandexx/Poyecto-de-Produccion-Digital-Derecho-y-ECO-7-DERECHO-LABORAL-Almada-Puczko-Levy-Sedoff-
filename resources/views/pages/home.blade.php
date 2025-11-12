@extends('layouts.app')

@section('content')
<!-- HERO SECTION MEJORADA -->
<section class="gradient-box w-11/12 md:w-3/4 mt-8 py-16 px-6 text-center mx-auto">
    <div class="inline-block bg-white/70 text-gray-800 text-sm font-semibold px-3 py-1 rounded-full mb-4 shadow-sm">
        🚀 Herramienta educativa actualizada
    </div>
    <h1 class="text-4xl md:text-5xl font-bold mb-4 text-gray-900">Conocé tus Derechos Laborales</h1>
    <p class="text-lg text-gray-700 mb-8 max-w-2xl mx-auto">
        Accedé a información confiable sobre leyes laborales, contratos, licencias, despidos y más.  
        Contenido verificado y asistente virtual especializado.
    </p>
    <div class="flex flex-col sm:flex-row justify-center gap-4">
        <a href="{{ route('chatbot') }}" class="btn-black inline-flex items-center justify-center">
            🤖 Consultar al Asistente
        </a>
        <a href="{{ route('contenido') }}" class="border border-gray-300 rounded-full px-6 py-3 font-semibold hover:bg-gray-100 transition inline-flex items-center justify-center">
            📚 Ver Contenido Completo
        </a>
    </div>
</section>

<!-- PANEL DE ACCESO RÁPIDO -->
<section class="panel w-11/12 md:w-4/5 -mt-6 py-10 px-6 grid grid-cols-1 md:grid-cols-4 gap-6 mx-auto">
    <div class="info-card cursor-pointer" onclick="location.href='{{ route('contenido') }}#guia-despido'">
        <h3 class="text-xl font-semibold mb-2">🚨 Despidos</h3>
        <p class="text-gray-600">Guía completa sobre indemnizaciones y pasos legales</p>
    </div>
    <div class="info-card cursor-pointer" onclick="location.href='{{ route('contenido') }}#guia-accidente'">
        <h3 class="text-xl font-semibold mb-2">🚑 Accidentes</h3>
        <p class="text-gray-600">Procedimiento ART y cobertura médica laboral</p>
    </div>
    <div class="info-card cursor-pointer" onclick="location.href='{{ route('contenido') }}#guia-denuncia'">
        <h3 class="text-xl font-semibold mb-2">⚖️ Denuncias</h3>
        <p class="text-gray-600">Cómo reclamar tus derechos en el ministerio</p>
    </div>
    <div class="info-card cursor-pointer" onclick="location.href='{{ route('directorio') }}'">
        <h3 class="text-xl font-semibold mb-2">🏛️ Directorio</h3>
        <p class="text-gray-600">Contactos oficiales de todos los ministerios</p>
    </div>
</section>

<!-- SECCIÓN INFORMATIVA MEJORADA -->
<section class="mt-16 w-full bg-white py-16">
    <div class="w-11/12 md:w-3/4 mx-auto">
        <h2 class="text-3xl font-bold mb-4 text-center">Recursos Destacados</h2>
        <p class="text-gray-600 mb-10 text-center max-w-2xl mx-auto">
            Contenido práctico y accesible desarrollado específicamente para trabajadores argentinos
        </p>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Tarjeta 1: Guías Prácticas -->
            <div class="border border-gray-200 rounded-xl p-6 shadow-sm hover:shadow-md transition">
                <div class="text-2xl mb-3">📋</div>
                <h3 class="font-semibold text-lg mb-3">Guías Paso a Paso</h3>
                <ul class="space-y-2 text-gray-600">
                    <li>• Despido laboral e indemnización</li>
                    <li>• Accidentes y procedimiento ART</li>
                    <li>• Denuncias en ministerio</li>
                    <li>• Horas extras no pagas</li>
                </ul>
                <a href="{{ route('contenido') }}" class="mt-4 inline-block text-blue-600 font-semibold hover:text-blue-800">
                    Ver todas las guías →
                </a>
            </div>

            <!-- Tarjeta 2: Asistente Virtual -->
            <div class="border border-gray-200 rounded-xl p-6 shadow-sm hover:shadow-md transition">
                <div class="text-2xl mb-3">🤖</div>
                <h3 class="font-semibold text-lg mb-3">Asistente Legal IA</h3>
                <p class="text-gray-600 mb-4">
                    Consultá dudas específicas y recibí respuestas inmediatas basadas en la legislación laboral argentina.
                </p>
                <a href="{{ route('chatbot') }}" class="mt-2 inline-block text-blue-600 font-semibold hover:text-blue-800">
                    Chatear ahora →
                </a>
            </div>

            <!-- Tarjeta 3: Directorio Oficial -->
            <div class="border border-gray-200 rounded-xl p-6 shadow-sm hover:shadow-md transition">
                <div class="text-2xl mb-3">🏛️</div>
                <h3 class="font-semibold text-lg mb-3">Directorio Nacional</h3>
                <p class="text-gray-600 mb-4">
                    Accedé a contactos oficiales de todos los ministerios de trabajo provinciales y nacional.
                </p>
                <a href="{{ route('directorio') }}" class="mt-2 inline-block text-blue-600 font-semibold hover:text-blue-800">
                    Buscar contacto →
                </a>
            </div>
        </div>
    </div>
</section>

<!-- ESTADÍSTICAS O DATOS ÚTILES -->
<section class="w-full py-16 bg-gray-50">
    <div class="w-11/12 md:w-3/4 mx-auto text-center">
        <h2 class="text-3xl font-bold mb-12">Información Confiable y Actualizada</h2>
        
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
            <div>
                <div class="text-2xl font-bold text-blue-600 mb-2">16+</div>
                <div class="text-gray-600">Provincias</div>
                <div class="text-sm text-gray-500">En directorio oficial</div>
            </div>
            <div>
                <div class="text-2xl font-bold text-green-600 mb-2">4</div>
                <div class="text-gray-600">Guías prácticas</div>
                <div class="text-sm text-gray-500">Completas y detalladas</div>
            </div>
            <div>
                <div class="text-2xl font-bold text-purple-600 mb-2">24/7</div>
                <div class="text-gray-600">Asistente virtual</div>
                <div class="text-sm text-gray-500">Disponible siempre</div>
            </div>
            <div>
                <div class="text-2xl font-bold text-orange-600 mb-2">100%</div>
                <div class="text-gray-600">Gratuito</div>
                <div class="text-sm text-gray-500">Acceso libre</div>
            </div>
        </div>
    </div>
</section>

<!-- LLAMADA A LA ACCIÓN FINAL -->
<section class="w-full py-16 bg-white">
    <div class="w-11/12 md:w-2/3 mx-auto text-center">
        <h2 class="text-3xl font-bold mb-4">¿Tenés una consulta específica?</h2>
        <p class="text-gray-600 mb-8 text-lg">
            Nuestro equipo virtual está listo para ayudarte con cualquier duda sobre derechos laborales
        </p>
        <div class="flex flex-col sm:flex-row justify-center gap-4">
            <a href="{{ route('chatbot') }}" class="btn-black text-lg px-8 py-4">
                🗨️ Iniciar Consulta con el Asistente
            </a>
            <a href="{{ route('contacto') }}" class="border-2 border-gray-800 rounded-full px-8 py-4 font-semibold hover:bg-gray-800 hover:text-white transition text-lg">
                📞 Contacto Personalizado
            </a>
        </div>
    </div>
</section>
@endsection