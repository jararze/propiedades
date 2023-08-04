@if(count($multiImages) != 0)
    <div class="carousel-inner">
        <div class="bxslider">
        @foreach($multiImages as $image)
                <div class="slider-content">
                    <div class="product-image">
                        <figure class="image-box">
                            <img
                                src="{{ (!empty($image->name)) ? url('upload/properties/' .  $property->code . "/multipleImages/" . $image->name) : url('upload/No_Image_Available.jpg') }}"
                                alt="">
                        </figure>
                    </div>
                    <div class="slider-pager">
                        <ul class="thumb-box clearfix">
                            @php
                                $var = 0
                            @endphp
                            @foreach($multiImages as $image)
                                <li>
                                    <a class="active" data-slide-index="{{ $var }}" href="#">
                                        <figure><img
                                                src="{{ (!empty($image->name)) ? url('upload/properties/' .  $property->code . "/multipleImages/" . $image->name) : url('upload/No_Image_Available.jpg') }}"
                                                alt=""></figure>
                                    </a>
                                </li>
                                @php
                                    $var++
                                @endphp
                            @endforeach
                        </ul>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endif
