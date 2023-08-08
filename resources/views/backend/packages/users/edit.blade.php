@push('styles')

@endpush
@push('script')

@endpush
<x-app-layout>
    <!--start content-->
    <main class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Paquetes</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Editar Paquete Usuario</li>
                    </ol>
                </nav>
            </div>

        </div>
        <!--end breadcrumb-->

        <div class="card">
            <div class="card-header py-3">
                <h6 class="mb-0">Editar Paquete Usuario</h6>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-12 col-lg-12 d-flex">
                        <div class="card border shadow-none w-100">
                            <div class="card-body">

                                <form class="row g-3" method="post"
                                      action="{{ route('admin.packages.users.edit.info') }}">
                                    @csrf
                                    {{--                                    @method('patch')--}}
                                    <div class="col-12">
                                        <label for="name" class="form-label">Nombre</label>
                                        <input id="id" name="id" type="hidden" class="form-control"
                                               value="{{ $user->id }}">
                                        <input id="name" name="name" type="text" class="form-control" placeholder=""
                                               value="{{ $user->name }} {{ $user->lastname }}" disabled>
                                        <x-input-error :messages="$errors->get('name')" class="mt-2"/>
                                    </div>
                                    <div class="col-12">
                                        <label for="package" class="form-label">Paquete</label>
                                        <select id="package" name="package" class="form-select">

                                            @foreach($packages as $package)
                                                <option value="{{ $package->id }}">{{ $package->name }}
                                                    - {{ $package->credits }} creditos - {{ $package->amount }} Bs
                                                </option>
                                            @endforeach
                                        </select>
                                        <x-input-error :messages="$errors->get('package')" class="mt-2"/>
                                    </div>
                                    <div class="col-12">
                                        <label for="status" class="form-label">Estatus</label>
                                        <select id="status" name="status" class="form-select">
                                            <option
                                                {{ $optionSelected = ($user->package_status == "active") ? "selected='selected'" : "" }} value="active">
                                                Activo
                                            </option>
                                            <option
                                                {{ $optionSelected = ($user->package_status == "inactive") ? "selected='selected'" : "" }} value="inactive">
                                                Inactivo
                                            </option>
                                        </select>
                                        <x-input-error :messages="$errors->get('status')" class="mt-2"/>
                                    </div>

                                    <div class="col-12">
                                        <div class="d-grid">
                                            <button type="submit" class="btn btn-primary">Modificar</button>
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
                                                <div class="text-success">Paquete actualizado.</div>
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

    </main>
    <!--end page main-->
</x-app-layout>
