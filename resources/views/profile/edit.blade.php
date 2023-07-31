<x-app-layout>

    <main class="page-content">
        <div class="page-breadcrumb d-none d-sm-flex align-items-center">
            <div class="breadcrumb-title pe-3 text-white">Perfil</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt text-white"></i></a>
                        </li>
                        <li class="breadcrumb-item active text-white" aria-current="page">Perfil de usuario</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!--end breadcrumb-->

        <div class="profile-cover bg-dark"></div>

        <div class="row">
            <div class="col-12 col-lg-8">
                <div class="card shadow-sm border-0">
                    <div class="card-body">
                        <h5 class="mb-0">Mi cuenta</h5>
                        <hr>
                        <div class="card shadow-none border">
                            <div class="card-header">
                                <h6 class="mb-0">INFORMACION DEL USUARIO</h6>
                            </div>
                            <div class="card-body">
                                <form class="row g-3" method="post" action="{{ route('admin.profile.update') }}">
                                    @csrf
                                    @method('patch')

                                    <div class="col-6">
                                        <label for="username" class="form-label">Nombre de usuario</label>
                                        <input id="username" name="username" type="text" class="form-control"
                                               value="{{ Auth::user()->username }}" required autofocus
                                               autocomplete="name">
                                        <x-input-error class="mt-2" :messages="$errors->get('username')"/>
                                    </div>
                                    <div class="col-6">
                                        <label for="email" class="form-label">Correo electronico</label>
                                        <input id="email" name="email" type="email" class="form-control"
                                               value="{{ Auth::user()->email }}" disabled>
                                        <x-input-error class="mt-2" :messages="$errors->get('email')"/>
                                    </div>
                                    <div class="col-6">
                                        <label for="name" class="form-label">Nombre</label>
                                        <input id="name" name="name" type="text" class="form-control"
                                               value="{{ Auth::user()->name }}">
                                        <x-input-error class="mt-2" :messages="$errors->get('name')"/>
                                    </div>
                                    <div class="col-6">
                                        <label for="lastname" class="form-label">Apellido</label>
                                        <input id="lastname" name="lastname" type="text" class="form-control"
                                               value="{{ Auth::user()->lastname }}">
                                        <x-input-error class="mt-2" :messages="$errors->get('lastname')"/>
                                    </div>
                                    <div class="col-12">
                                        <label for="address" class="form-label">Direccion</label>
                                        <input id="address" name="address" type="text" class="form-control"
                                               value="{{ Auth::user()->address }}" required>
                                        <x-input-error class="mt-2" :messages="$errors->get('address')"/>
                                    </div>
                                    <div class="col-8">
                                        <label for="jobtitle" class="form-label">Posicion / Cargo</label>
                                        <input id="jobtitle" name="jobtitle" type="text" class="form-control"
                                               value="{{ Auth::user()->jobtitle }}">
                                        <x-input-error class="mt-2" :messages="$errors->get('jobtitle')"/>
                                    </div>
                                    <div class="col-4">
                                        <label for="phone" class="form-label">Telefono</label>
                                        <input id="phone" name="phone" type="text" class="form-control"
                                               value="{{ Auth::user()->phone }}">
                                        <x-input-error class="mt-2" :messages="$errors->get('phone')"/>
                                    </div>
                                    <div class="col-6">
                                        <label for="city" class="form-label">Ciudad</label>
                                        <input id="city" name="city" type="text" class="form-control"
                                               value="{{ Auth::user()->city }}">
                                        <x-input-error class="mt-2" :messages="$errors->get('city')"/>
                                    </div>
                                    <div class="col-6">
                                        <label for="country" class="form-label">Pais</label>
                                        <input id="country" name="country" type="text" class="form-control"
                                               value="{{ Auth::user()->country }}">
                                        <x-input-error class="mt-2" :messages="$errors->get('country')"/>
                                    </div>

                                    <div class="col-12">
                                        <label for="aboutme" class="form-label">Sobre mi</label>
                                        <textarea id="aboutme" name="aboutme" class="form-control" rows="4" cols="4"
                                                  placeholder="Describe yourself..." value="{{ Auth::user()->aboutme }}" required>{{ Auth::user()->aboutme }}</textarea>
                                    </div>
                                    <div class="text-start">
                                        <button type="submit" class="btn btn-primary px-4">Guardar cambios</button>
                                    </div>
                                </form>
                                @if (session('status') === 'profile-updated')
                                    <div class="alert border-0 bg-light-success alert-dismissible fade show py-2"
                                         style="margin-top: 10px">
                                        <div class="d-flex align-items-center">
                                            <div class="fs-3 text-success"><i class="bi bi-check-circle-fill"></i>
                                            </div>
                                            <div class="ms-3">
                                                <div class="text-success">Información actualizada.</div>
                                            </div>
                                        </div>
                                        <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                aria-label="Close"></button>
                                    </div>
                                @endif
                            </div>
                        </div>
                        <div class="card shadow-none border">
                            <div class="card-header">
                                <h6 class="mb-0">CONTRASEÑA</h6>
                            </div>
                            <div class="card-body">
                                <form class="row g-3" method="post" action="{{ route('password.update') }}">
                                    @csrf
                                    @method('put')
                                    <div class="col-12">
                                        <label for="current_password" class="form-label">Actual contraseña</label>
                                        <input id="current_password" name="current_password" type="password"
                                               class="form-control" value="" required>
                                        <x-input-error :messages="$errors->updatePassword->get('current_password')"/>
                                    </div>
                                    <div class="col-6">
                                        <label for="password" class="form-label">Nueva contraseña</label>
                                        <input id="password" name="password" type="password" class="form-control"
                                               value="" required>
                                        <x-input-error :messages="$errors->updatePassword->get('password')"/>
                                    </div>
                                    <div class="col-6">
                                        <label for="password_confirmation" class="form-label">Confirme
                                            contraseña</label>
                                        <input id="password_confirmation" name="password_confirmation" type="password"
                                               class="form-control" value="" required>
                                        <x-input-error
                                            :messages="$errors->updatePassword->get('password_confirmation')"/>
                                    </div>
                                    <div class="text-start">
                                        <button type="submit" class="btn btn-primary px-4">Guardar cambios</button>
                                    </div>
                                </form>
                                @if (session('status') === 'password-updated')
                                    <div class="alert border-0 bg-light-success alert-dismissible fade show py-2"
                                         style="margin-top: 10px">
                                        <div class="d-flex align-items-center">
                                            <div class="fs-3 text-success"><i class="bi bi-check-circle-fill"></i>
                                            </div>
                                            <div class="ms-3">
                                                <div class="text-success">Contraseña actualizada.</div>
                                            </div>
                                        </div>
                                        <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                aria-label="Close"></button>
                                    </div>
                                @endif
                            </div>
                        </div>

                        <div class="card shadow-none border">
                            <div class="card-header">
                                <h6 class="mb-0">Cambio de imagen</h6>
                            </div>
                            <div class="card-body">
                                <form class="row g-3" method="post" action="{{ route('admin.profile.imageUpdate') }}" enctype="multipart/form-data">
                                    @csrf
                                    @method('patch')
                                    <div class="col-12">
                                        <label for="photo" class="form-label">Imagen</label>
                                        <input id="photo" name="photo" type="file"
                                               class="form-control" accept="image/png, image/gif, image/jpeg" required>
                                    </div>
                                    <div class="text-start">
                                        <button type="submit" class="btn btn-primary px-4">Guardar cambios</button>
                                    </div>
                                </form>
                                @if (session('status') === 'image-updated')
                                    <div class="alert border-0 bg-light-success alert-dismissible fade show py-2"
                                         style="margin-top: 10px">
                                        <div class="d-flex align-items-center">
                                            <div class="fs-3 text-success"><i class="bi bi-check-circle-fill"></i>
                                            </div>
                                            <div class="ms-3">
                                                <div class="text-success">Imagen actualizada.</div>
                                            </div>
                                        </div>
                                        <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                aria-label="Close"></button>
                                    </div>
                                @endif
                            </div>
                        </div>


                        <div class="card shadow-none border">
                            <div class="card-header">
                                <h6 class="mb-0">Borrar cuenta</h6>
                            </div>
                            <div class="card-body">
                                <p>Una vez que se elimine su cuenta, todos sus recursos y datos se eliminarán de forma
                                    permanente. Antes de eliminar su cuenta, descargue cualquier dato o información que
                                    desee conservar.</p>
                                <form class="row g-3">
                                    <div class="text-start">
                                        <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                                data-bs-target="#exampleDangerModal">Borrar cuenta
                                        </button>
                                        <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-2" />
                                    </div>
                                </form>

                                <div class="modal fade" id="exampleDangerModal" tabindex="-1" aria-hidden="true">
                                    <div class="modal-dialog modal-lg modal-dialog-centered">
                                        <div class="modal-content bg-danger">
                                            <form method="post" action="{{ route('admin.profile.destroy') }}" class="p-6">
                                                @csrf
                                                @method('delete')
                                                <div class="modal-header">
                                                    <h5 class="modal-title text-white">¿Está seguro que quiere eliminar
                                                        la cuenta?</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                </div>

                                                <div class="modal-body text-white">
                                                    <p>Una vez que se elimine su cuenta, todos sus recursos y datos se
                                                        eliminarán de forma permanente. Antes de eliminar su cuenta,
                                                        descargue cualquier dato o información que desee conservar.</p>
                                                    <div class="col-5">
                                                        <label for="password" class="form-label">Contraseña</label>
                                                        <input id="password" name="password" type="password" class="form-control"
                                                               value="">
                                                        <x-input-error :messages="$errors->updatePassword->get('password')"/>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">
                                                        Cerrar
                                                    </button>
                                                    <button type="submit" class="btn btn-dark">Eliminar Cuenta</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4">
                <div class="card shadow-sm border-0 overflow-hidden">
                    <div class="card-body">
                        <div class="profile-avatar text-center">
                            <img src="{{ (!empty(Auth::user()->photo)) ? url('upload/profiles/'.Auth::user()->photo) : url('upload/No_Image_Available.jpg') }}"
                                 class="rounded-circle shadow" width="120" height="120" alt="">
                        </div>
                        <div class="text-center mt-4">
                            <h4 class="mb-1">{{ Auth::user()->name }} {{ Auth::user()->lastname }}</h4>
                            <p class="mb-0 text-secondary">{{ Auth::user()->city }}, {{ Auth::user()->country }}</p>
                            <div class="mt-4"></div>
                            <h6 class="mb-1">{{ Auth::user()->jobtitle }}</h6>
                            {{--                            <p class="mb-0 text-secondary">University of Information Technology</p>--}}
                        </div>
                        <hr>
                        <div class="text-start">
                            <h5 class="">About</h5>
                            <p class="mb-0">{{ Auth::user()->aboutme }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--end row-->

    </main>
</x-app-layout>
