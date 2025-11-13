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

    public function store () {

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
