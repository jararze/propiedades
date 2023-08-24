<!-- deals-section -->
<section class="deals-section sec-pad">
    <div class="auto-container">
        <div class="sec-title">
            <h5>Propiedades Calientes</h5>
            <h2>Nuestros mejores ofertas</h2>
        </div>

        <div class="row clearfix">
            @foreach($hotProperties as $hotProperty)
                <div class="col-lg-4 col-md-6 col-sm-12 feature-block">
                    <x-property type="Caliente" :property="$hotProperty"></x-property>
                </div>
            @endforeach

        </div>

    </div>
</section>
<!-- deals-section end -->
