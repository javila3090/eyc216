 <!-- ##### Hero Area Start ##### -->
 <section class="hero-area">
    <div class="hero-slides owl-carousel" style="border-bottom: 3px solid #3599db">
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
                                <h2 data-animation="{{$i==1 ? 'bounceInDown' : 'bounceInRight'}}" class="title-regular color-dark-blue" data-delay="100ms">{{$v->title}}</h2>
                                @if($v->subtitle)
                                    <h6 data-animation="{{$i==1 ? 'lightSpeedIn' : 'rollIn'}}" class="subtitle-regular size-28px color-dark-blue" data-delay="400ms">{{$v->subtitle}}</h6>
                                @endif
                                @if($v->caption)
                                    <h6 data-animation="{{$i==1 ? 'bounceInUp' : 'rotateIn'}}" class="subtitle-regular banner-caption size-16px color-dark-blue" data-delay="700ms">{!!$v->caption!!}</h6>
                                @endif
                                @if($v->button)
                                    <a href="{{route($v->target->display_name)}}" class="btn btn-info size-18px" data-animation="fadeInUp" data-delay="700ms"><b>{!!$v->button!!}</b></a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @php $i++ @endphp;
        @endforeach
    </div>
    <!--<div class="slider-area section-padding-100">
        <div class="camera_wrap camera_azure_skin" id="camera_wrap_1">
            @foreach($homeBanners as $v)
            <div data-thumb="uploads/thumbs/slide2.jpg" data-src="{{$v->image}}">
                <div class="camera_caption slide5 fadeFromLeft"> 
                    <div class="slide5-style">
                        <h2 data-animation="bounceInDown" class="title-regular size-36px color-blue" data-delay="100ms">{{$v->title}}</h2>
                        @if($v->subtitle)
                        <h6 data-animation="bounceInUp" class="subtitle-regular size-26px" data-delay="400ms">{{$v->subtitle}}</h6>
                        @endif
                        @if($v->caption)
                        <h6 data-animation="bounceInUp" class="subtitle-regular size-18px color-black" style="width: 50%" data-delay="700ms">{!!$v->caption!!}</h6>
                        @endif
                        @if($v->button)
                        <a href="#" class="btn cryptos-btn" data-animation="fadeInUp" data-delay="700ms">{!!$v->button!!}</a>
                        @endif
                    </div>
                </div>  
            </div>
            @endforeach
        </div>
    </div><!-- Slider Area -->    
</section>
<!-- ##### Hero Area End ##### -->