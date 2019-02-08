<!-- ##### Hero Area Start ##### -->
<section class="hero-area ">
    <div class="container responsive">
        <div class="col-12 text-center mt-100">
            <h1 class="mt-30">ESCUADRA Y COMPÁS 216</h1>
        </div>
    </div>
    <div class="hero-slides owl-carousel desktop" style="">
    @php
        $i = 1;
    @endphp
    @foreach($homeBanners as $v)
        <!-- Single Hero Slide -->
            <div class="single-hero-slide bg-overlay img-fluid" style="background-image: url('{{$v->image}}'); background-size: 100% 100%">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-md-6 col-xs-12">
                            <div class="hero-slides-content text-left">
                            <!--<h2 data-animation="{{$i==1 ? 'bounceInDown' : 'bounceInRight'}}" class="title-regular color-dark-blue" data-delay="100ms">{{$v->title}}</h2>-->
                                @if($v->subtitle)
                                    <h6 data-animation="{{$i==1 ? 'lightSpeedIn' : 'rollIn'}}" class="subtitle-regular size-28px color-dark-blue" data-delay="400ms">{{$v->subtitle}}</h6>
                                @endif
                                @if($v->caption)
                                    <h6 data-animation="{{$i==1 ? 'bounceInUp' : 'rotateIn'}}" class="subtitle-regular banner-caption size-16px color-dark-blue" data-delay="700ms">{!!$v->caption!!}</h6>
                                @endif
                                @if($v->button)
                                    <a href="" class="btn btn-info size-18px" data-animation="fadeInUp" data-delay="700ms"><b>{!!$v->button!!}</b></a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @php $i++ @endphp;
        @endforeach
    </div>
</section>
<!-- ##### Hero Area End ##### -->