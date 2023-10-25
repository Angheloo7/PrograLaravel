<?php

use App\Http\Controllers\PersonaController;
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

/*Route::get('/persona/estudiante', function () {
    //return view('welcome');
    return "Hola desde la ruta persona estudiante";
});*/

//formulario
Route::get('/personas/crear',[PersonaController::class,'crear'])->name('personas.crear');

//guardar datos a la BD
Route::post('/personas',[PersonaController::class,'guardar'])->name('personas.guardar');