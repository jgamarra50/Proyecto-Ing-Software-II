<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>EcoScoot Max – Detalle</title>
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
            <div class="flex items-center gap-6 text-sm">
                <a href="/">Inicio</a>
                <a href="/articulos">Artículos</a>
                @guest
                <a href="/login">Ingresar</a>
                <a href="/register" class="bg-black text-white px-4 py-2 rounded-full">Registrarse</a>
                @endguest
                @auth
                <div class="relative">
                    <button id="userMenuButton" type="button" class="flex items-center gap-2 rounded-full bg-white px-2 py-1 hover:bg-gray-50">
                        <img src="{{ asset('img/celebracion.png') }}" class="h-8 w-8 rounded-full object-cover" alt="perfil">
                        <span class="text-sm text-gray-700">{{ auth()->user()->name }}</span>
                    </button>
                    <div id="userDropdown" class="absolute right-0 mt-2 w-48 rounded-lg border border-gray-100 bg-white shadow-lg hidden">
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
                @endauth
            </div>
        </div>
    </header>
    <main class="max-w-[1200px] mx-auto px-4 py-10 grid grid-cols-1 md:grid-cols-2 gap-10">
        <div>
            <img src="{{ asset('imagenes/EcoScootMax.jpg') }}" alt="EcoScoot Max" class="w-full rounded-xl object-cover">
        </div>
        <div>
            <h1 class="text-3xl font-bold mb-2">EcoScoot Max</h1>
            <p class="text-gray-600 mb-6">Velocidad y autonomía pensadas para usuarios que requieren respuesta inmediata y desplazamientos ágiles. Chasis robusto, plataforma amplia y neumáticos que favorecen el agarre en distintos pavimentos, manteniendo una conducción estable a buen ritmo.</p>
            <div class="flex gap-2 mb-6">
                <button type="button" data-duration="hora" class="px-3 py-1 rounded-full bg-black text-white text-sm">1 hora</button>
                <button type="button" data-duration="medio" class="px-3 py-1 rounded-full bg-gray-100 text-sm">Medio día</button>
                <button type="button" data-duration="dia" class="px-3 py-1 rounded-full bg-gray-100 text-sm">Día completo</button>
            </div>
            <div id="price" class="text-emerald-600 text-xl font-bold mb-4">$16.000 COP</div>
            <a id="reserveBtn" href="/gestionar-vehiculos" class="inline-block rounded-lg bg-black px-6 py-3 text-white">Reservar y pagar</a>
            <div class="mt-6 text-gray-600">Tarifa inicial: $8.000 COP</div>
            <p class="mt-4 text-gray-600">Equilibrio entre rendimiento y practicidad para recorridos urbanos rápidos.</p>
        </div>
    </main>
    <section class="max-w-[1200px] mx-auto px-4 pb-12">
        <h2 class="text-2xl font-bold mb-6">Opiniones sobre el EcoScoot Max</h2>
        <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
            <div class="rounded-xl bg-white p-5 border"><div class="flex items-center gap-3 mb-3"><img src="https://picsum.photos/seed/max1/72" class="h-12 w-12 rounded-full object-cover" alt=""><div class="font-semibold">Luisa Rojas</div></div><p class="text-gray-600">Aceleración rápida y buen agarre. Ideal para tramos con pendientes.</p></div>
            <div class="rounded-xl bg-white p-5 border"><div class="flex items-center gap-3 mb-3"><img src="https://picsum.photos/seed/max2/72" class="h-12 w-12 rounded-full object-cover" alt=""><div class="font-semibold">Miguel Díaz</div></div><p class="text-gray-600">La batería dura más de lo esperado. Excelente para jornadas largas.</p></div>
            <div class="rounded-xl bg-white p-5 border"><div class="flex items-center gap-3 mb-3"><img src="https://picsum.photos/seed/max3/72" class="h-12 w-12 rounded-full object-cover" alt=""><div class="font-semibold">Paola Sánchez</div></div><p class="text-gray-600">Cómodo y sólido. Se siente seguro incluso a mayor velocidad.</p></div>
        </div>
    </section>
    <script>
        const rates={hora:16000,medio:65000,dia:105000};
        let active='hora';
        const priceEl=document.getElementById('price');
        const pills=document.querySelectorAll('[data-duration]');
        function fmt(n){return new Intl.NumberFormat('es-CO').format(n)+' COP'}
        function update(){priceEl.textContent='$'+fmt(rates[active]);updateLink()}
        function updateLink(){
            const btn=document.getElementById('reserveBtn');
            const qs=new URLSearchParams({vehiculo:'ecoScoot-max',duracion:active,precio:String(rates[active])});
            btn.href='/gestionar-vehiculos?'+qs.toString();
        }
        pills.forEach(p=>{p.addEventListener('click',()=>{active=p.dataset.duration;pills.forEach(x=>x.classList.remove('bg-black','text-white'));pills.forEach(x=>x.classList.add('bg-gray-100'));p.classList.remove('bg-gray-100');p.classList.add('bg-black','text-white');update()})});
        update()
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const btn = document.getElementById('userMenuButton');
            const dd = document.getElementById('userDropdown');
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