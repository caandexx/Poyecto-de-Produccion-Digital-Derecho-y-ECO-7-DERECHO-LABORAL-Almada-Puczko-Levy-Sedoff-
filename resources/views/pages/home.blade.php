@extends('layouts.app')

@section('content')
<div class="hero-section">
    <h1 style="text-align: center; font-size: 28px; color: #2563eb; margin-bottom: 30px;">
        🏛️ Derecho Laboral Argentino
    </h1>
    
    <div class="welcome-message">
        <h2 style="text-align: center; font-size: 22px; color: #374151; margin-bottom: 20px;">
            Conoce tus derechos laborales
        </h2>
        <p style="text-align: center; color: #6b7280; margin-bottom: 30px;">
            Información confiable y accesible sobre tus derechos en el trabajo
        </p>
    </div>

    <!-- Botones principales -->
    <div class="action-buttons">
        <button class="btn btn-success" onclick="location.href='{{ route('contenido') }}'">
            📚 Ver Contenido Jurídico
        </button>
        
        <button class="btn" onclick="openChat()">
            💬 Consultar al Chatbot
        </button>
        
        <button class="btn" onclick="location.href='{{ route('contacto') }}'">
            📞 Contacto y Ayuda
        </button>
    </div>

    <!-- Indicador de chat -->
    <div style="text-align: center; margin-top: 30px; padding: 10px; background: #f1f5f9; border-radius: 8px;">
        <small>💡 Chat disponible 24/7 para consultas laborales</small>
    </div>
</div>
@endsection

@section('scripts')
<script>
function openChat() {
    alert('🚀 Próximamente: Chatbot de consultas laborales');
    // Aquí integraremos el chatbot después
}
</script>
@endsection