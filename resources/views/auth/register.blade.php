<x-guest-layout>

    <main class="authentication-content mt-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-lg-4 mx-auto">
                    <div class="card shadow rounded-5 overflow-hidden">
                        <div class="card-body p-4 p-sm-5">
                            <h5 class="card-title">Registrarse</h5>
                            <p class="card-text mb-5">Registrate para otorgarte una cuenta!</p>
                            <h1><img src="{{ asset('backend/assets/images/logo/PROpiedades_03.png') }}" alt=""
                                     style="width: 200px; display: block; margin-left: auto; margin-right: auto;"></h1>
                            <form class="form-body" action="{{ route('register') }}" method="POST">
                                @csrf

                                <!-- Name -->
                                <div class="row g-3">
                                    <div class="col-6 ">
                                        <label for="name" class="form-label">Nombre </label>
                                        <div class="ms-auto position-relative">
                                            <div class="position-absolute top-50 translate-middle-y search-icon px-3"><i class="bi bi-person-circle"></i></div>
                                            <input name="name" type="text" class="form-control radius-30 ps-5" id="name" placeholder="Nombre" required autofocus autocomplete="Nombre">
                                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                        </div>
                                    </div>
                                    <div class="col-6 ">
                                        <label for="lastname" class="form-label">Apellido</label>
                                        <div class="ms-auto position-relative">
                                            <div class="position-absolute top-50 translate-middle-y search-icon px-3"><i class="bi bi-person-circle"></i></div>
                                            <input name="lastname" type="text" class="form-control radius-30 ps-5" id="lastname" placeholder="Apellido" required autofocus autocomplete="Apellido">
                                            <x-input-error :messages="$errors->get('lastname')" class="mt-2" />
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <label for="email" class="form-label">Email</label>
                                        <div class="ms-auto position-relative">
                                            <div class="position-absolute top-50 translate-middle-y search-icon px-3"><i class="bi bi-envelope-fill"></i></div>
                                            <input name="email" type="email" class="form-control radius-30 ps-5" id="email" placeholder="Email" required autocomplete="username">
                                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <label for="password" class="form-label">Contraseña</label>
                                        <div class="ms-auto position-relative">
                                            <div class="position-absolute top-50 translate-middle-y search-icon px-3"><i class="bi bi-lock-fill"></i></div>
                                            <input name="password" type="password" class="form-control radius-30 ps-5" id="password" placeholder="Contraseña" required autocomplete="new-password">
                                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <label for="password_confirmation" class="form-label">Confirme Contraseña</label>
                                        <div class="ms-auto position-relative">
                                            <div class="position-absolute top-50 translate-middle-y search-icon px-3"><i class="bi bi-lock-fill"></i></div>
                                            <input name="password_confirmation" type="password" class="form-control radius-30 ps-5" id="password_confirmation" placeholder="Contraseña" required autocomplete="new-password">
                                            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked">
                                            <label class="form-check-label" for="flexSwitchCheckChecked">Acepto terminos y condiciones</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="d-grid">
                                            <button type="submit" class="btn btn-warning radius-30">Registrarse</button>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <p class="mb-0">¿Ya tienes una cuenta? <a href="{{ route('login') }}">Ingresa aquí</a></p>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</x-guest-layout>
