@extends('layouts.app')

@section('content')
<div class="chatbot-page">
    <h1 style="text-align: center; font-size: 24px; color: #2563eb; margin-bottom: 20px;">
        🤖 Asistente Virtual Laboral
    </h1>

    <p style="text-align: center; color: #6b7280; margin-bottom: 30px;">
        Consulta gratuita sobre tus derechos laborales - Información basada en la Ley de Contrato de Trabajo
    </p>

    <!-- Sección del Chatbot Mejorado -->
    <div class="chat-section" style="background: white; border-radius: 12px; padding: 25px; margin-bottom: 25px; box-shadow: 0 4px 6px rgba(0,0,0,0.1);">
        
        <!-- Cabecera del Chat -->
        <div style="display: flex; align-items: center; gap: 10px; margin-bottom: 20px; padding-bottom: 15px; border-bottom: 2px solid #f1f5f9;">
            <div style="width: 40px; height: 40px; background: #2563eb; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; font-weight: bold;">
                🤖
            </div>
            <div>
                <h3 style="margin: 0; color: #374151;">Asistente Laboral</h3>
                <small style="color: #10b981;">● En línea - Listo para ayudarte</small>
            </div>
        </div>

        <!-- Área de Mensajes -->
        <div id="chat-messages" style="height: 400px; overflow-y: auto; border: 2px solid #f1f5f9; padding: 20px; border-radius: 12px; margin-bottom: 20px; background: #fafafa;">
            <div class="bot-message" style="background: white; padding: 15px; border-radius: 12px; margin-bottom: 15px; border-left: 4px solid #2563eb;">
                <strong>👋 Asistente:</strong> ¡Hola! Soy tu asistente virtual especializado en derecho laboral argentino. Puedo ayudarte con consultas sobre:
                <br><br>
                📋 <strong>Derechos laborales</strong><br>
                ⏰ <strong>Jornada y horarios</strong><br>
                💰 <strong>Salarios y pagos</strong><br>
                🏖️ <strong>Vacaciones y licencias</strong><br>
                ⚖️ <strong>Despidos e indemnizaciones</strong>
                <br><br>
                ¿En qué puedo asistirte hoy?
            </div>
        </div>

        <!-- Preguntas Rápidas Dinámicas -->
        <div class="quick-questions" style="margin-bottom: 20px;">
            <h4 style="color: #374151; margin-bottom: 12px;">🔍 Preguntas frecuentes:</h4>
            <div id="quick-buttons" style="display: flex; flex-wrap: wrap; gap: 8px;">
                <!-- Los botones se cargarán automáticamente desde el JSON -->
            </div>
        </div>

        <!-- Input para preguntas personalizadas -->
        <div class="chat-input" style="display: flex; gap: 12px; align-items: center;">
            <input type="text" id="user-question" placeholder="Escribe tu pregunta sobre derecho laboral..." 
                   style="flex: 1; padding: 14px; border: 2px solid #e5e7eb; border-radius: 10px; font-size: 16px;"
                   onkeypress="if(event.key === 'Enter') sendQuestion()">
            <button class="btn btn-success" onclick="sendQuestion()" 
                    style="padding: 14px 24px; border-radius: 10px; font-weight: bold;">
                📨 Enviar
            </button>
        </div>
    </div>

    <!-- Enlace al formulario de contacto para consultas complejas -->
    <div style="text-align: center; margin-top: 20px; padding: 15px; background: #f0f9ff; border-radius: 8px; border-left: 4px solid #2563eb;">
        <p style="margin: 0; color: #374151;">
            💡 <strong>¿Consulta compleja o personalizada?</strong> 
            <a href="{{ route('contacto') }}" style="color: #2563eb; font-weight: bold;">Completá nuestro formulario de contacto</a> 
            para asesoramiento específico.
        </p>
    </div>

    <!-- Volver al inicio -->
    <button class="btn" onclick="location.href='{{ route('home') }}'" 
            style="margin-top: 25px; width: 100%; padding: 12px; background: #6b7280; border-radius: 8px;">
        ← Volver al Inicio
    </button>
</div>
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
    
    // Mostrar preguntas como botones rápidos
    questions.slice(0, 8).forEach((faq, index) => {
        const button = document.createElement('button');
        button.textContent = `❓ ${faq.pregunta}`;
        button.className = 'btn';
        button.style.cssText = 'font-size: 14px; padding: 10px 15px; margin: 4px; background: #f8fafc; color: #374151; border: 1px solid #e5e7eb; border-radius: 8px; cursor: pointer; flex: 1; min-width: 200px; text-align: left;';
        button.onclick = () => askQuickQuestion(faq);
        quickButtons.appendChild(button);
    });
}

