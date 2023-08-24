<!-- feature-section -->
<section class="feature-section sec-pad bg-color-1">
    <div class="auto-container">
        <div class="sec-title centred">
            <h5>Destacadas</h5>
            <h2>Propiedades destacadas</h2>
            <p>Encuentra las propiedades destacadas de la semana y del mes! Cada vez más cerca de tu proximo hogar!</p>
        </div>
        <div class="row clearfix">

            @foreach($featuredProperties as $featured_propery)
                <div class="col-lg-4 col-md-6 col-sm-12 feature-block">
                    <x-property type="Destacada" :property="$featured_propery"></x-property>
                </div>
            @endforeach

        </div>

        <div class="more-btn centred"><a class="theme-btn btn-one"
                                         href="{{ route('front.properties.index', 'featuredProperties') }}">Mostrar
                todas las propiedades</a>
        </div>
    </div>
</section>
<!-- feature-section end -->
