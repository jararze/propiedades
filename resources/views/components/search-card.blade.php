@props(['cities', 'propertyTypes', 'agents', 'type'])

<div class="inner-box">
    <div class="top-search">
        <form action="{{ route("front.properties.filter") }}" class="search-form" method="get">
            <input type="hidden" name="tipo" value="{{ $type }}">
            <div class="row clearfix">
                <div class="col-lg-4 col-md-12 col-sm-12 column">
                    <div class="form-group">
                        <label>Buscar propiedades</label>
                        <div class="field-input">
                            <i class="fas fa-search"></i>
                            <input name="search"
                                   placeholder="Buscar por propiedad, ubicacion"
                                   type="search">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 column">
                    <div class="form-group">
                        <label>Ciudad</label>
                        <div class="select-box">
                            <i class="far fa-compass"></i>
                            <select class="wide" name="city">
                                <option data-display="Todas">Ciudad</option>
                                @foreach($cities as $city)
                                    <option value="{{ $city->name }}">{{ $city->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 column">
                    <div class="form-group">
                        <label for="property_type">Tipo de propiedad</label>
                        <div class="select-box">
                            <select class="wide" id="property_type" name="property_type">
                                <option data-display="Todos" value="Todos">Todos los tipos</option>
                                @foreach($propertyTypes as $property)
                                    <option value="{{ $property->id }}">{{ $property->type_name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="search-btn">
                <button type="submit"><i class="fas fa-search"></i>Buscar</button>
            </div>
        </form>
    </div>
{{--    <div class="switch_btn_one ">--}}
{{--        <button class="nav-btn nav-toggler navSidebar-button clearfix search__toggler">--}}
{{--            Búsqueda avanzada<i class="fas fa-angle-down"></i></button>--}}
{{--        <div class="advanced-search">--}}
{{--            <div class="close-btn">--}}
{{--                <a class="close-side-widget" href="#"><i class="far fa-times"></i></a>--}}
{{--            </div>--}}
{{--            <div class="row clearfix">--}}
{{--                <div class="col-lg-4 col-md-6 col-sm-12 column">--}}
{{--                    <div class="form-group">--}}
{{--                        <label>Distancia de la ubicacion</label>--}}
{{--                        <div class="select-box">--}}
{{--                            <select class="wide">--}}
{{--                                <option data-display="Distancia de la ubicacion">Distancia de la ubicacion--}}
{{--                                </option>--}}
{{--                                <option value="1">Máxima distancia</option>--}}
{{--                                <option value="2">Dentro de 1 KM</option>--}}
{{--                                <option value="3">Dentro de 2 KM</option>--}}
{{--                                <option value="4">Dentro de 3 KM</option>--}}
{{--                            </select>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-4 col-md-6 col-sm-12 column">--}}
{{--                    <div class="form-group">--}}
{{--                        <label>Dormitorios</label>--}}
{{--                        <div class="select-box">--}}
{{--                            <select class="wide">--}}
{{--                                <option data-display="Maximo dormitorios">Máximo dormitorios</option>--}}
{{--                                <option value="1">Un Dormitorio</option>--}}
{{--                                <option value="2">Dos Dormitorios</option>--}}
{{--                                <option value="3">Tres Dormitorios</option>--}}
{{--                                <option value="4">Cuatro Dormitorios</option>--}}
{{--                            </select>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-4 col-md-6 col-sm-12 column">--}}
{{--                    <div class="form-group">--}}
{{--                        <label>Ordenar por</label>--}}
{{--                        <div class="select-box">--}}
{{--                            <select class="wide">--}}
{{--                                <option data-display="Destacado">Destacado</option>--}}
{{--                                <option value="1">Mas barato</option>--}}
{{--                                <option value="2">Mas Caro</option>--}}
{{--                                <option value="3">Mas visitado</option>--}}
{{--                                <option value="4">Mayor comodidades</option>--}}
{{--                            </select>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-4 col-md-6 col-sm-12 column">--}}
{{--                    <div class="form-group">--}}
{{--                        <label>Pisos</label>--}}
{{--                        <div class="select-box">--}}
{{--                            <select class="wide">--}}
{{--                                <option data-display="Cantidad de pisos">Cantidad de pisos</option>--}}
{{--                                <option value="1">Un Piso</option>--}}
{{--                                <option value="2">Dos Pisos</option>--}}
{{--                                <option value="3">Tres Pisos</option>--}}
{{--                                <option value="4">Cuatro Pisos</option>--}}
{{--                            </select>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-4 col-md-6 col-sm-12 column">--}}
{{--                    <div class="form-group">--}}
{{--                        <label>Baños</label>--}}
{{--                        <div class="select-box">--}}
{{--                            <select class="wide">--}}
{{--                                <option data-display="Máximo de baños">Máximo de baños</option>--}}
{{--                                <option value="1">Un Baño</option>--}}
{{--                                <option value="2">Dos Baños</option>--}}
{{--                                <option value="3">Tres Baños</option>--}}
{{--                                <option value="4">Cuatro Baños</option>--}}
{{--                            </select>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-4 col-md-6 col-sm-12 column">--}}
{{--                    <div class="form-group">--}}
{{--                        <label>Agente/Empresa</label>--}}
{{--                        <div class="select-box">--}}
{{--                            <select id="agent_id" name="agent_id" class="wide">--}}
{{--                                @foreach($agents as $agent)--}}
{{--                                    <option--}}
{{--                                        value="{{ $agent->id }}">{{ $agent->name }} {{ $agent->lastname }}</option>--}}
{{--                                @endforeach--}}
{{--                            </select>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="range-box">--}}
{{--                <div class="row clearfix">--}}
{{--                    <div class="col-lg-6 col-md-6 col-sm-12 column">--}}
{{--                        <div class="price-range">--}}
{{--                            <h6>Rango de precios</h6>--}}
{{--                            <div class="range-input">--}}
{{--                                <div class="input"><input class="property-amount"--}}
{{--                                                          name="field-name"--}}
{{--                                                          readonly="" type="text">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="price-range-slider"></div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-lg-6 col-md-6 col-sm-12 column">--}}
{{--                        <div class="area-range">--}}
{{--                            <h6>MT2</h6>--}}
{{--                            <div class="range-input">--}}
{{--                                <div class="input"><input class="area-range"--}}
{{--                                                          name="field-name"--}}
{{--                                                          readonly="" type="text">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="area-range-slider"></div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
</div>
