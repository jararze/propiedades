@php
    $categories=App\Models\Configuration::all();
@endphp

@push('styles')

@endpush
@push('script')

@endpush
<x-project-layout>


    @include("layouts.project.mainSlider")

    @include("layouts.project.mainMenu")

    <div class="page_content_wrap scheme_default">
        <div class="content">
            <article class="post_item_single page">
                <div class="post_content entry-content">

                    <section class="full-height-section no-col-padding columns-stretch content-middle">
                        <div class="container">
                            <div class="row">
                                <a id="sc_anchor_new_complex" class="sc_anchor sc_anchor_default"
                                   title="{{ $property->name }}" data-icon="icon-note-2" data-url=""></a>
                                <div class="columns_wrap">
                                    <div class="column_container column-1_1">
                                        <div class="column-inner">
                                            <div class="height_large"></div>
                                            <div
                                                class="sc_promo sc_promo_modern sc_promo_size_large sc_promo_no_paddings sc_promo_image_position_right sc_promo_image_width_50p">
                                                <div class="sc_promo_image_wrap">
                                                    <div class="sc_promo_image bg_image_1"
                                                         style="background-image: url('{{ (!empty($property->thumbnail)) ? url('upload/properties/' .  $property->code . "/" . $property->thumbnail) : url('upload/No_Image_Available.jpg') }}') !important;"></div>
                                                    {{--                                                    <a class="sc_promo_link2" href="#">--}}
                                                    {{--                                                        <span>More</span>--}}
                                                    {{--                                                        <span>PHOTO</span>--}}
                                                    {{--                                                    </a>--}}
                                                </div>
                                                <div class="sc_promo_text">
                                                    <div class="sc_promo_text_inner">
                                                        <h6 class="sc_item_subtitle sc_promo_subtitle sc_align_default sc_item_title_style_default">
                                                            {{ $property->name }}</h6>
                                                        <h2 class="sc_item_title sc_promo_title sc_align_default sc_item_title_style_default">
                                                            {{ $property->short_description }}</h2>
                                                        <div class="sc_item_descr sc_promo_descr sc_align_default">
                                                            {{ $property->long_description }}
                                                        </div>
                                                        {{--                                                        <div--}}
                                                        {{--                                                            class="sc_item_button sc_item_button_simple sc_promo_button sc_align_default sc_button_wrap">--}}
                                                        {{--                                                            <a href="#"--}}
                                                        {{--                                                               class="sc_button sc_button_simple sc_button_size_normal sc_button_icon_left">--}}
                                                        {{--                                                                        <span class="sc_button_text">--}}
                                                        {{--																			<span--}}
                                                        {{--                                                                                class="sc_button_title">Read more</span>--}}
                                                        {{--                                                                        </span>--}}
                                                        {{--                                                            </a>--}}
                                                        {{--                                                        </div>--}}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="height_large"></div>
                                            <div class="row">
                                                <div class="columns_wrap">
                                                    <div class="column_container column-1_1 scheme_dark">
                                                        <div class="column-inner pn">
                                                            <div id="sc_skills_1"
                                                                 class="sc_skills sc_skills_counter"
                                                                 data-type="counter">
                                                                <div
                                                                    class="sc_skills_columns sc_item_columns trx_addons_columns_wrap columns_padding_bottom">
                                                                    <div
                                                                        class="sc_skills_column trx_addons_column-1_4">
                                                                        <div class="sc_skills_item_wrap">
                                                                            <div class="sc_skills_item">
                                                                                <div class="sc_skills_total"
                                                                                     data-start="0"
                                                                                     data-stop="{{ $units = ($property->units == null) ? 0 : $property->units }}"
                                                                                     data-step="13" data-max="12500"
                                                                                     data-speed="26"
                                                                                     data-duration="272" data-ed="">
                                                                                    0
                                                                                </div>
                                                                            </div>
                                                                            <div class="sc_skills_item_title">Unidades
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="sc_skills_column trx_addons_column-1_4">
                                                                        <div class="sc_skills_item_wrap">
                                                                            <div class="sc_skills_item">
                                                                                <div class="sc_skills_total"
                                                                                     data-start="0" data-stop="355"
                                                                                     data-step="13" data-max="1250"
                                                                                     data-speed="30"
                                                                                     data-duration="819" data-ed="">
                                                                                    0
                                                                                </div>
                                                                            </div>
                                                                            <div class="sc_skills_item_title">
                                                                                Habitaciones
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="sc_skills_column trx_addons_column-1_4">
                                                                        <div class="sc_skills_item_wrap">
                                                                            <div class="sc_skills_item">
                                                                                <div class="sc_skills_total"
                                                                                     data-start="0" data-stop="326"
                                                                                     data-step="13" data-max="1250"
                                                                                     data-speed="15"
                                                                                     data-duration="376" data-ed="">
                                                                                    0
                                                                                </div>
                                                                            </div>
                                                                            <div class="sc_skills_item_title">Metros
                                                                                Cuadrados
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="sc_skills_column trx_addons_column-1_4">
                                                                        <div class="sc_skills_item_wrap">
                                                                            <div class="sc_skills_item">
                                                                                <div class="sc_skills_total"
                                                                                     data-start="0" data-stop="1225"
                                                                                     data-step="13" data-max="1250"
                                                                                     data-speed="33"
                                                                                     data-duration="3110"
                                                                                     data-ed="">0
                                                                                </div>
                                                                            </div>
                                                                            <div class="sc_skills_item_title">Habitantes
                                                                                felices
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="height_large"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>


                    @if(count($multiImages) != 0)
                        <section class="full-height-section no-col-padding columns-stretch content-middle bg_image_2">
                            <div class="container">
                                <div class="row">
                                    <a id="sc_anchor_photo_tour" class="sc_anchor sc_anchor_default"
                                       title="Tour de fotos"
                                       data-icon="icon-home-2" data-url=""></a>
                                    <div class="columns_wrap">
                                        <div class="column_container column-1_1">
                                            <div class="column-inner">
                                                <div class="height_large"></div>
                                                <div
                                                    class="sc_promo sc_promo_default sc_promo_size_large sc_promo_no_paddings sc_promo_no_image">
                                                    <div class="sc_promo_text">
                                                        <div class="sc_promo_text_inner">
                                                            <h6 class="sc_item_subtitle sc_promo_subtitle sc_align_center sc_item_title_style_shadow">
                                                                02</h6>
                                                            <h2 class="sc_item_title sc_promo_title sc_align_center sc_item_title_style_shadow">
                                                                Tour de fotos</h2>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="height_medium"></div>
                                                <div class="widget_area sc_widget_slider">
                                                    <aside class="widget widget_slider">
                                                        <div class="slider_wrap slider_engine_swiper">
                                                            <div
                                                                class="slider_swiper_outer slider_style_modern slider_outer_controls slider_outer_controls_side slider_outer_pagination slider_outer_pagination_fraction slider_outer_notitles slider_outer_one">
                                                                <div
                                                                    class="slider_swiper swiper-slider-container slider_height_auto slider_controls slider_controls_side slider_pagination slider_pagination_fraction slider_notitles slider_one mh530"
                                                                    data-ratio="1170:658" data-interval="7000"
                                                                    data-effect="slide" data-pagination="fraction"
                                                                    data-slides-per-view="1" data-slides-space="0">
                                                                    <div class="swiper-wrapper">
                                                                        @foreach($multiImages as $key => $image)
                                                                            <div
                                                                                class="swiper-slide slider_image_{{ $key }}"
                                                                                data-image="{{ (!empty($image->name)) ? url('upload/properties/' .  $property->code . "/multipleImages/" . $image->name) : url('upload/No_Image_Available.jpg') }}"
                                                                                data-cats="&lt;a href=&quot;#&quot; rel=&quot;category tag&quot;&gt;Apartment&lt;/a&gt;, &lt;a href=&quot;#&quot; rel=&quot;category tag&quot;&gt;Environment&lt;/a&gt;, &lt;a href=&quot;#&quot; rel=&quot;category tag&quot;&gt;Interior&lt;/a&gt;"
                                                                                data-title="The planned price increase"
                                                                                data-date="July 16, 2016">
                                                                                <a href="#" class="slide_link">
                                                                                    <img
                                                                                        src="{{ (!empty($image->name)) ? url('upload/properties/' .  $property->code . "/multipleImages/" . $image->name) : url('upload/No_Image_Available.jpg') }}"
                                                                                        alt="">
                                                                                </a>
                                                                            </div>
                                                                        @endforeach
                                                                    </div>
                                                                </div>
                                                                <div class="slider_controls_wrap">
                                                                    <a class="slider_prev swiper-button-prev" href="#">
                                                                            <span class="slider_controls_label">
																				<span>Anterior</span>
                                                                            <span>FOTO</span>
                                                                            </span>
                                                                    </a>
                                                                    <a class="slider_next swiper-button-next" href="#">
                                                                            <span class="slider_controls_label">
																				<span>Siguiente</span>
                                                                            <span>FOTO</span>
                                                                            </span>
                                                                    </a>
                                                                </div>
                                                                <div
                                                                    class="slider_pagination_wrap swiper-pagination"></div>
                                                            </div>
                                                        </div>
                                                    </aside>
                                                </div>
                                                <div class="height_large"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    @endif


                    <section class="no-col-padding columns-stretch content-middle">
                        <div class="container">
                            <div class="row">
                                <a id="sc_anchor_plans" class="sc_anchor sc_anchor_default" title="Unidades disponibles"
                                   data-icon="icon-floor" data-url=""></a>
                                <div class="columns_wrap">
                                    <div class="column_container column-1_1">
                                        <div class="column-inner">
                                            <div class="height_large"></div>
                                            <div class="sc_content sc_content_default">
                                                <h6 class="sc_item_subtitle sc_content_subtitle sc_align_center sc_item_title_style_shadow">
                                                    03</h6>
                                                <h2 class="sc_item_title sc_content_title sc_align_center sc_item_title_style_shadow">
                                                    Apartments plans</h2>
                                            </div>
                                            <div class="height_tiny"></div>
                                            <div id="slider_plans" class="widget_area sc_widget_slider">
                                                <aside id="slider_plans_widget" class="widget widget_slider">
                                                    <div class="slider_wrap slider_engine_swiper">
                                                        <div id="slider_plans_outer"
                                                             class="slider_swiper_outer slider_style_default slider_outer_nocontrols slider_outer_nopagination slider_outer_notitles slider_outer_one">
                                                            <div id="slider_plans_swiper"
                                                                 class="slider_swiper swiper-slider-container slider_height_auto slider_nocontrols slider_nopagination slider_notitles slider_one slider_noresize"
                                                                 data-ratio="370:208" data-interval="10000"
                                                                 data-effect="fade" data-pagination="bullets"
                                                                 data-slides-per-view="1" data-slides-space="0">
                                                                <div class="swiper-wrapper">
                                                                    @foreach($unitss as $unit)
                                                                        <div class="swiper-slide"
                                                                             data-title="{{ $unit->name }}">
                                                                            <div class="slide_content">
                                                                                <div class="row">
                                                                                    <div class="columns_wrap">
                                                                                        <div
                                                                                            class="column_container column-1_3">
                                                                                            <div class="column-inner">
                                                                                                <h4>
                                                                                                    <span
                                                                                                        class="trx_addons_accent">{{ $unit->name }}</span>
                                                                                                </h4>
                                                                                                <ul class="trx_addons_list trx_addons_list_parameters">
                                                                                                    <li>
                                                                                                        <strong>A
                                                                                                            LA</strong>
                                                                                                        <em>{{ $unit->property_status }}</em>
                                                                                                    </li>
                                                                                                    <li>
                                                                                                        <strong>HABITACIONES</strong>
                                                                                                        <em>{{ $unit->bedrooms }}</em>
                                                                                                    </li>
                                                                                                    <li>
                                                                                                        <strong>BAÑOS</strong>
                                                                                                        <em>{{ $unit->bathrooms }}</em>
                                                                                                    </li>
                                                                                                    <li>
                                                                                                        <strong>Metros
                                                                                                            Construidos
                                                                                                            m<sup>2</sup></strong>
                                                                                                        <em>{{ $unit->size }}</em>
                                                                                                    </li>
                                                                                                    <li>
                                                                                                        <strong>PARQUEO</strong>
                                                                                                        <em>{{ $unit->garage }}</em>
                                                                                                    </li>
                                                                                                    <li>
                                                                                                        <strong>PRECIO</strong>
                                                                                                        <span
                                                                                                            class="trx_addons_accent">
																												<em>
																													{{ $unit->lowest_price }} {{ $unit->currency }}
																												</em>
																											</span>
                                                                                                    </li>
                                                                                                </ul>
                                                                                                <div
                                                                                                    class="height_small"></div>
                                                                                                <div
                                                                                                    class="sc_item_button sc_button_wrap">
                                                                                                    <a href="{{ route('front.properties.inner', $unit->id) }}"
                                                                                                       class="sc_button sc_button_default sc_button_size_normal sc_button_icon_left"
                                                                                                       target="_blank">
                                                                                                            <span
                                                                                                                class="sc_button_text">
																												<span
                                                                                                                    class="sc_button_title">Ver en detalle</span>
                                                                                                            </span>
                                                                                                    </a>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div
                                                                                            class="column_container column-2_3">
                                                                                            <div class="column-inner">
                                                                                                <figure>
                                                                                                    <div>
                                                                                                        <img
                                                                                                            src="{{ (!empty($unit->thumbnail)) ? url('upload/properties/' .  $unit->code . "/" . $unit->thumbnail) : url('upload/No_Image_Available.jpg') }}"
                                                                                                            alt="{{ $unit->name }}"
                                                                                                            style="width: 400px; height: 300px">
                                                                                                    </div>
                                                                                                </figure>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    @endforeach

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </aside>
                                            </div>
                                            <div class="height_large hide_on_mobile"></div>
                                            <div class="height_tiny"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="no-col-padding no-row-margin">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="columns_wrap">
                                    <div class="column_container column-1_1">
                                        <div class="column-inner phn">
                                            <div id="slider_controller_1311150448"
                                                 class="sc_slider_controller sc_slider_controller_titles"
                                                 data-slider-id="slider_plans" data-style="titles" data-controls="1"
                                                 data-interval="0" data-effect="slide" data-slides-per-view="5"
                                                 data-slides-space="0" data-height="123px"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>


                    <section class="full-height-section no-col-padding columns-stretch content-middle bg_image_3">
                        <div class="container">
                            <div class="row">
                                <a id="sc_anchor_amenities" class="sc_anchor sc_anchor_default" title="Comodidades"
                                   data-icon="icon-clipboard" data-url=""></a>
                                <div class="columns_wrap">
                                    <div class="column_container column-2_3">
                                        <div class="column-inner">
                                            <div class="height_large"></div>
                                            <div class="scheme_dark sc_content sc_content_default">
                                                <h6 class="sc_item_subtitle sc_content_subtitle sc_align_default sc_item_title_style_default">
                                                    {{ $property->name  }} Comodidades</h6>
                                                <h2 class="sc_item_title sc_content_title sc_align_default sc_item_title_style_default">
                                                    IMPRESIONANTES APARTAMENTOS DE ALQUILER DE LUJO, DISEÑADOS PARA LA
                                                    VIDA</h2>
                                            </div>
                                            <div class="height_small"></div>
                                            <div class="row">
                                                <div class="columns_wrap">
                                                    <div class="column_container column-5_6">
                                                        <div class="column-inner phn">
                                                            <div class="sc_services sc_services_iconed"
                                                                 data-slides-per-view="3"
                                                                 data-slides-min-width="250">
                                                                <div
                                                                    class="sc_services_columns sc_item_columns trx_addons_columns_wrap columns_padding_bottom">
                                                                    @if($property_aminities == NULL )
                                                                        <h4>Sin Información</h4>
                                                                    @else
                                                                        @foreach($amenities as $amenity)
                                                                            @if(in_array($amenity->id, $property_aminities))
                                                                                {{--                                                                                <li>{{ $amenity->name }}</li>--}}
                                                                                <div class="trx_addons_column-1_3 ">
                                                                                    <div
                                                                                        class="sc_services_item without_content with_icon sc_services_item_featured_top">
                                                                                        <div
                                                                                            class="sc_services_item_header">
                                                                                            <a href="#"
                                                                                               id="sc_services_1559316197_icon-modem"
                                                                                               class="sc_services_item_icon sc_icon_type_svg">
                                                                                                {!! $amenity->icon !!}
                                                                                            </a>
                                                                                            <h6 class="sc_services_item_title">
                                                                                                <a href="#">{{ $amenity->name }}</a>
                                                                                            </h6>
                                                                                            <div
                                                                                                class="sc_services_item_subtitle">
                                                                                                <a href="#"
                                                                                                   title="View all posts in Apartments">Apartments</a>,
                                                                                                <a href="#"
                                                                                                   title="View all posts in Interior">Interior</a>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            @endif
                                                                        @endforeach
                                                                    @endif

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="height_large"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <section class="no-col-padding columns-stretch content-middle">
                        <div class="container">
                            <div class="row">
                                <a id="sc_anchor_film" class="sc_anchor sc_anchor_default" title="Videos Propiedad"
                                   data-icon="icon-video-2" data-url=""></a>
                                <div class="columns_wrap">
                                    <div class="column_container column-1_1">
                                        <div class="column-inner">
                                            <div class="height_medium"></div>
                                            <div class="sc_content sc_content_default">
                                                <h6 class="sc_item_subtitle sc_content_subtitle sc_align_center sc_item_title_style_shadow">
                                                    05</h6>
                                                <h2 class="sc_item_title sc_content_title sc_align_center sc_item_title_style_shadow">
                                                    Videos de la propiedad</h2>
                                            </div>
                                            <div class="height_tiny"></div>
                                            <div id="slider_video" class="widget_area sc_widget_slider">
                                                <aside id="slider_video_widget" class="widget widget_slider">
                                                    <div class="slider_wrap slider_engine_swiper">
                                                        <div id="slider_video_outer"
                                                             class="slider_swiper_outer slider_style_modern slider_outer_controls slider_outer_controls_side slider_outer_nopagination slider_outer_titles_outside slider_outer_one">
                                                            <div id="slider_video_swiper"
                                                                 class="slider_swiper swiper-slider-container slider_height_auto slider_controls slider_controls_side slider_nopagination slider_titles_outside slider_one mh430"
                                                                 data-ratio="1170:658" data-interval="10000"
                                                                 data-effect="slide"
                                                                 data-pagination="fraction" data-slides-per-view="1"
                                                                 data-slides-space="0">
                                                                <div class="swiper-wrapper">
                                                                    @foreach($allVideos as $videoo)
                                                                        <div
                                                                            class="swiper-slide slider_image_{{ $videoo->id }}"
                                                                            style="background-image: url('{{ (!empty($videoo->thumbnail)) ? url('upload/properties/' .  $videoo->code . "/" . $videoo->thumbnail) : url('upload/No_Image_Available.jpg') }}')"
                                                                            data-image="{{ (!empty($videoo->thumbnail)) ? url('upload/properties/' .  $videoo->code . "/" . $videoo->thumbnail) : url('upload/No_Image_Available.jpg') }}"
                                                                            data-cats="Interior"
                                                                            data-title="{{ $videoo->name }}">
                                                                            <div
                                                                                class="trx_addons_video_player with_cover hover_play">
                                                                                <div class="video_mask"></div>
                                                                                <div class="video_hover"
                                                                                     data-video="&lt;iframe width=&quot;1170&quot; height=&quot;658&quot; src=&quot;{{ $videoo->video }}&quot; frameborder=&quot;0&quot; allowfullscreen&gt;"></div>
                                                                                <div
                                                                                    class="video_embed video_frame"></div>
                                                                            </div>
                                                                        </div>
                                                                    @endforeach

                                                                </div>
                                                            </div>
                                                            <div class="slider_titles_outside_wrap">
                                                                @foreach($allVideos as $var)
                                                                    {{--                                                                    {{ dd($var) }}--}}
                                                                    <div class="slide_info slide_info_small">
                                                                        <h3 class="slide_title">{{ $var->name }}</h3>
                                                                        <div class="slide_cats">Interior</div>
                                                                    </div>
                                                                @endforeach
                                                            </div>
                                                            <div class="slider_controls_wrap">
                                                                <a class="slider_prev swiper-button-prev" href="#">
                                                                            <span class="slider_controls_label">
																				<span>Anterior</span>
                                                                            <span>VIDEO</span>
                                                                            </span>
                                                                </a>
                                                                <a class="slider_next swiper-button-next" href="#">
                                                                            <span class="slider_controls_label">
																				<span>Siguiente</span>
                                                                            <span>VIDEO</span>
                                                                            </span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </aside>
                                            </div>
                                            <div class="height_medium"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="no-col-padding no-row-margin scheme_dark">

                        <div class="container">
                            <div class="row">
                                <div class="columns_wrap">
                                    <div class="column_container column-1_1">
                                        <div class="column-inner ph10p">
                                            <div class="height_small"></div>
                                            <div id="slider_controller_2070836693"
                                                 class="sc_slider_controller sc_slider_controller_thumbs"
                                                 data-slider-id="slider_video" data-style="thumbs" data-controls="0"
                                                 data-interval="0" data-effect="slide" data-slides-per-view="4"
                                                 data-slides-space="20" data-height="100px">
                                            </div>
                                            <div class="height_small"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <section
                        class="full-height-section no-col-padding columns-stretch content-middle bg_image_4 scheme_dark"
                        style="background-image: url('{{ url('bg_hotspots.jpg') }}')">
                        <div class="container">
                            <div class="row">
                                <a id="sc_anchor_neiborhoods" class="sc_anchor sc_anchor_default"
                                   title="Alrededores" data-icon="icon-map" data-url=""></a>
                                <div class="columns_wrap">
                                    <div class="column_container column-2_3 push-1_3">
                                        <div class="column-inner">
                                            <div class="height_large"></div>
                                            <div class="sc_content sc_content_default">
                                                <h6 class="sc_item_subtitle sc_content_subtitle sc_align_right sc_item_title_style_default">
                                                    Servicios Cercanos</h6>
                                                <h2 class="sc_item_title sc_content_title sc_align_right sc_item_title_style_default">
                                                    {{ $property->name }}</h2>
                                                <div class="sc_content_container"></div>
                                            </div>
                                            <div class="cqtooltip-wrapper hotspots-style-1" data-opacity="1"
                                                 data-tooltipanimation="grow" data-tooltipstyle="light"
                                                 data-trigger="hover" data-maxwidth="240" data-marginoffset=""
                                                 data-isdisplayall="off" data-displayednum="1">
                                                {{--                                                <img src="{{url('upload/No_Image_Available.jpg')}}" alt=""/>--}}
                                                <div class="cq-hotspots">
                                                    <div class="hotspot-item pulse-white" data-top="31%"
                                                         data-left="0%">
                                                        <a href="#" class="cq-tooltip"
                                                           data-tooltip="&lt;span class=&quot;translation-chunk&quot; data-align=&quot;0:10&quot;&gt;SOUTH BRIDGE&lt;/span&gt;"
                                                           data-arrowposition="">
                                                            <span></span>
                                                        </a>
                                                    </div>
                                                    <div class="hotspot-item pulse-white" data-top="33%"
                                                         data-left="35%">
                                                        <a href="#" class="cq-tooltip" data-tooltip="NORTH BRIDGE"
                                                           data-arrowposition="top">
                                                            <span></span>
                                                        </a>
                                                    </div>
                                                    <div class="hotspot-item pulse-white" data-top="36%"
                                                         data-left="55%">
                                                        <a href="#" class="cq-tooltip"
                                                           data-tooltip="PARLAMENT HOUSE" data-arrowposition="top">
                                                            <span></span>
                                                        </a>
                                                    </div>
                                                    <div class="hotspot-item pulse-white" data-top="50%"
                                                         data-left="94%">
                                                        <a href="#" class="cq-tooltip" data-tooltip="PUBLIC LIBRARY"
                                                           data-arrowposition="top">
                                                            <span></span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>


                    <section
                        class="no-col-padding columns-stretch column-xs-12 column-equal-height columns-flex scheme_side">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="columns_wrap">
                                    <div class="column_container column-1_3" style="min-height: 700px !important;">
                                        <div class="column-inner ph15p">
                                            <div class="height_large"></div>
                                            <div class="height_huge hide_on_mobile"></div>
                                            <h3 class="trx_addons_no_margins sc_align_center">Contacto</h3>
                                            <div class="height_small"></div>
                                            <div class="sc_content sc_content_default">
                                                <div class="sc_content_container">
                                                    <div class="sc_align_center">
                                                        <span
                                                            class="trx_addons_dark">ProPropiedades -  {{ $property->name }}</span>
                                                        <br/> {{  $categories[1]->value }}<br/> Phone:
                                                        <span class="trx_addons_dark"><a
                                                                href="tel:+591{{  $categories[3]->value }}">{{  $categories[3]->value }}</a> <br/></span>

                                                        <br/> Correo: <span class="trx_addons_dark"><a
                                                                href="mailto:{{  $categories[10]->value }}">{{  $categories[10]->value }}</a>
                                                                </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="height_medium"></div>
                                            <div class="widget_area sc_widget_socials">
                                                <aside class="widget widget_socials">
                                                    <div class="socials_wrap sc_align_center">
                                                        <span class="social_item">
																	<a href="{{  $categories[4]->value }}" target="_blank"
                                                                       class="social_icons social_facebook">
																		<span class="trx_addons_icon-facebook"></span>
                                                                    </a>
                                                        </span>
                                                        <span class="social_item">
																	<a href="{{  $categories[5]->value }}" target="_blank"
                                                                       class="social_icons social_instagram">
																		<span class="trx_addons_icon-instagram"></span>
                                                                </a>
                                                                </span>
                                                    </div>
                                                </aside>
                                            </div>
                                            <div class="height_medium"></div>
                                        </div>
                                    </div>
                                    <div class="column_container column-1_3" style="min-height: 700px !important;">
                                        <div class="column-inner phn">
                                            <a id="sc_anchor_contacts" class="sc_anchor sc_anchor_default"
                                               title="Contacts" data-icon="icon-email" data-url=""></a>


                                            <div id="sc_googlemap_1_wrap" class="sc_googlemap_wrap"
                                                 style="min-height: 700px !important;">
                                                <div id="sc_googlemap_1"
                                                     class="sc_googlemap sc_googlemap_default h92vh" data-zoom="16"
                                                     data-style="dark">
                                                    <iframe frameborder="0"
                                                            style="border: 0px; width: 100%; height: 100%;"
                                                            src="https://maps.google.com/maps?t=m&amp;output=embed&amp;iwloc=near&amp;z=12&amp;"
                                                            aria-label="">
                                                    </iframe>
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                    <div class="column_container column-1_3" style="min-height: 700px !important;">
                                        <div class="column-inner ph20p">
                                            <div class="height_large"></div>
                                            <div class="height_huge hide_on_mobile"></div>
                                            <h3 class="trx_addons_no_margins sc_align_center">CONSULTA</h3>
                                            <div class="height_small"></div>
                                            <div class="sc_content sc_content_default">
                                                <div class="sc_content_container">
                                                    <div class="sc_form sc_form_enquire sc_form_style_form_1">
                                                        <form class="sc_form_form contact_1" method="post"
                                                              action="include/contact-form.php">
                                                            <div class="sc_form_info">
                                                                <div
                                                                    class="trx_addons_columns_wrap columns_padding_bottom"></div>
                                                            </div>
                                                            <div class="sc_form_fields">
                                                                <div class="trx_addons_columns_wrap">
                                                                    <div
                                                                        class="sc_form_details trx_addons_column-1_2">
                                                                        <label
                                                                            class="sc_form_field sc_form_field_name required">
																			<span class="sc_form_field_wrap">
																				<input type="text" name="name"
                                                                                       aria-required="true"
                                                                                       id="contact_form_username"
                                                                                       placeholder="Nombre">
																			</span>
                                                                        </label>
                                                                        <label
                                                                            class="sc_form_field sc_form_field_email required">
																			<span class="sc_form_field_wrap">
																				<input type="text" name="email"
                                                                                       aria-required="true"
                                                                                       id="contact_form_email"
                                                                                       placeholder="Correo">
																			</span>
                                                                        </label>
                                                                    </div>
                                                                    <div
                                                                        class="sc_form_message trx_addons_column-1_2">
                                                                        <label
                                                                            class="sc_form_field sc_form_field_message required">
																			<span class="sc_form_field_wrap">
																				<textarea name="message"
                                                                                          aria-required="true"
                                                                                          id="contact_form_message"
                                                                                          placeholder="Tu mensaje"></textarea>
																			</span>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="sc_form_field sc_form_field_button">
                                                                    <button>Planifica una visita</button>
                                                                </div>
                                                                <div class="trx_addons_message_box sc_form_result">
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="height_medium"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                </div>
            </article>
        </div>
    </div>
</x-project-layout>
