@extends('layouts.base')

@section('content')

    <div class="cryptos-feature-area section-padding-100-0">
        <div class="container-fluid">
            <div class="row h-100 align-items-center">
                <div class="col-12 col-md-12">
                    <div class=" mb-30 text-center" style="height: 300px; margin-top: 100px;">
                        <i class="fa fa-warning fa-5x"></i>
                        <br>
                        <h1>Error 401</h1>
                        <h3 style="text-transform: none">Disculpe, usted no está autorizado para ingresar a esta sección.</h3>
                        <br>
                        <br>
                        <a href="javascript:history.back()" class="btn btn-danger">Regresar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection