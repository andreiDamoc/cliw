$(document).ready(function() {
    $(".fancybox").fancybox({
        'transitionIn': 'elastic',
        'transitionOut': 'elastic',
        'speedIn': 600,
        'speedOut': 200,
        'overlayShow': false,
        helpers : {
            thumbs: {
                width   : 50,
                height  : 50,
                position: 'bottom'
            }
        }
    });
});