function askQuickQuestion(faq) {
    const chatMessages = document.getElementById('chat-messages');
    
    // Mensaje del usuario
    const userMessage = document.createElement('div');
    userMessage.innerHTML = `<strong>👤 Tú:</strong> ${faq.pregunta}`;
    userMessage.style.cssText = 'background: #dbeafe; padding: 15px; border-radius: 12px; margin-bottom: 15px; border-left: 4px solid #3b82f6;';
    chatMessages.appendChild(userMessage);
    
    // Respuesta del asistente
    const botMessage = document.createElement('div');
    let respuestaHTML = `<strong>🤖 Asistente:</strong> ${faq.respuesta}`;
    
    // Agregar sugerencia de guía si existe
    if (faq.sugerencia_guia && faqDatabase.sugerencias_guias[faq.sugerencia_guia]) {
        const guia = faqDatabase.sugerencias_guias[faq.sugerencia_guia];
        respuestaHTML += `
            <div style="margin-top: 15px; padding: 12px; background: #f0f9ff; border-radius: 8px; border-left: 4px solid #2563eb;">
                <strong>📚 Te recomiendo:</strong>
                <div style="margin-top: 8px;">
                    <strong>${guia.titulo}</strong><br>
                    <small>${guia.descripcion}</small>
                </div>
                <button onclick="location.href='${guia.enlace}'" 
                        style="margin-top: 10px; padding: 8px 16px; background: #2563eb; color: white; border: none; border-radius: 6px; cursor: pointer; font-size: 14px;">
                    📖 Ver Guía Completa
                </button>
            </div>
        `;
    }
    
    botMessage.innerHTML = respuestaHTML;
    botMessage.style.cssText = 'background: white; padding: 15px; border-radius: 12px; margin-bottom: 15px; border-left: 4px solid #10b981; box-shadow: 0 2px 4px rgba(0,0,0,0.05);';
    chatMessages.appendChild(botMessage);
    
    // Scroll al final
    chatMessages.scrollTop = chatMessages.scrollHeight;
}

function sendQuestion() {
    const questionInput = document.getElementById('user-question');
    const question = questionInput.value.trim();
    
    if (!question) {
        alert('Por favor, escribí tu pregunta.');
        return;
    }
    
    const chatMessages = document.getElementById('chat-messages');
    
    // Mensaje del usuario
    const userMessage = document.createElement('div');
    userMessage.innerHTML = `<strong>👤 Tú:</strong> ${question}`;
    userMessage.style.cssText = 'background: #dbeafe; padding: 15px; border-radius: 12px; margin-bottom: 15px; border-left: 4px solid #3b82f6;';
    chatMessages.appendChild(userMessage);
    
    // Buscar respuesta en la base de datos
    const respuesta = findBestAnswer(question);
    
    // Respuesta del asistente
    const botMessage = document.createElement('div');
    botMessage.innerHTML = respuesta;
    botMessage.style.cssText = 'background: white; padding: 15px; border-radius: 12px; margin-bottom: 15px; border-left: 4px solid #10b981; box-shadow: 0 2px 4px rgba(0,0,0,0.05);';
    chatMessages.appendChild(botMessage);
    
    // Limpiar input y hacer scroll
    questionInput.value = '';
    chatMessages.scrollTop = chatMessages.scrollHeight;
}

function findBestAnswer(question) {
    const questions = faqDatabase.faq_laboral;
    const lowerQuestion = question.toLowerCase();
    
    // Buscar coincidencia exacta primero
    for (const faq of questions) {
        const preguntaLower = faq.pregunta.toLowerCase().replace('¿', '').replace('?', '');
        if (lowerQuestion.includes(preguntaLower) || preguntaLower.includes(lowerQuestion)) {
            return formatAnswer(faq);
        }
    }
    
    // Buscar por tags
    for (const faq of questions) {
        for (const tag of faq.tags) {
            if (lowerQuestion.includes(tag.toLowerCase())) {
                return formatAnswer(faq);
            }
        }
    }
    
    // Búsqueda inteligente por palabras clave
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
        'no registrado': 'denuncia_laboral',
        'vacacion': 'vacaciones',
        'aguinaldo': 'aguinaldo',
        'sac': 'aguinaldo',
        'sueldo': 'aguinaldo',
        'jornada': 'horas',
        'horas': 'horas'
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
        <strong>🤖 Asistente:</strong> Gracias por tu consulta. Te recomiendo:
        <br><br>
        📚 <strong>Explorar nuestras Guías Prácticas:</strong>
        <ul style="margin: 10px 0; padding-left: 20px;">
            <li>🚨 <strong>Despido laboral</strong> - Cálculo de indemnización</li>
            <li>🚑 <strong>Accidente laboral</strong> - Pasos urgentes y ART</li>
            <li>⚖️ <strong>Denuncia laboral</strong> - Cómo reclamar tus derechos</li>
            <li>⏰ <strong>Horas extras</strong> - Cálculo y reclamo</li>
        </ul>
        <br>
        <button onclick="location.href='/contenido'" 
                style="padding: 10px 20px; background: #2563eb; color: white; border: none; border-radius: 8px; cursor: pointer; font-size: 14px;">
            📖 Ver Todas las Guías
        </button>
        <br><br>
        O podés <a href="{{ route('contacto') }}" style="color: #2563eb;">completar el formulario de contacto</a> para consultas específicas.
    `;
}

function formatAnswer(faq) {
    let respuestaHTML = `<strong>🤖 Asistente:</strong> ${faq.respuesta}`;
    
    // Agregar sugerencia de guía si existe
    if (faq.sugerencia_guia && faqDatabase.sugerencias_guias[faq.sugerencia_guia]) {
        const guia = faqDatabase.sugerencias_guias[faq.sugerencia_guia];
        respuestaHTML += `
            <div style="margin-top: 15px; padding: 12px; background: #f0f9ff; border-radius: 8px; border-left: 4px solid #2563eb;">
                <strong>📚 Te recomiendo:</strong>
                <div style="margin-top: 8px;">
                    <strong>${guia.titulo}</strong><br>
                    <small>${guia.descripcion}</small>
                </div>
                <button onclick="location.href='${guia.enlace}'" 
                        style="margin-top: 10px; padding: 8px 16px; background: #2563eb; color: white; border: none; border-radius: 6px; cursor: pointer; font-size: 14px;">
                    📖 Ver Guía Completa
                </button>
            </div>
        `;
    }
    
    return respuestaHTML;
}
</script>
@endsection