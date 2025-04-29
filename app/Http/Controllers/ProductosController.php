<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductosController extends Controller
{
    public function index(){

        $allProductos = Producto::all();

        return view('productos.index',
        [
            'productos' => $allProductos
        ]);
    }

    public function ver(int $id){
        return view('productos.ver', [
            'producto' => Producto::findOrFail($id)
        ]);
    }

    public function crear(){
        return view('productos.crear');
    }

    public function publicar(Request $request){

        $request->validate([
            'nombre' => ['required', 'string', 'min:3'],
            'descripcion' => ['required', 'string', 'min:10'],
            'categoria' => ['required', 'string', 'min:3'],
            'precio' => ['required', 'numeric', 'min:0'],
            'material' => ['required', 'string', 'min:3'],
            'dimensiones' => ['required', 'string', 'min:3'],
            'peso' => ['required', 'numeric', 'min:0'],
            'fecha_lanzamiento' => ['required', 'date'],
        ], [
            'nombre.required' => 'El nombre es obligatorio.',
            'nombre.min' => 'El nombre debe tener al menos 3 caracteres.',
        
            'descripcion.required' => 'La descripción es obligatoria.',
            'descripcion.min' => 'La descripción debe tener al menos 10 caracteres.',
        
            'categoria.required' => 'La categoría es obligatoria.',
            'categoria.min' => 'La categoría debe tener al menos 3 caracteres.',
        
            'precio.required' => 'El precio es obligatorio.',
            'precio.numeric' => 'El precio debe ser un número.',
            'precio.min' => 'El precio no puede ser negativo.',
        
            'material.required' => 'El material es obligatorio.',
            'material.min' => 'El material debe tener al menos 3 caracteres.',
        
            'dimensiones.required' => 'Las dimensiones son obligatorias.',
            'dimensiones.min' => 'Las dimensiones deben tener al menos 3 caracteres.',
        
            'peso.required' => 'El peso es obligatorio.',
            'peso.numeric' => 'El peso debe ser un número.',
            'peso.min' => 'El peso no puede ser negativo.',
        
            'fecha_lanzamiento.required' => 'La fecha de lanzamiento es obligatoria.',
            'fecha_lanzamiento.date' => 'Debe ingresar una fecha válida.',
        ]);
        
    
        $input = $request->all();
    
        $producto = new Producto();
        $producto->fill($input);
        $producto->imagen = '/images/default.png';
        $producto->save();
    
        return redirect()
            ->route('productos.index')
            ->with('feedback.message', 'Producto "' . $input['nombre'] . '" agregado correctamente al catálogo');
    }
    
    public function eliminar (int $id){
        $producto = Producto::findOrFail($id);
        $producto->delete($id);
    
        return redirect()
            ->route('productos.index')
            ->with('feedback.message', 'Producto "' . $producto->nombre . '" eliminado correctamente del catálogo');
    }

    public function confirmarEliminacion(int $id){
        return view('productos.confirmar-eliminacion', [
            'producto' => Producto::findOrFail($id)
        ]);
    }
    
}