@extends('layouts.base')

@section('content')
  <br>
  <br>
  <br>
  <br>
  <br>
  <div class="login-box col-md-4 offset-md-4 mt-100" >
  @if (count($errors) > 0)
    @include('members.partials.errors')
  @endif
  <!-- /.login-logo -->
    <div class="card mb-100">
      <div class="card-body login-card-body ">
        <p class="login-box-msg" style="text-transform: uppercase;"><b>Iniciar sesión</b></p>

        <form method="POST" action="{{ route('members.login') }}" aria-label="{{ __('Login') }}">
          {{ csrf_field() }}
          <div class="form-group has-feedback">
            <input type="email" class="form-control" name="email" placeholder="Correo electrónico" required>
            <br>
          </div>
          <div class="form-group has-feedback">
            <input type="password" class="form-control" name="password" placeholder="Contraseña" required>
            <br>
          </div>
          <div class="row">
            <!-- /.col -->
            <div class="col-12">
              <button type="submit" class="btn cryptos-btn btn-flat">Ingresar</button>
            </div>
            <!-- /.col -->
          </div>
        </form>
      </div>
      <!-- /.login-card-body -->
    </div>
  </div>
  <!-- /.login-box -->
@endsection
