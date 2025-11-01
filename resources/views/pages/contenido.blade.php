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

    <!-- NUEVA SECCIÓN: GUÍAS PRÁCTICAS -->
    <div style="margin-top: 40px; padding-top: 20px; border-top: 2px solid #e5e7eb;">
        <h2 style="text-align: center; color: #2563eb; margin-bottom: 25px;">
            📋 Guías Prácticas Paso a Paso
        </h2>
        
        <div class="guides-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 20px; margin-bottom: 30px;">
            
            <!-- Guía 1: Despido -->
            <div class="guide-card" onclick="toggleSection('guia-despido')" style="background: white; padding: 20px; border-radius: 12px; cursor: pointer; border-left: 4px solid #ef4444; box-shadow: 0 2px 8px rgba(0,0,0,0.1); transition: all 0.3s ease;">
                <h3 style="margin: 0 0 10px 0; color: #374151; display: flex; align-items: center; gap: 10px;">
                    🚨 Despido Laboral
                </h3>
                <p style="margin: 0; color: #6b7280; font-size: 14px;">
                    Qué hacer si te despiden, cálculo de indemnización, plazos legales
                </p>
            </div>
            <div id="guia-despido" class="guide-content" style="display: none; background: #f8fafc; padding: 25px; border-radius: 12px; margin-bottom: 20px; grid-column: 1 / -1;">
                <h4 style="color: #374151; margin-bottom: 15px;">🚨 Guía Completa: Qué hacer si te despiden</h4>
                
                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px;">
                    <div>
                        <h5 style="color: #2563eb; margin-bottom: 10px;">⚡ Pasos Inmediatos</h5>
                        <ul style="color: #374151; margin: 0; padding-left: 20px;">
                            <li>Recibir notificación formal por escrito</li>
                            <li>Reunir documentación completa</li>
                            <li>Calcular indemnización aproximada</li>
                            <li>Contactar organismos de ayuda</li>
                        </ul>
                    </div>
                    
                    <div>
                        <h5 style="color: #2563eb; margin-bottom: 10px;">💰 Indemnización</h5>
                        <ul style="color: #374151; margin: 0; padding-left: 20px;">
                            <li><strong>1 mes de salario × años trabajados</strong></li>
                            <li>Límite máximo: 3 salarios anuales</li>
                            <li>Incluye SAC y vacaciones proporcionales</li>
                        </ul>
                    </div>
                </div>
                
                <div style="margin-top: 20px; padding: 15px; background: white; border-radius: 8px; border-left: 4px solid #10b981;">
                    <h5 style="color: #374151; margin: 0 0 10px 0;">📞 Ayuda Inmediata</h5>
                    <p style="margin: 0; color: #6b7280; font-size: 14px;">
                        <strong>Ministerio de Trabajo:</strong> 0800-666-4100<br>
                        <strong>Misiones:</strong> (0376) 444-7535
                    </p>
                </div>
            </div>

            <!-- Guía 2: Accidente Laboral -->
            <div class="guide-card" onclick="toggleSection('guia-accidente')" style="background: white; padding: 20px; border-radius: 12px; cursor: pointer; border-left: 4px solid #f59e0b; box-shadow: 0 2px 8px rgba(0,0,0,0.1); transition: all 0.3s ease;">
                <h3 style="margin: 0 0 10px 0; color: #374151; display: flex; align-items: center; gap: 10px;">
                    🚑 Accidente Laboral
                </h3>
                <p style="margin: 0; color: #6b7280; font-size: 14px;">
                    Pasos urgentes, contacto con ART, denuncia en SRT, tratamientos
                </p>
            </div>
            <div id="guia-accidente" class="guide-content" style="display: none; background: #f8fafc; padding: 25px; border-radius: 12px; margin-bottom: 20px; grid-column: 1 / -1;">
                <h4 style="color: #374151; margin-bottom: 15px;">🚑 Guía Completa: Accidente Laboral y ART</h4>
                
                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px;">
                    <div>
                        <h5 style="color: #2563eb; margin-bottom: 10px;">🚨 Pasos Inmediatos (2 horas)</h5>
                        <ul style="color: #374151; margin: 0; padding-left: 20px;">
                            <li>Atención médica urgente</li>
                            <li>Notificación a empleador y ART</li>
                            <li>Documentación obligatoria</li>
                            <li>Parte médico con diagnóstico</li>
                        </ul>
                    </div>
                    
                    <div>
                        <h5 style="color: #2563eb; margin-bottom: 10px;">🏢 Cobertura ART</h5>
                        <ul style="color: #374151; margin: 0; padding-left: 20px;">
                            <li>Atención médica 100% ilimitado</li>
                            <li>Incapacidad temporal: 100% salario</li>
                            <li>Rehabilitación completa</li>
                            <li>Prótesis y ortesis incluidas</li>
                        </ul>
                    </div>
                </div>
                
                <div style="margin-top: 20px; padding: 15px; background: white; border-radius: 8px; border-left: 4px solid #f59e0b;">
                    <h5 style="color: #374151; margin: 0 0 10px 0;">📞 Emergencias</h5>
                    <p style="margin: 0; color: #6b7280; font-size: 14px;">
                        <strong>SRT Denuncias:</strong> 0800-666-6778<br>
                        <strong>Emergencias médicas:</strong> 107
                    </p>
                </div>
            </div>

            <!-- Guía 3: Denuncia Laboral -->
            <div class="guide-card" onclick="toggleSection('guia-denuncia')" style="background: white; padding: 20px; border-radius: 12px; cursor: pointer; border-left: 4px solid #8b5cf6; box-shadow: 0 2px 8px rgba(0,0,0,0.1); transition: all 0.3s ease;">
                <h3 style="margin: 0 0 10px 0; color: #374151; display: flex; align-items: center; gap: 10px;">
                    ⚖️ Denuncia Laboral
                </h3>
                <p style="margin: 0; color: #6b7280; font-size: 14px;">
                    Cómo denunciar en ministerio, documentación, plazos, conciliación
                </p>
            </div>
            <div id="guia-denuncia" class="guide-content" style="display: none; background: #f8fafc; padding: 25px; border-radius: 12px; margin-bottom: 20px; grid-column: 1 / -1;">
                <h4 style="color: #374151; margin-bottom: 15px;">⚖️ Guía Completa: Denuncia Laboral Paso a Paso</h4>
                
                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px;">
                    <div>
                        <h5 style="color: #2563eb; margin-bottom: 10px;">📋 Situaciones Denunciables</h5>
                        <ul style="color: #374151; margin: 0; padding-left: 20px;">
                            <li>Sueldo no pagado o parcial</li>
                            <li>Horas extras no abonadas</li>
                            <li>Trabajo no registrado</li>
                            <li>Despidos injustificados</li>
                            <li>Acoso o violencia laboral</li>
                        </ul>
                    </div>
                    
                    <div>
                        <h5 style="color: #2563eb; margin-bottom: 10px;">🚀 Pasos para Denunciar</h5>
                        <ul style="color: #374151; margin: 0; padding-left: 20px;">
                            <li>Intento de conciliación</li>
                            <li>Denuncia online o presencial</li>
                            <li>Seguimiento de expediente</li>
                            <li>Audiencia de conciliación</li>
                        </ul>
                    </div>
                </div>
                
                <div style="margin-top: 20px; padding: 15px; background: white; border-radius: 8px; border-left: 4px solid #8b5cf6;">
                    <h5 style="color: #374151; margin: 0 0 10px 0;">🌐 Denuncias Online</h5>
                    <p style="margin: 0; color: #6b7280; font-size: 14px;">
                        <strong>Nacional:</strong> consultas.argentina.gob.ar<br>
                        <strong>Misiones:</strong> trabajo.misiones.gob.ar
                    </p>
                </div>
            </div>

            <!-- Guía 4: Horas Extras -->
            <div class="guide-card" onclick="toggleSection('guia-horas-extras')" style="background: white; padding: 20px; border-radius: 12px; cursor: pointer; border-left: 4px solid #10b981; box-shadow: 0 2px 8px rgba(0,0,0,0.1); transition: all 0.3s ease;">
                <h3 style="margin: 0 0 10px 0; color: #374151; display: flex; align-items: center; gap: 10px;">
                    ⏰ Horas Extras
                </h3>
                <p style="margin: 0; color: #6b7280; font-size: 14px;">
                    Reclamo por horas no pagas, cálculo, pruebas, plazos legales
                </p>
            </div>
            <div id="guia-horas-extras" class="guide-content" style="display: none; background: #f8fafc; padding: 25px; border-radius: 12px; margin-bottom: 20px; grid-column: 1 / -1;">
                <h4 style="color: #374151; margin-bottom: 15px;">⏰ Guía Completa: Horas Extras No Pagas</h4>
                
                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px;">
                    <div>
                        <h5 style="color: #2563eb; margin-bottom: 10px;">💰 Cálculo de Recargo</h5>
                        <ul style="color: #374151; margin: 0; padding-left: 20px;">
                            <li><strong>Horas simples:</strong> 50% recargo</li>
                            <li><strong>Horas dobles:</strong> 100% recargo</li>
                            <li>Feriados, domingos, nocturnas</li>
                            <li>Límite: 3 hs/día, 30 hs/mes</li>
                        </ul>
                    </div>
                    
                    <div>
                        <h5 style="color: #2563eb; margin-bottom: 10px;">📋 Cómo Probar</h5>
                        <ul style="color: #374151; margin: 0; padding-left: 20px;">
                            <li>Registro de horarios empresa</li>
                            <li>Mails/mensajes fuera de horario</li>
                            <li>Testigos compañeros</li>
                            <li>Comprobantes de gastos</li>
                        </ul>
                    </div>
                </div>
                
                <div style="margin-top: 20px; padding: 15px; background: white; border-radius: 8px; border-left: 4px solid #10b981;">
                    <h5 style="color: #374151; margin: 0 0 10px 0;">⚖️ Plazos Legales</h5>
                    <p style="margin: 0; color: #6b7280; font-size: 14px;">
                        <strong>Reclamo horas extras:</strong> 2 años<br>
                        <strong>Denuncia Ministerio:</strong> consultas.argentina.gob.ar
                    </p>
                </div>
            </div>
        </div>
        
        <p style="text-align: center; color: #6b7280; font-size: 14px; margin-top: 20px;">
            💡 <strong>¿Necesitás ayuda específica?</strong> Consultá a nuestro 
            <a href="{{ route('chatbot') }}" style="color: #2563eb;">Asistente Virtual</a> 
            para orientación personalizada
        </p>
    </div>

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