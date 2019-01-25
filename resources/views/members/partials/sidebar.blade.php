<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/admin/" class="brand-link">
        <img src="{{asset('img/logo_ja.png')}}" alt="JA Logo" class="brand-image">
        <span class="brand-text font-weight-bold" style="padding: 10px;">WEB ADMIN</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="https://placehold.it/160x160/5CDFFF/0E3066/&text={{ strtoupper(Auth::user()->name[0]) }}" class="img-circle" alt="User Image">

            </div>
            <div class="info">
                <a href="/admin/user" class="d-block">{{\Auth::user()->name}}</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="{{url('/admin/section')}}" class="nav-link">
                        <i class="nav-icon fa fa-list"></i>
                        <p>
                            Páginas
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{url('/admin/banner')}}" class="nav-link">
                        <i class="nav-icon fa fa-image"></i>
                        <p>
                            Banners
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{url('/admin/company')}}" class="nav-link">
                        <i class="nav-icon fa fa-industry"></i>
                        <p>
                            Empresa
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{url('/admin/blog')}}" class="nav-link">
                        <i class="nav-icon fa fa-bookmark"></i>
                        <p>
                            Blog
                        </p>
                    </a>
                </li>      
                <li class="nav-item">
                    <a href="{{url('/admin/user')}}" class="nav-link">
                        <i class="nav-icon fa fa-user"></i>
                        <p>
                            Usuarios
                        </p>
                    </a>
                </li>
                <li class="nav-item responsive">
                    <a href="{{url('/admin/messages')}}" class="nav-link">
                        <i class="nav-icon fa fa-envelope"></i>
                        <p>
                            Mensajes @if(Session::has('unread_messages')) <b>({{ Session::get('unread_messages')}})</b> @endif
                        </p>
                    </a>
                </li>
                <li class="nav-item responsive">
                    <a href="{{url('/admin/quotes')}}" class="nav-link">
                        <i class="nav-icon fa fa-tag"></i>
                        <p>
                            Cotizaciones @if(Session::has('unread_quotes')) <b>({{ Session::get('unread_quotes')}})</b> @endif
                        </p>
                    </a>
                </li>
                <li class="nav-item responsive">
                    <a href="{{url('/admin/agreements')}}" class="nav-link">
                        <i class="nav-icon fa fa-clipboard"></i>
                        <p>
                            Solicitud convenios @if(Session::has('unread_agreements')) <b>({{ Session::get('unread_agreements')}})</b> @endif
                        </p>
                    </a>
                </li>                
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-line-chart"></i>
                        <p>
                            Estadísticas del sitio
                        </p>
                    </a>
                </li>
                <li class="nav-item responsive">
                    <a href="{{url('/')}}" class="nav-link">
                        <i class="nav-icon fa fa-external-link-square"></i>
                        <p>
                            Ir al sitio web
                        </p>
                    </a>
                </li>                
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>