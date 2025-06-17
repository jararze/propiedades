@php
    $advertising = \App\Models\Advertising::all();
@endphp

{{--@dd($advertising);--}}
<!-- download-section -->
<section class="download-section bg-color-3">
    <div class="pattern-layer" style="background-image: url({{asset('front/assets/images/shape/shape-3.png')}});"></div>
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-lg-6 col-md-6 col-sm-12 image-column">
                <div class="image-box">

                    <figure class="image image-1 wow fadeInUp animated" data-wow-delay="00ms"
                            data-wow-duration="1500ms">
                        <img
                            src="{{ (!empty($advertising[0]->image)) ? url('upload/configuration/advertising/' .  $advertising[0]->image) : url('upload/No_Image_Available.jpg') }}"
                            alt="{{ $advertising[0]->tiitle }}" style="align-content: center;">
{{--                        <img alt="" src="{{asset('front/images/372753455_272889842177155_4105961299895433579_n.jpg')}}">--}}
                    </figure>
{{--                    <figure class="image image-2 wow fadeInUp animated" data-wow-delay="300ms"--}}
{{--                            data-wow-duration="1500ms">--}}
{{--                        <img alt="" src="{{asset('front/images/371358605_268862145913258_7116115053491760702_n.jpg')}}">--}}
{{--                    </figure>--}}
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 content-column">
                <div class="content_block_1">
                    <div class="content-box">
                        <span>{{ $advertising[0]->banner }}</span>
                        <h2>{{ $advertising[0]->title }}</h2>
                        <div class="download-btn">
                            <a class="app-store" href="{{ $advertising[0]->button1_link }}">
                                <i class="{{ $advertising[0]->button1_icon }}"></i>
                                <h4>{{ $advertising[0]->button1 }}</h4>
                            </a>
                            <a class="google-play" href="{{ $advertising[0]->button2_link }}">
                                <i class="{{ $advertising[0]->button2_icon }}"></i>
                                <h4>{{ $advertising[0]->button2 }}</h4>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- download-section end -->
