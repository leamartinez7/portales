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


// Route::get('/catalogo', function () {
//     return view('catalogo');
// });

// Route::get('/blog', function () {
//     return view('blog');
// });