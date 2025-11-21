<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>
            Gestionar Vehiculos - {{ config('app.name', 'Laravel') }}
        </title>
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
        @vite(['resources/css/app.css', 'resources/js/app.js'])@livewireStyles
    </head>
    <body class="min-h-screen bg-gradient-to-br from-sky-50 to-indigo-100 text-slate-800">
        <header class="max-w-7xl mx-auto flex items-center justify-between p-6">
            <div class="font-bold text-xl text-emerald-600">EcoFlow</div>
            <div class="flex items-center gap-4">
                <div class="relative">
                    <button id="userMenuButtonGestion" type="button" class="flex items-center gap-2 rounded-full bg-white px-2 py-1 hover:bg-gray-50">
                        <img src="{{ asset('img/celebracion.png') }}" class="h-10 w-10 rounded-full object-cover" alt="perfil">
                        <span class="text-sm text-gray-700">{{ auth()->user()->name }}</span>
                    </button>
                    <div id="userDropdownGestion" class="absolute right-0 mt-2 w-48 rounded-lg border border-gray-100 bg-white shadow-lg hidden">
                        <div class="px-4 py-3">
                            <div class="text-sm font-semibold text-gray-900">{{ auth()->user()->name }}</div>
                            <div class="mt-1 text-xs text-gray-500">{{ auth()->user()->role === 'admin' ? 'Administrador' : 'Cliente' }}</div>
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
            </div>
        </header>
        <main class="max-w-3xl mx-auto my-10 px-4">
            <div class="w-full rounded-2xl bg-white shadow-xl ring-1 ring-black/5 overflow-hidden">
                <div class="h-2 bg-emerald-600">
                    </div>
                    <div class="px-8 pt-8">
                        <h1 class="text-2xl font-semibold">Gestionar Vehiculos
                            </h1>
                            <p class="mt-2 text-sm text-slate-600">Completa el formulario para realizar una reserva de un vehiculos electrico.</p>
                        </div>
                        @php
    $vehiculos = [
        'ecoScoot-max' => [
            'nombre' => 'EcoScoot Max',
            'descripcion' => 'Equilibrio entre rendimiento y practicidad para recorridos urbanos rápidos.',
            'precio' => '$16.000 COP',
            'tarifa_inicial' => '$8.000 COP'
        ],
        'ecoMoto-pro' => [
            'nombre' => 'EcoMoto Pro',
            'descripcion' => 'Ideal para usuarios que buscan rendimiento superior sin comprometer la sostenibilidad.',
            'precio' => '$28.000 COP',
            'tarifa_inicial' => '$12.000 COP'
        ],
        'ecoScoot-lite' => [
            'nombre' => 'EcoScoot Lite',
            'descripcion' => 'Vehículo ligero y eficiente para desplazamientos cortos.',
            'precio' => '$12.000 COP',
            'tarifa_inicial' => '$6.000 COP'
        ],
        'ecoMoto-standard' => [
            'nombre' => 'EcoMoto Standard',
            'descripcion' => 'Combinación de confort y eficiencia para uso diario.',
            'precio' => '$20.000 COP',
            'tarifa_inicial' => '$10.000 COP'
        ],
        'ecoBike-one' => [
            'nombre' => 'EcoBike One',
            'descripcion' => 'Bicicleta eléctrica versátil para todo tipo de terreno.',
            'precio' => '$18.000 COP',
            'tarifa_inicial' => '$9.000 COP'
        ]
    ];
    $vehiculoSeleccionado = request()->get('vehiculo');
    $infoVehiculo = $vehiculos[$vehiculoSeleccionado] ?? null;
