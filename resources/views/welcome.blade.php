<!doctype html>
<html lang="es" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>EcoFlow - Movilidad Sostenible</title>
    @vite(["resources/css/app.css","resources/js/app.js"])
    <!-- Fuente Inter para el toque profesional -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;800&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body class="bg-gray-50 text-gray-900 antialiased selection:bg-emerald-200 selection:text-emerald-900">

    <!-- NAVBAR -->
    <header class="fixed w-full z-50 bg-white/90 backdrop-blur-md border-b border-gray-100 transition-all duration-300">
        <div class="max-w-7xl mx-auto flex items-center justify-between px-6 py-4">
            <!-- Logo -->
            <div class="flex items-center gap-2">
                <div class="bg-emerald-100 p-2 rounded-xl text-emerald-600">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                </div>
                <span class="font-extrabold text-2xl text-gray-900 tracking-tight">EcoFlow<span class="text-emerald-600">.</span></span>
            </div>
            <!-- Navegación -->
            <nav class="flex items-center space-x-6 font-medium text-sm">
                <a href="/login" class="text-gray-600 hover:text-emerald-600 transition">Ingresar</a>
                <a href="/register" class="rounded-full bg-emerald-600 px-6 py-2.5 text-white hover:bg-emerald-700 transition shadow-lg hover:shadow-emerald-500/30">Registrarse</a>
            </nav>
        </div>
    </header>

    <main>
        <!-- 1. SECCIÓN HERO (Diseño bonito centrado) -->
        <section class="relative pt-36 pb-20 text-center overflow-hidden">
            <div class="relative z-10 max-w-5xl mx-auto px-6">
                <h1 class="text-5xl sm:text-6xl lg:text-7xl font-extrabold text-gray-900 leading-tight tracking-tight mb-6">
                    Vehículos eléctricos, <br>
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-emerald-600 to-teal-500">ciudad más limpia</span>
                </h1>
                
                <p class="text-xl text-gray-500 leading-relaxed mb-10 max-w-2xl mx-auto font-light">
                    Renta monopatines, bicicletas y patinetas eléctricas en Bucaramanga y su área metropolitana. Facilitando reservas, pagos y ubicaciones en tiempo real.
                </p>
                
                <!-- Botones Principales -->
                <div class="flex flex-col sm:flex-row items-center justify-center gap-4 mb-10">
                    <a href="/gestionar-vehiculos" class="w-full sm:w-auto rounded-full bg-emerald-600 px-8 py-4 text-white font-bold shadow-xl hover:bg-emerald-700 hover:scale-105 transition transform duration-200">
                        Gestionar Vehículos
                    </a>
                    <a href="/historial-reservas" class="w-full sm:w-auto rounded-full bg-white border border-gray-200 px-8 py-4 text-emerald-700 font-bold shadow-sm hover:border-emerald-300 hover:bg-emerald-50 transition duration-200">
                        Consultar Historial
                    </a>
                </div>

                <!-- Botones Secundarios (Píldoras grises) -->
                <div class="flex justify-center gap-3 mb-12">
                    <a href="/registrar-entrega-vehiculo" class="px-5 py-2 rounded-full bg-gray-100 text-gray-600 text-sm font-semibold hover:bg-gray-200 transition">Registrar Entrega</a>
                    <a href="/estado-vehiculo" class="px-5 py-2 rounded-full bg-gray-100 text-gray-600 text-sm font-semibold hover:bg-gray-200 transition">Estado Mantenimiento</a>
                </div>

                <!-- Imagen Ilustración -->
                <div class="max-w-4xl mx-auto">
                    <img src="{{ asset('img/hero.png') }}" alt="Movilidad EcoFlow" class="w-full h-auto object-contain hover:scale-105 transition duration-700">
                </div>
            </div>
        </section>

        <!-- 2. JUNTOS POR UN ENTORNO MEJOR -->
        <section class="py-20 bg-white text-center">
            <div class="max-w-4xl mx-auto px-6">
                <h2 class="text-3xl font-extrabold text-gray-900 mb-8 tracking-tight">Juntos por un entorno mejor</h2>
                <img src="{{ asset('img/celebracion.png') }}" alt="Comunidad" class="mx-auto h-64 object-contain">
            </div>
        </section>

        <!-- 3. NUESTRAS SEDES (Diseño solicitado: 1 Grande + 3 Pequeñas con texto abajo) -->
        <section class="py-20 bg-gray-50">
            <div class="max-w-7xl mx-auto px-6">
                <div class="text-center mb-12">
                    <h2 class="text-4xl font-extrabold text-gray-900 tracking-tight">Nuestras Sedes</h2>
                </div>

                <!-- Fila 1: CABECERA (Grande, ancho completo) -->
                <div class="mb-16 group">
                    <div class="rounded-3xl overflow-hidden shadow-xl mb-6 h-[400px] border-4 border-white">
                        <img src="{{ asset('img/cabecera.jpg') }}" alt="Cabecera" class="w-full h-full object-cover group-hover:scale-105 transition duration-700">
                    </div>
                    <div class="px-2">
                        <h3 class="text-2xl font-bold text-gray-900 mb-2">Cabecera</h3>
                        <p class="text-gray-600 text-lg leading-relaxed max-w-4xl">
                            Nuestra sede principal y la de mayor repertorio, con la flota más completa de bicicletas, patinetas y monopatines eléctricos listos para ti.
                        </p>
                    </div>
                </div>

                <!-- Fila 2: GRID DE 3 (Florida, Piedecuesta, Cañaveral) -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
                    
                    <!-- Floridablanca -->
                    <div class="group">
                        <div class="rounded-3xl overflow-hidden shadow-lg mb-5 h-64 border-4 border-white">
                            <img src="{{ asset('img/florida.jpg') }}" alt="Floridablanca" class="w-full h-full object-cover group-hover:scale-110 transition duration-700">
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Floridablanca</h3>
                        <p class="text-gray-500 text-sm leading-relaxed">
                            La sede más nueva, diseñada para ampliar la cobertura y conectar a más ciudadanos con una movilidad sostenible.
                        </p>
                    </div>

                    <!-- Piedecuesta -->
                    <div class="group">
                        <div class="rounded-3xl overflow-hidden shadow-lg mb-5 h-64 border-4 border-white">
                            <img src="{{ asset('img/piedecuesta.jpg') }}" alt="Piedecuesta" class="w-full h-full object-cover group-hover:scale-110 transition duration-700">
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Piedecuesta</h3>
                        <p class="text-gray-500 text-sm leading-relaxed">
                            Reconocida por su facilidad de acceso y la cercanía a zonas residenciales y recreativas.
                        </p>
                    </div>

                    <!-- Cañaveral -->
                    <div class="group">
                        <div class="rounded-3xl overflow-hidden shadow-lg mb-5 h-64 border-4 border-white">
                            <img src="{{ asset('img/canaveral.jpg') }}" alt="Cañaveral" class="w-full h-full object-cover group-hover:scale-110 transition duration-700">
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Cañaveral</h3>
                        <p class="text-gray-500 text-sm leading-relaxed">
                            Estratégicamente ubicada para quienes buscan movilidad rápida hacia la zona comercial y universitaria.
                        </p>
                    </div>

                </div>
            </div>
        </section>

        <!-- 4. POR QUÉ ELEGIRNOS (Texto Izquierda - Foto Derecha) -->
        <section class="py-24 bg-white">
            <div class="max-w-7xl mx-auto px-6">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                    
                    <!-- Columna Texto -->
                    <div>
                        <h2 class="text-4xl font-extrabold text-gray-900 mb-8 tracking-tight">¿Por qué elegirnos?</h2>
                        <ul class="space-y-8">
                            <li class="flex items-start">
                                <div class="flex-shrink-0 w-8 h-8 rounded-full bg-emerald-100 flex items-center justify-center mt-1">
                                    <span class="text-emerald-600 font-bold text-lg">1</span>
                                </div>
                                <div class="ml-4">
                                    <p class="text-gray-700 text-lg leading-relaxed">
                                        En <span class="font-bold text-emerald-700">EcoFlow</span> ofrecemos una forma práctica, económica y ecológica de moverse por la ciudad. Con nuestra flota, los usuarios eligen la opción que mejor se adapte a su estilo de vida.
                                    </p>
                                </div>
                            </li>
                            <li class="flex items-start">
                                <div class="flex-shrink-0 w-8 h-8 rounded-full bg-emerald-100 flex items-center justify-center mt-1">
                                    <span class="text-emerald-600 font-bold text-lg">2</span>
                                </div>
                                <div class="ml-4">
                                    <p class="text-gray-700 text-lg leading-relaxed">
                                        Nuestra plataforma digital permite reservar en segundos, pagar de manera segura y conocer en tiempo real la disponibilidad de vehículos en cada sede.
                                    </p>
                                </div>
                            </li>
                            <li class="flex items-start">
                                <div class="flex-shrink-0 w-8 h-8 rounded-full bg-emerald-100 flex items-center justify-center mt-1">
                                    <span class="text-emerald-600 font-bold text-lg">3</span>
                                </div>
                                <div class="ml-4">
                                    <p class="text-gray-700 text-lg leading-relaxed">
                                        Además, impulsamos la movilidad sostenible en Bucaramanga y su área metropolitana, reduciendo la congestión y la contaminación.
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <!-- Columna Imagen -->
                    <div class="relative h-full min-h-[500px]">
                        <!-- Decoración de fondo -->
                        <div class="absolute -top-4 -right-4 w-full h-full bg-emerald-50 rounded-3xl transform rotate-3"></div>
                        <img src="{{ asset('img/chico-patineta.jpg') }}" alt="Usuario EcoFlow" class="relative w-full h-full object-cover rounded-3xl shadow-2xl hover:rotate-1 transition duration-500">
                    </div>

                </div>
            </div>
        </section>

        <!-- 5. MAPA -->
        <section class="py-20 bg-gray-50">
            <div class="max-w-7xl mx-auto px-6 text-center">
                <h2 class="text-3xl font-bold text-gray-900 mb-8 tracking-tight">Encuentra tu estación cercana</h2>
                <div class="bg-white p-3 rounded-[2rem] shadow-lg border border-gray-200 inline-block w-full max-w-5xl">
                    <div class="rounded-[1.5rem] overflow-hidden relative w-full h-[500px]">
                        <div id="map" class="w-full h-full"></div>
                    </div>
                </div>
            </div>
        </section>

        <!-- FOOTER -->
        <footer class="bg-white py-12 border-t border-gray-100 text-center">
            <div class="flex items-center justify-center gap-2 mb-4">
                <div class="bg-emerald-100 p-1.5 rounded-lg text-emerald-600">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                </div>
                <span class="font-bold text-xl text-gray-800">EcoFlow</span>
            </div>
            <p class="text-gray-500 text-sm">© 2025 EcoFlow Bucaramanga. Todos los derechos reservados.</p>
        </footer>

    </main>

    <!-- Scripts Mapa -->
    <script>
        window.initMap = function() {
            const center = {lat: 7.119349, lng: -73.12339};
            const map = new google.maps.Map(document.getElementById('map'), {
                center: center, zoom: 13,
                styles: [{ "featureType": "poi", "stylers": [ { "visibility": "off" } ] }]
            });
            const markers = [
                {position: {lat: 7.1165, lng: -73.1069}, title: 'Parque San Pío'},
                {position: {lat: 7.1019, lng: -73.1183}, title: 'C.C. Cacique'},
                {position: {lat: 7.1325, lng: -73.1198}, title: 'UIS'}
            ];
            markers.forEach(m => new google.