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
                        Nuevo mensaje
                    </b>
                </p>
                <hr>
                <div class="contact-form-area">
                    <div id="sendmessage">
                        <div class="alert alert-success">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>
                            <b>Su mensaje fue enviado con éxito</b>
                        </div>
                    </div>
                    <div id="errormessage"></div>
                    <form action="" method="post" class="form-horizontal messageForm" role="form">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Asunto" data-rule="minlen:4" data-msg="Por favor ingrese al menos 8 carácteres de asunto" />
                            <div class="validation"></div>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Por favor ingrese su mensaje" placeholder="Mensaje"></textarea>
                            <div class="validation"></div>
                        </div>
                        <div class="form-group">
                            <button class="btn cryptos-btn btn-submit" type="submit">Enviar mensaje</button>
                            <button type="button" class="btn cryptos-btn btn-sending" disabled="true" style="display: none;">Enviando mensaje <i class="fa fa-spinner fa-spin"></i></button>
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
