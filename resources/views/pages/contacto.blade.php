@extends('layouts.app')

@section('content')
<!-- HERO SECTION PARA CONTACTO -->
<section class="gradient-box w-11/12 md:w-3/4 mt-8 py-16 px-8 text-center mx-auto fade-in">
    <div class="badge mb-4 inline-block">
        📨 Contacto Directo
    </div>
    
    <h1 class="text-display text-white mb-6 max-w-4xl mx-auto leading-tight">
        ¿Necesitás <span class="text-highlight">asesoramiento personalizado</span>?
    </h1>
    
    <p class="text-body text-white/90 mb-8 max-w-2xl mx-auto leading-relaxed">
        Completá este formulario y nuestro equipo de <strong>especialistas en derecho laboral</strong> 
        te contactará a la brevedad con información específica para tu caso.
    </p>
    
    <div class="flex flex-col sm:flex-row justify-center gap-4">
        <a href="#contacto-form" class="btn-modern">
            <span>📝 Completar Formulario</span>
        </a>
        <a href="{{ route('chatbot') }}" class="btn-secondary text-white border-white/30 hover:border-white/60">
            <span>🤖 Consulta Rápida con el Bot</span>
        </a>
    </div>
</section>

<!-- FORMULARIO MEJORADO -->
<section id="contacto-form" class="w-11/12 md:w-3/4 mx-auto mt-12 fade-in">
    <div class="professional-card">
        <h2 class="text-heading text-high-contrast mb-2 text-center">
            <span class="text-important">📋 Formulario de Contacto</span>
        </h2>
        <p class="text-body text-muted text-center mb-8 max-w-2xl mx-auto">
            Todos los campos son obligatorios para brindarte la mejor asistencia posible
        </p>
        
        <form id="contact-form" class="max-w-2xl mx-auto">
            <!-- Información Personal -->
            <div class="professional-card !bg-blue-50/30 !border-2 !border-blue-200/50 mb-8">
                <div class="flex items-center gap-3 mb-4">
                    <div class="w-10 h-10 bg-blue-100 rounded-xl flex items-center justify-center text-blue-600">
                        👤
                    </div>
                    <div>
                        <h3 class="text-subheading text-high-contrast">Información Personal</h3>
                        <p class="text-small text-muted">Datos básicos para contactarte</p>
                    </div>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-body font-semibold text-high-contrast mb-3">
                            Nombre completo *
                        </label>
                        <input 
                            type="text" 
                            placeholder="Ej: María González"
                            class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl text-body focus:border-accent-color focus:outline-none focus:ring-2 focus:ring-accent-color/20 transition-all duration-300"
                            required
                        >
                    </div>
                    
                    <div>
                        <label class="block text-body font-semibold text-high-contrast mb-3">
                            Email *
                        </label>
                        <input 
                            type="email" 
                            placeholder="tu@email.com"
                            class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl text-body focus:border-accent-color focus:outline-none focus:ring-2 focus:ring-accent-color/20 transition-all duration-300"
                            required
                        >
                    </div>
                    
                    <div>
                        <label class="block text-body font-semibold text-high-contrast mb-3">
                            Teléfono *
                        </label>
                        <input 
                            type="tel" 
                            placeholder="+54 11 1234-5678"
                            class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl text-body focus:border-accent-color focus:outline-none focus:ring-2 focus:ring-accent-color/20 transition-all duration-300"
                            required
                        >
                    </div>
                    
                    <div>
                        <label class="block text-body font-semibold text-high-contrast mb-3">
                            Provincia *
                        </label>
                        <select class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl text-body focus:border-accent-color focus:outline-none focus:ring-2 focus:ring-accent-color/20 transition-all duration-300" required>
                            <option value="">Seleccioná tu provincia</option>
                            <option value="CABA">Ciudad de Buenos Aires</option>
                            <option value="BA">Buenos Aires</option>
                            <option value="CBA">Córdoba</option>
                            <option value="SF">Santa Fe</option>
                            <option value="MZ">Mendoza</option>
                            <option value="TU">Tucumán</option>
                            <option value="SA">Salta</option>
                            <option value="ER">Entre Ríos</option>
                            <option value="CT">Catamarca</option>
                            <option value="CC">Chaco</option>
                            <option value="CH">Chubut</option>
                            <option value="CR">Corrientes</option>
                            <option value="FO">Formosa</option>
                            <option value="JY">Jujuy</option>
                            <option value="LP">La Pampa</option>
                            <option value="LR">La Rioja</option>
                            <option value="MI">Misiones</option>
                            <option value="NQ">Neuquén</option>
                            <option value="RN">Río Negro</option>
                            <option value="SC">Santa Cruz</option>
                            <option value="SE">Santiago del Estero</option>
                            <option value="TF">Tierra del Fuego</option>
                        </select>
                    </div>
                </div>
            </div>
            
            <!-- Información Laboral -->
            <div class="professional-card !bg-amber-50/30 !border-2 !border-amber-200/50 mb-8">
                <div class="flex items-center gap-3 mb-4">
                    <div class="w-10 h-10 bg-amber-100 rounded-xl flex items-center justify-center text-amber-600">
                        💼
                    </div>
                    <div>
                        <h3 class="text-subheading text-high-contrast">Situación Laboral</h3>
                        <p class="text-small text-muted">Información relevante para tu consulta</p>
                    </div>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                    <div>
                        <label class="block text-body font-semibold text-high-contrast mb-3">
                            Tipo de empleo *
                        </label>
                        <select class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl text-body focus:border-accent-color focus:outline-none focus:ring-2 focus:ring-accent-color/20 transition-all duration-300" required>
                            <option value="">Seleccioná una opción</option>
                            <option value="relacion">En relación de dependencia</option>
                            <option value="monotributo">Monotributista</option>
                            <option value="autonomo">Trabajador autónomo</option>
                            <option value="domestico">Trabajador doméstico</option>
                            <option value="desempleado">Desempleado</option>
                            <option value="otro">Otro</option>
                        </select>
                    </div>
                    
                    <div>
                        <label class="block text-body font-semibold text-high-contrast mb-3">
                            Rama de actividad *
                        </label>
                        <select class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl text-body focus:border-accent-color focus:outline-none focus:ring-2 focus:ring-accent-color/20 transition-all duration-300" required>
                            <option value="">Seleccioná una opción</option>
                            <option value="comercio">Comercio</option>
                            <option value="industria">Industria</option>
                            <option value="servicios">Servicios</option>
                            <option value="salud">Salud</option>
                            <option value="educacion">Educación</option>
                            <option value="construccion">Construcción</option>
                            <option value="rural">Rural</option>
                            <option value="estatal">Sector público</option>
                            <option value="otro">Otro</option>
                        </select>
                    </div>
                </div>
                
                <div>
                    <label class="block text-body font-semibult text-high-contrast mb-3">
                        Antigüedad en el empleo *
                    </label>
                    <select class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl text-body focus:border-accent-color focus:outline-none focus:ring-2 focus:ring-accent-color/20 transition-all duration-300" required>
                        <option value="">Seleccioná una opción</option>
                        <option value="menos3">Menos de 3 meses</option>
                        <option value="3a6">3 a 6 meses</option>
                        <option value="6a12">6 meses a 1 año</option>
                        <option value="1a3">1 a 3 años</option>
                        <option value="3a5">3 a 5 años</option>
                        <option value="mas5">Más de 5 años</option>
                    </select>
                </div>
            </div>
            
            <!-- Consulta Específica -->
            <div class="professional-card !bg-purple-50/30 !border-2 !border-purple-200/50 mb-8">
                <div class="flex items-center gap-3 mb-4">
                    <div class="w-10 h-10 bg-purple-100 rounded-xl flex items-center justify-center text-purple-600">
                        ❓
                    </div>
                    <div>
                        <h3 class="text-subheading text-high-contrast">Tu Consulta</h3>
                        <p class="text-small text-muted">Detallá tu situación específica</p>
                    </div>
                </div>
                
                <div class="mb-6">
                    <label class="block text-body font-semibold text-high-contrast mb-3">
                        Tipo de consulta *
                    </label>
                    <select class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl text-body focus:border-accent-color focus:outline-none focus:ring-2 focus:ring-accent-color/20 transition-all duration-300" required>
                        <option value="">Seleccioná una opción</option>
                        <option value="despido">Despido</option>
                        <option value="discriminacion">Discriminación laboral</option>
                        <option value="acoso">Acoso laboral</option>
                        <option value="horarios">Horarios y jornada</option>
                        <option value="vacaciones">Vacaciones y licencias</option>
                        <option value="remuneracion">Remuneración</option>
                        <option value="accidente">Accidente laboral</option>
                        <option value="suspension">Suspensión</option>
                        <option value="renuncia">Renuncia</option>
                        <option value="otro">Otro</option>
                    </select>
                </div>
                
                <div>
                    <label class="block text-body font-semibold text-high-contrast mb-3">
                        Descripción detallada *
                    </label>
                    <textarea 
                        placeholder="Contanos específicamente qué sucedió, cuándo, quiénes estuvieron involucrados y qué medidas tomaste hasta ahora..."
                        class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl text-body focus:border-accent-color focus:outline-none focus:ring-2 focus:ring-accent-color/20 transition-all duration-300 h-40 resize-vertical"
                        required
                    ></textarea>
                    <div class="text-small text-muted mt-2">
                        💡 Cuantos más detalles proporciones, mejor podremos asesorarte
                    </div>
                </div>
            </div>
            
            <!-- Documentación -->
            <div class="professional-card !bg-green-50/30 !border-2 !border-green-200/50 mb-8">
                <div class="flex items-center gap-3 mb-4">
                    <div class="w-10 h-10 bg-green-100 rounded-xl flex items-center justify-center text-green-600">
                        📎
                    </div>
                    <div>
                        <h3 class="text-subheading text-high-contrast">Documentación (Opcional)</h3>
                        <p class="text-small text-muted">Podés adjuntar documentos relevantes</p>
                    </div>
                </div>
                
                <div class="border-2 border-dashed border-gray-300 rounded-xl p-6 text-center">
                    <div class="text-3xl mb-2">📤</div>
                    <p class="text-body text-muted mb-3">Arrastrá archivos aquí o hacé clic para seleccionar</p>
                    <button type="button" class="btn-secondary !text-sm !px-4 !py-2">
                        <span>📎 Seleccionar archivos</span>
                    </button>
                    <p class="text-small text-muted mt-3">
                        Formatos aceptados: PDF, JPG, PNG (Máx. 5MB por archivo)
                    </p>
                </div>
            </div>
            
            <!-- Botón de envío -->
            <div class="text-center">
                <button type="button" onclick="submitContactForm()" class="btn-modern !text-lg !px-8 !py-4">
                    <span>📨 Enviar Consulta Especializada</span>
                </button>
                <p class="text-small text-muted mt-4">
                    Te contactaremos dentro de las <strong>48 horas hábiles</strong> con un análisis preliminar de tu caso
                </p>
            </div>
        </form>
    </div>
