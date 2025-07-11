@php
    $currenturl = rawurlencode(url()->full());
@endphp
<div class="top-details clearfix">
    <div class="left-column pull-left clearfix">
        <h3>{{ $property->name }}</h3>
        <div class="author-info clearfix">
            <div class="author-box pull-left">
                <figure class="author-thumb"><img
                        src="{{ (!empty($property['agent']['photo'])) ? url('upload/profiles/'.$property['agent']['photo']) : url('upload/No_Image_Available.jpg') }}"
                        alt=""></figure>
                <h6>{{ $property['agent']['name'] }} {{ $property['agent']['lastname'] }}</h6>
            </div>
            @if($property->status_for_what == 2)
                <div class="right-column pull-right clearfix">
                    <div class="price-inner clearfix">
                        <ul class="category clearfix pull-left">
                            <li><a href="#">Fuera del mercado</a></li>
                        </ul>
                    </div>
                </div>
            @endif
        </div>
    </div>
    <div class="right-column pull-right clearfix">
        <div class="price-inner clearfix">
            <ul class="category clearfix pull-left">
                <li><a href="#">{{ $property['type']['type_name'] }}</a></li>
                <li><a href="#">{{ $property->property_status }}</a></li>
            </ul>
            <div class="price-box pull-right">
                <h3>{{ number_format($property->max_price, 2) }} {{ $property->currency }}</h3>
            </div>
        </div>
        <ul class="other-option pull-right clearfix">
            <li>{!! Share::page(url()->current(), 'Your share text can be placed here')->whatsapp() !!}</li>
            <li>
                <a href="whatsapp://send?text=Mira esta propiedad!%0a%0a{!! $property->name !!}%0a%0a{!! $currenturl !!}"
                   target="_blank" data-action="share/whatsapp/share"> <i class="icon-37"></i></a></li>
            {{--                <a href="whatsapp://send?text=https%3A%2F%2F127.0.0.1%3A8000%2Fproperties%2Finner%2F5" target="_blank" data-action="share/whatsapp/share"> <i class="icon-37"></i></a></li>--}}
            <li><a href="#"><i class="icon-38"></i></a></li>
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
