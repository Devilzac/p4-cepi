@extends('layout.principal')

@section('main')
<div class="container">
    <div class="card">
      <div class="card-header">
        Nuevo Libro
      </div>
      <div class="card-body">
            <form>
                <div class="form-row mb-3 mt-3">
                  <div class="col-6">
                      <input type="text" class="form-control" id="tituloLibro" name="tituloLibro" placeholder="Titulo Libro" required>
                  </div>
                  <div class="col-6">
                      <input type="number" class="form-control" id="numeroPaginas" name="numeroPaginas" placeholder="Numero de Paginas" required>
                  </div>
                </div>

                <div class="form-row mb-3 mt-3">                    
                    <div class="col-12">
                        <input type="text" class="form-control" id="resumen" name="resumen" placeholder="Resumen" required>
                    </div>
                </div>       

                <div class="form-row mb-3 mt-3">
                  <div class="col-6">
                      <input type="number" class="form-control" id="edicionLibro" name="edicionLibro" placeholder="Edición Libro" required>
                  </div>
                  <div class="col-6">
                      <input type="number" class="form-control" id="precioPaginas" name="precioPaginas" placeholder="Precio de el Paginas" required>
                  </div>
                </div>

                <div class="form-row mb-3 mt-3">
                    <div class="col-12">
                        <input type="text" class="form-control" id="autor" name="autor" placeholder="Autor" required>
                    </div>
                </div>

                <button class="btn btn-success col-12 mb-3 mt-3" type="submit">Guardar</button>

                <button class="btn btn-primary col-12 mb-3 mt-3" type="submit">Atrás</button>
            </form>
        </div>
    </div>
</div>
@endsection