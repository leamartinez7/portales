<?php

namespace App\Http\Controllers;

use App\Models\Entrada;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EntradaController extends Controller
{
    public function index()
    {
        $entradas = Entrada::latest()->paginate(10);
        return view('entradas.index', compact('entradas'));
    }

    public function create()
    {
        return view('entradas.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required|string|max:255',
            'contenido' => 'required|string',
            'imagen' => 'nullable|image|max:2048',
        ]);

        $entrada = new Entrada();
        $entrada->titulo = $request->titulo;
        $entrada->contenido = $request->contenido;
        $entrada->usuario_id = Auth::id();

        if ($request->hasFile('imagen')) {
            $entrada->imagen = $request->file('imagen')->store('imagenes', 'public');
        }

        $entrada->save();

        return redirect()->route('entradas.index')->with('success', 'Entrada creada correctamente.');
    }

    public function edit(Entrada $entrada)
    {
        return view('entradas.edit', compact('entrada'));
    }

    public function update(Request $request, Entrada $entrada)
    {
        $request->validate([
            'titulo' => 'required|string|max:255',
            'contenido' => 'required|string',
            'imagen' => 'nullable|image|max:2048',
        ]);

        $entrada->titulo = $request->titulo;
        $entrada->contenido = $request->contenido;

        if ($request->hasFile('imagen')) {
            $entrada->imagen = $request->file('imagen')->store('imagenes', 'public');
        }

        $entrada->save();

        return redirect()->route('entradas.index')->with('success', 'Entrada actualizada correctamente.');
    }

    public function destroy(Entrada $entrada)
    {
        $entrada->delete();
        return redirect()->route('entradas.index')->with('success', 'Entrada eliminada correctamente.');
    }
    public function show(Entrada $entrada)
    {
        return view('entradas.show', compact('entrada'));
    }


}

