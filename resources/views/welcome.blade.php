<!doctype html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <title>
            Renta Verde Bucaramanga
        </title>
        @vite(["resources/css/app.css","resources/js/app.js"])
    </head>
    <body class="bg-gray-50 text-gray-900">
        <header class="max-w-7xl mx-auto flex items-center justify-between p-6">
            <div class="font-bold text-xl text-emerald-600">Renta Verde</div>
            <nav class="space-x-4">
                <a href="/articulos" class="text-gray-700 hover:text-emerald-600">Artículos</a>
                <a href="/login" class="text-gray-700 hover:text-emerald-600">Ingresar</a>
                <a href="/register" class="text-gray-700 hover:text-emerald-600">Registrarse</a>
            </nav>
        </header>
        <main>
            <section class="max-w-7xl mx-auto px-6 py-12 text-center">
                <h1 class="text-3xl sm:text-5xl font-extrabold text-emerald-700">Vehículos eléctricos, ciudad más limpia</h1>
                <p class="mt-4 text-lg text-gray-600">Renta monopatines, bicicletas y patinetas eléctricas en Bucaramanga y su área metropolitana.</p>
                <a href="/gestionar-vehiculos" class="mt-8 inline-block rounded-lg bg-emerald-600 px-6 py-3 text-white hover:bg-emerald-700">Gestionar Vehiculos</a>
                <a href="/historial-reservas" class="mt-3 inline-block rounded-lg border border-emerald-600 px-6 py-3 text-emerald-700 hover:bg-emerald-50">Consultar Historial de Reservas</a>
            </section>
            <section id="vehiculos" class="max-w-7xl mx-auto px-6 pb-12">
                <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
                    <div class="rounded-xl bg-white p-6 shadow">
                        <div class="flex items-center gap-3">
                            <svg class="h-8 w-8 text-emerald-600" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                                <path d="M4 18h3l2-6h4l2 6h3l-3-8H7l-3 8zM5 20a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm12 0a2 2 0 1 0 0-4 2 2 0 0 0 0 4z"/>
                            </svg>
                            <h3 class="text-xl font-semibold">front end del repartidor</h3>
                        </div>
                        <a href="/registrar-entrega-vehiculo" class="mt-3 inline-block rounded-lg bg-emerald-600 px-4 py-2 text-white hover:bg-emerald-700">Registrar entrega de Vehículo</a>
                    </div>
                    <div class="rounded-xl bg-white p-6 shadow">
                        <div class="flex items-center gap-3">
                            <svg class="h-8 w-8 text-emerald-600" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                                <path d="M5 17h2l3-4h4l3 4h2l-4-6 2-3h-2l-2 3H10L8 8H6l2 3-3 6zM6 19a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm12 0a2 2 0 1 0 0-4 2 2 0 0 0 0 4z"/>
                            </svg>
                            <h3 class="text-xl font-semibold">front end de tecnico de mantenimiento</h3>
                        </div>
                        <a href="/estado-vehiculo" class="mt-3 inline-block rounded-lg bg-emerald-600 px-4 py-2 text-white hover:bg-emerald-700">Estado de Vehiculo</a>
                    </div>
                    <div class="rounded-xl bg-white p-6 shadow">
                        <div class="flex items-center gap-3">
                            <svg class="h-8 w-8 text-emerald-600" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                                <path d="M4 16h12l2-2-2-2H6l-2 2v2zm1 3a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm14 0a2 2 0 1 0 0-4 2 2 0 0 0 0 4z"/>
                            </svg>
                            <h3 class="text-xl font-semibold">front end del operador de estacion</h3>
                        </div>
                        <a href="/reportar-incidencias" class="mt-3 inline-block rounded-lg bg-emerald-600 px-4 py-2 text-white hover:bg-emerald-700">reportar incidencias de vehículo</a>
                    </div>
                </div>
            </section>
            <section class="bg-white">
                <div class="max-w-7xl mx-auto px-6 py-12">
                    <h2 class="text-2xl font-bold text-emerald-700">Mapa de Estaciones</h2>
                    <div id="map" class="mt-4 aspect-square w-full max-w-3xl rounded-xl border"></div>
                </div>
            </section>
            <script>
                window.initMap = function() {
                    const center = {lat: 7.119349, lng: -73.12339};
                    const map = new google.maps.Map(document.getElementById('map'), {
                        center: center,
                        zoom: 13
                    });
                    const markers = [
                        {position: {lat: 7.1165, lng: -73.1069}, title: 'Parque San Pío'},
                        {position: {lat: 7.1019, lng: -73.1183}, title: 'C.C. Cacique'},
                        {position: {lat: 7.1325, lng: -73.1198}, title: 'UIS'}
                    ];
                    markers.forEach(m => new google.maps.Marker({position: m.position, map: map, title: m.title}));
                };
            </script>
            <script src="https://maps.googleapis.com/maps/api/js?key={{ config('services.google.maps_key') }}&callback=initMap" async defer></script>
            </main>
            <footer class="max-w-7xl mx-auto px-6 py-8 text-center text-sm text-gray-500">© 2025 Renta Verde Bucaramanga
                </footer>
            </body>
            </html>
            
