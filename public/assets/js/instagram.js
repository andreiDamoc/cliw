//window.Instagram = {
//    /**
//     * Store application settings
//     */
//    config: {},
//
//    BASE_URL: 'https://api.instagram.com/v1',
//
//    init: function( opt ) {
//        opt = opt || {};
//
//        this.config.client_id = opt.client_id;
//    },
//
//    /**
//     * Get a list of popular media.
//     */
//    popular: function( callback ) {
//        var endpoint = this.BASE_URL + '/media/popular?client_id=' + this.config.client_id;
//        this.getJSON( endpoint, callback );
//    },
//
//    /**
//     * Get a list of recently tagged media.
//     */
//    tagsByName: function( name, callback ) {
//        var endpoint = this.BASE_URL + '/tags/' + name + '/media/recent?client_id=' + this.config.client_id;
//        this.getJSON( endpoint, callback );
//    },
//
//    getJSON: function( url, callback ) {
//        $.ajax({
//            type: 'GET',
//            url: url,
//            dataType: 'jsonp',
//            success: function( response ) {
//                if ( typeof callback === 'function' ) callback( response );
//            }
//        });
//    }
//};
//
//Instagram.init({
//    client_id: 'd49da08a520f47cbb6e7618f077f33ef'
//});
//
//
//$( document ).ready(function() {
//
//    Instagram.popular(function( response ) {
//        var $instagram = $( '#instagram' );
//        for ( var i = 0; i < response.data.length; i++ ) {
//            imageUrl = response.data[i].images.low_resolution.url;
//            $instagram.append( '<div class="item" style="margin: 3px;width=60px"><a class="fancybox" href="' + imageUrl + '"> <img style="display:block" width="40px" height= "45   px" width="100px" src="' + imageUrl + '"/> </a></div>' );
//
//
//        }
//        $(".owl-demo").owlCarousel({
//
//            autoPlay: 3000, //Set AutoPlay to 3 seconds
//
//            items: 20,
//            itemsDesktop: [1199, 10],
//            itemsDesktopSmall: [900, 10]
//
//        })
//
//    });
//
//    $( '#form' ).on('submit', function( e ) {
//        e.preventDefault();
//
//        var tagName = $( '#search' ).val();
//        Instagram.tagsByName(tagName, function( response ) {
//            var $instagram = $( '#instagram' );
//            $instagram.html('');
//
//            for ( var i = 0; i < response.data.length; i++ ) {
//                imageUrl = response.data[i].images.low_resolution.url;
//                $instagram.append( '<div class="item" style="margin: 3px"><a class="fancybox" href="' + imageUrl + '"> <img display= "block" height= "50px" width="100px" src="' + imageUrl + '"/> </a></div>' );
//            }
//
//            $.getScript( "http://localhost:8000/assets/js/owl-carousel.js", function( data, textStatus, jqxhr ) {
//                console.log( data ); // Data returned
//                console.log( textStatus ); // Success
//                console.log( jqxhr.status ); // 200
//                console.log( "Load was performed." );
//            });
//        });
//
//    });
//
//});