@extends('layouts.app')

@section('content')
<!-- HERO SECTION PARA CONTENIDO -->
<section class="gradient-box w-11/12 md:w-3/4 mt-8 py-16 px-8 text-center mx-auto fade-in">
    <div class="badge mb-4 inline-block">
        📚 Recursos Completos
    </div>
    
    <h1 class="text-display text-white mb-6 max-w-4xl mx-auto leading-tight">
        Guía Completa de <span class="text-highlight">Derecho Laboral</span>
    </h1>
    
    <p class="text-body text-white/90 mb-8 max-w-2xl mx-auto leading-relaxed">
        Información <strong>verificada y actualizada</strong> sobre leyes, derechos y procedimientos laborales.  
        Todo lo que necesitás saber en un solo lugar.
    </p>
    
    <div class="flex flex-col sm:flex-row justify-center gap-4">
        <a href="{{ route('directorio') }}" class="btn-modern">
            <span>🏛️ Directorio Oficial</span>
        </a>
        <a href="{{ route('chatbot') }}" class="btn-secondary text-white border-white/30 hover:border-white/60">
            <span>🤖 Consultar al Asistente</span>
        </a>
    </div>
</section>

<!-- SECCIÓN DE CONTENIDO BÁSICO MEJORADA -->
<section class="w-11/12 md:w-3/4 mx-auto mt-12 fade-in">
    <div class="professional-card">
        <h2 class="text-heading text-high-contrast mb-8 text-center">Información <span class="text-important">Fundamental</span></h2>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- Columna 1 -->
            <div class="space-y-6">
                <div class="group cursor-pointer" onclick="toggleSection('derechos')">
                    <div class="flex items-center gap-4 p-4 rounded-xl hover:bg-gray-50/50 transition-all duration-300">
                        <div class="text-2xl group-hover:scale-110 transition-transform">📋</div>
                        <div>
                            <h3 class="text-subheading text-high-contrast mb-1">Derechos Básicos</h3>
                            <p class="text-small text-muted">Conocé tus derechos fundamentales como trabajador</p>
                        </div>
                    </div>
                </div>
                
                <div class="group cursor-pointer" onclick="toggleSection('leyes')">
                    <div class="flex items-center gap-4 p-4 rounded-xl hover:bg-gray-50/50 transition-all duration-300">
                        <div class="text-2xl group-hover:scale-110 transition-transform">⚖️</div>
                        <div>
                            <h3 class="text-subheading text-high-contrast mb-1">Leyes Relevantes</h3>
                            <p class="text-small text-muted">Legislación laboral argentina actualizada</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Columna 2 -->
            <div class="space-y-6">
                <div class="group cursor-pointer" onclick="toggleSection('casos')">
                    <div class="flex items-center gap-4 p-4 rounded-xl hover:bg-gray-50/50 transition-all duration-300">
                        <div class="text-2xl group-hover:scale-110 transition-transform">📊</div>
                        <div>
                            <h3 class="text-subheading text-high-contrast mb-1">Casos Reales</h3>
                            <p class="text-small text-muted">Jurisprudencia y fallos importantes</p>
                        </div>
                    </div>
                </div>
                
                <div class="group cursor-pointer" onclick="location.href='{{ route('directorio') }}'">
                    <div class="flex items-center gap-4 p-4 rounded-xl hover:bg-gray-50/50 transition-all duration-300">
                        <div class="text-2xl group-hover:scale-110 transition-transform">🏛️</div>
                        <div>
                            <h3 class="text-subheading text-high-contrast mb-1">Organismos Oficiales</h3>
                            <p class="text-small text-muted">Contactos de ministerios y entidades</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Contenido expandible -->
        <div id="derechos" class="section-content mt-8 professional-card !bg-blue-50/30 hidden">
            <h4 class="text-subheading text-high-contrast mb-4">📋 Derechos Básicos del Trabajador</h4>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <h5 class="text-body font-semibold text-high-contrast mb-3">Derechos Fundamentales</h5>
                    <ul class="space-y-2 text-body text-muted">
                        <li class="flex items-center gap-3">
                            <div class="w-2 h-2 bg-blue-500 rounded-full"></div>
                            <span><strong>Jornada laboral:</strong> 8 horas diarias, 48 horas semanales</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <div class="w-2 h-2 bg-blue-500 rounded-full"></div>
                            <span><strong>Descansos:</strong> 2 días semanales consecutivos</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <div class="w-2 h-2 bg-blue-500 rounded-full"></div>
                            <span><strong>Vacaciones:</strong> 14 a 28 días según antigüedad</span>
                        </li>
                    </ul>
                </div>
                <div>
                    <h5 class="text-body font-semibold text-high-contrast mb-3">Remuneración y Beneficios</h5>
                    <ul class="space-y-2 text-body text-muted">
                        <li class="flex items-center gap-3">
                            <div class="w-2 h-2 bg-green-500 rounded-full"></div>
                            <span><strong>Aguinaldo:</strong> 2 pagos anuales (junio y diciembre)</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <div class="w-2 h-2 bg-green-500 rounded-full"></div>
                            <span><strong>Horas extras:</strong> 50-100% de recargo</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <div class="w-2 h-2 bg-green-500 rounded-full"></div>
                            <span><strong>Licencias:</strong> Enfermedad, maternidad, estudios</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div id="leyes" class="section-content mt-8 professional-card !bg-purple-50/30 hidden">
            <h4 class="text-subheading text-high-contrast mb-4">⚖️ Leyes y Artículos Relevantes</h4>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div>
                    <h5 class="text-body font-semibold text-high-contrast mb-3">Legislación Nacional</h5>
                    <ul class="space-y-3 text-body text-muted">
                        <li class="p-3 rounded-lg bg-white/50">
                            <strong>Ley de Contrato de Trabajo 20.744</strong>
                            <p class="text-small mt-1">Regula relaciones laborales en el sector privado</p>
                        </li>
                        <li class="p-3 rounded-lg bg-white/50">
                            <strong>Ley de Teletrabajo 27.555</strong>
                            <p class="text-small mt-1">Derechos específicos para trabajo remoto</p>
                        </li>
                        <li class="p-3 rounded-lg bg-white/50">
                            <strong>Constitución Nacional Art. 14 bis</strong>
                            <p class="text-small mt-1">Derechos fundamentales del trabajador</p>
                        </li>
                    </ul>
                </div>
                <div>
                    <h5 class="text-body font-semibold text-high-contrast mb-3">Normativas Específicas</h5>
                    <ul class="space-y-3 text-body text-muted">
                        <li class="p-3 rounded-lg bg-white/50">
                            <strong>Ley de Riesgos del Trabajo 24.557</strong>
                            <p class="text-small mt-1">Seguridad e higiene laboral</p>
                        </li>
                        <li class="p-3 rounded-lg bg-white/50">
                            <strong>Ley de Empleo 24.013</strong>
                            <p class="text-small mt-1">Fomento del empleo registrado</p>
                        </li>
                        <li class="p-3 rounded-lg bg-white/50">
                            <strong>Convenios Colectivos</strong>
                            <p class="text-small mt-1">Por actividad o rubro específico</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div id="casos" class="section-content mt-8 professional-card !bg-amber-50/30 hidden">
            <h4 class="text-subheading text-high-contrast mb-4">📊 Casos Reales y Jurisprudencia</h4>
            <div class="space-y-6">
                <div class="p-4 rounded-xl bg-white/50 border-l-4 border-amber-500">
                    <h5 class="text-body font-semibold text-high-contrast mb-2">Caso: Despido Indirecto</h5>
                    <p class="text-body text-muted mb-2"><strong>Fallo:</strong> A favor del trabajador - indemnización completa</p>
                    <p class="text-small text-muted"><strong>Base legal:</strong> Artículo 66 LCT - Cambio unilateral de condiciones</p>
                </div>
                <div class="p-4 rounded-xl bg-white/50 border-l-4 border-green-500">
                    <h5 class="text-body font-semibold text-high-contrast mb-2">Caso: Horas Extras No Pagas</h5>
                    <p class="text-body text-muted mb-2"><strong>Fallo:</strong> Pago retroactivo + 100% recargo</p>
                    <p class="text-small text-muted"><strong>Base legal:</strong> Artículos 201-204 LCT - Jornada y horas extras</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- SECCIÓN GUÍAS PRÁCTICAS (MANTENIENDO TU ESTRUCTURA PERO MEJORADA) -->
