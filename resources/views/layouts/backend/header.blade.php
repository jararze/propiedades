<header class="top-header">
    <nav class="navbar navbar-expand gap-3 align-items-center">
        <div class="mobile-toggle-icon fs-3">
            <i class="bi bi-list"></i>
        </div>
        <form class="searchbar">
            <div class="position-absolute top-50 translate-middle-y search-icon ms-3"><i class="bi bi-search"></i>
            </div>
            <input class="form-control" type="text" placeholder="Escribe algo para la busqueda">
            <div class="position-absolute top-50 translate-middle-y search-close-icon"><i class="bi bi-x-lg"></i>
            </div>
        </form>
        <div class="top-navbar-right ms-auto">
            <ul class="navbar-nav align-items-center">
                <li class="nav-item search-toggle-icon">
                    <a class="nav-link" href="#">
                        <div class="">
                            <i class="bi bi-search"></i>
                        </div>
                    </a>
                </li>

                <li class="nav-item dropdown dropdown-large">
                    <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown">
                        <div class="projects">
                            <i class="bi bi-grid-3x3-gap-fill"></i>
                        </div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end">
                        <div class="row row-cols-3 gx-2">
                            <div class="col">
                                <a href="{{ route('admin.configuration.index.menu') }}">
                                    <div class="apps p-2 radius-10 text-center">
                                        <div class="apps-icon-box mb-1 text-white bg-gradient-purple">
                                            <i class="bi bi-info-circle-fill"></i>
                                        </div>
                                        <p class="mb-0 apps-name">Cabecera</p>
                                    </div>
                                </a>
                            </div>
                            <div class="col">
                                <a href="{{ route('admin.users.index') }}">
                                    <div class="apps p-2 radius-10 text-center">
                                        <div class="apps-icon-box mb-1 text-white bg-gradient-info">
                                            <i class="bi bi-people-fill"></i>
                                        </div>
                                        <p class="mb-0 apps-name">Usuarios</p>
                                    </div>
                                </a>
                            </div>
                            <div class="col">
                                <a href="{{ route('admin.properties.index') }}">
                                    <div class="apps p-2 radius-10 text-center">
                                        <div class="apps-icon-box mb-1 text-white bg-gradient-success">
                                            <i class="bi bi-building-add"></i>
                                        </div>
                                        <p class="mb-0 apps-name">Propiedades</p>
                                    </div>
                                </a>
                            </div>
                            <div class="col">
                                <a href="{{ route('admin.project.index') }}">
                                    <div class="apps p-2 radius-10 text-center">
                                        <div class="apps-icon-box mb-1 text-white bg-gradient-danger">
                                            <i class="fa-solid fa-building-shield"></i>
                                        </div>
                                        <p class="mb-0 apps-name">Proyectos</p>
                                    </div>
                                </a>
                            </div>
                            <div class="col">
                                <a href="{{ route('admin.profile.edit') }}">
                                    <div class="apps p-2 radius-10 text-center">
                                        <div class="apps-icon-box mb-1 text-white bg-gradient-warning">
                                            <i class="bi bi-person-circle"></i>
                                        </div>
                                        <p class="mb-0 apps-name">Mi cuenta</p>
                                    </div>
                                </a>
                            </div>
                            <div class="col">
                                <a href="{{ route('admin.cities.index') }}">
                                    <div class="apps p-2 radius-10 text-center">
                                        <div class="apps-icon-box mb-1 text-white bg-gradient-voilet">
                                            <i class="fa-solid fa-city"></i>
                                        </div>
                                        <p class="mb-0 apps-name">Ciudades</p>
                                    </div>
                                </a>
                            </div>
                            <div class="col">
                                <a href="{{ route('admin.packages.index') }}">
                                    <div class="apps p-2 radius-10 text-center">
                                        <div class="apps-icon-box mb-1 text-white bg-gradient-branding">
                                            <i class="bi bi-cart-check-fill"></i>
                                        </div>
                                        <p class="mb-0 apps-name">Paquetes</p>
                                    </div>
                                </a>
                            </div>
                            <div class="col">
                                <a href="{{ route('admin.markAsRead.index') }}">
                                    <div class="apps p-2 radius-10 text-center">
                                        <div class="apps-icon-box mb-1 text-white bg-gradient-desert">
                                            <i class="bi bi-bell-fill"></i>
                                        </div>
                                        <p class="mb-0 apps-name">Notificaciones</p>
                                    </div>
                                </a>
                            </div>
                            <div class="col">
                                <a href="{{ route('admin.configuration.advertising.index') }}">
                                    <div class="apps p-2 radius-10 text-center">
                                        <div class="apps-icon-box mb-1 text-white bg-gradient-amour">
                                            <i class="bi bi-tv"></i>
                                        </div>
                                        <p class="mb-0 apps-name">Publicidad</p>
                                    </div>
                                </a>
                            </div>
                        </div><!--end row-->
                    </div>
                </li>
                <li class="nav-item dropdown dropdown-large">
                    <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown">
                        <div class="notifications">
                            @if(count(auth()->user()->unreadNotifications))
                                <span class="notify-badge">
                                    {{ count(auth()->user()->unreadNotifications) }}
                                    </span>
                            @endif
                            <i class="bi bi-bell-fill"></i>
                        </div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end p-0">
                        <div class="p-2 border-bottom m-2">
                            <h5 class="h5 mb-0">Notificaciones</h5>
                        </div>
                        <div class="header-notifications-list p-2">
                            @foreach(auth()->user()->unreadNotifications as $notification)
                                {{--                                <a class="dropdown-item" href="{{ route('admin.markAsRead') }}">--}}
                                <div class="d-flex align-items-center dropdown-item">
                                    <div class="notification-box {{ $notification->data['color'] }}">
                                        <i class="{{ $notification->data['icon'] }}"></i>
                                    </div>
                                    <div class="ms-3 flex-grow-1">
                                        <h6 class="mb-0 dropdown-msg-user">{{ $notification->data['name'] }}
                                            <span
                                                class="msg-time float-end text-secondary">{{ $notification->created_at->diffForHumans() }}</span>
                                        </h6>
                                        <small class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">
                                            @switch($notification->data['type'])
                                                @case('Property')
                                                    Nueva propiedad- {{ $notification->data['created_by'] }}
                                                    @break

                                                @case('Project')
                                                    Nuevo proyecto- {{ $notification->data['created_by'] }}
                                                    @break

                                                @default
                                                    Default case...
                                            @endswitch
                                        </small>
                                    </div>
                                </div>
                                {{--                                </a>--}}
                            @endforeach
                            {{--                            <a class="dropdown-item" href="#">--}}
                            {{--                                <div class="d-flex align-items-center">--}}
                            {{--                                    <div class="notification-box bg-light-purple text-purple"><i--}}
                            {{--                                            class="bi bi-people-fill"></i></div>--}}
                            {{--                                    <div class="ms-3 flex-grow-1">--}}
                            {{--                                        <h6 class="mb-0 dropdown-msg-user">New Customers <span--}}
                            {{--                                                class="msg-time float-end text-secondary">7 m</span></h6>--}}
                            {{--                                        <small--}}
                            {{--                                            class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">5--}}
                            {{--                                            new user registered</small>--}}
                            {{--                                    </div>--}}
                            {{--                                </div>--}}
                            {{--                            </a>--}}
                            {{--                            <a class="dropdown-item" href="#">--}}
                            {{--                                <div class="d-flex align-items-center">--}}
                            {{--                                    <div class="notification-box bg-light-success text-success"><i--}}
                            {{--                                            class="bi bi-file-earmark-bar-graph-fill"></i></div>--}}
                            {{--                                    <div class="ms-3 flex-grow-1">--}}
                            {{--                                        <h6 class="mb-0 dropdown-msg-user">24 PDF File <span--}}
                            {{--                                                class="msg-time float-end text-secondary">2 h</span></h6>--}}
                            {{--                                        <small--}}
                            {{--                                            class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">The--}}
                            {{--                                            pdf files generated</small>--}}
                            {{--                                    </div>--}}
                            {{--                                </div>--}}
                            {{--                            </a>--}}
                            {{--                            <a class="dropdown-item" href="#">--}}
                            {{--                                <div class="d-flex align-items-center">--}}
                            {{--                                    <div class="notification-box bg-light-orange text-orange"><i--}}
                            {{--                                            class="bi bi-collection-play-fill"></i></div>--}}
                            {{--                                    <div class="ms-3 flex-grow-1">--}}
                            {{--                                        <h6 class="mb-0 dropdown-msg-user">Time Response <span--}}
                            {{--                                                class="msg-time float-end text-secondary">3 h</span></h6>--}}
                            {{--                                        <small--}}
                            {{--                                            class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">5.1--}}
                            {{--                                            min avarage time response</small>--}}
                            {{--                                    </div>--}}
                            {{--                                </div>--}}
                            {{--                            </a>--}}
                            {{--                            <a class="dropdown-item" href="#">--}}
                            {{--                                <div class="d-flex align-items-center">--}}
                            {{--                                    <div class="notification-box bg-light-info text-info"><i--}}
                            {{--                                            class="bi bi-cursor-fill"></i></div>--}}
                            {{--                                    <div class="ms-3 flex-grow-1">--}}
                            {{--                                        <h6 class="mb-0 dropdown-msg-user">New Product Approved <span--}}
                            {{--                                                class="msg-time float-end text-secondary">1 d</span></h6>--}}
                            {{--                                        <small--}}
                            {{--                                            class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">Your--}}
                            {{--                                            new product has approved</small>--}}
                            {{--                                    </div>--}}
                            {{--                                </div>--}}
                            {{--                            </a>--}}
                            {{--                            <a class="dropdown-item" href="#">--}}
                            {{--                                <div class="d-flex align-items-center">--}}
                            {{--                                    <div class="notification-box bg-light-pink text-pink"><i--}}
                            {{--                                            class="bi bi-gift-fill"></i></div>--}}
                            {{--                                    <div class="ms-3 flex-grow-1">--}}
                            {{--                                        <h6 class="mb-0 dropdown-msg-user">New Comments <span--}}
                            {{--                                                class="msg-time float-end text-secondary">2 w</span></h6>--}}
                            {{--                                        <small--}}
                            {{--                                            class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">New--}}
                            {{--                                            customer comments recived</small>--}}
                            {{--                                    </div>--}}
                            {{--                                </div>--}}
                            {{--                            </a>--}}
                        </div>
                        <div class="p-2">
                            <div>
                                <hr class="dropdown-divider">
                            </div>
                            <a class="dropdown-item" href="{{ route('admin.markAsRead') }}">
                                <div class="text-center">Marcar todas como leidas</div>
                            </a>
                            <a class="dropdown-item" href="{{ route('admin.markAsRead.index') }}">
                                <div class="text-center">Ver todas las notificaciones</div>
                            </a>
                        </div>
                    </div>
                </li>
                <li class="nav-item dropdown dropdown-user-setting">
                    <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown">
                        <div class="user-setting d-flex align-items-center">
                            {{--                            <img src="{{ asset('backend/assets/images/avatars/avatar-1.png') }}" class="user-img" alt="">--}}
                            <img
                                src="{{ (!empty(Auth::user()->photo)) ? url('upload/profiles/'.Auth::user()->photo) : url('upload/No_Image_Available.jpg') }}"
                                class="user-img" alt="">
                        </div>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li>
                            <a class="dropdown-item" href="#">
                                <div class="d-flex align-items-center">
                                    {{--                                    <img src="{{ asset('backend/assets/images/avatars/avatar-1.png') }}" alt="" class="rounded-circle" width="54" height="54">--}}
                                    <img
                                        src="{{ (!empty(Auth::user()->photo)) ? url('upload/profiles/'.Auth::user()->photo) : url('upload/No_Image_Available.jpg') }}"
                                        alt="" class="rounded-circle" width="54" height="54">
                                    <div class="ms-3">
                                        <h6 class="mb-0 dropdown-user-name">{{ Auth::user()->name }}</h6>
                                        <small class="mb-0 dropdown-user-designation text-secondary">----------</small>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{ route('admin.profile.edit') }}">
                                <div class="d-flex align-items-center">
                                    <div class=""><i class="bi bi-person-fill"></i></div>
                                    <div class="ms-3"><span>Perfil</span></div>
                                </div>
                            </a>
                        </li>
{{--                        <li>--}}
{{--                            <a class="dropdown-item" href="#">--}}
{{--                                <div class="d-flex align-items-center">--}}
{{--                                    <div class=""><i class="bi bi-gear-fill"></i></div>--}}
{{--                                    <div class="ms-3"><span>Setting</span></div>--}}
{{--                                </div>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a class="dropdown-item" href="index2.html">--}}
{{--                                <div class="d-flex align-items-center">--}}
{{--                                    <div class=""><i class="bi bi-speedometer"></i></div>--}}
{{--                                    <div class="ms-3"><span>Dashboard</span></div>--}}
{{--                                </div>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a class="dropdown-item" href="#">--}}
{{--                                <div class="d-flex align-items-center">--}}
{{--                                    <div class=""><i class="bi bi-piggy-bank-fill"></i></div>--}}
{{--                                    <div class="ms-3"><span>Earnings</span></div>--}}
{{--                                </div>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a class="dropdown-item" href="#">--}}
{{--                                <div class="d-flex align-items-center">--}}
{{--                                    <div class=""><i class="bi bi-cloud-arrow-down-fill"></i></div>--}}
{{--                                    <div class="ms-3"><span>Downloads</span></div>--}}
{{--                                </div>--}}
{{--                            </a>--}}
{{--                        </li>--}}
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                    <div class="d-flex align-items-center">
                                        <div class=""><i class="bi bi-lock-fill"></i></div>
                                        <div class="ms-3"><span>Logout</span></div>
                                    </div>
                                </a>
                            </form>

                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>
