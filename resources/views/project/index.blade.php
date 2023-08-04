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
                                                                            <div class="swiper-slide slider_image_{{ $key }}"
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
                                                                        <div class="swiper-slide" data-title="{{ $unit->name }}">
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
                                                                                                        <strong>A LA</strong>
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
                                                                                                        <strong>Metros Construidos m<sup>2</sup></strong>
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
                                                                                                       class="sc_button sc_button_default sc_button_size_normal sc_button_icon_left" target="_blank">
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
                                                                                                            alt="{{ $unit->name }}" style="width: 400px; height: 300px">
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
                                                    IMPRESIONANTES APARTAMENTOS DE ALQUILER DE LUJO, DISEÑADOS PARA LA VIDA</h2>
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
                                                                    <div class="trx_addons_column-1_3 ">
                                                                        <div
                                                                            class="sc_services_item without_content with_icon sc_services_item_featured_top">
                                                                            <div class="sc_services_item_header">
                                                                                <a href="#"
                                                                                   id="sc_services_1559316197_icon-modem"
                                                                                   class="sc_services_item_icon sc_icon_type_svg">
                                                                                    <svg version="1.1"
                                                                                         xmlns="http://www.w3.org/2000/svg"
                                                                                         x="0px" y="0px"
                                                                                         width="500px"
                                                                                         height="500px"
                                                                                         viewBox="0 0 500 500"
                                                                                         enable-background="new 0 0 500 500"
                                                                                         xml:space="preserve">
																								<path stroke-width="25"
                                                                                                      stroke-miterlimit="10"
                                                                                                      d="M346.536,119.412
																								c-53.23-53.23-139.843-53.23-193.073,0"/>
                                                                                        <path stroke-width="25"
                                                                                              stroke-miterlimit="10"
                                                                                              d="M391.801,74.148
																								C353.98,36.329,303.621,15.5,250,15.5c-53.622,0-103.981,20.829-141.8,58.648"/>
                                                                                        <path stroke-width="25"
                                                                                              stroke-miterlimit="10"
                                                                                              d="M301.273,164.674
																								c-13.679-13.679-31.887-21.211-51.273-21.211c-19.386,0-37.595,7.532-51.273,21.211"/>
                                                                                        <polygon stroke-width="25"
                                                                                                 stroke-miterlimit="10"
                                                                                                 points="258.682,274.249 258.682,215.335
																								241.318,215.335 241.318,274.249 15.695,274.249 15.695,485.937 484.305,485.937 484.305,274.249 "/>
																							</svg>
                                                                                </a>
                                                                                <h6 class="sc_services_item_title">
                                                                                    <a href="#">Free Height Speed
                                                                                        Wi-Fi</a>
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
                                                                    <div class="trx_addons_column-1_3 ">
                                                                        <div
                                                                            class="sc_services_item without_content with_icon sc_services_item_featured_top">
                                                                            <div class="sc_services_item_header">
                                                                                <a href="#"
                                                                                   id="sc_services_1559316197_icon-laundry"
                                                                                   class="sc_services_item_icon sc_icon_type_svg">
                                                                                    <svg version="1.1"
                                                                                         xmlns="http://www.w3.org/2000/svg"
                                                                                         x="0px" y="0px"
                                                                                         width="500px"
                                                                                         height="500px"
                                                                                         viewBox="0 0 500 500"
                                                                                         enable-background="new 0 0 500 500"
                                                                                         xml:space="preserve">
																								<path stroke-width="25"
                                                                                                      stroke-miterlimit="10"
                                                                                                      d="M250,207.238
																									c-58.966,0-106.938,47.972-106.938,106.938S191.034,421.114,250,421.114c58.966,0,106.938-47.973,106.938-106.938
																								S308.966,207.238,250,207.238z"/>
                                                                                        <rect x="38.5" y="19.489"
                                                                                              stroke-width="25"
                                                                                              stroke-miterlimit="10"
                                                                                              width="423"
                                                                                              height="461.021"/>
                                                                                        <line stroke-width="25"
                                                                                              stroke-miterlimit="10"
                                                                                              x1="25.5" y1="143.5"
                                                                                              x2="473.5"
                                                                                              y2="143.5"/>
																							</svg>
                                                                                </a>
                                                                                <h6 class="sc_services_item_title">
                                                                                    <a href="#">Luxury
                                                                                        Appliances</a>
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
                                                                    <div class="trx_addons_column-1_3 ">
                                                                        <div
                                                                            class="sc_services_item without_content with_icon sc_services_item_featured_top">
                                                                            <div class="sc_services_item_header">
                                                                                <a href="#"
                                                                                   id="sc_services_1559316197_icon-cart"
                                                                                   class="sc_services_item_icon sc_icon_type_svg">
                                                                                    <svg version="1.1"
                                                                                         xmlns="http://www.w3.org/2000/svg"
                                                                                         x="0px" y="0px"
                                                                                         width="500px"
                                                                                         height="500px"
                                                                                         viewBox="0 0 500 500"
                                                                                         enable-background="new 0 0 500 500"
                                                                                         xml:space="preserve">
																								<path stroke-width="25"
                                                                                                      stroke-miterlimit="10"
                                                                                                      d="M105.769,392.673
																									c-25.811,0-46.809,20.997-46.809,46.81c0,25.81,20.998,46.809,46.809,46.809s46.81-20.999,46.81-46.809
																								C152.579,413.67,131.58,392.673,105.769,392.673z"/>
                                                                                        <path stroke-width="25"
                                                                                              stroke-miterlimit="10"
                                                                                              d="M418.342,392.673
																									c-25.812,0-46.809,20.997-46.809,46.81c0,25.81,20.997,46.809,46.809,46.809s46.811-20.999,46.811-46.809
																								C465.152,413.67,444.153,392.673,418.342,392.673z"/>
                                                                                        <path stroke-width="25"
                                                                                              stroke-miterlimit="10"
                                                                                              d="M484.44,138.396H376.209
																									c-6.541-51.901-52.786-93.147-104.687-99.686V13.709h-18.934V38.71c-51.9,6.541-98.147,47.786-104.686,99.686H40.605V90.884H15.56
																								v8.934h24.111v192.197H58.96v72.688h406.192v-72.688h19.288V138.396z"/>
																							</svg>
                                                                                </a>
                                                                                <h6 class="sc_services_item_title">
                                                                                    <a href="#">Outdoor BBQ area</a>
                                                                                </h6>
                                                                                <div
                                                                                    class="sc_services_item_subtitle">
                                                                                    <a href="#"
                                                                                       title="View all posts in Apartments">Apartments</a>,
                                                                                    <a href="#"
                                                                                       title="View all posts in Process">Process</a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="trx_addons_column-1_3 ">
                                                                        <div
                                                                            class="sc_services_item without_content with_icon sc_services_item_featured_top">
                                                                            <div class="sc_services_item_header">
                                                                                <a href="#"
                                                                                   id="sc_services_1559316197_icon-parking"
                                                                                   class="sc_services_item_icon sc_icon_type_svg">
                                                                                    <svg version="1.1"
                                                                                         xmlns="http://www.w3.org/2000/svg"
                                                                                         x="0px" y="0px"
                                                                                         width="500px"
                                                                                         height="500px"
                                                                                         viewBox="0 0 500 500"
                                                                                         enable-background="new 0 0 500 500"
                                                                                         xml:space="preserve">
																								<path stroke-width="25"
                                                                                                      stroke-miterlimit="10"
                                                                                                      d="M205.346,275.382h58.393
																								c34.282,0,62.173-27.891,62.173-62.173c0-34.282-27.891-62.173-62.173-62.173h-58.65V355.84h0.257V275.382z"/>
                                                                                        <rect x="14.5" y="14.5"
                                                                                              stroke-width="25"
                                                                                              stroke-miterlimit="10"
                                                                                              width="473"
                                                                                              height="473"/>
                                                                                        <rect x="82.768" y="82.768"
                                                                                              stroke-width="25"
                                                                                              stroke-miterlimit="10"
                                                                                              width="336.463"
                                                                                              height="336.463"/>
																							</svg>
                                                                                </a>
                                                                                <h6 class="sc_services_item_title">
                                                                                    <a href="#">Parking place</a>
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
                                                                    <div class="trx_addons_column-1_3 ">
                                                                        <div
                                                                            class="sc_services_item without_content with_icon sc_services_item_featured_top">
                                                                            <div class="sc_services_item_header">
                                                                                <a href="#"
                                                                                   id="sc_services_1559316197_icon-swimming-pool"
                                                                                   class="sc_services_item_icon sc_icon_type_svg">
                                                                                    <svg version="1.1"
                                                                                         xmlns="http://www.w3.org/2000/svg"
                                                                                         x="0px" y="0px"
                                                                                         width="500px"
                                                                                         height="500px"
                                                                                         viewBox="0 0 500 500"
                                                                                         enable-background="new 0 0 500 500"
                                                                                         xml:space="preserve">
																								<path stroke-width="25"
                                                                                                      stroke-miterlimit="10"
                                                                                                      d="M499.999,428.258
																									c-20.349,0-31.185,7.3-39.892,13.165c-7.05,4.749-11.709,7.887-22.611,7.887c-10.903,0-15.563-3.139-22.612-7.888
																									c-8.708-5.865-19.544-13.165-39.892-13.165c-20.349,0-31.185,7.3-39.892,13.165c-7.05,4.749-11.707,7.888-22.61,7.888
																									c-10.902,0-15.559-3.139-22.609-7.888c-8.707-5.865-19.543-13.165-39.89-13.165c-20.348,0-31.183,7.3-39.889,13.166
																									c-7.049,4.749-11.706,7.888-22.608,7.888c-10.902,0-15.559-3.139-22.609-7.888c-8.707-5.866-19.542-13.166-39.89-13.166
																									c-20.348,0-31.183,7.3-39.89,13.165c-7.05,4.749-11.707,7.888-22.609,7.888c-10.901,0-15.559-3.139-22.608-7.888
																								c-8.705-5.865-19.54-13.165-39.888-13.165"/>
                                                                                        <path stroke-width="25"
                                                                                              stroke-miterlimit="10"
                                                                                              d="M499.999,358.258
																									c-20.349,0-31.185,7.3-39.892,13.165c-7.05,4.749-11.709,7.887-22.611,7.887c-10.903,0-15.563-3.139-22.612-7.888
																									c-8.708-5.865-19.544-13.165-39.892-13.165c-20.349,0-31.185,7.3-39.892,13.165c-7.05,4.749-11.707,7.888-22.61,7.888
																									c-10.902,0-15.559-3.139-22.609-7.888c-8.707-5.865-19.543-13.165-39.89-13.165c-20.348,0-31.183,7.3-39.889,13.166
																									c-7.049,4.749-11.706,7.888-22.608,7.888c-10.902,0-15.559-3.139-22.609-7.888c-8.707-5.866-19.542-13.166-39.89-13.166
																									c-20.348,0-31.183,7.3-39.89,13.165c-7.05,4.749-11.707,7.888-22.609,7.888c-10.901,0-15.559-3.139-22.608-7.888
																								c-8.705-5.865-19.54-13.165-39.888-13.165"/>
                                                                                        <path stroke-width="25"
                                                                                              stroke-miterlimit="10"
                                                                                              d="M315.91,72.944
																								c-16.174-16.94-38.823-26.925-62.743-26.925c-47.777,0-86.646,38.869-86.646,86.646v234.649"/>
                                                                                        <path stroke-width="25"
                                                                                              stroke-miterlimit="10"
                                                                                              d="M304.166,367.514V113.489
																								c0-34.627,28.171-62.799,62.798-62.799c34.628,0,62.799,28.171,62.799,62.799v92.783"/>
                                                                                        <g>
                                                                                            <path stroke-width="25"
                                                                                                  stroke-miterlimit="10"
                                                                                                  d="M171.081,172.129c1.745,0,125.582,0,125.582,0"/>
                                                                                            <path stroke-width="25"
                                                                                                  stroke-miterlimit="10"
                                                                                                  d="M171.081,272.129c10.151,0,1.341,0,125.582,0"/>
                                                                                        </g>
																							</svg>
                                                                                </a>
                                                                                <h6 class="sc_services_item_title">
                                                                                    <a href="#">Swimming Pool</a>
                                                                                </h6>
                                                                                <div
                                                                                    class="sc_services_item_subtitle">
                                                                                    <a href="#"
                                                                                       title="View all posts in Apartments">Apartments</a>,
                                                                                    <a href="#"
                                                                                       title="View all posts in Process">Process</a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="trx_addons_column-1_3 ">
                                                                        <div
                                                                            class="sc_services_item without_content with_icon sc_services_item_featured_top">
                                                                            <div class="sc_services_item_header">
                                                                                <a href="#"
                                                                                   id="sc_services_1559316197_icon-ironing"
                                                                                   class="sc_services_item_icon sc_icon_type_svg">
                                                                                    <svg version="1.1"
                                                                                         xmlns="http://www.w3.org/2000/svg"
                                                                                         x="0px" y="0px"
                                                                                         width="500px"
                                                                                         height="500px"
                                                                                         viewBox="0 0 500 500"
                                                                                         enable-background="new 0 0 500 500"
                                                                                         xml:space="preserve">
																								<g>
                                                                                                    <path
                                                                                                        stroke-width="25"
                                                                                                        stroke-miterlimit="10"
                                                                                                        d="M354.364,135.536H205.64l0.014-24.626
																										l-17.063,0.014v25.515c-51.848,6.521-98.637,47.726-105.158,99.573h-5.704c-33.56,0-60.863,27.303-60.863,60.863
																										c0,18.596,8.383,35.271,21.567,46.443c-13.184,11.173-21.567,27.848-21.567,46.443c0,33.56,27.303,60.863,60.864,60.863h344.541
																										c33.561,0,60.864-27.304,60.864-60.863c0-18.596-8.383-35.271-21.567-46.443c13.185-11.174,21.567-27.848,21.567-46.443
																									c0-33.56-27.304-60.863-60.864-60.863h-18L366.243,49.375H168.906l0,0"/>
                                                                                                </g>
                                                                                        <g>
                                                                                            <path stroke-width="25"
                                                                                                  stroke-miterlimit="10"
                                                                                                  d="M79.98,235.556c1.645,0,333.882,0,333.882,0"/>
                                                                                            <path stroke-width="25"
                                                                                                  stroke-miterlimit="10"
                                                                                                  d="M37.357,341.64c2.077,0,421.496,0,421.496,0"/>
                                                                                        </g>
																							</svg>
                                                                                </a>
                                                                                <h6 class="sc_services_item_title">
                                                                                    <a href="#">Washer &#8211;
                                                                                        Dryer</a>
                                                                                </h6>
                                                                                <div
                                                                                    class="sc_services_item_subtitle">
                                                                                    <a href="#"
                                                                                       title="View all posts in Interior">Interior</a>,
                                                                                    <a href="#"
                                                                                       title="View all posts in Process">Process</a>
                                                                                </div>
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

                    <section class="no-col-padding columns-stretch content-middle">
                        <div class="container">
                            <div class="row">
                                <a id="sc_anchor_film" class="sc_anchor sc_anchor_default" title="Lifestyle films"
                                   data-icon="icon-video-2" data-url=""></a>
                                <div class="columns_wrap">
                                    <div class="column_container column-1_1">
                                        <div class="column-inner">
                                            <div class="height_medium"></div>
                                            <div class="sc_content sc_content_default">
                                                <h6 class="sc_item_subtitle sc_content_subtitle sc_align_center sc_item_title_style_shadow">
                                                    05</h6>
                                                <h2 class="sc_item_title sc_content_title sc_align_center sc_item_title_style_shadow">
                                                    Lifestyle film</h2>
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
                                                                    <div class="swiper-slide slider_image_6"
                                                                         data-image="images/image_13-1170x658.jpg"
                                                                         data-cats="Interior"
                                                                         data-title="Apartments presentation">
                                                                        <div
                                                                            class="trx_addons_video_player with_cover hover_play">
                                                                            <div class="video_mask"></div>
                                                                            <div class="video_hover"
                                                                                 data-video="&lt;iframe width=&quot;1170&quot; height=&quot;658&quot; src=&quot;https://www.youtube.com/embed/nzfI4oiG2BM?feature=oembed&amp;autoplay=1&quot; frameborder=&quot;0&quot; allowfullscreen&gt;"></div>
                                                                            <div
                                                                                class="video_embed video_frame"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="swiper-slide slider_image_7"
                                                                         data-image="images/image_11-1170x658.jpg"
                                                                         data-cats="Life style"
                                                                         data-title="Visualizing Complex">
                                                                        <div
                                                                            class="trx_addons_video_player with_cover hover_play">
                                                                            <div class="video_mask"></div>
                                                                            <div class="video_hover"
                                                                                 data-video="&lt;iframe width=&quot;1170&quot; height=&quot;658&quot; src=&quot;https://www.youtube.com/embed/Su5xwCwwRKU?feature=oembed&amp;autoplay=1&quot; frameborder=&quot;0&quot; allowfullscreen&gt;"></div>
                                                                            <div
                                                                                class="video_embed video_frame"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="swiper-slide slider_image_8"
                                                                         data-image="images/image_06-1170x658.jpg"
                                                                         data-cats="Environment"
                                                                         data-title="Building progress">
                                                                        <div
                                                                            class="trx_addons_video_player with_cover hover_play">
                                                                            <div class="video_mask"></div>
                                                                            <div class="video_hover"
                                                                                 data-video="&lt;iframe width=&quot;560&quot; height=&quot;315&quot; src=&quot;https://www.youtube.com/embed/wHJkOPnnJbs?autoplay=1&quot; frameborder=&quot;0&quot; allowfullscreen&gt;"></div>
                                                                            <div
                                                                                class="video_embed video_frame"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="swiper-slide slider_image_9"
                                                                         data-image="images/image_09-1170x658.jpg"
                                                                         data-cats="Progress"
                                                                         data-title="Interior views">
                                                                        <div
                                                                            class="trx_addons_video_player with_cover hover_play">
                                                                            <div class="video_mask"></div>
                                                                            <div class="video_hover"
                                                                                 data-video="&lt;iframe width=&quot;1170&quot; height=&quot;658&quot; src=&quot;https://www.youtube.com/embed/x2wyW1LsVfY?feature=oembed&amp;autoplay=1&quot; frameborder=&quot;0&quot; allowfullscreen&gt;"></div>
                                                                            <div
                                                                                class="video_embed video_frame"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="slider_titles_outside_wrap">
                                                                <div class="slide_info slide_info_small">
                                                                    <h3 class="slide_title">Apartments
                                                                        presentation</h3>
                                                                    <div class="slide_cats">Interior</div>
                                                                </div>
                                                                <div class="slide_info slide_info_small">
                                                                    <h3 class="slide_title">
                                                                        <a href="#">Visualizing Complex</a>
                                                                    </h3>
                                                                    <div class="slide_cats">Life style</div>
                                                                </div>
                                                                <div class="slide_info slide_info_small">
                                                                    <h3 class="slide_title">Building progress</h3>
                                                                    <div class="slide_cats">Environment</div>
                                                                </div>
                                                                <div class="slide_info slide_info_small">
                                                                    <h3 class="slide_title">Interior views</h3>
                                                                    <div class="slide_cats">Progress</div>
                                                                </div>
                                                            </div>
                                                            <div class="slider_controls_wrap">
                                                                <a class="slider_prev swiper-button-prev" href="#">
                                                                            <span class="slider_controls_label">
																				<span>Prev</span>
                                                                            <span>VIDEO</span>
                                                                            </span>
                                                                </a>
                                                                <a class="slider_next swiper-button-next" href="#">
                                                                            <span class="slider_controls_label">
																				<span>Next</span>
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
                        class="full-height-section no-col-padding columns-stretch content-middle bg_image_4 scheme_dark">
                        <div class="container">
                            <div class="row">
                                <a id="sc_anchor_neiborhoods" class="sc_anchor sc_anchor_default"
                                   title="Apartment Neiborhoods" data-icon="icon-map" data-url=""></a>
                                <div class="columns_wrap">
                                    <div class="column_container column-2_3 push-1_3">
                                        <div class="column-inner">
                                            <div class="height_large"></div>
                                            <div class="sc_content sc_content_default">
                                                <h6 class="sc_item_subtitle sc_content_subtitle sc_align_right sc_item_title_style_default">
                                                    Apartment Neiborhoods</h6>
                                                <h2 class="sc_item_title sc_content_title sc_align_right sc_item_title_style_default">
                                                    STUNNING LUXURY RENTAL APARTMENTS, DESIGNED FOR LIFE</h2>
                                                <div class="sc_content_container"></div>
                                            </div>
                                            <div class="cqtooltip-wrapper hotspots-style-1" data-opacity="1"
                                                 data-tooltipanimation="grow" data-tooltipstyle="light"
                                                 data-trigger="hover" data-maxwidth="240" data-marginoffset=""
                                                 data-isdisplayall="off" data-displayednum="1">
                                                <img src="images/spacer-100x100.png" alt=""/>
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

                    <section class="full-height-section no-col-padding columns-stretch content-middle bg_image_5">
                        <div class="container">
                            <div class="row">
                                <a id="sc_anchor_news" class="sc_anchor sc_anchor_default"
                                   title="New &amp; Articles" data-icon="icon-newspaper" data-url=""></a>
                                <div class="columns_wrap">
                                    <div class="column_container column-1_1">
                                        <div class="column-inner phn">
                                            <div class="height_medium"></div>
                                            <div class="scheme_light sc_blogger sc_blogger_classic">
                                                <h6 class="sc_item_subtitle sc_blogger_subtitle sc_align_center sc_item_title_style_shadow">
                                                    07</h6>
                                                <h2 class="sc_item_title sc_blogger_title sc_align_center sc_item_title_style_shadow">
                                                    News & Articles</h2>
                                                <div
                                                    class="sc_blogger_columns sc_item_columns trx_addons_columns_wrap columns_padding_bottom">
                                                    <div class="trx_addons_column-1_3">
                                                        <div class="sc_blogger_item post">
                                                            <div
                                                                class="post_featured with_thumb hover_dots sc_blogger_item_featured">
                                                                <img src="images/image_04-370x208.jpg"
                                                                     alt="Start of installation of water and heating systems"/>
                                                                <div class="mask"></div>
                                                                <a href="#" aria-hidden="true" class="icons">
                                                                    <span></span>
                                                                    <span></span>
                                                                    <span></span>
                                                                </a>
                                                            </div>
                                                            <div class="sc_blogger_item_content entry-content">
                                                                <div class="sc_blogger_item_header entry-header">
                                                                    <h4 class="sc_blogger_item_title entry-title">
                                                                        <a href="#" rel="bookmark">Start of
                                                                            installation of water and heating
                                                                            systems</a>
                                                                    </h4>
                                                                    <div class="sc_blogger_post_meta post_meta">
                                                                                <span class="post_meta_item post_date">
																					<a href="#">July 12, 2016</a>
																				</span>
                                                                    </div>
                                                                </div>
                                                                <div class="sc_blogger_item_excerpt">
                                                                    <div class="sc_blogger_item_excerpt_text">
                                                                        <p>Fusce metus nulla, efficitur id convallis
                                                                            a, vestibulum eu dui. Nunc ornare augue
                                                                            a laoreet vehicula. Vestibulum ultrices
                                                                            nunc et consequat pellentesque. Maecenas
                                                                            placerat
                                                                            ornare pretium. Fusce tincidunt turpis
                                                                            in diam imperdiet, id mollis sem mollis.
                                                                            Duis ut arcu quam. Sed sagittis tortor
                                                                            nisi, sit amet imperdiet mauris eleifend
                                                                            et. Aenean
                                                                            consectetur fringilla justo, et pretium
                                                                            lectus. Vestibulum consequat vestibulum&hellip;</p>
                                                                    </div>
                                                                    <div
                                                                        class="sc_blogger_item_button sc_item_button">
                                                                        <a href="#"
                                                                           class="sc_button sc_button_simple">Read
                                                                            more</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="trx_addons_column-1_3">
                                                        <div class="sc_blogger_item post">
                                                            <div
                                                                class="post_featured with_thumb sc_blogger_item_featured">
                                                                <div
                                                                    class="slider_swiper_outer slider_style_default slider_outer_controls slider_outer_controls_side slider_outer_pagination slider_outer_pagination_bullets slider_outer_notitles slider_outer_one">
                                                                    <div
                                                                        class="slider_swiper swiper-slider-container slider_controls slider_controls_side slider_pagination slider_pagination_bullets slider_notitles slider_one slider_noresize"
                                                                        data-ratio="370:208" data-interval="8419"
                                                                        data-effect="slide"
                                                                        data-pagination="bullets"
                                                                        data-slides-per-view="1"
                                                                        data-slides-space="0">
                                                                        <div class="swiper-wrapper">
                                                                            <div
                                                                                class="swiper-slide slider_image_11"
                                                                                data-image="images/image_08-370x208.jpg"></div>
                                                                            <div
                                                                                class="swiper-slide slider_image_12"
                                                                                data-image="images/image_04-370x208.jpg"></div>
                                                                            <div
                                                                                class="swiper-slide slider_image_13"
                                                                                data-image="images/image_12-370x208.jpg"></div>
                                                                            <div
                                                                                class="swiper-slide slider_image_14"
                                                                                data-image="images/image_13-370x208.jpg"></div>
                                                                            <div
                                                                                class="swiper-slide slider_image_15"
                                                                                data-image="images/image_11-370x208.jpg"></div>
                                                                        </div>
                                                                        <div class="slider_controls_wrap">
                                                                            <a class="slider_prev swiper-button-prev"
                                                                               href="#"></a>
                                                                            <a class="slider_next swiper-button-next"
                                                                               href="#"></a>
                                                                        </div>
                                                                        <div
                                                                            class="slider_pagination_wrap swiper-pagination"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="sc_blogger_item_content entry-content">
                                                                <div class="sc_blogger_item_header entry-header">
                                                                    <h4 class="sc_blogger_item_title entry-title">
                                                                        <a href="#" rel="bookmark">Installation of
                                                                            internal engineering networks</a>
                                                                    </h4>
                                                                    <div class="sc_blogger_post_meta post_meta">
                                                                                <span class="post_meta_item post_date">
																					<a href="#">July 6, 2016</a>
																				</span>
                                                                    </div>
                                                                </div>
                                                                <div class="sc_blogger_item_excerpt">
                                                                    <div class="sc_blogger_item_excerpt_text">
                                                                        <p>Morbi tincidunt odio eget nisi commodo
                                                                            feugiat. Maecenas tincidunt lorem nibh,
                                                                            vel euismod nunc dignissim eu. Lorem
                                                                            ipsum dolor sit amet, consectetur
                                                                            adipiscing elit. Etiam
                                                                            bibendum et odio faucibus mollis.
                                                                            Phasellus hendrerit malesuada tincidunt.
                                                                            Nunc accumsan, mauris ut aliquam
                                                                            blandit, neque felis imperdiet leo, sed
                                                                            egestas diam turpis
                                                                            id ligula. Curabitur aliquam mi non
                                                                            justo malesuada, quis mattis lectus
                                                                            feugiat.&hellip;</p>
                                                                    </div>
                                                                    <div
                                                                        class="sc_blogger_item_button sc_item_button">
                                                                        <a href="#"
                                                                           class="sc_button sc_button_simple">Read
                                                                            more</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="trx_addons_column-1_3">
                                                        <div class="sc_blogger_item post format-video">
                                                            <div
                                                                class="post_featured with_thumb hover_play sc_blogger_item_featured">
                                                                <img src="images/image_05-370x208.jpg"
                                                                     alt="Our sales office holiday schedule"/>
                                                                <div class="mask"></div>
                                                                <div class="post_video_hover"
                                                                     data-video="&lt;iframe src=&quot;https://player.vimeo.com/video/152290999?autoplay=1&quot; width=&quot;640&quot; height=&quot;360&quot; frameborder=&quot;0&quot; webkitallowfullscreen mozallowfullscreen allowfullscreen&gt;">
                                                                </div>
                                                                <div class="post_video video_frame">
                                                                </div>
                                                            </div>
                                                            <div class="sc_blogger_item_content entry-content">
                                                                <div class="sc_blogger_item_header entry-header">
                                                                    <h4 class="sc_blogger_item_title entry-title">
                                                                        <a href="#" rel="bookmark">Our sales office
                                                                            holiday schedule</a>
                                                                    </h4>
                                                                    <div class="sc_blogger_post_meta post_meta">
                                                                                <span class="post_meta_item post_date">
																					<a href="#">July 4, 2016</a>
																				</span>
                                                                    </div>
                                                                </div>
                                                                <div class="sc_blogger_item_excerpt">
                                                                    <div class="sc_blogger_item_excerpt_text">
                                                                        <p>Vestibulum tincidunt fringilla gravida.
                                                                            Sed risus augue, congue sed ex et,
                                                                            ultrices mattis quam. Nulla tincidunt,
                                                                            erat non condimentum placerat, felis
                                                                            lacus blandit tellus,
                                                                            vel eleifend lacus augue vitae enim. Nam
                                                                            eget dui arcu. Vivamus sed leo aliquet,
                                                                            tincidunt tortor vel, accumsan mi.</p>
                                                                    </div>
                                                                    <div
                                                                        class="sc_blogger_item_button sc_item_button">
                                                                        <a href="#"
                                                                           class="sc_button sc_button_simple">Read
                                                                            more</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="sc_item_button sc_item_button_default sc_blogger_button sc_align_center sc_button_wrap">
                                                    <a href="#"
                                                       class="sc_button sc_button_default sc_button_size_normal sc_button_icon_left">
                                                                <span class="sc_button_text">
																	<span
                                                                        class="sc_button_title">View All Articles</span>
                                                                </span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="height_medium"></div>
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
                                    <div class="column_container column-1_3">
                                        <div class="column-inner ph15p">
                                            <div class="height_large"></div>
                                            <div class="height_huge hide_on_mobile"></div>
                                            <h3 class="trx_addons_no_margins sc_align_center">Contacts</h3>
                                            <div class="height_small"></div>
                                            <div class="sc_content sc_content_default">
                                                <div class="sc_content_container">
                                                    <div class="sc_align_center">
                                                        <span class="trx_addons_dark">Windsor Apartments</span>
                                                        <br/> 123, New Lenox<br/> Chicago, IL 60606<br/> Phone:
                                                        <span class="trx_addons_dark"><a href="tel:+1234567890">123-456-7890</a> <br/></span>
                                                        Fax: 098-765-4321<br/> Email: <span class="trx_addons_dark"><a
                                                                href="mailto:info@yoursite.com">info@yoursite.com</a>
                                                                </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="height_medium"></div>
                                            <div class="widget_area sc_widget_socials">
                                                <aside class="widget widget_socials">
                                                    <div class="socials_wrap sc_align_center">
                                                                <span class="social_item">
																	<a href="#" target="_blank"
                                                                       class="social_icons social_twitter">
																		<span class="trx_addons_icon-twitter"></span>
                                                                </a>
                                                                </span><span class="social_item">
																	<a href="#" target="_blank"
                                                                       class="social_icons social_facebook">
																		<span class="trx_addons_icon-facebook"></span>
                                                                </a>
                                                                </span><span class="social_item">
																	<a href="#" target="_blank"
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
                                    <div class="column_container column-1_3">
                                        <div class="column-inner phn">
                                            <a id="sc_anchor_contacts" class="sc_anchor sc_anchor_default"
                                               title="Contacts" data-icon="icon-email" data-url=""></a>


                                            <div id="sc_googlemap_1_wrap" class="sc_googlemap_wrap">
                                                <div id="sc_googlemap_1"
                                                     class="sc_googlemap sc_googlemap_default h92vh" data-zoom="16"
                                                     data-style="dark">
                                                    <iframe frameborder="0"
                                                            style="border: 0px; width: 100%; height: 100%;"
                                                            src="https://maps.google.com/maps?t=m&amp;output=embed&amp;iwloc=near&amp;z=12&amp;q=56-34+Waldron+St+Flushing%2C+NY+11368%2C+USA"
                                                            aria-label="123, New Lenox Chicago, IL 60606, USA ">
                                                    </iframe>
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                    <div class="column_container column-1_3">
                                        <div class="column-inner ph20p">
                                            <div class="height_large"></div>
                                            <div class="height_huge hide_on_mobile"></div>
                                            <h3 class="trx_addons_no_margins sc_align_center">ENQUIRE</h3>
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
                                                                                       placeholder="Your name">
																			</span>
                                                                        </label>
                                                                        <label
                                                                            class="sc_form_field sc_form_field_email required">
																			<span class="sc_form_field_wrap">
																				<input type="text" name="email"
                                                                                       aria-required="true"
                                                                                       id="contact_form_email"
                                                                                       placeholder="Your e-mail">
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
                                                                                          placeholder="Your message"></textarea>
																			</span>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="sc_form_field sc_form_field_button">
                                                                    <button>Schedule a tour</button>
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
