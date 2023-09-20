<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/color.css') }}">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" crossorigin="anonymous"></script>
    <script type="text/javascript"
            src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
    <link href="//netdna.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet"/>


</head>

<body class="antialiased">
<div class="container">
    <!-- main app container -->
    <div class="readersack">
        <div class="container">
            <div class="row">
                <div class="col-md-12 ">
                    <div id="map" style='height:400px'></div>

                </div>
            </div>
        </div>
    </div>
    <!-- credits -->
</div>

</body>
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
            const marker = new google.maps.Marker({
                position: new google.maps.LatLng(location.latitude, location.longitude),
                map: map,
            });

            bounds.extend(marker.position);
            markers.push(marker);

            google.maps.event.addListener(marker, "click", (function (marker, location) {
                return function () {
                    infoWindow.setContent(location.name + " & " + location.lowest_price);
                    infoWindow.open(map, marker);
                };
            })(marker, location));
        }

        new MarkerClusterer(map, markers, {
            imagePath: "images/", styles: [{
                textColor: "white", url: "", height: 50, width: 50
            }
            ], minClusterSize: 2
        });
        map.fitBounds(bounds);
    }

</script>


<script src="{{ asset('js/markerclusterer.js') }}"></script>

<script type="text/javascript"
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDAX9rEY00ajicFc0JZbwK4i-3HOQMBV78&callback=initMap"></script>

</html>
