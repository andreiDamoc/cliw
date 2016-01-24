$(document).ready(function () {


    var map = null;
    var autocomplete = null;

    function initialize() {
        var mapOptions = {
            center: {lat: 47.1584549, lng: 27.601441799999975},
            zoom: 8,
            scrollwheel: false
        };
        map = new google.maps.Map(document.getElementById('map'),
            mapOptions);

        var input = (document.getElementById('geolocation'));

        // Create the autocomplete helper, and associate it with
        // an HTML text input box.
         autocomplete = new google.maps.places.Autocomplete(input);
        autocomplete.bindTo('bounds', map);

        map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

        var infowindow = new google.maps.InfoWindow();
        var marker = new google.maps.Marker({
            map: map
        });
        google.maps.event.addListener(marker, 'click', function () {
            infowindow.open(map, marker);
        });

        // Get the full place details when the user selects a place from the
        // list of suggestions.
        google.maps.event.addListener(autocomplete, 'place_changed', function () {
            infowindow.close();
            var place = autocomplete.getPlace();
            if (!place.geometry) {
                return;
            }
            google.maps.event.trigger(map, 'resize');
            if (place.geometry.viewport) {

                map.fitBounds(place.geometry.viewport);
            } else {
                map.setCenter(place.geometry.location);
                map.setZoom(17);
            }

            // Set the position of the marker using the place ID and location.
            marker.setPlace({
                placeId: place.place_id,
                location: place.geometry.location
            });
            marker.setVisible(true);

            console.log(place.geometry.location.lat());
            console.log(place.geometry.location.lng());

            var cityCircle = new google.maps.Circle({
                center:new google.maps.LatLng(place.geometry.location.lat(), place.geometry.location.lng()),
                radius:900,
                strokeColor:"#0000FF",
                strokeOpacity:0.8,
                strokeWeight:2,
                fillColor:"#0000FF",
                fillOpacity:0.4
            });

            cityCircle.setMap(map);

            infowindow.setContent('<div><strong>' + place.name + '</strong><br>' +
                'Place ID: ' + place.place_id + '<br>' +
                place.formatted_address + '</div>');
            infowindow.open(map, marker);
            ///asa se ia latitudinea si lng
            //alert('nigga this is it ' + place.geometry.location.lat() + place.geometry.location.lat());
        });
    }

// Run the initialize function when the window has finished loading.
    google.maps.event.addDomListener(window, 'load', initialize);

    // Apply the plugin to the element
    $("#noUiSlider").noUiSlider({
        start: 40,
        step: 10,
        connect: "lower",
        range: {
            'min': 0,
            'max': 100,
            '20%': [ 30, 10 ],
            '50%': [ 80, 5 ]
        },
        pips: {
            mode: 'steps',
            density: 2
        }
    });

    $("#search_photos").on('click', function () {

        var lat = '', lng = '';
///aici fac sctii tu.alte intrebari?si afiseaza ceva sau .daori n azi
        if (autocomplete.getPlace() == undefined)
            $('#nothing_select').modal('show');
        else {
            autocomplete = autocomplete.getPlace();
            lat = autocomplete.geometry.location.lat();
            lng = autocomplete.geometry.location.lng();
            $.ajax({
                url: 'https://api.instagram.com/v1/locations/search?client_id=d49da08a520f47cbb6e7618f077f33ef&lat='+lat+'&lng='+lng,
                dataType: "jsonp",
                type: "GET"

            }).done(function (response) {
                response.data.forEach(function(entry) {
                    $.ajax({
                        url: 'https://api.instagram.com/v1/locations/'+entry.id+'/media/recent?client_id=d49da08a520f47cbb6e7618f077f33ef',
                        dataType: "jsonp",
                        type: "GET"

                    }).done(function(response){

                        if(response.data.length >0)
                        console.log(response.data[0].images.standard_resolution.url   );
                    });
                });
                //console.log(response.data[0]);
            }).error(function () {
                alert('Something go wrong ,please try again');
            });
        }
    });
});