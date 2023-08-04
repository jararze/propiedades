@push('styles')
@endpush
@push('script')
    <script src="{{ asset('backend/assets/js/images.js') }}"></script>
    <script>
        $(document).on("change", "#currency", function (event) {
            // alert(this.value);
            $(".currency_icon").text(this.value);
        });
        $(document).on("change", "#is_project", function (event) {
            if (this.value == 0) {
                $("#project_id").attr("disabled", true);
                $("#units").attr("disabled", true);
            } else {
                $("#project_id").removeAttr("disabled");
                $("#units").removeAttr("disabled");
            }
        });
    </script>
@endpush
<x-app-layout>
    <!--start content-->
    <main class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Propiedad</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Agregar propiedad</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!--end breadcrumb-->


        <div class="row">
            <form method="post" action="{{ route('admin.properties.register') }}" enctype="multipart/form-data">
                @csrf
                <div class="col-lg-12 mx-auto">
                    <div class="card">
                        <div class="card-header py-3 bg-transparent">
                            <div class="d-sm-flex align-items-center">
                                <h5 class="mb-2 mb-sm-0">Agregar una nueva propiedad</h5>
                                <div class="ms-auto">
                                    <button type="button" class="btn btn-secondary">Grabar borrador</button>
                                    <button type="submit" class="btn btn-primary">Publicar ahora</button>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">

                            <div class="row g-3">
                                <div class="col-12 col-lg-12">
                                    <div class="card shadow-none bg-light border">
                                        <div class="card-body">
                                            <div class="row g-3">
                                                <div class="col-2">
                                                    @if(count($projects) == 0)
                                                        <h4 class="align-middle"
                                                            style="font-size: 15px; margin-top: 37px">
                                                            No hay proyectos registrados agregue uno <a href="">aquí</a>
                                                        </h4>
                                                    @else
                                                        <label for="is_project" class="form-label">¿Es un
                                                            proyecto?</label>
                                                        <select class="form-select" id="is_project"
                                                                name="is_project">
                                                            <option value="0">No</option>
                                                            <option value="1">Si</option>
                                                        </select>
                                                        <x-input-error :messages="$errors->get('is_project')"
                                                                       class="mt-2"/>
                                                    @endif
                                                </div>
                                                @if(count($projects) != 0)
                                                    <div class="col-4">
                                                        <label for="units" class="form-label">Unidades</label>
                                                        <input value="{{ old('units') }}" id="units" name="units" type="text"
                                                               class="form-control"
                                                               placeholder="Unidades" disabled>
                                                        <x-input-error :messages="$errors->get('units')" class="mt-2"/>
                                                    </div>
                                                    <div class="col-6">
                                                        <label for="project_id" class="form-label">Selecciona el
                                                            proyecto asociado</label>
                                                        <select class="form-select" id="project_id"
                                                                name="project_id" disabled>
                                                            @foreach($projects as $project)
                                                                <option
                                                                    value="{{ $project->id }}">{{ $project->name }}</option>
                                                            @endforeach
                                                        </select>
                                                        <x-input-error :messages="$errors->get('project_id')"
                                                                       class="mt-2"/>
                                                    </div>
                                                @endif
                                                <div class="col-12">
                                                    <h4 class="align-middle"
                                                        sstyle="font-size: 15px; margin-top: 37px">¿No
                                                        encuetras tu proyecto? Crealo <a href="">aquí</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row g-3">
                                <div class="col-12 col-lg-8">
                                    <div class="card shadow-none bg-light border">
                                        <div class="card-body">
                                            <div class="row g-3">
                                                <div class="col-5">
                                                    <label for="name" class="form-label">Nombre</label>
                                                    <input value="{{ old('name') }}" id="name" name="name" type="text"
                                                           class="form-control"
                                                           placeholder="Nombre" required>
                                                    <x-input-error :messages="$errors->get('name')" class="mt-2"/>
                                                </div>
                                                <div class="col-7">
                                                    <label for="address" class="form-label">Direccion</label>
                                                    <input value="{{ old('address') }}" id="address" name="address"
                                                           type="text" class="form-control"
                                                           placeholder="Direccion">
                                                    <x-input-error :messages="$errors->get('address')" class="mt-2"/>
                                                </div>
                                                <div class="col-8">
                                                    <label for="neighborhood" class="form-label">Zona </label>
                                                    <input value="{{ old('neighborhood') }}" id="neighborhood"
                                                           name="neighborhood" type="text"
                                                           class="form-control"
                                                           placeholder="Zona">
                                                    <x-input-error :messages="$errors->get('neighborhood')"
                                                                   class="mt-2"/>
                                                </div>
                                                <div class="col-4">
                                                    <label for="size" class="form-label">Tamaño propiedad (mt2)</label>
                                                    <input value="{{ old('size') }}" id="size" name="size" type="number"
                                                           step="any"
                                                           class="form-control"
                                                           placeholder="Tamaño Propiedad">
                                                    <x-input-error :messages="$errors->get('size')" class="mt-2"/>
                                                </div>
                                                <div class="col-12 col-lg-3">
                                                    <label for="city" class="form-label">Ciudad</label>
                                                    <input value="{{ old('city') }}" id="city" name="city" type="text"
                                                           class="form-control"
                                                           placeholder="Ciudad">
                                                    <x-input-error :messages="$errors->get('city')" class="mt-2"/>
                                                </div>
                                                <div class="col-12 col-lg-3">
                                                    <label for="country" class="form-label">Pais</label>
                                                    <input value="{{ old('country') }}" id="country" name="country"
                                                           type="text" class="form-control"
                                                           placeholder="Pais">
                                                    <x-input-error :messages="$errors->get('country')" class="mt-2"/>
                                                </div>
                                                <div class="col-12 col-lg-3">
                                                    <label for="propertytype_id" class="form-label">¿Tipo
                                                        Propiedad?</label>
                                                    <select class="form-select" id="propertytype_id"
                                                            name="propertytype_id">
                                                        @foreach($propertyTypes as $property)
                                                            <option
                                                                value="{{ $property->id }}">{{ $property->type_name }}</option>
                                                        @endforeach
                                                    </select>
                                                    <x-input-error :messages="$errors->get('propertytype_id')"
                                                                   class="mt-2"/>
                                                </div>
                                                <div class="col-12 col-lg-3">
                                                    <label for="property_status" class="form-label">¿Propiedad
                                                        para?</label>
                                                    <select class="form-select" id="property_status"
                                                            name="property_status">
                                                        <option value="Venta">Venta</option>
                                                        <option value="Alquiler">Alquiler</option>
                                                        <option value="Anticretico">Anticretico</option>
                                                    </select>
                                                    <x-input-error :messages="$errors->get('property_status')"
                                                                   class="mt-2"/>
                                                </div>
                                                <div class="col-12 col-lg-4">
                                                    <label for="currency" class="form-label">Moneda</label>
                                                    <div class="input-group">
                                                        <select class="form-select" id="currency"
                                                                name="currency">
                                                            <option value="Bs">Bolivianos</option>
                                                            <option value="$us">Dolares</option>
                                                        </select>
                                                        <x-input-error :messages="$errors->get('currency')"
                                                                       class="mt-2"/>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-lg-4">
                                                    <label for="lowest_price" class="form-label">Precio minimo</label>
                                                    <div class="input-group">
                                                        <input value="{{ old('lowest_price') }}" id="lowest_price"
                                                               name="lowest_price" type="number"
                                                               step="any"
                                                               class="form-control" placeholder="Precio minimo"
                                                               required>
                                                        <span class="input-group-text currency_icon">Bs</span>
                                                        <x-input-error :messages="$errors->get('lowest_price')"
                                                                       class="mt-2"/>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-lg-4">
                                                    <label for="max_price" class="form-label">Precio Máximo</label>
                                                    <div class="input-group">
                                                        <input value="{{ old('max_price') }}" id="max_price"
                                                               name="max_price" type="number" step="any"
                                                               class="form-control"
                                                               placeholder="Precio Máximo" required>
                                                        <span class="input-group-text currency_icon">Bs</span>
                                                    </div>
                                                    <x-input-error :messages="$errors->get('max_price')" class="mt-2"/>
                                                </div>
                                                <div class="col-12 col-lg-12">
                                                    <label for="thumbnail" class="form-label">Imagen Principal</label>
                                                    <div class="input-group">
                                                        <input value="{{ old('thumbnail') }}" id="thumbnail"
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

                                                <div class="col-12 col-lg-12">
                                                    <label for="multiple_images" class="form-label">Imagenes</label>
                                                    <div class="input-group">
                                                        <input value="{{ old('multiple_images') }}" id="multiple_images"
                                                               name="multiple_images[]" type="file"
                                                               class="form-control"
                                                               placeholder="Imagenes" multiple
                                                               accept="image/png, image/gif, image/jpeg">
                                                    </div>
                                                    <div class="row" id="preview_img" style="margin-top: 20px"></div>
                                                    <x-input-error :messages="$errors->get('multiple_images')"
                                                                   class="mt-2"/>
                                                </div>
                                                <div class="col-12">
                                                    <label for="short_description" class="form-label">Descripcion
                                                        Corta</label>
                                                    <input value="{{ old('short_description') }}" id="short_description"
                                                           name="short_description" type="text"
                                                           class="form-control"
                                                           placeholder="Descripcion Corta" required>
                                                    <x-input-error :messages="$errors->get('short_description')"
                                                                   class="mt-2"/>
                                                </div>
                                                <div class="col-12">
                                                    <label for="long_description" class="form-label">Descripcion</label>
                                                    <textarea id="long_description" name="long_description" type="text"
                                                              class="form-control"
                                                              placeholder="Descripcion">{{ old('long_description') }}</textarea>
                                                    <x-input-error :messages="$errors->get('long_description')"
                                                                   class="mt-2"/>
                                                </div>
                                                <div class="col-12">
                                                    <div class="row add_item">
                                                        <div class="col-md-4">
                                                            <div class="mb-3">
                                                                <label for="facility_name" class="form-label">Servicios
                                                                    cercanos </label>
                                                                <select name="facility_id[]" id="facility_name"
                                                                        class="form-select">
                                                                    <option value="NH">Servicio</option>
                                                                    @foreach($facilities as $facility)
                                                                        <option
                                                                            value="{{ $facility->id }}">{{ $facility->name }}
                                                                        </option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="mb-3">
                                                                <label for="nameFac" class="form-label">
                                                                    Nombre del lugar </label>
                                                                <input type="text" name="nameFac[]" id="nameFac"
                                                                       class="form-control"
                                                                       placeholder="Nombre del lugar">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="mb-3">
                                                                <label for="distance" class="form-label">
                                                                    Distancia </label>
                                                                <input type="text" name="distance[]" id="distance"
                                                                       class="form-control"
                                                                       placeholder="Distancia (Km)">
                                                            </div>
                                                        </div>
                                                        <div class="form-group col-md-2" style="padding-top: 30px;">
                                                            <a class="btn btn-success addeventmore"><i
                                                                    class="fa fa-plus-circle"
                                                                    style="margin-left: 0 !important;">Agregar</i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-12 col-lg-4">
                                    <div class="card shadow-none bg-light border">
                                        <div class="card-body">
                                            <div class="row g-3">
                                                <div class="col-6">
                                                    <label for="bedrooms" class="form-label"># Habitaciones</label>
                                                    <input value="{{ old('bedrooms') }}" id="bedrooms" name="bedrooms"
                                                           type="number" step="any"
                                                           class="form-control"
                                                           placeholder="# Habitaciones">
                                                    <x-input-error :messages="$errors->get('bedrooms')" class="mt-2"/>
                                                </div>
                                                <div class="col-6">
                                                    <label for="bathrooms" class="form-label"># Baños</label>
                                                    <input value="{{ old('bathrooms') }}" id="bathrooms"
                                                           name="bathrooms" type="number" step="any"
                                                           class="form-control"
                                                           placeholder="# Baños">
                                                    <x-input-error :messages="$errors->get('bathrooms')" class="mt-2"/>
                                                </div>
                                                <div class="col-6">
                                                    <label for="garage" class="form-label"># Garajes</label>
                                                    <input value="{{ old('garage') }}" id="garage" name="garage"
                                                           type="number" step="any"
                                                           class="form-control"
                                                           placeholder="# Garajes">
                                                    <x-input-error :messages="$errors->get('garage')" class="mt-2"/>
                                                </div>
                                                <div class="col-6">
                                                    <label for="garage_size" class="form-label">Tamaño (mt2) </label>
                                                    <input value="{{ old('garage_size') }}" id="garage_size"
                                                           name="garage_size" type="number" step="any"
                                                           class="form-control"
                                                           placeholder="Tamaño Garaje">
                                                    <x-input-error :messages="$errors->get('garage_size')"
                                                                   class="mt-2"/>
                                                </div>
                                                <div class="col-12">
                                                    <label for="video" class="form-label">Video (Youtube) </label>
                                                    <input value="{{ old('video') }}" id="video" name="video"
                                                           type="text" class="form-control"
                                                           placeholder="https://youtube.com">
                                                    <x-input-error :messages="$errors->get('video')" class="mt-2"/>
                                                </div>
                                                <div class="col-6">
                                                    <label for="latitude" class="form-label">Latitud </label>
                                                    <input value="{{ old('latitude') }}" id="latitude" name="latitude"
                                                           type="number" step="any"
                                                           class="form-control"
                                                           placeholder="Latitud">
                                                    <x-input-error :messages="$errors->get('latitude')" class="mt-2"/>
                                                </div>
                                                <div class="col-6">
                                                    <label for="longitude" class="form-label">Longitud </label>
                                                    <input value="{{ old('longitude') }}" id="longitude"
                                                           name="longitude" type="number" step="any"
                                                           class="form-control"
                                                           placeholder="Longitud">
                                                    <x-input-error :messages="$errors->get('longitude')" class="mt-2"/>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-check">
                                                        <label class="form-check-label" for="featured">
                                                            Destacado
                                                        </label>
                                                        <input class="form-check-input" name="featured" type="checkbox"
                                                               value="1" id="featured">
                                                    </div>
                                                    <x-input-error :messages="$errors->get('featured')" class="mt-2"/>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-check">
                                                        <label class="form-check-label" for="hot">
                                                            Hot
                                                        </label>
                                                        <input class="form-check-input" name="hot" type="checkbox"
                                                               value="1" id="hot">
                                                    </div>
                                                    <x-input-error :messages="$errors->get('hot')" class="mt-2"/>
                                                </div>
                                                <div class="col-12">
                                                    <label for="agent_id" class="form-label">Agente</label>
                                                    @php
                                                        $blocked   = (Auth::user()->role === 'agent') ? "disabled" : "";
                                                    @endphp
                                                    <select id="agent_id" name="agent_id" class="form-select"
                                                            required {{ $blocked }}>
                                                        @foreach($agents as $agent)
                                                            @php $selected2 = ($agent->id == Auth::user()->id) ? "selected='selected'" : ""; @endphp
                                                            <option
                                                                value="{{ $agent->id }}" {{ $selected2 }}>{{ $agent->name }} {{ $agent->lastname }}</option>
                                                        @endforeach
                                                    </select>
                                                    <x-input-error :messages="$errors->get('agent_id')" class="mt-2"/>
                                                </div>
                                                <div class="col-12">
                                                    <label for="status" class="form-label">Estado</label>
                                                    <select id="status" name="status" class="form-select" required>
                                                        <option value="1">Publicado</option>
                                                        <option value="0">No activo</option>
                                                    </select>
                                                    <x-input-error :messages="$errors->get('status')" class="mt-2"/>
                                                </div>
                                                <div class="col-12">
                                                    <h5>Amenities</h5>
                                                    <div class="category-list">
                                                        @foreach($amenities as $amenity)
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox"
                                                                       value="{{ $amenity->id }}"
                                                                       id="{{ $amenity->name }}" name="amenities_id[]">
                                                                <label class="form-check-label"
                                                                       for="{{ $amenity->name }}">
                                                                    {{ $amenity->name }}
                                                                </label>
                                                            </div>
                                                        @endforeach

                                                    </div>
                                                </div>
                                            </div><!--end row-->
                                        </div>
                                    </div>
                                </div>

                                <div style="visibility: hidden">
                                    <div class="whole_extra_item_add" id="whole_extra_item_add">
                                        <div class="whole_extra_item_delete" id="whole_extra_item_delete">
                                            <div class="container mt-2">
                                                <div class="row">

                                                    <div class="form-group col-md-4">
                                                        <label for="facility_name"
                                                               class="form-label">Servicio cercano </label>
                                                        <select name="facility_id[]" id="facility_name"
                                                                class="form-select">
                                                            <option value="NH">Servicio</option>
                                                            @foreach($facilities as $facility)
                                                                <option
                                                                    value="{{ $facility->id }}">{{ $facility->name }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-md-3">
                                                        <label for="nameFac" class="form-label">
                                                            Distancia </label>
                                                        <input type="text" name="nameFac[]" id="nameFac"
                                                               class="form-control" placeholder="Nombre del lugar">
                                                    </div>
                                                    <div class="form-group col-md-3">
                                                        <label for="distance" class="form-label">
                                                            Distancia </label>
                                                        <input type="text" name="distance[]" id="distance"
                                                               class="form-control" placeholder="Distancia (Km)">
                                                    </div>
                                                    <div class="form-group col-md-2" style="padding-top: 20px">
                                                        <span class="btn btn-success btn-sm addeventmore"><i
                                                                class="fa fa-plus-circle"
                                                                style="margin-left: 0 !important;">Agregar</i></span>
                                                        <span class="btn btn-danger btn-sm removeeventmore"><i
                                                                class="fa fa-minus-circle"
                                                                style="margin-left: 0 !important;">Quitar</i></span>
                                                    </div>
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
            @if (session('status') === 'created')
                <div class="alert border-0 bg-light-success alert-dismissible fade show py-2"
                     style="margin-top: 10px">
                    <div class="d-flex align-items-center">
                        <div class="fs-3 text-success"><i class="bi bi-check-circle-fill"></i>
                        </div>
                        <div class="ms-3">
                            <div class="text-success">Propiedad creada.</div>
                        </div>
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                            aria-label="Close"></button>
                </div>
            @endif
        </div><!--end row-->

    </main>
    <!--end page main-->

</x-app-layout>