@endphp
@php $qs = http_build_query(request()->only(['vehiculo','duracion','precio'])); @endphp
<form action="#" method="post" novalidate>
<div class="p-8 space-y-10">
    @if($infoVehiculo)
    <div class="mb-4">
        <h2 class="text-xl font-semibold">{{ $infoVehiculo['nombre'] }}</h2>
        <p class="text-gray-700">{{ $infoVehiculo['descripcion'] }}</p>
        <p class="text-emerald-600 font-bold mt-2">Precio: {{ $infoVehiculo['precio'] }}</p>
        <p class="text-gray-600">Tarifa inicial: {{ $infoVehiculo['tarifa_inicial'] }}</p>
    </div>
    @endif
    @php
        $duracionSel = request('duracion');
        $precioSel = request('precio');
    @endphp
                            <div class="p-8 space-y-10">
                                <section class="space-y-6">
                                    <h2 class="text-lg font-medium">Datos personales</h2>
                                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                                        <div>
                                            <label for="nombre" class="block text-sm font-medium">Nombre completo</label>
                                            <input id="nombre" type="text" class="mt-2 w-full rounded-lg border border-slate-300 px-3 py-2 focus:outline-none focus:ring-2 focus:ring-emerald-500" placeholder="Ej. Juan Perez" />
                                        </div>
                                        <div>
                                            <label for="email" class="block text-sm font-medium">Correo electronico</label>
                                            <input id="email" type="email" class="mt-2 w-full rounded-lg border border-slate-300 px-3 py-2 focus:outline-none focus:ring-2 focus:ring-emerald-500" placeholder="ejemplo@correo.com" />
                                        </div>
                                        <div>
                                            <label for="telefono" class="block text-sm font-medium">Telefono</label>
                                            <input id="telefono" type="tel" class="mt-2 w-full rounded-lg border border-slate-300 px-3 py-2 focus:outline-none focus:ring-2 focus:ring-emerald-500" placeholder="Ej. +57 300 123 4567" />
                                        </div>
                                        <div class="grid grid-cols-3 gap-3">
                                            <div class="col-span-1">
                                                <label for="tipo-doc" class="block text-sm font-medium">
                                                    Tipo de documento
                                                </label>
                                                    <select id="tipo-doc" class="mt-2 w-full rounded-lg border border-slate-300 px-3 py-2 focus:outline-none focus:ring-2 focus:ring-emerald-500">
                                                        <option>
                                                            CC
                                                        </option>
                                                        <option>
                                                            CE
                                                        </option>
                                                        <option>
                                                            Pasaporte
                                                        </option>
                                                        </select>
                                                    </div>
                                                    <div class="col-span-2">
                                                        <label for="num-doc" class="block text-sm font-medium">Numero de documento
                                                        </label>
                                                        <input id="num-doc" type="text" class="mt-2 w-full rounded-lg border border-slate-300 px-3 py-2 focus:outline-none focus:ring-2 focus:ring-emerald-500" placeholder="Ej. 123456789" />
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                        <section class="space-y-6">
                                            <h2 class="text-lg font-medium">Detalles de la reserva
                                                </h2>
                                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                                                    <div>
                                                        <label for="fecha" class="block text-sm font-medium">
                                                            Fecha de reserva
                                                        </label>
                                                        <input id="fecha" type="date" class="mt-2 w-full rounded-lg border border-slate-300 px-3 py-2 focus:outline-none focus:ring-2 focus:ring-emerald-500" />
                                                    </div>
                                                    <div>
                                                        <label for="hora" class="block text-sm font-medium">Hora de inicio
                                                            </label>
                                                            <input id="hora" type="time" class="mt-2 w-full rounded-lg border border-slate-300 px-3 py-2 focus:outline-none focus:ring-2 focus:ring-emerald-500" />
                                                        </div>
                                                        <div>
                                            <label for="duracion" class="block text-sm font-medium">Duracion estimada
                                                </label>
                                                <select id="duracion" class="mt-2 w-full rounded-lg border border-slate-300 px-3 py-2 focus:outline-none focus:ring-2 focus:ring-emerald-500">
                                                    <option {{ $duracionSel==='hora' ? 'selected' : '' }}>1 hora</option>
                                                    <option {{ $duracionSel==='medio' ? 'selected' : '' }}>Medio día</option>
                                                    <option {{ $duracionSel==='dia' ? 'selected' : '' }}>Día completo</option>
                                                </select>
                                                            </div>
                                                            <div>
                                                                <label for="tipo" class="block text-sm font-medium">
                                                                    Tipo de vehiculo
                                                                </label>
                                                                <select id="tipo" class="mt-2 w-full rounded-lg border border-slate-300 px-3 py-2 focus:outline-none focus:ring-2 focus:ring-emerald-500">
                                                                    <option>
                                                                        Monopatin electrico
                                                                    </option>
                                                                    <option>
                                                                        Bicicleta electrica
                                                                    </option>
                                                                    <option>
                                                                        Patineta electrica
                                                                    </option>
                                                                </select>
                                                                @if($precioSel)
                                                                <p class="mt-2 text-sm text-emerald-700">Precio seleccionado: ${{ number_format((int)$precioSel, 0, ',', '.') }} COP</p>
                                                                @endif
                                                            </div>
                                                            <div class="sm:col-span-2">
                                                                <label class="block text-sm font-medium">
                                                                    Accesorios
                                                                </label>
                                                                <div class="mt-2 flex flex-wrap gap-4">
                                                                    <label class="inline-flex items-center gap-2">
                                                                        <input type="checkbox" class="rounded border-slate-300 text-emerald-600 focus:ring-emerald-500" />
                                                                        <span>
                                                                            Casco
                                                                        </span>
                                                                    </label>
                                                                    <label class="inline-flex items-center gap-2">
                                                                        <input type="checkbox" class="rounded border-slate-300 text-emerald-600 focus:ring-emerald-500" />
                                                                        <span>
                                                                            Candado
                                                                        </span>
                                                                    </label>
                                                                    <label class="inline-flex items-center gap-2">
                                                                        <input type="checkbox" class="rounded border-slate-300 text-emerald-600 focus:ring-emerald-500" />
                                                                        <span>
                                                                            Luces extra
                                                                        </span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <label for="recogida" class="block text-sm font-medium">
                                                                    Punto de recogida
                                                                </label>
                                                                <input id="recogida" type="text" class="mt-2 w-full rounded-lg border border-slate-300 px-3 py-2 focus:outline-none focus:ring-2 focus:ring-emerald-500" placeholder="Ej. Parque Santander" />
                                                            </div>
                                                            <div>
                                                                <label for="entrega" class="block text-sm font-medium">Punto de entrega
                                                                </label>
                                                                <input id="entrega" type="text" class="mt-2 w-full rounded-lg border border-slate-300 px-3 py-2 focus:outline-none focus:ring-2 focus:ring-emerald-500" placeholder="Ej. Centro Comercial Cacique" />
                                                            </div>
                                                            <div>
                                                                <label for="metodo" class="block text-sm font-medium">Metodo de entrega/recogida
                                                                    </label>
                                                                    <select id="metodo" class="mt-2 w-full rounded-lg border border-slate-300 px-3 py-2 focus:outline-none focus:ring-2 focus:ring-emerald-500">
                                                                        <option>
                                                                            En sede
                                                                        </option>
                                                                        <option>
                                                                            Entrega a domicilio
                                                                        </option>
                                                                    </select>
                                                                </div>
                                                                <div>
                                                                    <label for="direccion" class="block text-sm font-medium">
                                                                        Direccion de entrega (si aplica)
                                                                    </label>
                                                                        <input id="direccion" type="text" class="mt-2 w-full rounded-lg border border-slate-300 px-3 py-2 focus:outline-none focus:ring-2 focus:ring-emerald-500" placeholder="Barrio, calle, numero" />
                                                                    </div>
                                                                </div>
                                                            </section>
                                                            <section class="space-y-6"><h2 class="text-lg font-medium">Observaciones
                                                                </h2>
                                                                <div>
                                                                    <label for="observaciones" class="block text-sm font-medium">
                                                                        Comentarios adicionales
                                                                    </label>
                                                                    <textarea id="observaciones" rows="4" class="mt-2 w-full rounded-lg border border-slate-300 px-3 py-2 focus:outline-none focus:ring-2 focus:ring-emerald-500" placeholder="Indica requerimientos especiales, restricciones o notas relevantes">
                                                                        </textarea>
                                                                    </div>
                                                                </section>
                                                            </div>
                                                            <div class="flex items-center justify-end gap-3 p-6 border-t">
                        <a href="/elegir-metodo-entrega{{ $qs ? ('?'.$qs) : '' }}" class="rounded-lg bg-emerald-600 px-5 py-2.5 text-white hover:bg-emerald-700">
                            Confirmar Reserva
                        </a>
                                                                <a href="/" class="rounded-lg border border-slate-300 px-5 py-2.5 text-slate-700 hover:bg-slate-50">
                                                                    Cancelar Reserva
                                                                </a>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </main>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const btn = document.getElementById('userMenuButtonGestion');
                const dd = document.getElementById('userDropdownGestion');
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
        @livewireScripts
                                                            </body>
                                                                </html>