</section>

<!-- ALTERNATIVAS RÁPIDAS -->
<section class="w-11/12 md:w-3/4 mx-auto mt-12 fade-in">
    <div class="professional-card">
        <h2 class="text-heading text-high-contrast mb-6 text-center">
            ⚡ <span class="text-important">Alternativas Rápidas</span>
        </h2>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="professional-card !bg-blue-50/30 text-center group cursor-pointer hover:!scale-105 transition-transform duration-300">
                <div class="text-4xl mb-4">🤖</div>
                <h3 class="text-subheading text-high-contrast mb-3">Asistente Virtual</h3>
                <p class="text-small text-muted mb-4">Respuestas inmediatas las 24hs sobre derechos laborales básicos</p>
                <a href="{{ route('chatbot') }}" class="btn-modern !text-sm !px-4 !py-2">
                    <span>Consultar ahora</span>
                </a>
            </div>
            
            <div class="professional-card !bg-green-50/30 text-center group cursor-pointer hover:!scale-105 transition-transform duration-300">
                <div class="text-4xl mb-4">📚</div>
                <h3 class="text-subheading text-high-contrast mb-3">Guías Prácticas</h3>
                <p class="text-small text-muted mb-4">Información detallada sobre temas laborales específicos</p>
                <a href="{{ route('contenido') }}" class="btn-modern !text-sm !px-4 !py-2">
                    <span>Ver guías</span>
                </a>
            </div>
            
            <div class="professional-card !bg-purple-50/30 text-center group cursor-pointer hover:!scale-105 transition-transform duration-300">
                <div class="text-4xl mb-4">🏛️</div>
                <h3 class="text-subheading text-high-contrast mb-3">Directorio Oficial</h3>
                <p class="text-small text-muted mb-4">Contactos verificados de ministerios de trabajo</p>
                <a href="{{ route('directorio') }}" class="btn-modern !text-sm !px-4 !py-2">
                    <span>Ver directorio</span>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- INFORMACIÓN DE RESPUESTA -->
