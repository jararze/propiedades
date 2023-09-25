@push('styles')
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/color.css') }}">
    <style>
        .marker {
            position: relative;
            width: 40px;
            height: 40px;
            background-color: #08abc4;
            border-radius: 50%;
            cursor: pointer;
        }

        .marker::before {
            content: "";
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 20px;
            height: 20px;
            background-color: #fff;
            border-radius: 50%;
        }

        .marker:hover {
            background-color: #08abc4;
        }

        .info-window {
            max-width: 300px;
            min-height: 250px;
        }

        .info-window img {
            width: 100%;
            height: auto;
            pposition: absolute;
        }
        .info-window .rate-info{
            display: block;
            position: relative;
            bottom:0;
            background-color: rgba(255,255,255,0.8);
        }

        #map-canvas {
            margin: 0;
            padding: 0;
            height: 400px;
            max-width: none;
        }
        #map-canvas img {
            max-width: none !important;
        }
        .gm-style-iw-d {
            width: 350px !important;
            top: 15px !important;
            left: 0px !important;
            background-color: #fff;
            box-shadow: 0 1px 6px rgba(178, 178, 178, 0.6);
            border: 1px solid rgba(72, 181, 233, 0.6);
            border-radius: 2px 2px 10px 10px;
        }
        #iw-container {
            margin-bottom: 10px;
        }
        #iw-container .iw-title {
            font-size: 22px;
            font-weight: 400;
            padding: 10px;
            background-color: #08abc4;
            color: white;
            margin: 0;
            border-radius: 2px 2px 0 0;
        }
        #iw-container .iw-content {
            font-size: 13px;
            line-height: 18px;
            font-weight: 400;
            margin-right: 1px;
            padding: 15px 5px 20px 15px;
            max-height: 140px;
            overflow-y: auto;
            overflow-x: hidden;
        }
        .iw-content img {
            float: right;
            width: 100%;
            margin: 0 5px 5px 10px;
        }
        .iw-subTitle {
            font-size: 16px;
            font-weight: 700;
            padding: 5px 0;
        }
        .iw-bottom-gradient {
            position: absolute;
            width: 326px;
            height: 25px;
            bottom: 10px;
            right: 18px;
            background: linear-gradient(to bottom, rgba(255,255,255,0) 0%, rgba(255,255,255,1) 100%);
            background: -webkit-linear-gradient(top, rgba(255,255,255,0) 0%, rgba(255,255,255,1) 100%);
            background: -moz-linear-gradient(top, rgba(255,255,255,0) 0%, rgba(255,255,255,1) 100%);
            background: -ms-linear-gradient(top, rgba(255,255,255,0) 0%, rgba(255,255,255,1) 100%);
        }
    </style>
@endpush
@push('script')

