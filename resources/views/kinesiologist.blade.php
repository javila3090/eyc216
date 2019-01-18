@extends('layouts.base')

@section('content')

<!-- ##### Breadcumb Area Start ##### -->
<div class="breadcumb-area box-shadow bg-overlay-header">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12 col-md-12">
                <div class="breadcumb-text text-center">
                    <h2>Aprende</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ##### Breadcumb Area End ##### -->

<!-- ##### Course Area Start ##### -->
@if($kinesiologist)
<div class="cryptos-feature-area section-padding-50-50">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 col-xs-12">                
                <div class="d-flex flex-row mt-2">
                    <div class="row">
                        <div class="col-md-3">
                            <ul class="nav nav-tabs nav-tabs--vertical nav-tabs--left" role="navigation" style="letter-spacing: 1px">
                                <li class="nav-item">
                                    <a href="#tab_1" class="nav-link active" data-toggle="tab" role="tab" aria-controls="tab_1">{{$kinesiologist->title}}</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#tab_2" class="nav-link" data-toggle="tab" role="tab" aria-controls="tab_2">Áreas de la kinesiología</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#tab_3" class="nav-link" data-toggle="tab" role="tab" aria-controls="tab_3">Información útil</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#tab_4" class="nav-link" data-toggle="tab" role="tab" aria-controls="tab_4">Síntomas y dolores</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-9">
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="tab_1" role="tabpanel" style="padding: 20px;">
                                    <h2>{{$kinesiologist->title}}</h2>
                                    <br>
                                    {!!$kinesiologist->content!!}
                                </div>
                                <div class="tab-pane fade" id="tab_2" role="tabpanel" style="padding: 20px;">
                                    <h2>Áreas de la kinesiología</h2>
                                    <br>
                                    <div class="kinesiologist-area">
                                        @foreach($kinesiologist_areas as $item)
                                        <div class="row mb-50">
                                            <div class="col-md-2">
                                                <img src="{{$item->image}}" class="img-fluid" width="200">
                                            </div>
                                            <div class="col-md-10">
                                                {!!$item->caption!!}
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tab_3" role="tabpanel" style="padding: 20px;">
                                    <h2>Información útil</h2>
                                    <br>
                                    <div class="kinesiologist-area">
                                        @foreach($tips as $item)
                                        <div class="row mb-50">
                                            <div class="col-md-3">
                                                <img src="{{$item->image}}" class="img-fluid" width="300">
                                            </div>
                                            <div class="col-md-9">
                                                {!!$item->caption!!}
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tab_4" role="tabpanel" style="padding: 20px;">
                                    <h2>Síntomas y dolores</h2>
                                    <br>
                                    <div class="kinesiologist-area">
                                        @foreach($symptoms as $item)
                                        <div class="row mb-50">
                                            @if($item->image)
                                                <div class="col-md-3">
                                                    <img src="{{$item->image}}" class="img-fluid" width="300">
                                                </div>
                                                <div class="col-md-9">
                                                    {!!$item->caption!!}
                                                </div>
                                            @else
                                                <div class="col-md-12">
                                                    {!!$item->caption!!}
                                                </div>
                                            @endif
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endif

@endsection