<section class="w-11/12 md:w-3/4 mx-auto mt-12 fade-in">
    <div class="professional-card !bg-gradient-to-br !from-blue-50 !to-purple-50/30 !border-2 !border-blue-200/50">
        <div class="flex flex-col lg:flex-row gap-6 items-center">
            <div class="flex-shrink-0">
                <div class="w-20 h-20 bg-gradient-to-br from-blue-500 to-purple-600 rounded-2xl flex items-center justify-center text-2xl text-white font-bold">
                    ⏱️
                </div>
            </div>
            
            <div class="flex-1">
                <h3 class="text-subheading text-high-contrast mb-3">¿Qué pasa después de enviar el formulario?</h3>
                
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-4">
                    <div class="text-center">
                        <div class="w-12 h-12 bg-blue-100 rounded-xl flex items-center justify-center text-blue-600 text-lg font-bold mx-auto mb-2">
                            1
                        </div>
                        <div class="text-small font-semibold text-high-contrast">Recepción inmediata</div>
                        <div class="text-xs text-muted">Recibís confirmación por email</div>
                    </div>
                    
                    <div class="text-center">
                        <div class="w-12 h-12 bg-green-100 rounded-xl flex items-center justify-center text-green-600 text-lg font-bold mx-auto mb-2">
                            2
                        </div>
                        <div class="text-small font-semibold text-high-contrast">Análisis del caso</div>
                        <div class="text-xs text-muted">Nuestros especialistas revisan tu situación</div>
                    </div>
                    
                    <div class="text-center">
                        <div class="w-12 h-12 bg-purple-100 rounded-xl flex items-center justify-center text-purple-600 text-lg font-bold mx-auto mb-2">
                            3
                        </div>
                        <div class="text-small font-semibold text-high-contrast">Contacto personalizado</div>
                        <div class="text-xs text-muted">Te contactamos con recomendaciones específicas</div>
                    </div>
                </div>
                
                <div class="professional-card !bg-white/50 !p-4 !shadow-none">
                    <div class="flex items-center gap-3">
                        <div class="text-lg">💡</div>
                        <div>
                            <div class="text-body font-semibold text-high-contrast">Consulta urgente</div>
                            <div class="text-small text-muted">
                                Si tu caso requiere atención inmediata (despido, accidente laboral), 
                                <strong>contactá directamente al ministerio de trabajo de tu provincia</strong> 
                                a través de nuestro <a href="{{ route('directorio') }}" class="text-accent-color font-semibold">directorio oficial</a>.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- NAVEGACIÓN MEJORADA -->
