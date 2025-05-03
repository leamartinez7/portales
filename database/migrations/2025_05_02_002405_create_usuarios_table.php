<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariosTable extends Migration
{
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id(); // usa 'id' si no querés complicar el modelo
            $table->string('nombre');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('role')->default('usuario'); // rol por defecto como usuario
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('usuarios');
    }
}

