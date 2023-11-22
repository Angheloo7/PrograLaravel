<?php

use App\Http\Controllers\PersonaController;
use App\Http\Controllers\MascotaController;
use App\Http\Controllers\EstudianteController;
use App\Http\Controllers\DocenteController;
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
Route::post('/personas', [PersonaController::class, 'guardar'])->name('personas.guardar');

//formulario
Route::get('/mascotas/crear',[MascotaController::class,'registrar'])->name('mascotas.crear');

//guardar datos a la BD
Route::post('/mascotas', [MascotaController::class, 'almacenar'])->name('mascotas.guardar');


//formulario
Route::get('/estudiantes/crear',[EstudianteController::class,'crear'])->name('estudiantes.crear');

//guardar datos a la BD
Route::post('/estudiantes', [EstudianteController::class,'guardar'])->name('estudiantes.guardar');

//formulario
Route::get('/docentes/crear',[DocenteController::class,'crear'])->name('docentes.crear');

//guardar datos a la BD
Route::post('/docentes', [DocenteController::class,'guardar'])->name('docentes.guardar');

