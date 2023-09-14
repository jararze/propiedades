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
                        <li class="breadcrumb-item active" aria-current="page">Editar Paquete</li>
                    </ol>
                </nav>
            </div>
            <div class="ms-auto">
                <div class="btn-group">
                    <button type="button" class="btn btn-primary">Acciones</button>
                    <button type="button" class="btn btn-primary split-bg-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown">	<span class="visually-hidden">Menu</span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end">
                        <a class="dropdown-item" href="{{ route('admin.packages.register') }}">Añadir</a>
                        <a class="dropdown-item" href="{{ route('admin.packages.index') }}">Lista</a>
                    </div>
                </div>
            </div>
        </div>
        <!--end breadcrumb-->

        <div class="card">
            <div class="card-header py-3">
                <h6 class="mb-0">Editar Paquete</h6>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-12 col-lg-4 d-flex">
                        <div class="card border shadow-none w-100">
                            <div class="card-body">

                                <form class="row g-3" method="post" action="{{ route('admin.packages.edit.info') }}">
                                    @csrf
{{--                                    @method('patch')--}}
                                    <div class="col-12">
                                        <label for="name" class="form-label">Nombre</label>
                                        <input id="id" name="id" type="hidden" class="form-control" value="{{ $package->id }}">
                                        <input id="name" name="name" type="text" class="form-control" placeholder="Amenitie" value="{{ $package->name }}">
                                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                    </div>
                                    <div class="col-12">
                                        <label for="credits" class="form-label">Creditos</label>
                                        <input id="credits" name="credits" type="number" class="form-control" placeholder="Creditos" value="{{ $package->credits }}">
                                        <x-input-error :messages="$errors->get('credits')" class="mt-2" />
                                    </div>
                                    <div class="col-12">
                                        <label for="amount" class="form-label">Precio en BS</label>
                                        <input id="amount" name="amount" type="text" class="form-control" placeholder="Precio" value="{{ $package->amount }}">
                                        <x-input-error :messages="$errors->get('amount')" class="mt-2" />
                                    </div>
                                    <div class="col-12">
                                        <label for="status" class="form-label">Estatus</label>
                                        <select id="status" name="status" class="form-select">
                                            <option {{ $optionSelected = ($package->status == 1) ? "selected='selected'" : "" }} value="1">Activo</option>
                                            <option {{ $optionSelected = ($package->status == 0) ? "selected='selected'" : "" }} value="0">Inactivo</option>
                                        </select>
                                        <x-input-error :messages="$errors->get('status')" class="mt-2" />
                                    </div>
                                    <div class="col-12">
                                        <label for="front_display" class="form-label">Mostrar en pantalla</label>
                                        <select id="front_display" name="front_display" class="form-select">
                                            <option {{ $optionSelected = ($package->front_display == 1) ? "selected='selected'" : "" }} value="1">Si</option>
                                            <option {{ $optionSelected = ($package->front_display == 0) ? "selected='selected'" : "" }} value="0">No</option>
                                        </select>
                                        <x-input-error :messages="$errors->get('front_display')" class="mt-2" />
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
                    <div class="col-12 col-lg-8 d-flex">
                        <div class="card border shadow-none w-100">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table align-middle">
                                        <thead class="table-light">
                                        <tr>
                                            <th>ID</th>
                                            <th>Nombre</th>
                                            <th>Creditos</th>
                                            <th>Precio</th>
                                            <th>Estado</th>
                                            <th>Acciones</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($types as $key => $item)
                                            <tr>
                                                <td>#{{ $item->id }}</td>
                                                <td>{{ $item->name }}</td>
                                                <td>{{ $item->credits }}</td>
                                                <td>{{ $item->amount }} Bs.</td>
                                                <td>
                                                    @if($item->status == 1)
                                                        <span class="badge bg-light-success text-success w-100">Activo</span>
                                                    @else
                                                        <span class="badge bg-light-danger text-danger w-100">Inactivo</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center gap-3 fs-6">
                                                        <a href="{{ route('admin.packages.edit',['id' => $item->id]) }}" class="text-warning" data-bs-toggle="tooltip"
                                                           data-bs-placement="bottom" title="" data-bs-original-title="Edit info"
                                                           aria-label="Edit"><i class="bi bi-pencil-fill"></i></a>
                                                        <a href="" class="text-danger" data-bs-toggle="modal" data-bs-target="#exampleDangerModal{{ $item->id }}"><i class="bi bi-trash-fill"></i></a>
                                                    </div>
                                                    <!-- Modal -->
                                                    <div class="modal fade" id="exampleDangerModal{{ $item->id }}" tabindex="-1" aria-hidden="true">
                                                        <div class="modal-dialog modal-lg modal-dialog-centered">
                                                            <div class="modal-content bg-danger">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title text-white">¿Eliminar {{ $item->name }}?</h5>
                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body text-white">
                                                                    <p>¿Esta seguro que desea eliminar el amenitie?</p>

                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancelar</button>
                                                                    <a href="{{ route('admin.packages.delete',['id' => $item->id]) }}" class="btn btn-dark" >Si, eliminar</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                    @if (session('status') === 'eliminated')
                                        <div class="alert border-0 bg-light-success alert-dismissible fade show py-2"
                                             style="margin-top: 10px">
                                            <div class="d-flex align-items-center">
                                                <div class="fs-3 text-success"><i class="bi bi-check-circle-fill"></i>
                                                </div>
                                                <div class="ms-3">
                                                    <div class="text-success">Amenitie eliminada.</div>
                                                </div>
                                            </div>
                                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                    aria-label="Close"></button>
                                        </div>
                                    @endif
                                </div>
{{--                                <nav class="float-end mt-0" aria-label="Page navigation">--}}
{{--                                    <ul class="pagination">--}}
{{--                                        <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>--}}
{{--                                        <li class="page-item active"><a class="page-link" href="#">1</a></li>--}}
{{--                                        <li class="page-item"><a class="page-link" href="#">2</a></li>--}}
{{--                                        <li class="page-item"><a class="page-link" href="#">3</a></li>--}}
{{--                                        <li class="page-item"><a class="page-link" href="#">Next</a></li>--}}
{{--                                    </ul>--}}
{{--                                </nav>--}}
                            </div>
                        </div>
                    </div>
                </div><!--end row-->
            </div>
        </div>

    </main>
    <!--end page main-->
</x-app-layout>
