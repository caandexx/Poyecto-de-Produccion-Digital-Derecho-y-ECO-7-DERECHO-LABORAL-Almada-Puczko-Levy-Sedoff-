@extends('layouts.app')

@section('content')
<!-- HERO SECTION PARA DIRECTORIO -->
<section class="gradient-box w-11/12 md:w-3/4 mt-8 py-16 px-8 text-center mx-auto fade-in">
    <div class="badge mb-4 inline-block">
        🏛️ Directorio Oficial
    </div>
    
    <h1 class="text-display text-white mb-6 max-w-4xl mx-auto leading-tight">
        Directorio de <span class="text-highlight">Ministerios de Trabajo</span>
    </h1>
    
    <p class="text-body text-white/90 mb-8 max-w-2xl mx-auto leading-relaxed">
        Contactos <strong>oficiales y verificados</strong> de todos los ministerios de trabajo  
        de Argentina. Información actualizada 2025.
    </p>
    
    <div class="flex flex-col sm:flex-row justify-center gap-4">
        <a href="#directorio-container" class="btn-modern">
            <span>🔍 Buscar por Provincia</span>
        </a>
        <a href="{{ route('contenido') }}" class="btn-secondary text-white border-white/30 hover:border-white/60">
            <span>📚 Ver Guías Prácticas</span>
        </a>
    </div>
</section>

<!-- BUSCADOR MEJORADO -->
<section class="w-11/12 md:w-3/4 mx-auto mt-12 fade-in">
    <div class="professional-card text-center">
        <h2 class="text-heading text-high-contrast mb-6">Encontrá tu <span class="text-important">Ministerio</span> Provincial</h2>
        
        <div class="max-w-2xl mx-auto mb-8">
            <div class="relative">
                <input 
                    type="text" 
                    id="search-provincia" 
                    placeholder="🔍 Escribí el nombre de tu provincia..." 
                    class="w-full px-6 py-4 border-2 border-gray-200 rounded-2xl text-body focus:border-accent-color focus:outline-none focus:ring-2 focus:ring-accent-color/20 transition-all duration-300"
                    onkeyup="filterProvinces()"
                >
                <div class="absolute right-4 top-1/2 transform -translate-y-1/2">
                    <div id="search-count" class="text-small text-muted bg-gray-100 px-2 py-1 rounded-lg">
                        16 provincias
                    </div>
                </div>
            </div>
        </div>

        <!-- Filtros rápidos -->
        <div class="flex flex-wrap justify-center gap-3 mb-6">
            <button onclick="filterByRegion('todas')" class="filter-btn active">Todas</button>
            <button onclick="filterByRegion('centro')" class="filter-btn">Centro</button>
            <button onclick="filterByRegion('norte')" class="filter-btn">Norte</button>
            <button onclick="filterByRegion('sur')" class="filter-btn">Sur</button>
            <button onclick="filterByRegion('cuyo')" class="filter-btn">Cuyo</button>
        </div>
    </div>
</section>

