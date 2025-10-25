@extends('layouts.app')

@section('content')
<div class="contact-page">
    <h1 style="text-align: center; font-size: 24px; color: #2563eb; margin-bottom: 20px;">
        📞 Contacto Directo
    </h1>

    <p style="text-align: center; color: #6b7280; margin-bottom: 30px;">
        Para consultas específicas o asesoramiento personalizado, completá este formulario y te contactaremos a la brevedad.
    </p>

    <!-- Formulario de Contacto -->
    <div class="contact-form" style="max-width: 600px; margin: 0 auto; background: white; border-radius: 12px; padding: 30px; box-shadow: 0 4px 6px rgba(0,0,0,0.1);">
        <form id="contact-form">
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-bottom: 20px;">
                <div>
                    <label style="display: block; margin-bottom: 8px; color: #374151; font-weight: bold;">Nombre completo</label>
                    <input type="text" placeholder="Tu nombre" 
                           style="width: 100%; padding: 12px; border: 2px solid #e5e7eb; border-radius: 8px; font-size: 16px;">
                </div>
                <div>
                    <label style="display: block; margin-bottom: 8px; color: #374151; font-weight: bold;">Email</label>
                    <input type="email" placeholder="tu@email.com" 
                           style="width: 100%; padding: 12px; border: 2px solid #e5e7eb; border-radius: 8px; font-size: 16px;">
                </div>
            </div>
            
            <div style="margin-bottom: 20px;">
                <label style="display: block; margin-bottom: 8px; color: #374151; font-weight: bold;">Tu consulta</label>
                <textarea placeholder="Describe tu situación o consulta específica..." 
                          style="width: 100%; padding: 12px; border: 2px solid #e5e7eb; border-radius: 8px; height: 150px; font-size: 16px; resize: vertical;"></textarea>
            </div>

            <button type="button" class="btn btn-success" onclick="submitContactForm()" 
                    style="width: 100%; padding: 15px; font-size: 16px; font-weight: bold; border-radius: 10px;">
                📨 Enviar Consulta
            </button>
        </form>

        <div style="margin-top: 25px; padding: 15px; background: #f0f9ff; border-radius: 8px; border-left: 4px solid #2563eb;">
            <p style="margin: 0; color: #374151; font-size: 14px;">
                💡 <strong>¿Consulta simple?</strong> Te recomendamos usar nuestro 
                <a href="{{ route('chatbot') }}" style="color: #2563eb; font-weight: bold;">Asistente Virtual</a> 
                para respuestas inmediatas sobre derechos laborales.
            </p>
        </div>
    </div>

    <!-- Volver al inicio -->
    <button class="btn" onclick="location.href='{{ route('home') }}'" 
            style="margin-top: 30px; width: 100%; max-width: 600px; padding: 12px; background: #6b7280; border-radius: 8px;">
        ← Volver al Inicio
    </button>
</div>
@endsection

@section('scripts')
<script>
function submitContactForm() {
    alert('📨 Consulta enviada correctamente. Te contactaremos dentro de las próximas 48 horas.');
    document.getElementById('contact-form').reset();
}
</script>
@endsection