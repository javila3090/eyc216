@extends('layouts.base')

@section('content')

<!-- ##### Breadcumb Area End ##### -->
<div class="breadcumb-area box-shadow bg-overlay-header">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12 col-md-12">
                <div class="breadcumb-text text-center">
                    <h2>Nosotros</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ##### About Area Start ##### -->
<section class="cryptos-about-area section-padding-100">
    <div class="container">
        <div class="row align-items-center" >
            <div class="col-12 col-md-6">
                <div class="about-content">
                    <div class="section-heading wow bounceInUp">
                        <h3>{{$aboutUs->title}}</h3>
                        <h5>{{$aboutUs->subtitle}}</h5>
                        <p>{!!$aboutUs->content!!}</p>                        
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="about-thumbnail">
                    <img src="{{$aboutUs->image}}" class="img img-fluid rounded wow bounceInDown">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### About Area End ##### -->


@endsection