@props(['property', 'type'])



    <div class="feature-block-one wwow wfadeInUp wanimated" wdata-wow-delay="00ms"
         wdata-wow-duration="1500ms">
        @if($property->status_for_what == "2")
            <div class="soldOut">
                <h1>
                    @php
                        switch ($property->property_status) {
                            case "Venta":
                                echo "Vendida";
                                break;
                                case "Alquiler":
                                echo "Alquilada";
                                break;
                                case "Anticretico":
                                echo "Tomada";
                                break;
                                case "Roomie":
                                echo "Roomie tomada";
                                break;
                        }
                    @endphp
                </h1>
            </div>
        @endif
        <div class="inner-box" style="min-height: 660px !important;">
            <div class="image-box">
                <figure class="image">
                    <img
                        style="height: 250px;"
                        alt="{{ $property->name }}"
                        src="{{ (!empty($property->thumbnail)) ? url('upload/properties/' .  $property->code . "/" . $property->thumbnail) : url('upload/No_Image_Available.jpg') }}">
                </figure>
                <div class="batch"><i class="icon-11"></i></div>
                <span class="category">Propiedad {{ $type }}</span>
            </div>
            <div class="lower-content">
                <div class="author-info clearfix">
                    <div class="author pull-left">
                        <figure class="author-thumb">
                            <img alt=""
                                 src="{{ (!empty($property['agent']['photo'])) ? url('upload/profiles/'.$property['agent']['photo']) : url('upload/No_Image_Available.jpg') }}">
                        </figure>
                        <h6>{{ $property['agent']['name'] }} {{ $property['agent']['lastname'] }}</h6>
                    </div>
                    <div class="buy-btn pull-right"><a
                            href="{{ route('front.properties.inner', $property->id) }}">{{ $property->property_status }}</a>
                    </div>
                    <div class="price-box" style="margin-top: 50px">
                        <ul class="other-option ppull-right clearfix">
                            <li>{!! Share::page(route('front.properties.inner', $property->id), $property->short_description)->facebook() !!}</li>
                            <li>{!! Share::page(route('front.properties.inner', $property->id), $property->short_description)->whatsapp() !!}</li>
                            {{--                        <li>{!! Share::page(url()->current(), 'Your share text can be placed here')->telegram() !!}</li>--}}
                            <input type="hidden" id="CSRF" value="{{csrf_token()}}">
                            <li>
                                <a href="javascript:;"
                                   data-property_id={{ $property->id }} data-user_id="{{ $auth = (isset(Auth::user()->id)) ? Auth::user()->id : "none"  }}"
                                   onclick="addCompareList(this.dataset.property_id, this.dataset.user_id)">
                                    <i class="icon-12"></i>
                                </a>
                            </li>
                            <li><a class="toggle_wishlist" href="javascript:;"
                                   id="{{ $property->id }}"
                                   user_id="{{ $auth = (isset(Auth::user()->id)) ? Auth::user()->id : "none"  }}"
                                   onclick="addWishlist(this.id)"><i class="icon-13"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="title-text">
                    <h4>
                        @if($property->status_for_what == "2")
                            {{ $property->name }}
                        @else
                            <a href="{{ route('front.properties.inner', $property->id) }}">{{ $property->name }}</a>
                        @endif
                    </h4>
                </div>
                <div class="price-box clearfix">
                    <div class="price-info pull-left">
                        <h6>Precio</h6>
                        <h4>{{ number_format($property->max_price, 0) }} {{ $property->currency }}</h4>
                    </div>

                </div>


                <p style="min-height: 100px">{{ Str::words($property->short_description, 25, '...') }}</p>
                <ul class="more-details clearfix">
                    <li style="font-size: 12px"><i class="icon-14"></i>{{ $property->bedrooms ?? 0 }} Cuartos</li>
                    <li style="font-size: 12px"><i class="icon-15"></i>{{ $property->bathrooms ?? 0 }} Baños</li>
                    <li style="font-size: 12px"><i class="icon-16"></i>{{ $property->size ?? 0 }} Mt2</li>
                </ul>
                <div class="btn-box">
                    @if($property->status_for_what == "2")
                        {{ $property->name }}
                    @else
                        <a class="theme-btn btn-two" href="{{ route('front.properties.inner', $property->id) }}">Ver mas</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
