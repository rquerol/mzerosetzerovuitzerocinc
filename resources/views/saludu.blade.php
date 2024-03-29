@extends("layouts.principal")

@section("titul")
 "saludu"
@endsection

@section("content")
    @if (isset($user->nom))
        {{ $user->nom }}
    @endif
    @if (isset($user->cognoms))
        {{ $user->cognoms }}
    @endif
    @if (isset($user->rol->nom))
        {{ $user->rol->nom }}
    @endif
@endsection
