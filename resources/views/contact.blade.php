@extends('layouts.base')

@section('content')

<!-- ##### Breadcumb Area Start ##### -->
<div class="breadcumb-area box-shadow bg-overlay-header">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12 col-md-12">
                <div class="breadcumb-text text-center color-black">
                    <h2>Contacto</h2>
                </div>
            </div>
        </div>
    </div>        
</div>
<!-- ##### Breadcumb Area End ##### -->

<!-- ##### Contact Area Start ##### -->
<section class="contact-area section-padding-50-0">
    <div class="container">
        <div class="row">
            <!-- Contact Form Area -->
            <div class="col-12 col-lg-8 offset-lg-2">
                <h5 class="text-center">Escríbenos y le responderemos a la mayor brevedad posible.</h5>
                <br>
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
                            <input class="form-control datepicker" name="contact_date" placeholder="¿Cuando desea ser contactado?" autocomplete="off">
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
        </div>
    </div>
</section>

<!-- Map -->
<div class="contact-map-area section-padding-0-100 container">
    <!-- ##### Google Maps ##### -->
    <div class="map-container  box-shadow">
	<div class="map">{!! Mapper::render () !!}</div>
    </div>
</div>
<!-- ##### Contact Area End ##### -->
@endsection
