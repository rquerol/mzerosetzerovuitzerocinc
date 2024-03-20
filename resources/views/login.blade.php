@extends("layouts.principal")

@section("titul")
 " login"
@endsection

@section("content")
<form action="{{ action([App\Http\Controllers\UsuariController::class, 'login']) }}" method="post" class="row g-3">
    @csrf
        <div class="col-md-6">
          <label for="inputEmail4" class="form-label" required>Email</label>
          <input type="email" class="form-control" id="inputEmail4" name="useremail">
        </div>
        <div class="col-md-6">
          <label for="inputPassword4" class="form-label" required>Password</label>
          <input type="password" class="form-control" id="inputPassword4" name="contrasenya">
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Sign in</button>
          </div>
</form>
@endsection
