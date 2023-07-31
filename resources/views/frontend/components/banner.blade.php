<!-- banner-section -->
<section class="banner-section" style="background-image: url({{ asset('front/assets/images/banner/banner-1.jpg') }});">
    <div class="auto-container">
        <div class="inner-container">
            <div class="content-box centred">
                <h2>Propropiedades</h2>
                <p>Un paso mas cerca al lugar que te mereces.</p>
            </div>
            <div class="search-field">
                <div class="tabs-box">
                    <div class="tab-btn-box">
                        <ul class="tab-btns tab-buttons centred clearfix">
                            <li class="tab-btn active-btn" data-tab="#tab-1">COMPRA</li>
                            <li class="tab-btn" data-tab="#tab-2">ALQUILER</li>
                        </ul>
                    </div>
                    <div class="tabs-content info-group">
                        <div class="tab active-tab" id="tab-1">
                            <div class="inner-box">
                                <div class="top-search">
                                    <form action="index.html" class="search-form" method="post">
                                        <div class="row clearfix">
                                            <div class="col-lg-4 col-md-12 col-sm-12 column">
                                                <div class="form-group">
                                                    <label>Buscar propiedades</label>
                                                    <div class="field-input">
                                                        <i class="fas fa-search"></i>
                                                        <input name="search-field"
                                                               placeholder="Buscar por propiedad, ubicacion"
                                                               required=""
                                                               type="search">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-12 column">
                                                <div class="form-group">
                                                    <label>Ubicacion</label>
                                                    <div class="select-box">
                                                        <i class="far fa-compass"></i>
                                                        <select class="wide">
                                                            <option data-display="Ubicacion">Ubicacion
                                                            </option>
                                                            <option value="1">La Paz</option>
                                                            <option value="2">Cochabamba</option>
                                                            <option value="3">Santa Cruz</option>
                                                            <option value="4">Oruro</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-12 column">
                                                <div class="form-group">
                                                    <label>Tipo de propiedad</label>
                                                    <div class="select-box">
                                                        <select class="wide">
                                                            <option data-display="Todos los tipos">Todos los tipos</option>
                                                            @foreach($propertyTypes as $property)
                                                                <option value="{{ $property->type_id }}">{{ $property->type_name }}</option>
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
                                <div class="switch_btn_one ">
                                    <button class="nav-btn nav-toggler navSidebar-button clearfix search__toggler">
                                        Búsqueda avanzada<i class="fas fa-angle-down"></i></button>
                                    <div class="advanced-search">
                                        <div class="close-btn">
                                            <a class="close-side-widget" href="#"><i class="far fa-times"></i></a>
                                        </div>
                                        <div class="row clearfix">
                                            <div class="col-lg-4 col-md-6 col-sm-12 column">
                                                <div class="form-group">
                                                    <label>Distancia de la ubicacion</label>
                                                    <div class="select-box">
                                                        <select class="wide">
                                                            <option data-display="Distancia de la ubicacion">Distancia de la ubicacion
                                                            </option>
                                                            <option value="1">Máxima distancia</option>
                                                            <option value="2">Dentro de 1 KM</option>
                                                            <option value="3">Dentro de 2 KM</option>
                                                            <option value="4">Dentro de 3 KM</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-12 column">
                                                <div class="form-group">
                                                    <label>Dormitorios</label>
                                                    <div class="select-box">
                                                        <select class="wide">
                                                            <option data-display="Maximo dormitorios">Máximo dormitorios</option>
                                                            <option value="1">Un Dormitorio</option>
                                                            <option value="2">Dos Dormitorios</option>
                                                            <option value="3">Tres Dormitorios</option>
                                                            <option value="4">Cuatro Dormitorios</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-12 column">
                                                <div class="form-group">
                                                    <label>Ordenar por</label>
                                                    <div class="select-box">
                                                        <select class="wide">
                                                            <option data-display="Destacado">Destacado</option>
                                                            <option value="1">Mas barato</option>
                                                            <option value="2">Mas Caro</option>
                                                            <option value="3">Mas visitado</option>
                                                            <option value="4">Mayor comodidades</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-12 column">
                                                <div class="form-group">
                                                    <label>Pisos</label>
                                                    <div class="select-box">
                                                        <select class="wide">
                                                            <option data-display="Cantidad de pisos">Cantidad de pisos</option>
                                                            <option value="1">Un Piso</option>
                                                            <option value="2">Dos Pisos</option>
                                                            <option value="3">Tres Pisos</option>
                                                            <option value="4">Cuatro Pisos</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-12 column">
                                                <div class="form-group">
                                                    <label>Baños</label>
                                                    <div class="select-box">
                                                        <select class="wide">
                                                            <option data-display="Máximo de baños">Máximo de baños</option>
                                                            <option value="1">Un Baño</option>
                                                            <option value="2">Dos Baños</option>
                                                            <option value="3">Tres Baños</option>
                                                            <option value="4">Cuatro Baños</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-12 column">
                                                <div class="form-group">
                                                    <label>Agente/Empresa</label>
                                                    <div class="select-box">
                                                        <select id="agent_id" name="agent_id" class="wide">
                                                            @foreach($agents as $agent)
                                                                <option
                                                                    value="{{ $agent->id }}">{{ $agent->name }} {{ $agent->lastname }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="range-box">
                                            <div class="row clearfix">
                                                <div class="col-lg-6 col-md-6 col-sm-12 column">
                                                    <div class="price-range">
                                                        <h6>Rango de precios</h6>
                                                        <div class="range-input">
                                                            <div class="input"><input class="property-amount"
                                                                                      name="field-name"
                                                                                      readonly="" type="text">
                                                            </div>
                                                        </div>
                                                        <div class="price-range-slider"></div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-12 column">
                                                    <div class="area-range">
                                                        <h6>MT2</h6>
                                                        <div class="range-input">
                                                            <div class="input"><input class="area-range"
                                                                                      name="field-name"
                                                                                      readonly="" type="text">
                                                            </div>
                                                        </div>
                                                        <div class="area-range-slider"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab" id="tab-2">
                            <div class="inner-box">
                                <div class="top-search">
                                    <form action="index.html" class="search-form" method="post">
                                        <div class="row clearfix">
                                            <div class="col-lg-4 col-md-12 col-sm-12 column">
                                                <div class="form-group">
                                                    <label>Search Property</label>
                                                    <div class="field-input">
                                                        <i class="fas fa-search"></i>
                                                        <input name="search-field"
                                                               placeholder="Search by Property, Location or Landmark..."
                                                               required=""
                                                               type="search">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-12 column">
                                                <div class="form-group">
                                                    <label>Location</label>
                                                    <div class="select-box">
                                                        <i class="far fa-compass"></i>
                                                        <select class="wide">
                                                            <option data-display="Input location">Input location
                                                            </option>
                                                            <option value="1">New York</option>
                                                            <option value="2">California</option>
                                                            <option value="3">London</option>
                                                            <option value="4">Maxico</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-12 column">
                                                <div class="form-group">
                                                    <label>Property Type</label>
                                                    <div class="select-box">
                                                        <select class="wide">
                                                            <option data-display="All Type">All Type</option>
                                                            <option value="1">Laxury</option>
                                                            <option value="2">Classic</option>
                                                            <option value="3">Modern</option>
                                                            <option value="4">New</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="search-btn">
                                            <button type="submit"><i class="fas fa-search"></i>Search</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="switch_btn_one ">
                                    <button class="nav-btn nav-toggler navSidebar-button clearfix search__toggler">
                                        Advanced Search<i class="fas fa-angle-down"></i></button>
                                    <div class="advanced-search">
                                        <div class="close-btn">
                                            <a class="close-side-widget" href="#"><i class="far fa-times"></i></a>
                                        </div>
                                        <div class="row clearfix">
                                            <div class="col-lg-4 col-md-6 col-sm-12 column">
                                                <div class="form-group">
                                                    <label>Distance from Location</label>
                                                    <div class="select-box">
                                                        <select class="wide">
                                                            <option data-display="Distance from Location">Distance
                                                                from Location
                                                            </option>
                                                            <option value="1">Max Bath</option>
                                                            <option value="2">Within 1 Mile</option>
                                                            <option value="3">Within 2 Mile</option>
                                                            <option value="4">Within 3 Mile</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-12 column">
                                                <div class="form-group">
                                                    <label>Bedrooms</label>
                                                    <div class="select-box">
                                                        <select class="wide">
                                                            <option data-display="Max Rooms">Max Rooms</option>
                                                            <option value="1">One Rooms</option>
                                                            <option value="2">Two Rooms</option>
                                                            <option value="3">Three Rooms</option>
                                                            <option value="4">Four Rooms</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-12 column">
                                                <div class="form-group">
                                                    <label>Sort by</label>
                                                    <div class="select-box">
                                                        <select class="wide">
                                                            <option data-display="Most Popular">Most Popular
                                                            </option>
                                                            <option value="1">Top Rating</option>
                                                            <option value="2">New Rooms</option>
                                                            <option value="3">Classic Rooms</option>
                                                            <option value="4">Luxry Rooms</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-12 column">
                                                <div class="form-group">
                                                    <label>Floor</label>
                                                    <div class="select-box">
                                                        <select class="wide">
                                                            <option data-display="Select Floor">Select Floor
                                                            </option>
                                                            <option value="1">One Floor</option>
                                                            <option value="2">Two Floor</option>
                                                            <option value="3">Three Floor</option>
                                                            <option value="4">Four Floor</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-12 column">
                                                <div class="form-group">
                                                    <label>Bath</label>
                                                    <div class="select-box">
                                                        <select class="wide">
                                                            <option data-display="Max Bath">Max Bath</option>
                                                            <option value="1">Max Bath</option>
                                                            <option value="2">Max Bath</option>
                                                            <option value="3">Max Bath</option>
                                                            <option value="4">Max Bath</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-12 column">
                                                <div class="form-group">
                                                    <label>Agencies</label>
                                                    <div class="select-box">
                                                        <select class="wide">
                                                            <option data-display="Any Agency">Any Agency</option>
                                                            <option value="1">Any Agency</option>
                                                            <option value="2">Agency 01</option>
                                                            <option value="3">Agency 02</option>
                                                            <option value="4">Agency 03</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="range-box">
                                            <div class="row clearfix">
                                                <div class="col-lg-6 col-md-6 col-sm-12 column">
                                                    <div class="price-range">
                                                        <h6>Select Price Range</h6>
                                                        <div class="range-input">
                                                            <div class="input"><input class="property-amount"
                                                                                      name="field-name"
                                                                                      readonly="" type="text">
                                                            </div>
                                                        </div>
                                                        <div class="price-range-slider"></div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-12 column">
                                                    <div class="area-range">
                                                        <h6>Select Area</h6>
                                                        <div class="range-input">
                                                            <div class="input"><input class="area-range"
                                                                                      name="field-name"
                                                                                      readonly="" type="text">
                                                            </div>
                                                        </div>
                                                        <div class="area-range-slider"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- banner-section end -->
