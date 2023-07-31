<x-guest-layout>
    <!--start content-->
    <main class="authentication-content mt-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-lg-4 mx-auto">
                    <div class="card shadow rounded-5 overflow-hidden">
                        <div class="card-body p-4 p-sm-5">
                            <h5 class="card-title">Ingresar</h5>
                            <p class="card-text mb-5">Ingrese al portal de Propropiedades</p>
                            <h1><img src="{{ asset('backend/assets/images/logo/PROpiedades_03.png') }}" alt=""
                                     style="width: 200px; display: block; margin-left: auto; margin-right: auto;"></h1>
                            <!-- Session Status -->
                            <form method="POST" action="{{ route('login') }}" class="form-body">
                                @csrf

                                <div class="login-separater text-center mb-4">
                                    <span>Ingresa con tu correo y contraseña</span>
                                    <hr>
                                </div>

                                <div class="row g-3">
                                    <!-- Email Address -->
                                    <div class="col-12">
                                        <label for="email" class="form-label">Email</label>
                                        <div class="ms-auto position-relative">
                                            <div class="position-absolute top-50 translate-middle-y search-icon px-3"><i
                                                    class="bi bi-envelope-fill"></i></div>
                                            <input id="email" name="email" type="email"
                                                   class="form-control radius-30 ps-5"
                                                   placeholder="Email" required autofocus autocomplete="username">
                                            <x-input-error :messages="$errors->get('email')" class="mt-2"/>
                                        </div>
                                    </div>

                                    <!-- Password -->
                                    <div class="col-12">
                                        <label for="password" class="form-label">Contraseña</label>
                                        <div class="ms-auto position-relative">
                                            <div class="position-absolute top-50 translate-middle-y search-icon px-3"><i
                                                    class="bi bi-lock-fill"></i></div>
                                            <input type="password" class="form-control radius-30 ps-5" name="password"
                                                   id="password" placeholder="Contraseña" required
                                                   autocomplete="current-password">
                                            <x-input-error :messages="$errors->get('password')" class="mt-2"/>
                                        </div>
                                    </div>
                                    <!-- Remember Me -->
                                    <div class="col-6">
                                        <div class="form-check form-switch">
                                            <input id="remember_me" name="remember" class="form-check-input"
                                                   type="checkbox" id="remember_me"
                                                   checked="">
                                            <label class="form-check-label" for="remember_me">Remember
                                                Me</label>
                                        </div>
                                    </div>

                                    @if (Route::has('password.request'))
                                        <div class="col-6 text-end"><a href="{{ route('password.request') }}">¿Olvido su
                                                contraseña?</a></div>
                                    @endif

                                    <div class="col-12">
                                        <div class="d-grid">
                                            <button type="submit" class="btn btn-primary radius-30">Ingresar</button>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <p class="mb-0">¿No tienes cuenta todavía? <a href="{{ route('register') }}">Registrate
                                                aquí</a></p>
                                    </div>

                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <x-auth-session-status class="mb-4" :status="session('status')"/>
</x-guest-layout>






