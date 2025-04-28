<?php

namespace Database\Seeders;

use Illuminate\Container\Attributes\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('productos')->insert([
            [
                'producto_id' => 1,
                'nombre' => 'Producto 1',
                'descripcion' => 'Descripción del producto 1',
                'categoria' => 'Categoría 1',
                'precio' => 100,
                'material' => 'Material 1',
                'dimensiones' => 'Dimensiones 1',
                'peso' => 'Peso 1',
                'fecha_lanzamiento' => '2023-05-01',
                'imagen' => 'imagen1.jpg',  
            ],
            [
                'producto_id' => 2,
                'nombre' => 'Producto 2',
                'descripcion' => 'Descripción del producto 2',
                'categoria' => 'Categoría 2',
                'precio' => 200,
                'material' => 'Material 2',
                'dimensiones' => 'Dimensiones 2',
                'peso' => 'Peso 2',
                'fecha_lanzamiento' => '2023-05-02',
                'imagen' => 'imagen2.jpg',
            ],
            [
                'producto_id' => 3,
                'nombre' => 'Producto 3',
                'descripcion' => 'Descripción del producto 3',
                'categoria' => 'Categoría 3',
                'precio' => 300,
                'material' => 'Material 3',
                'dimensiones' => 'Dimensiones 3',
                'peso' => 'Peso 3',
                'fecha_lanzamiento' => '2023-05-03',
                'imagen' => 'imagen3.jpg',
            ]
        ]);
    }
}
