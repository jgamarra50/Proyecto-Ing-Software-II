<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Elegir metodo entrega - {{ config('app.name', 'Laravel') }}</title>
  <link rel="preconnect" href="https://fonts.bunny.net">
  <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
  @vite(['resources/css/app.css','resources/js/app.js'])
  @livewireStyles
</head>
<body class="min-h-screen bg-gradient-to-br from-sky-50 to-indigo-100 text-slate-800">
  <main class="max-w-3xl mx-auto my-10 px-4">
    <div class="w-full rounded-2xl bg-white shadow-xl ring-1 ring-black/5 overflow-hidden">
      <div class="h-2 bg-emerald-600"></div>

      <div class="px-8 pt-8">
        <h1 class="text-2xl font-semibold">Elegir metodo entrega</h1>
        <p class="mt-2 text-sm text-slate-600">Elige en que sede o estacion recoger el vehiculo, o marca entrega a domicilio.</p>
      </div>

      <form action="#" method="get" novalidate>
        <div class="p-8 space-y-8">
          <div class="space-y-4">
            <label for="sede" class="block text-sm font-medium">Sede o estacion</label>
            <select id="sede" class="mt-2 w-full rounded-lg border border-slate-300 px-3 py-2 focus:outline-none focus:ring-2 focus:ring-emerald-500">
              <option value="centro">Sede Centro - Cra 15 # 10-20</option>
              <option value="sotomayor">Sede barrio Sotomayor - Calle 48 # 33-12</option>
              <option value="cacique">Estacion CC Cacique - Av. Quebradaseca</option>
              <option value="laflora">Estacion La Flora - Calle 58 # 41-23</option>
              <option value="cabecera">Sede Cabecera - Cra 35 # 51-16</option>
            </select>
          </div>

          <div class="space-y-3">
            <label class="inline-flex items-center gap-2">
              <input id="domicilio" type="checkbox" class="rounded border-slate-300 text-emerald-600 focus:ring-emerald-500" />
              <span>recibir vehiculo a domicilio</span>
            </label>

            <div id="direccion-wrapper" class="mt-2 hidden">
              <label for="direccion-domicilio" class="block text-sm font-medium">Direccion de residencia</label>
              <input id="direccion-domicilio" type="text" class="mt-2 w-full rounded-lg border border-slate-300 px-3 py-2 focus:outline-none focus:ring-2 focus:ring-emerald-500" placeholder="Barrio, calle, numero" disabled />
            </div>
          </div>
        </div>

        <div class="flex items-center justify-end gap-3 p-6 border-t">
          <a href="/gestionar-vehiculos" class="rounded-lg border border-slate-300 px-5 py-2.5 text-slate-700 hover:bg-slate-50">Volver</a>
          <a href="/realizar-pago" class="rounded-lg bg-emerald-600 px-5 py-2.5 text-white hover:bg-emerald-700">Continuar</a>
        </div>
      </form>
    </div>
  </main>

  @livewireScripts
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      var domicilio = document.getElementById('domicilio');
      var sedeSelect = document.getElementById('sede');
      var direccionWrapper = document.getElementById('direccion-wrapper');
      var direccionInput = document.getElementById('direccion-domicilio');

      function actualizar() {
        if (domicilio.checked) {
          sedeSelect.setAttribute('disabled', 'disabled');
          direccionWrapper.classList.remove('hidden');
          direccionInput.removeAttribute('disabled');
        } else {
          sedeSelect.removeAttribute('disabled');
          direccionWrapper.classList.add('hidden');
          direccionInput.setAttribute('disabled', 'disabled');
        }
      }

      domicilio.addEventListener('change', actualizar);
      actualizar();
    });
  </script>
</body>
</html>