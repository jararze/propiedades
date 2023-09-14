@push('styles')
    <link href="{{ asset ('backend/assets/plugins/datetimepicker/css/classic.css') }}" rel="stylesheet"/>
    <link href="{{ asset ('backend/assets/plugins/datetimepicker/css/classic.time.css') }}" rel="stylesheet"/>
    <link href="{{ asset ('backend/assets/plugins/datetimepicker/css/classic.date.css') }}" rel="stylesheet"/>
    <link rel="stylesheet"
          href="{{ asset('backend/assets/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.min.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
    <style>
        #map {
            height: 400px;
            width: 100%;
        }
    </style>
@endpush
@push('script')
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
    <script src="{{ asset('backend/assets/js/images.js') }}"></script>
    <script src="{{ asset('backend/assets/js/map.js') }}"></script>
    <script src="{{ asset ('backend/assets/plugins/datetimepicker/js/legacy.js') }}"></script>
    <script src="{{ asset ('backend/assets/plugins/datetimepicker/js/picker.js') }}"></script>
    <script src="{{ asset ('backend/assets/plugins/datetimepicker/js/picker.time.js') }}"></script>
    <script src="{{ asset ('backend/assets/plugins/datetimepicker/js/picker.date.js') }}"></script>
    <script src="{{ asset ('backend/assets/plugins/bootstrap-material-datetimepicker/js/moment.min.js') }}"></script>
    <script
        src="{{ asset ('backend/assets/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.min.js') }}"></script>
    <script src="{{ asset ('backend/assets/js/form-date-time-pickes.js') }}"></script>
    <script>
        function toggle() {
            var x = document.getElementById("map");
            if (x.style.display === "none") {
                x.style.display = "block";
            } else {
                x.style.display = "none";
            }
        }
        $(document).on("change", "#currency", function (event) {
            // alert(this.value);
            $(".currency_icon").text(this.value);
        });
        $(document).on("change", "#is_project", function (event) {
            if (this.value == 0) {
                $("#project_id").attr("disabled", true);
            } else {
                $("#project_id").removeAttr("disabled");
            }
        });
        $(document).on("change", "#propertytype_id", function (event){
            if(this.value == 6){
                $("#size").text("Tamaño terreno MIN (mt2)")
                $("#size_max").text("Tamaño terreno MAX (mt2)")
            }else{
                $("#size").text("Tamaño terreno (mt2)")
                $("#size_max").text("Tamaño contruido (mt2)")
            }
        })
    </script>
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
                        <li class="breadcrumb-item active" aria-current="page">Editar Proyecto</li>
                    </ol>
                </nav>
            </div>
            <div class="ms-auto">
                <div class="btn-group">
                    <button type="button" class="btn btn-primary">Acciones</button>
                    <button type="button" class="btn btn-primary split-bg-primary dropdown-toggle dropdown-toggle-split"
                            data-bs-toggle="dropdown"><span class="visually-hidden">Menu</span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end">
                        <a class="dropdown-item" href="{{ route('admin.project.register') }}">Añadir</a>
                        <a class="dropdown-item" href="{{ route('admin.project.index') }}">Lista</a>
                    </div>
                </div>
            </div>
        </div>
        <!--end breadcrumb-->

        <div class="card">
            <div class="card-header py-3">
                <h6 class="mb-0">Editar datos principales de el proyecto</h6>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-12 col-lg-12 d-flex">
                        <div class="card border shadow-none w-100">

                            <div class="card-body">

                                <form method="post" action="{{ route('admin.project.edit.info') }}"
                                      enctype="multipart/form-data">
                                    @csrf
                                    <div class="col-lg-12 mx-auto">
                                        <div class="card">
                                            <div class="card-header py-3 bg-transparent">
                                                <div class="d-sm-flex align-items-center">
                                                    <h5 class="mb-2 mb-sm-0">Modificar los datos principales de el proyecto</h5>
                                                    <div class="ms-auto">

                                                        <button type="submit" class="btn btn-primary">Modificar</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="row g-3">
                                                    <div class="col-12 col-lg-8">
                                                        <div class="card shadow-none bg-light border">
                                                            <div class="card-body">
                                                                <div class="row g-3">
                                                                    <div class="col-5">
                                                                        <label for="name"
                                                                               class="form-label">Nombre</label>
                                                                        <input type="hidden" name="id" id="id"
                                                                               class="form-control"
                                                                               value="{{ $property->id }}">
                                                                        <input id="name" name="name" type="text"
                                                                               class="form-control"
                                                                               placeholder="Nombre"
                                                                               value="{{ $property->name }}" required>
                                                                        <x-input-error :messages="$errors->get('name')"
                                                                                       class="mt-2"/>
                                                                    </div>
                                                                    <div class="col-7">
                                                                        <label for="address" class="form-label">Direccion</label>
                                                                        <input id="address" name="address" type="text"
                                                                               class="form-control"
                                                                               placeholder="Direccion"
                                                                               value="{{ $property->address }}">
                                                                        <x-input-error
                                                                            :messages="$errors->get('address')"
                                                                            class="mt-2"/>
                                                                    </div>
                                                                    <div class="col-4">
                                                                        <label for="neighborhood" class="form-label">Zona </label>
                                                                        <input id="neighborhood" name="neighborhood"
                                                                               type="text"
                                                                               class="form-control"
                                                                               placeholder="Zona"
                                                                               value="{{ $property->neighborhood }}">
                                                                        <x-input-error
                                                                            :messages="$errors->get('neighborhood')"
                                                                            class="mt-2"/>
                                                                    </div>
                                                                    <div class="col-4">
                                                                        <label for="size" class="form-label">Tamaño terreno (mt2)</label>
                                                                        <input id="size" name="size" type="number"
                                                                               step="any"
                                                                               class="form-control"
                                                                               placeholder="Tamaño Propiedad"
                                                                               value="{{ $property->size }}">
                                                                        <x-input-error :messages="$errors->get('size')"
                                                                                       class="mt-2"/>
                                                                    </div>
                                                                    <div class="col-4">
                                                                        <label for="size_max" class="form-label">Tamaño contruido
                                                                            (mt2)</label>
                                                                        <input id="size_max" name="size_max" type="number"
                                                                               step="any"
                                                                               class="form-control"
                                                                               placeholder="Tamaño Propiedad"
                                                                               value="{{ $property->size_max }}">
                                                                        <x-input-error :messages="$errors->get('size_max')"
                                                                                       class="mt-2"/>
                                                                    </div>
                                                                    <div class="col-12 col-lg-3">
                                                                        <label for="city"
                                                                               class="form-label">Ciudad</label>
                                                                        <select class="form-select" id="city"
                                                                                name="city">
                                                                            @foreach($cities as $city)
                                                                                @php
                                                                                    $selected2 = ($city->name == $property->city) ? 'selected' : '';
                                                                                @endphp
                                                                                <option {{ $selected2 }} value="{{ $city->name }}">{{ $city->name }}
                                                                            @endforeach
                                                                        </select>
                                                                        <x-input-error :messages="$errors->get('city')"
                                                                                       class="mt-2"/>
                                                                    </div>
                                                                    <div class="col-12 col-lg-3">
                                                                        <label for="country"
                                                                               class="form-label">Pais</label>
                                                                        <input id="country" name="country" type="text"
                                                                               class="form-control"
                                                                               placeholder="Pais"
                                                                               value="{{ $property->country }}">
                                                                        <x-input-error
                                                                            :messages="$errors->get('country')"
                                                                            class="mt-2"/>
                                                                    </div>
                                                                    <div class="col-12 col-lg-3">
                                                                        <label for="propertytype_id" class="form-label">¿Tipo
                                                                            Proyecto? </label>
                                                                        <select class="form-select" id="propertytype_id"
                                                                                name="propertytype_id">
                                                                            @foreach($propertyType as $prop)
                                                                                @php
                                                                                    $selected = "";
                                                                                    if($prop->id == $property->propertytype_id){
                                                                                        $selected = "selected='selected'";
                                                                                    }
                                                                                @endphp
                                                                                <option value="{{ $prop->id }}"
                                                                                    {{ $selected }}>{{ $prop->type_name }}</option>
                                                                            @endforeach
                                                                        </select>
                                                                        <x-input-error
                                                                            :messages="$errors->get('propertytype_id')"
                                                                            class="mt-2"/>
                                                                    </div>
                                                                    <div class="col-12 col-lg-3">
                                                                        <label for="property_status" class="form-label">¿Proyecto
                                                                            para?</label>
                                                                        <select class="form-select" id="property_status"
                                                                                name="property_status">
                                                                            <option
                                                                                {{ $selectedTS = ($property->property_status == 'Venta') ? "selected='selected'" : "" }} value="Venta">
                                                                                Venta
                                                                            </option>
                                                                            <option
                                                                                {{ $selectedTS = ($property->property_status == 'Alquiler') ? "selected='selected'" : "" }} value="Alquiler">
                                                                                Alquiler
                                                                            </option>
                                                                            <option
                                                                                {{ $selectedTS = ($property->property_status == 'Anticretico') ? "selected='selected'" : "" }} value="Anticretico">
                                                                                Anticretico
                                                                            </option>
                                                                        </select>
                                                                        <x-input-error
                                                                            :messages="$errors->get('property_status')"
                                                                            class="mt-2"/>
                                                                    </div>
                                                                    <div class="col-12 col-lg-4">
                                                                        <label for="project_status" class="form-label">Estado
                                                                            Proyecto</label>
                                                                        <div class="input-group">
                                                                            <select class="form-select" id="project_status"
                                                                                    name="project_status">
                                                                                <option
                                                                                    {{ $selectedTS = ($property->project_status == '0') ? "selected='selected'" : "" }} value="En etapa 0">
                                                                                    En etapa 0
                                                                                </option>
                                                                                <option
                                                                                    {{ $selectedTS = ($property->project_status == '1') ? "selected='selected'" : "" }} value="En Contrucción">
                                                                                    En Contrucción
                                                                                </option>
                                                                                <option
                                                                                    {{ $selectedTS = ($property->project_status == '2') ? "selected='selected'" : "" }} value="Terminado">
                                                                                    Terminado
                                                                                </option>
                                                                            </select>
                                                                            <x-input-error :messages="$errors->get('project_status')"
                                                                                           class="mt-2"/>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12 col-lg-4">
                                                                        <label for="delivery" class="form-label">Entrega</label>
                                                                        <div class="input-group">
                                                                            <input class="result form-control" type="text"
                                                                                   id="delivery"
                                                                                   name="delivery" placeholder="Entrega el" value="{{ $property->delivery }}">
                                                                            <x-input-error :messages="$errors->get('delivery')"
                                                                                           class="mt-2"/>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12 col-lg-4">
                                                                        <label for="construction_Date" class="form-label">Fecha
                                                                            Contrucción</label>
                                                                        <div class="input-group">
                                                                            <input id="construction_Date" name="construction_Date"
                                                                                   type="text" class="form-control"
                                                                                   placeholder="Fecha contrucción" value="{{ $property->construction_Date }}">
                                                                            <x-input-error :messages="$errors->get('construction_Date')"
                                                                                           class="mt-2"/>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12 col-lg-4">
                                                                        <label for="currency" class="form-label">Moneda</label>
                                                                        <div class="input-group">
                                                                            <select class="form-select" id="currency"
                                                                                    name="currency">
                                                                                <option {{ $selectedCR = ($property->currency == 'Bs') ? "selected='selected'" : "" }} value="Bs">Bolivianos</option>
                                                                                <option {{ $selectedCR = ($property->currency == '$us') ? "selected='selected'" : "" }} value="$us">Dolares</option>
                                                                            </select>
                                                                            <x-input-error
                                                                                :messages="$errors->get('currency')"
                                                                                class="mt-2"/>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12 col-lg-4">
                                                                        <label for="lowest_price" class="form-label">Precio
                                                                            minimo</label>
                                                                        <div class="input-group">
                                                                            <input id="lowest_price" name="lowest_price"
                                                                                   type="number"
                                                                                   step="any"
                                                                                   class="form-control"
                                                                                   placeholder="Precio minimo"
                                                                                   required
                                                                                   value="{{ $property->lowest_price }}">
                                                                            <span class="input-group-text currency_icon">{{ $Moneda = ($property->currency == 'Bs') ? "Bs" : '$us' }}</span>
                                                                            <x-input-error
                                                                                :messages="$errors->get('lowest_price')"
                                                                                class="mt-2"/>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12 col-lg-4">
                                                                        <label for="max_price" class="form-label">Precio
                                                                            Máximo</label>
                                                                        <div class="input-group">
                                                                            <input id="max_price" name="max_price"
                                                                                   type="number" step="any"
                                                                                   class="form-control"
                                                                                   placeholder="Precio Máximo" required
                                                                                   value="{{ $property->max_price }}">
                                                                            <span class="input-group-text currency_icon">{{ $Moneda = ($property->currency == 'Bs') ? "Bs" : '$us' }}</span>
                                                                        </div>
                                                                        <x-input-error
                                                                            :messages="$errors->get('max_price')"
                                                                            class="mt-2"/>
                                                                    </div>
                                                                    <div class="col-12">
                                                                        <label for="short_description"
                                                                               class="form-label">Descripcion
                                                                            Corta</label>
                                                                        <input id="short_description"
                                                                               name="short_description" type="text"
                                                                               class="form-control"
                                                                               placeholder="Descripcion Corta" required
                                                                               value="{{ $property->short_description }}">
                                                                        <x-input-error
                                                                            :messages="$errors->get('short_description')"
                                                                            class="mt-2"/>
                                                                    </div>
                                                                    <div class="col-12">
                                                                        <label for="long_description"
                                                                               class="form-label">Descripcion</label>
                                                                        <textarea id="long_description"
                                                                                  name="long_description" type="text"
                                                                                  class="form-control"
                                                                                  placeholder="Descripcion"
                                                                                  required> {{ $property->long_description }}</textarea>
                                                                        <x-input-error
                                                                            :messages="$errors->get('long_description')"
                                                                            class="mt-2"/>
                                                                    </div>
                                                                    <div class="col-6">
                                                                        <label for="bedrooms" class="form-label">#
                                                                            Habitaciones Min</label>
                                                                        <input id="bedrooms" name="bedrooms"
                                                                               type="number" step="any"
                                                                               class="form-control"
                                                                               placeholder="# Habitaciones"
                                                                               value="{{ $property->bedrooms }}">
                                                                        <x-input-error
                                                                            :messages="$errors->get('bedrooms')"
                                                                            class="mt-2"/>
                                                                    </div>
                                                                    <div class="col-6">
                                                                        <label for="bedrooms_max" class="form-label">#
                                                                            Habitaciones Max</label>
                                                                        <input id="bedrooms_max" name="bedrooms_max"
                                                                               type="number" step="any"
                                                                               class="form-control"
                                                                               placeholder="# Habitaciones"
                                                                               value="{{ $property->bedrooms_max }}">
                                                                        <x-input-error
                                                                            :messages="$errors->get('bedrooms_max')"
                                                                            class="mt-2"/>
                                                                    </div>
                                                                    <div class="col-6">
                                                                        <label for="bathrooms" class="form-label">#
                                                                            Baños</label>
                                                                        <input id="bathrooms" name="bathrooms"
                                                                               type="number" step="any"
                                                                               class="form-control"
                                                                               placeholder="# Baños"
                                                                               value="{{ $property->bathrooms }}">
                                                                        <x-input-error
                                                                            :messages="$errors->get('bathrooms')"
                                                                            class="mt-2"/>
                                                                    </div>
                                                                    <div class="col-6">
                                                                        <label for="bathrooms_max" class="form-label">#
                                                                            Baños Max</label>
                                                                        <input id="bathrooms_max" name="bathrooms_max"
                                                                               type="number" step="any"
                                                                               class="form-control"
                                                                               placeholder="# Baños"
                                                                               value="{{ $property->bathrooms_max }}">
                                                                        <x-input-error
                                                                            :messages="$errors->get('bathrooms_max')"
                                                                            class="mt-2"/>
                                                                    </div>
                                                                    <div class="col-6">
                                                                        <label for="garage" class="form-label">#
                                                                            Garajes</label>
                                                                        <input id="garage" name="garage" type="number"
                                                                               step="any"
                                                                               class="form-control"
                                                                               placeholder="# Garajes"
                                                                               value="{{ $property->garage }}">
                                                                        <x-input-error
                                                                            :messages="$errors->get('garage')"
                                                                            class="mt-2"/>
                                                                    </div>
                                                                    <div class="col-6">
                                                                        <label for="garage_mx" class="form-label">#
                                                                            Garajes Max</label>
                                                                        <input id="garage_mx" name="garage_mx" type="number"
                                                                               step="any"
                                                                               class="form-control"
                                                                               placeholder="# Garajes"
                                                                               value="{{ $property->garage_max }}">
                                                                        <x-input-error
                                                                            :messages="$errors->get('garage_mx')"
                                                                            class="mt-2"/>
                                                                    </div>
                                                                    <div class="col-6">
                                                                        <label for="garage_size" class="form-label">Tamaño
                                                                            Min (mt2) </label>
                                                                        <input id="garage_size" name="garage_size"
                                                                               type="number" step="any"
                                                                               class="form-control"
                                                                               placeholder="Tamaño Garaje"
                                                                               value="{{ $property->garage_size }}">
                                                                        <x-input-error
                                                                            :messages="$errors->get('garage_size')"
                                                                            class="mt-2"/>
                                                                    </div>
                                                                    <div class="col-6">
                                                                        <label for="garage_size_max" class="form-label">Tamaño
                                                                            Max (mt2) </label>
                                                                        <input id="garage_size_max" name="garage_size_max"
                                                                               type="number" step="any"
                                                                               class="form-control"
                                                                               placeholder="Tamaño Garaje"
                                                                               value="{{ $property->garage_size_max }}">
                                                                        <x-input-error
                                                                            :messages="$errors->get('garage_size_max')"
                                                                            class="mt-2"/>
                                                                    </div>



                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="col-12 col-lg-4">
                                                        <div class="card shadow-none bg-light border">
                                                            <div class="card-body">
                                                                <div class="row g-3">

                                                                    <div class="col-12">
                                                                        <label for="video" class="form-label">Video
                                                                            (Youtube) </label>
                                                                        <input id="video" name="video" type="text"
                                                                               class="form-control"
                                                                               placeholder="https://youtube.com"
                                                                               value="{{ $property->video }}">
                                                                        <x-input-error :messages="$errors->get('video')"
                                                                                       class="mt-2"/>
                                                                    </div>

                                                                    <div class="col-6">
                                                                        <label for="latitude"
                                                                               class="form-label">Latitud </label>
                                                                        <input id="latitude" name="latitude"
                                                                               type="number" step="any"
                                                                               class="form-control"
                                                                               placeholder="Latitud"
                                                                               value="{{ $property->latitude }}">
                                                                        <x-input-error
                                                                            :messages="$errors->get('latitude')"
                                                                            class="mt-2"/>
                                                                    </div>
                                                                    <div class="col-6">
                                                                        <label for="longitude" class="form-label">Longitud </label>
                                                                        <input id="longitude" name="longitude"
                                                                               type="number" step="any"
                                                                               class="form-control"
                                                                               placeholder="Longitud"
                                                                               value="{{ $property->longitude }}">
                                                                        <x-input-error
                                                                            :messages="$errors->get('longitude')"
                                                                            class="mt-2"/>
                                                                    </div>

                                                                    <div class="col-12">
                                                                        <button type="button" class="btn btn-primary" onclick="toggle()">Ver en el mapa</button>
                                                                    </div>
                                                                    <div class="col-12">
                                                                        <div id="map"></div>
                                                                    </div>

                                                                    <div class="col-6">
                                                                        <div class="form-check">
                                                                            <label class="form-check-label"
                                                                                   for="featured">
                                                                                Destacado
                                                                            </label>
                                                                            @php
                                                                                $checked = "";
                                                                                if($property->featured == 1){
                                                                                    $checked = "checked";
                                                                                }
                                                                            @endphp
                                                                            <input class="form-check-input"
                                                                                   {{ $checked }}
                                                                                   name="featured" type="checkbox"
                                                                                   value="1" id="featured">
                                                                        </div>
                                                                        <x-input-error
                                                                            :messages="$errors->get('featured')"
                                                                            class="mt-2"/>
                                                                    </div>
                                                                    <div class="col-6">
                                                                        <div class="form-check">
                                                                            <label class="form-check-label" for="hot">
                                                                                Hot
                                                                            </label>
                                                                            @php
                                                                                $checked = "";
                                                                                if($property->hot
                                                                                 == 1){
                                                                                    $checked = "checked";
                                                                                }
                                                                            @endphp
                                                                            <input class="form-check-input" name="hot"
                                                                                   {{ $checked }}
                                                                                   type="checkbox"
                                                                                   value="1" id="hot">
                                                                        </div>
                                                                        <x-input-error :messages="$errors->get('hot')"
                                                                                       class="mt-2"/>
                                                                    </div>


