@push('styles')

@endpush
@push('script')
    <script src="{{ asset('front/assets/js/product-filter.js') }}"></script>
    <script src="{{ asset('js/ajax.js') }}"></script>
@endpush

<x-front-layout>

    @include('frontend.pages.properties.headerList')


    <!-- property-page-section -->
    <section class="property-page-section property-list">
        <div class="auto-container">
            <div class="row clearfix">

                <div class="col-lg-8 col-md-12 col-sm-12 content-side">
                    <div class="property-content-side">
                        <div class="item-shorting clearfix">
                            <div class="left-column pull-left">
                                <h5>Total: <span> {{ $featuredProperties->count() }} propiedades</span></h5>
                            </div>
                            <div class="right-column pull-right clearfix">
                                <div class="short-menu clearfix">
                                    <button class="list-view on"><i class="icon-35"></i></button>
                                    <button class="grid-view"><i class="icon-36"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="wrapper list">

                            <div class="deals-list-content list-item">

                                @foreach($featuredProperties as $featured_propery)

                                    <div class="deals-block-one">
                                        <x-property-horizontal type="Destacada" :property="$featured_propery"></x-property-horizontal>
                                    </div>

                                @endforeach

                            </div>


                            <div class="deals-grid-content grid-item">
                                <div class="row clearfix">

                                    @foreach($featuredProperties as $featured_propery)
                                        <div class="col-lg-6 col-md-6 col-sm-12 feature-block">
                                            <x-property type="Destacada" :property="$featured_propery"></x-property>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>

                        {{ $featuredProperties->links('vendor.pagination.bootstrap-5') }}
{{--                        <div class="pagination-wrapper">--}}
{{--                            <ul class="pagination clearfix">--}}
{{--                                <li><a href="property-list.html" class="current">1</a></li>--}}
{{--                                <li><a href="property-list.html">2</a></li>--}}
{{--                                <li><a href="property-list.html">3</a></li>--}}
{{--                                <li><a href="property-list.html"><i class="fas fa-angle-right"></i></a></li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
                    </div>
                </div>



                <div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
                    @include('frontend.pages.properties.filter')
                </div>
            </div>
        </div>
    </section>
    <!-- property-page-section end -->

    @include('frontend.components.suscribe')
</x-front-layout>
