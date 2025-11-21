<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>EcoFlow - Movilidad Eléctrica</title>
    <!-- Fuente Poppins -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body { font-family: 'Poppins', sans-serif; }
        .product-card:hover img {
            transform: scale(1.03);
        }
        .product-card img {
            transition: transform 0.3s ease-in-out;
        }
    </style>
</head>
<body class="bg-white text-[#1c1c1c] antialiased">

    <!-- TOP BAR -->
    <div class="bg-[#1c1c1c] text-white text-xs py-2 px-4 text-center">
        <span>Envíos a todo Bucaramanga y área metropolitana | <strong>Movilidad Sostenible 100% Garantizada</strong></span>
    </div>

    <!-- NAVBAR -->
    <header class="sticky top-0 z-50 bg-white border-b border-gray-100 shadow-sm">
        <div class="max-w-[1400px] mx-auto px-4 sm:px-6 lg:px-8 h-20 flex items-center justify-between gap-4">
            
            <!-- LOGO -->
            <div class="flex-shrink-0 flex items-center gap-2 cursor-pointer">
                <div class="w-8 h-8 bg-black rounded-full flex items-center justify-center text-white">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                    </svg>
                </div>
                <span class="font-bold text-2xl tracking-tight">EcoFlow</span>
            </div>

            <!-- BARRA DE BÚSQUEDA -->
            <div class="hidden md:flex flex-1 max-w-xl mx-8">
                <div class="relative w-full">
                    <input type="text" placeholder="Buscar repuestos, sedes o vehículos..." class="w-full bg-gray-100 text-gray-700 text-sm rounded-full pl-5 pr-12 py-2.5 focus:outline-none focus:ring-1 focus:ring-black transition border border-transparent focus:bg-white">
                    <button class="absolute right-1 top-1/2 -translate-y-1/2 bg-black text-white p-1.5 rounded-full hover:bg-gray-800 transition">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                    </button>
                </div>
            </div>

            <!-- ICONOS Y MENÚ -->
            <div class="flex items-center gap-6 text-sm font-medium">
                <nav class="hidden lg:flex items-center gap-6 text-gray-600">
                    <a href="#" class="hover:text-black transition">Scooters</a>
                    <a href="#" class="hover:text-black transition">Bicicletas</a>
                    <a href="#" class="hover:text-black transition">Accesorios</a>
                    <a href="#contacto" class="hover:text-black transition">Contacto</a>
                </nav>
                
                <div class="h-6 w-px bg-gray-200 hidden lg:block"></div>

                <div class="flex items-center gap-4">
                    <a href="/login" class="flex items-center gap-2 text-gray-700 hover:text-black transition">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                        </svg>
                        <span class="hidden xl:inline">Ingresar</span>
                    </a>
                    <a href="/register" class="hidden sm:flex bg-black text-white px-5 py-2 rounded-full hover:bg-gray-800 transition shadow-lg shadow-black/20">
                        Registrarse
                    </a>
                </div>
            </div>
        </div>
    </header>

    <main>
        <!-- SECCIÓN HERO -->
        <section class="max-w-[1400px] mx-auto px-4 sm:px-6 lg:px-8 py-10">
            <div class="bg-[#F4F6F8] rounded-2xl p-8 md:p-16 text-center relative overflow-hidden">
                <div class="relative z-10 max-w-3xl mx-auto">
                    <h4 class="text-emerald-600 font-bold uppercase tracking-widest text-xs mb-3">Nueva Colección 2025</h4>
                    <h1 class="text-4xl md:text-6xl font-bold text-gray-900 mb-6 leading-tight">
                        Movilidad Eléctrica <br> Sin Límites
                    </h1>
                    <p class="text-gray-500 text-lg mb-8">
                        Alquila, conduce y vive la ciudad con la mejor flota de Bucaramanga.
                    </p>
                    
                    <div class="flex flex-wrap justify-center gap-4">
                        <a href="/gestionar-vehiculos" class="px-8 py-3.5 bg-black text-white font-semibold rounded-lg hover:bg-gray-800 transition transform hover:-translate-y-0.5 shadow-md">
                            Gestionar Vehículos
                        </a>
                        <a href="/historial-reservas" class="px-8 py-3.5 bg-white text-black border border-gray-200 font-semibold rounded-lg hover:border-black transition">
                            Ver Historial
                        </a>
                    </div>
                </div>
                
                <!-- Imagen Banner -->
                <div class="mt-12 relative z-10">
                    <img src="https://images.unsplash.com/photo-1571068316344-75bc76f77890?q=80&w=1400&auto=format&fit=crop" alt="Scooters Banner" class="mx-auto max-w-4xl w-full object-contain drop-shadow-xl">
                </div>
            </div>

            <!-- Mini barra de servicios -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mt-6 border-b border-gray-100 pb-10">
                <a href="/registrar-entrega-vehiculo" class="flex items-center justify-center gap-3 p-4 bg-white border border-gray-100 rounded-xl hover:shadow-md transition cursor-pointer group">
                    <div class="bg-gray-50 p-2 rounded-full group-hover:bg-emerald-50 transition">
                        <svg class="w-5 h-5 text-gray-600 group-hover:text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path>
                        </svg>
                    </div>
                    <span class="text-sm font-semibold text-gray-700">Registrar Entrega</span>
                </a>
                <a href="/estado-vehiculo" class="flex items-center justify-center gap-3 p-4 bg-white border border-gray-100 rounded-xl hover:shadow-md transition cursor-pointer group">
                    <div class="bg-gray-50 p-2 rounded-full group-hover:bg-emerald-50 transition">
                         <svg class="w-5 h-5 text-gray-600 group-hover:text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                    </div>
                    <span class="text-sm font-semibold text-gray-700">Mantenimiento</span>
                </a>
                <div class="hidden md:flex items-center justify-center gap-3 p-4">
                    <div class="bg-green-50 p-2 rounded-full">
                        <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <span class="text-sm font-medium text-gray-500">Garantía Segura</span>
                </div>
                <div class="hidden md:flex items-center justify-center gap-3 p-4">
                    <div class="bg-blue-50 p-2 rounded-full">
                        <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                    <span class="text-sm font-medium text-gray-500">Carga Rápida</span>
                </div>
            </div>
        </section>

        <!-- SECCIÓN JUNTOS POR UN ENTORNO MEJOR -->
        <section class="py-10">
            <div class="max-w-[1400px] mx-auto px-4 sm:px-6 lg:px-8">
                <div class="bg-white text-center">
                    <h2 class="text-2xl font-bold text-gray-900 mb-6">Juntos por un entorno mejor</h2>
                    <img src="https://images.unsplash.com/photo-1542601906990-b4d3fb778b09?q=80&w=1400&auto=format&fit=crop" alt="Comunidad EcoFlow" class="mx-auto h-56 object-contain rounded-xl">
                </div>
            </div>
        </section>

        <!-- SECCIÓN SEDES -->
        <section class="py-16 bg-[#F9FAFB]">
            <div class="max-w-[1400px] mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between items-end mb-10">
                    <div>
                        <h2 class="text-3xl font-bold text-gray-900">Nuestras Sedes</h2>
                        <p class="text-gray-500 mt-2">Encuentra el punto EcoFlow más cercano a ti</p>
                    </div>
                    <a href="#" class="text-sm font-semibold text-emerald-600 hover:text-emerald-800 border-b border-emerald-600 pb-0.5">Ver todas</a>
                </div>

                <!-- Sede Principal -->
                <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden mb-8 group cursor-pointer hover:shadow-lg transition duration-300">
                    <div class="relative h-[400px] overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1541746972996-4e0b0f43e02a?q=80&w=1400&auto=format&fit=crop" alt="Cabecera" class="w-full h-full object-cover transition duration-700 group-hover:scale-105">
                        <div class="absolute top-4 left-4 bg-black text-white text-xs font-bold px-3 py-1 rounded uppercase tracking-wider">Principal</div>
                    </div>
                    <div class="p-8">
                        <h3 class="text-2xl font-bold text-gray-900 mb-2">Cabecera - Centro de Experiencia</h3>
                        <p class="text-gray-500 mb-4">Nuestra sede principal y la de mayor superficie, con la flota más completa de bicicletas, patinetas y scooters eléctricos.</p>
                        <span class="text-sm font-semibold text-black underline">Ver ubicación &rarr;</span>
                    </div>
                </div>

                <!-- Grid de 3 Sedes -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <!-- Floridablanca -->
                    <div class="bg-white rounded-xl p-4 shadow-sm border border-gray-100 product-card cursor-pointer hover:shadow-md transition">
                        <div class="rounded-lg overflow-hidden h-56 mb-4 relative bg-gray-100">
                            <img src="https://images.unsplash.com/photo-1519501025264-65ba15a82390?q=80&w=1400&auto=format&fit=crop" alt="Floridablanca" class="w-full h-full object-cover">
                            <div class="absolute top-3 left-3 bg-emerald-600 text-white text-[10px] font-bold px-2 py-1 rounded">NUEVA</div>
                        </div>
                        <h3 class="text-lg font-bold text-gray-900">Floridablanca</h3>
                        <p class="text-xs text-gray-500 mt-1 mb-3 line-clamp-2">La sede más nueva, diseñada para facilitar el acceso y promover la movilidad sostenible.</p>
                        <div class="flex items-center justify-between border-t border-gray-50 pt-3">
                            <span class="text-xs text-gray-400">Abierto 6:00 AM</span>
                            <span class="text-sm font-bold text-emerald-600">Disponible</span>
                        </div>
                    </div>

                    <!-- Piedecuesta -->
                    <div class="bg-white rounded-xl p-4 shadow-sm border border-gray-100 product-card cursor-pointer hover:shadow-md transition">
                        <div class="rounded-lg overflow-hidden h-56 mb-4 relative bg-gray-100">
                            <img src="https://images.unsplash.com/photo-1571624436279-b272aff752b5?q=80&w=1400&auto=format&fit=crop" alt="Piedecuesta" class="w-full h-full object-cover">
                        </div>
                        <h3 class="text-lg font-bold text-gray-900">Piedecuesta</h3>
                        <p class="text-xs text-gray-500 mt-1 mb-3 line-clamp-2">Reconocida por su facilidad de acceso y cercanía a zonas residenciales y aeropuerto.</p>
                        <div class="flex items-center justify-between border-t border-gray-50 pt-3">
                            <span class="text-xs text-gray-400">Abierto 5:30 AM</span>
                            <span class="text-sm font-bold text-emerald-600">Disponible</span>
                        </div>
                    </div>

                    <!-- Cañaveral -->
                    <div class="bg-white rounded-xl p-4 shadow-sm border border-gray-100 product-card cursor-pointer hover:shadow-md transition">
                        <div class="rounded-lg overflow-hidden h-56 mb-4 relative bg-gray-100">
                            <img src="https://images.unsplash.com/photo-1558618047-3c8c76ca7d13?q=80&w=1400&auto=format&fit=crop" alt="Cañaveral" class="w-full h-full object-cover">
                            <div class="absolute top-3 left-3 bg-red-500 text-white text-[10px] font-bold px-2 py-1 rounded">ALTA DEMANDA</div>
                        </div>
                        <h3 class="text-lg font-bold text-gray-900">Cañaveral</h3>
                        <p class="text-xs text-gray-500 mt-1 mb-3 line-clamp-2">Estratégicamente ubicada para ofrecer buena movilidad rápida hacia el centro comercial y universitario.</p>
                        <div class="flex items-center justify-between border-t border-gray-50 pt-3">
                            <span class="text-xs text-gray-400">Abierto 7:00 AM</span>
                            <span class="text-sm font-bold text-orange-500">Pocas unidades</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- SECCIÓN POR QUÉ ELEGIRNOS -->
        <section class="py-20 bg-white">
            <div class="max-w-[1400px] mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                    <!-- Texto -->
                    <div>
                        <h4 class="text-emerald-600 font-bold text-sm uppercase mb-2">Beneficios Exclusivos</h4>
                        <h2 class="text-4xl font-bold text-gray-900 mb-8">¿Por qué elegirnos?</h2>
                        
                        <div class="space-y-8">
                            <!-- Item 1 -->
                            <div class="flex gap-4">
                                <div class="flex-shrink-0 w-10 h-10 rounded-full bg-black text-white flex items-center justify-center font-bold">1</div>
                                <div>
                                    <h4 class="text-lg font-bold text-gray-900">Económico y Práctico</h4>
                                    <p class="text-gray-500 mt-1">Nuestra plataforma digital permite reservar en minutos, pagar de manera segura y consultar la disponibilidad de vehículos en cada sede.</p>
                                </div>
                            </div>
                            <!-- Item 2 -->
                            <div class="flex gap-4">
                                <div class="flex-shrink-0 w-10 h-10 rounded-full bg-black text-white flex items-center justify-center font-bold">2</div>
                                <div>
                                    <h4 class="text-lg font-bold text-gray-900">Tecnología Avanzada</h4>
                                    <p class="text-gray-500 mt-1">Con nuestra red de bicicletas, patinetas y scooters eléctricos, ofrecemos soluciones que mejoran la calidad de vida urbana.</p>
                                </div>
                            </div>
                            <!-- Item 3 -->
                            <div class="flex gap-4">
                                <div class="flex-shrink-0 w-10 h-10 rounded-full bg-black text-white flex items-center justify-center font-bold">3</div>
                                <div>
                                    <h4 class="text-lg font-bold text-gray-900">Compromiso Ambiental</h4>
                                    <p class="text-gray-500 mt-1">Promovemos la movilidad sostenible y participamos en proyectos relacionados con la reducción de contaminación.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Imagen Derecha -->
                    <div class="relative h-[600px] rounded-2xl overflow-hidden shadow-xl">
                        <img src="https://images.unsplash.com/photo-1571068316344-75bc76f77890?q=80&w=1400&auto=format&fit=crop" alt="Estilo de Vida EcoFlow" class="absolute inset-0 w-full h-full object-cover">
                    </div>
                </div>
            </div>
        </section>

        <!-- MAPA -->
        <section class="py-16 bg-gray-50 border-t border-gray-200">
            <div class="max-w-[1400px] mx-auto px-4 text-center">
                <h2 class="text-2xl font-bold text-gray-900 mb-8">Encuentra tu estación</h2>
                <div class="bg-white p-2 rounded-xl shadow-sm border border-gray-200">
                    <div class="w-full h-96 rounded-lg overflow-hidden">
                        <div id="map" class="w-full h-full"></div>
                    </div>
                </div>
            </div>
        </section>

        <section id="contacto" class="py-16 bg-white">
            <div class="max-w-[1400px] mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-start">
                    <div class="space-y-6">
                        <h2 class="text-3xl font-bold text-gray-900">Contacto</h2>
                        <p class="text-gray-500">¿Tienes dudas, sugerencias o quieres hablar con nosotros? Escríbenos.</p>
                        <div class="rounded-2xl border border-gray-100 p-6 bg-[#F9FAFB] space-y-6">
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 bg-black text-white rounded-full flex items-center justify-center">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a2 2 0 011.789 1.106l1.2 2.4A2 2 0 0013.28 8H19a2 2 0 012 2v1a2 2 0 01-2 2h-4.28a2 2 0 00-1.821 1.137l-1.2 2.4A2 2 0 009.28 17H5a2 2 0 01-2-2V5z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <div class="font-semibold">Línea de atención</div>
                                    <div class="text-gray-500 text-sm">+57 300 123 4567</div>
                                </div>
                            </div>
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 bg-black text-white rounded-full flex items-center justify-center">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14v7m0-7a7 7 0 017-7m-7 7a7 7 0 00-7-7"></path>
                                    </svg>
                                </div>
                                <div>
                                    <div class="font-semibold">Correo</div>
                                    <div class="text-gray-500 text-sm">soporte@ecoflow.com</div>
                                </div>
                            </div>
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 bg-black text-white rounded-full flex items-center justify-center">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 12l4.243-4.243M6.343 7.343L10.586 12 6.343 16.243"></path>
                                    </svg>
                                </div>
                                <div>
                                    <div class="font-semibold">Dirección</div>
                                    <div class="text-gray-500 text-sm">Carrera 27 # 36-14, Bucaramanga</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-8">
                        <form id="form-contacto" action="#" method="post" class="space-y-5">
                            <div>
                                <label for="nombre" class="block text-sm font-medium">Nombre</label>
                                <input id="nombre" type="text" class="mt-2 w-full rounded-lg border border-slate-300 bg-white px-3 py-2 text-slate-900 placeholder-slate-400 shadow-sm focus:border-emerald-600 focus:outline-none focus:ring-2 focus:ring-emerald-200" placeholder="Tu nombre">
                            </div>
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                                <div>
                                    <label for="correo" class="block text-sm font-medium">Correo</label>
                                    <input id="correo" type="email" class="mt-2 w-full rounded-lg border border-slate-300 bg-white px-3 py-2 text-slate-900 placeholder-slate-400 shadow-sm focus:border-emerald-600 focus:outline-none focus:ring-2 focus:ring-emerald-200" placeholder="tucorreo@ejemplo.com">
                                </div>
                                <div>
                                    <label for="telefono" class="block text-sm font-medium">Teléfono</label>
                                    <input id="telefono" type="tel" class="mt-2 w-full rounded-lg border border-slate-300 bg-white px-3 py-2 text-slate-900 placeholder-slate-400 shadow-sm focus:border-emerald-600 focus:outline-none focus:ring-2 focus:ring-emerald-200" placeholder="300 000 0000">
                                </div>
                            </div>
                            <div>
                                <label for="motivo" class="block text-sm font-medium">Motivo</label>
                                <select id="motivo" class="mt-2 w-full rounded-lg border border-slate-300 px-3 py-2 focus:outline-none focus:ring-2 focus:ring-emerald-500">
                                    <option>Consulta general</option>
                                    <option>Soporte</option>
                                    <option>Reservas</option>
                                    <option>Propuesta comercial</option>
                                </select>
                            </div>
                            <div>
                                <label for="mensaje" class="block text-sm font-medium">Mensaje</label>
                                <textarea id="mensaje" rows="5" class="mt-2 w-full rounded-lg border border-slate-300 bg-white px-3 py-2 text-slate-900 placeholder-slate-400 shadow-sm focus:border-emerald-600 focus:outline-none focus:ring-2 focus:ring-emerald-200" placeholder="Cuéntanos en qué podemos ayudarte"></textarea>
                            </div>
                            <button type="button" class="w-full rounded-lg bg-black px-5 py-3 text-white hover:bg-gray-800 transition">Enviar</button>
                            <div id="contacto-alerta" class="hidden text-sm text-emerald-600 font-semibold">Este formulario es de demostración.</div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <!-- FOOTER -->
        <footer class="bg-[#1c1c1c] text-white pt-16 pb-8">
            <div class="max-w-[1400px] mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 md:grid-cols-4 gap-12 mb-12">
                <!-- Columna 1 -->
                <div>
                    <div class="flex items-center gap-2 mb-6">
                        <div class="w-8 h-8 bg-white rounded-full flex items-center justify-center text-black">
                             <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                            </svg>
                        </div>
                        <span class="font-bold text-2xl">EcoFlow</span>
                    </div>
                    <p class="text-gray-400 text-sm leading-relaxed">
                        Somos una plataforma de movilidad eléctrica que ofrece el alquiler de bicicletas, patinetas y scooters eléctricos en Bucaramanga y su área metropolitana.
                    </p>
                </div>
                <!-- Columna 2 -->
                <div>
                    <h4 class="font-bold text-lg mb-6">Atención al Cliente</h4>
                    <ul class="space-y-3 text-gray-400 text-sm">
                        <li><a href="#" class="hover:text-white">Centro de Ayuda</a></li>
                        <li><a href="#" class="hover:text-white">Reportar Incidente</a></li>
                        <li><a href="#" class="hover:text-white">Términos y Condiciones</a></li>
                        <li><a href="#" class="hover:text-white">Política de Privacidad</a></li>
                    </ul>
                </div>
                <!-- Columna 3 -->
                <div>
                    <h4 class="font-bold text-lg mb-6">Contacto</h4>
                    <ul class="space-y-3 text-gray-400 text-sm">
                        <li>Carrera 27 # 36-14, Bucaramanga</li>
                        <li>soporte@ecoflow.com</li>
                        <li>+57 300 123 4567</li>
                    </ul>
                </div>
                <!-- Columna 4 -->
                <div>
                    <h4 class="font-bold text-lg mb-6">Suscríbete</h4>
                    <p class="text-gray-400 text-sm mb-4">Recibe ofertas y noticias de movilidad.</p>
                    <div class="flex">
                        <input type="email" placeholder="Tu correo" class="bg-gray-800 text-white px-4 py-2 rounded-l-md w-full focus:outline-none text-sm">
                        <button class="bg-emerald-600 px-4 py-2 rounded-r-md hover:bg-emerald-700 font-bold text-sm">OK</button>
                    </div>
                </div>
            </div>
            <div class="border-t border-gray-800 pt-8 text-center text-gray-500 text-xs">
                &copy; 2025 EcoFlow. Todos los derechos reservados.
            </div>
        </footer>
    </main>

    <!-- Scripts Mapa -->
    <script>
        window.initMap = function() {
            const center = {lat: 7.119349, lng: -73.12339};
            const map = new google.maps.Map(document.getElementById('map'), {
                center: center, 
                zoom: 13,
                styles: [{ "featureType": "poi", "stylers": [ { "visibility": "off" } ] }]
            });
            const markers = [
                {position: {lat: 7.1165, lng: -73.1069}, title: 'Parque San Pío'},
                {position: {lat: 7.1019, lng: -73.1183}, title: 'C.C. Cacique'},
                {position: {lat: 7.1325, lng: -73.1198}, title: 'UIS'}
            ];
            markers.forEach(m => new google.maps.Marker({position: m.position, map: map, title: m.title}));
        };
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var btn = document.querySelector('#form-contacto button[type="button"]');
            var alerta = document.getElementById('contacto-alerta');
            if (btn && alerta) {
                btn.addEventListener('click', function() {
                    alerta.classList.remove('hidden');
                    setTimeout(function() { alerta.classList.add('hidden'); }, 3000);
                });
            }
        });
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap" async defer></script>
</body>
</html>