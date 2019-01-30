<div class="cryptos-main-menu">
    <div class="classy-nav-container breakpoint-off">
        <div class="container">
            <!-- Menu -->
            <nav class="classy-navbar justify-content-between" id="cryptosNav">

                <!-- Logo -->
                <a href="/"><img src="{{asset('img/logo.png')}}" class="nav-brand float-left img-fluid logo rounded-circle responsive-logo"></a>


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
                        <!--<li><a href="{{route('aboutUs')}}">¿Qué es la masonería?</a></li>-->
                            <li><a href="#">Historia</a>
                                <ul class="dropdown">
                                    <li><a href="{{route('aboutUs')}}">Nosotros</a></li>
                                    <li><a href="{{route('page',2)}}">Organización Gran Logia de Inglaterra</a></li>
                                    <li><a href="{{route('page',12)}}">Sede Londres GL Unida de Inglaterra</a></li>
                                    <li><a href="{{route('page',5)}}">Fundadores de la Gran Logia de Inglaterra</a></li>
                                    <li><a href="{{route('page',13)}}">Masonería Inglesa en el mundo</a></li>
                                    <li><a href="{{route('page',15)}}">Masonería Inglesa en Chile</a></li>
                                    <li><a href="{{route('bigger.masons')}}">Masones destacados ingleses</a></li>
                                    <li><a href="{{route('bigger.history.masons')}}">Grandes masones de la historia</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Rito de York</a>
                                <ul class="dropdown">
                                    <li><a href="{{route('page',8)}}">Diferencias rito inglés y escosés</a></li>
                                    <li><a href="{{route('page',6)}}">Grados masónicos rito de york</a></li>
                                </ul>
                            </li>
                            <li><a href="{{url('/noticias')}}">Noticias</a></li>
                            <li><a href="#">Canal masónico</a></li>
                            <li><a href="{{route('page',10)}}">Logia celestial</a></li>
                            <li><a href="{{route('members.dashboard')}}">Acceso a miembros</a></li>
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
                            @if(\Auth::guard('members')->user())
                                <li>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                    <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                       Salir <i class="fa fa-sign-out" title="Salir"></i>
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