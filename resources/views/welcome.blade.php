@extends('layouts.base')

@section('content')

@include('partials.banner')
<!-- ##### About Area Start ##### -->
<section class="cryptos-about-area section-padding-100-0">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-md-6">
                <div class="about-content">
                    <div class="section-heading">
                        <h3><b>{{$aboutUs->title}}</b></h3>
                        <hr>
                        <br>
                        <h5>{!! $aboutUs->content !!}</h5>

                        <a href="#" class="btn cryptos-btn mt-20">Saber más</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="about-thumbnail text-center">
                    <img src="{{$aboutUs->image}}" width="400">
                </div>
            </div>
        </div>
    </div>
    <hr>
</section>

@if($secondary)
<div class="cryptos-feature-area section-padding-50-100">
    <div class="container-fluid main-text">
        <div class="row">
            <div class="col-12 col-md-12">
                <div class="section-heading mx-auto wow fadeInDown">
                    <h3 class="text-center"><b>{{$secondary->title}}</b></h3>
                    <div class="heading-line"></div>
                </div>
            </div>
        </div>
        @if($secondary->content && !$secondary->image)
        <div class="row">
            <div class="col-12 col-md-12 text-justify wow fadeInUp">
                <div class="size-18px">{!!$secondary->content!!}</div>
            </div>
        </div>
        <br>
        @elseif($secondary->content && $secondary->image)
        <div class="row">
            <div class="col-12 col-md-6 text-justify wow bounceInLeft">
                <div class="size-14px">{!!$secondary->content!!}</div>
            </div>
            <div class="col-12 col-md-6 text-justify wow bounceInRight">
                <img src="{{$secondary->image}}" class="img rounded"/>
            </div>
        </div>
        <br>
        @endif
        <br>
        <br>
        <div class="row">
        @php
            $i = 1;
        @endphp
        @foreach($secondaryBanner as $v)
            <!-- Single Course Area -->
                <div class="col-4 col-md-4 col-xs-12">
                    <div class="guideline-content">

                    </div>
                    <div class="single-feature-area mb-30 text-center wow rollIn box-shadow size-16px">
                        <h3>{!!$v->title!!}</h3>
                        <hr>
                        @if($v->image!='')<img src="{{$v->image}}" class="img rounded"/>@endif
                        <p>{!!$v->caption!!}</p>
                        @if($v->button)
                            <a href="{{route($v->target->display_name)}}" class="btn cryptos-btn mt-20">{!!$v->button!!}</a>
                        @endif
                    </div>
                </div>
                @php
                    $i++;
                @endphp
            @endforeach
        </div>
    </div>
</div>
@endif
<!-- ##### Course Area End ##### -->

<!-- ##### Currency Area Start ##### -->
<!--<section class="currency-calculator-area section-padding-100 bg-img bg-overlay" style="background-image: url(img/bg-img/bg-2.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading text-center white mx-auto">
                    <h3 class="mb-4">Cryptocurrency Calculator</h3>
                    <h5 class="mb-2">Cras vitae turpis lacinia, lacinia lacus non, fermentum nisi. Donec et sollicitudin est, in euismod erat. Ut at erat et arcu pulvinar cursus a eget nisl.</h5>
                    <p>Cras vitae turpis lacinia, lacinia lacus non, fermentum nisi. Donec et sollicitudin est, in euismod erat. Ut at erat et arcu pulvinar cursus a eget nisl. Cras vitae turpis lacinia, lacinia lacus non, fermentum nisi.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="currency-calculator mb-15 clearfix">
                    <form action="#" method="post" class="d-flex align-items-center justify-content-center">
                        
                        <div class="calculator-first-part d-flex align-items-center">
                            <input type="text" name="inputNumber" placeholder="1">
                            <select>
                                <option>BTC</option>
                                <option>USD</option>
                                <option>INR</option>
                                <option>BDT</option>
                            </select>
                        </div>

                        
                        <div class="equal-sign">=</div>

                        
                        <div class="calculator-sec-part d-flex align-items-center">
                            <input type="text" name="inputNumber" placeholder="940045">
                            <select>
                                <option>EUR</option>
                                <option>USD</option>
                                <option>INR</option>
                                <option>BDT</option>
                            </select>
                        </div>
                    </form>
                </div>

                <div class="currency-calculator mb-15">
                    <form action="#" method="post" class="d-flex align-items-center justify-content-center">
                        
                        <div class="calculator-first-part d-flex align-items-center">
                            <input type="text" name="inputNumber" placeholder="10400">
                            <select>
                                <option>USD</option>
                                <option>BTC</option>
                                <option>INR</option>
                                <option>BDT</option>
                            </select>
                        </div>

                        
                        <div class="equal-sign">=</div>

                        
                        <div class="calculator-sec-part d-flex align-items-center">
                            <input type="text" name="inputNumber" placeholder="1.02">
                            <select>
                                <option>BTC</option>
                                <option>USD</option>
                                <option>INR</option>
                                <option>BDT</option>
                            </select>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>-->
<!-- ##### Currency Area End ##### -->
@endsection
