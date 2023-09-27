<!-- category-section -->
<section class="category-section centred">
    <div class="auto-container">
        <div class="inner-container wow slideInLeft animated" data-wow-delay="00ms" data-wow-duration="1500ms">
            <ul class="category-list clearfix">
                @foreach($propertyTypes as $property)
                    <li style="margin-bottom: 20px">
                        <div class="category-block-one">
                            <div class="inner-box">
                                <div class="icon-box"><i class="{{ $property->type_icon }}"></i></div>
                                <h5>
                                    <a href="/properties/filter?property_type={{ $property->id }}">{{ $property->type_name }}</a>
                                </h5>
                                <a href="/properties/filter?property_type={{ $property->id }}"><span>{{ $count[$property->id] }}</span></a>
                            </div>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</section>
<!-- category-section end -->
