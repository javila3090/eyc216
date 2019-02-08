@extends('layouts.base')

@section('content')
    <br>
    <br>
    <br>
    <div class="login-box col-md-4 offset-md-4 mt-100" >
    @if (count($errors) > 0)
        @include('members.partials.errors')
    @endif

    @include('members.partials.messages')
    <!-- /.login-logo -->
        <div class="card mb-100">
            <div class="card-body login-card-body ">
                <p class="login-box-msg" style="text-transform: uppercase;">
                    <b>
                        @if($type == 1)
                            Área de Secretaría - Subir Archivo
                        @elseif($type==2)
                            Área de Vigilantes - Subir Archivo
                        @elseif($type==3)
                            Biblioteca virtual - Subir Archivo
                        @else
                            Planchas - Subir Archivo
                        @endif
                    </b>
                </p>

                <form method="post" action="{{route('members.upload.file')}}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <input type="hidden" class="form-control" name="type" value="{{$type}}" required/>
                    </div>
                    <div class="form-group">
                        <label for="author"><b>Nombre</b></label>
                        <input type="text" class="form-control" name="name" required/>
                    </div>
                    <div class="form-group">
                        <label for="author"><b>Descripción</b></label>
                        <textarea class="form-control" name="description"></textarea>
                    </div>
                    @if($type == 1 || $type==2)
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
                    @else
                        <div class="form-group">
                            <label for="author"><b>Enviar a</b></label>
                            <select name="level" class="form-control" readonly>
                                <option value="4">Todos</option>
                            </select>
                        </div>
                    @endif
                    <div class="form-group">
                        <label for="author"><b>Archivo</b></label>
                        <input type="file" class="form-control" name="filename" required/>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn cryptos-btn">Subir</button>
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