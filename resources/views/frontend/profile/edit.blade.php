<x-front-layout>
    <!--Page Title-->
    <section class="page-title centred" style="background-image: url({{asset('front/images/banner/edit.jpg')}});">
        <div class="auto-container">
            <div class="content-box clearfix">
                <h1>Perfil de usuario </h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="">Inicio</a></li>
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
                                          action="{{ route('userProfile.update') }}">
                                        @csrf
                                        @method('patch')
                                        <div class="form-group">
                                            <div class="col-md-6">
                                                <div class="form-option">
                                                    <label for="name">Nombre</label>
                                                    <input class="valid required" name="name" type="text" id="name"
                                                           value="{{ Auth::user()->name }}">
                                                    <x-input-error :messages="$errors->get('name')"
                                                                   class="mt-2"/>
                                                </div>
                                                <div class="form-option">
                                                    <label for="lastname">Apellido</label>
                                                    <input class="required" name="lastname" type="text" id="lastname"
                                                           value="{{ Auth::user()->lastname }}">
                                                    <x-input-error :messages="$errors->get('lastname')"
                                                                   class="mt-2"/>
                                                </div>
                                                <div class="form-option">
                                                    <label for="username">Nombre de usuario</label>
                                                    <input class="required" name="username" type="text" id="username"
                                                           value="{{ Auth::user()->username }}">
                                                    <x-input-error :messages="$errors->get('username')"
                                                                   class="mt-2"/>
                                                </div>
                                                <div class="form-option">
                                                    <label for="email">Email *</label>
                                                    <input class="email required valid" name="email" type="email"
                                                           id="email"
                                                           value="{{ Auth::user()->email }}" disabled>
                                                    <x-input-error :messages="$errors->get('email')"
                                                                   class="mt-2"/>
                                                </div>
                                                <div class="form-option">
                                                    <label for="address">Direccion</label>
                                                    <input class="digits" name="address" type="text" id="address"
                                                           value="{{ Auth::user()->address }}">
                                                    <x-input-error :messages="$errors->get('address')"
                                                                   class="mt-2"/>
                                                </div>
                                                <div class="form-option">
                                                    <label for="jobtitle">Posición / Cargo</label>
                                                    <input class="digits" name="jobtitle" type="text" id="jobtitle"
                                                           value="{{ Auth::user()->jobtitle }}">
                                                    <x-input-error :messages="$errors->get('jobtitle')"
                                                                   class="mt-2"/>
                                                </div>
                                                <div class="form-option">
                                                    <label for="phone">Telefono</label>
                                                    <input class="digits" name="phone" type="text" id="phone"
                                                           value="{{ Auth::user()->phone }}">
                                                    <x-input-error :messages="$errors->get('phone')"
                                                                   class="mt-2"/>
                                                </div>
                                                <div class="form-option">
                                                    <label for="city">Ciudad</label>
                                                    <input class="url" name="city" type="text" id="city"
                                                           value="{{ Auth::user()->city }}">
                                                    <x-input-error :messages="$errors->get('city')"
                                                                   class="mt-2"/>
                                                </div>
                                                <div class="form-option">
                                                    <label for="country">Pais</label>
                                                    <input class="url" name="country" type="text" id="country"
                                                           value="{{ Auth::user()->country }}">
                                                    <x-input-error :messages="$errors->get('country')"
                                                                   class="mt-2"/>
                                                </div>
                                                <div class="form-option">
                                                    <label for="aboutme">Sobre Mi</label>
                                                    <textarea name="aboutme" id="aboutme" rows="3"
                                                              cols="30">{{ Auth::user()->aboutme }}</textarea>
                                                    <x-input-error :messages="$errors->get('aboutme')"
                                                                   class="mt-2"/>
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
                                                <h4>Perfil actualizado.</h4>
                                            </blockquote>
                                        @endif
                                    </form>
                                    <!-- #inspiry-edit-user -->
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
