<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Artículos – EcoFlow Bucaramanga</title>
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
                    <input type="text" placeholder="Buscar vehículos, modelos o características..." class="w-full bg-gray-100 text-gray-700 text-sm rounded-full pl-5 pr-12 py-2.5 focus:outline-none focus:ring-1 focus:ring-black transition border border-transparent focus:bg-white">
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
                    <a href="/" class="hover:text-black transition">Inicio</a>
                    <span class="text-black font-semibold">Artículos</span>
                    <a href="#" class="hover:text-black transition">Scooters</a>
                    <a href="#" class="hover:text-black transition">Bicicletas</a>
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
        <!-- HERO SECTION -->
        <section class="max-w-[1400px] mx-auto px-4 sm:px-6 lg:px-8 py-10">
            <div class="bg-[#F4F6F8] rounded-2xl p-8 md:p-16 text-center relative overflow-hidden">
                <!-- Texto Principal -->
                <div class="relative z-10 max-w-3xl mx-auto">
                    <h4 class="text-emerald-600 font-bold uppercase tracking-widest text-xs mb-3">Nuestra Flota 2025</h4>
                    <h1 class="text-4xl md:text-6xl font-bold text-gray-900 mb-6 leading-tight">
                        Nuestros Vehículos <br> Ecológicos
                    </h1>
                    <p class="text-gray-500 text-lg mb-8">
                        Descubre nuestra flota de motos y scooters eléctricos para movilidad urbana.
                    </p>
                    
                    <!-- Botones -->
                    <div class="flex flex-wrap justify-center gap-4">
                        <a href="#" class="px-8 py-3.5 bg-black text-white font-semibold rounded-lg hover:bg-gray-800 transition transform hover:-translate-y-0.5 shadow-md">
                            Ver disponibilidad
                        </a>
                        <a href="#" class="px-8 py-3.5 bg-white text-black border border-gray-200 font-semibold rounded-lg hover:border-black transition">
                            Comparar modelos
                        </a>
                    </div>
                </div>
                
                <!-- Imagen Banner -->
                <div class="mt-12 relative z-10">
                    <img src="{{ asset('imagenes/EcoFlow.png') }}" alt="Vehículos EcoFlow" class="mx-auto max-w-4xl w-full object-contain drop-shadow-xl">
                </div>
            </div>
        </section>

        <!-- SECCIÓN PRINCIPAL DE ARTÍCULOS -->
        <section class="py-16 bg-[#F9FAFB]">
            <div class="max-w-[1400px] mx-auto px-4 sm:px-6 lg:px-8">
                <!-- Filtros y Ordenamiento -->
                <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-10 gap-4">
                    <div>
                        <h2 class="text-3xl font-bold text-gray-900">Nuestra Flota</h2>
                        <p class="text-gray-500 mt-2">Elige el vehículo que mejor se adapte a tus necesidades</p>
                    </div>
                    
                    <div class="flex flex-wrap gap-3">
                        <select class="bg-white border border-gray-200 text-gray-700 text-sm rounded-lg px-4 py-2 focus:outline-none focus:ring-1 focus:ring-black">
                            <option>Todos los modelos</option>
                            <option>Motos eléctricas</option>
                            <option>Scooters</option>
                            <option>Bicicletas</option>
                        </select>
                        <select class="bg-white border border-gray-200 text-gray-700 text-sm rounded-lg px-4 py-2 focus:outline-none focus:ring-1 focus:ring-black">
                            <option>Ordenar por: Popularidad</option>
                            <option>Ordenar por: Precio menor</option>
                            <option>Ordenar por: Precio mayor</option>
                            <option>Ordenar por: Autonomía</option>
                        </select>
                    </div>
                </div>

                <!-- Grid de Productos -->
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                    <!-- EcoMoto Standard -->
                    <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden group cursor-pointer hover:shadow-lg transition duration-300 product-card">
                        <div class="relative h-64 overflow-hidden">
                            <img src="{{ asset('imagenes/MotoElectricaEstandart.jpeg') }}" alt="EcoMoto Standard" class="w-full h-full object-cover transition duration-700 group-hover:scale-105">
                            <div class="absolute top-4 left-4 bg-emerald-600 text-white text-xs font-bold px-3 py-1 rounded uppercase tracking-wider">Más Popular</div>
                        </div>
                        <div class="p-6">
                            <div class="flex justify-between items-start mb-2">
                                <h3 class="text-2xl font-bold text-gray-900">EcoMoto Standard</h3>
                                <span class="text-lg font-bold text-emerald-600">$25/hora</span>
                            </div>
                            <p class="text-gray-500 mb-4">La EcoMoto Standard está diseñada para la movilidad urbana diaria. Es ágil, económica y fácil de manejar, lo que la convierte en la opción ideal para quienes necesitan un transporte confiable en trayectos cortos y medios dentro de la ciudad.</p>
                            <div class="flex items-center justify-between">
                                <div class="flex items-center gap-2">
                                    <span class="text-sm font-semibold text-gray-700">Escalera</span>
                                    <span class="text-xs text-gray-400">•</span>
                                    <span class="text-sm text-gray-500">Autonomía: 45 km</span>
                                </div>
                                <a href="#" class="rounded-lg bg-black px-5 py-2.5 text-white hover:bg-gray-800 transition font-medium">Reservar</a>
                            </div>
                        </div>
                    </div>

                    <!-- EcoMoto Pro -->
                    <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden group cursor-pointer hover:shadow-lg transition duration-300 product-card">
                        <div class="relative h-64 overflow-hidden">
                            <img src="{{ asset('imagenes/MotoElectricaPro.jpg') }}" alt="EcoMoto Pro" class="w-full h-full object-cover transition duration-700 group-hover:scale-105">
                            <div class="absolute top-4 left-4 bg-black text-white text-xs font-bold px-3 py-1 rounded uppercase tracking-wider">Premium</div>
                        </div>
                        <div class="p-6">
                            <div class="flex justify-between items-start mb-2">
                                <h3 class="text-2xl font-bold text-gray-900">EcoMoto Pro</h3>
                                <span class="text-lg font-bold text-emerald-600">$35/hora</span>
                            </div>
                            <p class="text-gray-500 mb-4">La EcoMoto Pro representa la máxima protección con materiales de alta calidad. Con mayor velocidad y capacidad de carga, es perfecta para trayectos largos y usuarios que buscan un rendimiento superior sin comprometer la sostenibilidad.</p>
                            <div class="flex items-center justify-between">
                                <div class="flex items-center gap-2">
                                    <span class="text-sm font-semibold text-gray-700">Escalera</span>
                                    <span class="text-xs text-gray-400">•</span>
                                    <span class="text-sm text-gray-500">Autonomía: 70 km</span>
                                </div>
                                <a href="#" class="rounded-lg bg-black px-5 py-2.5 text-white hover:bg-gray-800 transition font-medium">Reservar</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Sección de Más Opciones -->
                <div class="mt-16">
                    <div class="flex justify-between items-end mb-10">
                        <div>
                            <h2 class="text-3xl font-bold text-gray-900">Más opciones de movilidad</h2>
                            <p class="text-gray-500 mt-2">Alternativas para cada necesidad urbana</p>
                        </div>
                        <a href="#" class="text-sm font-semibold text-emerald-600 hover:text-emerald-800 border-b border-emerald-600 pb-0.5">Ver todas</a>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        <!-- EcoScoot Max -->
                        <div class="bg-white rounded-xl p-4 shadow-sm border border-gray-100 product-card cursor-pointer hover:shadow-md transition">
                            <div class="rounded-lg overflow-hidden h-56 mb-4 relative bg-gray-100">
                                <img src="{{ asset('imagenes/EcoScootMax.jpg') }}" alt="EcoScoot Max" class="w-full h-full object-cover">
                                <div class="absolute top-3 left-3 bg-orange-500 text-white text-[10px] font-bold px-2 py-1 rounded">ALTA VELOCIDAD</div>
                            </div>
                            <h3 class="text-lg font-bold text-gray-900">EcoScoot Max</h3>
                            <p class="text-xs text-gray-500 mt-1 mb-3 line-clamp-2">Diseñada para comodidad y rendimiento. Ofrece velocidad, respeto al medio ambiente y autonomía, ideal para usuarios que buscan equilibrio y un motor de alto desempeño en desplazamientos urbanos.</p>
                            <div class="flex items-center justify-between border-t border-gray-50 pt-3">
                                <div>
                                    <span class="text-sm font-bold text-emerald-600">$20/hora</span>
                                    <span class="text-xs text-gray-400 ml-2">Escalera</span>
                                </div>
                                <a href="#" class="rounded-lg bg-black px-4 py-2 text-white hover:bg-gray-800 transition text-sm font-medium">Reservar</a>
                            </div>
                        </div>

                        <!-- EcoScoot Lite -->
                        <div class="bg-white rounded-xl p-4 shadow-sm border border-gray-100 product-card cursor-pointer hover:shadow-md transition">
                            <div class="rounded-lg overflow-hidden h-56 mb-4 relative bg-gray-100">
                                <img src="{{ asset('imagenes/EcoScoot_lite.jpg') }}" alt="EcoScoot Lite" class="w-full h-full object-cover">
                                <div class="absolute top-3 left-3 bg-blue-500 text-white text-[10px] font-bold px-2 py-1 rounded">LIGERO</div>
                            </div>
                            <h3 class="text-lg font-bold text-gray-900">EcoScoot Lite</h3>
                            <p class="text-xs text-gray-500 mt-1 mb-3 line-clamp-2">Nuestro nuevo modelo eléctrico compacto, diseñado para espacios urbanos. Mantiene equilibrio y comodidad, con un diseño que mejora la experiencia de conducción en diversos escenarios urbanos.</p>
                            <div class="flex items-center justify-between border-t border-gray-50 pt-3">
                                <div>
                                    <span class="text-sm font-bold text-emerald-600">$18/hora</span>
                                    <span class="text-xs text-gray-400 ml-2">Escalera</span>
                                </div>
                                <a href="#" class="rounded-lg bg-black px-4 py-2 text-white hover:bg-gray-800 transition text-sm font-medium">Reservar</a>
                            </div>
                        </div>

                        <!-- EcoBike One -->
                        <div class="bg-white rounded-xl p-4 shadow-sm border border-gray-100 product-card cursor-pointer hover:shadow-md transition">
                            <div class="rounded-lg overflow-hidden h-56 mb-4 relative bg-gray-100">
                                <img src="{{ asset('imagenes/EcoBikeOne.jpg') }}" alt="EcoBike One" class="w-full h-full object-cover">
                                <div class="absolute top-3 left-3 bg-purple-500 text-white text-[10px] font-bold px-2 py-1 rounded">ECOLÓGICA</div>
                            </div>
                            <h3 class="text-lg font-bold text-gray-900">EcoBike One</h3>
                            <p class="text-xs text-gray-500 mt-1 mb-3 line-clamp-2">Nuestra bicicleta eléctrica estrella para uso urbano y recreativo. Equilibrio perfecto entre vehículo y motor eléctrico para una experiencia de movilidad sostenible.</p>
                            <div class="flex items-center justify-between border-t border-gray-50 pt-3">
                                <div>
                                    <span class="text-sm font-bold text-emerald-600">$15/hora</span>
                                    <span class="text-xs text-gray-400 ml-2">Escalera</span>
                                </div>
                                <a href="#" class="rounded-lg bg-black px-4 py-2 text-white hover:bg-gray-800 transition text-sm font-medium">Reservar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- SECCIÓN COMPARATIVA -->
        <section class="py-16 bg-white">
            <div class="max-w-[1400px] mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-12">
                    <h2 class="text-3xl font-bold text-gray-900">Compara nuestros modelos</h2>
                    <p class="text-gray-500 mt-2">Encuentra el vehículo perfecto para tus necesidades</p>
                </div>

                <div class="overflow-x-auto">
                    <table class="w-full text-sm text-left text-gray-500">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                            <tr>
                                <th scope="col" class="px-6 py-3">Modelo</th>
                                <th scope="col" class="px-6 py-3">Precio/hora</th>
                                <th scope="col" class="px-6 py-3">Autonomía</th>
                                <th scope="col" class="px-6 py-3">Velocidad Máx</th>
                                <th scope="col" class="px-6 py-3">Peso</th>
                                <th scope="col" class="px-6 py-3">Acción</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="bg-white border-b hover:bg-gray-50">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">EcoMoto Standard</th>
                                <td class="px-6 py-4">$25</td>
                                <td class="px-6 py-4">45 km</td>
                                <td class="px-6 py-4">45 km/h</td>
                                <td class="px-6 py-4">65 kg</td>
                                <td class="px-6 py-4"><a href="#" class="font-medium text-emerald-600 hover:underline">Reservar</a></td>
                            </tr>
                            <tr class="bg-white border-b hover:bg-gray-50">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">EcoMoto Pro</th>
                                <td class="px-6 py-4">$35</td>
                                <td class="px-6 py-4">70 km</td>
                                <td class="px-6 py-4">60 km/h</td>
                                <td class="px-6 py-4">75 kg</td>
                                <td class="px-6 py-4"><a href="#" class="font-medium text-emerald-600 hover:underline">Reservar</a></td>
                            </tr>
                            <tr class="bg-white border-b hover:bg-gray-50">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">EcoScoot Max</th>
                                <td class="px-6 py-4">$20</td>
                                <td class="px-6 py-4">35 km</td>
                                <td class="px-6 py-4">40 km/h</td>
                                <td class="px-6 py-4">25 kg</td>
                                <td class="px-6 py-4"><a href="#" class="font-medium text-emerald-600 hover:underline">Reservar</a></td>
                            </tr>
                            <tr class="bg-white border-b hover:bg-gray-50">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">EcoScoot Lite</th>
                                <td class="px-6 py-4">$18</td>
                                <td class="px-6 py-4">30 km</td>
                                <td class="px-6 py-4">35 km/h</td>
                                <td class="px-6 py-4">18 kg</td>
                                <td class="px-6 py-4"><a href="#" class="font-medium text-emerald-600 hover:underline">Reservar</a></td>
                            </tr>
                            <tr class="bg-white hover:bg-gray-50">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">EcoBike One</th>
                                <td class="px-6 py-4">$15</td>
                                <td class="px-6 py-4">50 km</td>
                                <td class="px-6 py-4">25 km/h</td>
                                <td class="px-6 py-4">22 kg</td>
                                <td class="px-6 py-4"><a href="#" class="font-medium text-emerald-600 hover:underline">Reservar</a></td>
                            </tr>
                        </tbody>
                    </table>
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
                        Somos líderes en movilidad eléctrica personal en Bucaramanga. Calidad, seguridad y sostenibilidad.
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
</body>
</html>