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
                            @php
                                $roleMap = ['cliente'=>'Cliente','admin'=>'Administrador'];
                            @endphp
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
                <p class="mt-3 text-gray-600">Consulta visual de tus reservas.</p>
                <div class="mt-8 overflow-x-auto rounded-xl bg-white shadow ring-1 ring-black/5">
                    <table class="min-w-full table-auto">
                        <thead class="bg-emerald-50">
                            <tr>
                                <th scope="col" class="px-6 py-3 text-left text-sm font-semibold text-emerald-800">Fecha de reserva</th>
                                <th scope="col" class="px-6 py-3 text-left text-sm font-semibold text-emerald-800">Lugar de reserva</th>
                                <th scope="col" class="px-6 py-3 text-left text-sm font-semibold text-emerald-800">Método de entrega/recogida</th>
                                <th scope="col" class="px-6 py-3 text-left text-sm font-semibold text-emerald-800">Nombre del vehículo</th>
                                <th scope="col" class="px-6 py-3 text-left text-sm font-semibold text-emerald-800">Número de serie</th>
                                <th scope="col" class="px-6 py-3 text-left text-sm font-semibold text-emerald-800">Acciones</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200">
                            @php
                                $vehiculosNombres = [
                                    'ecoScoot-max' => 'EcoScoot Max',
                                    'ecoMoto-pro' => 'EcoMoto Pro',
                                    'ecoScoot-lite' => 'EcoScoot Lite',
                                    'ecoMoto-standard' => 'EcoMoto Standard',
                                    'ecoBike-one' => 'EcoBike One',
                                ];
                            @endphp
                            @forelse(($reservas ?? []) as $r)
                            @php
                                $ent = ($entregas ?? collect())->get($r->id);
                                $metodo = $ent
                                    ? ($ent->domicilio ? 'Entrega a domicilio' : ('Entrega en sede'))
                                    : ($r->metodo === 'domicilio' ? 'Entrega a domicilio' : 'Entrega en sede');
                                $vehiculoNombre = $vehiculosNombres[$r->vehiculo] ?? ucfirst($r->tipo ?? 'Vehículo');
                                $fechaHora = trim(($r->fecha ?? '').' '.($r->hora ?? ''));
                            @endphp
                            <tr class="hover:bg-gray-50">
                                <td class="px-6 py-4 text-sm text-gray-700">{{ $fechaHora ?: '-' }}</td>
                                <td class="px-6 py-4 text-sm text-gray-700">{{ $r->recogida ?? '-' }}</td>
                                <td class="px-6 py-4 text-sm text-gray-700">{{ $metodo }}</td>
                                <td class="px-6 py-4 text-sm text-gray-700">{{ $vehiculoNombre }}</td>
                                <td class="px-6 py-4 text-sm text-gray-700">{{ $r->numero_serie ?? '—' }}</td>
                                <td class="px-6 py-4 text-sm">
                                    <form action="{{ route('reservas.destroy', $r->id) }}" method="post" onsubmit="return confirm('¿Eliminar esta reserva?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="p-2 rounded hover:bg-red-50" aria-label="Eliminar">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-red-600">
                                              <path stroke-linecap="round" stroke-linejoin="round" d="M6 7.5h12M9.75 7.5V6a2.25 2.25 0 0 1 2.25-2.25h0a2.25 2.25 0 0 1 2.25 2.25v1.5m-7.5 0v10.125A2.625 2.625 0 0 0 9.375 20.25h5.25a2.625 2.625 0 0 0 2.625-2.625V7.5" />
                                            </svg>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="6" class="px-6 py-4 text-sm text-gray-500">No tienes reservas registradas.</td>
                            </tr>
                            @endforelse
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