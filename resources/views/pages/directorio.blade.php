@extends('layouts.app')

@section('content')
<div class="directory-page">
    <h1 style="text-align: center; font-size: 24px; color: #2563eb; margin-bottom: 20px;">
        🏛️ Directorio Oficial - Ministerios de Trabajo
    </h1>

    <p style="text-align: center; color: #6b7280; margin-bottom: 30px;">
        Contactos oficiales de todos los ministerios de trabajo de Argentina<br>
        Información verificada y actualizada
    </p>

    <!-- Buscador por provincia -->
    <div style="max-width: 500px; margin: 0 auto 30px auto;">
        <input type="text" id="search-provincia" placeholder="🔍 Buscar por provincia..." 
               style="width: 100%; padding: 12px; border: 2px solid #e5e7eb; border-radius: 10px; font-size: 16px;"
               onkeyup="filterProvinces()">
    </div>

    <!-- Directorio Nacional -->
    <div class="directory-section" style="margin-bottom: 40px;">
        <h2 style="color: #2563eb; margin-bottom: 20px; padding-bottom: 10px; border-bottom: 2px solid #e5e7eb;">
            🇦🇷 Nivel Nacional
        </h2>
        
        <div class="org-card" style="background: white; border-radius: 12px; padding: 25px; margin-bottom: 20px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); border-left: 4px solid #dc2626;">
            <h3 style="margin: 0 0 15px 0; color: #374151;">Ministerio de Capital Humano</h3>
            <p style="margin: 0 0 10px 0; color: #6b7280;"><strong>Área:</strong> Trabajo, Empleo y Seguridad Social</p>
            
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-bottom: 15px;">
                <div>
                    <p style="margin: 5px 0; color: #374151;">📍 <strong>Dirección:</strong><br>Av. Leandro N. Alem 650, CABA<br><small>Mesa de entradas: 25 de Mayo 637 PB</small></p>
                    <p style="margin: 5px 0; color: #374151;">📞 <strong>Teléfono:</strong><br>0800-666-4100<br>0800-222-2220</p>
                </div>
                <div>
                    <p style="margin: 5px 0; color: #374151;">📧 <strong>Email:</strong><br>consultas@trabajo.gob.ar<br>consultas@capitalhumano.gob.ar</p>
                    <p style="margin: 5px 0; color: #374151;">🕒 <strong>Horario:</strong><br>Lunes a Viernes 10:00–14:00</p>
                </div>
            </div>
            
            <div style="background: #f0f9ff; padding: 15px; border-radius: 8px; margin-top: 15px;">
                <strong>💻 Servicios online:</strong> Turnos, trámites a distancia, mapa de oficinas de empleo, buscador de convenios colectivos, formulario de orientación online
            </div>
            
            <button onclick="location.href='https://www.argentina.gob.ar/capital-humano/trabajo'" 
                    style="margin-top: 15px; padding: 10px 20px; background: #2563eb; color: white; border: none; border-radius: 8px; cursor: pointer; font-size: 14px;">
                🌐 Visitar Sitio Web Oficial
            </button>
        </div>
    </div>

    <!-- Directorio Provincial -->
    <div class="directory-section">
        <h2 style="color: #2563eb; margin-bottom: 20px; padding-bottom: 10px; border-bottom: 2px solid #e5e7eb;">
            🏙️ Por Provincia
        </h2>
        
        <div id="provincias-container" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(400px, 1fr)); gap: 20px;">
            
            <!-- Provincia de Buenos Aires -->
            <div class="org-card province-card" data-provincia="buenos aires" style="background: white; border-radius: 12px; padding: 20px; box-shadow: 0 2px 8px rgba(0,0,0,0.1); border-left: 4px solid #059669;">
                <h4 style="margin: 0 0 12px 0; color: #374151;">Buenos Aires</h4>
                <p style="margin: 0 0 8px 0; color: #6b7280; font-size: 14px;">Ministerio de Trabajo</p>
                
                <p style="margin: 5px 0; color: #374151; font-size: 14px;">📍 Calle 115 N°1705, La Plata</p>
                <p style="margin: 5px 0; color: #374151; font-size: 14px;">📞 (221) 412-3217</p>
                <p style="margin: 5px 0; color: #374151; font-size: 14px;">📧 contactoweb@trabajo.gba.gov.ar</p>
                <p style="margin: 5px 0; color: #374151; font-size: 14px;">🕒 Lun-Vie 08:00–14:00</p>
                
                <button onclick="location.href='https://www.gba.gob.ar/trabajo'" 
                        style="margin-top: 10px; padding: 8px 16px; background: #059669; color: white; border: none; border-radius: 6px; cursor: pointer; font-size: 12px; width: 100%;">
                    🌐 Sitio Web
                </button>
            </div>

            <!-- Misiones -->
            <div class="org-card province-card" data-provincia="misiones" style="background: white; border-radius: 12px; padding: 20px; box-shadow: 0 2px 8px rgba(0,0,0,0.1); border-left: 4px solid #dc2626;">
                <h4 style="margin: 0 0 12px 0; color: #374151;">Misiones</h4>
                <p style="margin: 0 0 8px 0; color: #6b7280; font-size: 14px;">Ministerio de Trabajo y Empleo</p>
                
                <p style="margin: 5px 0; color: #374151; font-size: 14px;">📍 Sante Fé 343, Posadas</p>
                <p style="margin: 5px 0; color: #374151; font-size: 14px;">📞 0376-4447637</p>
                <p style="margin: 5px 0; color: #374151; font-size: 14px;">📧 ministerio@trabajo.misiones.gob.ar</p>
                <p style="margin: 5px 0; color: #374151; font-size: 14px;">🕒 Lun-Vie (consultar)</p>
                
                <button onclick="location.href='https://trabajo.misiones.gob.ar/'" 
                        style="margin-top: 10px; padding: 8px 16px; background: #dc2626; color: white; border: none; border-radius: 6px; cursor: pointer; font-size: 12px; width: 100%;">
                    🌐 Sitio Web
                </button>
            </div>

            <!-- Córdoba -->
            <div class="org-card province-card" data-provincia="córdoba" style="background: white; border-radius: 12px; padding: 20px; box-shadow: 0 2px 8px rgba(0,0,0,0.1); border-left: 4px solid #7c3aed;">
                <h4 style="margin: 0 0 12px 0; color: #374151;">Córdoba</h4>
                <p style="margin: 0 0 8px 0; color: #6b7280; font-size: 14px;">Ministerio de Justicia y Trabajo</p>
                
                <p style="margin: 5px 0; color: #374151; font-size: 14px;">📍 Alvear Nº 150, Córdoba</p>
                <p style="margin: 5px 0; color: #374151; font-size: 14px;">📞 (0351) 434-1050/52</p>
                <p style="margin: 5px 0; color: #374151; font-size: 14px;">📧 consultasministeriotrabajocba@gmail.com</p>
                <p style="margin: 5px 0; color: #374151; font-size: 14px;">🕒 Lun-Vie 08:00–20:00</p>
                
                <button onclick="location.href='https://minjus.cba.gov.ar'" 
                        style="margin-top: 10px; padding: 8px 16px; background: #7c3aed; color: white; border: none; border-radius: 6px; cursor: pointer; font-size: 12px; width: 100%;">
                    🌐 Sitio Web
                </button>
            </div>

            <!-- Mendoza -->
            <div class="org-card province-card" data-provincia="mendoza" style="background: white; border-radius: 12px; padding: 20px; box-shadow: 0 2px 8px rgba(0,0,0,0.1); border-left: 4px solid #ea580c;">
                <h4 style="margin: 0 0 12px 0; color: #374151;">Mendoza</h4>
                <p style="margin: 0 0 8px 0; color: #6b7280; font-size: 14px;">Subsecretaría de Trabajo y Empleo</p>
                
                <p style="margin: 5px 0; color: #374151; font-size: 14px;">📍 Av. San Martín 601, Mendoza</p>
                <p style="margin: 5px 0; color: #374151; font-size: 14px;">📞 (0261) 461-0321 / 461-0310</p>
                <p style="margin: 5px 0; color: #374151; font-size: 14px;">📧 Por delegación</p>
                <p style="margin: 5px 0; color: #374151; font-size: 14px;">🕒 Lun-Vie 08:00–14:00</p>
                
                <button onclick="location.href='https://informacionoficial.mendoza.gob.ar/'" 
                        style="margin-top: 10px; padding: 8px 16px; background: #ea580c; color: white; border: none; border-radius: 6px; cursor: pointer; font-size: 12px; width: 100%;">
                    🌐 Sitio Web
                </button>
            </div>

            <!-- Santa Fe -->
            <div class="org-card province-card" data-provincia="santa fe" style="background: white; border-radius: 12px; padding: 20px; box-shadow: 0 2px 8px rgba(0,0,0,0.1); border-left: 4px solid #059669;">
                <h4 style="margin: 0 0 12px 0; color: #374151;">Santa Fe</h4>
                <p style="margin: 0 0 8px 0; color: #6b7280; font-size: 14px;">Ministerio de Trabajo, Empleo y Seguridad Social</p>
                
                <p style="margin: 5px 0; color: #374151; font-size: 14px;">📍 Rivadavia 3049/3051, Santa Fe</p>
                <p style="margin: 5px 0; color: #374151; font-size: 14px;">📞 0800-777-0801</p>
                <p style="margin: 5px 0; color: #374151; font-size: 14px;">🕒 Lun-Vie 08:00–18:00</p>
                
                <button onclick="location.href='https://www.santafe.gov.ar'" 
                        style="margin-top: 10px; padding: 8px 16px; background: #059669; color: white; border: none; border-radius: 6px; cursor: pointer; font-size: 12px; width: 100%;">
                    🌐 Sitio Web
                </button>
            </div>

            <!-- Salta -->
            <div class="org-card province-card" data-provincia="salta" style="background: white; border-radius: 12px; padding: 20px; box-shadow: 0 2px 8px rgba(0,0,0,0.1); border-left: 4px solid #dc2626;">
                <h4 style="margin: 0 0 12px 0; color: #374151;">Salta</h4>
                <p style="margin: 0 0 8px 0; color: #6b7280; font-size: 14px;">Secretaría de Trabajo</p>
                
                <p style="margin: 5px 0; color: #374151; font-size: 14px;">📍 Simón Bólivar 141, Salta Capital</p>
                <p style="margin: 5px 0; color: #374151; font-size: 14px;">📞 (0387) 431-8451 / 421-8426</p>
                <p style="margin: 5px 0; color: #374151; font-size: 14px;">📧 secretariadetrabajosalta@gmail.com</p>
                <p style="margin: 5px 0; color: #374151; font-size: 14px;">🕒 Lun-Vie 08:15–13:45</p>
                
                <button onclick="location.href='https://www.salta.gob.ar'" 
                        style="margin-top: 10px; padding: 8px 16px; background: #dc2626; color: white; border: none; border-radius: 6px; cursor: pointer; font-size: 12px; width: 100%;">
                    🌐 Sitio Web
                </button>
            </div>

        </div>
    </div>

    <!-- Consejos -->
    <div style="margin-top: 40px; padding: 20px; background: #f0f9ff; border-radius: 12px; border-left: 4px solid #2563eb;">
        <h3 style="color: #374151; margin-bottom: 15px;">💡 Consejos para Contactar</h3>
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 15px;">
            <div>
                <p style="margin: 5px 0; color: #374151;">📞 <strong>Antes de ir</strong><br>Llamá para confirmar horarios y documentación</p>
                <p style="margin: 5px 0; color: #374151;">💻 <strong>Priorizá lo online</strong><br>Muchos trámites son digitales</p>
            </div>
            <div>
                <p style="margin: 5px 0; color: #374151;">📝 <strong>Prepará documentación</strong><br>DNI, recibos de sueldo, contratos</p>
                <p style="margin: 5px 0; color: #374151;">🗓️ <strong>Pedí turno previo</strong><br>En muchos casos es obligatorio</p>
            </div>
        </div>
    </div>

    <!-- Navegación -->
    <div style="display: flex; gap: 15px; margin-top: 30px;">
        <button class="btn" onclick="location.href='{{ route('contenido') }}'" 
                style="flex: 1; padding: 12px; background: #6b7280; border-radius: 8px;">
            📚 Volver al Contenido
        </button>
        <button class="btn" onclick="location.href='{{ route('home') }}'" 
                style="flex: 1; padding: 12px; background: #374151; border-radius: 8px;">
            🏠 Volver al Inicio
        </button>
    </div>
</div>
@endsection

@section('scripts')
<script>
function filterProvinces() {
    const searchTerm = document.getElementById('search-provincia').value.toLowerCase();
    const provinces = document.querySelectorAll('.province-card');
    
    provinces.forEach(province => {
        const provinceName = province.getAttribute('data-provincia').toLowerCase();
        if (provinceName.includes(searchTerm)) {
            province.style.display = 'block';
        } else {
            province.style.display = 'none';
        }
    });
}
</script>
@endsection