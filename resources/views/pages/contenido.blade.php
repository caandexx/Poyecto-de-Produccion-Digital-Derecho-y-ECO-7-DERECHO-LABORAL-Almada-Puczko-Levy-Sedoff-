@extends('layouts.app')

@section('content')
<div class="content-page">
    <h1 style="text-align: center; font-size: 24px; color: #2563eb; margin-bottom: 20px;">
        📖 Guía Completa de Derecho Laboral
    </h1>

    <!-- Secciones expandibles -->
    <div class="content-sections">
        <div class="section" onclick="toggleSection('derechos')" style="padding: 15px; background: white; border-radius: 8px; margin: 10px 0; cursor: pointer; border-left: 4px solid #2563eb;">
            <h3 style="margin: 0; color: #374151;">📋 Derechos Básicos del Trabajador</h3>
        </div>
        <div id="derechos" class="section-content" style="display: none; padding: 15px; background: #f8fafc; border-radius: 8px; margin-bottom: 15px;">
            <p><strong>Jornada laboral:</strong> 8 horas diarias, 48 horas semanales</p>
            <p><strong>Descansos:</strong> 2 días semanales consecutivos</p>
            <p><strong>Vacaciones:</strong> 14 a 28 días según antigüedad</p>
            <p><strong>Aguinaldo:</strong> 2 pagos anuales (junio y diciembre)</p>
        </div>

        <div class="section" onclick="toggleSection('leyes')" style="padding: 15px; background: white; border-radius: 8px; margin: 10px 0; cursor: pointer; border-left: 4px solid #10b981;">
            <h3 style="margin: 0; color: #374151;">⚖️ Leyes y Artículos Relevantes</h3>
        </div>
        <div id="leyes" class="section-content" style="display: none; padding: 15px; background: #f8fafc; border-radius: 8px; margin-bottom: 15px;">
            <p><strong>Ley de Contrato de Trabajo 20.744</strong></p>
            <p><strong>Ley de Teletrabajo 27.555</strong></p>
            <p><strong>Constitución Nacional Art. 14 bis</strong></p>
        </div>

        <div class="section" onclick="toggleSection('casos')" style="padding: 15px; background: white; border-radius: 8px; margin: 10px 0; cursor: pointer; border-left: 4px solid #f59e0b;">
            <h3 style="margin: 0; color: #374151;">📊 Casos Reales y Jurisprudencia</h3>
        </div>
        <div id="casos" class="section-content" style="display: none; padding: 15px; background: #f8fafc; border-radius: 8px; margin-bottom: 15px;">
            <p><strong>Caso:</strong> Despido indirecto por cambio de condiciones</p>
            <p><strong>Fallo:</strong> A favor del trabajador - indemnización completa</p>
            <p><strong>Base legal:</strong> Artículo 66 LCT</p>
        </div>
    </div>

    <!-- Botón de descarga -->
    <button class="btn btn-success" style="margin-top: 20px;">
        📥 Descargar Guía Completa (PDF)
    </button>

    <!-- Volver al inicio -->
    <button class="btn" onclick="location.href='{{ route('home') }}'" style="margin-top: 10px;">
        ← Volver al Inicio
    </button>
</div>
@endsection

@section('scripts')
<script>
function toggleSection(sectionId) {
    const section = document.getElementById(sectionId);
    section.style.display = section.style.display === 'none' ? 'block' : 'none';
}
</script>
@endsection