{{--                                                                    <div class="col-12">--}}
{{--                                                                        <label for="agent_id"--}}
{{--                                                                               class="form-label">Agente</label>--}}
{{--                                                                        @php--}}
{{--                                                                            $blocked   = (Auth::user()->role === 'agent') ? "disabled" : "";--}}
{{--                                                                        @endphp--}}
{{--                                                                        <select id="agent_id" name="agent_id"--}}
{{--                                                                                class="form-select"--}}
{{--                                                                                required {{ $blocked }}>--}}
{{--                                                                            @foreach($agents as $agent)--}}
{{--                                                                                @php--}}
{{--                                                                                    $selected2 = "";--}}
{{--                                                                                    if($agent->id == $property->agent_id){--}}
{{--                                                                                        $selected2 = "selected='selected'";--}}
{{--                                                                                    }--}}
{{--                                                                                @endphp--}}
{{--                                                                                <option {{  $selected2 }}--}}
{{--                                                                                        value="{{ $agent->id }}">{{ $agent->name }} {{ $agent->lastname }}</option>--}}
{{--                                                                            @endforeach--}}
{{--                                                                        </select>--}}
{{--                                                                        <x-input-error--}}
{{--                                                                            :messages="$errors->get('agent_id')"--}}
{{--                                                                            class="mt-2"/>--}}
{{--                                                                    </div>--}}
                                                                    <div class="col-12">
                                                                        <label for="status"
                                                                               class="form-label">Estado</label>
                                                                        <select id="status" name="status"
                                                                                class="form-select" required>
                                                                            <option
                                                                                {{ $selectedTS = ($property->status == 1) ? "selected='selected'" : "" }} value="1">
                                                                                Publicado
                                                                            </option>
                                                                            <option
                                                                                {{ $selectedTS = ($property->status == 0) ? "selected='selected'" : "" }} value="0">
                                                                                No activo
                                                                            </option>
                                                                        </select>
                                                                        <x-input-error
                                                                            :messages="$errors->get('status')"
                                                                            class="mt-2"/>
                                                                    </div>
                                                                </div><!--end row-->
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div><!--end row-->
                                            </div>
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
                                                <div class="text-success">Datos principales de la Propiedad
                                                    actualizada.
                                                </div>
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

        <div class="card">
            <div class="card-header py-3">
                <h6 class="mb-0">Editar imagen principal de la Propiedad</h6>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-12 col-lg-12 d-flex">
                        <div class="card border shadow-none w-100">

                            <div class="card-body">

                                <form method="post" action="{{ route("admin.properties.edit.principalImage") }}"
                                      enctype="multipart/form-data">
                                    @csrf
                                    <div class="col-lg-12 mx-auto">
                                        <div class="card">
                                            <div class="card-header py-3 bg-transparent">
                                                <div class="d-sm-flex align-items-center">
                                                    <h5 class="mb-2 mb-sm-0">Modificar Imagen de la propiedad</h5>
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
                                                                    <div class="col-12 col-lg-6">

                                                                        <div class="card">
                                                                            <img
                                                                                src="{{ (!empty($property->thumbnail)) ? url('upload/properties/' .  $property->code . "/" . $property->thumbnail) : url('upload/No_Image_Available.jpg') }}"
                                                                                alt="" style="align-content: center">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12 col-lg-6">
                                                                        <input type="hidden" name="id"
                                                                               value="{{ $property->id }}">
                                                                        <input type="hidden" name="old_img"
                                                                               value="{{ $property->thumbnail }}">
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
                                                                             style="margin-top: 20px; border-radius: 10px; border: 1px solid #e6e6e6;">
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

        <div class="card">
            <div class="card-header py-3">
                <h6 class="mb-0">Editar imagenes de la Propiedad</h6>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-12 col-lg-12 d-flex">
                        <div class="card border shadow-none w-100">

                            <div class="card-body">
                                <div class="row g-3">

                                    <div class="col-12 col-lg-12">
                                        <h3>Imagenes Multiples</h3>
                                        <hr/>
                                        <div class="card-group">
                                            @if(count($multiImages) == 0)
                                                <h4>No hay imagenes</h4>
                                            @else
                                                @foreach($multiImages as $mImage)
                                                    <div class="card border-end">
                                                        <form method="post"
                                                              action="{{ route("admin.properties.delete.image") }}">
                                                            @csrf
                                                            <input type="hidden" name="id"
                                                                   value="{{ $property->id }}">
                                                            <input type="hidden" name="idImage"
                                                                   value="{{ $mImage->id }}">
                                                            <input type="hidden" name="old_img"
                                                                   value="{{ $mImage->name }}">
                                                            <img
                                                                src="{{ asset('upload/properties/' .  $property->code . "/multipleImages/" . $mImage->name) }}"
                                                                class="card-img-top" alt="...">
                                                            <div class="card-body">
                                                                <button type="submit" class="btn btn-danger">Eliminar
                                                                </button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                @endforeach
                                            @endif
                                        </div>
                                        @if (session('status') === 'deleted-addMIages')
                                            <div
                                                class="alert border-0 bg-light-success alert-dismissible fade show py-2"
                                                style="margin-top: 10px">
                                                <div class="d-flex align-items-center">
                                                    <div class="fs-3 text-success"><i
                                                            class="bi bi-check-circle-fill"></i>
                                                    </div>
                                                    <div class="ms-3">
                                                        <div class="text-success">Imagen eliminada.</div>
                                                    </div>
                                                </div>
                                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                        aria-label="Close"></button>
                                            </div>
                                        @endif
                                    </div>

                                </div>
                            </div>

                            <div class="card-body">

                                <form method="post" action="{{ route("admin.properties.add.images") }}"
                                      enctype="multipart/form-data">
                                    @csrf
                                    <div class="col-lg-12 mx-auto">
                                        <div class="card">
                                            <div class="card-header py-3 bg-transparent">
                                                <div class="d-sm-flex align-items-center">
                                                    <h5 class="mb-2 mb-sm-0">Modificar Imagenes multiples de la
                                                        propiedad</h5>
                                                    <div class="ms-auto">

                                                        <button type="submit" class="btn btn-primary">Agregar
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
                                                                        <input type="hidden" name="id"
                                                                               value="{{ $property->id }}">
                                                                        <label for="multiple_images" class="form-label">Imagenes</label>
                                                                        <div class="input-group">
                                                                            <input id="multiple_images"
                                                                                   name="multiple_images[]" type="file"
                                                                                   class="form-control"
                                                                                   placeholder="Imagenes" multiple
                                                                                   accept="image/png, image/gif, image/jpeg"
                                                                                   required>
                                                                        </div>
                                                                        <div class="row" id="preview_img"
                                                                             style="margin-top: 20px"></div>
                                                                        <x-input-error
                                                                            :messages="$errors->get('multiple_images')"
                                                                            class="mt-2"/>
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
                                @if (session('status') === 'updated-addMIages')
                                    <div class="alert border-0 bg-light-success alert-dismissible fade show py-2"
                                         style="margin-top: 10px">
                                        <div class="d-flex align-items-center">
                                            <div class="fs-3 text-success"><i class="bi bi-check-circle-fill"></i>
                                            </div>
                                            <div class="ms-3">
                                                <div class="text-success">Nuevas Imagenes agregadas.</div>
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

        <div class="card">
            <div class="card-header py-3">
                <h6 class="mb-0">Editar servicios cercanos de la Propiedad</h6>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-12 col-lg-12 d-flex">
                        <div class="card border shadow-none w-100">

                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12 col-lg-5 d-flex">
                                            <div class="card border shadow-none w-100">
                                                <div class="card-body">
                                                    <form class="row g-3" method="post"
                                                          action="{{ route("admin.properties.add.facility") }}">
                                                        @csrf
                                                        <input type="hidden" name="id"
                                                               class="form-control"
                                                               value="{{ $property->id }}">
                                                        <div class="col-12">
                                                            <label for="facility_id"
                                                                   class="form-label">Comodidades </label>
                                                            <select name="facility_id"
                                                                    class="form-select">
                                                                <option value="NH">Servicio</option>
                                                                @foreach($facility as $facilit)
                                                                    <option
                                                                        value="{{ $facilit->id }}" >{{ $facilit->name }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                            <x-input-error
                                                                :messages="$errors->get('facility_id')"
                                                                class="mt-2"/>
                                                        </div>
                                                        <div class="col-12">
                                                            <label for="nameFac"
                                                                   class="form-label">
                                                                Nombre </label>
                                                            <input type="text" name="nameFac"
                                                                   id="nameFac"
                                                                   class="form-control"
                                                                   placeholder="Nombre"
                                                                   required>
                                                            <x-input-error
                                                                :messages="$errors->get('nameFac')"
                                                                class="mt-2"/>
                                                        </div>
                                                        <div class="col-12">
                                                            <label for="distance"
                                                                   class="form-label">
                                                                Distancia </label>
                                                            <input type="text" name="distance"
                                                                   id="distance"
                                                                   class="form-control"
                                                                   placeholder="Distancia (Cuadras)"
                                                                   required>
                                                            <x-input-error
                                                                :messages="$errors->get('distance')"
                                                                class="mt-2"/>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="d-grid">
                                                                <button type="submit" class="btn btn-primary">Agregar
                                                                    Servicio
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="col-12 col-lg-7 d-flex">
                                            <div class="card border shadow-none w-100">
                                                <div class="card-body">
                                                    <div class="table-responsive">
                                                        @if(count($facilities) == 0)
                                                            <h4>No hay información</h4>
                                                        @else
                                                            <table class="table align-middle">
                                                                <form class="row g-3" method="post"
                                                                      action="{{ route("admin.properties.delete.facility") }}">
                                                                    @csrf
                                                                    <thead class="table-light">
                                                                    <tr>
                                                                        <th>ID</th>
                                                                        <th>Servicio</th>
                                                                        <th>Nombre</th>
                                                                        <th>Distancia</th>
                                                                        <th>Eliminar</th>
                                                                    </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                    @foreach($facilities as $facility)
                                                                        <tr>
                                                                            <td>
                                                                                #{{ $facility->id }}
                                                                                <input type="hidden" name="id"
                                                                                       class="form-control"
                                                                                       value="{{ $property->id }}">
                                                                                <input type="hidden" name="idFacility"
                                                                                       class="form-control"
                                                                                       value="{{ $facility->id }}">
                                                                            </td>
                                                                            <td>{{ $facility['facilityName']['name'] }}</td>
                                                                            <td>{{ $facility->name }}</td>
                                                                            <td>{{ $facility->distance }} Cuadras</td>
                                                                            <td>
                                                                                <div
                                                                                    class="d-flex align-items-center gap-3 fs-6">
                                                                                    <button
                                                                                        type="submit"
                                                                                        class="text-danger"
                                                                                        data-bs-toggle="tooltip"
                                                                                        data-bs-placement="bottom" title=""
                                                                                        data-bs-original-title="Delete"
                                                                                        aria-label="Delete"
                                                                                        style="border: 0px !important; background: transparent !important;">
                                                                                        <i
                                                                                            class="bi bi-trash-fill"></i>
                                                                                    </button>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                    @endforeach
                                                                    </tbody>
                                                                </form>
                                                            </table>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!--end row-->

                                    @if (session('status') === 'add-newFacility')
                                        <div class="alert border-0 bg-light-success alert-dismissible fade show py-2"
                                             style="margin-top: 10px">
                                            <div class="d-flex align-items-center">
                                                <div class="fs-3 text-success"><i class="bi bi-check-circle-fill"></i>
                                                </div>
                                                <div class="ms-3">
                                                    <div class="text-success">Nuevo servicio agregado</div>
                                                </div>
                                            </div>
                                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                    aria-label="Close"></button>
                                        </div>
                                    @endif
                                    @if (session('status') === 'deleted-facility')
                                        <div class="alert border-0 bg-light-success alert-dismissible fade show py-2"
                                             style="margin-top: 10px">
                                            <div class="d-flex align-items-center">
                                                <div class="fs-3 text-success"><i class="bi bi-check-circle-fill"></i>
                                                </div>
                                                <div class="ms-3">
                                                    <div class="text-success">Servicio Eliminado</div>
                                                </div>
                                            </div>
                                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                    aria-label="Close"></button>
                                        </div>
                                    @endif
                                    @if (session('status') === 'add-error')
                                        <div class="alert border-0 bg-light-warning alert-dismissible fade show py-2"
                                             style="margin-top: 10px">
                                            <div class="d-flex align-items-center">
                                                <div class="fs-3 text-warning"><i class="bi bi-check-circle-fill"></i>
                                                </div>
                                                <div class="ms-3">
                                                    <div class="text-warning">Debe seleccionar un servicio</div>
                                                </div>
                                            </div>
                                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                    aria-label="Close"></button>
                                        </div>
                                    @endif
                                </div>
                            </div>

                        </div>
                    </div>
                </div><!--end row-->
            </div>
        </div>

        <div class="card">
            <div class="card-header py-3">
                <h6 class="mb-0">Editar los amenities de la Propiedad</h6>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-12 col-lg-12 d-flex">
                        <div class="card border shadow-none w-100">


                            <div class="card-body">

                                <form method="post" action="{{ route("admin.properties.edit.amenities") }}">
                                    @csrf
                                    <div class="col-lg-12 mx-auto">
                                        <div class="card">
                                            <div class="card-header py-3 bg-transparent">
                                                <div class="d-sm-flex align-items-center">
                                                    <h5 class="mb-2 mb-sm-0">Modificar las comodidades</h5>
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
                                                                    <div class="col-12">
                                                                        <h5>Comodidades</h5>
                                                                        <div class="category-list">
                                                                            <input type="hidden" name="id" id="id"
                                                                                   class="form-control"
                                                                                   value="{{ $property->id }}">
                                                                            @foreach($amenities as $amenity)
                                                                                @php
                                                                                    $checked = "";
                                                                                    if(in_array($amenity->id, $property_aminities)){
                                                                                        $checked = "checked";
                                                                                    }
                                                                                @endphp
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input"
                                                                                           type="checkbox"
                                                                                           {{ $checked }}
                                                                                           value="{{ $amenity->id }}"
                                                                                           id="{{ $amenity->name }}"
                                                                                           name="amenities_id[]">
                                                                                    <label class="form-check-label"
                                                                                           for="{{ $amenity->name }}">
                                                                                        {{ $amenity->name }}
                                                                                    </label>
                                                                                </div>
                                                                            @endforeach

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
                                @if (session('status') === 'updated-amenities')
                                    <div class="alert border-0 bg-light-success alert-dismissible fade show py-2"
                                         style="margin-top: 10px">
                                        <div class="d-flex align-items-center">
                                            <div class="fs-3 text-success"><i class="bi bi-check-circle-fill"></i>
                                            </div>
                                            <div class="ms-3">
                                                <div class="text-success">Comodidades de la propiedad actualizadas</div>
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
