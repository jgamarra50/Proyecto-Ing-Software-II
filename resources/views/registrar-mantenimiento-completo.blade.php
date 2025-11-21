<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Registrar Mantenimiento Completo - Renta Verde Bucaramanga</title>
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
      <h1 class="text-3xl sm:text-4xl font-extrabold text-emerald-700">Registrar mantenimiento completo</h1>
      <p class="mt-3 text-gray-600">Confirma la finalización del mantenimiento del vehículo seleccionado.</p>

      <div class="mt-8 rounded-xl bg-white shadow ring-1 ring-black/5">
        <div class="p-6 border-b border-gray-200">
          <h2 class="text-lg font-semibold text-emerald-700">Resumen del vehículo</h2>
          <div class="mt-4 grid grid-cols-1 sm:grid-cols-2 gap-4">
            <div>
              <span class="block text-sm text-gray-600">Número de serie</span>
              <span class="mt-1 block text-base font-medium text-gray-900">{{ request('vehiculo') ?? 'No seleccionado' }}</span>
            </div>
            <div>
              <span class="block text-sm text-gray-600">Estado actual</span>
              <span class="mt-1 block text-base font-medium text-amber-600">En reparación</span>
            </div>
          </div>
        </div>

        <form action="#" method="post" novalidate class="p-6 space-y-6">
          <div>
            <label for="tecnico" class="block text-sm font-medium">Nombre del técnico</label>
            <input type="text" id="tecnico" name="tecnico" required class="mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-emerald-600 focus:ring-emerald-600" placeholder="Ej. Carlos Pérez" />
          </div>

          <div>
            <label for="numero_serie" class="block text-sm font-medium">Número de serie del vehículo</label>
            <input type="text" id="numero_serie" name="numero_serie" class="mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-emerald-600 focus:ring-emerald-600" value="{{ request('vehiculo') }}" placeholder="Ej. RV-MONO-000321" />
          </div>

          <div>
            <label for="fecha_fin" class="block text-sm font-medium">Fecha de finalización</label>
            <input type="date" id="fecha_fin" name="fecha_fin" required class="mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-emerald-600 focus:ring-emerald-600" />
          </div>

          <div>
            <label for="notas" class="block text-sm font-medium">Notas del mantenimiento</label>
            <textarea id="notas" name="notas" rows="4" class="mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-emerald-600 focus:ring-emerald-600" placeholder="Incluye detalles del trabajo realizado, piezas cambiadas y pruebas efectuadas..."></textarea>
          </div>

          <div class="flex items-center gap-3">
            <button type="submit" class="rounded-lg bg-emerald-600 px-5 py-2.5 text-white hover:bg-emerald-700">Guardar</button>
            <a href="/estado-vehiculo" class="rounded-lg border border-emerald-600 px-5 py-2.5 text-emerald-700 hover:bg-emerald-50">Cancelar</a>
          </div>
        </form>
      </div>

      <div class="mt-6">
        <a href="/estado-vehiculo" class="inline-block rounded-lg border border-emerald-600 px-5 py-2.5 text-emerald-700 hover:bg-emerald-50">Volver</a>
      </div>
    </section>
  </main>

  <footer class="max-w-7xl mx-auto px-6 py-8 text-center text-sm text-gray-500">© 2025 Renta Verde Bucaramanga</footer>
</body>
</html>