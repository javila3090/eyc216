@extends('layouts.base')

@section('content')

<!-- ##### Breadcumb Area Start ##### -->
<div class="breadcumb-area box-shadow bg-overlay-header">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12 col-md-12">
                <div class="breadcumb-text text-center">
                    <h2>Solicita tu convenio</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ##### Breadcumb Area End ##### -->

<!-- ##### Course Area Start ##### -->

<div class="cryptos-feature-area section-padding-50-50">
    <div class="container-fluid">
        <!--Incluir mensaje de error-->
        @if (count($errors) > 0)
        <div class="row mb-50">
            <div class="col-md-12"> 
                @include('partials.errors')
            </div>
        </div>
        @endif

        <!--Incluir mensaje de éxito-->
        <div class="row">
            <div class="col-md-12">
                @include('partials.messages')
            </div>
        </div>

        <form action="{{route('agreement.store')}}" method="POST">
            {{ csrf_field() }}
            <div class="row">
                <div class="col-md-9 col-xs-12">
                    <p class="size-12px color-black" style="letter-spacing: .5px">Solicita tu convenio de atención preferente. Ante cualquier duda o sugerencia puedes también puedes escribirnos a <b>{{$companyInfo->email_2}}</b></p>
                    <br>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Contacto administrativo*</label>
                                <input type="text" class="form-control" name="name" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Email*</label>
                                <input type="email" class="form-control" name="email" required>
                            </div>
                        </div>                    
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Teléfono*</label>
                                <input type="text" class="form-control" name="phone" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Comuna*</label>
                                <input type="text" class="form-control" name="commune" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Dirección*</label>
                                <input type="text" class="form-control" name="address" required>
                            </div>
                        </div>  
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Empresa/Institución</label>
                                <input type="text" class="form-control" name="company">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Comentarios adicionales</label>
                                <textarea class="form-control" name="comments" rows="4"></textarea>
                            </div>
                        </div>                
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <button type="submit" class="btn btn-info">Enviar</button>
                            </div>
                        </div>                
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection