@extends('layouts.principal')

@section('content')
<div class="card">
    <div class="car-body">
        <h5 class="card-title">Buscar</h5>
        <form action="{{ action([App\Http\Controllers\CicleController::class, 'index'])}}">
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
      </tr>
    @endforeach

    </tbody>
  </table>
@endsection
