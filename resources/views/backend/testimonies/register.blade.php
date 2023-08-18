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
            <div class="breadcrumb-title pe-3">Agregar Testnio</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Agregar Testimonio</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!--end breadcrumb-->

        <div class="card">
            <div class="card-header py-3">
                <h6 class="mb-0">Agregar Testimonio</h6>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-12 col-lg-12 d-flex">
                        <div class="card border shadow-none w-100">
                            <div class="card-body">
                                <form class="row g-3" method="post" action="{{ route('admin.testimonies.register') }}"
                                      enctype="multipart/form-data">
                                    @csrf
                                    <div class="col-12">
                                        <label for="name" class="form-label">Nombre </label>
                                        <input id="name" name="name" type="text" class="form-control"
                                               placeholder="Nombre" required>
                                        <x-input-error :messages="$errors->get('name')" class="mt-2"/>
                                    </div>
                                    <div class="col-12">
                                        <label for="photo" class="form-label">Foto </label>
                                        <input id="photo" name="photo" type="file" class="form-control"
                                               placeholder="Foto" accept="image/png, image/gif, image/jpeg"
                                               onChange="mainThamUrl(this)"  required>
                                        <img src="" id="mainThmb"
                                             style="margin-top: 20px; border-radius: 10px; border: 1px solid #e6e6e6;" alt="">
                                        <x-input-error :messages="$errors->get('photo')" class="mt-2"/>
                                    </div>
                                    <div class="col-12">
                                        <label for="testimony" class="form-label">Testimonio </label>
                                        <input id="testimony" name="testimony" type="text" class="form-control"
                                               placeholder="Testimonio" required>
                                        <x-input-error :messages="$errors->get('testimony')" class="mt-2"/>
                                    </div>
                                    <div class="col-12">
                                        <label for="job" class="form-label">Posicion </label>
                                        <input id="job" name="job" type="text" class="form-control"
                                               placeholder="Posicion" required>
                                        <x-input-error :messages="$errors->get('job')" class="mt-2"/>
                                    </div>
                                    <div class="col-12">
                                        <div class="d-grid">
                                            <button type="submit" class="btn btn-primary">Agregar</button>
                                        </div>
                                    </div>
                                </form>
                                @if (session('status') === 'created')
                                    <div class="alert border-0 bg-light-success alert-dismissible fade show py-2"
                                         style="margin-top: 10px">
                                        <div class="d-flex align-items-center">
                                            <div class="fs-3 text-success"><i class="bi bi-check-circle-fill"></i>
                                            </div>
                                            <div class="ms-3">
                                                <div class="text-success">Testimonio creada.</div>
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