<section class="w-11/12 md:w-3/4 mx-auto mt-16 fade-in">
    <div class="text-center mb-12">
        <h2 class="text-heading text-high-contrast mb-4">Guías <span class="text-important">Prácticas</span> Paso a Paso</h2>
        <p class="text-body text-muted max-w-2xl mx-auto">
            Instrucciones detalladas para situaciones laborales específicas. 
            <strong>Información verificada y procedimientos actualizados.</strong>
        </p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <!-- Guía 1: Despido -->
        <div class="professional-card group cursor-pointer" onclick="toggleSection('guia-despido')">
            <div class="flex items-start gap-4">
                <div class="text-3xl group-hover:scale-110 transition-transform">🚨</div>
                <div class="flex-1">
                    <h3 class="text-subheading text-high-contrast mb-2">Despido Laboral</h3>
                    <p class="text-body text-muted mb-4">Qué hacer si te despiden, cálculo de indemnización, plazos legales</p>
                    <div class="text-small text-accent-color font-semibold opacity-0 group-hover:opacity-100 transition-opacity">
                        Ver guía completa →
                    </div>
                </div>
            </div>
        </div>

        <!-- Guía 2: Accidente Laboral -->
        <div class="professional-card group cursor-pointer" onclick="toggleSection('guia-accidente')">
            <div class="flex items-start gap-4">
                <div class="text-3xl group-hover:scale-110 transition-transform">🚑</div>
                <div class="flex-1">
                    <h3 class="text-subheading text-high-contrast mb-2">Accidente Laboral</h3>
                    <p class="text-body text-muted mb-4">Pasos urgentes, contacto con ART, denuncia en SRT, tratamientos</p>
                    <div class="text-small text-accent-color font-semibold opacity-0 group-hover:opacity-100 transition-opacity">
                        Ver procedimiento →
                    </div>
                </div>
            </div>
        </div>

        <!-- Guía 3: Denuncia Laboral -->
        <div class="professional-card group cursor-pointer" onclick="toggleSection('guia-denuncia')">
            <div class="flex items-start gap-4">
                <div class="text-3xl group-hover:scale-110 transition-transform">⚖️</div>
                <div class="flex-1">
                    <h3 class="text-subheading text-high-contrast mb-2">Denuncia Laboral</h3>
                    <p class="text-body text-muted mb-4">Cómo denunciar en ministerio, documentación, plazos, conciliación</p>
                    <div class="text-small text-accent-color font-semibold opacity-0 group-hover:opacity-100 transition-opacity">
                        Aprender a denunciar →
                    </div>
                </div>
            </div>
        </div>

        <!-- Guía 4: Horas Extras -->
        <div class="professional-card group cursor-pointer" onclick="toggleSection('guia-horas-extras')">
            <div class="flex items-start gap-4">
                <div class="text-3xl group-hover:scale-110 transition-transform">⏰</div>
                <div class="flex-1">
                    <h3 class="text-subheading text-high-contrast mb-2">Horas Extras</h3>
                    <p class="text-body text-muted mb-4">Reclamo por horas no pagas, cálculo, pruebas, plazos legales</p>
                    <div class="text-small text-accent-color font-semibold opacity-0 group-hover:opacity-100 transition-opacity">
                        Ver cálculo y reclamo →
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- CONTENIDO EXPANDIBLE DE GUÍAS (MANTENIENDO TU ESTRUCTURA ORIGINAL) -->
    <div id="guia-despido" class="section-content mt-8 professional-card !bg-red-50/30 hidden">
        <h4 class="text-subheading text-high-contrast mb-6">🚨 Guía Completa: Qué hacer si te despiden</h4>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-8">
            <div>
                <h5 class="text-body font-semibold text-high-contrast mb-4">⚡ Pasos Inmediatos</h5>
                <ul class="space-y-3 text-body text-muted">
                    <li class="flex items-center gap-3 p-3 rounded-lg bg-white/50">
                        <div class="text-lg">📬</div>
                        <span><strong>Recibir notificación formal</strong> por escrito</span>
                    </li>
                    <li class="flex items-center gap-3 p-3 rounded-lg bg-white/50">
                        <div class="text-lg">📋</div>
                        <span><strong>Reunir documentación</strong> completa</span>
                    </li>
                    <li class="flex items-center gap-3 p-3 rounded-lg bg-white/50">
                        <div class="text-lg">🧮</div>
                        <span><strong>Calcular indemnización</strong> aproximada</span>
                    </li>
                    <li class="flex items-center gap-3 p-3 rounded-lg bg-white/50">
                        <div class="text-lg">📞</div>
                        <span><strong>Contactar organismos</strong> de ayuda</span>
                    </li>
                </ul>
            </div>
            
            <div>
                <h5 class="text-body font-semibold text-high-contrast mb-4">💰 Indemnización</h5>
                <ul class="space-y-3 text-body text-muted">
                    <li class="p-3 rounded-lg bg-white/50">
                        <strong>1 mes de salario × años trabajados</strong>
                    </li>
                    <li class="p-3 rounded-lg bg-white/50">
                        <strong>Límite máximo:</strong> 3 salarios anuales
                    </li>
                    <li class="p-3 rounded-lg bg-white/50">
                        <strong>Incluye SAC</strong> y vacaciones proporcionales
                    </li>
                </ul>
            </div>
        </div>
        
        <div class="professional-card !bg-green-50/30">
            <h5 class="text-body font-semibold text-high-contrast mb-3">📞 Ayuda Inmediata</h5>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-body text-muted">
                <div>
                    <strong>Ministerio de Trabajo:</strong> 0800-666-4100
                </div>
                <div>
                    <strong>Misiones:</strong> (0376) 444-7535
                </div>
            </div>
        </div>
    </div>

    <!-- (Mantener las otras guías expandibles con el mismo formato premium) -->
    <!-- ... resto de las guías manteniendo tu estructura pero con el nuevo diseño ... -->