{{--    <script src="{{ asset('js/infobox.min.js') }}"></script>--}}
    <script src="{{ asset('js/markerclusterer.js') }}"></script>
    <script src="{{ asset('js/ajax.js') }}"></script>


    <script type="text/javascript">
        function initMap() {

            const locations = <?php echo json_encode($locations) ?>;
            const map = new google.maps.Map(document.getElementById("map"), {
                zoom: 3,
                scrollwheel: true,
                center: {lat: -16.505749299757916, lng: -68.11958248614235},
                mapTypeId: "roadmap",
                zoomControl: false,
                mapTypeControl: false,
                scaleControl: false,
                panControl: false,
                navigationControl: false,
                streetViewControl: false,
                gestureHandling: "cooperative",
                styles: [{
                    featureType: "water",
                    elementType: "geometry",
                    stylers: [{/* color: "#e9e9e9" */}, {lightness: 17}]
                }, {
                    featureType: "landscape",
                    elementType: "geometry",
                    stylers: [{/* color: "#f5f5f5" */}, {lightness: 20}]
                }, {
                    featureType: "road.highway",
                    elementType: "geometry.fill",
                    stylers: [{/* color: "#ffffff" */}, {lightness: 17}]
                }, {
                    featureType: "road.highway",
                    elementType: "geometry.stroke",
                    stylers: [{/* color: "#ffffff" */}, {lightness: 29}, {weight: .2}]
                }, {
                    featureType: "road.arterial",
                    elementType: "geometry",
                    stylers: [{/* color: "#ffffff" */}, {lightness: 18}]
                }, {
                    featureType: "road.local",
                    elementType: "geometry",
                    stylers: [{/* color: "#ffffff" */}, {lightness: 16}]
                }, {
                    featureType: "poi",
                    elementType: "geometry",
                    stylers: [{/* color: "#f5f5f5" */}, {lightness: 21}]
                }, {
                    featureType: "poi.park",
                    elementType: "geometry",
                    stylers: [{/* color: "#dedede" */}, {lightness: 21}]
                }, {
                    elementType: "labels.text.stroke",
                    stylers: [{visibility: "on"}, {/* color: "#ffffff" */}, {lightness: 16}]
                }, {
                    elementType: "labels.text.fill",
                    stylers: [{saturation: 36}, {/* color: "#333333" */}, {lightness: 40}]
                }, {elementType: "labels.icon", stylers: [{visibility: "off"}]}, {
                    featureType: "transit",
                    elementType: "geometry",
                    stylers: [{/* color: "#f2f2f2" */}, {lightness: 19}]
                }, {
                    featureType: "administrative",
                    elementType: "geometry.fill",
                    stylers: [{/* color: "#fefefe" */}, {lightness: 20}]
                }, {
                    featureType: "administrative",
                    elementType: "geometry.stroke",
                    stylers: [{/* color: "#fefefe" */}, {lightness: 17}, {weight: 1.2}]
                }]
            });
            const infoWindow = new google.maps.InfoWindow();
            const bounds = new google.maps.LatLngBounds();
            const markers = []; // Create an array to store the markers

            for (const location of locations) {
                // console.log(location)
                // alert(location.latitude);
                // alert(parseFloat(location.latitude) + parseFloat(0.0002));
                const latitudeFinal = parseFloat(location.latitude) - parseFloat(0.0003);
                const longitudeFinal = parseFloat(location.longitude) - parseFloat(0.0003);
                const marker = new google.maps.Marker({

                    // position: new google.maps.LatLng(location.latitude, location.longitude),
                    position: new google.maps.LatLng(latitudeFinal, longitudeFinal),
                    map: map,
                    icon: {
                        url: "data:image/svg+xml;charset=UTF-8," + encodeURIComponent('<svg width="800px" height="800px" viewBox="0 -0.5 17 17" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="si-glyph si-glyph-house">  <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g transform="translate(1.000000, 1.000000)" fill="#434343"> <path d="M15.794,7.77 L11.984,3.864 L11.9839997,1.01706251 L11.0159997,1.03906251 L11.016,2.767 L8.502,0.245 C8.224,-0.031 7.776,-0.031 7.499,0.245 L0.206,7.771 C-0.069,8.048 -0.068,8.498 0.206,8.773 C0.482,9.049 0.933,9.049 1.209,8.772 L8,1.982 L14.793,8.772 C14.931,8.91 15.111,8.98 15.293,8.98 C15.474,8.98 15.654,8.912 15.794,8.773 C16.068,8.496 16.068,8.045 15.794,7.77 L15.794,7.77 Z" class="si-glyph-fill"> </path> <path d="M3.043,8.532 L3.043,14.222 C3.043,14.616 3.26102394,15.0078125 3.61002394,15.0078125 L5.88702394,15.0078125 L5.95099996,11.0147705 L10.0249632,11.0147705 L10.0230128,15.0078125 L12.3260496,15.0078125 C12.6750496,15.0078125 12.958,14.617 12.958,14.222 L12.958,8.531 L8,3.625 L3.043,8.532 L3.043,8.532 Z" class="si-glyph-fill"> </path> </g> </g> </svg>'),
                        scaledSize: new google.maps.Size(30, 30),
                    },
                });

                bounds.extend(marker.position);
                markers.push(marker);

                const content = `<div id="iw-container">
                <a href="/properties/inner/${location.id}">
                    <div class="iw-title">${location.name}</div>
                    <img src="upload/properties/${location.code}/${location.thumbnail}" alt="">
                </a>
                <div class="iw-content">
                    <div class="iw-subTitle">${location.property_status}</div>
                    <h5>${location.max_price} ${location.currency}</h5>
                    <p>${location.short_description}</p>
                </div>
                <div class="iw-bottom-gradient"></div>
            </div>`;

                const circle = new google.maps.Circle({
                    strokeColor: "#08abc4",
                    strokeOpacity: 0.8,
                    strokeWeight: 2,
                    fillColor: "#08abc4",
                    fillOpacity: 0.35,
                    map: map,
                    center: marker.getPosition(),
                    radius: 150,
                });

                google.maps.event.addListener(marker, "click", (function (marker, location) {
                    return function () {
                        infoWindow.setContent(content);
                        infoWindow.open(map, marker);
                    };
                })(marker, location));
            }

            new MarkerClusterer(map, markers, {
                imagePath: "https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/m",
                gridSize: 60,
                styles: [{
                    textColor: "white",
                    url: "",
                    height: 50,
                    width: 50
                }],
                minClusterSize: 2
            });
            map.fitBounds(bounds);
        }

    </script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDAX9rEY00ajicFc0JZbwK4i-3HOQMBV78&callback=initMap"></script>
@endpush

<x-front-layout>
    @include('frontend.components.banner')

    @include('frontend.components.map')

    @include('frontend.components.category')

    @include('frontend.components.feature')

    @include('frontend.components.video')

    @include('frontend.components.deals')

    @include('frontend.components.testimonial')

    @include('frontend.components.chooseus')

    {{--    @include('frontend.components.place')--}}

    @include('frontend.components.team')

    @include('frontend.components.cta')

    {{--    @include('frontend.components.news')--}}

    @include('frontend.components.download')

</x-front-layout>
