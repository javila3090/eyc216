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
                        Detalles del evento
                    </b>
                </p>
                <hr>
                <form method="post" action="{{route('members.store.event')}}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="title"><b>Evento</b></label>
                        <input type="text" class="form-control" name="title" placeholder="Título del evento" value="{{$event->title}}" readonly/>
                    </div>
                    <div class="form-group">
                        <label for="title"><b>Descripción</b></label>
                        <textarea class="form-control" name="description" rows="4" data-rule="required" data-msg="Por favor ingrese una descripción" placeholder="Breve descripción del evento" readonly>{!! $event->description !!}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="start"><b>Inicio</b></label>
                        <input class="form-control" name="start" placeholder="Fecha inicio" autocomplete="off" value="{{$event->start}}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="end"><b>Fin</b></label>
                        <input type="text" class="form-control" name="end" placeholder="Fecha fin" autocomplete="off" value="{{$event->end}}" readonly>
                    </div>
                    @if(Auth::guard('members')->user()->hasRole('admin') || Auth::guard('members')->user()->hasRole('secretary') || (Auth::guard('members')->user()->id == $event->member_id))
                        <hr>
                        <div class="form-group">
                            <a href="{{route('members.delete.event',$event->id)}}" class="btn btn-danger">Eliminar</a>
                        </div>
                    @endif
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