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
            <div class="breadcrumb-title pe-3">Imagen principal</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Editar imagen principal</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!--end breadcrumb-->

        <div class="row">
            <div class="col-12 col-lg-12 d-flex">
                <div class="card">
                    <div class="card-header py-3">
                        <h6 class="mb-0">Editar imagen principal</h6>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 col-lg-12 d-flex">
                                <div class="card border shadow-none w-100">

                                    <div class="card-body">

                                        <form method="post" action="{{ route("admin.configuration.update") }}"
                                              enctype="multipart/form-data">
                                            @csrf
                                            <div class="col-lg-12 mx-auto">
                                                <div class="card">
                                                    <div class="card-header py-3 bg-transparent">
                                                        <div class="d-sm-flex align-items-center">
                                                            <h5 class="mb-2 mb-sm-0">Modificar Imagen</h5>
                                                            <div class="ms-auto">

                                                                <button type="submit" class="btn btn-primary">Modificar
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="row g-3">
                                                            <div class="col-12 col-lg-12">
                                                                <div class="card shadow-none bg-light border">
                                                                    <div class="card-body">
                                                                        <div class="row g-3">
                                                                            <div class="col-12 col-lg-12">
                                                                                <div class="card">
                                                                                    <img
                                                                                        src="{{ (!empty($values[0]->value)) ? url('upload/configuration/principal_image/' .  $values[0]->value) : url('upload/No_Image_Available.jpg') }}"
                                                                                        alt="" style="align-content: center; height: 500px">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-12 col-lg-12">
                                                                                <input type="hidden" name="old_img"
                                                                                       value="{{ $values[0]->value }}">
                                                                                <label for="thumbnail" class="form-label">Cambiar
                                                                                    Imagen
                                                                                    Principal</label>
                                                                                <div class="input-group">
                                                                                    <input id="thumbnail" name="thumbnail"
                                                                                           type="file"
                                                                                           class="form-control"
                                                                                           placeholder="Imagen Principal"
                                                                                           accept="image/png, image/gif, image/jpeg"
                                                                                           onChange="mainThamUrl(this)"
                                                                                           required>
                                                                                </div>
                                                                                <img src="" id="mainThmb"
                                                                                     style="margin-top: 20px; border-radius: 10px; border: 1px solid #e6e6e6;" alt="">
                                                                                <x-input-error
                                                                                    :messages="$errors->get('thumbnail')"
                                                                                    class="mt-2"/>
                                                                                {{  implode('', $errors->all()) }}
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>


                                                        </div><!--end row-->
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                        @if (session('status') === 'image-updated')
                                            <div class="alert border-0 bg-light-success alert-dismissible fade show py-2"
                                                 style="margin-top: 10px">
                                                <div class="d-flex align-items-center">
                                                    <div class="fs-3 text-success"><i class="bi bi-check-circle-fill"></i>
                                                    </div>
                                                    <div class="ms-3">
                                                        <div class="text-success">Imagen principal actualizada.</div>
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
