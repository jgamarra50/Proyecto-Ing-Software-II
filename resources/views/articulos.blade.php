<!doctype html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <title>
            Artículos – Renta Verde Bucaramanga
        </title>
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body class="bg-gray-50 text-gray-900">
        <header class="max-w-7xl mx-auto flex items-center justify-between p-6">
            <div class="font-bold text-xl text-emerald-600">EcoFlow</div>
            <nav class="space-x-4">
                <a href="/" class="text-gray-700 hover:text-emerald-600">Inicio</a>
                <span class="text-emerald-700 font-semibold">Artículos</span>
                <a href="/login" class="text-gray-700 hover:text-emerald-600">Ingresar</a>
                <a href="/register" class="text-gray-700 hover:text-emerald-600">Registrarse</a>
            </nav>
        </header>
        <main>
            <section class="relative">
                <img src="{{ asset('imagenes/EcoFlow.png') }}" alt="EcoFlow" class="h-64 w-full object-cover">
                <div class="absolute inset-0 bg-black/40"></div>
                <div class="absolute inset-0 flex items-center">
                    <div class="max-w-7xl mx-auto px-6">
                        <h1 class="text-3xl sm:text-5xl font-extrabold text-white">Nuestros Vehículos Ecológicos</h1>
                        <p class="mt-3 text-white/90">Descubre nuestra flota de motos y scooters eléctricos para movilidad urbana.</p>
                        <a href="#" class="mt-6 inline-block rounded-lg bg-white/90 px-5 py-2 text-gray-900 hover:bg-white">Ver disponibilidad</a>
                    </div>
                </div>
            </section>

            <section class="max-w-7xl mx-auto px-6 py-12">
                <div class="grid gap-8 lg:grid-cols-2">
                    <!-- EcoMoto City -->
                    <div class="rounded-xl bg-white p-6 shadow flex flex-col sm:flex-row gap-6">
                        <img src="{{ asset('imagenes/MotoElectricaEstandart.jpeg') }}" alt="EcoMoto City" class="h-40 w-full sm:w-56 object-cover rounded-lg">
                        <div class="flex-1">
                            <h3 class="text-2xl font-semibold">EcoMoto Standart</h3>
                            <p class="mt-2 text-gray-600">La EcoMoto City está diseñada para la movilidad urbana diaria. Es ágil, económica y fácil de manejar, lo que la convierte en la opción ideal para quienes necesitan un transporte confiable en trayectos cortos y medios dentro de la ciudad.</p>
                            <div class="mt-4 flex items-center justify-between">
                                <span class="font-semibold text-emerald-600">Escalera</span>
                                <a href="#" class="rounded-lg bg-emerald-600 px-4 py-2 text-white hover:bg-emerald-700">Reservar</a>
                            </div>
                        </div>
                    </div>

                    <!-- EcoMoto Pro -->
                    <div class="rounded-xl bg-white p-6 shadow flex flex-col sm:flex-row gap-6">
                        <img src="{{ asset('imagenes/MotoElectricaPro.jpg') }}" alt="EcoMoto Pro" class="h-40 w-full sm:w-56 object-cover rounded-lg">
                        <div class="flex-1">
                            <h3 class="text-2xl font-semibold">EcoMoto Pro</h3>
                            <p class="mt-2 text-gray-600">La EcoMoto Pro representa la máxima protección con materiales de alta calidad. Con mayor velocidad y capacidad de carga, es perfecta para trayectos largos y usuarios que buscan un rendimiento superior sin comprometer la sostenibilidad.</p>
                            <div class="mt-4 flex items-center justify-between">
                                <span class="font-semibold text-emerald-600">Escalera</span>
                                <a href="#" class="rounded-lg bg-emerald-600 px-4 py-2 text-white hover:bg-emerald-700">Reservar</a>
                            </div>
                        </div>
                    </div>

                    <!-- Sección con productos adicionales -->
                    <div class="lg:col-span-2 rounded-xl bg-white p-6 shadow">
                        <h2 class="text-2xl font-bold mb-6">Más opciones de movilidad</h2>
                        <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
                            <!-- EcoScoot Max -->
                            <div class="rounded-xl bg-white p-4 border flex flex-col">
                                <img src="{{ asset('imagenes/EcoScootMax.jpg') }}" alt="EcoScoot Max" class="h-40 w-full object-cover rounded-lg">
                                <h4 class="mt-3 text-lg font-semibold">EcoScoot Max</h4>
                                <p class="mt-2 text-gray-600">Diseñada para comodidad y rendimiento. Ofrece velocidad, respeto al medio ambiente y autonomía, ideal para usuarios que buscan equilibrio y un motor de alto desempeño en desplazamientos urbanos.</p>
                                <div class="mt-3 flex items-center justify-between">
                                    <span class="font-semibold text-emerald-600">Escalera</span>
                                    <a href="#" class="rounded-lg bg-emerald-600 px-4 py-2 text-white hover:bg-emerald-700">Reservar</a>
                                </div>
                            </div>
                            
                            <!-- EcoBlue One -->
                            <div class="rounded-xl bg-white p-4 border flex flex-col">
                                <img src="{{ asset('imagenes/EcoScoot_lite.jpg') }}" alt="EcoScoot Lite" class="h-40 w-full object-cover rounded-lg">
                                <h4 class="mt-3 text-lg font-semibold">EcoScoot lite</h4>
                                <p class="mt-2 text-gray-600">Nuestro nuevo modelo eléctrico compacto, diseñado para espacios urbanos. Mantiene equilibrio y comodidad, con un diseño que mejora la experiencia de conducción en diversos escenarios urbanos.</p>
                                <div class="mt-3 flex items-center justify-between">
                                    <span class="font-semibold text-emerald-600">Escalera</span>
                                    <a href="#" class="rounded-lg bg-emerald-600 px-4 py-2 text-white hover:bg-emerald-700">Reservar</a>
                                </div>
                            </div>
                            
                            <!-- EcoBike One -->
                            <div class="rounded-xl bg-white p-4 border flex flex-col">
                                <img src="{{ asset('imagenes/EcoBikeOne.jpg') }}" alt="EcoBike One" class="h-40 w-full object-cover rounded-lg">
                                <h4 class="mt-3 text-lg font-semibold">EcoBike One</h4>
                                <p class="mt-2 text-gray-600">Nuestra bicicleta eléctrica estrella para uso urbano y recreativo. Equilibrio perfecto entre vehículo y motor eléctrico para una experiencia de movilidad sostenible.</p>
                                <div class="mt-3 flex items-center justify-between">
                                    <span class="font-semibold text-emerald-600">Escalera</span>
                                    <a href="#" class="rounded-lg bg-emerald-600 px-4 py-2 text-white hover:bg-emerald-700">Reservar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <footer class="max-w-7xl mx-auto px-6 py-8 text-center text-sm text-gray-500">© 2025 Renta Verde Bucaramanga</footer>
    </body>
</html>