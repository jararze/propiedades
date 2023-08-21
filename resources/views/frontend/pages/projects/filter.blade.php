<div class="default-sidebar property-sidebar">
    <div class="filter-widget sidebar-widget">
        <div class="widget-title">
            <h5>Propiedad</h5>
        </div>
        <form action="/projects/filter" method="GET">
            <div class="widget-content">
                <div class="select-box">
                    <label for="property_type">Tipo de propiedad</label>
                    <div class="select-box">
                        <select class="wide" id="property_type" name="property_type">
                            <option data-display="Todos" value="Todos">Todos los tipos</option>
                            @foreach($types as $type)
                                @php
                                    $selected = (request('property_type') == $type->id) ? 'selected' : '';
                                @endphp
                                <option value="{{ $type->id }}" {{ $selected }}>{{ $type->type_name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="select-box">
                    <select class="wide" id="city" name="city">
                        <option data-display="Ciudad">Ciudad</option>
                        @foreach($cities as $city)
                            @php
                                $selected = (request('city') == $city->name) ? 'selected' : '';
                            @endphp
                            <option value="{{ $city->name }}" {{ $selected }}>{{ $city->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="select-box">
                    <select class="wide" id="neighborhoods" name="neighborhoods">
                        <option data-display="Zona">Zona</option>
                        @foreach($neighborhoods as $neighborhood)
                            @php
                                $selected = (request('neighborhoods') == $neighborhood) ? 'selected' : '';
                            @endphp
                            <option value="{{ $neighborhood }}" {{ $selected }}>{{ $neighborhood }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="select-box">
                    <select class="wide" id="garage" name="garage">
                        <option data-display="Garage">Garajes</option>
                        @foreach($garages as $garage)
                            @php
                                $selected = (request('garage') == $garage) ? 'selected' : '';
                            @endphp
                            <option value="{{ $garage }}" {{ $selected }}>{{ $garage }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="select-box">
                    <select class="wide" id="bedrooms" name="bedrooms">
                        <option data-display="Habitaciones">Habitaciones</option>
                        @foreach($bedrooms as $bedroom)
                            @php
                                $selected = (request('bedrooms') == $bedroom) ? 'selected' : '';
                            @endphp
                            <option value="{{ $bedroom }}" {{ $selected }}>{{ $bedroom }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="select-box">
                    <select class="wide" id="bathrooms" name="bathrooms">
                        <option data-display="Baños">Baños</option>
                        @foreach($bathrooms as $bathroom)
                            @php
                                $selected = (request('bathrooms') == $bathroom) ? 'selected' : '';
                            @endphp
                            <option value="{{ $bathroom }}" {{ $selected }}>{{ $bathroom }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="filter-btn">
                    <button type="submit" class="theme-btn btn-one"><i class="fas fa-filter"></i>&nbsp;Buscar
                    </button>
                </div>
                <div class="filter-btn" style="margin-top: 20px">
                    <a href="/projects/filter" class="theme-btn btn-one" style="background-color: #8d4654; border-color: #8d4654"><i class="fas fa-filter"></i>&nbsp;Eliminar filtros</a>
                </div>
            </div>
        </form>
    </div>
    <div class="price-filter sidebar-widget">
        <div class="widget-title">
            <h5>Rango de precio</h5>
        </div>

        {{--        @dd(request()->all())--}}
        @php
            //            $queryString = http_build_query(request()->all(),"","&");
                        $queryString = \Illuminate\Support\Arr::query(request()->all());
        @endphp
        <form action="/projects/filter" method="get">
            <div class="range-slider clearfix">
                <div class="clearfix">
                    <div class="input">
                        <input type="text" class="property-amount" name="property-amount" readonly="">
                        <input type="text" class="dsa" name="dsa" readonly="" value="{{ $queryString }}">
                    </div>
                </div>
                <div class="price-range-slider"></div>
            </div>
            <div class="filter-btn" style="margin-top: 20px">
                <button type="submit" class="theme-btn btn-one"><i class="fas fa-filter"></i>&nbsp;Buscar
                </button>
            </div>
        </form>
    </div>

    <div class="category-widget sidebar-widget">
        <div class="widget-title">
            <h5>Propiedades para:</h5>
        </div>
        <ul class="category-list clearfix">
            @foreach($counts as $key => $count)
                <li><a href="/projects/filter?tipo={{ $key }}">{{ $key }} <span>({{ $count }})</span></a></li>
            @endforeach
        </ul>
    </div>


    <div class="category-widget sidebar-widget">
        <div class="widget-title">
            <h5>Comodidades</h5>
        </div>
        <ul class="category-list clearfix">
            @foreach($amenities as $amenity)
                <li><a href="/projects/filter?amenities={{ $amenity->id }}">{{ $amenity->name }} <span>({{ $amenity->property_count }})</span></a>
                </li>
            @endforeach
        </ul>
    </div>
</div>
