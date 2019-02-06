@extends('layouts.base')

@section('content')
    <br>
    <br>
    <br>
    <div class="login-box col-md-6 offset-md-3 mt-100" >
    @if (count($errors) > 0)
        @include('members.partials.errors')
    @endif

    @include('members.partials.messages')
    <!-- /.login-logo -->
        <div class="card mb-100">
            <div class="card-body login-card-body ">
                <p class="login-box-msg" style="text-transform: uppercase;">
                    <b>
                        Nuevo evento
                    </b>
                </p>
                <hr>
                <form method="post" action="{{route('members.store.event')}}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="title"><b>Evento</b></label>
                        <input type="text" class="form-control" name="title" placeholder="Título del evento" required/>
                    </div>
                    <div class="form-group">
                        <label for="title"><b>Descripción</b></label>
                        <textarea class="form-control" name="description" rows="4" data-rule="required" data-msg="Por favor ingrese una descripción" placeholder="Breve descripción del evento"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="start"><b>Inicio</b></label>
                        <input class="form-control datepicker-2" name="start" placeholder="Fecha inicio" autocomplete="off" required>
                    </div>
                    <div class="form-group">
                        <label for="end"><b>Fin</b></label>
                        <input class="form-control datepicker-2" name="end" placeholder="Fecha fin" autocomplete="off">
                    </div>
                    @if(Auth::guard('members')->user()->hasRole('admin') || Auth::guard('members')->user()->hasRole('secretary'))
                        <div class="form-group">
                            <label for="author"><b>Enviar a</b></label>
                            <select name="level" class="form-control" required>
                                <option value="">Elija un nivel</option>
                                <option value="1">Nivel 1</option>
                                <option value="2">Nivel 2</option>
                                <option value="3">Nivel 3</option>
                                <option value="4">Todos</option>
                            </select>
                        </div>
                    @elseif (Auth::guard('members')->user()->hasRole('vigilant_1'))
                        <div class="form-group">
                            <label for="author"><b>Enviar a</b></label>
                            <select name="level" class="form-control" readonly>
                                <option value="2">Miembros nivel 2</option>
                            </select>
                        </div>
                    @elseif (Auth::guard('members')->user()->hasRole('vigilant_2'))
                        <div class="form-group">
                            <label for="author"><b>Enviar a</b></label>
                            <select name="level" class="form-control" readonly>
                                <option value="1">Miembros nivel 1</option>
                            </select>
                        </div>
                    @endif
                    <div class="form-group">
                        <button type="submit" class="btn cryptos-btn">Crear</button>
                    </div>
                </form>
            </div>
            <hr>
            <div class="form-group text-center">
                <a class="btn btn-danger" href="{{route('members.dashboard')}}">Volver</a>
            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
    <!-- /.login-box -->
@endsection