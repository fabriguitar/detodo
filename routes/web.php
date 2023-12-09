<?php

use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\ProductoController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

ROUTE::get('/productos',[ProductoController::class, 'index'])->name('productos.inicio');
ROUTE::get('/productos/crear',[ProductoController::class, 'create'])->name('productos.crear');
ROUTE::post('/productos/guardar',[ProductoController::class, 'store'])->name('productos.guardar');



ROUTE::get('/empleados',[EmpleadoController::class, 'index'])->name('empleados.inicio');
ROUTE::get('/empleados/crear',[EmpleadoController::class, 'create'])->name('empleados.crear');
ROUTE::post('/empleados/guardar',[EmpleadoController::class, 'store'])->name('empleados.guardar');
