        <div class="cryptos-main-menu">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="cryptosNav">

                        <!-- Logo -->
                        <a href="/"><img src="{{asset('img/logo.png')}}" class="nav-brand float-left img-fluid logo rounded-circle"></a>


                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- close btn -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul class="smooth-scroll ">
                                    <li><a href="{{route('home')}}">Inicio</a></li>
                                    <li><a href="{{route('aboutUs')}}">¿Qué es la masonería?</a></li>
                                    <li><a href="#">Historia</a>
                                        <ul class="dropdown">
                                            <li><a href="{{route('aboutUs')}}">Organización Gran Logia de Inglaterra</a></li>
                                            <li><a href="{{route('requirements')}}">Sede Londres GL Unida de Inglaterra</a></li>
                                            <li><a href="{{route('fonasa_isapre')}}">Fundadores de la Gran Logia de Inglaterra</a></li>
                                            <li><a href="{{route('agreement')}}">Masonería Inglesa en el mundo</a></li>
                                            <li><a href="{{route('agreement')}}">Masonería Inglesa en Chile</a></li>
                                            <li><a href="{{route('agreement')}}">Masones destacados ingleses</a></li>
                                            <li><a href="{{route('agreement')}}">Grandes masones de la historia</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Rito de York</a>
                                        <ul class="dropdown">
                                            <li><a href="{{route('aboutUs')}}">Diferencias rito inglés y escosés</a></li>
                                            <li><a href="{{route('requirements')}}">Grados masónicos rito de york</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Noticias</a>
                                        <ul class="dropdown">
                                            <li><a href="{{route('aboutUs')}}">Noticias del gran oriente inglés</a></li>
                                            <li><a href="{{route('requirements')}}">Noticias escuadra y compás 216</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="{{route('quote')}}">Canal masónico</a></li>
                                    <li><a href="{{route('quote')}}">Logia celestial</a></li>
                                    <li><a href="{{route('quote')}}">Miembros</a></li>
                                    <li><a href="{{route('contact')}}">Contacto</a></li>
                                    @if(\Auth::user())
                                    <li><a href="{{url('/admin')}}">Admin</a></li>
                                    <li>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                        <a href="#" class="size-16px" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        <i class="fa fa-sign-out" title="Salir"></i>
                                        </a>
                                        
                                    </li>
                                    @endif
                                </ul>
                            </div>
                            <!-- Nav End -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>