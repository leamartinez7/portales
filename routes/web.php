<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\EntradaController;

Route::get('/', [App\Http\Controllers\HomeController::class, 'home'])
->name('home');

Route::get('/quienes-somos', [App\Http\Controllers\AboutController::class, 'about'])
->name('about');

Route::get('/blog', [App\Http\Controllers\BlogController::class, 'blog'])
->name('blog');

Route::get('/productos/listado', [App\Http\Controllers\ProductosController::class, 'index'])
->name('productos.index');

Route::get('/productos/crear', [App\Http\Controllers\ProductosController::class, 'crear'])
->name('productos.crear')
->middleware('auth');

Route::post('/productos/crear', [App\Http\Controllers\ProductosController::class, 'publicar'])
->name('productos.publicar')
->middleware('auth');

// agregada para confirmar elminar
Route::get('productos/{id}/eliminar', [App\Http\Controllers\ProductosController::class, 'confirmarEliminacion'])
->name('productos.confirmar-eliminacion')
->middleware('auth');

Route::delete('/productos/{id}/eliminar', [App\Http\Controllers\ProductosController::class, 'eliminar'])
->name('productos.eliminar')
->middleware('auth');

Route::get('/productos/{id}/editar', [App\Http\Controllers\ProductosController::class, 'editar'])
->name('productos.editar')
->middleware('auth');

Route::put('/productos/{id}/editar', [App\Http\Controllers\ProductosController::class, 'actualizar'])
->name('productos.actualizar')
->middleware('auth');

Route::get('/productos/{id}', [App\Http\Controllers\ProductosController::class, 'ver'])
->name('productos.ver')
->whereNumber('id');

//registro y login
Route::get('/login', [AuthController::class, 'login'])->name('auth.login');
Route::post('/login', [AuthController::class, 'authenticate'])->name('auth.authenticate');
Route::get('/register', [AuthController::class, 'register'])->name('auth.register');
Route::post('/register', [AuthController::class, 'store'])->name('auth.store');
Route::post('/logout', [AuthController::class, 'logout'])->name('auth.logout');
Route::post('/cerrar-sesion', [AuthController::class, 'logout'])
->name('auth.logout');

//admin y usuarios
Route::middleware(['admin'])->group(function () {
    Route::get('/admin/usuarios', [AdminController::class, 'index'])->name('admin.usuarios');
    Route::get('usuarios/{id}', [UsuarioController::class, 'show'])->name('admin.usuarios.show');
});

//entrada
Route::get('/entradas', [EntradaController::class, 'index'])->name('entradas.index');
Route::get('/entradas/{entrada}', [EntradaController::class, 'show'])->name('entradas.show');
Route::resource('entradas', EntradaController::class)->middleware('auth');



