"use strict"; // Start of use strict

// 7. google map
function gMap () {
    if ($('.google-map').length) {
        $('.google-map').each(function () {
            // getting options from html
            var mapName = $(this).attr('id');
            var mapLat = $(this).data('map-lat');
            var mapLng = $(this).data('map-lng');
            var iconPath = $(this).data('icon-path');
            var mapZoom = $(this).data('map-zoom');
            var mapTitle = $(this).data('map-title');

            // defined default style
            var styles = [
                    {
                        "featureType": "administrative",
                        "elementType": "labels.text.fill",
                        "stylers": [
                            {
                                "color": "#444444"
                            }
                        ]
                    },
                    // {
                    //     "featureType": "landscape",
                    //     "elementType": "all",
                    //     "stylers": [
                    //         {
                    //             "color": "#c4c4c4"
                    //         }
                    //     ]
                    // },
                    // {
                    //     "featureType": "poi",
                    //     "elementType": "all",
                    //     "stylers": [
                    //         {
                    //             "visibility": "off"
                    //         }
                    //     ]
                    // },
                    // {
                    //     "featureType": "road",
                    //     "elementType": "all",
                    //     "stylers": [
                    //         {
                    //             "saturation": -100
                    //         },
                    //         {
                    //             "lightness": 45
                    //         }
                    //     ]
                    // },
                    // {
                    //     "featureType": "road.highway",
                    //     "elementType": "all",
                    //     "stylers": [
                    //         {
                    //             "visibility": "simplified"
                    //         }
                    //     ]
                    // },
                    // {
                    //     "featureType": "road.arterial",
                    //     "elementType": "labels.icon",
                    //     "stylers": [
                    //         {
                    //             "visibility": "off"
                    //         }
                    //     ]
                    // },
                    // {
                    //     "featureType": "transit",
                    //     "elementType": "all",
                    //     "stylers": [
                    //         {
                    //             "visibility": "off"
                    //         }
                    //     ]
                    // },
                    // {
                    //     "featureType": "water",
                    //     "elementType": "all",
                    //     "stylers": [
                    //         {
                    //             "color": "#f1f1f1"
                    //         },
                    //         {
                    //             "visibility": "on"
                    //         }
                    //     ]
                    // }
                ];


            // if zoom not defined the zoom value will be 15;
            if (!mapZoom) {
                var mapZoom = 11;
            };
            // init map
            var map;
            map = new GMaps({
                div: '#'+mapName,
                scrollwheel: false,
                lat: mapLat,
                lng: mapLng,
                styles: styles,
                zoom: mapZoom
            });
            // if icon path setted then show marker
            if(iconPath) {
                map.addMarker({
                    icon: iconPath,
                    lat: mapLat,
                    lng: mapLng,
                    title: mapTitle
                });
                map.addMarker({
                    icon: iconPath,
                    lat: -16.49113902156423,
                    lng: -68.1202946350607,
                    title: "La Paz"
                });
            }
        });
    };
}



// instance of fuction while Document ready event
jQuery(document).on('ready', function () {
    (function ($) {
        gMap();
    })(jQuery);
});


$(window).on("load", function() {
    "use strict";
    var hd_height = $("header").innerHeight();
    $(".half-map-sec #map-container.fullwidth-home-map").css({
        "top": hd_height
    });
    $(".half-map-sec").css({
        "margin-top": hd_height
    });
});
