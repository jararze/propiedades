@push('styles')

@endpush
@push('script')

@endpush
<x-app-layout>
    <!--start content-->
    <main class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Unidades</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Unidades Vendidas</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!--end breadcrumb-->

        <div class="card">
            <div class="card-header py-3">
                <h6 class="mb-0">Editar Paquete</h6>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-12 col-lg-8 d-flex">
                        <div class="card border shadow-none w-100">
                            <div class="card-body">

                                <form class="row g-3" method="post" action="{{ route('admin.project.units.edit.info') }}">
                                    @csrf
                                    {{--                                    @method('patch')--}}
                                    <div class="col-12">
                                        <label for="name" class="form-label">Nombre</label>
                                        <input id="id" name="id" type="hidden" class="form-control" value="{{ $package->id }}">
                                        <input id="name" name="name" type="text" class="form-control" placeholder="Amenitie" value="{{ $package->name }}" readonly disabled>
                                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                    </div>
                                    <div class="col-12">
                                        <label for="credits" class="form-label">Descripcion</label>
                                        <textarea id="long_description"
                                                  name="long_description" type="text"
                                                  class="form-control"
                                                  placeholder="Descripcion"  readonly disabled
                                                  > {{ $package->long_description }}</textarea>
                                        <x-input-error :messages="$errors->get('credits')" class="mt-2" />
                                    </div>
                                    <div class="col-12">
                                        <label for="units" class="form-label">Unidades Totales</label>
                                        <input id="units" name="units" type="text" class="form-control" placeholder="Unidades totales" value="{{ $package->units }}"  readonly disabled>
                                        <x-input-error :messages="$errors->get('units')" class="mt-2" />
                                    </div>
                                    <div class="col-12">
                                        <label for="sold_units" class="form-label">Unidades Vendidas</label>
                                        <input id="sold_units" name="sold_units" type="text" class="form-control" placeholder="Unidades vendidas" value="{{ $package->sold_units }}">
                                        <x-input-error :messages="$errors->get('sold_units')" class="mt-2" />
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
                                                <div class="text-success">Unidades actualizadas.</div>
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
