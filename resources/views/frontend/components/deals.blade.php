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
                    <div class="feature-block-one wow fadeInUp animated" data-wow-delay="00ms"
                         data-wow-duration="1500ms">
                        <div class="inner-box" style="min-height: 735px !important;">
                            <div class="image-box">
                                <figure class="image">
                                    <img alt="{{ $hotProperty->name }}" src="{{ (!empty($featured_propery->thumbnail)) ? url('upload/properties/' .  $featured_propery->code . "/" . $featured_propery->thumbnail) : url('upload/No_Image_Available.jpg') }}">
                                </figure>
                                <div class="batch"><i class="icon-11"></i></div>
                                <span class="category">Propiedad Caliente</span>
                            </div>
                            <div class="lower-content">
                                <div class="author-info clearfix">
                                    <div class="author pull-left">
                                        <figure class="author-thumb">
                                            <img alt="" src="{{ (!empty($hotProperty['agent']['photo'])) ? url('upload/profiles/'.$hotProperty['agent']['photo']) : url('upload/No_Image_Available.jpg') }}">
                                        </figure>
                                        <h6>{{ $hotProperty['agent']['name'] }} {{ $hotProperty['agent']['lastname'] }}</h6>
                                    </div>
                                    <div class="buy-btn pull-right"><a href="{{ route('front.properties.inner', $hotProperty->id) }}">{{ $hotProperty->property_status }}</a></div>
                                </div>
                                <div class="title-text"><h4><a href="{{ route('front.properties.inner', $hotProperty->id) }}">{{ $hotProperty->name }}</a>
                                    </h4></div>
                                <div class="price-box clearfix">
                                    <div class="price-info pull-left">
                                        <h6>Precio</h6>
                                        <h4>{{ number_format($hotProperty->max_price, 0) }} $us</h4>
                                    </div>
                                    <ul class="other-option pull-right clearfix">
                                        <li><a href="property-details.html"><i class="icon-12"></i></a></li>
                                        <li><a href="property-details.html"><i class="icon-13"></i></a></li>
                                    </ul>
                                </div>
                                <p>{{ Str::words($hotProperty->short_description, 25, '...') }}</p>
                                <ul class="more-details clearfix">
                                    <li><i class="icon-14"></i>{{ $hotProperty->bedrooms }} Cuartos</li>
                                    <li><i class="icon-15"></i>{{ $hotProperty->bathrooms }} Baños</li>
                                    <li><i class="icon-16"></i>{{ $hotProperty->size }} Mt2</li>
                                </ul>
                                <div class="btn-box"><a class="theme-btn btn-two" href="{{ route('front.properties.inner', $hotProperty->id) }}">Ver mas</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>

    </div>
</section>
<!-- deals-section end -->
