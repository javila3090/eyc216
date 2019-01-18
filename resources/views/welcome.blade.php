@extends('layouts.base')

@section('content')


<!-- ##### Course Area Start ##### -->
<br>
<br>
<br>
<br>
@if($secondary)
<div class="cryptos-feature-area section-padding-100-70">
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
    </div>
</div>
@endif
<!-- ##### Course Area End ##### -->

<!-- ##### About Area Start ##### -->
<!--<section class="cryptos-about-area">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-md-6">
                <div class="about-thumbnail mb-100">
                    <img src="img/bg-img/about.png" alt="">
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="about-content mb-100">
                    <div class="section-heading">
                        <h3>Let’s change <br><span>the world</span> together</h3>
                        <h5>Cras vitae turpis lacinia, lacinia lacus non, fermentum nisi. Donec et sollicitudin est, in euismod erat. Ut at erat et arcu pulvinar cursus a eget nisl.</h5>
                        <p>Cras vitae turpis lacinia, lacinia lacus non, fermentum nisi. Donec et sollicitudin est, in euismod erat. Ut at erat et arcu pulvinar cursus a eget nisl. Cras vitae turpis lacinia, lacinia lacus non, fermentum nisi.</p>
                        <a href="#" class="btn cryptos-btn mt-30">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>-->
<!-- ##### About Area End ##### -->

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
