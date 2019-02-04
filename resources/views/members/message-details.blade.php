@extends('layouts.base')

@section('content')
    <br>
    <br>
    <br>
    <div class="login-box col-12 col-md-6 offset-md-3 mt-100" >
    @if (count($errors) > 0)
        @include('members.partials.errors')
    @endif

    @include('members.partials.messages')
    <!-- /.login-logo -->
        <div class="card mb-100">
            <div class="card-body login-card-body ">
                <p class="login-box-msg" style="text-transform: uppercase;">
                    <b>
                        Mensaje #{{$message->id}}
                    </b>
                </p>
                <hr>
                <div class="contact-form-area">
                    <form action="" method="post" class="form-horizontal messageForm" role="form">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label><b>Nombre</b></label>
                            <input type="text" class="form-control" name="subject" value="{{$message->member->name}}" id="name" placeholder="Nombre"/>
                            <div class="validation"></div>
                        </div>
                        <div class="form-group">
                            <label><b>Recibido</b></label>
                            <input type="text" class="form-control" name="subject" value="{{$message->created_at}}" id="created_at" placeholder="Recibido" />
                            <div class="validation"></div>
                        </div>
                        <div class="form-group">
                            <label><b>Asunto</b></label>
                            <input type="text" class="form-control" name="subject" value="{{$message->subject}}" id="subject" />
                            <div class="validation"></div>
                        </div>
                        <div class="form-group">
                            <label><b>Mensaje</b></label>
                            <textarea class="form-control" name="message" rows="5" data-rule="required" placeholder="Mensaje">{{$message->message}}</textarea>
                            <div class="validation"></div>
                        </div>
                    </form>
                </div>
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
