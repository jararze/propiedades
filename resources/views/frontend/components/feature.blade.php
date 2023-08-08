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
                    <div class="feature-block-one wow fadeInUp animated" data-wow-delay="00ms"
                         data-wow-duration="1500ms">
                        <div class="inner-box" style="min-height: 735px !important;">
                            <div class="image-box">
                                <figure class="image">
                                    <img
                                        style="height: 250px;"
                                        alt="{{ $featured_propery->name }}"
                                        src="{{ (!empty($featured_propery->thumbnail)) ? url('upload/properties/' .  $featured_propery->code . "/" . $featured_propery->thumbnail) : url('upload/No_Image_Available.jpg') }}">
                                </figure>
                                <div class="batch"><i class="icon-11"></i></div>
                                <span class="category">Propiedad Destacada</span>
                            </div>
                            <div class="lower-content">
                                <div class="author-info clearfix">
                                    <div class="author pull-left">
                                        <figure class="author-thumb">
                                            <img alt=""
                                                 src="{{ (!empty($featured_propery['agent']['photo'])) ? url('upload/profiles/'.$featured_propery['agent']['photo']) : url('upload/No_Image_Available.jpg') }}">
                                        </figure>
                                        <h6>{{ $featured_propery['agent']['name'] }} {{ $featured_propery['agent']['lastname'] }}</h6>
                                    </div>
                                    <div class="buy-btn pull-right"><a
                                            href="{{ route('front.properties.inner', $featured_propery->id) }}">{{ $featured_propery->property_status }}</a>
                                    </div>
                                </div>
                                <div class="title-text"><h4><a
                                            href="{{ route('front.properties.inner', $featured_propery->id) }}">{{ $featured_propery->name }}</a>
                                    </h4></div>
                                <div class="price-box clearfix">
                                    <div class="price-info pull-left">
                                        <h6>Precio</h6>
                                        <h4>{{ number_format($featured_propery->max_price, 0) }} $us</h4>
                                    </div>
                                    <ul class="other-option pull-right clearfix">
                                        <li>{!! Share::page(Request::url(), 'Your share text can be placed here')->facebook() !!}</li>
                                        <li>{!! Share::page(url()->current(), 'Your share text can be placed here')->whatsapp() !!}</li>
                                        {{--                                        <li>{!! Share::page(url()->current(), 'Your share text can be placed here')->telegram() !!}</li>--}}
                                        <input type="hidden" id="CSRF" value="{{csrf_token()}}">
                                        <li>
                                            <a href="javascript:;"
                                               data-property_id={{ $featured_propery->id }} data-user_id="{{ $auth = (isset(Auth::user()->id)) ? Auth::user()->id : "none"  }}"
                                               onclick="addCompareList(this.dataset.property_id, this.dataset.user_id)">
                                                <i class="icon-12"></i>
                                            </a>
                                        </li>
                                        <li><a class="toggle_wishlist" href="javascript:;"
                                               id="{{ $featured_propery->id }}"
                                               user_id="{{ $auth = (isset(Auth::user()->id)) ? Auth::user()->id : "none"  }}"
                                               onclick="addWishlist(this.id)"><i class="icon-13"></i></a></li>
                                    </ul>
                                </div>
                                <p>{{ Str::words($featured_propery->short_description, 25, '...') }}</p>
                                <ul class="more-details clearfix">
                                    <li><i class="icon-14"></i>{{ $featured_propery->bedrooms }} Cuartos</li>
                                    <li><i class="icon-15"></i>{{ $featured_propery->bathrooms }} Baños</li>
                                    <li><i class="icon-16"></i>{{ $featured_propery->size }} Mt2</li>
                                </ul>
                                <div class="btn-box"><a class="theme-btn btn-two"
                                                        href="{{ route('front.properties.inner', $featured_propery->id) }}">Ver
                                        mas</a></div>
                            </div>
                        </div>
                    </div>
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
