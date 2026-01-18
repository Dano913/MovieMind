@extends('layouts.admin')

@section('content')
<div class="app-content-header">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-6">
        <h3 class="mb-0">Listado de Películas</h3>
        @if($message = Session::get('mensaje'))
          <script>
            Swal.fire({
              title: "Éxito",
              text: "{{$message}}",
              icon: "success"
            });
          </script>
        @endif
      </div>
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
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
              <?php $contador = 0;?>
                @foreach($peliculas as $pelicula)
                    <tr>
                        <td><?php echo $contador = $contador + 1;?></td>
                        <td>{{$pelicula->titulo_p}}</td>
                        <td>{!!$pelicula->descripcion_p!!}</td>
                        <td>{{$pelicula->categoria_p}}</td>
                        <td><img src="{{asset('storage').'/'.$pelicula->imagen_p}}" width="100px" alt=""></td>
                        <td>
                          <a href="https://www.youtube.com/watch?v={{$pelicula->trailer_p}}">
                            Ver trailer
                          </a>
                        </td>
                        <td>{{$pelicula->duracion_p}}</td>
                        <td>{{$pelicula->link1_p}}</td>
                        <td>{{$pelicula->link2_p}}</td>
                        <td>
                          <div style="display: flex; flex-direction: column; gap: 5px; align-items: center;">
                            <a href="{{route('peliculas.show',$pelicula->id)}}" class="text-info" title="Ver">
                              <i class="bi bi-eye fs-6"></i>
                            </a>

                            <a href="{{route('peliculas.edit',$pelicula->id)}}" class="text-success" title="Editar">
                              <i class="bi bi-pencil-square fs-6"></i>
                            </a>

                            <form action="{{url('admin/peliculas', $pelicula->id)}}" method="post">
                              @csrf
                              {{method_field('DELETE')}}
                              <input type="submit" onclick="return confirm('Estás seguro?')" class="btn btn-danger btn-sm" value="Eliminar">
                            </form>
                          </div>
                        </td>
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