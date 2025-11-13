@extends('layouts.admin')

@section('content')
<div class="app-content-header">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-6"><h3 class="mb-0">Nueva película</h3></div>
    </div>
  </div>
</div>
<div class="app-content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card card-primary card-outline">
          <div class="card-body">
            <form action="{{url('/admin/peliculas')}}" method="POST">
              <div class="row">
                <div class="col-md-8">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="">Titulo de la película</label>
                        <input type="text" class="form-control">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="">Categoria</label>
                        <input type="text" class="form-control">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="">Trailer</label>
                        <input type="text" class="form-control">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="">Duración</label>
                        <input type="text" class="form-control">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="">Servidor 1</label>
                    <input type="text" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="">Servidor 2</label>
                    <input type="text" class="form-control">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="">Descripción de la película</label>
                    <textarea col="30" rows="5" class="form-control"></textarea>
                  </div>
                  <div class="form-group">
                    <label for="">Portada de la película</label>
                    <input type="file" class="form-control">
                  </div>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-md-6">
                  <a href="" class="btn btn-secondary">Cancelar</a>
                  <input type="submit" class="btn btn-primary" value="Registrar">
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