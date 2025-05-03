<?php
// app/Models/Usuario.php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Usuario extends Authenticatable
{
    protected $table = 'usuarios';
    protected $primaryKey = 'usuario_id';
    protected $fillable = ['nombre', 'email', 'password', 'role'];

    public function compras(): HasMany
    {
        return $this->hasMany(Compra::class, 'usuario_id');
    }
}


