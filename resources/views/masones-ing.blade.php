
@extends('layouts.base')

@section('content')

    <!-- ##### Breadcumb Area End ##### -->
    <div class="breadcumb-area box-shadow bg-overlay-header">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12 col-md-12">
                    <div class="breadcumb-text text-center">
                        <h2>Grandes Masones Ingleses</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### About Area Start ##### -->
    <section class="cryptos-about-area section-padding-50 mb-100">
        <div class="col-10 offset-1">
            <div class="row">
            @foreach($data as $v)
                <!-- Single Course Area -->
                <div class="col-12 col-md-4">
                    <div class="single-feature-area mb-30 text-center wow rollIn box-shadow size-16px" style="min-height: 600px;">
                        <h3>{!!$v->title!!}</h3>
                        <hr>
                        @if($v->image!='')<img src="{{$v->image}}" class="img rounded"/>@endif
                        <p>{!!$v->caption!!}</p>
                        @if($v->button)
                            <a href="{{route($v->target->display_name)}}" class="btn cryptos-btn mt-20">{!!$v->button!!}</a>
                        @endif
                    </div>
                </div>
            @endforeach
            </div>
        </div>
    </section>
    <!-- ##### About Area End ##### -->
@endsection