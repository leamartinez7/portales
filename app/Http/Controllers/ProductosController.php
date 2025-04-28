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
    
}