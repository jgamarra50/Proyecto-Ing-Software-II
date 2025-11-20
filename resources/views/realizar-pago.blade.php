<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Realizar pago - {{ config('app.name', 'Laravel') }}</title>
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
        <h1 class="text-2xl font-semibold">Realizar pago</h1>
        <p class="mt-2 text-sm text-slate-600">Completa los datos para procesar tu pago de forma segura.</p>
      </div>

      <form action="#" method="post" novalidate>
        <div class="p-8 space-y-8">
          <section class="space-y-4">
            <h2 class="text-sm font-medium text-slate-700">Método de pago</h2>
            <div class="grid grid-cols-1 gap-3 sm:grid-cols-2">
              <label class="flex cursor-pointer items-center gap-3 rounded-lg border border-slate-300 px-4 py-3 hover:border-emerald-500">
                <input type="radio" name="metodo_pago" id="pago-tarjeta" value="tarjeta" class="text-emerald-600 focus:ring-emerald-500" checked>
                <div>
                  <div class="text-sm font-semibold">Tarjeta de crédito/débito</div>
                  <div class="mt-1 text-xs text-slate-500">Visa, Mastercard, American Express</div>
                </div>
              </label>
              <label class="flex cursor-pointer items-center gap-3 rounded-lg border border-slate-300 px-4 py-3 hover:border-emerald-500">
                <input type="radio" name="metodo_pago" id="pago-pse" value="pse" class="text-emerald-600 focus:ring-emerald-500">
                <div>
                  <div class="text-sm font-semibold">PSE</div>
                  <div class="mt-1 text-xs text-slate-500">Débito desde tu banco</div>
                </div>
              </label>
            </div>
          </section>

          <section id="tarjeta-section" class="space-y-6">
            <div class="grid grid-cols-1 gap-6 sm:grid-cols-2">
              <div class="sm:col-span-2">
                <label for="titular" class="block text-sm font-medium">Nombre del titular</label>
                <input id="titular" type="text" class="mt-2 w-full rounded-lg border border-slate-300 px-3 py-2 focus:outline-none focus:ring-2 focus:ring-emerald-500" placeholder="Como aparece en la tarjeta" />
              </div>
              <div class="sm:col-span-2">
                <label for="numero-tarjeta" class="block text-sm font-medium">Número de tarjeta</label>
                <input id="numero-tarjeta" type="text" inputmode="numeric" class="mt-2 w-full rounded-lg border border-slate-300 px-3 py-2 focus:outline-none focus:ring-2 focus:ring-emerald-500" placeholder="0000 0000 0000 0000" />
              </div>
              <div>
                <label for="expiracion" class="block text-sm font-medium">Expiración</label>
                <input id="expiracion" type="text" class="mt-2 w-full rounded-lg border border-slate-300 px-3 py-2 focus:outline-none focus:ring-2 focus:ring-emerald-500" placeholder="MM/AA" />
              </div>
              <div>
                <label for="cvv" class="block text-sm font-medium">CVV</label>
                <input id="cvv" type="password" class="mt-2 w-full rounded-lg border border-slate-300 px-3 py-2 focus:outline-none focus:ring-2 focus:ring-emerald-500" placeholder="3 o 4 dígitos" />
              </div>
              <div>
                <label for="tipo-doc" class="block text-sm font-medium">Tipo de documento</label>
                <select id="tipo-doc" class="mt-2 w-full rounded-lg border border-slate-300 px-3 py-2 focus:outline-none focus:ring-2 focus:ring-emerald-500">
                  <option value="cc">Cédula de ciudadanía</option>
                  <option value="ce">Cédula de extranjería</option>
                  <option value="nit">NIT</option>
                  <option value="pp">Pasaporte</option>
                </select>
              </div>
              <div>
                <label for="num-doc" class="block text-sm font-medium">Número de documento</label>
                <input id="num-doc" type="text" class="mt-2 w-full rounded-lg border border-slate-300 px-3 py-2 focus:outline-none focus:ring-2 focus:ring-emerald-500" placeholder="Ej. 123456789" />
              </div>
              <div>
                <label for="correo" class="block text-sm font-medium">Correo electrónico</label>
                <input id="correo" type="email" class="mt-2 w-full rounded-lg border border-slate-300 px-3 py-2 focus:outline-none focus:ring-2 focus:ring-emerald-500" placeholder="tucorreo@ejemplo.com" />
              </div>
              <div>
                <label for="telefono" class="block text-sm font-medium">Teléfono</label>
                <input id="telefono" type="tel" class="mt-2 w-full rounded-lg border border-slate-300 px-3 py-2 focus:outline-none focus:ring-2 focus:ring-emerald-500" placeholder="Ej. 3001234567" />
              </div>
              <div class="sm:col-span-2">
                <label for="direccion" class="block text-sm font-medium">Dirección de facturación</label>
                <input id="direccion" type="text" class="mt-2 w-full rounded-lg border border-slate-300 px-3 py-2 focus:outline-none focus:ring-2 focus:ring-emerald-500" placeholder="Calle, número, barrio, ciudad" />
              </div>
            </div>

            <div class="rounded-lg bg-slate-50 p-4 text-xs text-slate-600">
              Tus datos serán procesados de forma segura en cumplimiento de estándares PCI-DSS.
            </div>
          </section>

          <section id="pse-section" class="space-y-6 hidden">
            <div class="grid grid-cols-1 gap-6 sm:grid-cols-2">
              <div class="sm:col-span-2">
                <label for="banco" class="block text-sm font-medium">Banco</label>
                <select id="banco" class="mt-2 w-full rounded-lg border border-slate-300 px-3 py-2 focus:outline-none focus:ring-2 focus:ring-emerald-500">
                  <option value="bancolombia">Bancolombia</option>
                  <option value="davivienda">Davivienda</option>
                  <option value="bbva">BBVA</option>
                  <option value="occidente">Banco de Occidente</option>
                  <option value="bogota">Banco de Bogotá</option>
                  <option value="popular">Banco Popular</option>
                  <option value="itau">Itaú</option>
                  <option value="scotiabank">Scotiabank Colpatria</option>
                </select>
              </div>
              <div>
                <label for="pse-tipo-doc" class="block text-sm font-medium">Tipo de documento</label>
                <select id="pse-tipo-doc" class="mt-2 w-full rounded-lg border border-slate-300 px-3 py-2 focus:outline-none focus:ring-2 focus:ring-emerald-500">
                  <option value="cc">Cédula de ciudadanía</option>
                  <option value="ce">Cédula de extranjería</option>
                  <option value="nit">NIT</option>
                  <option value="pp">Pasaporte</option>
                </select>
              </div>
              <div>
                <label for="pse-num-doc" class="block text-sm font-medium">Número de documento</label>
                <input id="pse-num-doc" type="text" class="mt-2 w-full rounded-lg border border-slate-300 px-3 py-2 focus:outline-none focus:ring-2 focus:ring-emerald-500" placeholder="Ej. 123456789" />
              </div>
              <div>
                <label for="pse-nombre" class="block text-sm font-medium">Nombre completo</label>
                <input id="pse-nombre" type="text" class="mt-2 w-full rounded-lg border border-slate-300 px-3 py-2 focus:outline-none focus:ring-2 focus:ring-emerald-500" placeholder="Tu nombre" />
              </div>
              <div>
                <label for="pse-correo" class="block text-sm font-medium">Correo electrónico</label>
                <input id="pse-correo" type="email" class="mt-2 w-full rounded-lg border border-slate-300 px-3 py-2 focus:outline-none focus:ring-2 focus:ring-emerald-500" placeholder="tucorreo@ejemplo.com" />
              </div>
              <div>
                <label for="pse-telefono" class="block text-sm font-medium">Teléfono</label>
                <input id="pse-telefono" type="tel" class="mt-2 w-full rounded-lg border border-slate-300 px-3 py-2 focus:outline-none focus:ring-2 focus:ring-emerald-500" placeholder="Ej. 3001234567" />
              </div>
            </div>

            <div class="rounded-lg bg-slate-50 p-4 text-xs text-slate-600">
              Serás redirigido a la pasarela PSE para finalizar tu pago.
            </div>
          </section>
        </div>

        <div class="flex items-center justify-end gap-3 p-6 border-t">
          <a href="/" class="rounded-lg border border-slate-300 px-5 py-2.5 text-slate-700 hover:bg-slate-50">Cancelar</a>
          <button type="button" class="rounded-lg bg-emerald-600 px-5 py-2.5 text-white hover:bg-emerald-700">Pagar ahora</button>
        </div>
      </form>
    </div>
  </main>

  @livewireScripts
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      var radioTarjeta = document.getElementById('pago-tarjeta');
      var radioPse = document.getElementById('pago-pse');
      var tarjetaSection = document.getElementById('tarjeta-section');
      var pseSection = document.getElementById('pse-section');

      function actualizarMetodo() {
        if (radioTarjeta.checked) {
          tarjetaSection.classList.remove('hidden');
          pseSection.classList.add('hidden');
        } else {
          tarjetaSection.classList.add('hidden');
          pseSection.classList.remove('hidden');
        }
      }

      radioTarjeta.addEventListener('change', actualizarMetodo);
      radioPse.addEventListener('change', actualizarMetodo);
      actualizarMetodo();
    });
  </script>
</body>
</html>