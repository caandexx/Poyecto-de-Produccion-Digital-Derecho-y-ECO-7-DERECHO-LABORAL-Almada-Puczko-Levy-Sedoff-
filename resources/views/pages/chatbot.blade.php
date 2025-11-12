@extends('layouts.app')

@section('content')
<!-- HERO SECTION PARA CHATBOT -->
<section class="gradient-box w-11/12 md:w-3/4 mt-8 py-16 px-8 text-center mx-auto fade-in">
    <div class="badge mb-4 inline-block">
        🤖 Asistente Inteligente
    </div>
    
    <h1 class="text-display text-white mb-6 max-w-4xl mx-auto leading-tight">
        Asistente Virtual de <span class="text-highlight">Derecho Laboral</span>
    </h1>
    
    <p class="text-body text-white/90 mb-8 max-w-2xl mx-auto leading-relaxed">
        Consultá tus dudas laborales y recibí respuestas <strong>inmediatas y precisas</strong>  
        basadas en la legislación argentina actualizada.
    </p>
    
    <div class="flex flex-col sm:flex-row justify-center gap-4">
        <a href="#chat-container" class="btn-modern">
            <span>💬 Comenzar Conversación</span>
        </a>
        <a href="{{ route('contenido') }}" class="btn-secondary text-white border-white/30 hover:border-white/60">
            <span>📚 Ver Guías Completas</span>
        </a>
    </div>
</section>

<!-- CHATBOT CONTAINER MEJORADO -->
<section id="chat-container" class="w-11/12 md:w-3/4 mx-auto mt-12 fade-in">
    <div class="professional-card">
        <!-- Cabecera del Chat Mejorada -->
        <div class="flex items-center gap-4 mb-8 pb-6 border-b border-gray-100">
            <div class="w-16 h-16 bg-gradient-to-br from-purple-500 to-blue-600 rounded-2xl flex items-center justify-center text-2xl text-white font-bold">
                🤖
            </div>
            <div>
                <h2 class="text-heading text-high-contrast mb-1">Asistente Laboral</h2>
                <div class="flex items-center gap-2">
                    <div class="w-2 h-2 bg-green-500 rounded-full animate-pulse"></div>
                    <span class="text-small text-success-color font-semibold">En línea - Listo para ayudarte</span>
                </div>
            </div>
        </div>

        <!-- Área de Mensajes Mejorada -->
        <div id="chat-messages" class="h-96 overflow-y-auto border-2 border-gray-100 rounded-2xl p-6 mb-6 bg-gray-50/30 backdrop-blur-sm">
            <div class="professional-card !bg-blue-50/30 !p-5 !shadow-none mb-4">
                <div class="flex items-start gap-3">
                    <div class="w-8 h-8 bg-blue-500 rounded-full flex items-center justify-center text-white text-sm font-bold mt-1">
                        AI
                    </div>
                    <div class="flex-1">
                        <div class="flex items-center gap-2 mb-2">
                            <span class="text-body font-semibold text-high-contrast">Asistente Laboral</span>
                            <span class="text-small text-muted">• Ahora</span>
                        </div>
                        <div class="text-body text-muted leading-relaxed">
                            <strong>👋 ¡Hola!</strong> Soy tu asistente virtual especializado en derecho laboral argentino. 
                            Puedo ayudarte con consultas sobre:
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-2 mt-3">
                            <div class="flex items-center gap-2 text-small text-muted">
                                <div class="w-1.5 h-1.5 bg-blue-500 rounded-full"></div>
                                <span>📋 <strong>Derechos laborales</strong></span>
                            </div>
                            <div class="flex items-center gap-2 text-small text-muted">
                                <div class="w-1.5 h-1.5 bg-green-500 rounded-full"></div>
                                <span>⏰ <strong>Jornada y horarios</strong></span>
                            </div>
                            <div class="flex items-center gap-2 text-small text-muted">
                                <div class="w-1.5 h-1.5 bg-purple-500 rounded-full"></div>
                                <span>💰 <strong>Salarios y pagos</strong></span>
                            </div>
                            <div class="flex items-center gap-2 text-small text-muted">
                                <div class="w-1.5 h-1.5 bg-amber-500 rounded-full"></div>
                                <span>🏖️ <strong>Vacaciones y licencias</strong></span>
                            </div>
                        </div>
                        <div class="mt-4 text-body text-muted">
                            <strong>¿En qué puedo asistirte hoy?</strong>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Preguntas Rápidas Mejoradas -->
        <div class="mb-6">
            <h4 class="text-subheading text-high-contrast mb-4">🔍 Preguntas frecuentes:</h4>
            <div id="quick-buttons" class="grid grid-cols-1 md:grid-cols-2 gap-3">
                <!-- Los botones se cargarán automáticamente desde el JSON -->
            </div>
        </div>

        <!-- Input para preguntas personalizadas Mejorado -->
        <div class="flex gap-4 items-stretch">
            <input 
                type="text" 
                id="user-question" 
                placeholder="Escribe tu pregunta sobre derecho laboral..." 
                class="flex-1 px-5 py-4 border-2 border-gray-200 rounded-2xl text-body focus:border-accent-color focus:outline-none focus:ring-2 focus:ring-accent-color/20 transition-all duration-300"
                onkeypress="if(event.key === 'Enter') sendQuestion()"
            >
            <button 
                onclick="sendQuestion()" 
                class="btn-modern !px-8 !rounded-2xl flex items-center gap-2"
            >
                <span>Enviar</span>
                <span>📨</span>
            </button>
        </div>

        <!-- Indicador de escritura (oculto por defecto) -->
        <div id="typing-indicator" class="hidden mt-4 professional-card !bg-gray-100 !p-4 !shadow-none">
            <div class="flex items-center gap-3">
                <div class="flex gap-1">
                    <div class="w-2 h-2 bg-gray-400 rounded-full animate-bounce"></div>
                    <div class="w-2 h-2 bg-gray-400 rounded-full animate-bounce" style="animation-delay: 0.1s"></div>
                    <div class="w-2 h-2 bg-gray-400 rounded-full animate-bounce" style="animation-delay: 0.2s"></div>
                </div>
                <span class="text-small text-muted">El asistente está escribiendo...</span>
            </div>
        </div>
    </div>
