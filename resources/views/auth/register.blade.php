<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Crear cuenta - {{ config('app.name', 'Laravel') }}</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<body class="min-h-screen bg-gradient-to-br from-sky-50 to-indigo-100 text-slate-800">
    <div class="flex min-h-screen items-center justify-center p-6">
        <div class="w-full max-w-md rounded-2xl bg-white shadow-xl ring-1 ring-black/5">
            <div class="px-8 pt-8">
                <h1 class="text-2xl font-semibold">Crear cuenta</h1>
                <p class="mt-2 text-sm text-slate-600">Regístrate para comenzar a gestionar tus reservas.</p>
            </div>
            <div class="p-8">
                @if(session('success'))
    <div class="mb-4 rounded-lg bg-green-100 text-green-700 px-4 py-3">
        {{ session('success') }}
    </div>
@endif

@if(session('error'))
    <div class="mb-4 rounded-lg bg-red-100 text-red-700 px-4 py-3">
        {{ session('error') }}
    </div>
@endif

                <form id="registerForm" action="{{ route('register.store') }}" method="post">
                    @csrf
                    <div class="space-y-6">
                        <!-- Nombre completo -->
                        <div>
                            <label for="name" class="block text-sm font-medium">Nombre completo</label>
                            <input 
                                id="name" 
                                name="name" 
                                type="text" 
                                class="mt-2 w-full rounded-lg border border-slate-300 bg-white px-3 py-2 text-slate-900 placeholder-slate-400 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-200" 
                                placeholder="Tu nombre" 
                                required 
                            />
                            <p id="nameError" class="mt-1 text-sm text-red-600 hidden"></p>
                        </div>

                        <!-- Correo electrónico -->
                        <div>
                            <label for="email" class="block text-sm font-medium">Correo electrónico</label>
                            <input 
                                id="email" 
                                name="email" 
                                type="email" 
                                class="mt-2 w-full rounded-lg border border-slate-300 bg-white px-3 py-2 text-slate-900 placeholder-slate-400 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-200" 
                                placeholder="tucorreo@ejemplo.com" 
                                required 
                            />
                            <p id="emailError" class="mt-1 text-sm text-red-600 hidden">Debe ingresar un correo electrónico válido</p>
                        </div>

                        <!-- Rol -->
                        <div>
                            <label for="role" class="block text-sm font-medium">Rol</label>
                            <select id="role" name="role" class="mt-2 w-full rounded-lg border border-slate-300 bg-white px-3 py-2 text-slate-900 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-200" required>
                                <option value="cliente">Cliente</option>
                                <option value="repartidor">Repartidor</option>
                                <option value="admin">Administrador</option>
                            </select>
                            <p id="roleError" class="mt-1 text-sm text-red-600 hidden">Debe seleccionar un rol</p>
                        </div>

                        <!-- Contraseña -->
                        <div>
                            <label for="password" class="block text-sm font-medium">Contraseña</label>
                            <input 
                                id="password" 
                                name="password" 
                                type="password" 
                                class="mt-2 w-full rounded-lg border border-slate-300 bg-white px-3 py-2 text-slate-900 placeholder-slate-400 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-200" 
                                placeholder="••••••••" 
                                required 
                            />
                            <p id="passwordError" class="mt-1 text-sm text-red-600 hidden">La contraseña debe tener mínimo 8 caracteres, al menos una letra mayúscula y un número</p>
                        </div>

                        <!-- Confirmar contraseña -->
                        <div>
                            <label for="password_confirmation" class="block text-sm font-medium">Confirmar contraseña</label>
                            <input 
                                id="password_confirmation" 
                                name="password_confirmation" 
                                type="password" 
                                class="mt-2 w-full rounded-lg border border-slate-300 bg-white px-3 py-2 text-slate-900 placeholder-slate-400 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-200" 
                                placeholder="••••••••" 
                                required 
                            />
                            <p id="confirmError" class="mt-1 text-sm text-red-600 hidden">Las contraseñas no coinciden</p>
                        </div>

                        <!-- Términos y condiciones -->
                        <div>
                            <label class="flex items-center gap-2 text-sm text-slate-600">
                                <input 
                                    id="terms" 
                                    name="terms" 
                                    type="checkbox" 
                                    class="h-4 w-4 rounded border-slate-300 text-indigo-600 focus:ring-indigo-500" 
                                    required 
                                />
                                <span>Acepto los términos y condiciones</span>
                            </label>
                            <p id="termsError" class="mt-1 text-sm text-red-600 hidden">Debe aceptar los términos y condiciones</p>
                        </div>

                        <button 
                            type="submit" 
                            class="mt-2 inline-flex w-full items-center justify-center rounded-lg bg-indigo-600 px-4 py-2.5 text-white font-semibold shadow-sm hover:bg-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-300"
                        >
                            Crear cuenta
                        </button>
                    </div>
                </form>
                <div class="mt-6 text-center text-sm text-slate-600">
                    ¿Ya tienes una cuenta?
                    <a href="{{ url('/login') }}" class="font-medium text-indigo-600 hover:text-indigo-500">Inicia sesión</a>
                </div>
            </div>
        </div>
    </div>

    <script>
document.getElementById('registerForm').addEventListener('submit', function (e) {
    e.preventDefault(); // detenemos, validamos y luego enviamos manualmente

    // Limpiar errores previos
    document.querySelectorAll('.text-red-600').forEach(el => el.classList.add('hidden'));
    document.querySelectorAll('input').forEach(input => {
        input.classList.remove('border-red-500');
    });

    let isValid = true;

    // Validar nombre
    const name = document.getElementById('name');
    if (name.value.trim() === '') {
        showError('name', 'nameError', 'El nombre es obligatorio');
        isValid = false;
    }

    // Validar email
    const email = document.getElementById('email');
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(email.value)) {
        showError('email', 'emailError');
        isValid = false;
    }

    // Validar contraseña
    const password = document.getElementById('password');
    const passwordRegex = /^(?=.*[A-Z])(?=.*\d).{8,}$/;
    if (!passwordRegex.test(password.value)) {
        showError('password', 'passwordError');
        isValid = false;
    }

    // Confirmación
    const passwordConfirmation = document.getElementById('password_confirmation');
    if (password.value !== passwordConfirmation.value) {
        showError('password_confirmation', 'confirmError');
        isValid = false;
    }

    // Validar términos
    const terms = document.getElementById('terms');
    if (!terms.checked) {
        showError('terms', 'termsError');
        isValid = false;
    }

    // Validar rol
    const role = document.getElementById('role');
    if (!role.value) {
        showError('role', 'roleError');
        isValid = false;
    }

    // ✔ SI TODO ES VÁLIDO, AHORA SÍ ENVIAMOS EL FORMULARIO AL CONTROLADOR
    if (isValid) {
        document.getElementById('registerForm').submit();
    }
});

function showError(inputId, errorId, customMessage = null) {
    const input = document.getElementById(inputId);
    const error = document.getElementById(errorId);

    input.classList.add('border-red-500');
    error.classList.remove('hidden');
    if (customMessage) {
        error.textContent = customMessage;
    }
}
</script>


    @livewireScripts
</body>
</html>