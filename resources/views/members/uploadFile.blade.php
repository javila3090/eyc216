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
                        @else
                            Biblioteca virtual - Subir Archivo
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
