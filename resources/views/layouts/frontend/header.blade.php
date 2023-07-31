<!-- main header -->
<header class="main-header">
    <!-- header-top -->
    <div class="header-top">
        <div class="top-inner clearfix">
            <div class="left-column pull-left">
                <ul class="info clearfix">
                    <li><i class="fas fa-map-marker-alt"></i>San Miguel, </li>
                    <li><i class="fas fa-clock"></i>Lun - Sab 9.00 - 18.00</li>
                    <li><i class="fas fa-phone"></i><a href="tel:2512353256">+59179680616</a></li>
                </ul>
            </div>
            <div class="right-column pull-right">
                <ul class="social-links clearfix">
                    <li><a href="index.html"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="index.html"><i class="fab fa-twitter"></i></a></li>
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
                                        class="fa fa-sign-out"></i>Logout</a>
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
                        <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                            <ul class="navigation clearfix">
                                <li class="current"><a href="{{ route('index') }}"><span>Inicio</span></a></li>
                                <li><a href="{{ route('index') }}"><span>Quienes Somos</span></a></li>
                                <li><a href=""><span>Agentes</span></a></li>
                                <li class="dropdown"><a href=""><span>Propiedades</span></a>
                                    <ul>
                                        <li><a href="">Venta</a></li>
                                        <li><a href="">Alquiler</a></li>
                                        <li><a href="">Anticretico</a></li>
                                    </ul>
                                </li>
                                <li><a href=""><span>Blog</span></a></li>
                                <li><a href=""><span>Contact</span></a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
                <div class="btn-box">
                    <a class="theme-btn btn-one" href="index.html"><span>+</span>Add Listing</a>
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
                <div class="btn-box">
                    <a class="theme-btn btn-one" href="index.html"><span>+</span>Add Listing</a>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- main-header end -->
