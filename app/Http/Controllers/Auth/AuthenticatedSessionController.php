<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticatedSessionController extends Controller
{
    public function create()
    {
        return view('auth.login');
    }

    public function store(Request $request)
    {
        // Validaciones del formulario
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Recordarme
        $remember = $request->boolean('remember');

        // Intento de inicio de sesión
        if (! Auth::attempt($credentials, $remember)) {
            return back()->withErrors([
                'email' => 'Las credenciales no son válidas.',
            ])->onlyInput('email');
        }

        // Regenerar sesión
        $request->session()->regenerate();

        return redirect()->route('welcome');
    }

    public function destroy(Request $request)
    {
        Auth::logout();
        
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        // Después de cerrar sesión también vuelve a welcome
        return redirect()->route('welcome');
    }
}
