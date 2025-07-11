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
            <div class="breadcrumb-title pe-3">Posibles clientes</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Posibles clientes</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!--end breadcrumb-->
        <hr/>
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
{{--                 @dd($values)--}}
                    <table id="example2" class="table table-striped table-bordered">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Correo</th>
                            <th>Telefono</th>
                            <th>Es usaurio?</th>
                            <th>Nombre usuario</th>
                            <th>Propiedad</th>
                            <th>¿Contactado?</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($values as $posible)
{{--                            @dd($posible)--}}
                                <tr>
                                    <td>{{ $posible['id'] }}</td>
                                    <td>{{ $posible['email'] }}</td>
                                    <td>{{ $posible['phone'] }}</td>
                                    <td>{{ ($posible['is_user'] > 0) ? "Si" : "No" }}</td>
                                    <td>{{ $posible['user_name'] }}</td>
                                    <td>{{ $posible['property_name'] }}</td>
                                    <td>
                                        @if($posible['response'] == 1)
                                            <a href="{{ route('admin.possible.users.index.contacted', $posible['id']) }}"><span
                                                    class="badge bg-light-success text-success w-100">Contactado </span></a>
                                        @else
                                            <a href="{{ route('admin.possible.users.index.contacted', $posible['id']) }}"><span class="badge bg-light-info text-info w-100">Pendiente</span></a>
                                        @endif
                                    </td>
                                </tr>
                        @endforeach

                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </main>
    <!--end page main-->
</x-app-layout>
