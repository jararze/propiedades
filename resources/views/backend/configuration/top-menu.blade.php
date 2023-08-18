@push('styles')

@endpush
@push('script')

@endpush
<x-app-layout>
    <!--start content-->
    <main class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Menu superior</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Editar opciones del menu</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!--end breadcrumb-->

        <div class="row">
            <div class="col-12 col-lg-12">
                <div class="card">
                    <div class="card-header py-3">
                        <h6 class="mb-0">Editar opciones del menu</h6>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 col-lg-12">
                                <div class="card border shadow-none w-100">

                                    <div class="card-body">

                                        <form method="post" action="{{ route("admin.configuration.update.menu") }}">
                                            @csrf
                                            <div class="col-lg-12 mx-auto">
                                                <div class="card">
                                                    <div class="card-header py-3 bg-transparent">
                                                        <div class="d-sm-flex align-items-center">
                                                            <h5 class="mb-2 mb-sm-0">Modificar opciones</h5>
                                                            <div class="ms-auto">

                                                                <button type="submit" class="btn btn-primary">Modificar
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="col-12 col-lg-12">
                                                            <div class="card shadow-none bg-light border">
                                                                <div class="card-body">
                                                                    <div class="row g-3">
                                                                        <div class="col-12 col-lg-12">
                                                                            <label for="address" class="form-label">Direccion
                                                                                </label>
                                                                            <input id="address" name="address" type="text"
                                                                                   class="form-control"
                                                                                   placeholder="Direccion"
                                                                                   value="{{ $values["top-menu-address"]->value }}"
                                                                            >
                                                                            <x-input-error
                                                                                :messages="$errors->get('address')"
                                                                                class="mt-2"/>
                                                                        </div>
                                                                        <div class="col-12 col-lg-12">
                                                                            <label for="jobHours" class="form-label">Horario
                                                                            </label>
                                                                            <input id="jobHours" name="jobHours" type="text"
                                                                                   class="form-control"
                                                                                   placeholder="Horario"
                                                                                   value="{{ $values["top-menu-jobHours"]->value }}"
                                                                            >
                                                                            <x-input-error
                                                                                :messages="$errors->get('jobHours')"
                                                                                class="mt-2"/>
                                                                        </div>
                                                                        <div class="col-12 col-lg-12">
                                                                            <label for="phone" class="form-label">Telefono
                                                                            </label>
                                                                            <input id="phone" name="phone" type="text"
                                                                                   class="form-control"
                                                                                   placeholder="Telefono"
                                                                                   value="{{ $values["top-menu-phone"]->value }}"
                                                                            >
                                                                            <x-input-error
                                                                                :messages="$errors->get('phone')"
                                                                                class="mt-2"/>
                                                                        </div>
                                                                        <div class="col-12 col-lg-12">
                                                                            <label for="email" class="form-label">Email
                                                                            </label>
                                                                            <input id="email" name="email" type="text"
                                                                                   class="form-control"
                                                                                   placeholder="Email"
                                                                                   value="{{ $values["top-menu-email"]->value }}"
                                                                            >
                                                                            <x-input-error
                                                                                :messages="$errors->get('email')"
                                                                                class="mt-2"/>
                                                                        </div>
                                                                        <div class="col-12 col-lg-12">
                                                                            <label for="about" class="form-label">Sobre nosotros
                                                                            </label>
                                                                            <input id="about" name="about" type="text"
                                                                                   class="form-control"
                                                                                   placeholder="SObre nosotros"
                                                                                   value="{{ $values["top-menu-about"]->value }}"
                                                                            >
                                                                            <x-input-error
                                                                                :messages="$errors->get('about')"
                                                                                class="mt-2"/>
                                                                        </div>
                                                                        <div class="col-12 col-lg-12">
                                                                            <label for="facebook" class="form-label">Facebook
                                                                            </label>
                                                                            <input id="facebook" name="facebook" type="text"
                                                                                   class="form-control"
                                                                                   placeholder="Facebook"
                                                                                   value="{{ $values["top-menu-facebook"]->value }}"
                                                                            >
                                                                            <x-input-error
                                                                                :messages="$errors->get('facebook')"
                                                                                class="mt-2"/>
                                                                        </div>
                                                                        <div class="col-12 col-lg-12">
                                                                            <label for="tiktok" class="form-label">TikTok
                                                                            </label>
                                                                            <input id="tiktok" name="tiktok" type="text"
                                                                                   class="form-control"
                                                                                   placeholder="Tiktok"
                                                                                   value="{{ $values["top-menu-tiktok"]->value }}"
                                                                            >
                                                                            <x-input-error
                                                                                :messages="$errors->get('tiktok')"
                                                                                class="mt-2"/>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>


                                                        </div><!--end row-->
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                        @if (session('status') === 'updated')
                                            <div
                                                class="alert border-0 bg-light-success alert-dismissible fade show py-2"
                                                style="margin-top: 10px">
                                                <div class="d-flex align-items-center">
                                                    <div class="fs-3 text-success"><i
                                                            class="bi bi-check-circle-fill"></i>
                                                    </div>
                                                    <div class="ms-3">
                                                        <div class="text-success">Datos actualizados.</div>
                                                    </div>
                                                </div>
                                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                        aria-label="Close"></button>
                                            </div>
                                        @endif
                                    </div>

                                </div>
                            </div>
                        </div><!--end row-->
                    </div>
                </div>
            </div>
        </div><!--end row-->

    </main>
    <!--end page main-->
</x-app-layout>