<!-- DIRECTORIO NACIONAL MEJORADO -->
<section id="directorio-container" class="w-11/12 md:w-3/4 mx-auto mt-8 fade-in">
    <div class="professional-card">
        <h2 class="text-heading text-high-contrast mb-8 text-center">
            <span class="text-important">🇦🇷 Nivel Nacional</span>
        </h2>
        
        <div class="professional-card !bg-gradient-to-br !from-blue-50 !to-purple-50/30 !border-2 !border-blue-200/50">
            <div class="flex flex-col lg:flex-row gap-6">
                <div class="flex-shrink-0">
                    <div class="w-20 h-20 bg-gradient-to-br from-blue-500 to-purple-600 rounded-2xl flex items-center justify-center text-2xl text-white font-bold">
                        🇦🇷
                    </div>
                </div>
                
                <div class="flex-1">
                    <h3 class="text-subheading text-high-contrast mb-3">Ministerio de Capital Humano</h3>
                    <p class="text-body text-muted mb-4"><strong>Área:</strong> Trabajo, Empleo y Seguridad Social</p>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                        <div class="space-y-3">
                            <div class="flex items-center gap-3">
                                <div class="w-8 h-8 bg-blue-100 rounded-lg flex items-center justify-center text-blue-600">
                                    📍
                                </div>
                                <div>
                                    <div class="text-small font-semibold text-high-contrast">Dirección</div>
                                    <div class="text-small text-muted">Av. Leandro N. Alem 650, CABA</div>
                                    <div class="text-xs text-muted">Mesa de entradas: 25 de Mayo 637 PB</div>
                                </div>
                            </div>
                            
                            <div class="flex items-center gap-3">
                                <div class="w-8 h-8 bg-green-100 rounded-lg flex items-center justify-center text-green-600">
                                    📞
                                </div>
                                <div>
                                    <div class="text-small font-semibold text-high-contrast">Teléfono</div>
                                    <div class="text-small text-muted">0800-666-4100</div>
                                    <div class="text-small text-muted">0800-222-2220</div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="space-y-3">
                            <div class="flex items-center gap-3">
                                <div class="w-8 h-8 bg-purple-100 rounded-lg flex items-center justify-center text-purple-600">
                                    📧
                                </div>
                                <div>
                                    <div class="text-small font-semibold text-high-contrast">Email</div>
                                    <div class="text-small text-muted">consultas@trabajo.gob.ar</div>
                                    <div class="text-small text-muted">consultas@capitalhumano.gob.ar</div>
                                </div>
                            </div>
                            
                            <div class="flex items-center gap-3">
                                <div class="w-8 h-8 bg-amber-100 rounded-lg flex items-center justify-center text-amber-600">
                                    🕒
                                </div>
                                <div>
                                    <div class="text-small font-semibold text-high-contrast">Horario</div>
                                    <div class="text-small text-muted">Lunes a Viernes 10:00–14:00</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="professional-card !bg-white/50 !p-4 !shadow-none">
                        <div class="flex items-center gap-3 mb-2">
                            <div class="text-lg">💻</div>
                            <div class="text-body font-semibold text-high-contrast">Servicios online</div>
                        </div>
                        <div class="text-small text-muted">
                            Turnos, trámites a distancia, mapa de oficinas de empleo, buscador de convenios colectivos, formulario de orientación online
                        </div>
                    </div>
                    
                    <div class="flex gap-3 mt-6">
                        <button onclick="location.href='https://www.argentina.gob.ar/capital-humano/trabajo'" 
                                class="btn-modern !text-sm !px-4 !py-2 flex-1">
                            <span>🌐 Sitio Web Oficial</span>
                        </button>
                        <button onclick="copyToClipboard('0800-666-4100')" 
                                class="btn-secondary !text-sm !px-4 !py-2">
                            <span>📞 Copiar Teléfono</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- DIRECTORIO PROVINCIAL MEJORADO -->