</section>

<!-- NAVEGACIÓN MEJORADA -->
<section class="w-11/12 md:w-3/4 mx-auto mt-12 fade-in">
    <div class="professional-card text-center">
        <h3 class="text-subheading text-high-contrast mb-4">¿Necesitás más ayuda?</h3>
        <p class="text-body text-muted mb-6">
            Nuestro asistente virtual está disponible 24/7 para consultas específicas
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="{{ route('chatbot') }}" class="btn-modern">
                <span>🤖 Consultar al Asistente</span>
            </a>
            <a href="{{ route('directorio') }}" class="btn-secondary">
                <span>🏛️ Ver Directorio Oficial</span>
            </a>
            <a href="{{ route('home') }}" class="btn-secondary">
                <span>🏠 Volver al Inicio</span>
            </a>
        </div>
    </div>
</section>
@endsection

@section('scripts')
<script>
function toggleSection(sectionId) {
    const section = document.getElementById(sectionId);
    const allSections = document.querySelectorAll('.section-content');
    
    // Cerrar todas las secciones primero
    allSections.forEach(sec => {
        if (sec.id !== sectionId) {
            sec.classList.add('hidden');
        }
    });
    
    // Abrir/cerrar la sección clickeada
    section.classList.toggle('hidden');
    
    // Scroll suave a la sección si se abre
    if (!section.classList.contains('hidden')) {
        section.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
    }
}
</script>

<style>
.text-highlight {
    background: linear-gradient(135deg, #fbbf24, #f59e0b, #d97706);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
    font-weight: 800;
    text-shadow: 0 2px 10px rgba(245, 158, 11, 0.3);
}

.hidden {
    display: none !important;
}

.section-content {
    animation: slideDown 0.3s ease-out;
}

@keyframes slideDown {
    from {
        opacity: 0;
        transform: translateY(-10px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}
</style>
@endsection