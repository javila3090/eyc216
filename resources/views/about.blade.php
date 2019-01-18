@extends('layouts.base')

@section('content')

<!-- ##### Breadcumb Area End ##### -->
<div class="breadcumb-area box-shadow bg-overlay-header">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12 col-md-12">
                <div class="breadcumb-text text-center">
                    <h2>{{$aboutUs->title}}</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ##### About Area Start ##### -->
<section class="cryptos-about-area section-padding-50">
    <div class="container">
        <div class="row align-items-center" >
            <div class="">
                <div class="about-content text-center">
                    <div class="wow bounceInUp">
                        <p>{!!$aboutUs->content!!}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### About Area End ##### -->


@endsection