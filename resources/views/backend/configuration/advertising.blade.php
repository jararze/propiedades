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
                        <h6 class="mb-0">Editar publicidad</h6>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 col-lg-12">
                                <div class="card border shadow-none w-100">

                                    <div class="card-body">

                                        <form method="post" action="{{ route("admin.configuration.advertising.update") }}" enctype="multipart/form-data">
                                            @csrf
                                            <div class="col-lg-12 mx-auto">
                                                <div class="card">
                                                    <div class="card-header py-3 bg-transparent">
                                                        <div class="d-sm-flex align-items-center">
                                                            <h5 class="mb-2 mb-sm-0">Modificar publicidad</h5>
                                                            <div class="ms-auto">

                                                                <button type="submit" class="btn btn-primary">Modificar
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
{{--                                                    @dd($values[0]->id)--}}
                                                    <div class="card-body">
                                                        <div class="col-12 col-lg-12">
                                                            <div class="card shadow-none bg-light border">
                                                                <div class="card-body">
                                                                    <div class="row g-3">
                                                                        <div class="col-12 col-lg-12">
                                                                            <label for="banner" class="form-label">Banner
                                                                            </label>
                                                                            <input id="banner" name="banner" type="text"
                                                                                   class="form-control"
                                                                                   placeholder="Banner"
                                                                                   value="{{ $values[0]->banner }}"
                                                                                   required
                                                                            >
                                                                            <x-input-error
                                                                                :messages="$errors->get('banner')"
                                                                                class="mt-2"/>
                                                                        </div>
                                                                        <div class="col-12 col-lg-12">
                                                                            <label for="title" class="form-label">Titulo
                                                                            </label>
                                                                            <input id="title" name="title" type="text"
                                                                                   class="form-control"
                                                                                   placeholder="Titulo"
                                                                                   value="{{ $values[0]->title }}"
                                                                                   required
                                                                            >
                                                                            <x-input-error
                                                                                :messages="$errors->get('title')"
                                                                                class="mt-2"/>
                                                                        </div>
                                                                        <div class="col-12 col-lg-12">
                                                                            <label for="thumbnail" class="form-label">Imagen Principal</label>
                                                                            <div class="input-group">
                                                                                <input value="{{ old('thumbnail') }}" id="thumbnail"
                                                                                       required
                                                                                       name="thumbnail" type="file"
                                                                                       class="form-control"
                                                                                       placeholder="Imagen Principal"
                                                                                       accept="image/png, image/gif, image/jpeg"
                                                                                       onChange="mainThamUrl(this)">
                                                                            </div>
                                                                            <img src="" id="mainThmb"
                                                                                 style="margin-top: 20px; border-radius: 10px; border: 1px solid #e6e6e6;">
                                                                            <x-input-error :messages="$errors->get('thumbnail')" class="mt-2"/>
                                                                        </div>
                                                                        <div class="card">
                                                                            <input type="hidden" name="old_img"
                                                                                   value="{{ $values[0]->image }}">
                                                                            <img
                                                                                src="{{ (!empty($values[0]->image)) ? url('upload/configuration/advertising/' .  $values[0]->image) : url('upload/No_Image_Available.jpg') }}"
                                                                                alt="" style="align-content: center; width: 40%">
                                                                        </div>
                                                                        <div class="col-12 col-lg-12">
                                                                            <label for="button1" class="form-label">Boton 1
                                                                            </label>
                                                                            <input id="button1" name="button1" type="text"
                                                                                   class="form-control"
                                                                                   placeholder="Boton 1"
                                                                                   value="{{ $values[0]->button1 }}"
                                                                            >
                                                                            <x-input-error
                                                                                :messages="$errors->get('button1')"
                                                                                class="mt-2"/>
                                                                        </div>
                                                                        <div class="col-12 col-lg-12">
                                                                            <label for="button1_link" class="form-label">URL boton 1</label>
                                                                            <input id="button1_link" name="button1_link" type="text" class="form-control"
                                                                                   placeholder="https://google.com" value="{{ $values[0]->button1_link }}">
                                                                            <x-input-error :messages="$errors->get('button1_link')" class="mt-2"/>
                                                                        </div>
                                                                        <div class="col-12 col-lg-12">
                                                                            <label for="button1_icon" class="form-label">Ícono Boton 1</label>
                                                                            <input id="button1_icon" name="button1_icon" type="text" class="form-control"
                                                                                   placeholder="Ícono" value="{{ $values[0]->button1_icon }}">
                                                                            <x-input-error :messages="$errors->get('button1_icon')" class="mt-2"/>
                                                                        </div>
                                                                        <div class="col-12 col-lg-12">
                                                                            <p  style="margin-bottom: 0 !important">
                                                                                Puedes buscar iconos <a target="_blank" href="https://fontawesome.com/icons">aquí</a>
                                                                                o por <a target="_blank" href="https://icons.getbootstrap.com/">aquí</a>
                                                                            </p>
                                                                        </div>
                                                                        <div class="col-12 col-lg-12">
                                                                            <label for="button2" class="form-label">Boton 2</label>
                                                                            <input id="button2" name="button2" type="text" class="form-control"
                                                                                   placeholder="Boton 2" value="{{ $values[0]->button2 }}">
                                                                            <x-input-error :messages="$errors->get('button2')" class="mt-2"/>
                                                                        </div>
                                                                        <div class="col-12 col-lg-12">
                                                                            <label for="button2_link" class="form-label">URL boton 2</label>
                                                                            <input id="button2_link" name="button2_link" type="text" class="form-control"
                                                                                   placeholder="https://google.com" value="{{ $values[0]->button2_link }}">
                                                                            <x-input-error :messages="$errors->get('button2_link')" class="mt-2"/>
                                                                        </div>
                                                                        <div class="col-12 col-lg-12">
                                                                            <label for="button2_icon" class="form-label">Ícono 2</label>
                                                                            <input id="button2_icon" name="button2_icon" type="text" class="form-control"
                                                                                   placeholder="Ícono" value="{{ $values[0]->button2_icon }}">
                                                                            <x-input-error :messages="$errors->get('button2_icon')" class="mt-2"/>
                                                                        </div>
                                                                        <div class="col-12 col-lg-12">
                                                                            <p  style="margin-bottom: 0 !important">
                                                                                Puedes buscar iconos <a target="_blank" href="https://fontawesome.com/icons">aquí</a>
                                                                                o por <a target="_blank" href="https://icons.getbootstrap.com/">aquí</a>
                                                                            </p>
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
