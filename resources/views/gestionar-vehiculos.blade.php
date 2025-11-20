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
        <main class="max-w-3xl mx-auto my-10 px-4">
            <div class="w-full rounded-2xl bg-white shadow-xl ring-1 ring-black/5 overflow-hidden">
                <div class="h-2 bg-emerald-600">
                    </div>
                    <div class="px-8 pt-8">
                        <h1 class="text-2xl font-semibold">Gestionar Vehiculos
                            </h1>
                            <p class="mt-2 text-sm text-slate-600">Completa el formulario para realizar una reserva de un vehiculos electrico.</p>
                        </div>
                        <form action="#" method="post" novalidate>
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
                                                                    <option>
                                                                        1 hora
                                                                    </option>
                                                                    <option>
                                                                        2 horas
                                                                    </option>
                                                                    <option>
                                                                        4 horas
                                                                    </option>
                                                                    <option>
                                                                        8 horas
                                                                    </option>
                                                                    <option>
                                                                        24 horas
                                                                    </option>
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
                                                                <a href="/elegir-metodo-entrega" class="rounded-lg bg-emerald-600 px-5 py-2.5 text-white hover:bg-emerald-700">
                                                                    Confirmar Reserva
                                                                </a>
                                                                <a href="/" class="rounded-lg border border-slate-300 px-5 py-2.5 text-slate-700 hover:bg-slate-50">
                                                                    Cancelar Reserva
                                                                </a>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </main>
                                                @livewireScripts
                                                            </body>
                                                                </html>