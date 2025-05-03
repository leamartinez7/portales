<?php

namespace Database\Seeders;

// use Illuminate\Container\Attributes\DB;
use Illuminate\Support\Facades\DB;
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
                'nombre' => 'Juego de comedor KOBE',
                'descripcion' => 'Con un estilo limpio y contemporáneo, este juego de mesa es ideal para ambientes modernos y luminosos. La mesa negra mate aporta elegancia, mientras que las sillas transparentes le dan ligereza visual al espacio. Es perfecto para departamentos, oficinas o espacios reducidos donde se busca diseño sin recargar.',
                'categoria' => 'Juegos de comedor',
                'precio' => 450000,
                'material' => 'Mesa de madera MDF con patas de acero negro. Sillas de acrílico transparente y estructura metálica cromada.',
                'dimensiones' => 'Mesa: 90 cm de diámetro x 75 cm de alto.  Sillas: 45 cm de ancho x 80 cm de alto.',
                'peso' => '32',
                'fecha_lanzamiento' => '2023-05-01',
                'imagen' => 'imagenes/ZJ4fbi6MjzSaGgg3BBVTysw4XBQHQLgigHtId4fx.webp',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Lámpara de pie CRISTAL',
                'descripcion' => 'Elegante lámpara de pie de diseño moderno con una estructura metálica de tres soportes que convergen en una base circular. Presenta tres difusores de luz esféricos de cristal opal que emiten una luz suave y ambiental, ideal para salones, dormitorios o espacios de lectura. Su estilo minimalista y sofisticado se adapta a diversos ambientes decorativos.',
                'categoria' => 'Iluminacion',
                'precio' => 150000,
                'material' => 'Estructura de metal cromado. Bolas de cristal opal.',
                'dimensiones' => 'Altura total: 165 cm. Diámetro de cada esfera: 20 cm.',
                'peso' => '7.5',
                'fecha_lanzamiento' => '2023-05-02',
                'imagen' => 'imagenes/rgoGYqMGVOi9iUiDYRA0BgeDlcPRLv3HlLtTlQa5.webp',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Biblioteca LOFT',
                'descripcion' => 'Con un espíritu loft neoyorquino, esta robusta biblioteca modular combina la solidez del hierro forjado con la calidez de estantes de madera reciclada. Sus líneas geométricas y su estética despojada ofrecen un amplio espacio para libros, plantas y objetos de colección. Perfecta para estudios creativos o salones con carácter, esta pieza no solo organiza, sino que también inspira.',
                'categoria' => 'Bibliotecas',
                'precio' => 700000,
                'material' => 'Estructura: Hierro forjado con acabado cromado. Estantes: Madera laqueada.',
                'dimensiones' => 'Alto: 180 cm. Ancho: 120 cm. Profundidad: 35 cm.',
                'peso' => '35',
                'fecha_lanzamiento' => '2023-04-30',
                'imagen' => 'imagenes/eWgmXgiPEATfkJijEhHVt4ZKBwFijznoBI6MLZLX.webp',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Test',
                'descripcion' => 'TestTestTestTestTestTest',
                'categoria' => 'Test',
                'precio' => 999,
                'material' => 'Test',
                'dimensiones' => 'Test',
                'peso' => '999',
                'fecha_lanzamiento' => '2025-04-29',
                'imagen' => 'imagenes/G2om5f28UJDVTNiwwFMPa7jRGiOdm1NyFa5MIS58.webp',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'TestTest',
                'descripcion' => 'TestTestTestTestTestTest',
                'categoria' => 'Test',
                'precio' => 888,
                'material' => 'TestTest',
                'dimensiones' => 'Test',
                'peso' => '77',
                'fecha_lanzamiento' => '2025-04-08',
                'imagen' => 'imagenes/Q7eZHTJJzy6ruwUmzDxGcXSHPAO5LaKegJ2J5sH1.webp',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'TestTestTest',
                'descripcion' => 'TestTestTestTestTestTest',
                'categoria' => 'Test',
                'precio' => 777,
                'material' => 'TestTest',
                'dimensiones' => 'Test',
                'peso' => '5',
                'fecha_lanzamiento' => '2025-04-02',
                'imagen' => 'imagenes/LNHMgwNe2kNNviSps5QauCgL9O0BsJ6mclW69vVD.webp',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
