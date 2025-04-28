<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [App\Http\Controllers\HomeController::class, 'home'])
->name('home');

Route::get('/quienes-somos', [App\Http\Controllers\AboutController::class, 'about'])
->name('about');

Route::get('/productos/listado', [App\Http\Controllers\ProductosController::class, 'index'])
->name('productos.index');

Route::get('/productos/crear', [App\Http\Controllers\ProductosController::class, 'crear'])
->name('productos.crear');

Route::post('/productos/crear', [App\Http\Controllers\ProductosController::class, 'publicar'])
->name('productos.publicar');

// Route::post('/productos/{id}/eliminar', [App\Http\Controllers\ProductosController::class, 'eliminar'])
// ->name('productos.eliminar');

Route::delete('/productos/{id}/eliminar', [App\Http\Controllers\ProductosController::class, 'eliminar'])
->name('productos.eliminar');

Route::get('/productos/{id}', [App\Http\Controllers\ProductosController::class, 'ver'])
->name('productos.ver')
->whereNumber('id');