<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(){
        return view('auth.login');
    }

    public function authenticate(Request $request){

        $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required', 'string'],
        ], [
            'email.required' => 'El email es obligatorio.',
            'email.email' => 'Debe ingresar un email válido.',
            'password.required' => 'La contraseña es obligatoria.',
        ]);
        
        $credentials = $request->only(['email', 'password']);

        if(Auth::attempt($credentials)){
            return redirect()
            ->intended(route('productos.index'))
            ->with('feedback.message', 'Has iniciado sesión correctamente');
        }
        return redirect()
        ->back()
        ->withInput()
        ->with('feedback.message', 'Credenciales incorrectas');
    }
}
