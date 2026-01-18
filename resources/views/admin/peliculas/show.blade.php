@extends('layouts.admin')

@section('content')
<div class="app-content-header">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-6"><h3 class="mb-0">{{$pelicula->titulo_p}}</h3></div>
    </div>
  </div>
</div>
<div class="app-content">
  <!--begin::Container-->
  <div class="container-fluid">
    <!--begin::Row-->
    <div class="row">
      <div class="col-md-12">
        <div class="card card-primary card-outline">
          <div class="card header">
            <h5 class="m-0">Datos de la película</h5>
          </div>
          <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover table-striped table-bordered">
                    <tr>
                        <td><b>Título</b></td>
                        <td>{{$pelicula->titulo_p}}</td>
                    </tr>
                    <tr>
                        <td><b>Descripción</b></td>
                        <td>{!!$pelicula->descripcion_p!!}</td>
                    </tr>
                    <tr>
                        <td><b>Categoria</b></td>
                        <td>{!!$pelicula->categoria_p!!}</td>
                    </tr>
                    <tr>
                        <td><b>Portada</b></td>
                        <td>{!!$pelicula->imagen_p!!}</td>
                    </tr>
                    <tr>
                        <td><b>Trailer</b></td>
                        <td>
                            <iframe width="100%" height="400" src="https://www.youtube.com/embed/{{$pelicula->trailer_p}}" title="American Gigolo - Trailer" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        </td>
                    </tr>
                </table>
            </div>
          </div>  
        </div>
      </div>
    </div>
  </div>
</div>
@endsection