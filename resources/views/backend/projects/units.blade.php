@push('styles')
    <link href="{{ asset('backend/assets/plugins/datatable/css/dataTables.bootstrap5.min.css')}}" rel="stylesheet"/>
@endpush
@push('script')
    <script src="{{ asset('backend/assets/plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('backend/assets/plugins/datatable/js/dataTables.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/table-datatable3.js') }}"></script>
@endpush
<x-app-layout>
    <!--start content-->
    <main class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Proyectos</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Proyectos</li>
                    </ol>
                </nav>
            </div>
{{--            <div class="ms-auto">--}}
{{--                <div class="btn-group">--}}
{{--                    <a class="btn btn-primary" href="{{ route('admin.project.register') }}">Añadir</a>--}}
{{--                </div>--}}
{{--            </div>--}}
        </div>
        <!--end breadcrumb-->

        <div class="row">
            <div class="col-12 col-lg-12 d-flex">
                <div class="card w-100">
                    <div class="card-header py-3">
                        <div class="row g-3">
                            <div class="col-lg-4 col-md-6 me-auto">
                                <div class="ms-auto position-relative">
                                    <div class="position-absolute top-50 translate-middle-y search-icon px-3"><i
                                            class="bi bi-search"></i></div>
                                    <label>
                                        <input class="form-control ps-5" name="search" type="text" id="searchbox"
                                               placeholder="Buscar">
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            @if(!$values->isEmpty())
                                <table id="example3" class="table table-striped table-bordered">
                                    <thead class="table-light">
                                    <tr>
                                        <th>ID</th>
                                        <th>Imagen</th>
                                        <th>Nombre</th>
                                        <th>Unidades</th>
                                        <th>Unidades Vendidas</th>
                                        <th>Acciones</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($values as $key => $item)
                                        <tr>
                                            <td>#{{ $item->code }}</td>
                                            <td><img
                                                    src="{{ (!empty($item->thumbnail)) ? url('upload/properties/'.$item->code.'/'.$item->thumbnail) : url('upload/No_Image_Available.jpg') }}"
                                                    class="product-img-2" alt="product img"></td>
                                            <td>{{ $item->project_name }} - {{ $item->name }}</td>
                                            <td>{{ $item->units }}</td>
                                            <td>{{ $item->sold_units }}</td>
                                            <td>
                                                <div class="d-flex align-items-center gap-3 fs-6">
                                                    <a href="{{ route('admin.project.units.edit',['id' => $item->id]) }}"
                                                       class="text-warning" data-bs-toggle="tooltip"
                                                       data-bs-placement="bottom" title=""
                                                       data-bs-original-title="Edit info"
                                                       aria-label="Edit"><i class="bi bi-pencil-fill"></i></a>
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
                                                <div class="text-success">Propiedad eliminada.</div>
                                            </div>
                                        </div>
                                        <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                aria-label="Close"></button>
                                    </div>
                                @endif
                            @else
                                <h2>No hay proyectos para mostrar.</h2>
                                <h4 style="margin-top: 20px"><a href="{{ route("admin.project.register") }}">Agrega un
                                        proyecto ahora</a></h4>
                            @endif

                        </div>

                        {{--                        {{ $values->links('vendor.pagination.custom') }}--}}
                    </div>
                </div>
            </div>
        </div><!--end row-->

    </main>
    <!--end page main-->
</x-app-layout>
