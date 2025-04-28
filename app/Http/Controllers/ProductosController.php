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

}
