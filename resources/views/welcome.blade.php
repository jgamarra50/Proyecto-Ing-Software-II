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
            <nav class="space-x-4"><a href="/login" class="text-gray-700 hover:text-emerald-600">
                Ingresar</a><a href="/register" class="text-gray-700 hover:text-emerald-600">Registrarse</a>
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
                            <h3 class="text-xl font-semibold">Monopatines</h3>
                        </div>
                        <p class="mt-3 text-gray-600">Movilidad ágil para trayectos cortos y sin emisiones.</p>
                    </div>
                    <div class="rounded-xl bg-white p-6 shadow">
                        <div class="flex items-center gap-3">
                            <svg class="h-8 w-8 text-emerald-600" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                                <path d="M5 17h2l3-4h4l3 4h2l-4-6 2-3h-2l-2 3H10L8 8H6l2 3-3 6zM6 19a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm12 0a2 2 0 1 0 0-4 2 2 0 0 0 0 4z"/>
                            </svg>
                            <h3 class="text-xl font-semibold">Bicicletas</h3>
                        </div>
                        <p class="mt-3 text-gray-600">Comodidad eléctrica con la libertad de una bici.</p>
                    </div>
                    <div class="rounded-xl bg-white p-6 shadow">
                        <div class="flex items-center gap-3">
                            <svg class="h-8 w-8 text-emerald-600" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                                <path d="M4 16h12l2-2-2-2H6l-2 2v2zm1 3a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm14 0a2 2 0 1 0 0-4 2 2 0 0 0 0 4z"/>
                            </svg>
                            <h3 class="text-xl font-semibold">Patinetas</h3>
                        </div>
                        <p class="mt-3 text-gray-600">Diversión eléctrica para moverte con estilo.</p>
                    </div>
                </div>
            </section>
            <section class="bg-white">
                <div class="max-w-7xl mx-auto px-6 py-12">
                    <h2 class="text-2xl font-bold text-emerald-700">Beneficios sostenibles</h2>
                    <ul class="mt-4 grid gap-4 sm:grid-cols-2">
                        <li class="flex items-start gap-3">
                            <span class="h-6 w-6">
                                🌱
                            </span>
                            <span>
                                Cero emisiones y menos ruido en la ciudad.</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="h-6 w-6">
                                    🔋
                                </span>
                                <span>
                                    Baterías recargables, energía limpia.
                                </span>
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="h-6 w-6">
                                    ⚡
                                </span>
                                <span>
                                    Renta rápida y sin complicaciones.
                                </span>
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="h-6 w-6">
                                    🗺️
                                </span>
                                <span>
                                    Cobertura en Bucaramanga y área metropolitana.
                                </span>
                            </li>
                        </ul>
                    </div>
                </section>
            </main>
            <footer class="max-w-7xl mx-auto px-6 py-8 text-center text-sm text-gray-500">© 2025 Renta Verde Bucaramanga
                </footer>
            </body>
            </html>
            
