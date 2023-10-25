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
    public function guardar(){}
}
