<!doctype html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <title>Consultar Historial de Reservas - Renta Verde Bucaramanga</title>
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
                <h1 class="text-3xl sm:text-4xl font-extrabold text-emerald-700">Historial de Reservas</h1>
                <p class="mt-3 text-gray-600">Consulta visual de tus reservas. Esta información es de ejemplo y no es funcional.</p>
                <div class="mt-8 overflow-x-auto rounded-xl bg-white shadow ring-1 ring-black/5">
                    <table class="min-w-full table-auto">
                        <thead class="bg-emerald-50">
                            <tr>
                                <th scope="col" class="px-6 py-3 text-left text-sm font-semibold text-emerald-800">Fecha de reserva</th>
                                <th scope="col" class="px-6 py-3 text-left text-sm font-semibold text-emerald-800">Lugar de reserva</th>
                                <th scope="col" class="px-6 py-3 text-left text-sm font-semibold text-emerald-800">Método de entrega/recogida</th>
                                <th scope="col" class="px-6 py-3 text-left text-sm font-semibold text-emerald-800">Nombre del vehículo</th>
                                <th scope="col" class="px-6 py-3 text-left text-sm font-semibold text-emerald-800">Número de serie</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200">
                            <tr class="hover:bg-gray-50">
                                <td class="px-6 py-4 text-sm text-gray-700">2025-01-12 09:30</td>
                                <td class="px-6 py-4 text-sm text-gray-700">Parque Santander, Bucaramanga</td>
                                <td class="px-6 py-4 text-sm text-gray-700">Entrega en punto de encuentro</td>
                                <td class="px-6 py-4 text-sm text-gray-700">Monopatín Eléctrico X1</td>
                                <td class="px-6 py-4 text-sm text-gray-700">RV-MONO-000123</td>
                            </tr>
                            <tr class="hover:bg-gray-50">
                                <td class="px-6 py-4 text-sm text-gray-700">2025-01-18 15:45</td>
                                <td class="px-6 py-4 text-sm text-gray-700">Centro Comercial Cañaveral</td>
                                <td class="px-6 py-4 text-sm text-gray-700">Recogida a domicilio</td>
                                <td class="px-6 py-4 text-sm text-gray-700">Bicicleta Eléctrica EcoRide</td>
                                <td class="px-6 py-4 text-sm text-gray-700">RV-BICI-001987</td>
                            </tr>
                            <tr class="hover:bg-gray-50">
                                <td class="px-6 py-4 text-sm text-gray-700">2025-02-02 08:00</td>
                                <td class="px-6 py-4 text-sm text-gray-700">Parque de los Niños</td>
                                <td class="px-6 py-4 text-sm text-gray-700">Entrega en estación</td>
                                <td class="px-6 py-4 text-sm text-gray-700">Patineta Eléctrica VoltFlex</td>
                                <td class="px-6 py-4 text-sm text-gray-700">RV-PATIN-000452</td>
                            </tr>
                            <tr class="hover:bg-gray-50">
                                <td class="px-6 py-4 text-sm text-gray-700">2025-02-10 12:20</td>
                                <td class="px-6 py-4 text-sm text-gray-700">Puerta del Sol</td>
                                <td class="px-6 py-4 text-sm text-gray-700">Recogida en punto de encuentro</td>
                                <td class="px-6 py-4 text-sm text-gray-700">Monopatín Eléctrico UrbanLite</td>
                                <td class="px-6 py-4 text-sm text-gray-700">RV-MONO-000678</td>
                            </tr>
                            <tr class="hover:bg-gray-50">
                                <td class="px-6 py-4 text-sm text-gray-700">2025-02-18 17:10</td>
                                <td class="px-6 py-4 text-sm text-gray-700">Cabecera del Llano</td>
                                <td class="px-6 py-4 text-sm text-gray-700">Entrega a domicilio</td>
                                <td class="px-6 py-4 text-sm text-gray-700">Bicicleta Eléctrica GreenMove</td>
                                <td class="px-6 py-4 text-sm text-gray-700">RV-BICI-002341</td>
                            </tr>
                            <tr class="hover:bg-gray-50">
                                <td class="px-6 py-4 text-sm text-gray-700">2025-03-01 10:05</td>
                                <td class="px-6 py-4 text-sm text-gray-700">Parque San Pío</td>
                                <td class="px-6 py-4 text-sm text-gray-700">Recogida en estación</td>
                                <td class="px-6 py-4 text-sm text-gray-700">Patineta Eléctrica SwiftRide</td>
                                <td class="px-6 py-4 text-sm text-gray-700">RV-PATIN-000889</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="mt-6">
                    <a href="/" class="inline-block rounded-lg border border-emerald-600 px-5 py-2.5 text-emerald-700 hover:bg-emerald-50">Volver al inicio</a>
                </div>
            </section>
        </main>
        <footer class="max-w-7xl mx-auto px-6 py-8 text-center text-sm text-gray-500">© 2025 Renta Verde Bucaramanga</footer>
    </body>
</html>