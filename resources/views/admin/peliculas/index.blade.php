@extends('layouts.admin')

@section('content')
<div class="app-content-header">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-6"><h3 class="mb-0">Listado de Películas</h3></div>
    </div>
  </div>
</div>
<div class="app-content">
  <!--begin::Container-->
  <div class="container-fluid">
    <!--begin::Row-->
    <div class="row">
      <div class="col-lg-12">
        <div class="card mb-4">
          <div class="table-responsive">
            <table class="table table-bordered table-hover table-stripped">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Título</th>
                    <th>Descripción</th>
                    <th>Categoría</th>
                    <th>Imagen</th>
                    <th>Trailer</th>
                    <th>Duración</th>
                    <th>Servidor 1</th>
                    <th>Servidor 2</th>
                </tr>
            </thead>
            <tbody>
                @foreach($peliculas as $pelicula)
                    <tr>
                        <td>{{$pelicula->id}}</td>
                        <td>{{$pelicula->titulo_p}}</td>
                        <td>{{$pelicula->descripcion_p}}</td>
                        <td>{{$pelicula->categoria_p}}</td>
                        <td><img src="{{$pelicula->image_p}}" width="100px"></td>
                        <td>{{$pelicula->trailer_p}}</td>
                        <td>{{$pelicula->duracion_p}}</td>
                        <td>{{$pelicula->link1_p}}</td>
                        <td>{{$pelicula->link2_p}}</td>
                    </tr>
                @endforeach
            </tbody>
          </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection