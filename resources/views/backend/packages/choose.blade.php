@push('styles')

@endpush
@push('script')

@endpush
<x-app-layout>
    <!--start content-->
    <main class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Paquetes disponibles</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Lista de paquetes disponibles</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!--end breadcrumb-->


        <h6 class="mb-0 text-uppercase">Lista de paquetes disponibles</h6>
        <hr/>

        <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-4">
            <div class="col">
                <div class="card rounded-4">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="">
                                <p class="mb-1">Tu plan</p>
                                <h4 class="mb-0">{{ $package_name }}</h4>
                            </div>
                            <div class="ms-auto widget-icon bg-light-primary text-primary">
                                <i class="bi bi-basket2"></i>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card rounded-4">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="">
                                <p class="mb-1">Creditos por el paquete</p>
                                <h4 class="mb-0">{{ $package_credits }}</h4>
                            </div>
                            <div class="ms-auto widget-icon bg-light-orange text-orange">
                                <i class="bi bi-emoji-heart-eyes"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card rounded-4">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="">
                                <p class="mb-1">Creditos usados</p>
                                <h4 class="mb-0">{{ $propertyXagent }}</h4>
                            </div>
                            <div class="ms-auto widget-icon bg-light-success text-success">
                                <i class="bi bi-currency-dollar"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card rounded-4">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="">
                                <p class="mb-1">Creditos disponible</p>
                                <h4 class="mb-0">{{ $package_credits - $propertyXagent }}</h4>
                            </div>
                            <div class="ms-auto widget-icon bg-light-info text-info">
                                <i class="bi bi-people-fill"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr/>
        <div class="row row-cols-1 row-cols-lg-4 gx-0">
            @foreach($values as $packages)
                @php
                    switch ($packages->id) {
                        case 1:
                            $var = "bg-danger";
                            break;
                        case 2:
                            $var = "bg-purple";
                            break;
                        case 3:
                            $var = "bg-primary";
                            break;
                        case 4:
                            $var = "bg-success";
                            break;
                    }
                @endphp
                <div class="col">
                    <div class="card rounded-0 {{ $var }}">
                        <div class="card-body">
                            <div class="text-center text-white">
                                <h5 class="mb-4 text-white">{{ $packages->name }}</h5>
                                <h1 class="card-price text-white"><span class="fs-6">Bs</span> {{ $packages->amount }}
                                    <span class="fs-6">/mes</span></h1>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item text-white bg-transparent border-light-1"><i
                                        class="bi bi-check-circle me-2"></i>{{ $packages->credits }} Creditos / Mes
                                </li>
                                <li class="list-group-item text-white bg-transparent border-light-1"><i
                                        class="bi bi-check-circle me-2"></i>Soporte dedicado
                                </li>
                                <li class="list-group-item text-white bg-transparent border-light-1"><i
                                        class="bi bi-check-circle me-2"></i>Ingreso al sistema
                                </li>
                                <li class="list-group-item text-white bg-transparent border-light-1"><i
                                        class="bi bi-check-circle me-2"></i>Dashboard
                                </li>
                                <li class="list-group-item text-white bg-transparent border-light-1"><i
                                        class="bi bi-check-circle me-2"></i>Metricas mensuales
                                </li>
                                <li class="list-group-item text-white bg-transparent border-light-1"><i
                                        class="bi bi-check-circle me-2"></i>Gestion autonoma
                                </li>
                            </ul>
                            <div class="text-center mt-3 d-grid d-lg-block">
                                <form action="{{ route("admin.packages.user.add") }}" method="post">
                                    @csrf
                                    <input id="package_Id" name="package_Id" type="hidden" value="{{ $packages->id }}">
                                    <button type="submit" class="btn btn-outline-light rounded-0 px-4 shadow">Comprar ahora</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div><!--end row-->
        @if (session('status') === 'updated')
            <div class="alert border-0 bg-light-success alert-dismissible fade show py-2"
                 style="margin-top: 10px">
                <div class="d-flex align-items-center">
                    <div class="fs-3 text-success"><i class="bi bi-check-circle-fill"></i>
                    </div>
                    <div class="ms-3">
                        <div class="text-success">Paquete Comprado. El administrador debe aprobar la compra para que pueda usar los creditos.</div>
                    </div>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="alert"
                        aria-label="Close"></button>
            </div>
        @endif


    </main>
    <!--end page main-->
</x-app-layout>
