<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Reportar Incidencia de Vehículo - Renta Verde Bucaramanga</title>
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
      <h1 class="text-3xl sm:text-4xl font-extrabold text-emerald-700">Reportar Incidencia de Vehículo</h1>
      <p class="mt-3 text-gray-600">Formulario para generar un reporte de incidencia del vehículo.</p>
      <div class="mt-8 rounded-xl bg-white shadow ring-1 ring-black/5">
        <form action="#" method="post" novalidate class="p-6 space-y-6">
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
            <label for="numero_serie" class="block text-sm font-medium">Número de serie del vehículo</label>
            <input type="text" id="numero_serie" name="numero_serie" required class="mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-emerald-600 focus:ring-emerald-600" placeholder="Ej. RV-MONO-000321" />
          </div>
          <div>
            <label for="nombre_usuario" class="block text-sm font-medium">Nombre de la persona que tenía rentado el vehículo</label>
            <input type="text" id="nombre_usuario" name="nombre_usuario" required class="mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-emerald-600 focus:ring-emerald-600" placeholder="Ej. Juan Pérez" />
          </div>
          <div>
            <label for="lugar" class="block text-sm font-medium">Lugar en donde ocurrió</label>
            <input type="text" id="lugar" name="lugar" required class="mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-emerald-600 focus:ring-emerald-600" placeholder="Ej. Parque San Pío" />
          </div>
          <div>
            <label for="descripcion" class="block text-sm font-medium">Descripción de lo sucedido</label>
            <textarea id="descripcion" name="descripcion" rows="4" class="mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-emerald-600 focus:ring-emerald-600" placeholder="Detalla lo que ocurrió con el vehículo"></textarea>
          </div>
          <div class="flex items-center gap-3">
            <button type="submit" class="rounded-lg bg-emerald-600 px-5 py-2.5 text-white hover:bg-emerald-700">Enviar reporte</button>
            <a href="/" class="rounded-lg border border-emerald-600 px-5 py-2.5 text-emerald-700 hover:bg-emerald-50">Cancelar</a>
          </div>
        </form>
      </div>
    </section>
  </main>
  <footer class="max-w-7xl mx-auto px-6 py-8 text-center text-sm text-gray-500">© 2025 Renta Verde Bucaramanga</footer>
</body>
</html>