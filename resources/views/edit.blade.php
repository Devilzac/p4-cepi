@extends('layout.principal')

@section('main')
    @include('subvistas.formError')
    
<div class="container">
    <div class="card">
      <div class="card-header">
        Nuevo Libro
      </div>
      <div class="card-body">
              <form action="{{route('formulario.update', $libro->id)}}" method="post">
                  {{csrf_field()}}
                  {{method_field('PATCH')}}
                <div class="form-row mb-3 mt-3">
                  <div class="col-6">
                      <input type="text" class="form-control" id="tituloLibro" name="titulo" placeholder="Titulo Libro" value="{{$libro->titulo}}" required>
                  </div>
                  <div class="col-6">
                      <input type="number" class="form-control" id="numeroPaginas" name="npaginas" value="{{$libro->npaginas}}" placeholder="Numero de Paginas" required>
                  </div>
                </div>

                <div class="form-row mb-3 mt-3">                    
                    <div class="col-12">
                        <input type="text" class="form-control" id="resumen" name="resumen"  value="{{$libro->resumen}}" placeholder="Resumen" required>
                    </div>
                </div>       

                <div class="form-row mb-3 mt-3">
                  <div class="col-6">
                      <input type="number" class="form-control" id="edicionLibro" name="nedicion" placeholder="Edición Libro"  value="{{$libro->nedicion}}" required>
                  </div>
                  <div class="col-6">
                      <input type="number" class="form-control" id="precioPaginas" name="precio"  value="{{$libro->precio}}" placeholder="Precio de el Paginas" required>
                  </div>
                </div>

                <div class="form-row mb-3 mt-3">
                    <div class="col-12">
                        <input type="text" class="form-control" id="autor" name="autor" placeholder="Autor"  value="{{$libro->autor}}" required>
                    </div>
                </div>

                <button class="btn btn-success col-12 mb-3 mt-3" type="submit">Actualizar</button>

                <a class="btn btn-primary col-12 mb-3 mt-3" href="{{ route('formulario.index') }}">Atrás</a>
            </form>
        </div>
    </div>
</div>
@endsection