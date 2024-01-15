@php
    $title = explode(" ", strtoupper($property->name));
@endphp

<header class="top_panel top_panel_style_1 without_bg_image scheme_side">
    <div class="header_widgets_wrap widget_area header_fullwidth">
        <div class="header_widgets_wrap_inner widget_area_inner">
            <aside id="trx_addons_widget_slider-3" class="widget widget_slider">
                <div class="slider_wrap slider_engine_revo slider_alias_homeslider-1">
                    <div id="rev_slider_1_1_wrapper" class="rev_slider_wrapper fullscreen-container">
                        <div id="rev_slider_1_1" class="rev_slider fullscreenbanner" data-version="5.2.6">
                            <ul>
                                <li data-index="rs-1" data-transition="fade" data-slotamount="default"
                                    data-hideafterloop="0" data-hideslideonmobile="off"
                                    data-easein="Linear.easeNone" data-easeout="Linear.easeNone"
                                    data-masterspeed="default" data-rotate="0" data-saveperformance="off"
                                    data-title="Slide" data-param1="" data-param2="" data-param3=""
                                    data-param4="" data-param5="" data-param6="" data-param7="" data-param8=""
                                    data-param9="" data-param10="" data-description="">

{{--                                    <img src="{{asset('project/images/1.jpg')}}" alt=""--}}
{{--                                         title="bg_header" width="1920" height="914"--}}
{{--                                         data-bgposition="center center" data-bgfit="cover"--}}
{{--                                         data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>--}}

                                    <img src="{{ (!empty($property->thumbnail)) ? url('upload/properties/' .  $property->code . "/" . $property->thumbnail) : url('upload/No_Image_Available.jpg') }}" alt=""
                                         title="bg_header" width="1920" height="914"
                                         data-bgposition="center center" data-bgfit="cover"
                                         data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>


                                    <div class="tp-caption slide_bg tp-resizeme" id="slide-1-layer-6"
                                         data-x="center" data-hoffset="" data-y="center" data-voffset=""
                                         data-width="['470']" data-height="['630']" data-transform_idle="o:1;"
                                         data-transform_in="y:bottom;s:800;e:Power2.easeOut;"
                                         data-transform_out="opacity:0;s:300;" data-start="1500"
                                         data-splitin="none" data-splitout="none" data-responsive_offset="on">
                                    </div>

                                    <div class="tp-caption   tp-resizeme  slide_subtitle" id="slide-1-layer-5"
                                         data-x="center" data-hoffset="" data-y="center" data-voffset="-110"
                                         data-width="['auto']" data-height="['auto']" data-transform_idle="o:1;"
                                         data-transform_in="y:50px;opacity:0;s:500;e:Power2.easeOut;"
                                         data-transform_out="opacity:0;s:300;" data-start="2100"
                                         data-splitin="none" data-splitout="none" data-responsive_offset="on">
                                        Encuentra lo mejor
                                    </div>

                                    <h1 style="font-size: 20px" class="tp-caption   tp-resizeme  slide_title" id="slide-1-layer-1"
                                        data-x="center" data-hoffset="" data-y="center" data-voffset="-20"
                                        data-width="['1024']" data-height="['auto']" data-transform_idle="o:1;"
                                        data-transform_in="y:50px;opacity:0;s:500;e:Power2.easeOut;"
                                        data-transform_out="opacity:0;s:300;" data-start="2400"
                                        data-splitin="none" data-splitout="none" data-responsive_offset="on">
                                        {{ $property->name }}
{{--                                        @if(count($title) == 1)--}}
{{--                                            {{ $title[0] }}--}}
{{--                                            <br>--}}
{{--                                        @endif--}}
{{--                                        @if(count($title) == 2)--}}
{{--                                            {{ $title[0] }} {{ $title[1] }}--}}
{{--                                            <br>--}}
{{--                                        @endif--}}
{{--                                        @if(count($title) > 2)--}}
{{--                                            @for($i = 2; $i < count($title) ; $i++)--}}
{{--                                                @if($i == 5)--}}
{{--                                                    <br/>--}}
{{--                                                @endif--}}
{{--                                                {{ $title[$i] }}--}}
{{--                                            @endfor--}}
{{--                                        @endif--}}
                                    </h1>

                                    {{--                                    <div class="tp-caption rev-btn  tp-resizeme  theme_button slide_button"--}}
                                    {{--                                         id="slide-1-layer-2" data-x="center" data-hoffset="" data-y="center"--}}
                                    {{--                                         data-voffset="150" data-width="['auto']" data-height="['auto']"--}}
                                    {{--                                         data-transform_idle="o:1;"--}}
                                    {{--                                         data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:0;e:Linear.easeNone;"--}}
                                    {{--                                         data-style_hover="c:rgba(0, 0, 0, 1.00);bg:rgba(255, 255, 255, 1.00);"--}}
                                    {{--                                         data-transform_in="y:50px;opacity:0;s:500;e:Power2.easeOut;"--}}
                                    {{--                                         data-transform_out="opacity:0;s:300;" data-start="2700"--}}
                                    {{--                                         data-splitin="none"--}}
                                    {{--                                         data-splitout="none"--}}
                                    {{--                                         data-actions='[{"event":"click","action":"simplelink","target":"_blank","url":"http:\/\/themeforest.net\/user\/themerex\/portfolio","delay":""}]'--}}
                                    {{--                                         data-responsive_offset="on">ENTERATE DE MAS--}}
                                    {{--                                    </div>--}}

                                    <div class="tp-caption   tp-resizeme  slide_scroll" id="slide-1-layer-3"
                                         data-x="center" data-hoffset="" data-y="bottom" data-voffset="170"
                                         data-width="['auto']" data-height="['auto']" data-transform_idle="o:1;"
                                         data-transform_in="opacity:0;s:500;e:Power2.easeOut;"
                                         data-transform_out="opacity:0;s:300;" data-start="3000"
                                         data-splitin="none" data-splitout="none"
                                         data-actions='[{"event":"click","action":"scrollbelow","offset":"px","delay":""}]'
                                         data-responsive_offset="on">
                                        <div class="theme_scroll_down">EXPLORAR</div>
                                    </div>
                                </li>
                            </ul>
                            <div class="tp-bannertimer tp-bottom"></div>
                        </div>
                    </div>
                </div>
            </aside>
        </div>
    </div>
</header>
