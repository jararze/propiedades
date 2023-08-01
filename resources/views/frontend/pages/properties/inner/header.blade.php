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
            <ul class="rating clearfix pull-left">
                <li><i class="icon-39"></i></li>
                <li><i class="icon-39"></i></li>
                <li><i class="icon-39"></i></li>
                <li><i class="icon-39"></i></li>
                <li><i class="icon-40"></i></li>
            </ul>
        </div>
    </div>
    <div class="right-column pull-right clearfix">
        <div class="price-inner clearfix">
            <ul class="category clearfix pull-left">
                <li><a href="property-details.html">{{ $property['type']['type_name'] }}</a></li>
                <li><a href="property-details.html">{{ $property->property_status }}</a></li>
            </ul>
            <div class="price-box pull-right">
                <h3>{{ number_format($property->max_price, 0) }} $us</h3>
            </div>
        </div>
        <ul class="other-option pull-right clearfix">
            <li>
                <a href="whatsapp://send?text=Mira esta propiedad!%0a%0a{!! $property->name !!}%0a%0a{!! $currenturl !!}" target="_blank" data-action="share/whatsapp/share"> <i class="icon-37"></i></a></li>
{{--                <a href="whatsapp://send?text=https%3A%2F%2F127.0.0.1%3A8000%2Fproperties%2Finner%2F5" target="_blank" data-action="share/whatsapp/share"> <i class="icon-37"></i></a></li>--}}
            <li><a href="property-details.html"><i class="icon-38"></i></a></li>
            <li><a href="property-details.html"><i class="icon-12"></i></a></li>
            <li><a href="property-details.html"><i class="icon-13"></i></a></li>
        </ul>
    </div>
</div>
