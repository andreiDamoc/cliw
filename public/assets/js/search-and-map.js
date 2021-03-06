$(document).ready(function () {

    $(".js-tags").select2({
        tags: true,
        tokenSeparators: [',', ' ']
    });

    toLoadOrNotToLoad();
    instagram_check = 0, flickr_check = 0 , lat = '', lng = '';
    map = null;
    autocomplete = null;


    //map = null;
    var autocomplete = null;

    function initialize() {
        var longitude = localStorage.getItem('lng');
        var latitude  = localStorage.getItem('lat');
        var currentLocation;
        if (latitude != null && longitude != null) {
            currentLocation = new google.maps.LatLng(latitude, longitude);
        }
        else currentLocation = new google.maps.LatLng(47.1584549, 27.601441799999975);

        var mapOptions = {
            center: {
                lat: (localStorage.getItem('lat') != null) ? Number(localStorage.getItem('lat')) : 47.1584549,
                lng: (localStorage.getItem('lng') == null) ? 27.601441799999975 : Number(localStorage.getItem('lng'))
            },
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
            position: currentLocation,
            map: map,
            draggable: true
        });
        google.maps.event.addListener(marker, 'click', function () {
            infowindow.open(map, marker);
        });

        google.maps.event.addListener(marker, 'dragend', function () {
            lat = marker.getPosition().lat();
            lng = marker.getPosition().lng();

            console.log(lat);
            console.log(lng);
        });
        // Get the full place details when the user selects a place from the
        // list of suggestions.
        google.maps.event.addListener( autocomplete,'place_changed', function () {
            marker.setMap(null);
            infowindow.close();
            var place = autocomplete.getPlace();
            if (!place.geometry) {
                return;
            }
            lat = place.geometry.location.lat();
            lng = place.geometry.location.lng();
            google.maps.event.trigger(map, 'resize');
            if (place.geometry.viewport) {

                map.fitBounds(place.geometry.viewport);
            } else {
                map.setCenter(place.geometry.location);
                map.setZoom(17);
            }

            // Set the position of the marker using the place ID and location.
            marker = new google.maps.Marker({
                position: place.geometry.location,
                map: map,
                draggable: true
            });
            marker.setVisible(true);

            google.maps.event.addListener(marker, 'dragend', function () {
                lat = marker.getPosition().lat();
                lng = marker.getPosition().lng();

                console.log(lat);
                console.log(lng);
            });
            
            marker.setVisible(true);
            
            google.maps.event.addListener(marker, 'click', function () {
                infowindow.setContent('<div><strong>' + place.name + '</strong><br>' +
                    place.formatted_address + '</div>');
                infowindow.open(map, marker);
            });
            ///asa se ia latitudinea si lng
            //alert('nigga this is it ' + place.geometry.location.lat() + place.geometry.location.lat());
        });
    }

// Run the initialize function when the window has finished loading.
    google.maps.event.addDomListener(window, 'load', initialize);

    console.log($('.owl-stage-outer'));

    $("#search_photos").on('click', function () {
        poze = [];
        var season_tag = '';
        if ($('#spring').is(':checked')) {
            season_tag = 'spring';
        }
        else if ($('#summer').is(':checked')) {
            season_tag = 'summer';
        }
        else if ($('#winter').is(':checked')) {
            season_tag = 'winter';
        }
        else if ($('#autumn').is(':checked')) {
            season_tag = 'autumn';
        }

        if($('#100km').is(':checked')) {
            rad = 100;
        }
        else if ($('#500km').is(':checked')) {
            rad = 500;
        }
        else if ($('#1000km').is(':checked')) {
            rad = 1000;
        }

        var cityCircle = new google.maps.Circle({
            center:new google.maps.LatLng(lat, lng),
            radius:rad,
            strokeColor:"#0000FF",
            strokeOpacity:0.8,
            strokeWeight:2,
            fillColor:"#0000FF",
            fillOpacity:0.4
        });

        cityCircle.setMap(map);

        ///aici fac sctii tu.alte intrebari?si afiseaza ceva sau .daori n azi
        //var lat = '', lng = '';//gse: vreau astea globale
        if(typeof lat == 'undefined')
            lat = localStorage.getItem('lat');
        if(typeof lng == 'undefined')
            lat = localStorage.getItem('lng');
        if (season_tag != '') {
            $.ajax({
                url: 'https://api.instagram.com/v1/tags/' + season_tag + '/media/recent?client_id=d49da08a520f47cbb6e7618f077f33ef',
                dataType: "jsonp",
                type: "GET"

            }).done(function (response) {
                response.data.forEach(function (entry) {
                    photo_url = entry.images.standard_resolution.url;
                    console.log(photo_url);
                    poze.push(photo_url);
                    var $instagram = $('#jjjj');
                    $instagram.append('<li><a class="fancybox" href="' + photo_url + '"> <img style="display:block" width="40px" height= "45px" width="100px" src="' + photo_url + '"/> </a></li>');

                });
            });
            flicr_url = 'https://api.flickr.com/services/rest/?method=flickr.photos.getRecent&api_key=e113f3a7317277392933dbb91decaf01' +
                '&per_page=10' +
                '&lat=' + lat +
                '&lng=' + lng +
                '&radius=' + rad;
            if ($("#flickr").is(':checked')) {
                $.ajax({
                    url:flicr_url,
                    dataType: "xml",
                    type: "GET"

            }).done(function (response) {
                //console.log(response);
                var photos = response.getElementsByTagName('photo');
                console.log(photos);
                for (var i = 0; i < photos.length; i++) {
                    var farm = photos[i].getAttribute("farm");
                    var server = photos[i].getAttribute("server");
                    var id = photos[i].getAttribute("id");
                    var secret = photos[i].getAttribute("secret");
                    var photo_url = 'https://farm' + farm + '.staticflickr.com/' + server + '/' + id + '_' + secret + '.jpg';
                    poze.push(photo_url);
                    var $instagram = $('#jjjj');
                    $instagram.append('<li><a class="fancybox" href="' + photo_url + '"> <img style="display:block" width="40px" height= "45px" width="100px" src="' + photo_url + '"/> </a></li>');
                }
                $('.jcarousel').jcarousel('reload');
            });
        }
        $('#jjjj').html('');
        var tags = '';
        $('.js-tags').select2('data').forEach(function (entry) {
            tags += entry.id + '+';
            console.log(entry.id);
            $.ajax({
                url: 'https://api.instagram.com/v1/tags/' + entry.id + '/media/recent?client_id=d49da08a520f47cbb6e7618f077f33ef',
                dataType: "jsonp",
                type: "GET"

            }).done(function (response) {
                response.data.forEach(function (entry) {
                    photo_url = entry.images.standard_resolution.url;
                    console.log(photo_url);
                    var $instagram = $('#jjjj');
                    poze.push(photo_url);
                    $instagram.append('<li><a class="fancybox" href="' + photo_url + '"> <img style="display:block" width="40px" height= "45px" width="100px" src="' + photo_url + '"/> </a></li>');

                });
                $('.jcarousel').jcarousel('reload');


            });
            //flickr-start
            var flicr_url = 'https://api.flickr.com/services/rest/?method=flickr.photos.getRecent&api_key=e113f3a7317277392933dbb91decaf01' +
                '&per_page=10' +
                '&tags=' + tags
            $.ajax({
                url: flicr_url,
                dataType: "xml",
                type: "GET"

            }).done(function (response) {
                //console.log(response);
                var photos = response.getElementsByTagName('photo');
                console.log(photos);
                for (var i = 0; i < photos.length; i++) {
                    var farm = photos[i].getAttribute("farm");
                    var server = photos[i].getAttribute("server");
                    var id = photos[i].getAttribute("id");
                    var secret = photos[i].getAttribute("secret");
                    var photo_url = 'https://farm' + farm + '.staticflickr.com/' + server + '/' + id + '_' + secret + '.jpg';
                    poze.push(photo_url);
                    var $instagram = $('#jjjj');
                    $instagram.append('<li><a class="fancybox" href="' + photo_url + '"> <img style="display:block" width="40px" height= "45px" width="100px" src="' + photo_url + '"/> </a></li>');
                }
                $('.jcarousel').jcarousel('reload');

            });
        });

        $('.jcarousel').jcarousel({});

        if (typeof lat == 'undefined')
            lat = localStorage.getItem('lat');
        if (typeof lng == 'undefined')
            lat = localStorage.getItem('lng');

        //    ///flickr-start
        var flicr_url = 'https://api.flickr.com/services/rest/?method=flickr.photos.getRecent&api_key=e113f3a7317277392933dbb91decaf01' +
            '&per_page=10' +
            '&lat=' + lat +
            '&lng=' + lng +
            '&radius=100';
        if (flickr_check == 1) {
            $.ajax({
                url: flicr_url,
                dataType: "xml",
                type: "GET"
            }).done(function (response) {
                //console.log(response);
                var photos = response.getElementsByTagName('photo');
                console.log(photos);
                for (var i = 0; i < photos.length; i++) {
                    var farm = photos[i].getAttribute("farm");
                    var server = photos[i].getAttribute("server");
                    var id = photos[i].getAttribute("id");
                    var secret = photos[i].getAttribute("secret");
                    var photo_url = 'https://farm' + farm + '.staticflickr.com/' + server + '/' + id + '_' + secret + '.jpg';
                    poze.push(photo_url);
                    var $instagram = $('#jjjj');
                    $instagram.append('<li><a class="fancybox" href="' + photo_url + '"> <img style="display:block" width="40px" height= "45px" width="100px" src="' + photo_url + '"/> </a></li>');
                }
                $('.jcarousel').jcarousel('reload');

            });
        }
        if (instagram_check == 1) {
            ///flickr-end
            $.ajax({
                url: 'https://api.instagram.com/v1/locations/search?client_id=d49da08a520f47cbb6e7618f077f33ef&lat=' + lat + '&lng=' + lng,
                dataType: "jsonp",
                type: "GET"
            }).done(function (response) {
                response.data.forEach(function (entry) {
                    $.ajax({
                        url: 'https://api.instagram.com/v1/locations/' + entry.id + '/media/recent?client_id=d49da08a520f47cbb6e7618f077f33ef',
                        dataType: "jsonp",
                        type: "GET"

                    }).done(function (response) {

                        if (response.data.length > 0) {
                            var $instagram = $('#jjjj');
                            poze.push(response.data[0].images.standard_resolution.url);
                            $instagram.append('<li><a class="fancybox" href="' + response.data[0].images.standard_resolution.url + '"> <img style="display:block" width="40px" height= "45px" width="100px" src="' + response.data[0].images.standard_resolution.url + '"/> </a></li>');
                        }
                    });
                });
                $('.jcarousel').jcarousel('reload');
            }).error(function () {
                alert('Something go wrong ,please try again');
            });
        }
        if (lat == '')
            $('#nothing_select').modal('show');
        };
    });
});