<section class="w-11/12 md:w-3/4 mx-auto mt-12 fade-in">
    <div class="professional-card">
        <h2 class="text-heading text-high-contrast mb-8 text-center">
            <span class="text-important">🏙️ Por Provincia</span>
        </h2>
        
        <div id="provincias-container" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            
            <!-- Buenos Aires -->
            <div class="province-card professional-card group cursor-pointer hover:!scale-105 transition-transform duration-300" 
                 data-provincia="buenos aires" data-region="centro">
                <div class="text-center mb-4">
                    <div class="w-16 h-16 bg-gradient-to-br from-green-500 to-emerald-600 rounded-2xl flex items-center justify-center text-2xl text-white font-bold mx-auto mb-3">
                        BA
                    </div>
                    <h4 class="text-subheading text-high-contrast mb-1">Buenos Aires</h4>
                    <div class="text-small text-muted">Ministerio de Trabajo</div>
                </div>
                
                <div class="space-y-3 mb-4">
                    <div class="flex items-center gap-2">
                        <div class="text-gray-400">📍</div>
                        <div class="text-small text-muted flex-1">Calle 115 N°1705, La Plata</div>
                    </div>
                    <div class="flex items-center gap-2">
                        <div class="text-gray-400">📞</div>
                        <div class="text-small text-muted">(221) 412-3217</div>
                    </div>
                    <div class="flex items-center gap-2">
                        <div class="text-gray-400">🕒</div>
                        <div class="text-small text-muted">Lun-Vie 08:00–14:00</div>
                    </div>
                </div>
                
                <div class="flex gap-2">
                    <button onclick="location.href='https://www.gba.gob.ar/trabajo'" 
                            class="btn-modern !text-xs !px-3 !py-2 flex-1">
                        <span>🌐 Web</span>
                    </button>
                    <button onclick="showProvinceDetails('buenos-aires')" 
                            class="btn-secondary !text-xs !px-3 !py-2">
                        <span>📋 Info</span>
                    </button>
                </div>
            </div>

            <!-- Misiones -->
            <div class="province-card professional-card group cursor-pointer hover:!scale-105 transition-transform duration-300" 
                 data-provincia="misiones" data-region="norte">
                <div class="text-center mb-4">
                    <div class="w-16 h-16 bg-gradient-to-br from-red-500 to-pink-600 rounded-2xl flex items-center justify-center text-2xl text-white font-bold mx-auto mb-3">
                        MI
                    </div>
                    <h4 class="text-subheading text-high-contrast mb-1">Misiones</h4>
                    <div class="text-small text-muted">Ministerio de Trabajo y Empleo</div>
                </div>
                
                <div class="space-y-3 mb-4">
                    <div class="flex items-center gap-2">
                        <div class="text-gray-400">📍</div>
                        <div class="text-small text-muted flex-1">Sante Fé 343, Posadas</div>
                    </div>
                    <div class="flex items-center gap-2">
                        <div class="text-gray-400">📞</div>
                        <div class="text-small text-muted">0376-4447637</div>
                    </div>
                    <div class="flex items-center gap-2">
                        <div class="text-gray-400">📧</div>
                        <div class="text-small text-muted">ministerio@trabajo.misiones.gob.ar</div>
                    </div>
                </div>
                
                <div class="flex gap-2">
                    <button onclick="location.href='https://trabajo.misiones.gob.ar/'" 
                            class="btn-modern !text-xs !px-3 !py-2 flex-1">
                        <span>🌐 Web</span>
                    </button>
                    <button onclick="showProvinceDetails('misiones')" 
                            class="btn-secondary !text-xs !px-3 !py-2">
                        <span>📋 Info</span>
                    </button>
                </div>
            </div>

            <!-- Córdoba -->
            <div class="province-card professional-card group cursor-pointer hover:!scale-105 transition-transform duration-300" 
                 data-provincia="córdoba" data-region="centro">
                <div class="text-center mb-4">
                    <div class="w-16 h-16 bg-gradient-to-br from-purple-500 to-indigo-600 rounded-2xl flex items-center justify-center text-2xl text-white font-bold mx-auto mb-3">
                        CB
                    </div>
                    <h4 class="text-subheading text-high-contrast mb-1">Córdoba</h4>
                    <div class="text-small text-muted">Ministerio de Justicia y Trabajo</div>
                </div>
                
                <div class="space-y-3 mb-4">
                    <div class="flex items-center gap-2">
                        <div class="text-gray-400">📍</div>
                        <div class="text-small text-muted flex-1">Alvear Nº 150, Córdoba</div>
                    </div>
                    <div class="flex items-center gap-2">
                        <div class="text-gray-400">📞</div>
                        <div class="text-small text-muted">(0351) 434-1050/52</div>
                    </div>
                    <div class="flex items-center gap-2">
                        <div class="text-gray-400">🕒</div>
                        <div class="text-small text-muted">Lun-Vie 08:00–20:00</div>
                    </div>
                </div>
                
                <div class="flex gap-2">
                    <button onclick="location.href='https://minjus.cba.gov.ar'" 
                            class="btn-modern !text-xs !px-3 !py-2 flex-1">
                        <span>🌐 Web</span>
                    </button>
                    <button onclick="showProvinceDetails('cordoba')" 
                            class="btn-secondary !text-xs !px-3 !py-2">
                        <span>📋 Info</span>
                    </button>
                </div>
            </div>

            <!-- Santa Fe -->
            <div class="province-card professional-card group cursor-pointer hover:!scale-105 transition-transform duration-300" 
                 data-provincia="santa fe" data-region="centro">
                <div class="text-center mb-4">
                    <div class="w-16 h-16 bg-gradient-to-br from-teal-500 to-cyan-600 rounded-2xl flex items-center justify-center text-2xl text-white font-bold mx-auto mb-3">
                        SF
                    </div>
                    <h4 class="text-subheading text-high-contrast mb-1">Santa Fe</h4>
                    <div class="text-small text-muted">Ministerio de Trabajo y Seguridad Social</div>
                </div>
                
                <div class="space-y-3 mb-4">
                    <div class="flex items-center gap-2">
                        <div class="text-gray-400">📍</div>
                        <div class="text-small text-muted flex-1">Rivadavia 3049/3051, Santa Fe</div>
                    </div>
                    <div class="flex items-center gap-2">
                        <div class="text-gray-400">📞</div>
                        <div class="text-small text-muted">0800-777-0801</div>
                    </div>
                    <div class="flex items-center gap-2">
                        <div class="text-gray-400">🕒</div>
                        <div class="text-small text-muted">Lun-Vie 08:00–18:00</div>
                    </div>
                </div>
                
                <div class="flex gap-2">
                    <button onclick="location.href='https://www.santafe.gov.ar'" 
                            class="btn-modern !text-xs !px-3 !py-2 flex-1">
                        <span>🌐 Web</span>
                    </button>
                    <button onclick="showProvinceDetails('santa-fe')" 
                            class="btn-secondary !text-xs !px-3 !py-2">
                        <span>📋 Info</span>
                    </button>
                </div>
            </div>

            <!-- Mendoza -->
            <div class="province-card professional-card group cursor-pointer hover:!scale-105 transition-transform duration-300" 
                 data-provincia="mendoza" data-region="cuyo">
                <div class="text-center mb-4">
                    <div class="w-16 h-16 bg-gradient-to-br from-orange-500 to-red-500 rounded-2xl flex items-center justify-center text-2xl text-white font-bold mx-auto mb-3">
                        MZ
                    </div>
                    <h4 class="text-subheading text-high-contrast mb-1">Mendoza</h4>
                    <div class="text-small text-muted">Subsecretaría de Trabajo y Empleo</div>
                </div>
                
                <div class="space-y-3 mb-4">
                    <div class="flex items-center gap-2">
                        <div class="text-gray-400">📍</div>
                        <div class="text-small text-muted flex-1">Av. San Martín 601, Mendoza</div>
                    </div>
                    <div class="flex items-center gap-2">
                        <div class="text-gray-400">📞</div>
                        <div class="text-small text-muted">(0261) 461-0321/0310</div>
                    </div>
                    <div class="flex items-center gap-2">
                        <div class="text-gray-400">🕒</div>
                        <div class="text-small text-muted">Lun-Vie 08:00–14:00</div>
                    </div>
                </div>
                
                <div class="flex gap-2">
                    <button onclick="location.href='https://informacionoficial.mendoza.gob.ar/'" 
                            class="btn-modern !text-xs !px-3 !py-2 flex-1">
                        <span>🌐 Web</span>
                    </button>
                    <button onclick="showProvinceDetails('mendoza')" 
                            class="btn-secondary !text-xs !px-3 !py-2">
                        <span>📋 Info</span>
                    </button>
                </div>
            </div>

            <!-- Salta -->
            <div class="province-card professional-card group cursor-pointer hover:!scale-105 transition-transform duration-300" 
                 data-provincia="salta" data-region="norte">
                <div class="text-center mb-4">
                    <div class="w-16 h-16 bg-gradient-to-br from-amber-500 to-yellow-500 rounded-2xl flex items-center justify-center text-2xl text-white font-bold mx-auto mb-3">
                        SA
                    </div>
                    <h4 class="text-subheading text-high-contrast mb-1">Salta</h4>
                    <div class="text-small text-muted">Secretaría de Trabajo</div>
                </div>
                
                <div class="space-y-3 mb-4">
                    <div class="flex items-center gap-2">
                        <div class="text-gray-400">📍</div>
                        <div class="text-small text-muted flex-1">Simón Bólivar 141, Salta Capital</div>
                    </div>
                    <div class="flex items-center gap-2">
                        <div class="text-gray-400">📞</div>
                        <div class="text-small text-muted">(0387) 431-8451/8426</div>
                    </div>
                    <div class="flex items-center gap-2">
                        <div class="text-gray-400">📧</div>
                        <div class="text-small text-muted">secretariadetrabajosalta@gmail.com</div>
                    </div>
                </div>
                
                <div class="flex gap-2">
                    <button onclick="location.href='https://www.salta.gob.ar'" 
                            class="btn-modern !text-xs !px-3 !py-2 flex-1">
                        <span>🌐 Web</span>
                    </button>
                    <button onclick="showProvinceDetails('salta')" 
                            class="btn-secondary !text-xs !px-3 !py-2">
                        <span>📋 Info</span>
                    </button>
                </div>
            </div>

        </div>

        <!-- Mensaje cuando no hay resultados -->
        <div id="no-results" class="professional-card text-center hidden">
            <div class="text-4xl mb-4">🔍</div>
            <h3 class="text-subheading text-high-contrast mb-2">No se encontraron resultados</h3>
            <p class="text-body text-muted mb-4">Probá con otros términos de búsqueda o revisá los filtros aplicados.</p>
            <button onclick="clearSearch()" class="btn-modern !text-sm !px-4 !py-2">
                <span>🔄 Limpiar búsqueda</span>
            </button>
        </div>
    </div>