<section class="w-11/12 md:w-3/4 mx-auto mt-12 mb-8 fade-in">
    <div class="flex flex-col sm:flex-row gap-4 justify-center">
        <a href="{{ route('directorio') }}" class="btn-secondary">
            <span>🏛️ Directorio Oficial</span>
        </a>
        <a href="{{ route('contenido') }}" class="btn-secondary">
            <span>📚 Guías Prácticas</span>
        </a>
        <a href="{{ route('chatbot') }}" class="btn-secondary">
            <span>🤖 Asistente Virtual</span>
        </a>
        <a href="{{ route('home') }}" class="btn-secondary">
            <span>🏠 Volver al Inicio</span>
        </a>
    </div>
</section>
@endsection

@section('scripts')
<script>
function submitContactForm() {
    // Mostrar loading state
    const submitBtn = document.querySelector('button[onclick="submitContactForm()"]');
    const originalText = submitBtn.innerHTML;
    submitBtn.innerHTML = '<span>⏳ Enviando consulta...</span>';
    submitBtn.disabled = true;
    
    // Simular envío (en una implementación real, aquí iría el fetch/AJAX)
    setTimeout(() => {
        // Mostrar notificación de éxito
        showSuccessNotification();
        
        // Restaurar botón
        submitBtn.innerHTML = originalText;
        submitBtn.disabled = false;
        
        // Limpiar formulario
        document.getElementById('contact-form').reset();
    }, 2000);
}

function showSuccessNotification() {
    const notification = document.createElement('div');
    notification.className = 'fixed top-4 right-4 professional-card !bg-green-50 !border-green-200 z-50 max-w-sm animate-fade-in';
    notification.innerHTML = `
        <div class="flex items-center gap-3">
            <div class="w-10 h-10 bg-green-100 rounded-xl flex items-center justify-center text-green-600">
                ✅
            </div>
            <div>
                <div class="text-body font-semibold text-high-contrast">Consulta enviada</div>
                <div class="text-small text-muted">Te contactaremos dentro de las 48 horas hábiles</div>
            </div>
        </div>
    `;
    
    document.body.appendChild(notification);
    
    // Remover después de 5 segundos
    setTimeout(() => {
        notification.remove();
    }, 5000);
}

// Animación para la notificación
const style = document.createElement('style');
style.textContent = `
    @keyframes fade-in {
        from {
            opacity: 0;
            transform: translateX(100%);
        }
        to {
            opacity: 1;
            transform: translateX(0);
        }
    }
    .animate-fade-in {
        animation: fade-in 0.3s ease-out;
    }
`;
document.head.appendChild(style);
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

/* Mejoras para los selects */
select {
    appearance: none;
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 20 20'%3e%3cpath stroke='%236b7280' stroke-linecap='round' stroke-linejoin='round' stroke-width='1.5' d='m6 8 4 4 4-4'/%3e%3c/svg%3e");
    background-position: right 0.5rem center;
    background-repeat: no-repeat;
    background-size: 1.5em 1.5em;
    padding-right: 2.5rem;
}

/* Mejora visual para file upload */
input[type="file"] {
    border: 2px dashed #e5e7eb;
    padding: 2rem;
    text-align: center;
    cursor: pointer;
    transition: all 0.3s ease;
}

input[type="file"]:hover {
    border-color: var(--accent-color);
    background-color: rgba(59, 130, 246, 0.05);
}
</style>
@endsection