<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsuarioSeeder extends Seeder
{
    public function run()
    {
        DB::table('usuarios')->insert([
            [
                'nombre' => 'admin',  // Aquí usamos 'nombre' en lugar de 'nombre_usuario'
                'email' => 'admin@admin.com',
                'password' => Hash::make('admin123'),
                'role' => 'admin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'usuario1',  // Aquí usamos 'nombre' en lugar de 'nombre_usuario'
                'email' => 'usuario1@usuario.com',
                'password' => Hash::make('usuario123'),
                'role' => 'usuario',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}


