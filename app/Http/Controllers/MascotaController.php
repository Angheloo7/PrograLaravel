<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mascota;
class MascotaController extends Controller
{
    public function registrar(){
        return view('formularioMascota');
    }

    public function almacenar(Request $request){
        $request ->validate([
            'nombre' => 'required',
            'nombreDuenio' => 'required',
            'edad' => 'required|numeric|min:0',
            'raza' => 'required',
            'descripcion' => 'required',
            'imagen' => 'image|mimes:jpeg,png,jpg,gif|max:2048',

        ]);

        $mascota = new Mascota();
        $mascota->nombre = $request->input('nombre');
        $mascota->nombreDuenio = $request->input('nombreDuenio');
        $mascota->edad = $request->input('edad');
        $mascota->raza = $request->input('raza');
        $mascota->descripcion = $request->input('descripcion');

        if ($request->hasFile('imagen')) #si existe una imagen 
        {
            $imagen = $request->file('imagen'); #rescatar imagen
            $rutaImagen = $imagen->store('mascotas','public'); #guardar imagen dentro de una carpeta
            $mascota->imagen=$rutaImagen; # guardar la ruta dentro la base de datos
        }

        $mascota->save();

        return view('guardarMascota');
    }
}
