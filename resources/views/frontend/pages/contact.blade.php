@push('styles')
@endpush
@push('script')
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDAX9rEY00ajicFc0JZbwK4i-3HOQMBV78"></script>
    <script src="{{ asset('front/assets/js/gmaps.js') }}"></script>
    <script src="{{ asset('front/assets/js/map-helper.js') }}"></script>
@endpush
<x-front-layout>

    @php
        $config=App\Models\Configuration::all();
    @endphp
    <!--Page Title-->
    <section class="page-title centred" style="background-image: url({{ asset('front/assets/images/background/contact-us-icons-on-wooden-blocks-2022-12-16-11-15-47-utc.jpg')}});">
        <div class="auto-container">
            <div class="content-box clearfix">
                <h1>Contáctanos</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="/">Inicio</a></li>
                    <li>Contáctanos</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->


    <!-- contact-info-section -->
    <section class="contact-info-section sec-pad centred">
        <div class="auto-container">
            <div class="sec-title">
                <h5>Contáctanos</h5>
                <h2>Póngase en contacto</h2>
            </div>
            <div class="row clearfix">
                <div class="col-lg-4 col-md-6 col-sm-12 info-block">
                    <div class="info-block-one">
                        <div class="inner-box">
                            <div class="icon-box"><i class="icon-32"></i></div>
                            <h4>Email</h4>
                            <p><a href="mailto:{{  $config[10]->value }}">{{  $config[10]->value }}</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 info-block">
                    <div class="info-block-one">
                        <div class="inner-box">
                            <div class="icon-box"><i class="icon-33"></i></div>
                            <h4>Teléfono</h4>
                            <p><a href="tel:+591{{  $config[3]->value }}">{{  $config[3]->value }}</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 info-block">
                    <div class="info-block-one">
                        <div class="inner-box">
                            <div class="icon-box"><i class="icon-34"></i></div>
                            <h4>Dirección</h4>
                            <p>{{  $config[1]->value }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact-info-section end -->


    <!-- contact-section -->
    <section class="contact-section bg-color-1">
        <div class="auto-container">
            <div class="row align-items-center clearfix">
                <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                    <div class="content-box">
                        <div class="sec-title">
                            <h5>CONTACTO</h5>
                            <h2>Contáctanos</h2>
                        </div>
                        <div class="form-inner">
                            <form method="post" action="{{ route() }}" id="contact-form">
                                <div class="row clearfix">
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <input value="{{ old('name') }}" id="name" name="name" type="text"
                                               class="form-control"
                                               placeholder="Nombre" required>
                                        <x-input-error :messages="$errors->get('name')" class="mt-2"/>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <input value="{{ old('email') }}" id="email" name="email" type="text"
                                               class="form-control"
                                               placeholder="Email" required>
                                        <x-input-error :messages="$errors->get('email')" class="mt-2"/>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <input value="{{ old('phone') }}" id="phone" name="phone" type="text"
                                               class="form-control"
                                               placeholder="Telefono" required>
                                        <x-input-error :messages="$errors->get('phone')" class="mt-2"/>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <input value="{{ old('subject') }}" id="subject" name="subject" type="text"
                                               class="form-control"
                                               placeholder="Asunto" required>
                                        <x-input-error :messages="$errors->get('subject')" class="mt-2"/>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                        <textarea name="message" placeholder="Mensaje">{{ old('subject') }}</textarea>
                                        <x-input-error :messages="$errors->get('message')" class="mt-2"/>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group message-btn">
                                        <button class="theme-btn btn-one" type="submit" name="submit-form">Enviar mensaje</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 map-column">
                    <div class="google-map-area">
                        <div
                            class="google-map"
                            id="contact-google-map"
                            data-map-lat="{{  $config[12]->value }}"
                            data-map-lng="{{  $config[13]->value }}"
                            data-icon-path="{{ asset('front/assets/images/icons/map-marker.png')}}"
                            data-map-title="Pro Propiedades La Paz Bolivia"
                            data-map-zoom="15"
                            data-markers='{
                                    "marker-1": [-16.54440921178635, -68.07913396216127, "<h4>Oficina Principal</h4><p>77/99 New York</p>","assets/images/icons/map-marker.png"]
                                }'>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact-section end -->


@include('frontend.components.suscribe')


</x-front-layout>
