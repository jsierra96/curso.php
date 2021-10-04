<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\firtsController;
use App\Http\Controllers\PeliculasController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/peliculas', [ firtsController::class, 'editar'] );

Route::get('/detalle/{year?}', function() {
    return view('Detalle');
})->middleware( 'testyear' );

Route::get('/formulario', [ PeliculasController::class, 'formulario'] );

Route::post('/recibir', [ PeliculasController::class, 'recibir'] );

Route::get('/redirigir', [ firtsController::class, 'redirigir'] );

Route::resource( 'usuario', UsuarioController::class );
