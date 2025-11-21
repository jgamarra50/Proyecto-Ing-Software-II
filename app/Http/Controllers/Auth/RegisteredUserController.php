<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\Rules\Password;

class RegisteredUserController extends Controller
{
    public function store(Request $request)
    {
        Log::info("Intento de registro recibido", $request->all());

        try {
            $validated = $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users,email',
                'password' => ['required', 'confirmed', Password::default()],
            ]);

            Log::info("Validación correcta", $validated);

            $user = User::create([
                'name' => $validated['name'],
                'email' => $validated['email'],
                'password' => Hash::make($validated['password']),
            ]);

            Log::info("Usuario registrado exitosamente", [
                'id' => $user->id,
                'email' => $user->email,
            ]);

            return redirect()
                ->route('login')
                ->with('success', 'Tu cuenta ha sido creada correctamente. Inicia sesión.');

        } catch (\Exception $e) {

            Log::error("Error registrando usuario", [
                'error' => $e->getMessage()
            ]);

            return redirect()
                ->back()
                ->with('error', 'Hubo un problema creando tu cuenta. Intenta nuevamente.')
                ->withInput();
        }
    }
}
