@extends('layout.principal')

@section('main')

    <table class="table table-striped table-dark py-4">
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
                            <a class="btn btn-primary btn-xs" href="{{action('LibroController@edit', $libro->id)}}"></a> 
                        </td>
                        <td>{{ $libro->precio }}</td>
                    </tr>
                @endforeach
            @else            
              <tr>
                <td>No hay libros disponibles!</td>
              </tr>
            @endif
      </tbody>
    </table>
@endsection