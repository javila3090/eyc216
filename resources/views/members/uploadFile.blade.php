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

                <div class="contact-form-area mb-100">
                    <div id="sendmessage">
                        <div class="alert alert-success">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>
                            <b>¡Gracias por escribirnos!</b> Su mensaje será respondido a la mayor brevedad posible.
                        </div>
                    </div>
                    <div id="errormessage"></div>
                    <form action="" method="post" class="form-horizontal contactForm" role="form">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Su nombre" data-rule="minlen:4" data-msg="Por favor ingrese al menos 4 carácteres" />
                            <div class="validation"></div>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Su email" data-rule="email" data-msg="Por favor ingrese un correo electrónico válido" />
                            <div class="validation"></div>
                        </div>
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
