@push('styles')

@endpush
@push('script')
    <script src="{{ asset('front/assets/js/product-filter.js') }}"></script>
@endpush

<x-front-layout>

    @include('frontend.pages.projects.headerList')

    <section id="map-container" class="fullwidth-home-map hp3" style="height: 490px">
        <h3 class="vis-hid">Visible Heading</h3>
        <div id="map" data-map-zoom="9"></div>
    </section>


    <!-- property-page-section -->
    <section class="property-page-section property-list">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
                    @include('frontend.pages.projects.filter')
                </div>


                <div class="col-lg-8 col-md-12 col-sm-12 content-side">
                    <div class="property-content-side">
                        <div class="item-shorting clearfix">
                            <div class="left-column pull-left">
                                <h5>Total: <span>Mostrando 1-5 de {{ $featuredProperties->count() }} proyectos</span>
                                </h5>
                            </div>
                            <div class="right-column pull-right clearfix">
                                <div class="short-box clearfix">
                                    <div class="select-box">
                                        <select class="wide">
                                            <option data-display="Ordenar por: Nuevo">Ordenar por: Nuevo</option>
                                            <option value="1">Nuevo</option>
                                            <option value="2">Mas Buscado</option>
                                            <option value="3">Precio bajo</option>
                                            <option value="4">Precio alto</option>
                                        </select>
                                    </div>
                                </div>
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
                                        <div class="inner-box">
                                            <div class="image-box">
                                                <figure class="image"><img
                                                        src="{{ (!empty($featured_propery->thumbnail)) ? url('upload/properties/' .  $featured_propery->code . "/" . $featured_propery->thumbnail) : url('upload/No_Image_Available.jpg') }}"
                                                        alt="{{ $featured_propery->name }}"
                                                        style="width: 300px; height: 350px;">
                                                </figure>
                                                <div class="batch"><i class="icon-11"></i></div>
                                                <span class="category">Destacada</span>
                                                <div class="buy-btn"><a
                                                        href="{{ route('front.project.inner', $featured_propery->id) }}">{{ $featured_propery->property_status }}</a>
                                                </div>
                                            </div>
                                            <div class="lower-content">
                                                <div class="title-text">
                                                    <h4>
                                                        <a href="{{ route('front.project.inner', $featured_propery->id) }}">{{ $featured_propery->name }}</a>
                                                    </h4>
                                                </div>
                                                <div class="price-box clearfix">
                                                    <div class="price-info pull-left">
                                                        <h6>Empieza desde</h6>
                                                        <h4>{{ number_format($featured_propery->max_price, 0) }}$us</h4>
                                                    </div>
                                                    <div class="author-box pull-right">
                                                        <figure class="author-thumb">
                                                            <img
                                                                src="{{ (!empty($featured_propery['agent']['photo'])) ? url('upload/profiles/'.$featured_propery['agent']['photo']) : url('upload/No_Image_Available.jpg') }}"
                                                                alt="">
                                                            <span>{{ $featured_propery['agent']['name'] }} {{ $featured_propery['agent']['lastname'] }}</span>
                                                        </figure>
                                                    </div>
                                                </div>
                                                <p>{{ Str::words($featured_propery->short_description, 25, '...') }}</p>
                                                <ul class="more-details clearfix">
                                                    <li><i class="icon-14"></i>{{ $featured_propery->bedrooms }} Cuartos
                                                    </li>
                                                    <li><i class="icon-15"></i>{{ $featured_propery->bathrooms }} Baños
                                                    </li>
                                                    <li><i class="icon-16"></i>{{ $featured_propery->size }} Mt2</li>
                                                </ul>
                                                <div class="other-info-box clearfix">
                                                    <div class="btn-box pull-left">
                                                        <a href="{{ route('front.project.inner', $featured_propery->id) }}"
                                                           class="theme-btn btn-two">Ver más</a>
                                                    </div>
                                                    <ul class="other-option pull-right clearfix">
                                                        <li>
                                                            <a href="{{ route('front.project.inner', $featured_propery->id) }}"><i
                                                                    class="icon-12"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ route('front.project.inner', $featured_propery->id) }}"><i
                                                                    class="icon-13"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                @endforeach

                            </div>


                            <div class="deals-grid-content grid-item">
                                <div class="row clearfix">

                                    @foreach($featuredProperties as $featured_propery)
                                        <div class="col-lg-6 col-md-6 col-sm-12 feature-block">
                                            <div class="feature-block-one">
                                                <div class="inner-box">
                                                    <div class="image-box">
                                                        <figure class="image"><img
                                                                src="{{ (!empty($featured_propery->thumbnail)) ? url('upload/properties/' .  $featured_propery->code . "/" . $featured_propery->thumbnail) : url('upload/No_Image_Available.jpg') }}"
                                                                alt="{{ $featured_propery->name }}">
                                                        </figure>
                                                        <div class="batch"><i class="icon-11"></i></div>
                                                        <span class="category">Destacada</span>
                                                    </div>
                                                    <div class="lower-content">
                                                        <div class="author-info clearfix">
                                                            <div class="author pull-left">
                                                                <figure class="author-thumb">
                                                                    <img
                                                                        src="{{ (!empty($featured_propery['agent']['photo'])) ? url('upload/profiles/'.$featured_propery['agent']['photo']) : url('upload/No_Image_Available.jpg') }}"
                                                                        alt="">
                                                                </figure>
                                                                <h6>{{ $featured_propery['agent']['name'] }} {{ $featured_propery['agent']['lastname'] }}</h6>
                                                            </div>
                                                            <div class="buy-btn pull-right">
                                                                <a href="{{ route('front.project.inner', $featured_propery->id) }}">{{ $featured_propery->property_status }}</a>
                                                            </div>
                                                        </div>
                                                        <div class="title-text">
                                                            <h4>
                                                                <a href="{{ route('front.project.inner', $featured_propery->id) }}">{{ $featured_propery->name }}</a>
                                                            </h4>
                                                        </div>
                                                        <div class="price-box clearfix">
                                                            <div class="price-info pull-left">
                                                                <h6>Empieza desde</h6>
                                                                <h4>{{ number_format($featured_propery->max_price, 0) }}
                                                                    $us</h4>
                                                            </div>
                                                            <ul class="other-option pull-right clearfix">
                                                                <li>
                                                                    <a href="{{ route('front.project.inner', $featured_propery->id) }}"><i
                                                                            class="icon-12"></i></a></li>
                                                                <li>
                                                                    <a href="{{ route('front.project.inner', $featured_propery->id) }}"><i
                                                                            class="icon-13"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <p>{{ Str::words($featured_propery->short_description, 25, '...') }}</p>
                                                        <ul class="more-details clearfix">
                                                            <li><i class="icon-14"></i>{{ $featured_propery->bedrooms }}
                                                                Cuartos
                                                            </li>
                                                            <li>
                                                                <i class="icon-15"></i>{{ $featured_propery->bathrooms }}
                                                                Baños
                                                            </li>
                                                            <li><i class="icon-16"></i>{{ $featured_propery->size }} Mt2
                                                            </li>
                                                        </ul>
                                                        <div class="btn-box">
                                                            <a href="{{ route('front.project.inner', $featured_propery->id) }}"
                                                               class="theme-btn btn-two">Ver más</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="pagination-wrapper">
                            <ul class="pagination clearfix">
                                <li><a href="property-list.html" class="current">1</a></li>
                                <li><a href="property-list.html">2</a></li>
                                <li><a href="property-list.html">3</a></li>
                                <li><a href="property-list.html"><i class="fas fa-angle-right"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- property-page-section end -->

    @include('frontend.components.suscribe')
</x-front-layout>