</section>

<!-- INFORMACIÓN ADICIONAL MEJORADA -->
<section class="w-11/12 md:w-3/4 mx-auto mt-16 fade-in">
    <div class="professional-card text-center">
        <h2 class="text-heading text-high-contrast mb-4">¿Consultas <span class="text-important">complejas</span>?</h2>
        <p class="text-body text-muted mb-8 max-w-2xl mx-auto">
            Para situaciones específicas que requieren atención personalizada, 
            te recomendamos nuestros otros recursos especializados.
        </p>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="professional-card !bg-blue-50/30 text-center group cursor-pointer" onclick="location.href='{{ route('contenido') }}'">
                <div class="text-3xl mb-4 group-hover:scale-110 transition-transform">📋</div>
                <h3 class="text-subheading text-high-contrast mb-3">Guías Completas</h3>
                <p class="text-body text-muted mb-4">Procedimientos paso a paso detallados</p>
                <div class="text-small text-accent-color font-semibold">Explorar guías →</div>
            </div>
            
            <div class="professional-card !bg-purple-50/30 text-center group cursor-pointer" onclick="location.href='{{ route('directorio') }}'">
                <div class="text-3xl mb-4 group-hover:scale-110 transition-transform">🏛️</div>
                <h3 class="text-subheading text-high-contrast mb-3">Directorio Oficial</h3>
                <p class="text-body text-muted mb-4">Contactos de organismos gubernamentales</p>
                <div class="text-small text-accent-color font-semibold">Buscar contactos →</div>
            </div>
            
            <div class="professional-card !bg-green-50/30 text-center group cursor-pointer" onclick="location.href='{{ route('contacto') }}'">
                <div class="text-3xl mb-4 group-hover:scale-110 transition-transform">📞</div>
                <h3 class="text-subheading text-high-contrast mb-3">Contacto Directo</h3>
                <p class="text-body text-muted mb-4">Atención personalizada para casos complejos</p>
                <div class="text-small text-accent-color font-semibold">Solicitar ayuda →</div>
            </div>
        </div>
    </div>
</section>

<!-- NAVEGACIÓN MEJORADA -->
<section class="w-11/12 md:w-3/4 mx-auto mt-12 mb-8 fade-in">
    <div class="flex flex-col sm:flex-row gap-4 justify-center">
        <a href="{{ route('contenido') }}" class="btn-secondary">
            <span>📚 Ver Todo el Contenido</span>
        </a>
        <a href="{{ route('directorio') }}" class="btn-secondary">
            <span>🏛️ Directorio Oficial</span>
        </a>
        <a href="{{ route('home') }}" class="btn-secondary">
            <span>🏠 Volver al Inicio</span>
        </a>
    </div>
</section>
@endsection

@section('scripts')
<script>
// Base de datos de preguntas y respuestas MEJORADA
const faqDatabase = {!! json_encode(json_decode(file_get_contents(public_path('../contenido/faq_chatbot/preguntas_frecuentes.json')))) !!};

// Cargar botones de preguntas rápidas al iniciar
document.addEventListener('DOMContentLoaded', function() {
    loadQuickQuestions();
});

