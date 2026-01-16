<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelicula;

class PeliculaController extends Controller
{
    public function index () {
        $peliculas = Pelicula::all();
        return view ('admin.peliculas.index',['peliculas'=>$peliculas]);
    }

    public function create () {
        return view('admin.peliculas.create');
    }

    public function store (Request $request) {
        $request->validate([
            'titulo_p' => 'required|max:255',
            'categoria_p' => 'required|max:100',
            'duracion_p' => 'required|max:255',
            'descripcion_p' => 'required',
            'imagen_p' => 'required|image|max:2048',
        ]);

        $pelicula = new Pelicula();
        $pelicula->titulo_p = $request->titulo_p;
        $pelicula->descripcion_p = $request->descripcion_p;
        $pelicula->categoria_p = $request->categoria_p;
        //$pelicula->imagen_p = $request->imagen_p;
        $pelicula->imagen_p = $request->file('imagen_p')->store('portadas_uploads', 'public');
        $pelicula->trailer_p = $request->trailer_p;
        $pelicula->duracion_p = $request->duracion_p;
        $pelicula->link1_p = $request->link1_p;
        $pelicula->link2_p = $request->link2_p;
        $pelicula->save();

        return redirect()->route('peliculas.index');
    }

    public function show () {

    }

    public function edit () {

    }

    public function update () {

    }

    public function destroy () {

    }
}
