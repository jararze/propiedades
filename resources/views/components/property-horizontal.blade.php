@props(['property', 'type'])



<div class="inner-box">
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
    <div class="image-box">
        <figure class="image"><img
                src="{{ (!empty($property->thumbnail)) ? url('upload/properties/' .  $property->code . "/" . $property->thumbnail) : url('upload/No_Image_Available.jpg') }}"
                alt="{{ $property->name }}"
                style="width: 300px; height: 350px;">
        </figure>
        <div class="batch"><i class="icon-11"></i></div>
        <span class="category">Destacada</span>
        <div class="buy-btn"><a
                href="{{ route('front.properties.inner', $property->id) }}">{{ $property->property_status }}</a>
        </div>
    </div>
    <div class="lower-content">
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
                <h6>Empieza desde</h6>
                <h4>{{ number_format($property->max_price, 0) }}$us</h4>
            </div>
            <div class="author-box pull-right">
                <span class="category" style="margin-right: 50px; padding: 10px; position: relative; background-color: #08abc4; border-radius: 5px; line-height: 20px">{{ $property['type']['type_name'] }}</span>
            </div>
        </div>
        <p>{{ Str::words($property->short_description, 25, '...') }}</p>
        <ul class="more-details clearfix">
            <li><i class="icon-14"></i>{{ $property->bedrooms ?? 0 }} Cuartos
            </li>
            <li><i class="icon-15"></i>{{ $property->bathrooms ?? 0 }} Baños
            </li>
            <li><i class="icon-16"></i>{{ $property->size ?? 0 }} Mt2</li>
        </ul>
        <div class="other-info-box clearfix">
            <div class="btn-box pull-left">
                @if($property->status_for_what == "2")
                @else
                    <a href="{{ route('front.properties.inner', $property->id) }}"
                       class="theme-btn btn-two">Ver más</a>
                @endif
            </div>
            <ul class="other-option pull-right clearfix">
                <li>{!! Share::page(Request::url(), 'Your share text can be placed here')->facebook() !!}</li>
                <li>{!! Share::page(url()->current(), 'Your share text can be placed here')->whatsapp() !!}</li>
                {{--                        <li>{!! Share::page(url()->current(), 'Your share text can be placed here')->telegram() !!}</li>--}}
                <input type="hidden" id="CSRF" value="{{csrf_token()}}">
                <li>
                    <a href="javascript:;"
                       data-property_id={{ $property->id }} data-user_id="{{ $auth = (isset(Auth::user()->id)) ? Auth::user()->id : "none"  }}"
                       onclick="addCompareList(this.dataset.property_id, this.dataset.user_id)">
                        <i class="icon-12"></i>
                    </a>
                </li>
                <li>
                    <a class="toggle_wishlist" href="javascript:;"
                       id="{{ $property->id }}"
                       user_id="{{ $auth = (isset(Auth::user()->id)) ? Auth::user()->id : "none"  }}"
                       onclick="addWishlist(this.id)"><i class="icon-13"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