function loadQuickQuestions() {
    const quickButtons = document.getElementById('quick-buttons');
    const questions = faqDatabase.faq_laboral;
    
    // Mostrar preguntas como botones rápidos mejorados
    questions.slice(0, 6).forEach((faq, index) => {
        const button = document.createElement('button');
        button.innerHTML = `
            <div class="professional-card !p-4 text-left group hover:!bg-accent-color/5 transition-all duration-300 cursor-pointer">
                <div class="flex items-center gap-3">
                    <div class="text-lg group-hover:scale-110 transition-transform">❓</div>
                    <div class="flex-1">
                        <div class="text-body font-semibold text-high-contrast group-hover:text-accent-color transition-colors">
                            ${faq.pregunta}
                        </div>
                    </div>
                </div>
            </div>
        `;
        button.onclick = () => askQuickQuestion(faq);
        quickButtons.appendChild(button);
    });
}

function askQuickQuestion(faq) {
    const chatMessages = document.getElementById('chat-messages');
    
    // Mensaje del usuario
    const userMessage = document.createElement('div');
    userMessage.innerHTML = `
        <div class="professional-card !bg-green-50/30 !p-5 !shadow-none mb-4 ml-8">
            <div class="flex items-start gap-3">
                <div class="w-8 h-8 bg-green-500 rounded-full flex items-center justify-center text-white text-sm font-bold mt-1">
                    TÚ
                </div>
                <div class="flex-1">
                    <div class="flex items-center gap-2 mb-2">
                        <span class="text-body font-semibold text-high-contrast">Tú</span>
                        <span class="text-small text-muted">• Ahora</span>
                    </div>
                    <div class="text-body text-muted">${faq.pregunta}</div>
                </div>
            </div>
        </div>
    `;
    chatMessages.appendChild(userMessage);
    
    // Mostrar indicador de escritura
    showTypingIndicator();
    
    // Simular delay de respuesta
    setTimeout(() => {
        hideTypingIndicator();
        // Respuesta del asistente
        const botMessage = document.createElement('div');
        let respuestaHTML = formatAnswer(faq);
        
        botMessage.innerHTML = respuestaHTML;
        chatMessages.appendChild(botMessage);
        
        // Scroll al final
        chatMessages.scrollTop = chatMessages.scrollHeight;
    }, 1000);
}

function sendQuestion() {
    const questionInput = document.getElementById('user-question');
    const question = questionInput.value.trim();
    
    if (!question) {
        showNotification('Por favor, escribí tu pregunta.', 'warning');
        return;
    }
    
    const chatMessages = document.getElementById('chat-messages');
    
    // Mensaje del usuario
    const userMessage = document.createElement('div');
    userMessage.innerHTML = `
        <div class="professional-card !bg-green-50/30 !p-5 !shadow-none mb-4 ml-8">
            <div class="flex items-start gap-3">
                <div class="w-8 h-8 bg-green-500 rounded-full flex items-center justify-center text-white text-sm font-bold mt-1">
                    TÚ
                </div>
                <div class="flex-1">
                    <div class="flex items-center gap-2 mb-2">
                        <span class="text-body font-semibold text-high-contrast">Tú</span>
                        <span class="text-small text-muted">• Ahora</span>
                    </div>
                    <div class="text-body text-muted">${question}</div>
                </div>
            </div>
        </div>
    `;
    chatMessages.appendChild(userMessage);
    
    // Mostrar indicador de escritura
    showTypingIndicator();
    
    // Simular delay de respuesta
    setTimeout(() => {
        hideTypingIndicator();
        // Buscar respuesta en la base de datos
        const respuesta = findBestAnswer(question);
        
        // Respuesta del asistente
        const botMessage = document.createElement('div');
        botMessage.innerHTML = respuesta;
        chatMessages.appendChild(botMessage);
        
        // Limpiar input y hacer scroll
        questionInput.value = '';
        chatMessages.scrollTop = chatMessages.scrollHeight;
    }, 1500);
}

