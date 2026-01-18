@extends('layouts.admin')

@section('content')

<div class="app-content-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <h3 class="mb-0">Editar película</h3>
            </div>
        </div>
    </div>
</div>

<div class="app-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-success card-outline">
                    <div class="card-body">

                        <form action="{{ url('/admin/peliculas', $pelicula->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            {{method_field('PATCH')}}
                            <div class="row">
                                <div class="col-md-8">

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Título de la película <span style="color: red"><b>*</b></span></label>
                                                <input type="text" name="titulo_p" class="form-control" value="{{$pelicula->titulo_p}}" required>
                                                @error('titulo_p')
                                                <small style="color: red;">{{$message}}</small>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Categoría <span style="color: red"><b>*</b></span></label>
                                                <input type="text" name="categoria_p" class="form-control" value="{{$pelicula->categoria_p}}" required>
                                                @error('categoria_p')
                                                <small style="color: red;">{{$message}}</small>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Trailer</label>
                                                <input type="text" name="trailer_p" class="form-control" value="{{$pelicula->trailer_p}}">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Duración <span style="color: red"><b>*</b></span></label>
                                                <input type="text" name="duracion_p" class="form-control" value="{{$pelicula->duracion_p}}" required>
                                                @error('duracion_p')
                                                <small style="color: red;">{{$message}}</small>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label>Servidor 1</label>
                                        <input type="text" name="link1_p" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label>Servidor 2</label>
                                        <input type="text" name="link2_p" class="form-control">
                                    </div>

                                </div>

                                <div class="col-md-4">

                                    <div class="form-group">
                                        <label>Descripción de la película</label>
                                        
                                        <textarea
                                            id="descripcion_p"
                                            name="descripcion_p"
                                            class="form-control"
                                            style="min-height:150px;" required>{{$pelicula->descripcion_p}}</textarea>
                                        @error('descripcion_p')
                                          <small style="color: red;">{{$message}}</small>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="">Portada de la película</label>
                                        <input type="file" name="imagen_p" id="file" class="form-control">
                                        @error('imagen_p')
                                          <small style="color: red;">{{$message}}</small>
                                        @enderror
                                        <output id="list" style="margin-top: 10px">
                                            <img src="{{asset('storage').'/'.$pelicula->imagen_p}}" width="100px" alt="">
                                        </output>
                                        <script>
                                          function archivo(evt) {
                                              var files = evt.target.files; // FileList object
                                              // Obtenemos la imagen del campo "file"
                                              for (var i = 0, f; f = files[i]; i++) {
                                                  // Solo admitimos imágenes
                                                  if (!f.type.match('image.*')) {
                                                      continue;
                                                  }
                                                  var reader = new FileReader();
                                                  reader.onload = (function (theFile) {
                                                      return function (e) {
                                                          // Insertamos la imagen
                                                          document.getElementById("list").innerHTML = ['<img class="thumb thumbnail" src="', e.target.result, '" width="100%" title="', escape(theFile.name), '" />'].join('');
                                                      };
                                                  })(f);
                                                  reader.readAsDataURL(f);
                                              }
                                          }
                                          document.getElementById('file').addEventListener('change', archivo, false);
                                        </script>

                                    </div>

                                </div>
                            </div>

                            <hr>

                            <div class="row">
                                <div class="col-md-6">
                                    <a href="{{ url('/admin/peliculas') }}" class="btn btn-secondary">
                                        Cancelar
                                    </a>
                                    <button type="submit" class="btn btn-success">
                                        Actualizar
                                    </button>
                                </div>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')
    {{-- ✅ CKEditor 4 local --}}
    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>

    <script>
    document.addEventListener('DOMContentLoaded', function () {
        // ✅ Reemplaza el textarea por CKEditor
        CKEDITOR.replace('descripcion_p', {
            height: 200, // altura visible
            toolbar: [
                { name: 'basicstyles', items: ['Bold', 'Italic', 'Underline', 'Strike'] },
                { name: 'paragraph', items: ['NumberedList', 'BulletedList', '-', 'Outdent', 'Indent'] },
                { name: 'links', items: ['Link', 'Unlink'] },
                { name: 'insert', items: ['Image', 'Table'] },
                { name: 'styles', items: ['Format', 'Font', 'FontSize'] },
                { name: 'colors', items: ['TextColor', 'BGColor'] },
                { name: 'tools', items: ['Maximize'] }
            ]
        });
    });
    </script>
@endsection