</section>

<!-- CONSEJOS MEJORADOS -->
<section class="w-11/12 md:w-3/4 mx-auto mt-12 fade-in">
    <div class="professional-card">
        <h2 class="text-heading text-high-contrast mb-6 text-center">
            💡 <span class="text-important">Consejos</span> para Contactar
        </h2>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="space-y-6">
                <div class="flex items-start gap-4 p-4 rounded-xl bg-blue-50/30">
                    <div class="text-2xl">📞</div>
                    <div>
                        <h4 class="text-body font-semibold text-high-contrast mb-2">Antes de ir</h4>
                        <p class="text-small text-muted">Llamá para confirmar horarios y documentación necesaria</p>
                    </div>
                </div>
                
                <div class="flex items-start gap-4 p-4 rounded-xl bg-green-50/30">
                    <div class="text-2xl">💻</div>
                    <div>
                        <h4 class="text-body font-semibold text-high-contrast mb-2">Priorizá lo online</h4>
                        <p class="text-small text-muted">Muchos trámites se pueden hacer digitalmente</p>
                    </div>
                </div>
            </div>
            
            <div class="space-y-6">
                <div class="flex items-start gap-4 p-4 rounded-xl bg-amber-50/30">
                    <div class="text-2xl">📝</div>
                    <div>
                        <h4 class="text-body font-semibold text-high-contrast mb-2">Prepará documentación</h4>
                        <p class="text-small text-muted">DNI, recibos de sueldo, contratos y pruebas</p>
                    </div>
                </div>
                
                <div class="flex items-start gap-4 p-4 rounded-xl bg-purple-50/30">
                    <div class="text-2xl">🗓️</div>
                    <div>
                        <h4 class="text-body font-semibold text-high-contrast mb-2">Pedí turno previo</h4>
                        <p class="text-small text-muted">En muchos casos es obligatorio para atención</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- NAVEGACIÓN MEJORADA -->
