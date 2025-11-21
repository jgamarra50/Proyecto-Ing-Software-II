<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Iniciar sesión - {{ config('app.name', 'Laravel') }}</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<body class="min-h-screen bg-gradient-to-br from-sky-50 to-indigo-100 text-slate-800">
    <div class="flex min-h-screen items-center justify-center p-6">
        <div class="w-full max-w-md rounded-2xl bg-white shadow-xl ring-1 ring-black/5">
            <div class="px-8 pt-8">
                <h1 class="text-2xl font-semibold">Iniciar sesión</h1>
                <p class="mt-2 text-sm text-slate-600">Accede a tu cuenta para gestionar tus reservas.</p>
            </div>
            <div class="p-8">
                <form action="{{ route('login.store') }}" method="post" novalidate>
@csrf
                    <div class="space-y-6">
                        <div>
                            <label for="email" class="block text-sm font-medium">Correo electrónico</label>
                            <input id="email" name="email" type="email" class="mt-2 w-full rounded-lg border border-slate-300 bg-white px-3 py-2 text-slate-900 placeholder-slate-400 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-200" placeholder="tucorreo@ejemplo.com" value="{{ old('email') }}" required autofocus />
                        </div>
                        <div>
                            <label for="password" class="block text-sm font-medium">Contraseña</label>
                            <input id="password" name="password" type="password" class="mt-2 w-full rounded-lg border border-slate-300 bg-white px-3 py-2 text-slate-900 placeholder-slate-400 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-200" placeholder="••••••••" required autocomplete="current-password" />
                        </div>
                        <div class="flex items-center justify-between">
                            <label class="flex items-center gap-2 text-sm text-slate-600">
                                <input type="checkbox" class="h-4 w-4 rounded border-slate-300 text-indigo-600 focus:ring-indigo-500" />
                                <span>Recordarme</span>
                            </label>
                            <a href="#" class="text-sm font-medium text-indigo-600 hover:text-indigo-500">¿Olvidaste tu contraseña?</a>
                        </div>
                        <button type="submit" class="mt-2 inline-flex w-full items-center justify-center rounded-lg bg-indigo-600 px-4 py-2.5 text-white font-semibold shadow-sm hover:bg-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-300">Acceder</button>
                    </div>
                </form>
                <div class="mt-6 text-center text-sm text-slate-600">
                    ¿No tienes cuenta?
                    <a href="{{ url('/register') }}" class="font-medium text-indigo-600 hover:text-indigo-500">Regístrate</a>
                </div>
            </div>
        </div>
    </div>
    @livewireScripts
</body>
</html>