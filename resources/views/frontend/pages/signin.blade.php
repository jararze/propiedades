<x-front-layout>

    <section class="page-title-two bg-color-1 centred">
        <div class="pattern-layer">
            <div class="pattern-1" style="background-image: url({{asset('front/assets/images/shape/shape-9.png')}});"></div>
            <div class="pattern-2" style="background-image: url({{asset('front/assets/images/shape/shape-10.png')}});"></div>
        </div>
        <div class="auto-container">
            <div class="content-box clearfix">
                <h1>Ingresar</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="{{ route('index') }}">Inicio</a></li>
                    <li>Ingresar</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->


    <!-- ragister-section -->
    <section class="ragister-section centred sec-pad">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-xl-8 col-lg-12 col-md-12 offset-xl-2 big-column">
                    <div class="sec-title">
                        <h5>Ingresar</h5>
                        <h2>Ingresar a Propropiedades</h2>
                    </div>
                    <div class="tabs-box">
                        <div class="tab-btn-box">
                            <ul class="tab-btns tab-buttons centred clearfix">
                                <li class="tab-btn active-btn" data-tab="#tab-1">Ingresa</li>
                                <li class="tab-btn" data-tab="#tab-2">Registrate</li>
                            </ul>
                        </div>
                        <div class="tabs-content">
                            <div class="tab active-tab" id="tab-1">
                                <div class="inner-box">
                                    <h4>Ingresar</h4>
                                    <form action="{{ route('login') }}" method="post" class="default-form">
                                        @csrf
                                        <div class="form-group">
                                            <label for="email">Correo Electronico</label>
                                            <input id="email" type="email" name="email" required="">
                                            <x-input-error :messages="$errors->get('email')" class="mt-2"/>
                                        </div>
                                        <div class="form-group">
                                            <label for="password">Contraseña</label>
                                            <input id="password" type="password" name="password" required="">
                                            <x-input-error :messages="$errors->get('password')" class="mt-2"/>
                                        </div>
                                        <div class="form-group">
                                            <input id="remember_me" name="remember" class="form-check-input"
                                                   type="checkbox" id="remember_me"
                                                   checked="" style="margin-left: -13.25rem; margin-top: 0.3rem">
                                            <label class="form-check-label" for="remember_me">Recordar sesion</label>
                                        </div>
                                        <div class="form-group message-btn">
                                            <button type="submit" class="theme-btn btn-one">Ingresar</button>
                                        </div>
                                    </form>
                                    <div class="othre-text">
                                        <p>¿Olvido su contraseña? <a href="{{ route('password.request') }}">Click Aquí</a></p>
                                    </div>
                                    <div class="othre-text">
                                        @if (session('status') === 'image-updated')
                                        <p></p>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="tab" id="tab-2">
                                <div class="inner-box">
                                    <h4>Regístrate</h4>
                                    <form action="{{ route('register') }}" method="post" class="default-form">
                                        @csrf
                                        <div class="form-group">
                                            <label for="name">Nombre</label>
                                            <input id="name" type="text" name="name" required="">
                                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                        </div>
                                        <div class="form-group">
                                            <label for="lastname">Apellido</label>
                                            <input id="lastname" type="text" name="lastname" required="">
                                            <x-input-error :messages="$errors->get('lastname')" class="mt-2" />
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input id="email" type="email" name="email" required="">
                                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                        </div>
                                        <div class="form-group">
                                            <label for="password">Contraseña</label>
                                            <input id="password" type="password" name="password" required="">
                                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                        </div>
                                        <div class="form-group">
                                            <label for="password_confirmation">Confimrar contraseña</label>
                                            <input id="password_confirmation" type="password" name="password_confirmation" required="">
                                            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                                        </div>
                                        <div class="form-group message-btn">
                                            <button type="submit" class="theme-btn btn-one">Registrarse</button>
                                        </div>
                                    </form>
                                    <div class="othre-text">
                                        <p>¿Olvido su contraseña? <a href="{{ route('password.request') }}">Click Aquí</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ragister-section end -->


    <!-- subscribe-section -->
    <section class="subscribe-section bg-color-3">
        <div class="pattern-layer" style="background-image: url({{asset('front/assets/images/shape/shape-2.png')}});"></div>
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-6 col-md-6 col-sm-12 text-column">
                    <div class="text">
                        <span>Suscribete</span>
                        <h2>Suscríbase a nuestro boletín para recibir las últimas noticias y ofertas.</h2>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 form-column">
                    <div class="form-inner">
                        <form action="contact.html" method="post" class="subscribe-form">
                            <div class="form-group">
                                <input type="email" name="email" placeholder="Enter your email" required="">
                                <button type="submit">Suscribete ahora</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- subscribe-section end -->


</x-front-layout>
