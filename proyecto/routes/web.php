<?php

use App\Http\Controllers\ProductoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
// Route::get('/bienvenida', function () {
//     return view('bienvenida');
// });
Route::get('/bienvenida', [ProductoController::class, 'bienvenida']);
Route::get('/bye', [ProductoController::class, 'bye']);
Route::get('/producto', [ProductoController::class, 'viewProducto']);
Route::get('/insertar', [ProductoController::class, 'viewInsertProd']);