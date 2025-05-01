<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/iniciar-sesion', [App\Http\Controllers\AuthController::class, 'login'])
->name('auth.login');

Route::post('/iniciar-sesion', [App\Http\Controllers\AuthController::class, 'authenticate'])
->name('auth.authenticate');

Route::post('/cerrar-sesion', [App\Http\Controllers\AuthController::class, 'logout'])
->name('auth.logout');