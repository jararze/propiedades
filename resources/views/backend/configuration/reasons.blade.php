@push('styles')

@endpush
@push('script')

@endpush
<x-app-layout>
    <!--start content-->
    <main class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Razones</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Editar razones</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!--end breadcrumb-->

        <div class="row">
            <div class="col-12 col-lg-12">
                <div class="card">
                    <div class="card-header py-3">
                        <h6 class="mb-0">Editar razones</h6>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 col-lg-12">
                                <div class="card border shadow-none w-100">

                                    <div class="card-body">

                                        <form method="post" action="{{ route("admin.configuration.reasons.update") }}">
                                            @csrf
                                            <div class="col-lg-12 mx-auto">
                                                <div class="card">
                                                    <div class="card-header py-3 bg-transparent">
                                                        <div class="d-sm-flex align-items-center">
                                                            <h5 class="mb-2 mb-sm-0">Modificar razones</h5>
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
                                                                            <label for="reason_1" class="form-label">Reputación
                                                                                </label>
                                                                            <input id="reason_1" name="reason_1" type="text"
                                                                                   class="form-control"
                                                                                   placeholder="Razon 1"
                                                                                   value="{{ $values["reason_1"]->value }}"
                                                                            >
                                                                            <x-input-error
                                                                                :messages="$errors->get('reason_1')"
                                                                                class="mt-2"/>
                                                                        </div>
                                                                        <div class="col-12 col-lg-12">
                                                                            <label for="reason_2" class="form-label">Agentes
                                                                            </label>
                                                                            <input id="reason_2" name="reason_2" type="text"
                                                                                   class="form-control"
                                                                                   placeholder="Razon 2"
                                                                                   value="{{ $values["reason_2"]->value }}"
                                                                            >
                                                                            <x-input-error
                                                                                :messages="$errors->get('reason_2')"
                                                                                class="mt-2"/>
                                                                        </div>
                                                                        <div class="col-12 col-lg-12">
                                                                            <label for="reason_3" class="form-label">Servicio personalizado
                                                                            </label>
                                                                            <input id="reason_3" name="reason_3" type="text"
                                                                                   class="form-control"
                                                                                   placeholder="Razon 3"
                                                                                   value="{{ $values["reason_3"]->value }}"
                                                                            >
                                                                            <x-input-error
                                                                                :messages="$errors->get('reason_3')"
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
