<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>EcoMoto Standard – Detalle</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>body{font-family:'Poppins',sans-serif}</style>
</head>
<body class="bg-white text-[#1c1c1c] antialiased">
    <header class="border-b border-gray-100">
        <div class="max-w-[1200px] mx-auto px-4 h-16 flex items-center justify-between">
            <div class="font-bold text-2xl">EcoFlow</div>
            <nav class="flex items-center gap-6 text-sm"><a href="/">Inicio</a><a href="/articulos">Artículos</a><a href="/login">Ingresar</a><a href="/register" class="bg-black text-white px-4 py-2 rounded-full">Registrarse</a></nav>
        </div>
    </header>
    <main class="max-w-[1200px] mx-auto px-4 py-10 grid grid-cols-1 md:grid-cols-2 gap-10">
        <div>
            <img src="{{ asset('imagenes/MotoElectricaEstandart.jpeg') }}" alt="EcoMoto Standard" class="w-full rounded-xl object-cover">
        </div>
        <div>
            <h1 class="text-3xl font-bold mb-2">EcoMoto Standard</h1>
            <p class="text-gray-600 mb-6">La EcoMoto Standard está diseñada para la movilidad urbana diaria, con un motor eficiente pensado para arrancadas suaves y un consumo optimizado. Su postura cómoda y el tamaño compacto facilitan estacionarla y maniobrar en vías concurridas, manteniendo un buen equilibrio entre autonomía y practicidad para el día a día.</p>
            <div class="flex gap-2 mb-6">
                <button type="button" data-duration="hora" class="px-3 py-1 rounded-full bg-black text-white text-sm">1 hora</button>
                <button type="button" data-duration="medio" class="px-3 py-1 rounded-full bg-gray-100 text-sm">Medio día</button>
                <button type="button" data-duration="dia" class="px-3 py-1 rounded-full bg-gray-100 text-sm">Día completo</button>
            </div>
            <div id="price" class="text-emerald-600 text-xl font-bold mb-4">$20.000 COP</div>
            <a href="#" class="inline-block rounded-lg bg-black px-6 py-3 text-white">Reservar y pagar</a>
            <div class="mt-6 text-gray-600">Tarifa inicial: $10.000 COP</div>
            <p class="mt-4 text-gray-600">Si no sabes cuánto tiempo vas a necesitar la moto, puedes alquilar sin límite de tiempo definido. El costo se ajusta automáticamente según el tiempo que uses.</p>
        </div>
    </main>
    <section class="max-w-[1200px] mx-auto px-4 pb-12">
        <h2 class="text-2xl font-bold mb-6">Lo que opinan nuestros usuarios de la EcoMoto Standard</h2>
        <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
            <div class="rounded-xl bg-white p-5 border"><div class="flex items-center gap-3 mb-3"><img src="https://picsum.photos/seed/eco1/72" class="h-12 w-12 rounded-full object-cover" alt=""><div class="font-semibold">María González</div></div><p class="text-gray-600">Me ayuda a llegar rápido al trabajo sin preocuparme por el tráfico. Es cómoda y estable.</p></div>
            <div class="rounded-xl bg-white p-5 border"><div class="flex items-center gap-3 mb-3"><img src="https://picsum.photos/seed/eco2/72" class="h-12 w-12 rounded-full object-cover" alt=""><div class="font-semibold">Juan Pérez</div></div><p class="text-gray-600">Reservar es sencillo y el rendimiento es perfecto para mis recorridos diarios.</p></div>
            <div class="rounded-xl bg-white p-5 border"><div class="flex items-center gap-3 mb-3"><img src="https://picsum.photos/seed/eco3/72" class="h-12 w-12 rounded-full object-cover" alt=""><div class="font-semibold">Laura Torres</div></div><p class="text-gray-600">Económica y sostenible. Siento que aporto al medio ambiente mientras me movilizo.</p></div>
        </div>
    </section>
    <script>
        const rates={hora:20000,medio:95000,dia:160000};
        let active='hora';
        const priceEl=document.getElementById('price');
        const pills=document.querySelectorAll('[data-duration]');
        function fmt(n){return new Intl.NumberFormat('es-CO').format(n)+' COP'}
        function update(){priceEl.textContent='$'+fmt(rates[active])}
        pills.forEach(p=>{p.addEventListener('click',()=>{active=p.dataset.duration;pills.forEach(x=>x.classList.remove('bg-black','text-white'));pills.forEach(x=>x.classList.add('bg-gray-100'));p.classList.remove('bg-gray-100');p.classList.add('bg-black','text-white');update()})});
        update()
    </script>
</body>
</html>