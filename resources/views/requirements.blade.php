@extends('layouts.base')

@section('content')

<!-- ##### Breadcumb Area End ##### -->
<div class="breadcumb-area box-shadow bg-overlay-header">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12 col-md-12">
                <div class="breadcumb-text text-center">
                    <h2>Requisitos y atención especial</h2>
                </div>
            </div>
        </div>
    </div>
</div>

@if($requirements)
<section class="cryptos-video-area section-padding-100-0">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-md-5">
                <div class="video-area wow fadeInLeftBig">
                    <img src="{{$requirements->image}}" class="rounded box-shadow">
                </div>
            </div>
            <div class="col-12 col-md-7">
                <div class="about-content resp-padding-40-0">
                    <div class="section-heading wow fadeInRightBig">
                        <h3>{{$requirements->title}}</h3>
                        <h5>{{$requirements->subtitle}}</h5>
                        <p>{!!$requirements->content!!}</p>                    
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endif

@if($special_atentions)
<section class="cryptos-video-area section-padding-100-0">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-md-5">
                <div class="video-area wow fadeInLeftBig">
                    <img src="{{$special_atentions->image}}" class="rounded box-shadow">
                </div>
            </div>
            <div class="col-12 col-md-7">
                <div class="about-content resp-padding-40-0">
                    <div class="section-heading wow fadeInRightBig">
                        <h3>{{$special_atentions->title}}</h3>
                        <h5>{{$special_atentions->subtitle}}</h5>
                        <p>{!!$special_atentions->content!!}</p>                    
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endif

@if($company_programs)
<section class="cryptos-video-area section-padding-100">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-md-5">
                <div class="video-area wow fadeInLeftBig">
                    <img src="{{$company_programs->image}}" class="rounded box-shadow">
                </div>
            </div>
            <div class="col-12 col-md-7">
                <div class="about-content resp-padding-40-0">
                    <div class="section-heading wow fadeInRightBig">
                        <h3>{{$company_programs->title}}</h3>
                        <h5>{{$company_programs->subtitle}}</h5>
                        <p>{!!$company_programs->content!!}</p>                    
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endif

@endsection