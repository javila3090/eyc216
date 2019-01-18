<footer class="footer-area">
    <!-- Main Footer Area -->
    <div class="main-footer-area section-padding-50-0 bg-img">
        <div class="container">
            <div class="row">

                <!-- Footer Widget Area -->
                <div class="col-12 col-sm-5 col-lg-4">
                    <div class="footer-widget mb-50">
                        <div class="widget-title">
                            <a href="/"><img src="{{asset('img/logo.png')}}" class="img-fluid  rounded-circle" width="100"></a>
                        </div>
                        @if(!empty($companyInfo))
                            <p style="color: white; !important">
                                {!!$companyInfo->review!!}
                            </p>
                            <div class="footer-social-info">
                                <h6 class="color-white"><i class="fa fa-envelope"></i>&nbsp;{{$companyInfo->email_1}}</h6>
                            </div>
                        @endif
                    </div>
                </div>

                <!-- Footer Widget Area -->
                <div class="col-12 col-sm-2 col-lg-4 text-left">

                </div>

                <!-- Footer Widget Area -->
                <div class="col-12 col-md-5 col-lg-4">
                    <div class="footer-widget mb-50">
                        <div class="widget-title">
                            <h6><b>Enlaces rápidos</b></h6>
                        </div>
                        <nav>
                            <ul class="useful-links d-flex justify-content-between flex-wrap">
                                <li><a href="/">Inicio</a></li>
                                <li><a href="{{route('quote')}}">Cotizar</a></li>
                                <li><a href="{{route('kinesiologist')}}">Aprende</a></li>
                                <li><a href="{{route('videos')}}">Videos</a></li>
                                <li><a href="{{route('contact')}}">Contacto</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Bottom Footer Area -->
    <div class="bottom-footer-area">
        <div class="container h-100">
            <div class="row h-100 align-items-center justify-content-center">
                <div class="col-12">
                    <p style="color: white;"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script> @if(!empty($companyInfo)){{$companyInfo->name}}@else Vitamedica @endif | </i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>