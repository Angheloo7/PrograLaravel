<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Estudiante;
use Illuminate\Http\Request;

class EstudianteController extends Controller
{
    public function crear()
    {
        return view('formularioEstudiante');
    }
    public function guardar(Request $request){
        $request->validate([
            'nombre' => 'required',
            'materia' => 'required',
            'edad' => 'required|integer|min:0',
            'anio' => 'required|integer|min:0',
        ]);

        $estudiante = new Estudiante();
        $estudiante->nombre = $request->input('nombre');
        $estudiante->materia = $request->input('materia');
        $estudiante->edad = $request->input('edad');
        $estudiante->anio = $request->input('anio');

        $estudiante->save();

        return view('guardarEstudiante');
    }
}
