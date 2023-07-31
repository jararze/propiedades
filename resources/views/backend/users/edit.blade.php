@push('styles')

@endpush
@push('script')
    <script src="{{ asset('backend/assets/js/images.js') }}"></script>
@endpush
<x-app-layout>
    <!--start content-->
    <main class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Usuario</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Editar usuario</li>
                    </ol>
                </nav>
            </div>
            <div class="ms-auto">
                <div class="btn-group">
                    <button type="button" class="btn btn-primary">Acciones</button>
                    <button type="button" class="btn btn-primary split-bg-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown">	<span class="visually-hidden">Menu</span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end">
                        <a class="dropdown-item" href="{{ route('admin.users.register') }}">Añadir</a>
                        <a class="dropdown-item" href="{{ route('admin.users.index') }}">Listar</a>
                    </div>
                </div>
            </div>
        </div>
        <!--end breadcrumb-->

        <div class="row">
            <form method="post" action="{{ route('admin.users.edit.info') }}" enctype="multipart/form-data">
                @csrf
                <div class="col-lg-12 mx-auto">
                    <div class="card">
                        <div class="card-header py-3 bg-transparent">
                            <div class="d-sm-flex align-items-center">
                                <h5 class="mb-2 mb-sm-0">Editar al usuario</h5>
                                <div class="ms-auto">
                                    {{--                                    <button type="button" class="btn btn-secondary">Grabar borrador</button>--}}
                                    <button type="submit" class="btn btn-primary">Editar</button>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row g-3">
                                <div class="col-12 col-lg-8">
                                    <div class="card shadow-none bg-light border">
                                        <div class="card-body">
                                            <div class="row g-3">
                                                <div class="col-6">
                                                    <input type="hidden" name="id" value="{{ $users->id }}">
                                                    <label for="name" class="form-label">Nombre</label>
                                                    <input id="name" name="name" type="text" class="form-control"
                                                           placeholder="Nombre" value="{{ $users->name }}" >
                                                    <x-input-error :messages="$errors->get('name')" class="mt-2"/>
                                                </div>
                                                <div class="col-6">
                                                    <label for="lastname" class="form-label">Apellido</label>
                                                    <input id="lastname" name="lastname" value="{{ $users->lastname }}" type="text" class="form-control"
                                                           placeholder="Apellido">
                                                    <x-input-error :messages="$errors->get('lastname')" class="mt-2"/>
                                                </div>
                                                <div class="col-6">
                                                    <label for="jobtitle" class="form-label">Puesto </label>
                                                    <input id="jobtitle" name="jobtitle" type="text"  value="{{ $users->jobtitle }}"
                                                           class="form-control"
                                                           placeholder="Puesto">
                                                    <x-input-error :messages="$errors->get('jobtitle')"
                                                                   class="mt-2"/>
                                                </div>
                                                <div class="col-6">
                                                    <label for="username" class="form-label">Username</label>
                                                    <input id="username" name="username" type="text" step="any"  value="{{ $users->username }}"
                                                           class="form-control"
                                                           placeholder="Tamaño Propiedad">
                                                    <x-input-error :messages="$errors->get('username')" class="mt-2"/>
                                                </div>
                                                <div class="col-12 col-lg-12">
                                                    <label for="email" class="form-label">Correo Electronico</label>
                                                    <input id="email" name="email" type="email" class="form-control"  value="{{ $users->email }}"
                                                           placeholder="Correo Electronico">
                                                    <x-input-error :messages="$errors->get('email')" class="mt-2"/>
                                                </div>
                                                <div class="col-6">
                                                    <label for="city" class="form-label">Ciudad</label>
                                                    <input id="city" city="city" type="text" class="form-control" value="{{ $users->city }}"
                                                           placeholder="Ciudad" >
                                                    <x-input-error :messages="$errors->get('city')" class="mt-2"/>
                                                </div>
                                                <div class="col-6">
                                                    <label for="country" class="form-label">Pais</label>
                                                    <input id="country" name="country" type="text" class="form-control" value="{{ $users->country }}"
                                                           placeholder="Pais">
                                                    <x-input-error :messages="$errors->get('country')" class="mt-2"/>
                                                </div>
                                                <div class="col-12 col-lg-12">
                                                    <label for="address" class="form-label">Direccion</label>
                                                    <input id="address" name="address" type="text" class="form-control" value="{{ $users->address }}"
                                                           placeholder="Direccion">
                                                    <x-input-error :messages="$errors->get('address')" class="mt-2"/>
                                                </div>
                                                <div class="col-12 col-lg-6">
                                                        <div class="card">
                                                            <img
                                                                src="{{ asset('upload/profiles/'.$users->photo) }}"
                                                                alt="" style="align-content: center">
                                                        </div>
                                                </div>
                                                <div class="col-12 col-lg-12">
                                                    <label for="photo" class="form-label">Cambiar Imagen Principal</label>
                                                    <div class="input-group">
                                                        <input id="photo" name="photo" type="file"
                                                               class="form-control"
                                                               placeholder="Imagen Principal"
                                                               accept="image/png, image/gif, image/jpeg"
                                                               onChange="mainThamUrl(this)">
                                                    </div>
                                                    <img src="" id="mainThmb"
                                                         style="margin-top: 20px; border-radius: 10px; border: 1px solid #e6e6e6;">
                                                    <x-input-error :messages="$errors->get('photo')" class="mt-2"/>
                                                </div>
                                                <div class="col-12">
                                                    <label for="aboutme" class="form-label">Sobre mi</label>
                                                    <textarea id="aboutme" name="aboutme" type="text"
                                                              class="form-control"
                                                              placeholder="Sobre mi" >{{ $users->aboutme }}</textarea>
                                                    <x-input-error :messages="$errors->get('aboutme')"
                                                                   class="mt-2"/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-12 col-lg-4">
                                    <div class="card shadow-none bg-light border">
                                        <div class="card-body">
                                            <div class="row g-3">
                                                <div class="col-12">
                                                    <label for="phone" class="form-label"># Telefono</label>
                                                    <input id="phone" name="phone" type="text" value="{{ $users->phone }}"
                                                           class="form-control"
                                                           placeholder="# Telefono">
                                                    <x-input-error :messages="$errors->get('phone')" class="mt-2"/>
                                                </div>
                                                <div class="col-12">
                                                    <label for="role" class="form-label">Rol</label>
                                                    <select id="role" name="role" class="form-select" >
                                                        <option
                                                            {{ $selected = ($users->role == 'admin') ? "selected='selected'" : "" }} value="admin">Admin</option>
                                                        <option
                                                            {{ $selected = ($users->role == 'agent') ? "selected='selected'" : "" }} value="agent">Agente</option>
                                                        <option
                                                            {{ $selected = ($users->role == 'user') ? "selected='selected'" : "" }} value="user">Usuario</option>
                                                    </select>
                                                    <x-input-error :messages="$errors->get('role')" class="mt-2"/>
                                                </div>
                                                <div class="col-12">
                                                    <label for="status" class="form-label">Estado</label>
                                                    <select id="status" name="status" class="form-select" >
                                                        <option
                                                            {{ $selected = ($users->status == 'active') ? "selected='selected'" : "" }} value="active">Activo</option>
                                                        <option
                                                            {{ $selected = ($users->status == 'inactive') ? "selected='selected'" : "" }} value="inactive">Inactivo</option>
                                                    </select>
                                                    <x-input-error :messages="$errors->get('status')" class="mt-2"/>
                                                </div>
                                            </div><!--end row-->
                                        </div>
                                    </div>
                                </div>

                            </div><!--end row-->
                        </div>
                    </div>
                </div>
            </form>
            @if (session('status') === 'updated')
                <div class="alert border-0 bg-light-success alert-dismissible fade show py-2"
                     style="margin-top: 10px">
                    <div class="d-flex align-items-center">
                        <div class="fs-3 text-success"><i class="bi bi-check-circle-fill"></i>
                        </div>
                        <div class="ms-3">
                            <div class="text-success">Usuario actualizado.</div>
                        </div>
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                            aria-label="Close"></button>
                </div>
            @endif
        </div><!--end row-->

    </main>
    <!--end page main-->

</x-app-layout>