function findBestAnswer(question) {
    const questions = faqDatabase.faq_laboral;
    const lowerQuestion = question.toLowerCase();
    
    // Búsqueda inteligente mejorada
    const keywordMapping = {
        'despido': 'despido',
        'despedir': 'despido', 
        'indemnizacion': 'despido',
        'liquidacion': 'despido',
        'accidente': 'accidente_laboral',
        'art': 'accidente_laboral',
        'srt': 'accidente_laboral',
        'lesion': 'accidente_laboral',
        'denuncia': 'denuncia_laboral',
        'denunciar': 'denuncia_laboral',
        'reclamo': 'denuncia_laboral',
        'ministerio': 'denuncia_laboral',
        'hora extra': 'horas_extras',
        'horario': 'horas_extras',
        'recargo': 'horas_extras',
        'trabajo negro': 'denuncia_laboral',
        'no registrado': 'denuncia_laboral'
    };
    
    for (const [keyword, category] of Object.entries(keywordMapping)) {
        if (lowerQuestion.includes(keyword)) {
            for (const faq of questions) {
                if (faq.tags.includes(category) || faq.sugerencia_guia === category) {
                    return formatAnswer(faq);
                }
            }
        }
    }
    
    // Respuesta por defecto mejorada
    return `
        <div class="professional-card !bg-blue-50/30 !p-5 !shadow-none mb-4">
            <div class="flex items-start gap-3">
                <div class="w-8 h-8 bg-blue-500 rounded-full flex items-center justify-center text-white text-sm font-bold mt-1">
                    AI
                </div>
                <div class="flex-1">
                    <div class="flex items-center gap-2 mb-2">
                        <span class="text-body font-semibold text-high-contrast">Asistente Laboral</span>
                        <span class="text-small text-muted">• Ahora</span>
                    </div>
                    <div class="text-body text-muted leading-relaxed">
                        <strong>Gracias por tu consulta.</strong> Te recomiendo explorar nuestras guías prácticas especializadas:
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-3 mt-4">
                        <div onclick="location.href='/contenido#guia-despido'" class="professional-card !p-3 !bg-white/50 !shadow-none cursor-pointer group hover:!bg-white/80 transition-all">
                            <div class="flex items-center gap-2">
                                <span class="text-lg group-hover:scale-110 transition-transform">🚨</span>
                                <span class="text-small font-semibold text-high-contrast">Despido laboral</span>
                            </div>
                        </div>
                        <div onclick="location.href='/contenido#guia-accidente'" class="professional-card !p-3 !bg-white/50 !shadow-none cursor-pointer group hover:!bg-white/80 transition-all">
                            <div class="flex items-center gap-2">
                                <span class="text-lg group-hover:scale-110 transition-transform">🚑</span>
                                <span class="text-small font-semibold text-high-contrast">Accidente laboral</span>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4">
                        <button onclick="location.href='/contenido'" class="btn-modern !text-sm !px-4 !py-2">
                            <span>📖 Ver Todas las Guías</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    `;
}

function formatAnswer(faq) {
    let respuestaHTML = `
        <div class="professional-card !bg-blue-50/30 !p-5 !shadow-none mb-4">
            <div class="flex items-start gap-3">
                <div class="w-8 h-8 bg-blue-500 rounded-full flex items-center justify-center text-white text-sm font-bold mt-1">
                    AI
                </div>
                <div class="flex-1">
                    <div class="flex items-center gap-2 mb-2">
                        <span class="text-body font-semibold text-high-contrast">Asistente Laboral</span>
                        <span class="text-small text-muted">• Ahora</span>
                    </div>
                    <div class="text-body text-muted leading-relaxed">${faq.respuesta}</div>
    `;
    
    // Agregar sugerencia de guía si existe
    if (faq.sugerencia_guia && faqDatabase.sugerencias_guias[faq.sugerencia_guia]) {
        const guia = faqDatabase.sugerencias_guias[faq.sugerencia_guia];
        respuestaHTML += `
                    <div class="mt-4 professional-card !p-4 !bg-white/50 !shadow-none">
                        <div class="flex items-center gap-3 mb-2">
                            <span class="text-lg">📚</span>
                            <span class="text-body font-semibold text-high-contrast">Te recomiendo:</span>
                        </div>
                        <div class="mb-3">
                            <div class="text-subheading text-high-contrast mb-1">${guia.titulo}</div>
                            <div class="text-small text-muted">${guia.descripcion}</div>
                        </div>
                        <button onclick="location.href='${guia.enlace}'" class="btn-modern !text-sm !px-4 !py-2 w-full">
                            <span>📖 Ver Guía Completa</span>
                        </button>
                    </div>
        `;
    }
    
    respuestaHTML += `
                </div>
            </div>
        </div>
    `;
    
    return respuestaHTML;
}

function showTypingIndicator() {
    document.getElementById('typing-indicator').classList.remove('hidden');
    const chatMessages = document.getElementById('chat-messages');
    chatMessages.scrollTop = chatMessages.scrollHeight;
}

function hideTypingIndicator() {
    document.getElementById('typing-indicator').classList.add('hidden');
}

function showNotification(message, type = 'info') {
    // Implementación simple de notificación
    alert(message); // En una versión más avanzada, podrías usar Toast o similar
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

/* Scrollbar personalizado para el chat */
#chat-messages::-webkit-scrollbar {
    width: 6px;
}

#chat-messages::-webkit-scrollbar-track {
    background: #f1f5f9;
    border-radius: 3px;
}

#chat-messages::-webkit-scrollbar-thumb {
    background: #cbd5e1;
    border-radius: 3px;
}

#chat-messages::-webkit-scrollbar-thumb:hover {
    background: #94a3b8;
}
</style>
@endsection