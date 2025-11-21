<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashboard Admin - {{ config('app.name', 'Laravel') }}</title>
  <link rel="preconnect" href="https://fonts.bunny.net">
  <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
  @vite(['resources/css/app.css','resources/js/app.js'])
  @livewireStyles
</head>
<body class="min-h-screen bg-slate-50 text-slate-800 dark:bg-slate-900 dark:text-slate-100">
  <div class="flex min-h-screen">
    <aside id="sidebar" class="w-64 shrink-0 bg-white dark:bg-slate-800 border-r border-slate-200 dark:border-slate-700 hidden md:block">
      <div class="p-4 flex items-center justify-between">
        <div class="font-bold text-xl text-blue-600">EcoFlow Admin</div>
        <button id="closeSidebar" class="md:hidden rounded p-2">
          <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
        </button>
      </div>
      <nav class="px-4 space-y-2">
        <div class="text-xs uppercase text-slate-500">Principal</div>
        <a href="/admin/dashboard" class="flex items-center gap-2 px-3 py-2 rounded-lg bg-blue-50 text-blue-700 dark:bg-blue-900/30 dark:text-blue-300">
          <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M13 5v6h6"/></svg>
          <span>Dashboard</span>
        </a>
        <div class="text-xs uppercase text-slate-500 mt-4">Gestión</div>
        <a href="/historial-reservas" class="flex items-center gap-2 px-3 py-2 rounded-lg hover:bg-slate-100 dark:hover:bg-slate-700">
          <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0z"/></svg>
          <span>Usuarios</span>
        </a>
        <a href="/gestionar-vehiculos" class="flex items-center gap-2 px-3 py-2 rounded-lg hover:bg-slate-100 dark:hover:bg-slate-700">
          <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7h13l3 6H6l-3-6z"/></svg>
          <span>Productos</span>
        </a>
        <a href="/mis-reservas" class="flex items-center gap-2 px-3 py-2 rounded-lg hover:bg-slate-100 dark:hover:bg-slate-700">
          <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h18M3 7h18M3 11h18"/></svg>
          <span>Ventas</span>
        </a>
        <a href="/reportar-incidencias" class="flex items-center gap-2 px-3 py-2 rounded-lg hover:bg-slate-100 dark:hover:bg-slate-700">
          <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7 20h10a2 2 0 002-2V8l-6-6H7a2 2 0 00-2 2v14a2 2 0 002 2z"/></svg>
          <span>Reportes</span>
        </a>
        <a href="#" class="flex items-center gap-2 px-3 py-2 rounded-lg hover:bg-slate-100 dark:hover:bg-slate-700">
          <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v8m-4-4h8"/></svg>
          <span>Configuración</span>
        </a>
      </nav>
    </aside>
    <div class="flex-1">
      <header class="bg-white dark:bg-slate-800 border-b border-slate-200 dark:border-slate-700 sticky top-0 z-10">
        <div class="max-w-7xl mx-auto px-4 py-3 flex items-center gap-3">
          <button id="openSidebar" class="md:hidden rounded p-2">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></svg>
          </button>
          <div class="font-bold text-xl text-blue-600">EcoFlow</div>
          <div class="flex-1"></div>
          <div class="hidden sm:flex items-center gap-2 flex-1 max-w-md">
            <div class="relative w-full">
              <input type="text" placeholder="Buscar..." class="w-full rounded-lg border border-slate-300 dark:border-slate-700 bg-white dark:bg-slate-900 px-3 py-2" />
              <svg class="w-5 h-5 absolute right-3 top-2.5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
            </div>
          </div>
          <button id="toggleTheme" class="rounded p-2">
            <svg class="w-6 h-6" id="themeIcon" viewBox="0 0 24 24" fill="currentColor"><path d="M12 3a9 9 0 000 18 9 9 0 010-18z"/></svg>
          </button>
          <button class="rounded p-2">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6 6 0 10-12 0v3.159c0 .538-.214 1.055-.595 1.436L4 17h5"/></svg>
          </button>
          <div class="relative">
            <button id="userMenuButton" type="button" class="flex items-center gap-2 rounded-full bg-white dark:bg-slate-700 px-2 py-1">
              <img src="{{ asset('img/celebracion.png') }}" class="h-8 w-8 rounded-full object-cover" alt="perfil">
              <span class="text-sm">{{ auth()->user()->name }}</span>
            </button>
            <div id="userDropdown" class="absolute right-0 mt-2 w-48 rounded-lg border border-slate-100 dark:border-slate-700 bg-white dark:bg-slate-800 shadow-lg hidden">
              <div class="px-4 py-3">
                <div class="text-sm font-semibold">{{ auth()->user()->name }}</div>
                <div class="mt-1 text-xs text-slate-500">Administrador</div>
              </div>
              <div class="border-t dark:border-slate-700">
                <a href="/" class="block px-4 py-2 text-sm">Inicio</a>
                <form action="{{ route('logout') }}" method="post" class="px-4 py-2">
                  @csrf
                  <button type="submit" class="w-full text-left text-sm text-red-600">Cerrar sesión</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </header>
      <main class="max-w-7xl mx-auto px-4 py-6">
        <section class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
          <div class="rounded-xl bg-white dark:bg-slate-800 p-4 border border-slate-200 dark:border-slate-700">
            <div class="flex items-center justify-between">
              <div class="text-sm">Total Usuarios</div>
              <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/></svg>
            </div>
            <div class="mt-2 text-2xl font-bold">{{ $totalUsuarios ?? 0 }}</div>
            <div class="mt-1 text-xs text-green-600">{{ $crecimientoUsuarios ?? '+0%' }}</div>
          </div>
          <div class="rounded-xl bg-white dark:bg-slate-800 p-4 border border-slate-200 dark:border-slate-700">
            <div class="flex items-center justify-between">
              <div class="text-sm">Ingresos del mes</div>
              <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2"/></svg>
            </div>
            <div class="mt-2 text-2xl font-bold">${{ number_format($ingresosMes ?? 0, 0, ',', '.') }} COP</div>
            <canvas id="miniChart" class="mt-3 h-10"></canvas>
          </div>
          <div class="rounded-xl bg-white dark:bg-slate-800 p-4 border border-slate-200 dark:border-slate-700">
            <div class="flex items-center justify-between">
              <div class="text-sm">Órdenes pendientes</div>
              <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h18M3 7h18M3 11h18"/></svg>
            </div>
            <div class="mt-2 text-2xl font-bold">{{ $ordenesPendientes ?? 0 }}</div>
          </div>
          <div class="rounded-xl bg-white dark:bg-slate-800 p-4 border border-slate-200 dark:border-slate-700">
            <div class="flex items-center justify-between">
              <div class="text-sm">Productos activos</div>
              <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7h16M4 12h16M4 17h16"/></svg>
            </div>
            <div class="mt-2 text-2xl font-bold">{{ $productosActivos ?? 0 }}</div>
          </div>
        </section>
        <section class="mt-8 grid grid-cols-1 lg:grid-cols-3 gap-6">
          <div class="rounded-xl bg-white dark:bg-slate-800 p-4 border border-slate-200 dark:border-slate-700 lg:col-span-2">
            <div class="flex items-center justify-between">
              <div class="font-semibold">Ventas últimos 6 meses</div>
            </div>
            <canvas id="lineChart" class="h-52"></canvas>
          </div>
          <div class="rounded-xl bg-white dark:bg-slate-800 p-4 border border-slate-200 dark:border-slate-700">
            <div class="font-semibold">Usuarios por rol</div>
            <canvas id="donutChart" class="h-52"></canvas>
          </div>
        </section>
        <section class="mt-8 grid grid-cols-1 lg:grid-cols-3 gap-6">
          <div class="rounded-xl bg-white dark:bg-slate-800 p-4 border border-slate-200 dark:border-slate-700">
            <div class="font-semibold">Productos más vendidos</div>
            <canvas id="barChart" class="h-52"></canvas>
          </div>
          <div class="rounded-xl bg-white dark:bg-slate-800 p-4 border border-slate-200 dark:border-slate-700 lg:col-span-2">
            <div class="font-semibold">Actividad reciente</div>
            <div class="mt-4 space-y-4">
              @foreach(($actividad ?? []) as $item)
              <div class="flex items-start gap-3">
                <div class="w-2 h-2 rounded-full bg-blue-600 mt-2"></div>
                <div class="text-sm">{{ $item['texto'] }}<span class="ml-2 text-xs text-slate-500">{{ $item['fecha'] }}</span></div>
              </div>
              @endforeach
            </div>
          </div>
        </section>
        <section class="mt-8 grid grid-cols-1 lg:grid-cols-3 gap-6">
          <div class="rounded-xl bg-white dark:bg-slate-800 p-4 border border-slate-200 dark:border-slate-700 lg:col-span-2">
            <div class="font-semibold">Últimas transacciones</div>
            <div class="mt-4 overflow-x-auto">
              <table class="w-full text-sm">
                <thead class="text-xs uppercase text-slate-500">
                  <tr>
                    <th class="px-3 py-2 text-left">ID</th>
                    <th class="px-3 py-2 text-left">Cliente</th>
                    <th class="px-3 py-2 text-left">Monto</th>
                    <th class="px-3 py-2 text-left">Estado</th>
                    <th class="px-3 py-2 text-left">Fecha</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach(($transacciones ?? []) as $t)
                  <tr class="border-t border-slate-200 dark:border-slate-700">
                    <td class="px-3 py-2">{{ $t->id }}</td>
                    <td class="px-3 py-2">{{ $t->nombre }}</td>
                    <td class="px-3 py-2">${{ number_format((int)($t->precio ?? 0), 0, ',', '.') }} COP</td>
                    <td class="px-3 py-2">{{ $t->estado }}</td>
                    <td class="px-3 py-2">{{ \Carbon\Carbon::parse($t->created_at)->format('Y-m-d') }}</td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
          <div class="rounded-xl bg-white dark:bg-slate-800 p-4 border border-slate-200 dark:border-slate-700">
            <div class="font-semibold">Calendario</div>
            <div class="mt-4" id="miniCalendar"></div>
            <div class="mt-2 text-xs text-slate-500">Eventos del mes: {{ count($eventos ?? []) }}</div>
          </div>
        </section>
        <section class="mt-8 grid grid-cols-1 lg:grid-cols-3 gap-6">
          <div class="rounded-xl bg-white dark:bg-slate-800 p-4 border border-slate-200 dark:border-slate-700">
            <div class="font-semibold">Usuarios recientes</div>
            <div class="mt-4 space-y-3">
              @foreach(($usuariosRecientes ?? []) as $u)
              <div class="flex items-center justify-between">
                <div class="flex items-center gap-3">
                  <div class="w-8 h-8 rounded-full bg-blue-100 dark:bg-blue-900/30"></div>
                  <div>
                    <div class="text-sm font-medium">{{ $u->name }}</div>
                    <div class="text-xs text-slate-500">{{ $u->email }}</div>
                  </div>
                </div>
                <div class="text-xs text-slate-500">{{ \Carbon\Carbon::parse($u->created_at)->diffForHumans() }}</div>
              </div>
              @endforeach
            </div>
          </div>
          <div class="rounded-xl bg-white dark:bg-slate-800 p-4 border border-slate-200 dark:border-slate-700">
            <div class="font-semibold">Productos con bajo stock</div>
            <div class="mt-4">
              <table class="w-full text-sm">
                <thead class="text-xs uppercase text-slate-500">
                  <tr>
                    <th class="px-3 py-2 text-left">Producto</th>
                    <th class="px-3 py-2 text-left">Stock</th>
                    <th class="px-3 py-2 text-left">Estado</th>
                  </tr>
                </thead>
                <tbody>
                  @forelse(($bajoStock ?? []) as $p)
                  <tr class="border-t border-slate-200 dark:border-slate-700">
                    <td class="px-3 py-2">{{ $p['nombre'] }}</td>
                    <td class="px-3 py-2">{{ $p['stock'] }}</td>
                    <td class="px-3 py-2"><span class="px-2 py-1 rounded bg-red-100 text-red-600">Crítico</span></td>
                  </tr>
                  @empty
                  <tr class="border-t border-slate-200 dark:border-slate-700">
                    <td class="px-3 py-2" colspan="3">Sin datos de inventario</td>
                  </tr>
                  @endforelse
                </tbody>
              </table>
            </div>
          </div>
          <div class="rounded-xl bg-white dark:bg-slate-800 p-4 border border-slate-200 dark:border-slate-700">
            <div class="font-semibold">Tareas pendientes</div>
            <div class="mt-4 space-y-2" id="todoList">
              <label class="flex items-center gap-2"><input type="checkbox" class="rounded"> Verificar reservas pendientes</label>
              <label class="flex items-center gap-2"><input type="checkbox" class="rounded"> Revisar mantenimiento programado</label>
              <label class="flex items-center gap-2"><input type="checkbox" class="rounded"> Actualizar catálogo de vehículos</label>
              <label class="flex items-center gap-2"><input type="checkbox" class="rounded"> Generar reporte semanal</label>
            </div>
          </div>
        </section>
      </main>
    </div>
  </div>
  @livewireScripts
  <script>
    document.addEventListener('DOMContentLoaded', function(){
      var openBtn = document.getElementById('openSidebar');
      var closeBtn = document.getElementById('closeSidebar');
      var sidebar = document.getElementById('sidebar');
      if(openBtn){openBtn.addEventListener('click', function(){sidebar.classList.remove('hidden')})}
      if(closeBtn){closeBtn.addEventListener('click', function(){sidebar.classList.add('hidden')})}
      var tgl = document.getElementById('toggleTheme');
      var root = document.documentElement;
      function setTheme(d){if(d){root.classList.add('dark')}else{root.classList.remove('dark')}}
      var stored = localStorage.getItem('themeDark') === '1';
      setTheme(stored);
      if(tgl){tgl.addEventListener('click', function(){stored = !stored; localStorage.setItem('themeDark', stored ? '1':'0'); setTheme(stored)})}
      var btn = document.getElementById('userMenuButton');
      var dd = document.getElementById('userDropdown');
      if(btn && dd){btn.addEventListener('click', function(e){e.stopPropagation(); dd.classList.toggle('hidden')}); document.addEventListener('click', function(){dd.classList.add('hidden')})}
      var miniCtx = document.getElementById('miniChart').getContext('2d');
      function drawMini(ctx, data){var w=ctx.canvas.width; var h=ctx.canvas.height; ctx.clearRect(0,0,w,h); ctx.strokeStyle = '#2563eb'; ctx.beginPath(); var max = Math.max.apply(null,data.concat([1])); for(var i=0;i<data.length;i++){var x = i*(w/(data.length-1)); var y = h - (data[i]/max)*h; if(i===0){ctx.moveTo(x,y)}else{ctx.lineTo(x,y)}} ctx.stroke()}
      var miniData = @json($miniSerie ?? [5,8,6,9,12,10]);
      drawMini(miniCtx, miniData);
      function drawLine(canvasId, labels, values){var ctx=document.getElementById(canvasId).getContext('2d'); var w=ctx.canvas.width; var h=ctx.canvas.height; ctx.clearRect(0,0,w,h); ctx.strokeStyle='#2563eb'; ctx.beginPath(); var max=Math.max.apply(null,values.concat([1])); for(var i=0;i<values.length;i++){var x=i*(w/(values.length-1)); var y=h-(values[i]/max)*h; if(i===0){ctx.moveTo(x,y)}else{ctx.lineTo(x,y)}} ctx.stroke(); ctx.fillStyle='#2563eb'; for(var j=0;j<values.length;j++){var x=j*(w/(values.length-1)); var y=h-(values[j]/max)*h; ctx.beginPath(); ctx.arc(x,y,3,0,Math.PI*2); ctx.fill()}}
      function drawBars(canvasId, labels, values){var ctx=document.getElementById(canvasId).getContext('2d'); var w=ctx.canvas.width; var h=ctx.canvas.height; ctx.clearRect(0,0,w,h); var max=Math.max.apply(null,values.concat([1])); var barW = w/(values.length*1.5); for(var i=0;i<values.length;i++){var x = i*(w/values.length)+barW*0.25; var y = h-(values[i]/max)*h; ctx.fillStyle='#2563eb'; ctx.fillRect(x,y,barW,h-y)}}
      function drawDonut(canvasId, labels, values){var ctx=document.getElementById(canvasId).getContext('2d'); var w=ctx.canvas.width; var h=ctx.canvas.height; var cx=w/2; var cy=h/2; var r=Math.min(w,h)/2-10; var total=values.reduce(function(a,b){return a+b},0); var start=0; var colors=['#2563eb','#16a34a','#f59e0b','#ef4444','#8b5cf6']; for(var i=0;i<values.length;i++){var angle=(values[i]/total)*Math.PI*2; ctx.beginPath(); ctx.moveTo(cx,cy); ctx.arc(cx,cy,r,start,start+angle); ctx.closePath(); ctx.fillStyle=colors[i%colors.length]; ctx.fill(); start+=angle} ctx.globalCompositeOperation='destination-out'; ctx.beginPath(); ctx.arc(cx,cy,r*0.6,0,Math.PI*2); ctx.fill(); ctx.globalCompositeOperation='source-over'}
      var lineLabels = @json(($ventasLabels ?? []));
      var lineValues = @json(($ventasValues ?? []));
      if(lineValues.length){drawLine('lineChart', lineLabels, lineValues)}
      var barLabels = @json(($productosLabels ?? []));
      var barValues = @json(($productosValues ?? []));
      if(barValues.length){drawBars('barChart', barLabels, barValues)}
      var donutLabels = @json(($rolesLabels ?? []));
      var donutValues = @json(($rolesValues ?? []));
      if(donutValues.length){drawDonut('donutChart', donutLabels, donutValues)}
      function renderCalendar(elId, events){var el=document.getElementById(elId); var d=new Date(); var y=d.getFullYear(); var m=d.getMonth(); var first=new Date(y,m,1); var start=first.getDay(); var days=new Date(y,m+1,0).getDate(); var html='<div class="grid grid-cols-7 gap-1 text-xs">'; ['D','L','M','M','J','V','S'].forEach(function(x){html+='<div class="text-center text-slate-500">'+x+'</div>'}); for(var i=0;i<start;i++){html+='<div></div>'} for(var day=1; day<=days; day++){var dateStr=y+'-'+String(m+1).padStart(2,'0')+'-'+String(day).padStart(2,'0'); var has=events.indexOf(dateStr)>=0; html+='<div class="h-8 flex items-center justify-center rounded '+(has?'bg-blue-100 text-blue-700 dark:bg-blue-900/30':'')+'">'+day+'</div>'} html+='</div>'; el.innerHTML=html}
      renderCalendar('miniCalendar', @json(($eventos ?? [])));
    });
  </script>
</body>
</html>