@extends("layouts.principal")

@section("titul")
 " T_Index";
@endsection

@section("content")
<form action="" method="post">
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Nom</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="nom">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Cognom</label>
        <input type="text" class="form-control" id="exampleFormControlInput2" placeholder="cognom">
    </div>
    <input type="submit" name="saludu">Envia</input>
</form>
@endsection
