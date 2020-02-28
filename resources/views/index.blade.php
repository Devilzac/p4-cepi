@extends('layout.principal')

@section('main')
<div class="container">
    <div class="card">
      <div class="card-header">
          <i class="fas fa-book"></i><b>Lista Libros</b>
          <div class="btn-group float-right" role="group">
              <a href="{{route('formulario.create')}}" class="btn btn-info" role="buton">
                  <i class="fas fa-plus"></i> Añadir Libro
              </a>
          </div>
      </div>
      <div class="card-body p-0">
            <table class="table table-striped table-dark">
              <thead>
                <tr>
                  <th scope="col">Titulo</th>
                  <th scope="col">Resumen</th>
                  <th scope="col">No. Paginas</th>
                  <th scope="col">Edicion</th>
                  <th scope="col">Autor</th>
                  <th scope="col">Precio</th>
                  <th scope="col">Editar</th>
                  <th scope="col">Borrar</th>
                </tr>
              </thead>
              <tbody>
                    @if($libros->count())
                        @foreach($libros as $libro)
                            <tr>
                                <td>{{ $libro->titulo }}</td>
                                <td>{{ $libro->resumen }}</td>
                                <td>{{ $libro->npaginas }}</td>
                                <td>{{ $libro->nedicion }}</td>
                                <td>{{ $libro->autor }}</td>
                                <td>{{ $libro->precio }}</td>
                                <td>
                                    <a class="btn btn-primary btn-xs" href="{{action('LibroController@edit', $libro->id)}}">
                                        <i class="fas fa-edit"></i>
                                    </a> 
                                </td>
                                <td>
                                    <form action="{{action('LibroController@destroy', $libro->id)}}" method="post">
                                        {{csrf_field}}
                                        <input name="_method" type="hidden" value="DELETE">
                                        <button class="btn btn-danger btn-xs" type="submit">
                                            <i class="fas fa-trash-alt"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    @else           
                      <tr>
                          <td colspan="8">No hay libros disponibles!</td>
                      </tr>
                    @endif
              </tbody>
            </table>
      </div>
@endsection