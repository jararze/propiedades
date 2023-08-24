@props(['property', 'type'])


<div class="inner-box">
    <div class="image-box">
        <figure class="image">
            <img
                src="{{ (!empty($property['PropAttributes']['thumbnail'])) ? url('upload/properties/' .  $property['PropAttributes']['code'] . "/" . $property['PropAttributes']['thumbnail']) : url('upload/No_Image_Available.jpg') }}"
                alt="{{ $property['PropAttributes']['name'] }}"
                style="width: 300px; height: 350px;">
        </figure>
        <div class="batch"><i class="icon-11"></i></div>
        <div class="buy-btn"><a
                href="{{ route('front.properties.inner', $property['PropAttributes']['id']) }}">{{ $property['PropAttributes']['property_status'] }}</a>
        </div>
    </div>
    <div class="lower-content">
        <div class="title-text"><h4><a
                    href="{{ route('front.properties.inner', $property['PropAttributes']['id']) }}">{{ $property['PropAttributes']['name'] }}</a>
            </h4></div>
        <div class="price-box clearfix">
            <div class="price-info pull-left">
                <h6>Desde</h6>
                <h4>{{ number_format($property['PropAttributes']['max_price'], 0) }}
                    $us</h4>
            </div>
            <div class="author-box pull-right">
                <span class="category" style="margin-right: 50px; padding: 10px; position: relative; background-color: #08abc4; border-radius: 5px; line-height: 20px">{{ $property['PropAttributes']['type']['type_name'] }}</span>
            </div>
        </div>
        <p>{{ Str::words($property['PropAttributes']['short_description'], 25, '...') }}</p>
        <ul class="more-details clearfix">
            <li>
                <i class="icon-14"></i>{{ $property['PropAttributes']['bedrooms'] ?? 0 }}
                Cuartos
            </li>
            <li>
                <i class="icon-15"></i>{{ $property['PropAttributes']['bathrooms'] ?? 0 }}
                Baños
            </li>
            <li>
                <i class="icon-16"></i>{{ $property['PropAttributes']['size'] ?? 0 }}
                Mt2
            </li>
        </ul>
        <div class="other-info-box clearfix">
            <div class="btn-box pull-left">
                <a href="{{ route('front.properties.inner', $property['PropAttributes']['id']) }}"
                   class="theme-btn btn-two">Ver más</a>
            </div>
            <ul class="other-option pull-right clearfix">
                <li>{!! Share::page(Request::url(), 'Your share text can be placed here')->facebook() !!}</li>
                <li>{!! Share::page(url()->current(), 'Your share text can be placed here')->whatsapp() !!}</li>
                <li>
                    <form
                        action="{{ route('userProfile.wishlist.delete', $property->id) }}"
                        method="POST">
                        @csrf
                        <input name="_method" type="hidden" value="DELETE">
                        <input name="user_id" type="hidden" value="{{ $property->user_id }}">
                        <button class="btn-danger show-alert-delete-box"
                                data-toggle="tooltip" title='Borrar'
                                type="submit" action=""><a href="#"><i
                                    class="fa fa-ban"></i></a></button>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</div>
