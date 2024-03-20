@extends("layouts.principal")

@section("titul")
 "saludu"
@endsection

@section("content")
{{ $user->nom . " " .$user->cognoms ." " . $user->rol->nom }}
@endsection
