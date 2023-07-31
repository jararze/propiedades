<x-front-layout>
    {{--    <div class="page-head "--}}
    {{--         style="background: url({{ asset('front/images/banner/edit.jpg') }}) #494c53 no-repeat center center;  background-size: cover;">--}}
    {{--        <div class="container">--}}
    {{--            <div class="page-head-content">--}}
    {{--                <h1 class="page-title"><span>Editar el perfil</span></h1>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}
    {{--    <!-- .page-head -->--}}
    {{--    <div id="content-wrapper" class="site-content-wrapper site-pages">--}}
    {{--        <div id="content" class="site-content layout-boxed">--}}
    {{--            <div class="container">--}}
    {{--                <div class="row">--}}
    {{--                    <div class="col-xs-12 site-main-content">--}}
    {{--                        <main id="main" class="site-main">--}}
    {{--                            <div class="white-box user-profile-wrapper">--}}
    {{--                                <form id="inspiry-edit-user" class="submit-form" method="post"--}}
    {{--                                      action="{{ route('profile.update') }}">--}}
    {{--                                    @csrf--}}
    {{--                                    @method('patch')--}}
    {{--                                    <div class="row">--}}
    {{--                                        <div class="col-md-4">--}}
    {{--                                            <div class="form-option">--}}
    {{--                                                <label for="name">Nombre</label>--}}
    {{--                                                <input class="valid required" name="name" type="text" id="name"--}}
    {{--                                                       value="{{ Auth::user()->name }}">--}}
    {{--                                            </div>--}}
    {{--                                        </div>--}}
    {{--                                        <div class="col-md-4">--}}
    {{--                                            <div class="form-option">--}}
    {{--                                                <label for="lastname">Apellido</label>--}}
    {{--                                                <input class="required" name="lastname" type="text" id="lastname"--}}
    {{--                                                       value="{{ Auth::user()->lastname }}">--}}
    {{--                                            </div>--}}
    {{--                                        </div>--}}
    {{--                                        <div class="col-md-4">--}}
    {{--                                            <div class="form-option">--}}
    {{--                                                <label for="username">Nombre de usuario</label>--}}
    {{--                                                <input class="required" name="username" type="text" id="username"--}}
    {{--                                                       value="{{ Auth::user()->username }}">--}}
    {{--                                            </div>--}}
    {{--                                        </div>--}}
    {{--                                    </div>--}}
    {{--                                    <!-- .row -->--}}
    {{--                                    <div class="row">--}}
    {{--                                        <div class="col-md-4">--}}
    {{--                                            <div class="form-option">--}}
    {{--                                                <label for="email">Email *</label>--}}
    {{--                                                <input class="email required valid" name="email" type="email" id="email"--}}
    {{--                                                       value="{{ Auth::user()->email }}" disabled>--}}
    {{--                                            </div>--}}
    {{--                                        </div>--}}
    {{--                                        <div class="col-md-4">--}}
    {{--                                            <div class="form-option">--}}
    {{--                                                <label for="address">Direccion</label>--}}
    {{--                                                <input class="digits" name="address" type="text" id="address"--}}
    {{--                                                       value="{{ Auth::user()->address }}">--}}
    {{--                                            </div>--}}
    {{--                                        </div>--}}
    {{--                                        <div class="col-md-4">--}}
    {{--                                            <div class="form-option">--}}
    {{--                                                <label for="jobtitle">Posición / Cargo</label>--}}
    {{--                                                <input class="digits" name="jobtitle" type="text" id="jobtitle"--}}
    {{--                                                       value="{{ Auth::user()->jobtitle }}">--}}
    {{--                                            </div>--}}
    {{--                                        </div>--}}
    {{--                                    </div>--}}
    {{--                                    <!-- .row -->--}}
    {{--                                    <div class="row">--}}
    {{--                                        <div class="col-md-4">--}}
    {{--                                            <div class="form-option">--}}
    {{--                                                <label for="phone">Telefono</label>--}}
    {{--                                                <input class="digits" name="phone" type="text" id="phone"--}}
    {{--                                                       value="{{ Auth::user()->phone }}">--}}
    {{--                                            </div>--}}
    {{--                                        </div>--}}
    {{--                                        <div class="col-md-4">--}}
    {{--                                            <div class="form-option">--}}
    {{--                                                <label for="city">Ciudad</label>--}}
    {{--                                                <input class="url" name="city" type="text" id="city"--}}
    {{--                                                       value="{{ Auth::user()->city }}">--}}
    {{--                                            </div>--}}
    {{--                                        </div>--}}
    {{--                                        <div class="col-md-4">--}}
    {{--                                            <div class="form-option">--}}
    {{--                                                <label for="country">Pais</label>--}}
    {{--                                                <input class="url" name="country" type="text" id="country"--}}
    {{--                                                       value="{{ Auth::user()->country }}">--}}
    {{--                                            </div>--}}
    {{--                                        </div>--}}
    {{--                                    </div>--}}
    {{--                                    <!-- .row -->--}}
    {{--                                    <div class="row">--}}
    {{--                                        <div class="col-md-6">--}}
    {{--                                            <div class="form-option">--}}
    {{--                                                <label for="aboutme">Sobre Mi</label>--}}
    {{--                                                <textarea name="aboutme" id="aboutme" rows="3"--}}
    {{--                                                          cols="30">{{ Auth::user()->aboutme }}</textarea>--}}
    {{--                                            </div>--}}
    {{--                                        </div>--}}
    {{--                                    </div>--}}
    {{--                                    <!-- .row -->--}}
    {{--                                    <div class="form-option">--}}
    {{--                                        <input type="submit" id="update-user" name="update-user"--}}
    {{--                                               class="btn-small btn-orange" value="Save Changes">--}}
    {{--                                        <img src="images/ajax-loader-2.gif" id="ajax-loader" alt="Loading...">--}}
    {{--                                    </div>--}}
    {{--                                    <p id="form-message"></p>--}}
    {{--                                    <ul id="form-errors"></ul>--}}
    {{--                                </form>--}}
    {{--                                <!-- #inspiry-edit-user -->--}}
    {{--                            </div>--}}
    {{--                            <!-- .user-profile-wrapper -->--}}

    {{--                            <div class="white-box user-profile-wrapper" style="margin-top: 20px">--}}
    {{--                                <form id="inspiry-edit-user" class="submit-form" method="post" action="{{ route('profile.imageupdate') }}" enctype="multipart/form-data">--}}
    {{--                                    @csrf--}}
    {{--                                    @method('patch')--}}
    {{--                                    <div class="row">--}}
    {{--                                        <div class="col-md-8">--}}
    {{--                                            <div class="form-option user-profile-img-wrapper clearfix">--}}
    {{--                                                <div id="user-profile-img">--}}
    {{--                                                    <div class="profile-thumb">--}}
    {{--                                                        <img class="img-responsive"--}}
    {{--                                                             src="{{ (!empty(Auth::user()->photo)) ? url('upload/profiles/'.Auth::user()->photo) : url('upload/No_Image_Available.jpg') }}"--}}
    {{--                                                             alt="User Image">--}}
    {{--                                                        <input type="hidden" class="profile-image-id"--}}
    {{--                                                               name="profile-image-id" value="4018">--}}
    {{--                                                    </div>--}}
    {{--                                                </div>--}}
    {{--                                                <!-- #user-profile-img -->--}}
    {{--                                                <div class="profile-img-controls">--}}
    {{--                                                    <ul class="field-description list-unstyled">--}}
    {{--                                                        <li><span>*</span>La imagen de perfil debe tener un ancho mínimo y--}}
    {{--                                                            altura de 220px.--}}
    {{--                                                        </li>--}}
    {{--                                                        <li><span>*</span>Asegúrese de guardar los cambios después de cargar el--}}
    {{--                                                            nueva imagen.--}}
    {{--                                                        </li>--}}
    {{--                                                    </ul>--}}
    {{--                                                    <input id="photo" name="photo" type="file"--}}
    {{--                                                           class="btn-default" accept="image/png, image/gif, image/jpeg" required>--}}
    {{--                                                    <a id="select-profile-image" class="btn-default" href="#"><i--}}
    {{--                                                            class="fa fa-picture-o"></i>Cambiar</a>--}}
    {{--                                                    @if (session('status') === 'image-updated')--}}
    {{--                                                        <div id="errors-log">Imagen Actualizada</div>--}}
    {{--                                                        <div id="plupload-container"></div>--}}
    {{--                                                    @endif--}}
    {{--                                                </div>--}}
    {{--                                                <!-- .profile-img-controls -->--}}
    {{--                                            </div>--}}
    {{--                                            <!-- .user-profile-img-wrapper -->--}}
    {{--                                        </div>--}}
    {{--                                    </div>--}}
    {{--                                    <!-- .row -->--}}
    {{--                                    <div class="form-option">--}}
    {{--                                        <input type="submit" id="update-user" name="update-user"--}}
    {{--                                               class="btn-small btn-orange" value="Save Changes">--}}
    {{--                                        <img src="images/ajax-loader-2.gif" id="ajax-loader" alt="Loading...">--}}
    {{--                                    </div>--}}
    {{--                                    <p id="form-message"></p>--}}
    {{--                                    <ul id="form-errors"></ul>--}}
    {{--                                </form>--}}
    {{--                                <!-- #inspiry-edit-user -->--}}
    {{--                            </div>--}}
    {{--                            <!-- .user-profile-wrapper -->--}}

    {{--                            <div class="white-box user-profile-wrapper" style="margin-top: 20px">--}}
    {{--                                <form id="inspiry-edit-user" class="submit-form" method="post"--}}
    {{--                                      action="{{ route('password.update') }} ">--}}
    {{--                                    @csrf--}}
    {{--                                    @method('put')--}}
    {{--                                    <div class="row">--}}
    {{--                                        <div class="col-md-4">--}}
    {{--                                            <div class="form-option">--}}
    {{--                                                <label for="current_password">Contraseña--}}
    {{--                                                    <small>( llene solo cuando desee cambiarla )</small>--}}
    {{--                                                </label>--}}
    {{--                                                <input name="current_password" type="password" id="current_password">--}}
    {{--                                                <x-input-error :messages="$errors->updatePassword->get('current_password')"/>--}}
    {{--                                            </div>--}}
    {{--                                        </div>--}}
    {{--                                    </div>--}}
    {{--                                    <!-- .row -->--}}
    {{--                                    <div class="row">--}}
    {{--                                        <div class="col-md-4">--}}
    {{--                                            <div class="form-option">--}}
    {{--                                                <label for="password">Nueva Contraseña--}}
    {{--                                                    <small></small>--}}
    {{--                                                </label>--}}
    {{--                                                <input name="password" type="password" id="password">--}}
    {{--                                                <x-input-error :messages="$errors->updatePassword->get('password')"/>--}}
    {{--                                            </div>--}}
    {{--                                        </div>--}}
    {{--                                        <div class="col-md-4">--}}
    {{--                                            <div class="form-option">--}}
    {{--                                                <label for="password_confirmation">Confirme Contraseña</label>--}}
    {{--                                                <input name="password_confirmation" type="password"--}}
    {{--                                                       id="password_confirmation">--}}
    {{--                                                <x-input-error--}}
    {{--                                                    :messages="$errors->updatePassword->get('password_confirmation')"/>--}}
    {{--                                            </div>--}}
    {{--                                        </div>--}}
    {{--                                    </div>--}}
    {{--                                    <!-- .row -->--}}
    {{--                                    <div class="form-option">--}}
    {{--                                        <input type="submit" id="update-user" name="update-user"--}}
    {{--                                               class="btn-small btn-orange" value="Save Changes">--}}
    {{--                                    </div>--}}
    {{--                                    @if (session('status') === 'password-updated')--}}
    {{--                                        <p id="form-message">Contraseña actualizada.</p>--}}
    {{--                                        <ul id="form-errors"></ul>--}}
    {{--                                    @endif--}}
    {{--                                </form>--}}
    {{--                                <!-- #inspiry-edit-user -->--}}
    {{--                            </div>--}}
    {{--                            <!-- .user-profile-wrapper -->--}}


    {{--                        </main>--}}
    {{--                        <!-- .site-main -->--}}
    {{--                    </div>--}}
    {{--                    <!-- .site-main-content -->--}}
    {{--                </div>--}}
    {{--                <!-- .row -->--}}
    {{--            </div>--}}
    {{--            <!-- .container -->--}}
    {{--        </div>--}}
    {{--        <!-- .site-content -->--}}
    {{--    </div>--}}
    {{--    <!-- .site-content-wrapper -->--}}

    <!--Page Title-->
    <section class="page-title centred" style="background-image: url({{asset('front/images/banner/edit.jpg')}});">
        <div class="auto-container">
            <div class="content-box clearfix">
                <h1>User Profile </h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="index.html">Inicio</a></li>
                    <li>Perfil Usuario</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->


    <!-- sidebar-page-container -->
    <section class="sidebar-page-container blog-details sec-pad-2">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
                    <div class="blog-sidebar">
                        <div class="sidebar-widget post-widget">
                            <div class="widget-title">
                                <h4>Perfil de usuario</h4>
                            </div>
                            <div class="post-inner">
                                <div class="post">
                                    <figure class="post-thumb"><a href="blog-details.html">
                                            <img
                                                src="{{ (!empty(Auth::user()->photo)) ? url('upload/profiles/'.Auth::user()->photo) : url('upload/No_Image_Available.jpg') }}"
                                                alt=""></a></figure>
                                    <h5><a href="blog-details.html">{{ Auth::user()->name }}</a></h5>
                                    <p>{{ Auth::user()->email }}</p>
                                </div>
                            </div>
                        </div>

                        @include('frontend.profile.innersidebar')

                    </div>
                </div>

                <div class="col-lg-8 col-md-12 col-sm-12 content-side">
                    <div class="blog-details-content">
                        <div class="news-block-one">
                            <div class="inner-box">

                                <div class="lower-content">
                                    <h3>Tus datos</h3>

                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="card-body" style="background-color: #1baf65;">
                                                <h1 class="card-title" style="color: white; font-weight: bold;">0</h1>
                                                <h5 class="card-text" style="color: white;"> Propiedades aprobadas</h5>

                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="card-body" style="background-color: #ffc107;">
                                                <h1 class="card-title" style="color: white; font-weight: bold; ">0</h1>
                                                <h5 class="card-text" style="color: white;"> Propiedades pendientes</h5>

                                            </div>
                                        </div>


                                        <div class="col-md-4">
                                            <div class="card-body" style="background-color: #002758;">
                                                <h1 class="card-title" style="color: white; font-weight: bold;">0</h1>
                                                <h5 class="card-text" style="color: white; "> Propiedades
                                                    rechazadas</h5>

                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="blog-details-content">
                        <div class="news-block-one">
                            <div class="inner-box">

                                <div class="lower-content">
                                    <h3>Perfil</h3>
                                    <hr>
                                    <form id="inspiry-edit-user" class="submit-form default-form" method="post"
                                          action="{{ route('password.update') }} ">
                                        @csrf
                                        @method('put')
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-option">
                                                    <label for="current_password">Contraseña
                                                        <small>( llene solo cuando desee cambiarla )</small>
                                                    </label>
                                                    <input name="current_password" type="password"
                                                           id="current_password">
                                                    <x-input-error
                                                        :messages="$errors->updatePassword->get('current_password')"/>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- .row -->
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-option">
                                                    <label for="password">Nueva Contraseña
                                                        <small></small>
                                                    </label>
                                                    <input name="password" type="password" id="password">
                                                    <x-input-error
                                                        :messages="$errors->updatePassword->get('password')"/>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-option">
                                                    <label for="password_confirmation">Confirme Contraseña</label>
                                                    <input name="password_confirmation" type="password"
                                                           id="password_confirmation">
                                                    <x-input-error
                                                        :messages="$errors->updatePassword->get('password_confirmation')"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group" style="margin-top: 20px">
                                            <button type="submit" id="update-user" name="update-user"
                                                    class="theme-btn btn-one">Guardar
                                            </button>
                                        </div>
                                        @if (session('status') === 'password-updated')
                                            <blockquote style="margin-top: 20px">
                                                <h4>Contraseña actualizada.</h4>
                                            </blockquote>
                                        @endif
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- sidebar-page-container -->


    @include('frontend.components.suscribe')


</x-front-layout>
