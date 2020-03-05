@extends('layout.principal')

@section('main')
    @include('subvistas.formError')
    
<div class="container">
    <div class="card">
      <div class="card-header">
        Buscar Libro
      </div>
      <div class="card-body">
              <form action="form" method="post">
                  {{csrf_field()}}
                <div class="form-row mb-12 mt-12">
                  <div class="col-12">
                      <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Titulo del Libro" >
                  </div>
                </div>

                <button class="btn btn-success col-12 mb-3 mt-3" type="submit">Buscar</button>

                <a class="btn btn-primary col-12 mb-3 mt-3" href="{{ route('formulario.index') }}">Volver al listado</a>
            </form>
        </div>
    </div>
</div>
@endsection