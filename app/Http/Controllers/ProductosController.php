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
        $input = $request->all();

        $producto = new Producto();
        $producto->nombre = $input['nombre'];
        $producto->descripcion = $input['descripcion'];
        $producto->categoria = $input['categoria'];
        $producto->precio = $input['precio'];
        $producto->material = $input['material'];
        $producto->dimensiones = $input['dimensiones'];
        $producto->peso = $input['peso'];
        $producto->fecha_lanzamiento = $input['fecha_lanzamiento'];
        $producto->imagen = '/images/default.png';
        $producto->save();
        return redirect()
        ->route('productos.index')
        ->with('feedback.message', 'Producto "' . e($input['nombre']) . '" agregado correctamente al catálogo');
    }
}