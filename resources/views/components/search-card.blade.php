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
</div>
