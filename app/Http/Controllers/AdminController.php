<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    // Función para mostrar todos los usuarios
    public function index()
    {
        $usuarios = Usuario::all(); 
        return view('admin.usuarios.index', compact('usuarios'));  
    }
}
