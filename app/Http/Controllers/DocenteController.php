<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Docente;
use Illuminate\Http\Request;

class DocenteController extends Controller
{
    public function crear()
    {
        return view('formularioDocente');
    }
    public function guardar(Request $request){
        $request->validate([
            'nombre' => 'required',
            'materia1' => 'required',
            'materia2' => 'required',
            'edad' => 'required|integer|min:0',
        ]);

        $docente = new Docente();
        $docente->nombre = $request->input('nombre');
        $docente->materia1 = $request->input('materia1');
        $docente->materia2 = $request->input('materia2');
        $docente->edad = $request->input('edad');

        $docente->save();

        return view('guardarDocente');
    }
}
