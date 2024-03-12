@extends('layouts.principal')

@section('content')

<div class="card mt-2">
<div class="card-body">
    <h5 class="card-title font-weight-bold">Cicle Nou</h5>
    <form action="{{ action([App\Http\Controllers\CicleController::class, 'store'])}}" method="POST">
        @csrf
        <div class="form-group row">
            <label for="sigles" class="col-sm-1 col-form-label">Sigles</label>
            <div class="col-sm-11">
                <input type="text" class="form-control" id="sigles" name="sigles" autofocus>
            </div>
        </div>
        <div class="form-group row">
            <label for="nom" class="col-sm-1 col-form-label">Nom</label>
            <div class="col-sm-11">
                <input type="text" class="form-control" id="nom" name="nom" >
            </div>
        </div>
        <div class="form-group row">
            <label for="descripcio" class="col-sm-1 col-form-label">Descripcio</label>
            <div class="col-sm-11">
                <textarea class="form-control" id="descripcio" name="descripcio" rows="5" ></textarea>
            </div>
        </div>
        <div class="form-group row">
            <label for="actiu" class="col-sm-1 col-form-label">Actiu</label>
            <div class="col-sm-11">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="actiu" name="actiu" value="actiu">
                    <label class="custom-control-label" for="actiu"></label>
                </div>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-12">
                <a href="" class="btn btn-secondary float-right ml-1"><i class="fa-times fa" aria-hidden="true"></i>Cancelar</a>
                <button type="submit" class="btn btn-primay float-right"><i aria-hidden="true" class="fa fa-check"></i>Aceptar</button>
            </div>
        </div>
    </form>
</div>
</div>

@endsection
