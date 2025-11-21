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
            <div class="font-bold text-xl text-emerald-600">EcoFlow</div>
            <div class="flex items-center gap-4">
                @guest
                    <a href="/login" class="flex items-center gap-2 text-gray-700 hover:text-black transition">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                        </svg>
                        <span class="hidden xl:inline">Ingresar</span>
                    </a>
                    <a href="/register" class="hidden sm:flex bg-black text-white px-5 py-2 rounded-full hover:bg-gray-800 transition shadow-lg shadow-black/20">
                        Registrarse
                    </a>
                @endguest
                @auth
                <div class="relative">
                    <button id="userMenuButtonHist" type="button" class="flex items-center gap-2 rounded-full bg-white px-2 py-1 hover:bg-gray-50">
                        <img src="{{ asset('img/celebracion.png') }}" class="h-10 w-10 rounded-full object-cover" alt="perfil">
                        <span class="text-sm text-gray-700">{{ auth()->user()->name }}</span>
                    </button>
                    <div id="userDropdownHist" class="absolute right-0 mt-2 w-48 rounded-lg border border-gray-100 bg-white shadow-lg hidden">
                        <div class="px-4 py-3">
                            <div class="text-sm font-semibold text-gray-900">{{ auth()->user()->name }}</div>
                            @php($roleMap = ['cliente'=>'Cliente','admin'=>'Administrador'])
                            <div class="mt-1 text-xs text-gray-500">{{ $roleMap[auth()->user()->role] ?? auth()->user()->role }}</div>
                        </div>
                        <div class="border-t">
                            <a href="/mis-reservas" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-50">Ver mis reservas</a>
                            <form action="{{ route('logout') }}" method="post" class="px-4 py-2">
                                @csrf
                                <button type="submit" class="w-full text-left text-sm text-red-600 hover:bg-red-50 rounded">Cerrar sesión</button>
                            </form>
                        </div>
                    </div>
                </div>
                @endauth
            </div>
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
        <footer class="max-w-7xl mx-auto px-6 py-8 text-center text-sm text-gray-500">© 2025 EcoFlow</footer>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const btn = document.getElementById('userMenuButtonHist');
                const dd = document.getElementById('userDropdownHist');
                if (btn && dd) {
                    btn.addEventListener('click', function(e) {
                        e.stopPropagation();
                        dd.classList.toggle('hidden');
                    });
                    document.addEventListener('click', function() {
                        dd.classList.add('hidden');
                    });
                }
            });
        </script>
    </body>
</html>