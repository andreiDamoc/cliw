/* ============================================================
 * Gallery
 * Showcase your portfolio or even use it for an online store!
 * For DEMO purposes only. Extract what you need.
 * ============================================================ */

$(function() {

    /* GRID
    -------------------------------------------------------------*/

    /* Load widget data */
    var limit = 10;
    var skip = 0;
    var widgetAPI = 'http://localhost:1337/widget?limit=' + limit + '&skip='+skip;
    var $gallery = $('.gallery');

    $gallery.css('visibility','hidden');

    $.getJSON(widgetAPI, function(widgets){

        if(!widgets.length) return;

        var widgetElements = '';

        for(var i in widgets){
            var widget = widgets[i];
            var tagClasses = widget['tags'].join(' ');
            var newItem = '<!-- START GALLERY ITEM --> \
                <div class="gallery-item '+tagClasses+'" data-width="1" data-height="1" data-path="'+widget['path']+'"> \
                    <!-- START PREVIEW --> \
                    <img src="'+widget['thumbnail']+'" alt="" class="image-responsive-height"> \
                    <!-- END PREVIEW --> \
                    <!-- START ITEM OVERLAY DESCRIPTION --> \
                    <div class="overlayer bottom-left full-width"> \
                        <div class="overlayer-wrapper item-info"> \
                            <div class="gradient-grey p-l-20 p-r-20 p-t-20 p-b-5"> \
                                <div class=""> \
                                    <p class="pull-left bold text-white fs-14">'+widget['title']+'</p> \
                                    <p class="pull-right semi-bold"><i class="fa fa-plus"></i></p> \
                                    <div class="clearfix"></div> \
                                </div> \
                            </div> \
                        </div> \
                    </div> \
                    <!-- END PRODUCT OVERLAY DESCRIPTION --> \
                </div> \
                <!-- END GALLERY ITEM -->';
            widgetElements += newItem;
        }

        var allItems = $(widgetElements).appendTo('.gallery');

        applyIsotope();
        $gallery.css('visibility','visible');
        //$('.gallery').isotope('appended', allItems );


    });

    /* 
        Wait for the images to be loaded before applying
        Isotope plugin. 
    */
    // var $gallery = $('.gallery');
    // $gallery.imagesLoaded(function() {
    //     applyIsotope();
    // });

    /*  Apply Isotope plugin 
        isotope.metafizzy.co
    */
    var applyIsotope = function() {
        
        $gallery.isotope({
            itemSelector: '.gallery-item',
            masonry: {
                columnWidth: 280,
                gutter: 10,
                isFitWidth: true
            }
        });
    }

    $('body').on('click', '[data-filter]', function(e){
        e.preventDefault();

        var filter = $(this).data('filter');
        if(filter =='all'){
            $gallery.isotope({ filter: '*' });
            return;
        } 
        $gallery.isotope({ filter: '.'+filter });
    });

     /* DETAIL VIEW
    -------------------------------------------------------------*/

    /*
        Toggle detail view using DialogFx
        http://tympanus.net/Development/DialogEffects/
    */
    $('body').on('click', '.gallery-item', function() {
        var dlg = new DialogFx($('#itemDetails').get(0));
        var path = $(this).data('path');

        $('#itemDetails').find('iframe').attr('src',path);

        dlg.toggle();
    });


});