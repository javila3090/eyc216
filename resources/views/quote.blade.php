@extends('layouts.base')

@section('content')

<!-- ##### Breadcumb Area Start ##### -->
<div class="breadcumb-area box-shadow bg-overlay-header">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12 col-md-12">
                <div class="breadcumb-text text-center">
                    <h2>Cotizar</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ##### Breadcumb Area End ##### -->

<!-- ##### Course Area Start ##### -->
@if($therapy_types)
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

        <form action="{{route('quote.store')}}" method="POST" enctype="multipart/form-data"  >
            {{ csrf_field() }}
            <div class="row">
                <div class="col-md-8 col-12">
                    <div class="row desktop" style="padding-bottom: 10px;" >
                        <div class="col-md-2 col-2">
                            <h5 class="color-blue size-16px">Código</h5>
                        </div>
                        <div class="col-md-6 col-6">
                            <h5 class="color-blue size-16px">Tipo de terapia</h5>
                        </div>
                        <div class="col-md-4 col-3">
                            <h5 class="color-blue size-16px">Sesiones</h5>
                        </div>
                    </div>
                    <div class="row responsive" style="padding-bottom: 10px;" >
                        <div class="col-md-2 col-sm-3 col-2">
                            <h5 class="color-blue size-16px">Cod.</h5>
                        </div>
                        <div class="col-md-6 col-sm-6 col-6">
                            <h5 class="color-blue size-16px">Terapia</h5>
                        </div>
                        <div class="col-md-4 col-sm-3 col-4">
                            <h5 class="color-blue size-16px">Sesiones</h5>
                        </div>
                    </div>
                    @foreach($therapy_types as $item)
                    <div class="row" style="padding-bottom: 10px;">
                        <div class="col-md-2 col-sm-3 col-2">
                            {{$item->code}}
                        </div>
                        <div class="col-md-6 col-sm-6 col-6">
                            {{$item->name}}
                        </div>
                        <div class="col-md-2 col-sm-3 col-4">
                            @if($item->code=='060-1001')
                            <input class="form-control" type="text" value="2" name="quantity[]" readonly>  
                            @else
                            <input class="form-control" type="text" name="quantity[]">
                            @endif
                            <input class="form-control" type="hidden" name="therapy_type_id[]" value="{{$item->id}}">
                        </div>
                    </div>
                    @endforeach
                    <hr>
                    <div class="row">
                        <div class="col-md-12">
                            <p class="size-12px color-blue" style="letter-spacing: .5px">Si alguna prestación no se encuentra en el formulario o no entiende la letra de su receta u orden médica, adjunte la imagen de la misma. </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Receta u orden médica</label>
                                <input type="file" class="form-control" name="image">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Nombre*</label>
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
                                <label>Teléfono celular*</label>
                                <input type="text" class="form-control" name="phone" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Fecha inicio tratamiento*</label>
                                <input class="form-control datepicker" name="start_date" autocomplete="off" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Hora inicio tratamiento*</label>
                                <select class="form-control" name="start_hour" required>
                                    <option value="09:00">09:00</option>
                                    <option value="10:00">10:00</option>
                                    <option value="11:00">11:00</option>
                                    <option value="12:00">12:00</option>
                                    <option value="13:00">13:00</option>
                                    <option value="14:00">14:00</option>
                                    <option value="15:00">15:00</option>
                                    <option value="16:00">16:00</option>
                                    <option value="17:00">17:00</option>
                                    <option value="18:00">18:00</option>
                                    <option value="19:00">19:00</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Forma de pago*</label>
                                <select class="form-control" name="pay_way" required>
                                    <option value="1">Fonasa</option>
                                    <option value="2">Isapre</option>
                                    <option value="3">Particular</option>                            
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Comentarios o diagnóstico</label>
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
                <div class="col-md-4 col-12 desktop">
                    <h5 class="color-blue size-16px">Cotice su programa con nosotros</h5>
                    <hr>
                    <div class="text-justify size-12px">
                        {!!$companyInfo->review!!}
                        <p class="text-justify size-12px"><i class="fa fa-phone"></i>&nbsp;&nbsp;<b>Teléfono:</b> <br>{{$companyInfo->phone_1}}</p>
                        <p class="text-justify size-12px"><i class="fa fa-envelope"></i>&nbsp;&nbsp;<b>Email:</b> <br>{{$companyInfo->email_1}}</p>
                        <p><i class="fa fa-map-marker"></i>&nbsp;&nbsp;<b>Dirección:</b> <br>{{$companyInfo->address}}</p>
                    </div>
		    <div class="map-container-quote">
			<div class="map">{!! Mapper::render () !!}</div>
		    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endif

@endsection
