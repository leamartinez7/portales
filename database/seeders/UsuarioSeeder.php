<?php

namespace Database\Seeders;

use App\Models\Usuario;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsuarioSeeder extends Seeder
{
    public function run()
    {
        $usuarios = [
            [
                'nombre' => 'admin',
                'email' => 'admin@admin.com',
                'password' => Hash::make('admin123'),
                'role' => 'admin',
            ],
            [
                'nombre' => 'usuario1',
                'email' => 'usuario1@usuario.com',
                'password' => Hash::make('usuario123'),
                'role' => 'usuario',
            ],
        ];

        foreach ($usuarios as $usuario) {
            Usuario::updateOrCreate(
                ['email' => $usuario['email']],
                $usuario
            );
        }
    }
}