<section class="w-11/12 md:w-3/4 mx-auto mt-12 mb-8 fade-in">
    <div class="flex flex-col sm:flex-row gap-4 justify-center">
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
// Datos completos de provincias (extensible)
const provinceData = {
    'buenos-aires': {
        nombre: 'Buenos Aires',
        ministerio: 'Ministerio de Trabajo de la Provincia de Buenos Aires',
        direccion: 'Calle 115 N°1705 esq. 67, La Plata (CP 1900)',
        telefono: '(221) 412-3217',
        email: 'contactoweb@trabajo.gba.gov.ar',
        horario: 'Lunes a Viernes 08:00–14:00',
        web: 'https://www.gba.gob.ar/trabajo',
        servicios: 'Denuncias online, formularios, régimen de pago voluntario, mapa de delegaciones'
    },
    'misiones': {
        nombre: 'Misiones', 
        ministerio: 'Ministerio de Trabajo y Empleo de la Provincia de Misiones',
        direccion: 'Sante Fé 343, Posadas, Misiones',
        telefono: '0376-4447637',
        email: 'ministerio@trabajo.misiones.gob.ar',
        horario: 'Lunes a Viernes (consultar por área)',
        web: 'https://trabajo.misiones.gob.ar/',
        servicios: 'Inscripciones a programas, trámites digitales, firma digital, asesoramiento online'
    }
    // ... agregar más provincias según necesites
};

function filterProvinces() {
    const searchTerm = document.getElementById('search-provincia').value.toLowerCase();
    const provinces = document.querySelectorAll('.province-card');
    let visibleCount = 0;
    
    provinces.forEach(province => {
        const provinceName = province.getAttribute('data-provincia').toLowerCase();
        if (provinceName.includes(searchTerm)) {
            province.style.display = 'block';
            visibleCount++;
        } else {
            province.style.display = 'none';
        }
    });
    
    // Actualizar contador
    document.getElementById('search-count').textContent = `${visibleCount} provincias`;
    
    // Mostrar/ocultar mensaje de no resultados
    const noResults = document.getElementById('no-results');
    if (visibleCount === 0) {
        noResults.classList.remove('hidden');
    } else {
        noResults.classList.add('hidden');
    }
}

