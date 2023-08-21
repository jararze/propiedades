@push('styles')
    <link href="{{ asset('front/assets/css/timePicker.css') }}" rel="stylesheet">
    {{--    <link href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/5.0.7/sweetalert2.min.css" rel="stylesheet">--}}
@endpush
@push('script')
    {{--    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>--}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{ asset('front/assets/js/timePicker.js') }}"></script>
    <script src="{{ asset('front/assets/js/bxslider.js') }}"></script>
    <!-- map script -->
    {{--    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA-CE0deH3Jhj6GN4YvdCFZS7DpbXexzGU"></script>--}}
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDAX9rEY00ajicFc0JZbwK4i-3HOQMBV78"></script>
    <script src="{{ asset('front/assets/js/gmaps.js') }}"></script>
    <script src="{{ asset('front/assets/js/map-helper.js') }}"></script>
    <script type="text/javascript">

        $(document).ready(function () {


            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $('.more_info_phone').click(function (event) {

                event.preventDefault();
                Swal.fire({
                    title: 'Registro',
                    html: `<input type="text" id="namePop" class="swal2-input" placeholder="Nombre"> <input type="text" id="phonePop" class="swal2-input" placeholder="Telefono">`,
                    confirmButtonText: 'Enviar',
                    focusConfirm: false,
                    showCancelButton: true,
                    allowOutsideClick: () => !Swal.isLoading(),
                    preConfirm: () => {
                        const namePop = Swal.getPopup().querySelector('#namePop').value
                        const phonePop = Swal.getPopup().querySelector('#phonePop').value
                        if (!namePop || !phonePop) {
                            Swal.showValidationMessage(`Ingrese valores validos`)
                        }
                        return {name: namePop, phone: phonePop}
                    }
                }).then((result) => {
                    // Swal.fire(` correo: ${result.value.name} telefono: ${result.value.phone} `.trim())
                    $.ajax({
                        url: '/user/validate/phone/show',
                        type: 'POST',
                        data: {
                            "email": result.value.name,
                            "phone": result.value.phone,
                            "property_id": {{ $property->id }},
                        },
                        dataType: 'JSON',
                        success: function (response) {
                            if (response.success === true) {
                                $("#personal_phone").attr("href", "tel:" + response.phone)
                                $("#personal_phone").text(response.phone)
                                Swal.fire("Datos agregados satisfactoriamente")
                            } else {
                                Swal.fire("Error por favor trate de nuevo")
                            }
                        },

                        error: function (xhr, status, error) {
                            const err = eval("(" + xhr.responseText + ")");
                            if (error === "Unauthorized" || err.message === "Unauthenticated.") {
                                alert("mal")
                            }
                        }
                    })
                })

            });

        });

    </script>
@endpush

<x-front-layout>

    <!-- property-details -->
    <section class="property-details property-details-one">
        <div class="auto-container">

            @include('frontend/pages/properties/inner/bigCarousel')

            @include('frontend/pages/properties/inner/header')

            <div class="row clearfix">


                <div class="col-lg-8 col-md-12 col-sm-12 content-side">
                    <div class="property-details-content">
                        @if(count($multiImages) == 0)
                            <h2>{{ $property->thumbnail }}</h2>
                            <div class="carousel-inner">
                                <div class="single-item-carousel owl-carousel owl-theme owl-dots-none">
                                    <figure class="image-box">
                                        <img
                                            src="{{ (!empty($property->thumbnail)) ? url('upload/properties/' .  $property->code . "/" . $property->thumbnail) : url('upload/No_Image_Availablee.jpg') }}"
                                            alt=""></figure>
                                </div>
                            </div>
                        @endif
                        {{--                        @include('frontend/pages/properties/inner/Carousel')--}}

                        <div class="discription-box content-widget">
                            <div class="title-box">
                                <h4>Descripción de la propiedad</h4>
                            </div>
                            <div class="text">
                                {!! $property->long_description !!}
                            </div>
                        </div>
                        <div class="details-box content-widget">
                            <div class="title-box">
                                <h4>Detalles de la propiedad</h4>
                            </div>
                            <ul class="list clearfix">
                                <li>Código: <span>{{ $property->code }}</span></li>
                                <li>Tamaño propiedad: <span>{{ $size = (isset($property->size)) ? $property->size : "S/I" }} mt2</span>
                                </li>
                                <li>Habitaciones:
                                    <span>{{ $bedrooms = (isset($property->bedrooms)) ? $property->bedrooms : "S/I" }}</span>
                                </li>
                                <li>Baños:
                                    <span>{{ $bathrooms = (isset($property->bathrooms)) ? $property->bathrooms : "S/I" }}</span>
                                </li>
                                <li>Precio: <span>{{ number_format($property->max_price, 0) }} $us</span></li>
                                <li>Year Built: <span>01 April, 2019</span></li>
                                <li>Tipo: <span>{{ $property['type']['type_name'] }}</span></li>
                                <li>A la: <span>{{ $property->property_status }}</span></li>
                                <li>Garaje:
                                    <span>{{ $garage = (isset($property->garage)) ? $property->garage : "S/I" }}</span>
                                </li>
                                <li>Tamaño Garaje: <span>{{ $garage_size = (isset($property->garage_size)) ? $property->garage_size : "S/I" }} mt2</span>
                                </li>
                            </ul>
                        </div>
                        <div class="amenities-box content-widget">
                            <div class="title-box">
                                <h4>Comodidades</h4>
                            </div>
                            <ul class="list clearfix">
                                @if($property_aminities == NULL )
                                    <h4>Sin Información</h4>
                                @else
                                    @foreach($amenities as $amenity)
                                        @if(in_array($amenity->id, $property_aminities))
                                            <li>{{ $amenity->name }}</li>
                                        @endif
                                    @endforeach
                                @endif
                            </ul>
                        </div>

                        <div class="location-box content-widget">
                            <div class="title-box">
                                <h4>Ubicación</h4>
                            </div>
                            <ul class="info clearfix">
                                <li style="width: 100%"><span>Dirección:</span> {{ $property->address }}</li>
                                <li><span>Ciudad:</span> {{ $city = isset($property->city) ? $property->city : "S/I" }}
                                </li>
                                <li>
                                    <span>País:</span> {{ $country = isset($property->country) ? $property->country : "S/I" }}
                                </li>
                                <li>
                                    <span>Zona:</span> {{ $neighborhood = isset($property->neighborhood) ? $property->neighborhood : "S/I" }}
                                </li>
                            </ul>
                            <div class="google-map-area">
                                <div
                                    class="google-map"
                                    id="contact-google-map"
                                    data-map-lat="{{ $property->latitude }}"
                                    data-map-lng="{{ $property->longitude }}"
                                    data-icon-path="{{ asset('front/assets/images/icons/map-marker.png') }}"
                                    data-map-title="{{ $property->name }}"
                                    data-map-zoom="15"
                                    data-markers='{
                                            "marker-1": [{{ $property->latitude }}, {{ $property->longitude }}, "<h4>{{ $property->name }}</h4>","{{ asset('front/assets/images/icons/map-marker.png') }}"]
                                        }'>

                                </div>
                            </div>
                        </div>


                        <div class="floorplan-inner content-widget">
                            <div class="title-box">
                                <h4>Video</h4>
                            </div>
                            @if(is_null($property->video))
                                <h4>Sin Información</h4>
                            @else
                                <section class="video-section centred"
                                         style="background-image: url({{ asset('upload/properties/' .  $property->code . "/" . $property->thumbnail) }});">
                                    <div class="auto-container">
                                        <div class="video-inner">
                                            <div class="video-btn">
                                                <a class="lightbox-image" data-caption=""
                                                   href="{{ $property->video }}"><i class="icon-17"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            @endif
                        </div>

                        <div class="nearby-box content-widget">
                            <div class="title-box">
                                <h4>¿Qué hay cerca?</h4>
                            </div>
                            @if(count($countFacility) == 0)
                                <h4>Sin Información</h4>
                            @else
                                <div class="inner-box">
                                    @foreach($principal_facilities as $pfacilityName)
                                        @foreach($countFacility as $nFac)
                                            {{--                                            {{ $nFac->facility_id  }} == {{ $pfacilityName->id }} <br />--}}
                                            @if($nFac->facility_id == $pfacilityName->id)
                                                <div class="single-item">
                                                    <div class="icon-box"><i class="{{ $pfacilityName->icon }}"></i>
                                                    </div>
                                                    <div class="inner">
                                                        <h5>{{ $pfacilityName->name }}:</h5>
                                                        @foreach($facilities as $facility)
                                                            @if($facility->facility_id == $pfacilityName->id)
                                                                <div class="box clearfix">
                                                                    <div class="text pull-left">
                                                                        <h6>{{ $facility->name }}
                                                                            <span>({{ $facility->distance }} km)</span>
                                                                        </h6>
                                                                    </div>
                                                                </div>
                                                            @endif
                                                        @endforeach
                                                    </div>
                                                </div>
                                            @endif
                                        @endforeach
                                    @endforeach
                                </div>
                            @endif
                        </div>


                        <div class="schedule-box content-widget">
                            <div class="title-box">
                                <h4>Agenda una visita</h4>
                            </div>
                            <div class="form-inner">
                                <form action="property-details.html" method="post">
                                    <div class="row clearfix">
                                        <div class="col-lg-6 col-md-12 col-sm-12 column">
                                            <div class="form-group">
                                                <i class="far fa-calendar-alt"></i>
                                                <input type="text" name="date" placeholder="Fecha" id="datepicker">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12 col-sm-12 column">
                                            <div class="form-group">
                                                <i class="far fa-clock"></i>
                                                <input type="text" name="time" placeholder="Horario">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-12 col-sm-12 column">
                                            <div class="form-group">
                                                <input type="text" name="name" placeholder="Tu Nombre" required="">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-12 col-sm-12 column">
                                            <div class="form-group">
                                                <input type="email" name="email" placeholder="Tu correo" required="">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-12 col-sm-12 column">
                                            <div class="form-group">
                                                <input type="tel" name="phone" placeholder="Tu telefono" required="">
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 column">
                                            <div class="form-group">
                                                <textarea name="message" placeholder="Mensaje"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 column">
                                            <div class="form-group message-btn">
                                                <button type="submit" class="theme-btn btn-one">Agenda</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
                    <div class="property-sidebar default-sidebar">


                        <div class="author-widget sidebar-widget">


                            <div class="author-box">

                                <figure class="author-thumb">
                                    <img alt=""
                                         src="{{ (!empty($property['agent']['photo'])) ? url('upload/profiles/'.$property['agent']['photo']) : url('upload/No_Image_Available.jpg') }}">
                                </figure>
                                <div class="inner">
                                    <h4>{{ $property['agent']['name'] }} {{ $property['agent']['lastname'] }}</h4>
                                    <ul class="info clearfix">
                                        <li><i class="fas fa-map-marker-alt"></i>{{ $property['agent']['address'] }}
                                            , {{ $property['agent']['city'] }}

                                        </li>
                                        <li><i class="fas fa-phone"></i>

                                            @if(Auth::check())
                                                <a href="tel:{{ $property['agent']['phone'] }}">{{ $property['agent']['phone'] }}</a>
                                            @else
                                                <a id="personal_phone" href="tel:{{ Str::limit($property['agent']['phone'], 5, '...') }}">{{ Str::limit($property['agent']['phone'], 5, '...') }}</a>
                                            @endif
                                        </li>
                                    </ul>
                                    @if(!Auth::check())
                                        <div class="btn-box mb-md-2"><a href="javascript:;" class="more_info_phone">Ver
                                                telefono</a></div>
                                    @endif
                                    <div class="btn-box"><a href="agents-details.html">Ver todas las propiedades</a>
                                    </div>
                                </div>
                            </div>


                            <div class="form-inner">

                                <form action="{{ route("front.properties.message") }}" method="post"
                                      class="default-form">
                                    @csrf
                                    <input type="hidden" name="property_id" value="{{ $property->id }}">
                                    <input type="hidden" name="user_id" value="{{ $var = Auth::user()->id ?? 0  }}">
                                    <input type="hidden" name="agent_id" value="{{ $property->agent_id }}">
                                    @if(Auth::check())
                                        <div class="form-group">
                                            <input type="text"
                                                   value="{{ Auth::user()->name }} {{ Auth::user()->lastname }}"
                                                   name="name" placeholder="Tu Nombre" required="">
                                        </div>
                                        <div class="form-group">
                                            <input type="email" value="{{ Auth::user()->email }}" name="email"
                                                   placeholder="Tu correo" required="">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" value="{{ Auth::user()->phone }}" name="phone"
                                                   placeholder="Telefono" required="">
                                        </div>
                                        <div class="form-group">
                                            <textarea name="message" placeholder="Mensaje"></textarea>
                                        </div>
                                        <div class="form-group message-btn">
                                            <button type="submit" class="theme-btn btn-one">Enviar mensaje</button>
                                        </div>
                                    @else
                                        <div class="form-group">
                                            <input type="text" name="name" placeholder="Tu Nombre" required="">
                                        </div>
                                        <div class="form-group">
                                            <input type="email" name="email" placeholder="Tu correo" required="">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="phone" placeholder="Telefono" required="">
                                        </div>
                                        <div class="form-group">
                                            <textarea name="message" placeholder="Mensaje"></textarea>
                                        </div>
                                        <div class="form-group message-btn">
                                            <button type="submit" class="theme-btn btn-one">Enviar mensaje</button>
                                        </div>
                                    @endif

                                </form>
                            </div>
                        </div>

                        {{--                        <div class="calculator-widget sidebar-widget">--}}
                        {{--                            <div class="calculate-inner">--}}
                        {{--                                <div class="widget-title">--}}
                        {{--                                    <h4>Mortgage Calculator</h4>--}}
                        {{--                                </div>--}}
                        {{--                                <form method="post" action="mortgage-calculator.html" class="default-form">--}}
                        {{--                                    <div class="form-group">--}}
                        {{--                                        <i class="fas fa-dollar-sign"></i>--}}
                        {{--                                        <input type="number" name="total_amount" placeholder="Total Amount">--}}
                        {{--                                    </div>--}}
                        {{--                                    <div class="form-group">--}}
                        {{--                                        <i class="fas fa-dollar-sign"></i>--}}
                        {{--                                        <input type="number" name="down_payment" placeholder="Down Payment">--}}
                        {{--                                    </div>--}}
                        {{--                                    <div class="form-group">--}}
                        {{--                                        <i class="fas fa-percent"></i>--}}
                        {{--                                        <input type="number" name="interest_rate" placeholder="Interest Rate">--}}
                        {{--                                    </div>--}}
                        {{--                                    <div class="form-group">--}}
                        {{--                                        <i class="far fa-calendar-alt"></i>--}}
                        {{--                                        <input type="number" name="loan" placeholder="Loan Terms(Years)">--}}
                        {{--                                    </div>--}}
                        {{--                                    <div class="form-group">--}}
                        {{--                                        <div class="select-box">--}}
                        {{--                                            <select class="wide">--}}
                        {{--                                                <option data-display="Monthly">Monthly</option>--}}
                        {{--                                                <option value="1">Yearly</option>--}}
                        {{--                                            </select>--}}
                        {{--                                        </div>--}}
                        {{--                                    </div>--}}
                        {{--                                    <div class="form-group message-btn">--}}
                        {{--                                        <button type="submit" class="theme-btn btn-one">Calculate Now</button>--}}
                        {{--                                    </div>--}}
                        {{--                                </form>--}}
                        {{--                            </div>--}}
                        {{--                        </div>--}}
                    </div>
                </div>
            </div>
            <div class="similar-content">
                <div class="title">
                    <h4>Similar Properties</h4>
                </div>
{{--                <div class="row clearfix">--}}
{{--                    <div class="col-lg-4 col-md-6 col-sm-12 feature-block">--}}
{{--                        <div class="feature-block-one wow fadeInUp animated" data-wow-delay="00ms"--}}
{{--                             data-wow-duration="1500ms">--}}
{{--                            <div class="inner-box">--}}
{{--                                <div class="image-box">--}}
{{--                                    <figure class="image"><img src="assets/images/feature/feature-1.jpg" alt="">--}}
{{--                                    </figure>--}}
{{--                                    <div class="batch"><i class="icon-11"></i></div>--}}
{{--                                    <span class="category">Featured</span>--}}
{{--                                </div>--}}
{{--                                <div class="lower-content">--}}
{{--                                    <div class="author-info clearfix">--}}
{{--                                        <div class="author pull-left">--}}
{{--                                            <figure class="author-thumb"><img src="assets/images/feature/author-1.jpg"--}}
{{--                                                                              alt=""></figure>--}}
{{--                                            <h6>Michael Bean</h6>--}}
{{--                                        </div>--}}
{{--                                        <div class="buy-btn pull-right"><a href="property-details.html">For Buy</a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="title-text"><h4><a href="property-details.html">Villa on Grand--}}
{{--                                                Avenue</a></h4></div>--}}
{{--                                    <div class="price-box clearfix">--}}
{{--                                        <div class="price-info pull-left">--}}
{{--                                            <h6>Start From</h6>--}}
{{--                                            <h4>$30,000.00</h4>--}}
{{--                                        </div>--}}
{{--                                        <ul class="other-option pull-right clearfix">--}}
{{--                                            <li><a href="property-details.html"><i class="icon-12"></i></a></li>--}}
{{--                                            <li><a href="property-details.html"><i class="icon-13"></i></a></li>--}}
{{--                                        </ul>--}}
{{--                                    </div>--}}
{{--                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing sed.</p>--}}
{{--                                    <ul class="more-details clearfix">--}}
{{--                                        <li><i class="icon-14"></i>3 Beds</li>--}}
{{--                                        <li><i class="icon-15"></i>2 Baths</li>--}}
{{--                                        <li><i class="icon-16"></i>600 Sq Ft</li>--}}
{{--                                    </ul>--}}
{{--                                    <div class="btn-box"><a href="property-details.html" class="theme-btn btn-two">See--}}
{{--                                            Details</a></div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-lg-4 col-md-6 col-sm-12 feature-block">--}}
{{--                        <div class="feature-block-one wow fadeInUp animated" data-wow-delay="300ms"--}}
{{--                             data-wow-duration="1500ms">--}}
{{--                            <div class="inner-box">--}}
{{--                                <div class="image-box">--}}
{{--                                    <figure class="image"><img src="assets/images/feature/feature-2.jpg" alt="">--}}
{{--                                    </figure>--}}
{{--                                    <div class="batch"><i class="icon-11"></i></div>--}}
{{--                                    <span class="category">Featured</span>--}}
{{--                                </div>--}}
{{--                                <div class="lower-content">--}}
{{--                                    <div class="author-info clearfix">--}}
{{--                                        <div class="author pull-left">--}}
{{--                                            <figure class="author-thumb"><img src="assets/images/feature/author-2.jpg"--}}
{{--                                                                              alt=""></figure>--}}
{{--                                            <h6>Robert Niro</h6>--}}
{{--                                        </div>--}}
{{--                                        <div class="buy-btn pull-right"><a href="property-details.html">For Rent</a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="title-text"><h4><a href="property-details.html">Contemporary--}}
{{--                                                Apartment</a></h4></div>--}}
{{--                                    <div class="price-box clearfix">--}}
{{--                                        <div class="price-info pull-left">--}}
{{--                                            <h6>Start From</h6>--}}
{{--                                            <h4>$45,000.00</h4>--}}
{{--                                        </div>--}}
{{--                                        <ul class="other-option pull-right clearfix">--}}
{{--                                            <li><a href="property-details.html"><i class="icon-12"></i></a></li>--}}
{{--                                            <li><a href="property-details.html"><i class="icon-13"></i></a></li>--}}
{{--                                        </ul>--}}
{{--                                    </div>--}}
{{--                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing sed.</p>--}}
{{--                                    <ul class="more-details clearfix">--}}
{{--                                        <li><i class="icon-14"></i>3 Beds</li>--}}
{{--                                        <li><i class="icon-15"></i>2 Baths</li>--}}
{{--                                        <li><i class="icon-16"></i>600 Sq Ft</li>--}}
{{--                                    </ul>--}}
{{--                                    <div class="btn-box"><a href="property-details.html" class="theme-btn btn-two">See--}}
{{--                                            Details</a></div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-lg-4 col-md-6 col-sm-12 feature-block">--}}
{{--                        <div class="feature-block-one wow fadeInUp animated" data-wow-delay="600ms"--}}
{{--                             data-wow-duration="1500ms">--}}
{{--                            <div class="inner-box">--}}
{{--                                <div class="image-box">--}}
{{--                                    <figure class="image"><img src="assets/images/feature/feature-3.jpg" alt="">--}}
{{--                                    </figure>--}}
{{--                                    <div class="batch"><i class="icon-11"></i></div>--}}
{{--                                    <span class="category">Featured</span>--}}
{{--                                </div>--}}
{{--                                <div class="lower-content">--}}
{{--                                    <div class="author-info clearfix">--}}
{{--                                        <div class="author pull-left">--}}
{{--                                            <figure class="author-thumb"><img src="assets/images/feature/author-3.jpg"--}}
{{--                                                                              alt=""></figure>--}}
{{--                                            <h6>Keira Mel</h6>--}}
{{--                                        </div>--}}
{{--                                        <div class="buy-btn pull-right"><a href="property-details.html">Sold Out</a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="title-text"><h4><a href="property-details.html">Luxury Villa With--}}
{{--                                                Pool</a></h4></div>--}}
{{--                                    <div class="price-box clearfix">--}}
{{--                                        <div class="price-info pull-left">--}}
{{--                                            <h6>Start From</h6>--}}
{{--                                            <h4>$63,000.00</h4>--}}
{{--                                        </div>--}}
{{--                                        <ul class="other-option pull-right clearfix">--}}
{{--                                            <li><a href="property-details.html"><i class="icon-12"></i></a></li>--}}
{{--                                            <li><a href="property-details.html"><i class="icon-13"></i></a></li>--}}
{{--                                        </ul>--}}
{{--                                    </div>--}}
{{--                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing sed.</p>--}}
{{--                                    <ul class="more-details clearfix">--}}
{{--                                        <li><i class="icon-14"></i>3 Beds</li>--}}
{{--                                        <li><i class="icon-15"></i>2 Baths</li>--}}
{{--                                        <li><i class="icon-16"></i>600 Sq Ft</li>--}}
{{--                                    </ul>--}}
{{--                                    <div class="btn-box"><a href="property-details.html" class="theme-btn btn-two">See--}}
{{--                                            Details</a></div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
            </div>
        </div>
    </section>
    <!-- property-details end -->
</x-front-layout>
