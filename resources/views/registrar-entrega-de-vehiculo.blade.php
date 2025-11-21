<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Registrar entrega de Vehículo</title>
  @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body class="bg-gray-50 text-gray-900">
  <header class="max-w-7xl mx-auto flex items-center justify-between p-6">
    <div class="font-bold text-xl text-emerald-600">Renta Verde</div>
    <nav class="space-x-4">
      <a href="/" class="text-gray-700 hover:text-emerald-600">Inicio</a>
    </nav>
  </header>

  <main class="max-w-3xl mx-auto px-6 py-10">
    <h1 class="text-2xl sm:text-3xl font-bold text-emerald-700">Registrar entrega de Vehículo</h1>

    <div class="mt-6 rounded-xl bg-white p-6 shadow">
      <form class="space-y-5">
        <div>
          <label for="fecha_entrega" class="block text-sm font-medium text-gray-700">Fecha de entrega</label>
          <input type="date" id="fecha_entrega" name="fecha_entrega" class="mt-2 w-full rounded-lg border border-slate-300 px-3 py-2 focus:outline-none focus:ring-2 focus:ring-emerald-500" />
        </div>

        <div>
          <label for="hora_entrega" class="block text-sm font-medium text-gray-700">Hora de entrega</label>
          <input type="time" id="hora_entrega" name="hora_entrega" class="mt-2 w-full rounded-lg border border-slate-300 px-3 py-2 focus:outline-none focus:ring-2 focus:ring-emerald-500" />
        </div>

        <div>
          <label for="numero_serie" class="block text-sm font-medium text-gray-700">Número de serie del vehículo</label>
          <input type="text" id="numero_serie" name="numero_serie" placeholder="Ej: RV-12345" class="mt-2 w-full rounded-lg border border-slate-300 px-3 py-2 focus:outline-none focus:ring-2 focus:ring-emerald-500" />
        </div>

        <div>
          <label for="tipo_vehiculo" class="block text-sm font-medium text-gray-700">Tipo de vehículo</label>
          <select id="tipo_vehiculo" name="tipo_vehiculo" class="mt-2 w-full rounded-lg border border-slate-300 px-3 py-2 focus:outline-none focus:ring-2 focus:ring-emerald-500">
            <option value="monopatin">Monopatín</option>
            <option value="patineta">Patineta</option>
            <option value="bicicleta">Bicicleta</option>
          </select>
        </div>

        <div>
          <label for="entregado_por" class="block text-sm font-medium text-gray-700">Nombre de quien entrega</label>
          <input type="text" id="entregado_por" name="entregado_por" placeholder="Nombre completo" class="mt-2 w-full rounded-lg border border-slate-300 px-3 py-2 focus:outline-none focus:ring-2 focus:ring-emerald-500" />
        </div>

        <div>
          <label for="direccion_entrega" class="block text-sm font-medium text-gray-700">Dirección de entrega</label>
          <input type="text" id="direccion_entrega" name="direccion_entrega" placeholder="Barrio, calle, número" class="mt-2 w-full rounded-lg border border-slate-300 px-3 py-2 focus:outline-none focus:ring-2 focus:ring-emerald-500" />
        </div>

        <div class="flex items-center justify-end gap-3 pt-4 border-t">
          <a href="/" class="rounded-lg border border-slate-300 px-5 py-2.5 text-slate-700 hover:bg-slate-50">Volver</a>
          <button type="submit" class="rounded-lg bg-emerald-600 px-5 py-2.5 text-white hover:bg-emerald-700">Guardar registro</button>
        </div>
      </form>
    </div>
  </main>

  <footer class="max-w-7xl mx-auto px-6 py-8 text-center text-sm text-gray-500">
    © 2025 Renta Verde Bucaramanga
  </footer>
</body>
</html>