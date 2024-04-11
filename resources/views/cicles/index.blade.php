@extends('layouts.principal')

@section('content')
<div class="card">
    <div class="car-body">
        <h5 class="card-title">Buscar</h5>
        <form action="{{ action([App\Http\Controllers\CicleController::class, 'index'])}}" method="post">
            <div class="form-row">
                <div class="col-1">
                    @if (old('actiuBuscar')=='actiu')
                    <div class="custom-control custom-checkbox">
                        <input checked type="checkbox" class="custom-control-input" id="actiuBuscar" name="actiuBuscar" value="actiu">
                        <label for="actiuBuscar" class="custom-control-label">Actiu</label>
                    </div>
                    @else
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="actiuBuscar" name="actiuBuscar" value="actiu">
                        <label for="actiuBuscar" class="custom-control-label">Actiu</label>
                    </div>
                    @endif

                </div>
                <div class="col-1">
                    <button class="btn btn-secondary" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                </div>
            </div>
        </form>
    </div>
</div>
<table class="table">
    <thead>
      <tr>
        <th scope="col">Siglas</th>
        <th scope="col">Nombre</th>
        <th scope="col">Descripcion</th>
        <th scope="col">Estado</th>
      </tr>
    </thead>
    <tbody>
        @foreach($cicles as $cicle)
      <tr>
        <th scope="row">{{ $cicle->sigles}}</th>
        <td>{{ $cicle->nom}}</td>
        <td>{{ $cicle->descripcio}}</td>
        <td>
            @if($cicle->actiu)
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="actiu" name="actiu" value="actiu" checked>
                    <label class="custom-control-label" for="actiu"></label>
                </div>

                @else
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="actiu" name="actiu" value="actiu">
                    <label class="custom-control-label" for="actiu"></label>
                </div>

            @endif
        </td>
        <td>
            <form action="{{ action([App\Http\Controllers\CicleController::class, 'destroy'] , ['cicle'=> $cicle->id])}}" method="POST" class="float-right ml-1">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-sm btn-danger"><i class="fa-trash fa" aria-hidden="true">Esborrar</i></button>
            </form>
            <form method="GET" action="{{ action([App\Http\Controllers\CicleController::class, 'edit'] , ['cicle'=>$cicle->id])}}" class="float-right">
                @csrf
                {{-- @method('PUT') --}}
                <button type="submit" class="btn btn-sm btn-secondary"><i class="fa-edit fa" aria-hidden="true">Editar</i></button>
            </form>
        </td>
      </tr>
    @endforeach

    </tbody>
  </table>
  <a href="{{ url('cicle/create') }}" class="btn btn-float-afegir btn-primary"><i class="fa-plus-circle fa">Crea nou cicle</i></a>
  {{ $cicles->links() }}
@endsection
