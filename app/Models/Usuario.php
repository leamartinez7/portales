<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Usuario extends Authenticatable
{
    protected $table = 'usuarios';
    protected $primaryKey = 'usuario_id';
    public $incrementing = true; // Asegura que la clave primaria sea autoincremental
    protected $keyType = 'int'; // Define el tipo de la clave primaria

    protected $fillable = ['nombre', 'email', 'password', 'role'];

    public function entradas()
    {
        return $this->hasMany(Entrada::class, 'usuario_id', 'usuario_id');
    }

}



