@extends('layouts.base')

@section('content')
    <div class="breadcumb-area box-shadow bg-overlay-header">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12 col-md-12">
                    <div class="breadcumb-text text-center">
                        <h2>Registrar miembro</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### About Area Start ##### -->
    <section class="cryptos-about-area section-padding-50 mb-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header"><b>{{ __('Registro de miembros') }}</b></div>
                        <div class="col-12 col-md-8 offset-md-2">
                            <br>
                            @if (count($errors) > 0)
                                @include('members.partials.errors')
                            @endif
                            <!--Incluir mensaje de éxito-->
                            @include('members.partials.messages')
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('members.store') }}" aria-label="{{ __('Register') }}">
                                @csrf

                                <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nombres *') }}</label>

                                    <div class="col-md-6">
                                        <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                        @if ($errors->has('name'))
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail *') }}</label>

                                    <div class="col-md-6">
                                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                        @if ($errors->has('email'))
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="birthdate" class="col-md-4 col-form-label text-md-right">{{ __('Fecha de nacimiento *') }}</label>

                                    <div class="col-md-6">
                                        <input class="form-control datepicker" name="birthdate" placeholder="Fecha de nacimiento" autocomplete="off">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="level" class="col-md-4 col-form-label text-md-right">{{ __('Nivel *') }}</label>

                                    <div class="col-md-6">
                                        <select name="level" class="form-control" required>
                                            <option value="">Seleccione una opción</option>
                                            <option value="1">Maestro</option>
                                            <option value="6">Secretario</option>
                                            <option value="2">Compañero</option>
                                            <option value="4">Vigilante 1</option>
                                            <option value="5">Vigilante 2</option>
                                            <option value="3">Aprendíz</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Contraseña *') }}</label>

                                    <div class="col-md-6">
                                        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                        @if ($errors->has('password'))
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Repetir contraseña *') }}</label>

                                    <div class="col-md-6">
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                    </div>
                                </div>

                                <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Guardar') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
