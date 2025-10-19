@extends('layouts.app')

@section('content')
<div class="contact-page">
    <h1 style="text-align: center; font-size: 24px; color: #2563eb; margin-bottom: 20px;">
        💬 Asistente Virtual Laboral
    </h1>

    <!-- Sección del Chatbot -->
    <div class="chat-section" style="background: white; border-radius: 8px; padding: 20px; margin-bottom: 20px;">
        <div id="chat-messages" style="height: 300px; overflow-y: auto; border: 1px solid #e5e7eb; padding: 15px; border-radius: 8px; margin-bottom: 15px;">
            <div class="bot-message" style="background: #f1f5f9; padding: 10px; border-radius: 8px; margin-bottom: 10px;">
                <strong>Asistente:</strong> Hola! Soy tu asistente virtual de derecho laboral. ¿En qué puedo ayudarte?
            </div>
        </div>

        <!-- Preguntas rápidas -->
        <div class="quick-questions" style="margin-bottom: 15px;">
            <button class="btn" onclick="askQuestion('Horas de trabajo')" style="font-size: 14px; padding: 8px; margin: 5px;">
                ⏰ Horas de trabajo
            </button>
            <button class="btn" onclick="askQuestion('Vacaciones')" style="font-size: 14px; padding: 8px; margin: 5px;">
                🏖️ Vacaciones
            </button>
            <button class="btn" onclick="askQuestion('Aguinaldo')" style="font-size: 14px; padding: 8px; margin: 5px;">
                💰 Aguinaldo
            </button>
        </div>

        <!-- Input para preguntas personalizadas -->
        <div class="chat-input" style="display: flex; gap: 10px;">
            <input type="text" id="user-question" placeholder="Escribe tu pregunta..." style="flex: 1; padding: 12px; border: 1px solid #d1d5db; border-radius: 8px;">
            <button class="btn btn-success" onclick="sendQuestion()" style="padding: 12px 20px;">
                Enviar
            </button>
        </div>
    </div>

    <!-- Formulario de contacto alternativo -->
    <div class="contact-form" style="background: white; border-radius: 8px; padding: 20px;">
        <h3 style="color: #374151; margin-bottom: 15px;">📞 Formulario de Contacto</h3>
        
        <form id="contact-form">
            <input type="text" placeholder="Tu nombre" style="width: 100%; padding: 12px; margin: 8px 0; border: 1px solid #d1d5db; border-radius: 8px;">
            <input type="email" placeholder="Tu email" style="width: 100%; padding: 12px; margin: 8px 0; border: 1px solid #d1d5db; border-radius: 8px;">
            <textarea placeholder="Tu mensaje o consulta" style="width: 100%; padding: 12px; margin: 8px 0; border: 1px solid #d1d5db; border-radius: 8px; height: 100px;"></textarea>
            <button type="button" class="btn btn-success" onclick="submitForm()">
                📨 Enviar Consulta
            </button>
        </form>
    </div>

    <!-- Volver al inicio -->
    <button class="btn" onclick="location.href='{{ route('home') }}'" style="margin-top: 20px;">
        ← Volver al Inicio
    </button>
</div>
@endsection

@section('scripts')
<script>
// Respuestas predefinidas del chatbot
const faqResponses = {
    'horas de trabajo': 'Máximo 8 horas diarias o 48 horas semanales según el artículo 197 de la Ley de Contrato de Trabajo',
    'vacaciones': 'Según antigüedad: 14 días hasta 5 años, 21 días hasta 10 años, 28 días más de 10 años. Artículo 150 LCT',
    'aguinaldo': 'Es el Sueldo Anual Complementario. Se paga en dos cuotas: mitad hasta el 30/06 y mitad hasta el 18/12. Artículo 122 LCT',
    'default': 'Gracias por tu consulta. Te recomiendo revisar la sección de contenido jurídico para información detallada.'
};

function askQuestion(question) {
    document.getElementById('user-question').value = question;
    sendQuestion();
}

function sendQuestion() {
    const question = document.getElementById('user-question').value.toLowerCase();
    const chatMessages = document.getElementById('chat-messages');
    
    // Agregar mensaje del usuario
    const userMessage = document.createElement('div');
    userMessage.innerHTML = `<strong>Tú:</strong> ${document.getElementById('user-question').value}`;
    userMessage.style.background = '#dbeafe';
    userMessage.style.padding = '10px';
    userMessage.style.borderRadius = '8px';
    userMessage.style.marginBottom = '10px';
    chatMessages.appendChild(userMessage);
    
    // Buscar respuesta
    let response = faqResponses.default;
    for (const [key, value] of Object.entries(faqResponses)) {
        if (question.includes(key)) {
            response = value;
            break;
        }
    }
    
    // Agregar respuesta del bot
    const botMessage = document.createElement('div');
    botMessage.innerHTML = `<strong>Asistente:</strong> ${response}`;
    botMessage.style.background = '#f1f5f9';
    botMessage.style.padding = '10px';
    botMessage.style.borderRadius = '8px';
    botMessage.style.marginBottom = '10px';
    chatMessages.appendChild(botMessage);
    
    // Limpiar input y hacer scroll
    document.getElementById('user-question').value = '';
    chatMessages.scrollTop = chatMessages.scrollHeight;
}

function submitForm() {
    alert('📨 Consulta enviada correctamente. Te contactaremos pronto!');
    document.getElementById('contact-form').reset();
}
</script>
@endsection