<div class="carousel-inner">
    <div class="single-item-carousel owl-carousel owl-theme owl-dots-none">
        @foreach($multiImages as $image)
            <figure class="image-box"><img src="{{ asset('upload/properties/' .  $property->code . "/multipleImages/" . $image->name) }}" alt=""></figure>
        @endforeach
    </div>
</div>
