<!doctype html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <title>Estado de Vehículo - Renta Verde Bucaramanga</title>
        @vite(["resources/css/app.css","resources/js/app.js"])
    </head>
    <body class="bg-gray-50 text-gray-900">
        <header class="max-w-7xl mx-auto flex items-center justify-between p-6">
            <div class="font-bold text-xl text-emerald-600">Renta Verde</div>
            <nav class="space-x-4">
                <a href="/" class="text-gray-700 hover:text-emerald-600">Inicio</a>
                <a href="/login" class="text-gray-700 hover:text-emerald-600">Ingresar</a>
                <a href="/register" class="text-gray-700 hover:text-emerald-600">Registrarse</a>
            </nav>
        </header>
        <main>
            <section class="max-w-7xl mx-auto px-6 py-12">
                <h1 class="text-3xl sm:text-4xl font-extrabold text-emerald-700">Estado de Vehículo</h1>
                <p class="mt-3 text-gray-600">Formulario para registrar el estado del vehículo.</p>
                <div class="mt-8 rounded-xl bg-white shadow ring-1 ring-black/5">
                    <form action="#" method="post" novalidate class="p-6 space-y-6">
                        <div>
                            <label for="nombre_tecnico" class="block text-sm font-medium">Nombre del técnico</label>
                            <input type="text" id="nombre_tecnico" name="nombre_tecnico" required class="mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-emerald-600 focus:ring-emerald-600" />
                        </div>
                        <div>
                            <label for="numero_serie" class="block text-sm font-medium">Número de serie del vehículo</label>
                            <input type="text" id="numero_serie" name="numero_serie" required class="mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-emerald-600 focus:ring-emerald-600" />
                        </div>
                        <div>
                            <label for="tipo_vehiculo" class="block text-sm font-medium">Tipo de vehículo</label>
                            <select id="tipo_vehiculo" name="tipo_vehiculo" required class="mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-emerald-600 focus:ring-emerald-600">
                                <option value="">Seleccione...</option>
                                <option value="monopatin">Monopatín</option>
                                <option value="patineta">Patineta</option>
                                <option value="bicicleta">Bicicleta</option>
                            </select>
                        </div>
                        <div>
                            <label for="estado" class="block text-sm font-medium">Estado del vehículo</label>
                            <select id="estado" name="estado" required class="mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-emerald-600 focus:ring-emerald-600">
                                <option value="">Seleccione...</option>
                                <option value="descompuesto">Descompuesto</option>
                                <option value="en_reparacion">En reparación</option>
                                <option value="en_funcionamiento">En funcionamiento</option>
                                <option value="averiado">Averiado</option>
                            </select>
                        </div>
                        <div>
                            <label for="descripcion" class="block text-sm font-medium">Descripción</label>
                            <textarea id="descripcion" name="descripcion" rows="4" class="mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-emerald-600 focus:ring-emerald-600" placeholder="Describe brevemente el estado del vehículo"></textarea>
                        </div>
                        <div class="flex items-center gap-3">
                            <button type="submit" class="rounded-lg bg-emerald-600 px-5 py-2.5 text-white hover:bg-emerald-700">Guardar</button>
                            <a href="/" class="rounded-lg border border-emerald-600 px-5 py-2.5 text-emerald-700 hover:bg-emerald-50">Cancelar</a>
                        </div>
                    </form>
                </div>
            </section>
            <section class="max-w-7xl mx-auto px-6 py-12">
                <h2 class="text-2xl sm:text-3xl font-bold text-emerald-700">Vehículos en reparación</h2>
                <p class="mt-3 text-gray-600">Lista de vehículos actualmente en mantenimiento. Selecciona uno para registrar su mantenimiento completado.</p>
                <div class="mt-6 overflow-x-auto rounded-xl bg-white shadow ring-1 ring-black/5">
                    <form action="/registrar-mantenimiento-completo" method="get">
                        <table class="min-w-full table-auto">
                            <thead class="bg-emerald-50">
                                <tr>
                                    <th class="px-6 py-3 text-left text-sm font-semibold text-emerald-800">Seleccionar</th>
                                    <th class="px-6 py-3 text-left text-sm font-semibold text-emerald-800">Nombre del vehículo</th>
                                    <th class="px-6 py-3 text-left text-sm font-semibold text-emerald-800">Número de serie</th>
                                    <th class="px-6 py-3 text-left text-sm font-semibold text-emerald-800">Tipo</th>
                                    <th class="px-6 py-3 text-left text-sm font-semibold text-emerald-800">Técnico asignado</th>
                                    <th class="px-6 py-3 text-left text-sm font-semibold text-emerald-800">Fecha de ingreso</th>
                                    <th class="px-6 py-3 text-left text-sm font-semibold text-emerald-800">Estado</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200">
                                <tr class="hover:bg-gray-50">
                                    <td class="px-6 py-4"><input type="radio" name="vehiculo" value="RV-MONO-000321" class="h-4 w-4 text-emerald-600"></td>
                                    <td class="px-6 py-4 text-sm text-gray-700">Monopatín Eléctrico UrbanLite</td>
                                    <td class="px-6 py-4 text-sm text-gray-700">RV-MONO-000321</td>
                                    <td class="px-6 py-4 text-sm text-gray-700">Monopatín</td>
                                    <td class="px-6 py-4 text-sm text-gray-700">Carlos Pérez</td>
                                    <td class="px-6 py-4 text-sm text-gray-700">2025-03-05</td>
                                    <td class="px-6 py-4 text-sm text-amber-600">En reparación</td>
                                </tr>
                                <tr class="hover:bg-gray-50">
                                    <td class="px-6 py-4"><input type="radio" name="vehiculo" value="RV-BICI-002765" class="h-4 w-4 text-emerald-600"></td>
                                    <td class="px-6 py-4 text-sm text-gray-700">Bicicleta Eléctrica GreenMove</td>
                                    <td class="px-6 py-4 text-sm text-gray-700">RV-BICI-002765</td>
                                    <td class="px-6 py-4 text-sm text-gray-700">Bicicleta</td>
                                    <td class="px-6 py-4 text-sm text-gray-700">Luisa Gómez</td>
                                    <td class="px-6 py-4 text-sm text-gray-700">2025-03-07</td>
                                    <td class="px-6 py-4 text-sm text-amber-600">En reparación</td>
                                </tr>
                                <tr class="hover:bg-gray-50">
                                    <td class="px-6 py-4"><input type="radio" name="vehiculo" value="RV-PATIN-001112" class="h-4 w-4 text-emerald-600"></td>
                                    <td class="px-6 py-4 text-sm text-gray-700">Patineta Eléctrica VoltFlex</td>
                                    <td class="px-6 py-4 text-sm text-gray-700">RV-PATIN-001112</td>
                                    <td class="px-6 py-4 text-sm text-gray-700">Patineta</td>
                                    <td class="px-6 py-4 text-sm text-gray-700">Andrés Rojas</td>
                                    <td class="px-6 py-4 text-sm text-gray-700">2025-03-09</td>
                                    <td class="px-6 py-4 text-sm text-amber-600">En reparación</td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="px-6 py-4">
                            <button type="submit" class="rounded-lg bg-emerald-600 px-5 py-2.5 text-white hover:bg-emerald-700">Registrar mantenimiento completo</button>
                        </div>
                    </form>
                </div>
            </section>
        </main>
        <footer class="max-w-7xl mx-auto px-6 py-8 text-center text-sm text-gray-500">© 2025 Renta Verde Bucaramanga</footer>
    </body>
</html>