<?php

use Illuminate\Support\Facades\Route;

// opcion 2 *
use App\Http\Controllers\ClienteController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// lo usa para todas las rutas
// Route::pattern('id', "[0-9]+");

Route::get('/', function () {
    return view('principal');
});

// Ruta por defecto, si no entra en otra
Route::fallback(function (){
    return "<h1> Esta ruta no existe </h1>";
});



Route::view("principal","principal");


Route::resource("clientes","App\Http\Controllers\ClienteController");

