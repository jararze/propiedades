@push('styles')

@endpush
@push('script')

@endpush
<x-app-layout>
    <!--start content-->
    <main class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Tipo propiedades</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Agregar tipo propiedades</li>
                    </ol>
                </nav>
            </div>
            <div class="ms-auto">
                <div class="btn-group">
                    <button type="button" class="btn btn-primary">Acciones</button>
                    <button type="button" class="btn btn-primary split-bg-primary dropdown-toggle dropdown-toggle-split"
                            data-bs-toggle="dropdown"><span class="visually-hidden">Menu</span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end">
                        <a class="dropdown-item" href="{{ route('admin.TypesProperties.register') }}">Añadir tipo de
                            propiedad</a>
                        <a class="dropdown-item" href="{{ route('admin.TypesProperties.index') }}">Lista de tipos de
                            propiedades</a>
                    </div>
                </div>
            </div>
        </div>
        <!--end breadcrumb-->

        <div class="card">
            <div class="card-header py-3">
                <h6 class="mb-0">Agregar tipo propiedades</h6>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-12 col-lg-4 d-flex">
                        <div class="card border shadow-none w-100">
                            <div class="card-body">
                                <form class="row g-3" method="post"
                                      action="{{ route('admin.TypesProperties.register') }}">
                                    @csrf
                                    <div class="col-12">
                                        <label for="type_name" class="form-label">Nombre</label>
                                        <input id="type_name" name="type_name" type="text" class="form-control"
                                               placeholder="Nombre tipo propiedad">
                                        <x-input-error :messages="$errors->get('type_name')" class="mt-2"/>
                                    </div>
                                    <div class="col-12">
                                        <label for="type_icon" class="form-label">Ícono</label>
                                        <input id="type_icon" name="type_icon" type="text" class="form-control"
                                               placeholder="Ícono">
                                        <x-input-error :messages="$errors->get('type_icon')" class="mt-2"/>
                                    </div>
                                    <div class="col-12">
                                        <p  style="margin-bottom: 0 !important">
                                            Puedes buscar iconos <a target="_blank" href="https://fontawesome.com/icons">aquí</a>
                                            o por <a target="_blank" href="https://icons.getbootstrap.com/">aquí</a>
                                        </p>
                                    </div>
                                    <div class="col-12">
                                        <label for="status" class="form-label">Estatus</label>
                                        <select id="status" name="status" class="form-select">
                                            <option value="1">Activo</option>
                                            <option value="0">Inactivo</option>
                                        </select>
                                        <x-input-error :messages="$errors->get('status')" class="mt-2"/>
                                    </div>
                                    <div class="col-12">
                                        <label for="description" class="form-label">Description</label>
                                        <textarea id="description" name="description" class="form-control" rows="3"
                                                  cols="3" placeholder="Descripcion tipo propiedad"></textarea>
                                        <x-input-error :messages="$errors->get('description')" class="mt-2"/>
                                    </div>
                                    <div class="col-12">
                                        <div class="d-grid">
                                            <button type="submit" class="btn btn-primary">Añadir categoria</button>
                                        </div>
                                    </div>
                                </form>
                                @if (session('status') === 'property-created')
                                    <div class="alert border-0 bg-light-success alert-dismissible fade show py-2"
                                         style="margin-top: 10px">
                                        <div class="d-flex align-items-center">
                                            <div class="fs-3 text-success"><i class="bi bi-check-circle-fill"></i>
                                            </div>
                                            <div class="ms-3">
                                                <div class="text-success">Tipo de propiedad creada.</div>
                                            </div>
                                        </div>
                                        <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                aria-label="Close"></button>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-8 d-flex">
                        <div class="card border shadow-none w-100">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table align-middle">
                                        <thead class="table-light">
                                        <tr>
                                            <th>ID</th>
                                            <th>Nombre del tipo de propiedad</th>
                                            <th>Icono</th>
                                            <th>Fecha Creacion</th>
                                            <th>Acciones</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($values as $key => $item)
                                            <tr>
                                                <td>#{{ $item->id }}</td>
                                                <td>{{ $item->type_name }}</td>
                                                <td>{{ $item->type_icon }}</td>
                                                <td>{{ $item->created_at }}</td>
                                                <td>
                                                    <div class="d-flex align-items-center gap-3 fs-6">
                                                        {{--                                                        <a href="javascript:;" class="text-primary" data-bs-toggle="tooltip"--}}
                                                        {{--                                                           data-bs-placement="bottom" title="" data-bs-original-title="View detail"--}}
                                                        {{--                                                           aria-label="Views"><i class="bi bi-eye-fill"></i></a>--}}
                                                        <a href="{{ route('admin.TypesProperties.edit',['id' => $item->id]) }}"
                                                           class="text-warning" data-bs-toggle="tooltip"
                                                           data-bs-placement="bottom" title=""
                                                           data-bs-original-title="Edit info"
                                                           aria-label="Edit"><i class="bi bi-pencil-fill"></i></a>
                                                        <a href="" class="text-danger" data-bs-toggle="modal"
                                                           data-bs-target="#exampleDangerModal{{ $item->id }}"><i
                                                                class="bi bi-trash-fill"></i></a>
                                                    </div>
                                                    <!-- Modal -->
                                                    <div class="modal fade" id="exampleDangerModal{{ $item->id }}"
                                                         tabindex="-1" aria-hidden="true">
                                                        <div class="modal-dialog modal-lg modal-dialog-centered">
                                                            <div class="modal-content bg-danger">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title text-white">
                                                                        ¿Eliminar {{ $item->type_name }}?</h5>
                                                                    <button type="button" class="btn-close"
                                                                            data-bs-dismiss="modal"
                                                                            aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body text-white">
                                                                    <p>¿Esta seguro que desea eliminar el tipo de
                                                                        propiedad?</p>

                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-light"
                                                                            data-bs-dismiss="modal">Cancelar
                                                                    </button>
                                                                    <a href="{{ route('admin.TypesProperties.delete',['id' => $item->id]) }}"
                                                                       class="btn btn-dark">Si, eliminar</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                    @if (session('status') === 'property-eliminated')
                                        <div class="alert border-0 bg-light-success alert-dismissible fade show py-2"
                                             style="margin-top: 10px">
                                            <div class="d-flex align-items-center">
                                                <div class="fs-3 text-success"><i class="bi bi-check-circle-fill"></i>
                                                </div>
                                                <div class="ms-3">
                                                    <div class="text-success">Tipo de propiedad eliminada.</div>
                                                </div>
                                            </div>
                                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                    aria-label="Close"></button>
                                        </div>
                                    @endif
                                </div>

                            </div>
                        </div>
                    </div>
                </div><!--end row-->
            </div>
        </div>

    </main>
    <!--end page main-->
</x-app-layout>