function filterByRegion(region) {
    // Actualizar botones activos
    document.querySelectorAll('.filter-btn').forEach(btn => {
        btn.classList.remove('active');
    });
    event.target.classList.add('active');
    
    const provinces = document.querySelectorAll('.province-card');
    let visibleCount = 0;
    
    provinces.forEach(province => {
        const provinceRegion = province.getAttribute('data-region');
        if (region === 'todas' || provinceRegion === region) {
            province.style.display = 'block';
            visibleCount++;
        } else {
            province.style.display = 'none';
        }
    });
    
    document.getElementById('search-count').textContent = `${visibleCount} provincias`;
}

function showProvinceDetails(provinceId) {
    const province = provinceData[provinceId];
    if (!province) return;
    
    // En una implementación real, podrías mostrar un modal con detalles completos
    const modalContent = `
        <div class="fixed inset-0 bg-black/50 flex items-center justify-center z-50 p-4">
            <div class="professional-card max-w-2xl max-h-[90vh] overflow-y-auto">
                <div class="flex justify-between items-center mb-6">
                    <h3 class="text-heading text-high-contrast">${province.nombre}</h3>
                    <button onclick="closeModal()" class="text-2xl text-muted hover:text-high-contrast">×</button>
                </div>
                
                <div class="space-y-6">
                    <div>
                        <h4 class="text-subheading text-high-contrast mb-2">${province.ministerio}</h4>
                        <p class="text-body text-muted">${province.direccion}</p>
                    </div>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="space-y-4">
                            <div>
                                <div class="text-small font-semibold text-high-contrast">📞 Teléfono</div>
                                <div class="text-body text-muted">${province.telefono}</div>
                            </div>
                            <div>
                                <div class="text-small font-semibold text-high-contrast">📧 Email</div>
                                <div class="text-body text-muted">${province.email}</div>
                            </div>
                        </div>
                        <div class="space-y-4">
                            <div>
                                <div class="text-small font-semibold text-high-contrast">🕒 Horario</div>
                                <div class="text-body text-muted">${province.horario}</div>
                            </div>
                            <div>
                                <div class="text-small font-semibold text-high-contrast">💻 Servicios</div>
                                <div class="text-body text-muted">${province.servicios}</div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="flex gap-3 pt-4 border-t border-gray-200">
                        <button onclick="location.href='${province.web}'" class="btn-modern flex-1">
                            <span>🌐 Visitar Sitio Web</span>
                        </button>
                        <button onclick="copyToClipboard('${province.telefono}')" class="btn-secondary">
                            <span>📞 Copiar Teléfono</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    `;
    
    // Crear y mostrar modal
    const modal = document.createElement('div');
    modal.innerHTML = modalContent;
    modal.id = 'province-modal';
    document.body.appendChild(modal);
}

function closeModal() {
    const modal = document.getElementById('province-modal');
    if (modal) {
        modal.remove();
    }
}

function copyToClipboard(text) {
    navigator.clipboard.writeText(text).then(() => {
        // Mostrar notificación de éxito
        alert(`📋 "${text}" copiado al portapapeles`);
    });
}

function clearSearch() {
    document.getElementById('search-provincia').value = '';
    filterProvinces();
    filterByRegion('todas');
}

// Cerrar modal con ESC
document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') {
        closeModal();
    }
});
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

.filter-btn {
    background: rgba(255, 255, 255, 0.8);
    border: 2px solid #e2e8f0;
    padding: 0.5rem 1rem;
    border-radius: 1rem;
    font-weight: 500;
    font-size: 0.875rem;
    color: var(--text-muted);
    cursor: pointer;
    transition: all 0.3s ease;
}

.filter-btn:hover,
.filter-btn.active {
    background: var(--accent-color);
    color: white;
    border-color: var(--accent-color);
}

.hidden {
    display: none !important;
}

/* Animación para los modales */
@keyframes modalFadeIn {
    from {
        opacity: 0;
        transform: scale(0.9);
    }
    to {
        opacity: 1;
        transform: scale(1);
    }
}

#province-modal > div {
    animation: modalFadeIn 0.3s ease-out;
}
</style>
@endsection