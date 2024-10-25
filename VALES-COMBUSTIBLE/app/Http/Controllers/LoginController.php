<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    /**
     * Muestra el formulario de inicio de sesión.
     */
    public function showLoginForm()
    {
        return view('login.login'); // Asegúrate de crear esta vista
    }

    /**
     * Maneja el inicio de sesión del usuario.
     */
    public function login(Request $request)
    {
        // Valida los datos del formulario
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        // Busca el usuario en la base de datos
        $user = DB::table('users')->where('username', $request->username)->first();

        // Verifica si el usuario existe y la contraseña es correcta
        if ($user && password_verify($request->password, $user->password)) {
            // Inicia sesión y guarda el usuario en la sesión
            Session::put('user', $user);
            return redirect('/'); // Cambia esto según tu ruta deseada
        }

        return back()->withErrors([
            'username' => 'Credenciales incorrectas.',
        ]);
    }

    /**
     * Maneja el cierre de sesión del usuario.
     */
    public function logout(Request $request)
    {
        Session::forget('user');
        return redirect('/login'); // Cambia esto según tus necesidades
    }
}