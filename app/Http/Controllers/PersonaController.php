<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Persona;
use Illuminate\Http\Request;

class PersonaController extends Controller
{
    public function crear()
    {
        return view('formularioPersona');
    }
    public function guardar(Request $request){
        $request->validate([
            'nombre' => 'required',
            'apellidos' => 'required',
            'ci' => 'required|numeric|min:0',
            'edad' => 'required|integer|min:0',
            'correo' => 'required',
        ]);

        $persona = new Persona();
        $persona->nombre = $request->input('nombre');
        $persona->apellidos = $request->input('apellidos');
        $persona->ci = $request->input('ci');
        $persona->edad = $request->input('edad');
        $persona->correo = $request->input('correo');

        $persona->save();

        return view('guardarPersona');
    }
}
