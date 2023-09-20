@php
    $categories=App\Models\Configuration::all();
@endphp

<!-- main header -->
<header class="main-header">
    <!-- header-top -->
    <div class="header-top">
        <div class="top-inner clearfix">
            <div class="left-column pull-left">
                <ul class="info clearfix">
{{--                    <li><i class="fas fa-map-marker-alt"></i>{{  $categories[1]->value }} </li>--}}
                    <li><i class="fas fa-clock"></i>{{  $categories[2]->value }}</li>
                    <li><i class="fas fa-phone"></i><a href="tel:+591{{  $categories[3]->value }}">{{  $categories[3]->value }}</a></li>
                </ul>
            </div>
            <div class="right-column pull-right">
                <ul class="social-links clearfix">
                    <li><a href="{{  $categories[4]->value }}" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="{{  $categories[5]->value }}" target="_blank"><i class="fab fa-tiktok"></i></a></li>
                </ul>
                <div class="sign-box">
                    <ul class="social-links clearfix">
                        @php
                            if(Auth::user()){
                        @endphp
                        <li><a href="{{ route('userProfile.edit') }}"><i class="fas fa-user"></i>Mi Perfil</a></li>
                        @if(Auth::user()->role == 'admin' or Auth::user()->role == 'agent')
                            <li><a href="{{ route('dashboard') }}"><i class="fas fa-user"></i>Administrador</a></li>
                        @endif
                        <li>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <a href="{{ route('logout') }}"
                                   onclick="event.preventDefault(); this.closest('form').submit();"><i
                                        class="fa fa-sign-out"></i>Salir</a>
                            </form>
                        </li>
                        @php
                            }else{
                        @endphp
                        <a href="{{ route('user.signin') }}"><i class="fas fa-user"></i>Ingresar</a>
                        @php
                            }
                        @endphp
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- header-lower -->

    @php
        $currenturl = Request::path();
//        dd($currenturl);
    @endphp
    <div class="header-lower">
        <div class="outer-box">
            <div class="main-box">
                <div class="logo-box">
                    <figure class="logo">
                        <a href="{{ route('index') }}"><img
                                alt="{{ config('app.name', 'ProPropiedades') }}"
                                src="{{ asset('backend/assets/images/logo/PROpiedades_03.png') }}"
                                style="width: 70%"></a>
                    </figure>
                </div>
                <div class="menu-area clearfix">
                    <!--Mobile Navigation Toggler-->
                    <div class="mobile-nav-toggler">
                        <i class="icon-bar"></i>
                        <i class="icon-bar"></i>
                        <i class="icon-bar"></i>
                    </div>
                    <nav class="main-menu navbar-expand-md navbar-light">
                        <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent" style="position: relative; float: left">
                            <ul class="navigation clearfix">
                                <li class="@if($currenturl == '/'){{ 'current' }} @endif"><a href="{{ route('index') }}"><span>Inicio</span></a></li>
                                <li class="@if($currenturl == 'about'){{ 'current' }} @endif"><a href="{{ route('about') }}"><span>Nosotros</span></a></li>
{{--                                <li class="@if($currenturl == ''){{ 'current' }} @endif"><a href=""><span>Agentes</span></a></li>--}}
                                <li class="@if($currenturl == route("front.project.index")){{ 'current' }} @endif"><a href="{{ route("front.project.index") }}"><span>Proyectos</span></a></li>
                                <li class="dropdown"><a href="{{ route("front.properties.index", 'allProperties') }}"><span>Propiedades</span></a>
                                    <ul>
                                        <li><a href="/properties/filter?tipo=Venta&search=&city=Ciudad&property_type=Todos">Venta</a></li>
                                        <li><a href="/properties/filter?tipo=Alquiler&search=&city=Ciudad&property_type=Todos">Alquiler</a></li>
                                        <li><a href="/properties/filter?tipo=Roomie&search=&city=Ciudad&property_type=Todos">Roomie</a></li>
                                        <li><a href="/properties/filter?tipo=Anticretico&search=&city=Ciudad&property_type=Todos">Anticretico</a></li>
                                    </ul>
                                </li>
{{--                                <li><a href=""><span>Blog</span></a></li>--}}
                                <li class="@if($currenturl === 'contact'){{ 'current' }} @endif"><a href="/contact"><span>Contacto</span></a></li>
{{--                                <li><a class="theme-btn btn-one" sstyle="background-color: red" href="{{ route("admin.properties.register") }}"><span>+</span>Contruye con nosotros</a></li>--}}
                            </ul>
                        </div>
                        <div class="btn-box" style="position: relative; float: right; top: 10px">
                            <a class="theme-btn btn-one" href="https://www.facebook.com/egroupconstructora" target="_blank"><span>+</span>Contruye con nosotros</a>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <!--sticky Header-->
    <div class="sticky-header">
        <div class="outer-box">
            <div class="main-box">
                <div class="logo-box">
                    <figure class="logo"><a href="{{ route('index') }}"><img alt=""
                                                                             src="{{ asset('backend/assets/images/logo/PROpiedades_03.png') }}"
                                                                             style="width: 70%"></a></figure>
                </div>
                <div class="menu-area clearfix">
                    <nav class="main-menu clearfix">
                        <!--Keep This Empty / Menu will come through Javascript-->
                    </nav>
                </div>

            </div>
        </div>
    </div>
</header>
<!-- main-header end -->
